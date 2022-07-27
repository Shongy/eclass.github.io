  <?php  

    $code=$_POST["code"];
    include("../redundant/_connection.php");
     $query="Update posts Set viewed =". 1 ."";
     mysqli_query($connection, $query) or die (mysqli_error($connection));
echo 0;

    ?>