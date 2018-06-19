<?php
namespace MopCon2018\Utils;

class GoogleDocsSpreadsheet
{
    private $key;
    private $uri;
    private $raw;
    private $rawObj;
    private $data;
    private $rows;

    public function __construct($key, $columns = [])
    {
        $this->key = $key;
        $this->uri = 'https://spreadsheets.google.com/feeds/list/' . $this->key . '/od6/public/values?alt=json';
        $this->raw = file_get_contents($this->uri);
        $this->rawObj = json_decode($this->raw);
        $this->rows = $this->rawObj->feed->entry;
        $this->columns = $columns;
        $this->getBody();
    }

    public function toArray()
    {
        return $this->data;
    }

    public function toJSON()
    {
        return json_encode($this->data);
    }

    private function getBody()
    {
        foreach ($this->rows as $row) {
            $tmp = [];
            foreach ($this->columns as $aliasName => $columnName) {
                $tmp[$aliasName] = $row->{'gsx$' . $columnName}->{'$t'};
            }
            $this->data[] = $tmp;
        }
    }
}
