
<?php
if(isset($_POST["submit"])){
$name = $_POST["name"];
$lastname = $_POST["ln"];
$contact = $_POST['m'];
$email = $_POST['email'];
}
echo "thank you ".$name." ".$lastname."<br/>"; 
echo "you have submitted the following details:<br />";
echo "mobile number:".$contact."<br/>";
echo "email id:".$email;
?>