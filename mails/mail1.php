<?php
include("connection.php");
date_default_timezone_set("Asia/Kolkata");
$date=date('20y-m-d H:i:00.00000');
$sql="SELECT * FROM maildata";
$run=mysqli_query($conn, $sql);
$total=mysqli_num_rows($run);
while($res=mysqli_fetch_array($run))
{
	if($res['datetime']==$date)
	{
		$email=$res['email'];
		$subject=$res['subject'];
		$message=$res['message'];
		if(mail($email, $subject, $message))
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