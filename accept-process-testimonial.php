<?php
include_once 'admin.php';
$sql2="select status where id-'" . $_GET["id"] . "'";
$result2=mysqli_query($conn , $sql2);
$row2 = mysqli_fetch_assoc($result2);
$status=$row2['status'];

if ($status==0)
{
    
  
    $sql1 = "update testimonial set status=1 WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql1)) {
    echo "Record accepted successfully";
     header("Location: admin.php");
} else {
    echo "Error accepting record: " . mysqli_error($conn);
}
}

if($status==1)
{
      $sql1 = "update testimonial set status=0 WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql1)) {
    echo "Record accepted successfully";
     header("Location: admin.php");
} else {
    echo "Error accepting record: " . mysqli_error($conn);
}  
}


mysqli_close($conn);
?>