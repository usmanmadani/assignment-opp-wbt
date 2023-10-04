<?php

if(isset($_POST['submit'])){

    if(isset($_POST['fullname']) && !empty(($_POST['fullname']))){
        $fullname = $_POST['fullname'];
    }

    if(isset($_POST['reason']) && !empty(($_POST['reason']))){
        $reason = $_POST['reason'];
    }
    if(isset($_POST['start']) && !empty(($_POST['start']))){
        $start= $_POST['start'];
    }
    if(isset($_POST['end']) && !empty(($_POST['end']))){
        $end = $_POST['end'];
    }
    


$studentdata = file_get_contents ('leave.json');
$datalist = json_decode($studentdata); 
$profile=array(
    'id'=>count ($datalist),
    'fullname'=>$fullname,
    'reason'=>$reason,
    'start'=>$start,
    'end'=>$end,
);

array_push($datalist, $profile);
$en_datalist = json_encode($datalist);

file_put_contents ('leave.json', $en_datalist);


echo "Information successfully submitted";



}

?>
