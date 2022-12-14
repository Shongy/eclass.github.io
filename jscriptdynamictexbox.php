<html>
<head>
<title>Dynamically add input field using jquery</title>
<style>
.container1 input[type=text] {
padding:5px 0px;
margin:5px 5px 5px 0px;
}


.add_form_field
{
    background-color: #1c97f3;
    border: none;
    color: white;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border:1px solid #186dad;

}

input{
    border: 1px solid #1c97f3;
    width: 260px;
    height: 40px;
	margin-bottom:14px;
}

.delete{
    background-color: #fd1200;
    border: none;
    color: white;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;

}
</style>
    
<script src="assets/js/jquery.min.js"></script>
<script>
$(document).ready(function() {
    var max_fields      = <?php echo 20;?>;
    var wrapper         = $(".container1"); 
    var add_button      = $(".add_form_field");
    var show            = $(".count");
    var show2           = $(".show");
    <?php $x = 1; ?>
    var x = 1; 
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            
            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
        }
		else
		{
		alert('You Reached the limits')
		}
    });
    
    $(wrapper).on("click",".delete", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
    
    $(show).click(function(e){
           
             $(show2).append(x);
            return x;
            
    });
});
</script>
</head>
<body>
<div class="container1">
    <button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
    <div><input type="text" name="mytext[]"></div>
    
    
    <button class="count">show</button>
    <h1 class="show"></h1>
</div>
</body>
</html>