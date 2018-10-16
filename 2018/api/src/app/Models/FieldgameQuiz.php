<?php
namespace MopConApi2018\App\Models;

use \Illuminate\Database\Eloquent\Model;

class FieldgameQuiz extends Model
{
    protected $table = 'filegame_quizzes';
    protected $primaryKey = 'quiz_id';
    protected $casts = [
        'choices' => 'array',
    ];

    public function isCorrectAnswer($answer)
    {
        return $answer == $this->answer;
    }

    public function isActive($now = null)
    {
        $nowstamp = $now ?: strtotime('now');
        return strtotime($this->started_at) <= $nowstamp && $nowstamp <= strtotime($this->expired_at);
    }

    public function toApiFormat($user_quiz_progress = null)
    {
        $status = 0;
        if ($this->isActive() && $user_quiz_progress) {
            $status = 1;
            if (isset($user_quiz_progress[$this->quiz_id])) {
                $status = -1;
                if (isset($user_quiz_progress[$this->quiz_id]['state']) && $user_quiz_progress[$this->quiz_id]['state']) {
                    $status = 2;
                }
            }
        }

        $data = [
            'id' => $this->quiz_id . 'q',
            'type' => 'quiz',
            'title' => $this->quiz,
            'description' => null,
            'banner_url' => null,
            'quiz' => $this->quiz,
            'options' => $this->choices,
            'answer' => $this->answer,
            /////////////////////////////////////////////////// 這個麻煩，稍後處理; 活動挑戰時間 優先於 挑戰進展
            'status' => $status,
            'unlock_time' => strtotime($this->started_at)
        ];

        if ($status == 0) {
            unset($data['quiz']);
            unset($data['options']);
            unset($data['answer']);
        }

        return $data;
    }
}
