<?php

if(isset($_POST['submit'])){

    if(isset($_POST['FullName']) && !empty(($_POST['FullName']))){
        $FullName= $_POST['FullName'];
    
    }
    
    if(isset($_POST['Course/Semester']) && !empty(($_POST['Course/Semester']))){
        $CourseSemester= $_POST['Course/Semester'];
    }
    
    if(isset($_POST['Admission_Number']) && !empty(($_POST['Admission_Number']))){  
        $Admission_Number= $_POST['Admission_Number'];
    }
    
    if(isset($_POST['complainant']) && !empty(($_POST['complainant']))){
        $complainant= $_POST['complainant'];
    }
    
    if(isset($_POST['date']) && !empty(($_POST['date']))){
        $date= $_POST['date'];
    }
    
    if(isset($_POST['details']) && !empty(($_POST['details']))){
        $details=  $_POST['details'];

        echo "submit";
        
    }


$studentdata = file_get_contents ('student.json');
$datalist = json_decode($studentdata); 
$profile=array(
    'FullName'=>$FullName, 
    'CourseSemester'=>$CourseSemester,
    'Admission_Number'=>$Admission_Number,
    'complainant'=>$complainant,
    'date'=>$date,
    'details'=>$details,
    
);

array_push($datalist, $profile);
$en_datalist = json_encode($datalist);

file_put_contents ('student.json', $en_datalist);


echo "Information successfully submitted";



}

?>