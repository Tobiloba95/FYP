<?php
if(isset($_POST['submit'])){
    if (empty($_POST['matricno'])){
        echo "Matric Number Required <br />";
    }
    else{
        $matricno = $_POST['matricno'];
        if(!preg_match('/^[a-zA-Z|0-9{11}.]@+*$/', $matricno)){
            echo 'Matric number must be letter, number and slash ';
        }
    }
    if (empty ($_POST['password'])){
        echo "password Required <br />";
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
        <h4 class="center">Student Login</h4>
        <form action="studentlogin.php" class="white" method="POST">
            <label for="">Matric Number: </label>
            <input type="text" name="matricno">
            <label for="">Password: </label>
            <input type="password" name="password">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>            
        </form>
    </section>
    <?php include('template/footer.php');?>
        
   
</html>