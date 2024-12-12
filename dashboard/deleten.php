
<?php
include('../connect.php');

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $sql = "DELETE FROM `nitify` WHERE id = '$delete_id'";

    $re = mysqli_query($con,$sql);
    if($re){
        ?>
        <script>
            alert("Notification Deleted Succeessfull");
            window.location.href="viewn.php";
        </script>
        <?php
    }

}

?>