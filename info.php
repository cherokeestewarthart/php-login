<?php
$user="root";
$password="Cast7371";
$database="test";
mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="CREATE TABLE contacts (id int(6) NOT NULL auto_increment,first varchar(15) NOT NULL,last varchar(15) NOT NULL,phone varchar(20) NOT NULL,mobile varchar(20) NOT NULL,fax varchar(20) NOT NULL,email varchar(30) NOT NULL,web varchar(30) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
mysql_query($query);
mysql_close();
mysql_connect("localhost",$user,$password);
mysql_close();
@mysql_select_db($database) or die( "Unable to select database");
mysql_query($query);
$query = "INSERT INTO contacts VALUES ('','John','Smith','01234 567890','00112 334455','01234 567891','johnsmith@gowansnet.com','http://www.gowansnet.com')";
echo mysql_query($query);
mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO contacts VALUES ('','$first','$last','$phone','$mobile','$fax','$email','$web')";
mysql_query($query);
$query="SELECT * FROM contacts";
$result=mysql_query($query);
echo($result);
mysql_close();
?>
<form action="insert.php" method="post">
First Name: <input type="text" name="first"><br>
Last Name: <input type="text" name="last"><br>
Phone: <input type="text" name="phone"><br>
Mobile: <input type="text" name="mobile"><br>
Fax: <input type="text" name="fax"><br>
E-mail: <input type="text" name="email"><br>
Web: <input type="text" name="web"><br>
<input type="Submit">
</form>
