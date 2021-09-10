<?php
include('/configuration/connect.php');


if (isset($_GET['matricno'])){
    $matricno = mysqli_real_escape_string($conn, $_GET['matricno']);

    $sql = "SELECT * FROM student WHERE matricno = $matricno";

    $result = mysqli_query($conn, $sql);

    $students= mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    print_r($students);
}



?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

        <h4 class="center grey-text"> Student Information</h4>
        <div class="container">
            <div class="row">
                <div class="col s6 md3">
                    <table>
                        <thead>
                            <tr>
                                <th>Surname</th>
                                <th>Othernames</th>
                                <th>Matric Number</th>
                                <th>Course studied</th>
                                <th>Faculty</th>
                                <th>Gender</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td><?php echo "hh"?></td>
                        </tbody>
                    </table>
                    </div>
                    
               
            </div>
        </div>
    </body>

</html>