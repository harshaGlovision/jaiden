<?php 
//echo "OK"; exit;
//echo "Message Not Sent Please try Again Later"; exit;
//if(isset($_POST['submit'])){



   $name = $_POST['name']; 
   $subject = $_POST['subject'];
   $email = $_POST['email'];
   //$message1 = $_POST['message'];

   $to = 'info@jaidensolutions.com';



$message = '<table  style="border-radius: 1em  ;overflow: hidden;background-color:#fff;clear:both;margin:0px auto;width:75%; ">
			
		<div  style="background-color:#fff;">
		<tr >
			<td >
				<h1 style="margin-top:1em; color:#714796;text-indent:20px;">Dear '.$_POST['name'].'</h1>
				
			</td>
		</tr>
		
			
		<tr >
	
			<table style="background-color:#fff;border-radius: 5px ;overflow: hidden;border:1px solid #cccccc;border-collapse:seperate; width:68%;margin:0px auto;">
				
				
				<tr style="width:60%;margin:0px auto;color:#663332;font-size: 1em;">
					
					<th style="padding:5px;text-align:left;">Name</th>
					<td style="text-align:left;padding:5px">: '.$_POST['name'].'</td>
				</tr>
				<tr style="width:60%;margin:0px auto;color:#663332;font-size: 1em;">
					
					<th style="padding:5px;text-align:left;">Email</th>
					<td style="text-align:left;padding:5px">: '.$_POST['email'].'</td>
				</tr>
				<tr style="color:#663332;font-size: 1em;">
					
					<th style="padding:5px;text-align:left;">Subject</th>
					<td style="text-align:left;padding:5px">: '.$_POST['subject'].'</td>
				</tr>
				<tr style="color:#663332;font-size: 1em;">
					
					<th style="padding:5px;text-align:left;">Message</th>
					<td style="text-align:left;padding:5px">: '.$_POST['message'].'</td>
				</tr>
				
		
			</table>
		</tr>

		
		
		
		
	</div>
	</table>';
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@jaidensolutions.com>' . "\r\n";


 mail($to,$subject,$message,$headers);
 
  if(mail){
      echo "OK";  exit; //"<script>alert('mail send successfully');</script>"; 
  }else{
      echo "Message Not Sent Please try Again Later"; exit; //"<script>alert('mail send failed');</script>"; 
  }


 
 
 
 

?>

	
