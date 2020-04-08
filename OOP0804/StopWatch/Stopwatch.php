<?php


class Stopwatch
{
    private $startTime;
    private $endTime;

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getStopTime()
    {
        return $this->endTime;
    }

    public function startTime()
    {
        $this->startTime = date('H:i:s');
        return $this->startTime;
    }

    public function stopTime()
    {
        $this->endTime = date('H:i:s');
        return $this->endTime;
    }

    public function getElapsedTime()
    {
        return strtotime($this->endTime) - strtotime($this->startTime);
    }
}