<?php
if(isset($_POST['submit'])){
    //echo htmlspecialchars($_POST['staffusername']);
    //echo htmlspecialchars($_POST['password']);
    if (empty($_POST['staffusername'])){
        echo "Staff Username Required <br />";
    }
    else{
        $staffusername = $_POST['staffusername'];
        if(!preg_match('/^[a-zA-Z0-9{11}_]+$/', $staffusername)){
            echo 'Staff user name must be letter, number and underscore only';
        }
    }
    if (empty ($_POST['password'])){
        echo "password Required <br />";
    }
    else{
        $password = $_POST['password'];
        if(!preg_match('/^[a-zA-Z0-9.]+$/', $password)){
            echo 'Password must be letter, number and characters ';
        }
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
            <input type="text" name="staffusername">
            <label for="">Password: </label>
            <input type="password" name="password">
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