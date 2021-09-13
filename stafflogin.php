<?php
include('configuration/connect.php');
$department = $password = '';
$empty = array('department'=>'', 'password'=>'');
$error = array('department'=>'', 'password'=>'');
if(isset($_POST['submit'])){
    if (empty($_POST['department'])){
        $empty['department']="Department Required <br />";
    }
    else{
        $department = $_POST['department'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $department)){
            $error['department']='Department name must be letter';
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
    
    $department = $_POST['department'];
    $password = $_POST['password'];
    $sql = new mysqli($department, $password);
    if (mysqli_query($conn, $sql)) {
        echo "successful";
    }
    else{
        echo "unsuccessful";
    }
     
    

    
}

?>
<!DOCTYPE html>
<html>
   
    <?php include('template/header.php');?>
    <section class="container grey-text">
        <h4 class="center">Staff Login</h4>
        <form action="stafflogin.php" class="white" method="POST">
            <label for="">Department: </label>
            <input type="text" name="department" value="<?php echo htmlspecialchars($department);?>">
            <div class="red-text"><?php echo $empty[department];?></div>
            <div class="red-text"><?php echo $error[department];?></div>
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