<!DOCTYPE html>
<html>
<head>
  <?php
  	include("connection.php");
	$dery=mysqli_query($con,"select * from clearance_basics");
	$wata=mysqli_fetch_array($dery);
	$copyright=$wata['rights'];
	$developed=$wata['developed'];
	$website=$wata['website'];
	$title=$wata['title'];
	$subtitle=$wata['subtititle'];
  ?>
 
</head>

<div class="wrapper col2">
  <div id="header" class="clear">
	<?php
	error_reporting(E_ERROR);
	$matricno=$_POST['matricno'];
	$password=$_POST['password'];
	//$passconfirm=$_POST['passconfirm'];
	$session=$_POST['session'];
	$department=$_POST['department'];
	$email=$_POST['email'];
	$course=$_POST['courseofstudy'];
	$faculty=$_POST['faculty'];
	$phoneno=$_POST['phoneno'];
	$gender=$_POST['gender'];
	$name=$_POST['fullname'];
	$year=date("Y");
	

	if($password)
	{
	if($matricno && $password && $session && $department && $email && $course && $faculty && $phoneno && $gender && $name)
	{
		$query=mysqli_query($con,"select * from student_details where matricno='$matricno'");
		$ngapi=mysqli_num_rows($query);
		if($ngapi==0)
		{
			$insertstudentdetails=mysqli_query($con,"insert into student_details (year,session,fullname,matricno,courseofstudy,email,department,faculty,phoneno,password,clearance_status) values ('$year','$session','$name','$matricno','$course','$email','$department','$faculty','$phoneno','$password','2')");
			if($insertstudentdetails)
			{
				$insertict=mysqli_query($con,"insert into department_ict (matricno,clearance_status,basket) values ('$matricno','2','')");
				if($insertict)
				{
					$insertdos=mysqli_query($con,"insert into department_dos (idnumber,clearance_status,basket) values ('$username','2','')");
					if($insertdos)
					{
						$insertfinance=mysqli_query($con,"insert into department_finance (idnumber,clearance_status,basket) values ('$username','2','')");
						if($insertfinance)
						{
							$insertmess=mysqli_query($con,"insert into department_food (idnumber,clearance_status,basket) values ('$username','2','')");
							if($insertmess)
							{
								$inserthealth=mysqli_query($con,"insert into department_health (idnumber,clearance_status,basket) values ('$username','2','')");
								if($inserthealth)
								{
									$insertlibrary=mysqli_query($con,"insert into department_library (idnumber,clearance_status,basket) values ('$username','2','')");
									if($insertlibrary)
									{
										$inserthod=mysqli_query($con,"insert into department_hod (idnumber,clearance_status,basket) values ('$username','2','')");
										if($inserthod)
										{
											$insertregistrar=mysqli_query($con,"insert into department_registrar (idnumber,clearance_status,basket) values ('$username','2','')");
											if($insertregistrar)
											{
												$insertresidence=mysqli_query($con,"insert into department_residence (idnumber,clearance_status,basket) values ('$username','2','')");
												if($insertresidence)
												{
													$insertsports=mysqli_query($con,"insert into department_sports (idnumber,clearance_status,basket) values ('$username','2','')");
													if($insertsports)
													{
														echo"<font color='green'>You have been successfully registered fully in all the graduation clearance records</font><br/>Login with the username and password you registered with to view your clearance status";
													}
													else
													{
														echo"you have not been successfully registered in sports' graduation records";
													}
												}
												else
												{
													echo"you have not been successfully registered in residence's graduation records";
												}
											}
											else
											{
												echo"you have not been successfully registered in registrar's graduation records";
											}
										}
										else
										{
											echo"you have not been successfully registered in physical plant's graduation records";
										}
									}
									else
									{
										echo"you have not been successfully registered in library's graduation records";
									}
								}
								else
								{
									echo"you have not been successfully registered in jeremic's graduation records";
								}
							}
							else
							{
								echo"you have not been successfully registered in cafeteria's graduation records";
							}
						}
						else
						{
							echo"you have not been successfully registered in finance's graduation records";
						}
					}
					else
					{
						echo"you have not been successfully registered in dean of students' graduation records";
					}
				}
				else
				{
					echo"you have not been successfully registered in bookstore's graduation records";
				}
			}
			else
			{
				echo"Student details not inserted successfully<br/><a href='studentsignup.php'>Try Again</a>";
			}
		}
		else
		{
			echo"a user with that admission number has already been registered in the system<br/><a href='studentsignup.php'>Try Again</a>";
		}
	}
	else
	{
		echo"All the necessary variables not sent in<br/><a href='studentsignup.php'>Try Again</a>";
	}
	}
	else
	{
		echo"The passwords you provided do not match<br/><a href='studentsignup.php'>Try Again</a>";
	}
	header('Location: ..\login.php');
	?>
	
	</fieldset>
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy;<?php echo date("Y");?> - All Rights Reserved - <a href=""><?php echo $copyright; ?></a></p>
    <p class="fl_right">Designed by <a target="_blank" href="<?php echo $website; ?>" title="<?php echo $developed; ?>"><?php echo $developed; ?></a></p>
  </div>
</div>
</body>
</html>