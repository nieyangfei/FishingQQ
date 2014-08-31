<?php
$dbhost = "localhost";
$username = "root";
$password = "wsad000";
$conn = mysql_connect($dbhost,$username,$password) or die(mysql_error());
mysql_query('set names utf8',$conn);
mysql_select_db('gps',$conn) or die(mysql_error());