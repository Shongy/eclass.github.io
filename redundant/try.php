<!DOCTYPE html>
<html lang="en">    
<?php
    session_start();
    include_once("Main.php");
    $Main = new Main; 

    $Main -> head1() ?>
    
    <body class="no-skin">
       
    <?php  $Main -> navbar() ?>
    <?php  $Main -> slider("dashboard","") ?>
        
        <div class="main-content">
            <?php  $Main -> breadcrumb("dashboard") ?>
            
            
            <?php  $Main -> page_header("dashboard") ?>
            <?php  $Main -> timer() ?>
    
        </div>
    
    <?php  $Main -> foot1() ?>
</body>
</html>