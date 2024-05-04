<?php 
session_start();
include ('connection.php');
$name = $_SESSION['user_name'];
$ids = $_SESSION['id'];
$id = $_GET['id'];

// Calculate due date, for example, let's say it's 7 days from now
$due_date = date('Y-m-d H:i:s', strtotime('+7 days'));

$insert_issue = mysqli_query($conn, "INSERT INTO tbl_issue (book_id, user_id, user_name, status, issue_date, due_date) VALUES ('$id', '$ids', '$name', 3, NOW(), '$due_date')");
if($insert_issue)
{
    ?>
    <script type="text/javascript">
        alert("Request sent successfully.");
        window.location.href="book.php";
    </script>
    <?php
}
else {
    echo "Error: " . mysqli_error($conn); // Display error message if the query fails
}
?>
