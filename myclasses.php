<html>

   
<body>
 
    <p id="demo2"></p>
   
    

    
     

       
         <?php 
            
        $dtz = new DateTimeZone("Asia/Manila"); 
        $start_date=new DateTime(date(''), $dtz);
        $newdate = $start_date->format('Y/m/d H:i:s');
        echo " <script> var newtime = ".$newdate.";

    var dd = new Date(newtime);
    var n = dd.toISOString();
    var d = new Date(n);
    var q = d.getTime();
    document.getElementById('demo2').innerHTML = newtime; </script>"; ?>
    
    
    
    
    
    
</body>
    
    
    

</html>