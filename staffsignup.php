<?php
$staffname = $email = $department = $staffusername = $password = "";
$empty = array('staffname'=>'','email'=>'', 'department'=>'', 'staffusername'=>'','password'=>'');
$error = array('staffname'=>'','email'=>'', 'department'=>'', 'staffusername'=>'','password'=>'');
if(isset($_POST['submit'])){  
    if(empty($_POST['staffname'])){
        $empty['staffname'] = "Staff name Required <br />";
    }
    else{
        $staffname = $_POST['staffname'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $staffname)){
            $error['staffname']='Staff name must be letters and spaces only';
        }
    }
    if(empty($_POST['email'])){
        $empty['email']= "Email Required <br />";
    }
    else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error['email']='email must be a valid email address';
        }
    }
    if(empty($_POST['department'])){
        $empty['department'] = "Department Required <br />";
    }
    else{
        $department = $_POST['department'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $department)){
            $error['department']='Department must be letters and spaces only';
        }
    }
    if(empty($_POST['staffusername'])){
        $empty['staffusername']="Staff username Required <br />";
    }
    else{
        $staffusername = $_POST['staffusername'];
        if(!preg_match('/^[a-zA-Z0-9_]+$/', $staffusername)){
            $error['staffusername']='Staff user name must be letter, number and underscore only';
        }
    }
    if(empty($_POST['password'])){
        $empty['password'] = "Password Required <br />";
    }
    else{
        $password = $_POST['password'];
        if(!preg_match('/^[\w.]+$/', $password)){
            $error['password']='Password must be letter, number and characters ';
        }
    }
    if(!array_filter($error)){
        header('Location: stafflogin.php');
    }
}

?>


<!DOCTYPE html>
<html>
   
    <?php include('template/header.php');?>
    <section class="container grey-text">
        <h4 class="center">Staff Signup</h4>
        <form action="staffsignup.php" class="white" method="POST">
            <label for="">Staff Name: </label>
            <input type="text" name="staffname" value="<?php echo htmlspecialchars($staffname);?>">
            <div class="red-text"><?php echo $empty[staffname];?></div>
            <div class="red-text"><?php echo $error[staffname];?></div>
            <label for="">Email: </label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($email);?>">
            <div class="red-text"><?php echo $empty[email];?></div>
            <div class="red-text"><?php echo $error[email];?></div>
            <label for="">Department: </label>
            <input type="text" name="department" value="<?php echo htmlspecialchars($department);?>">
             <div class="red-text"><?php echo $empty[department];?></div>
            <div class="red-text"><?php echo $error[department];?></div>            
            <label for="">Staff Username: </label>
            <input type="text" name="staffusername" value="<?php echo htmlspecialchars($staffusername);?>">
            <div class="red-text"><?php echo $empty[staffusername];?></div>
            <div class="red-text"><?php echo $error[staffusername];?></div>
            <label for="">Password: </label>
            <input type="password" name="password" value="<?php echo htmlspecialchars($password);?>">
            <div class="red-text"><?php echo $empty[password];?></div>
            <div class="red-text"><?php echo $error[password];?></div>
            <div class="right">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
            <div class="left">
                <a href="stafflogin.php"><input type="login" name="stafflogin" value="login" class="btn brand z-depth-0"></a>
            </div>
        </form>
    </section>
    <?php include('template/footer.php');?>
        
   
</html>