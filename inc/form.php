<?php
// التسجيل في قاعدة البيانات
error_reporting(0);
$firstName =  $_POST['firstName'];
$lastName =   $_POST['lastName'];
$email =      $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if (isset($_POST['submit'])) {



    // خطأ الإسم الأول
    if(empty($firstName)){
        $errors['firstNameError'] = 'يرجى إدخال الإسم الأول';
    }

    // خطأ الإسم الأخير
    if(empty($lastName)){
        $errors['lastNameError'] = 'يرجى إدخال الإسم الأخير';
    }

    // خطأ الإيميل
    if(empty($email)){
        $errors['emailError'] = 'يرجى إدخال البريد الإلكتروني';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'يرجى إدخال بريد صحيح'; 
    }
    
    // تحقق من الأخطاء
    if(!array_filter($errors)){
        $firstName =  mysqli_real_escape_string($conn , $_POST['firstName']);
        $lastName =   mysqli_real_escape_string($conn , $_POST['lastName']);
        $email =      mysqli_real_escape_string($conn , $_POST['email']);

        $sql = "INSERT INTO users(firstName, lastName, email)
            VALUES ('$firstName', '$lastName', '$email')";

    if(mysqli_query($conn, $sql)){
             header('Location: ' . $_SERVER['PHP_SELF']);
        }else{
             echo 'Error' . mysqli_error($conn);
        }
    }
}