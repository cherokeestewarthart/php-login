<?
$username="root";
$password="x";
$database="x";

$first=$_POST['first'];
$last=$_POST['last'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$web=$_POST['web'];
mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO contacts VALUES ('','$first','$last','$phone','$mobile','$fax','$email','$web')";
mysql_query($query);
$query="SELECT * FROM contacts";
$result=mysql_query($query);
echo($result);
mysql_close();
?>
