<?php
namespace MopConApi2018\App\Models;

use \Illuminate\Database\Eloquent\Model;

class FieldgameBoothMission extends Model
{
    protected $table = 'filegame_booth_missions';
    protected $primaryKey = 'mission_id';

    public function isCorrectPasswd($passwd)
    {
        return $passwd == $this->passwd;
    }
}
