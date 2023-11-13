<?
$size=$_POST['size'];
$cut=$_POST['cut'];
$collar=$_POST['collar'];
$material=$_POST['material'];
$print=$_POST['print'];
$quantity=$_POST['quantity'];
$color=$_POST['color'];
$file=$_POST['file'];
$message=$_POST['message'];
$body .= "Size: " . $size . "\n";
$body .= "Cut: " . $cut . "\n";
$body .= "Collor: " . $collar . "\n";
$body .= "Material: " . $material . "\n";
$body .= "Print: " . $print . "\n";
$body .= "Quantity: " . $quantity . "\n";
$body .= "Color: " . $color . "\n";
$body .= "File: " . $file . "\n";
$body .= "Message: " . $message . "\n";
//replace with your email
mail("mgcustomprints@gmail.com","MG Custom Print Quote Request",$body);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Your quote request has been sent. Thank You! (^_^)");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html">
</head>
