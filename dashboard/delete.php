
<?php
include('../connect.php');

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $sql = "DELETE FROM `gallery` WHERE id = '$delete_id'";

    $re = mysqli_query($con,$sql);
    if($re){
        ?>
        <script>
            alert("Gallery Deleted Succeessfull");
            window.location.href="view.php";
        </script>
        <?php
    }

}

?>