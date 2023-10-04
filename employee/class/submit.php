<?php

if(isset($_POST['submit'])){

    if(isset($_POST['firstName']) && !empty(($_POST['firstName']))){
        $firstname = $_POST['firstName'];
    }

    if(isset($_POST['lastName']) && !empty(($_POST['lastName']))){
        $lastname = $_POST['lastName'];
    }
    if(isset($_POST['address']) && !empty(($_POST['address']))){
        $address= $_POST['address'];
    }
    if(isset($_POST['department']) && !empty(($_POST['department']))){
        $department = $_POST['department'];
    }
    
    if(isset($_POST['gender']) && !empty(($_POST['gender']))){  
        $gender = $_POST['gender'];
    }
    
    if(isset($_POST['degree']) && !empty(($_POST['degree']))){
        $degree = $_POST['degree'];
    }
    
    if(isset($_POST['salary']) && !empty(($_POST['salary']))){
        $salary = $_POST['salary'];
    }
    
    if(isset($_POST['nin']) && !empty(($_POST['nin']))){
        $nin = $_POST['nin'];
    }

    if(isset($_POST['file']) && !empty(($_POST['file']))){
        $file = $_POST['file'];
    }

    if(isset($_POST['email']) && !empty(($_POST['email']))){
        $email = $_POST['email'];
    }

    if(isset($_POST['contact']) && !empty(($_POST['contact']))){
        $contact = $_POST['contact'];
    }


    if(isset($_POST['birthday']) && !empty(($_POST['birthday']))){
        $birthday  =  $_POST['birthday'];

       
        
    }


$employeedata = file_get_contents ('emp.json');
$datalist = json_decode($employeedata); 
$profile=array(
    'id'=>count ($datalist),
    'firstName'=>$firstname,
    'lastName'=>$lastname,
    'email'=>$email,
    'department'=>$department,
    'address'=>$address,
    'degree'=>$degree,
    'birthday'=>$birthday,
    'nin'=>$nin,
    'gender'=>$gender,
    'file'=>$file,
    'contact'=>$contact,
    'salary'=>$salary,
);

array_push($datalist, $profile);
$en_datalist = json_encode($datalist);

file_put_contents ('emp.json', $en_datalist);

echo "<script>
alert('information submitted');

window.location = '../addemp.html'
</script>";

}



?>