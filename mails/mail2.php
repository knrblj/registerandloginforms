<?php
include("connection.php");
date_default_timezone_set("Asia/Kolkata");
$date=date('20y-m-d H:i:00.00000');
$sql="SELECT * FROM somedata";
$run=mysqli_query($conn, $sql);
$total=mysqli_num_rows($run);
while($res=mysqli_fetch_array($run))
{
	if($res['datetime']==$date)
	{
		$email=$res['remail'];
		$sender=$res['semail'];
		$subject=$res['subject'];
		$message=$res['message'];
		$mm="<html><body><h2>$message</h2><br><h5>FROM<br>$sender</h5></body></html>";
		$headers="Content-type:text/html;charset=UTF-8";
		if(mail($email, $subject, $mm,$headers))
			{
				echo " mail send sucess";
			}
			else
			{
				echo "'$to' failed";
			}
	}
}
?>