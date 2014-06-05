<?php require_once("employee.php");
require_once("hourlyemployee.php");
?>
<html>
    <head>
        <style>
            .employee{
                font-family: comic-sans;
                border-bottom: #aaa 2px dashed;
            }
            .employee h1{
                font-size: 16px;
            } 
            .employee h3{
                font-size: 14px;
                font-weight: normal;
            } 
        </style>
    </head>
    <body>
        <?php
            $employees = array();
            $employees[] = new Employee("Rob", "Turner", "cEO", 541864181314); 
            $employees[] = new Employee("Fred", "Flintstone", "rock crusher", 24600);
            $employees[] = $roger = new HourlyEmployee("Roger", "Rabbit", "eccentric cartoon character", 4.5);
            foreach($employees as $employee)
            {
        ?>
        <div class="employee">
            <h1><?php echo $employee->title; ?></h1>
            <h3><?php echo $employee->fullName; ?></h3>
            <p><?php echo $employee->salaryString; ?></p>
        </div>
        <?php
            }
            $roger->clockIn();
            sleep(5);
            $roger->clockOut();
            echo "$roger->fullName just made $roger->wage";
        ?>
    </body>
</html>