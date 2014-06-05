<?php

class Employee
{
    private $_firstName;
    private $_lastName;
    private $_title;
    private $_salary;
    
    public function Employee($firstName, $lastName, $title = "TBD", $salary = 900)
    {
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->title = $title;
        $this->salary = $salary;
    }
    
    public function getFullName()
    {
        $ret = $this->_firstName . " " . $this->_lastName;
        return $ret;
    }
    
    public function setTitle($title)
    {
        $this->_title = ucwords($title);
    }
    
    public function getTitle()
    {
        return $this->_title;
    }
    
    public function setSalary($amount)
    {
        $this->_salary = $amount;
    }
    
    public function getSalary()
    {
        return $this->_salary;
    }
    
    public function getSalaryString()
    {
        return number_format($this->_salary, 2);
    }
    
    public function __set($var, $val)
    {
        $functionName = "set".ucfirst($var);
        if(method_exists($this, $functionName))
        {
            $this->$functionName($val);
        }
    }
    
    public function __get($var)
    {
        $functionName = "get".ucfirst($var);
        if(method_exists($this, $functionName))
        {
            return $this->$functionName();
        }
    }
    
    
    
    
    
}