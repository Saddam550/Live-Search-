<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    li#click {
        border-bottom: 1px solid #c0c0c063;
    cursor: pointer;
    font-size: 15px;
    width: 161px;
    padding: 7px 5px;
    margin: 0px -38px;
    transition: .1s;
    list-style: none;
}
li#click:first-child {
    margin-top: -16px;
}
</style>
</head>
<body>


<input type="text" id="input" name="name"  placeholder="search me">
<input type="submit" id="button"value="Click">



     <div id="show"></div>

     <script src="js/jquery.min.js"></script>

     <script >
         $(document).ready(function(){
             
             $("#input").keyup(function(){

                var a = $("#input").val()
                    $.ajax({
                    url:"dbconnect.php",
                    type:"POST",
                    data:"input="+ a,
                    success:function(data){
                        $("#show").html(data)

                    }
                })

                
                 
             })
         })
         

         $("#input").keyup(function(){          
                $("#show").show()   })

              $(document).on("click", "li", function(){  
             $("#input").val($(this).text())
           
                 
            })
                 
                   
                 
           $("#button").click(function(){          
              
          var name =   $("#input").val()
                 
            })     
     </script>
</body>
</html>