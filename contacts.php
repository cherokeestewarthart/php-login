<?php

$username="root";
$password="x";
$database="x";

$connection = mysqli_connect("127.0.0.1", $username, $password) or die("Unable to connect");
$query="SELECT * FROM test.contacts";
$result=mysqli_query($connection, $query);

mysqli_close($connection);
$output = "<b><center>Database Output</center></b></br></br>";

$i=0;
while($row = mysqli_fetch_assoc($result)) {
    $first=$row["first"];
    $last=$row["last"];
    $phone=$row["phone"];
    $mobile=$row["mobile"];
    $fax=$row["fax"];
    $email=$row["email"];
    $web=$row["web"];

    $output= "<b>".$first." ".$last."</b><br>Phone: ".$phone."<br>Mobile: ".$mobile."<br>Fax: ".$fax."<br>E-mail: ".$email."<br>Web: ".$web."<br><hr><br>";
    $i++;
}
print $output;
?>
