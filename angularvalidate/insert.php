<?php 
$data = json_decode(file_get_contents("php://input"));
$user.name = mysql_real_escape_string($data->user.name);
$user.email = mysql_real_escape_string($data->user.email);
$user.username = mysql_real_escape_string($data->user.username);
$user.mobile = mysql_real_escape_string($data->user.mobile);
$user.country = mysql_real_escape_string($data->user.country.mobile);
$user.gender = mysql_real_escape_string($data->user.gender);
$user.password = mysql_real_escape_string($data->user.password);
mysql_connect("localhost", "root", ""); 
mysql_select_db("books-library");
mysql_query("INSERT INTO registration('Your-name', 'User-email', 'User-name','User-namemobile-number','User-name', 'user-gender','user-password') VALUES('".$user.name."','".$user.email."','".$user.username."','".$user.mobile."','".$user.country."','".$user.gender."','".$user.password."')");
?>