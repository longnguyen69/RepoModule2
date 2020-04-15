<?php


class Group
{
    public $pathFile;
    public $nameGroup;

    public function __construct($pathFile,$nameGroup)
    {
        $this->pathFile = $pathFile;
        $this->nameGroup = $nameGroup;
    }
}