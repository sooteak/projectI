<?php

include("server_conn.php");

$sql="SELECT * FROM award";
$result=$conn->query($sql);

if(isset($_POST['submit'])){
$select=$_POST['select'];
$show_select="SELECT award_name FROM award WHERE award_name='$select'";
$show_award_name=$conn->query($show_select);
$show_select="SELECT award_date FROM award WHERE award_name='$select'";
$show_award_date=$conn->query($show_select);
$show_select="SELECT award_details FROM award WHERE award_name='$select'";
$show_award_details=$conn->query($show_select);
}

if(isset($_POST['delete'])){
    $select=$_POST['select'];
    $sql="DELETE FROM award WHERE award_name='$select'";
    if ($conn->query($sql) === TRUE) {
        echo "Record delete successfully";
        header("location:show_award.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>History Award</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="show_award.css">
    </head>

    <body>
        
        <h3>History Award</h3>
        <form action="" method="POST">
        <select name="select">
        <option selected="true" disabled>Please Select Award</option>
        <?php while($rows=$result->fetch_assoc()){?>
        <option><?php echo $rows['award_name'] ; ?></option>
        <?php } ?>
        </select>
        <input type="submit" name="submit" value="View">
        <input type="submit" value="Delete" name="delete">
        </form>

        <?php if(isset($_POST['submit'])){?>
        <table>
        <tr><td>Award Name</td>
            <td><?php while($rows=$show_award_name->fetch_assoc()) echo $rows['award_name']?></td>
        </tr>
        <tr><td>Award Date</td>
            <td><?php while($rows=$show_award_date->fetch_assoc()) echo $rows['award_date']?></td>
        </tr>
        <tr><td>Award Details</td>
            <td><?php while($rows=$show_award_details->fetch_assoc()) echo $rows['award_details']?></td>
        </tr>
        </table><?php } ?>

        <br>
        <a href="index.html"><button>Back</button></a>
    </body>
</html>