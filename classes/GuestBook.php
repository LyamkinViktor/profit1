<?php

require_once __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    public $path;
    protected $data = [];

    /**
     * GuestBook constructor.
     */
    public function __construct()
    {
        $this->path = __DIR__ . '/../guestBookData.txt';
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            $this->data[] = new GuestBookRecord($line);
        }
    }

    /**
     * @return array
     */
    public function getRecords() {

        return $this->data;
    }

    /**
     * @param GuestBookRecord $record
     * @return $this
     */
    public function append(GuestBookRecord $record)
    {
        $this->data[] = $record;
        return $this;
    }

    /**
     * Сохраняет сообщение в бд
     */
    public function save()
    {
        $lines = [];
        foreach ($this->data as $record) {
            $lines[] = $record->getMessage();
        }
        file_put_contents($this->path, implode("\n", $lines));
    }
}