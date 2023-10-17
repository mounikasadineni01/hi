<?php
$con = mysqli_connect("cloudproject.cxolaiio9puz.ap-south-1.rds.amazonaws.com", "root", "cloudproject", "cloudproject")or die($mysqli_error($con));
if(!isset($_SESSION))
{
    session_start();
}
?>