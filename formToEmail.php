<?php
//if(!isset($_POST['submit']))
//{
//    echo "error; you need to submit the form!";
//}
//$condition = $_POST['condition'];
//$iPhoneVersion = $_POST['iPhoneVersion'];
//$carrier = $_POST['carrier'];
//$color = $_POST['color'];
//$capacity = $_POST['capacity'];
//$email = $_POST['email'];
//if(empty($email)) {
//    echo "Email is mandatory";
//    exit;
//}
//$email_from = 'mcortez121@gmail.com';
//$email_subject = 'New Form Submission';
//$email_body = 'You have recieved a new message form $email. \n Phone info\n Condtion: $condition\n iPhoneVersion: $iPhoneVersion\n Carrier: $carrier\n Color: $color\n Capacity: $capacity';
//$to = 'mcortez121@gmail.com';
//$headers = 'From: $email_from \r\n';
//mail('$to', '$email_subject', '$email_body','$headers');
$path = 'data.txt';
if (isset($_POST['email'])) {
    $fh = fopen($path, "a+");
    $string = "New Entry\r\nCondition: " . $_POST['condition'] . "\r\nsize: " . $_POST['size'] . "\r\ngender: " . $_POST['gender'] . "\r\nColor: " . $_POST['color'] . "\r\nshoeName: " . $_POST['shoeName'] . "\r\nUser Email: " . $_POST['email'] . "\r\n\r\n";
    fwrite($fh, $string);
    fclose($fh);
}
header('Location: index.html');
exit;

?>