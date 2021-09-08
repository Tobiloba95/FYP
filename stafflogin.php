<?php
$staffusername = $password = '';
$empty = array('staffusername'=>'', 'password'=>'');
$error = array('staffusername'=>'', 'password'=>'');
if(isset($_POST['submit'])){
    if (empty($_POST['staffusername'])){
        $empty['staffusername']="Staff Username Required <br />";
    }
    else{
        $staffusername = $_POST['staffusername'];
        if(!preg_match('/^[a-zA-Z0-9{11}_]+$/', $staffusername)){
            $error['staffusername']='Staff user name must be letter, number and underscore only';
        }
    }
    if (empty ($_POST['password'])){
        $empty['password']= "password Required <br />";
    }
    else{
        $password = $_POST['password'];
        if(!preg_match('/^[\w.]+$/', $password)){
            $error['password']='Password must be letter, number and characters ';
        }
    }
    if (!array_filter($error)){
        header('Location: stafflogin.php');
    }
}

?>


<!DOCTYPE html>
<html>
   
    <?php include('template/header.php');?>
    <section class="container grey-text">
        <h4 class="center">Staff Login</h4>
        <form action="stafflogin.php" class="white" method="POST">
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
                <a href="staffsignup.php"><input type="signup" name="staffsignup" value="signup" class="btn brand z-depth-0"></a>
            </div>
        </form>
    </section>
    <?php include('template/footer.php');?>
        
   
</html>