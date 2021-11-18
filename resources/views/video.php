<?php

include("server_conn.php");

if(isset($_POST['record_video'])){
    $video_name=$_POST['video_name'];
    $video_link=$_POST['video_link'];
    $record_video=("INSERT INTO video(video_name,video_link) VALUES('$video_name','$video_link')");
        if ($conn->query($record_video) === FALSE) {
          echo "Error: " . $record_video . "<br>" . $conn->error;
        }
    $delete_error_record=("DELETE FROM video WHERE video_name='' OR video_link=''");
    }

$show_video="SELECT * FROM video";
$result=$conn->query($show_video);

if(isset($_POST['delete_video'])){
    $video_select=$_POST['selected_video'];
    $delete_video="DELETE FROM video WHERE video_name='$video_select'";
    if ($conn->query($delete_video) === TRUE) {
        echo "Record delete successfully";
        header("location:video.php");
    } else {
        echo "Error: " . $delete_video . "<br>" . $conn->error;
    }
}

if(isset($_POST['select_video'])){
    $video_select=$_POST['selected_video'];
    $show_select_video="SELECT video_link FROM video WHERE video_name='$video_select'";
    $show_video=$conn->query($show_select_video);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Video Tab</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="video.css">
    </head>

    <body>
        <fieldset>
            <legend>Record Video</legend>
            <form action="" method="POST">
            <table>
                <tr>
                    <td>Video Name</td>
                    <td><input type="text" name="video_name"></td>
                </tr>
                <tr>
                    <td>Video Link</td>
                    <td><input type="url" name="video_link"></td>
                </tr>
            </table>
            <br>
            <input type="submit" name="record_video" value="Submit">
            <input type="reset" value="Clear">
        </form>
        </fieldset>

        <br>

        <fieldset>
            <legend>View Video Record</legend>
            <form action="" method="POST">
                <select name="selected_video">
                    <option selected=true disabled>Please Selec Video</option>
                        <?php while($rows=$result->fetch_assoc()){?>
                            <option><?php echo $rows['video_name'] ; ?></option>
                            <?php } ?>
                    </select>
                <input type="submit" name="select_video" value="View">
                <input type="submit" name="delete_video" value="Delete">
                <br><br>
                <?php if(isset($_POST['select_video'])){ ?>
                <iframe width="430" height="315" src="<?php while($rows=$show_video->fetch_assoc()) echo $rows['video_link'];?>"></iframe>
                <?php } ?>
            </form>
        </fieldset>
        <br>
        <a href="index.html"><button>Back</button></a>
    </body>
</html>