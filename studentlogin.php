<?php
$matricno = $password = '';
$empty = array('matricno'=>'', 'password'=>'');
$error = array('matricno'=>'', 'password'=>'');
if(isset($_POST['submit'])){
    if (empty($_POST['matricno'])){
        $empty['matricno']= "Matric Number Required <br />";
    }
    else{
        $matricno = $_POST['matricno'];
        if(!preg_match('/^[a-zA-Z0-9\/]+$/', $matricno)){
            $error['matricno']='Matric number must be letter, number and slash ';
        }
    }
    if (empty ($_POST['password'])){
        $empty['password']="password Required <br />";
    }
    else{
        $password = $_POST['password'];
        if(!preg_match('/^[\w.]+$/', $password)){
            $error['password']='Password must be letter, number and characters ';
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
            <input type="text" name="matricno" value="<?php echo htmlspecialchars($matricno);?>">
            <div class="red-text"><?php echo $empty[matricno];?></div>
            <div class="red-text"><?php echo $error[matricno];?></div>
            <label for="">Password: </label>
            <input type="password" name="password" value="<?php echo htmlspecialchars($password);?>">
            <div class="red-text"><?php echo $empty[password];?></div>
            <div class="red-text"><?php echo $error[password];?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>            
        </form>
    </section>
    <?php include('template/footer.php');?>
        
   
</html>