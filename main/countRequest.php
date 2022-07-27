   <?php
              session_start(); //notification
                             include("../redundant/_connection.php");
                $count=0;
                            $teacher_account_no=$_SESSION["user"];
                                $query="Select * from students_request where status='Unconfirmed' and teacher_account_no='$teacher_account_no'";
                               
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