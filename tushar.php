
<?php
$servername = "localhost:3306";
$username = "jacquard6324";
$password = "RlenxF@Kse2&lCo0";
$dbname = "jacquard_register";
$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$state=$_POST["state"];
$city=$_POST["city"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO form (f_name, l_name, email, phone, state, city)
VALUES ('$f_name', '$l_name', '$email', '$phone', '$state', '$city');";

$to = "tusharjuneja7711@gmail.com, junejavikram2007@gmail.com";
$subject = "New Submission";
$body = "Name \t\t=> $f_name $l_name \n\nEmail\t \t => $email \n\nPhone no     => $phone \n\nState \t \t => $state \n\nCity \t \t  => $city";
mail($to, $subject, $body);
$conn->close();
echo '<font size="50px"><b><i>Form Sent Successfully!!</i></b></font>';
echo '<meta http-equiv="refresh" content="1; URL=http://jacquardtraining.com/#contact">';

//echo '<script>window.location="index.html"</script>';
?>