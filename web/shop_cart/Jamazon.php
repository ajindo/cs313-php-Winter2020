<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../homepage.css">
<script src="functions.js"></script>
<title>Shopping Cart</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

</script>
</head>
    <body class="Jamazon">
        <ul>
            <li>
                <a id="bt">
                <image src="black_thunder.jpg">
                <p>Black Thunder</p>
                <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
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


                </a>
            </li>
            <li>
                Mitsuya Cider Candy
            </li>
            <li>
                Soy Souce
            </li>
            <li>
                NONIO(Tooth Paste)
            </li>
            <li>
                Hair Wax
            </li>
            <li>
                Mayo
            </li>
            <li>
                Ketchup
            </li>
            <li>
                Pepper & Salt
            </li>
            <li>
                Deodorant
            </li>
            <li>
                Nail Clipper
            </li>
        </ul>

    </body>
</html>