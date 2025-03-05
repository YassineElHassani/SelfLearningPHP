<?php


// Algo Challenge 01
$arr = [1, 5, 8, 9, 11, 4, 8, 8];
$count = 0;
$sum = 0;

for($i = 0; $i < count($arr); $i++) {
    $count++;
    $sum += $arr[$i];    
}

$avg = $sum / $count;


// Algo Challenge 02
$arr = [1, 5, 8, 9, 11, 4, 8, 8];
$num = 8;
$count = 0;

for($i = 0; $i < count($arr); $i++) {

    if ($arr[$i] == $mun) {
        $count++;
    }
}

echo $count;


// Algo Challenge 03
$arr = [15, 2, 85, 6, 9];
$max = 0;

for($i = 0; $i < count($arr); $i++) {
    if($arr[$i] > $max) {
        $max = $arr[$i];
    }
}

echo $max;


// Algo Challenge 04
$arr = [15, 6, 8, 82, 4];
$max = 0;
$secMax = 0;

for($i = 0; $i < count($arr); $i++) {
    if($arr[$i] > $max) {
        $max = $arr[$i];
    }
}

for($i = 0; $i < count($arr); $i++) {
    if($arr[$i] > $secMax) {
        if($secMax < $max) {
            $secMax = $arr[$i];
        }
    }
}

echo $max;
echo $secMax;




// OOP Challenge
class Job {
    private $job_name;
    
    public function __construct($job_name) {
        $this->job_name = $job_name;
    }

    public function getJob() {
        return $this->job_name;
    }
}


class Employe {
    private $name;
    public $jobs = [];

    public function __construct($name) {
        $this->name = $name;
        $this->jobs = [];
    }

    public function addJob($job) {
        array_push($this->jobs, $job);
    }

    public function editJob($job) {
        array_replace($this->jobs, $job);
    }

    public function deleteJob($job) {
        array_splice($this->jobs, $job);
    }

    

}

$job = new Job("Taxi Driver");
$job1 = new Job("Sec Job");

$employ = new Employe("Yassine");
$employ->addJob($job);
$employ->addJob($job1);

print_r($employ);


?>