<?php
mysql_connect("localhost","root","") or die("Ne mogu prisoedinitsya k BD");
mysql_select_db("moloko") or die("Ne mogu vibrat BD");
define(SALT,"jyglkupiohijij;oihp;uhliughygoukygoygpo");
session_start();
?>