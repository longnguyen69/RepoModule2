<?php


class FilePrinter extends Printer
{
    public $filePath;
    public function __construct($name, $filePath)
    {
        parent::__construct($name);
        $this->filePath = $filePath;
    }

    function makePrint($mess)
    {
        //mo file
        $file = fopen($this->filePath, "w+");
        //ghi noi dung
        fwrite($file, $mess);
        //dong file
        fclose($file);
    }
}