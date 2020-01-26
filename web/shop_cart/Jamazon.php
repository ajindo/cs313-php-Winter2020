<?php 
	session_destroy();
    unset($_SESSION);
    session_start();

?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../homepage.css">
<script src="functions.js"></script>
<title>Shopping Cart</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--
<script>
    jQuery(document).ready(function(){
    // This button will increment the value
    $('[data-quantity="plus"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});

</script> -->
</head>
    <body class="Jamazon">
        <form action="" method="post">
                <a id="bt">
                    <image src="black_thunder.jpg">
                    Black Thunder
                    <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons
                    <div class="plus_minus_section">
                        <div class="input-group plus-minus-input">
                            <div class="input-group-button">
                                <button type="button" class="cricle" data-quantity="minus" data-field="quantity" value="-">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                            </div>
                                <input class="input-group-field" type="number" name="quantity" value="0" size="4">
                            <div class="input-group-button">
                                <button type="button" class="circle" data-quantity="plus" data-field="quantity">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>-->
                    <input type= "textbox" name="quantity1">
                </a>
                <a>
                    <image src="candy.jpg">
                    Mitsuya Cider Candy
                    <input type= "textbox" name="quantity2">
                </a>
                <a>
                    <image src="soy_souce.jpg">
                    Soy Souce
                    <input type= "textbox" name="quantity3">
                </a>
                <a>
                    <image src="NONIO.png">
                    NONIO(Tooth Paste)
                    <input type= "textbox" name="quantity4">
                </a>
                <a>
                    <image src="hair_wax.jpg">
                    Hair Wax
                    <input type= "textbox" name="quantity5">
                </a>
            <input type="submit" name="addCart" value="Add to Cart">
        </form>   
        <?php 
            if(isset($_POST['addCart'])){
                $_SESSION['pictureUrl'] = $_POST['picture'];
             }
          ?>
        ?>
    </body>
</html>