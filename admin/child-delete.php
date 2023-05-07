<?php include './admin_components/admin_header.php' ?>

<?php

if(isset($_GET['cid'])){
    $cid = $_GET['cid'];
    //delete query
    $delete_child = "DELETE FROM `children` WHERE cid=$cid";
    $res = mysqli_query($conn, $delete_child);
    if($res){
        echo "<script> alert('Child Details were Deleted Successfully'); </script>";
        $home_page = './index.php';
        header('Location: ' . $home_page);
    }
}

?>