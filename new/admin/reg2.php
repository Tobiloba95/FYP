<?php
session_start();
// adds the menu as part of your page
//include('menu.php');
//loads the conection details in your page
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "clearance");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username=$_POST['username'];
 
$password=$_POST['Password'];
 
// attempt insert query execution
 switch ($username) {
 	case 'admin':
 		# code...
 	$sql = "INSERT INTO user (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 		break;
 		case 'dos':

 	 $sql = "INSERT INTO  login_dos (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
  
 			break;
 			case 'registrar':
 				# code...
 			 $sql = "INSERT INTO  login_registrar (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 				break;
 				case 'finance':
 					# code...
 				 $sql = "INSERT INTO  login_finance (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 					break;
 					case 'health':
 						# code...
 					 $sql = "INSERT INTO  login_health (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 						break;
 						case 'library':
 							# code...
 						 $sql = "INSERT INTO  login_library (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 							break;
 							case 'food':
 								# code...
 							 $sql = "INSERT INTO  login_food (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 								break;
 								case 'hod':
 									# code...
 								 $sql = "INSERT INTO  login_hod (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 									break;
 									case 'residence':
 										# code...
 									 $sql = "INSERT INTO  login_residence (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 										break;
 										case 'ict':
 											# code...
 										 $sql = "INSERT INTO  login_ict (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 											break;
 											case 'sports':
 												# code...
 											 $sql = "INSERT INTO  login_sports (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 												break;
 	
 	default:
 		throw new Exception("Error Processing Request", 1);
 		
 		break;
 }


 
// close connection
mysqli_close($link);
?>