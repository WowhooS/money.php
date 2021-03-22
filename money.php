<?php


$sessionId=$_POST['sessionId'];
$serviceCode=$_POST['serviceCode'];
$phoneNumber=$_POST['phoneNumber'];
$text=$_POST['text'];

if($text=="")
{
    //if text is null;
$response ="CON what do you want to check \n";
$response .="1. my account \n";
$response .="2. my phone number";
}
else if($text=="1")
{
    //business logic for the first level response
    $response="CON choose account information to view \n";
    $response .="1. Account Number\n";
    $response .="2. Account balance";
}
else if($text=="2")
{
    //business logic for the first level response
    //this is the terestrial request.
    $response ="END your phone number is".$phoneNumber;
}
else if($text="1*1")
{
    //secnd level business logic
    $accountNumber="ACCNO 001";
    $response="END your account number is".$accountNumber;
}
else if($text="1*2")
{
    $balance="kes 10000";
    $response="END your balance is ".$balance;
}

header('content-type: text/plain');
echo $response;
?>