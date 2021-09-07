<?php
if(isset($_POST['submit'])){
    //echo htmlspecialchars($_POST['staffname']);
    //echo htmlspecialchars($_POST['email']);
    //echo htmlspecialchars($_POST['department']);
    //echo htmlspecialchars($_POST['staffusername']);
    //echo htmlspecialchars($_POST['password']);
    
    if(empty($_POST['staffname'])){
        echo "Staff name Required <br />";
    }
    else{
        $staffname = $_POST['staffname'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $staffname)){
            echo 'Staff name must be letters and spaces only';
        }
    }
    if(empty($_POST['email'])){
        echo "Email Required <br />";
    }
    else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'email must be a valid email address';
        }
    }
    if(empty($_POST['department'])){
        echo "Department Required <br />";
    }
    else{
        $department = $_POST['department'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $department)){
            echo 'Department must be letters and spaces only';
        }
    }
    if(empty($_POST['staffusername'])){
        echo "Staff username Required <br />";
    }
    else{
        $staffusername = $_POST['staffusername'];
        if(!preg_match('/^[a-z|A-Z0-9{11}_]@+*$/', $staffusername)){
            echo 'Staff user name must be letter, number and underscore only';
        }
    }
    if(empty($_POST['password'])){
        echo "Password Required <br />";
    }
    else{
        $password = $_POST['password'];
        if(!preg_match('/^[a-z|A-Z0-9.]@+*$/', $password)){
            echo 'Password must be letter, number and characters ';
        }
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
            <input type="text" name="staffname">
            <label for="">Email: </label>
            <input type="email" name="email">
            <label for="">Department: </label>
            <input type="text" name="department">            
            <label for="">Staff Username: </label>
            <input type="text" name="staffusername">
            <label for="">Password: </label>
            <input type="password" name="password">
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