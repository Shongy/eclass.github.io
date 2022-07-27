  <?php
                      include("../redundant/_connection.php");
                        $teacher_account_no=$_SESSION["user"];
                        $query="Select * FROM students_request INNER JOIN accounts_student ON students_request.student_account_no = accounts_student.student_account_no where teacher_account_no='$teacher_account_no' and status='Unconfirmed'";

                        $result=mysqli_query($connection,$query) or die (mysqli_error($connection));
                        while($record=mysqli_fetch_assoc($result))
                        {
           
                            echo"<tr>";
                            echo "<td>".$record['class_code']."</td>";
                            echo "<td>".$record['student_firstname']." ".$record['student_middleinitial']." ".$record['student_lastname']."</td>";
                            echo "<td>".$record['request_date']."</td>";                           
                            echo "<td>".$record['status']."</td>"; 
                            
                            echo"<input type='hidden' id='hidden".$record['class_code']."' value=".$record['student_account_no']." >";
                             echo"<input type='hidden' id='hidden2".$record['class_code']."' value=".$record['request_no']." >";
                            
                             echo "<td> ".'<center><button class="btn btn-sm btn-info submit2" onclick="this.disabled=true;" style="border-radius:2px;"id='.$record["class_code"].' value='.$record["class_code"].'><center><i class="glyphicon glyphicon-ok "></i></center></button>
                             <button class="btn btn-sm btn-danger submit3" onclick="this.disabled=true;" style="border-radius:2px;"id="delete'.$record["class_code"].'" value='.$record["request_no"].'><center><i class="glyphicon glyphicon-trash "></i></center></button> </center>'." </td>";

                            echo"</tr>";
             
                        }
                      ?>
                    