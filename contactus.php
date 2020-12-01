<?php
									$name = $email = $phone = $subject = $msg = $selectedService = "";
									if(isset($_POST['submit']))
									{
										$name = $_POST['name'];
										$email = $_POST['email'];
										$phone = $_POST['phone'];
										$msg = $_POST['message'];	
										
										$to = "rdinesh_1979@yahoo.com";
										$subject = "Enquiry Made in the Website: rdinesh-1979.github.io";
										
										
										$message = "
										<table cellspacing=10 width=60%>
										<tr>
										<td><b>Name</b></td><td>".$name."</td>
										</tr>
										<tr>
										<td><b>Email Id</b></td><td>".$email."</td>
										</tr>
										<tr>
										<td><b>Phone No</b></td><td>".$phone."</td>
										</tr>
										<tr>
										<td><b>Selected Service:</b></td><td>".$selectedService."</td>
										</tr>
										<tr>
										<td><b>Message</b></td><td>".$msg."</td>
										</tr>
										</table>
										<h3>Regards,<br>
										<h3><a href='http://www.cybergalaxysoftwares.com'>Cybergalaxysoftwares Team!!!</a></h3>";										
										$header = "From:".$email." \r\n";
										$header .= "MIME-Version: 1.0\r\n";
										$header .= "Content-type: text/html\r\n";
										$retval = mail ($to,$subject,$message,$header);							 
										if( $retval == true ) 
										{
											echo '<script language="javascript">';
											echo 'alert("Thanks for Contacting Us, We will getback Shortly!!!")';
											header("Location: https://rdinesh-1979.github.io/");
											echo '</script>';
										}
										else {
											echo '<script language="javascript">';
											echo 'alert("Message Not Sent Successfully")';
											echo '</script>';
										}	
									}									
									?>