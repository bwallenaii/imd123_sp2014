<?php

require_once("employee.php");

class HourlyEmployee extends Employee
{
    const HOURS_PER_YEAR = 1920;
    private $_hourly;
    private $inTime = 0;
    private $outTime = 0;
    
    public function setSalary($amount)
    {
        $this->_hourly = $amount;
        parent::setSalary($amount * self::HOURS_PER_YEAR);
    }
    
    public function clockIn()
    {
        $this->inTime = time();
    }
    
    public function clockOut()
    {
        $this->outTime = time();
    }
    
    public function getWage()
    {
        if($this->inTime > 0 && $this->outTime > 0 && $this->outTime > $this->inTime)
        {
            $diff = $this->outTime - $this->inTime;
            $amount = $diff * $this->_hourly;
            return number_format($amount, 2);
        }
        return "NOTHING";
    }
}