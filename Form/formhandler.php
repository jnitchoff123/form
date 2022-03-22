<?php


//We have to define our variables

$name='';
$email='';
$payment='';
$wines='';
$regions='';
$comments='';

$nameErr='';
$emailErr='';
$paymentErr='';
$winesErr='';
$regionsErr='';
$commentsErr='';

// do you remember when we sued the method of POST?

// if the request server method equals to post...then do something

if($_SERVER['REQUEST_METHOD'] == 'POST')  {
// now we are making sure that all the fields are not empty, so.. IF THEY ARE NOT EMPTY, we are going to do something!!!    
    
 if(empty($_POST['name'])) {
     
     $nameErr='Please fill out your name';
 } else {
     $name = $_POST['name'];
 }   
    
  if(empty($_POST['email'])) {
     
     $emailErr='Please fill out your email';
 } else {
     $email = $_POST['email'];
 }     
    
    
  if(empty($_POST['payment'])) {
     
     $paymentErr='Please check your payment option';
 } else {
     $payment = $_POST['payment'];
 }
    
if(empty($_POST['wines'])) {
     
     $winesErr='What, no wines??';
 } else {
     $wines = $_POST['wines'];
 }     
    
 if(($_POST['regions']== 'NULL')) {
     
    $regionsErr='Please select a region';
 } else {
     $regions = $_POST['regions'];
 }        
    
    
  if(empty($_POST['comments'])) {
     
     $commentsErr='Please share your thoughts';
 } else {
     $comments = $_POST['comments'];
 }    
    
    
    
function myWines() {
    $myReturn='';
  if(!empty)($_POST['wines'])) {
      $myReturn =implode(',',$_POST['wines']);
      return $myReturn;
  }  
       
} //end function
    
 // is everything set - and if it is we are going to prepare the email
    
    
if(isset($_POST['name'],
        $_POST['name'],
        $_POST['email'],
        $_POST['payment'],
        $_POST['wines'],         
        $_POST['regions'], 
        $_POST['comments'],    
   ))    {
    
 $to='jnitchoff@gmail.com';
$subject ='test email'; $body =''.$name'has filled out your form '.PHP_EOL.'';  
    
 $body .=''.$payment' '.PHP_EOL.'';   
    
  $body .=''.$myWines()' '.PHP_EOL.'';     
    
 $body .=''.$comments' '.PHP_EOL.'';   
    
    
$headers =array (
'From' => 'no-reply@Tombololabs-wp10.me',
'Reply-to' => ''.$email.''

mail($to, $body, $subject);
    header('location:thx.html');

);    
    
} // close isset
    
    
} //end servor request