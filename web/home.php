<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="homepage.css" rel="stylesheet" type="text/css">
<script src="homepage.js"></script>
<title>Atsushi's Home</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script> 
    // This idea was taken and used from https://www.w3schools.com/jquery/jquery_css.asp
    $(document).ready(function(){
      $("#button3").click(function(){
        $("div").css("background-color", "yellow");
      });
    });
    // This idea was taken and used from https://www.w3schools.com/jquery/jquery_fade.asp
    $(document).ready(function(){
      $("#button4").click(function(){
        $("#div3").fadeOut(3000);
        
      });
    });
</script>
</head>

<body>
    
    <div class="div1" id="first_div">
    This is the first div!
    </div>
    <div class="" id="div2"> 
    This is the second div!
    </div>
    <div class="" id="div3">
    This is the third div!
    </div>
    <input type="button" value="Click Me" onclick="clickMe();">
    <br/>
    <br/>
    
    <label for="colorText">Color:</label>
    <input type="text" id="colorText"></input>
    <button onclick="changeColor();">Change Color For Div1</button><br/>
    <button id = "button3" onclick="clickForChange();">Change All Colors</button><br/>
    <button id = "button4" onclick="clickForChange();">Fading Out</button>
</body>
</html>