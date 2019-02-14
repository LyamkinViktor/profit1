<?php

class Gallery
{
    public $path;

    /**
     * Gallery constructor.
     */
    public function __construct()
    {
        $this->path = __DIR__ . '/../img';
    }

    /**
     * @return array
     */
    public function getPictures()
    {
        return scandir($this->path);
    }
}