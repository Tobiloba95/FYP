<?php
include('configuration/connect.php');
session_start();
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
            $error['department']='Department name must be letter, number';
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

    
}
if (isset($_POST['department']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $department = validate($_POST['department']);

    $password = validate($_POST['password']);
    if (empty($department)) {

        echo "Input Department";

        exit();

    }else if(empty($password)){

        echo "Input password";

        exit();

    }
    else{

        $sql = "SELECT * FROM student WHERE department='$department' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['department'] === $department && $row['password'] === $password) {
                header('Location: biology.php');               

            }
            else{

                echo 'query error: '. mysqli_error($conn);

                

            }

        }

    }

}
?>


<!DOCTYPE html>
<html>
   
    <?php include('template/header.php');?>
    <section class="container grey-text">
        <h4 class="center">Staff Login</h4>
        <?php 
        if (isset($_SESSION['success']) && ($_SESSION['success']) != ''){
            echo '<h2>'.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }
        ?>
        <form action="staffdet.php" class="white" method="POST">
            <label for="">Department: </label>
            <input type="text" name="department" value="<?php echo htmlspecialchars($staffusername);?>">
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