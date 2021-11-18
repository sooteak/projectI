<?php

include("server_conn.php");

if(isset($_POST['record_event'])){
    $event_date=$_POST['event_date'];
    $event_name=$_POST['event_name'];
    $event_holder=$_POST['event_holder'];
    $event_link=$_POST['event_link'];
    $event_details=$_POST['event_details'];
    $record_event=("INSERT INTO event_calendar(event_date,event_name,event_holder,event_link,event_details) VALUES('$event_date','$event_name','$event_holder','$event_link','$event_details')");
        if ($conn->query($record_event) === FALSE) {
          echo "Error: " . $record_event . "<br>" . $conn->error;
        }else{
            header("LOCATION:calendar.php");
        }
    $delete_error_record=("DELETE FROM event_calendar WHERE event_name='' OR event_link=''");
    }

$show_event="SELECT * FROM event_calendar";
$result=$conn->query($show_event);

if(isset($_POST['delete_event'])){
    $event_select=$_POST['selected_event'];
    $delete_event="DELETE FROM event_calendar WHERE event_name='$event_select'";
    if ($conn->query($delete_event) === TRUE) {
        echo "Record delete successfully";
        header("location:calendar.php");
    } else {
        echo "Error: " . $delete_event . "<br>" . $conn->error;
    }
}

if(isset($_POST['event_date_filter_submit'])){
    $event_select=$_POST['event_date_filter'];
    $show_select_event="SELECT * FROM event_calendar WHERE event_date='$event_select'";
    $show_event=$conn->query($show_select_event);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Event Tab</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <fieldset>
            <legend>Record Event</legend>
            <form action="" method="POST">
            <table>
                <tr>
                    <td>Event Date</td>
                    <td><input type="date" name="event_date"></td>
                </tr>
                <tr>
                    <td>Event Name</td>
                    <td><input type="text" name="event_name"></td>
                </tr>
                <tr>
                    <td>Event Holder</td>
                    <td><input type="text" name="event_holder"></td>
                </tr>
                <tr>
                    <td>Event Link</td>
                    <td><input type="url" name="event_link"></td>
                </tr>
                <tr>
                    <td>Event Details</td>
                    <td><input type="text" name="event_details"></td>
                </tr>
            </table>
            <br>
            <input type="submit" name="record_event" value="Submit">
            <input type="reset" value="Clear">
        </form>
        </fieldset>

        <br>

        <fieldset>
            <legend>View Event</legend>
            <form action="" method="POST">
                <input type="date" name="event_date_filter">
                <input type="submit" name="event_date_filter_submit" value="Search">
                <br><br>
                <?php if(isset($_POST['event_date_filter_submit'])){
                while($rows=$show_event->fetch_assoc()) echo $rows['event_name']."<br>".$rows['event_details']."<br>".$rows['event_link']."<br><br>"; } ?>
            </form>
        </fieldset>
        <br>
        <a href="index.html"><button>Back</button></a>
    </body>
</html>