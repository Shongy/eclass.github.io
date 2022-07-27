  <html>
    <head>
     <title>Project 4</title>
    </head>

    <body>
            <form name="myForm" onsubmit="return validateForm()">
            Pets: <input type="text" id="pets"> 
            <input type="button" id="addPet" value="Add Pet">
            <br>
            </form>
        <script type="text/javascript">
            function createPetField() {
              var input = document.createElement('input');
              input.type = 'text';
              input.name = 'pet[]';
              return input;
            }

            var form = document.getElementById('myForm');
            document.getElementById('addPet').addEventListener('click', function(e) {
              form.appendChild(createPetField());
            });
        </script>
    </body>
</html>