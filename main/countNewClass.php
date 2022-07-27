   <?php
              session_start(); //notification
                             include("../redundant/_connection.php");
                $count=0;
                            $student_account_no=$_SESSION["user"];
                                $query="Select * from post_details INNER JOIN posts ON post_details.post_no = posts.post_no where post_details.student_account_no='$student_account_no' and post_type='files'";
                               
                                $result=mysqli_query($connection,$query) or die (mysqli_error($connection));
                        while($record=mysqli_fetch_assoc($result))
                        {
                            $count=$count+1;
                        }
                $countF=$count;
if($countF >=9)
{
    echo "+9";
}
else
{
    echo $countF;
}
                        ?>