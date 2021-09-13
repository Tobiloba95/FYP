<!DOCTYPE html>
<html >

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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<link rel="icon" type="image/ico" href="images/icon.ico" />
</head>
<body id="top">
 
<div class="wrapper col4">
  <div id="container" class="clear"> 
  	<fieldset style="width:80%;">
	<center>

  	<legend><h1 style="color:#000000;">GRADUATING  STUDENTS SIGN UP</h1></legend>
	
	<form action="studentsignupconfirm.php" method="post">
	<font size="4" color="#000000">enter academic Session</font><br/>
	<input required="required" type="text" placeholder="academic session goes here" name="session" style="color:#0000FF;width:40%;height: 9%;border:grey 2px solid;text-align:center;"/><br/><br />
	<font size="4" color="#000000">enter your full name</font><br/>
	<input required="required" type="text" placeholder="full name goes here" name="fullname" style="color:#0000FF;width:40%;height: 9%;border:grey 2px solid;text-align:center;"/><br/><br />
	<font size="4" color="#000000">enter your matric no</font><br/>
	<input required="required" type="text" placeholder="matric no goes here" name="matricno" style="color:#0000FF;width:50%;border:grey 2px solid;text-align:center;"/><br/><br />
	<font size="4" color="#000000">enter your course of study</font><br/>
	<input required="required" type="text" placeholder="course of study goes here goes here" name="courseofstudy" style="color:#0000FF;width:50%;border:grey 2px solid;text-align:center;"/><br/><br />
	<font size="4" color="#000000">enter your email</font><br/>
	<input required="required" type="text" placeholder="email goes here" name="email" style="color:#0000FF;width:50%;border:grey 2px solid;text-align:center;"/><br/><br />
	<font size="4" color="#000000">enter your department</font><br/>
	<input required="required" type="text" placeholder="department goes here" name="department" style="color:#0000FF;width:50%;border:grey 2px solid;text-align:center;"/><br/><br />
	<font size="4" color="#000000">enter your faculty</font><br/>
	<input required="required" type="text" placeholder="faculty goes here" name="faculty" style="color:#0000FF;width:50%;border:grey 2px solid;text-align:center;"/><br/><br />
	<font size="4" color="#000000">enter your phone Number</font><br/>
	<input required="required" type="number" placeholder="phone no goes here" name="phoneno" style="color:#0000FF;width:50%;border:grey 2px solid;text-align:center;"/><br/><br />
	<font size="4" color="#000000">Choose your gender</font><br/>
	<select name="gender" style="color:#666666;width:40%;border:grey 2px solid;text-align:center;">
	<option>Male</option>
	<option>Female</option>
	</select><br/><br/>
	<font size="4" color="#000000">enter your password</font><br/>
	<input required="required" type="password" placeholder="password goes here" name="password" style="color:#0000FF;width:40%;border:grey 2px solid;text-align:center;"/><br/><br />
	<input type="submit" value="Request SignUp" />
	</form>
	</center>
	</fieldset>
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy;  <?php echo date("Y");?> - All Rights Reserved - <a href=""><?php echo $copyright; ?></a></p>
    <p class="fl_right">Designed by <a target="_blank" href="<?php echo $website; ?>" title="<?php echo $developed; ?>"><?php echo $developed; ?></a></p>
  </div>
</div>
</body>
</html>