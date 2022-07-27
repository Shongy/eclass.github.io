<?php
session_start();
      function get_data() {
            include('redundant/_connection.php');
           
            $sql = "SELECT * FROM `exam_details` WHERE `exam_no` =".$_SESSION["exam_no"];
            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
            while ($record = mysqli_fetch_assoc($result)) {
                
                
                $output = "<button type='button' class='close deletemc' id='".$record["question_id"]."'><i class='ace-icon fa fa-trash pull-right red'></i></button><button class='close edit_data1' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button><div>";
                
               if($record["answer1"]!=""){
                   $output .= "A.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer1"];
                   $output .= "</strong><br>";
               }
                if($record["answer2"]!=""){
                   $output .= "B.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer2"];
                   $output .="</strong><br>";
               }
                if($record["answer3"]!=""){
                   $output .="C.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer3"];
                   $output .="</strong><br>";
               }
                if($record["answer4"]!=""){
                   $output .="D.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer4"];
                   $output .="</strong><br>";
               }
                if($record["answer5"]!=""){
                   $output .="E.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer5"];
                   $output .= "</strong><br>";
               }
                if($record["answer6"]!=""){
                   $output .="F.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer6"];
                   $output .="</strong><br>";
               }
                if($record["answer7"]!=""){
                   $output .="G.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer7"];
                   $output .="</strong><br>";
               }
                if($record["answer8"]!=""){
                   $output .="H.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer8"];
                   $output .="</strong><br>";
               }
                if($record["answer9"]!=""){
                    $output .= "I.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer9"];
                   $output .="</strong><br>";
               }
                if($record["answer10"]!=""){
                  $output .="J.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer10"];
                   $output .="</strong><br>";
               }
                $output .= "</div>";
                
                
                $choices = "<table class='table table-bordered table-hover'>";
                if($record["choice1"]!=""){
                   $choices .="<tr><td>A.)&nbsp;<strong>";
                   $choices .=$record["choice1"];
                   $choices .= "</strong></td></tr>";
               }
                if($record["choice2"]!=""){
                   $choices .= "<tr><td>B.)&nbsp;<strong>";
                   $choices .= $record["choice2"];
                   $choices .= "</strong></td></tr>";
               }
                if($record["choice3"]!=""){
                   $choices .= "<tr><td>C.)&nbsp;<strong>";
                   $choices .= $record["choice3"];
                   $choices .= "</strong></td></tr>";
               }
                if($record["choice4"]!=""){
                    $choices .= "<tr><td>D.)&nbsp;<strong>";
                   $choices .= $record["choice4"];
                   $choices .= "</strong></td></tr>";
               }
                if($record["choice5"]!=""){
                   $choices .= "<tr><td>E.)&nbsp;<strong>";
                   $choices .= $record["choice5"];
                   $choices .= "</strong></td></tr>";
               }
                if($record["choice6"]!=""){
                    $choices .= "<tr><td>F.)&nbsp;<strong>";
                   $choices .= $record["choice6"];
                   $choices .= "</strong></td></tr>";
               }
                if($record["choice7"]!=""){
                    $choices .= "<tr><td>G.)&nbsp;<strong>";
                   $choices .= $record["choice7"];
                   $choices .= "</strong></td></tr>";
               }
                if($record["choice8"]!=""){
                   $choices .= "<tr><td>H.)&nbsp;<strong>";
                   $choices .= $record["choice8"];
                   $choices .= "</strong></td></tr>";
               }
                if($record["choice9"]!=""){
                    $choices .= "<tr><td>I.)&nbsp;<strong>";
                   $choices .= $record["choice9"];
                   $choices .= "</strong></td></tr>";
               }
                if($record["choice10"]!=""){
                   $choices .= "<tr><td>J.)&nbsp;<strong>";
                   $choices .= $record["choice10"];
                   $choices .= "</strong></td></tr>";
               }
                $choices .="</table>";
                    

                    $data[] = array(
                        'question_no' => $record["question_no"],
                        'question' => $record["question"],
                        'choices' => $choices,
                        'answers' => $output
                    );
                }
                $data = array('data' => $data);
                return json_encode($data);
            }

            $file_name = 'questions_data.json';
            file_put_contents($file_name, get_data());
            

            

?>