
        $ (document).ready(function(){
    
    $ ('.sendRequest').on('click', function(){
        //var x= $(this).val();
        //var y="#";
        $.post("sendRequest.php",
               {classCode: $(this).val()}
               //function(data){
            //$(y.concat(x)).html(data);
       // }
               
        );
    });
});