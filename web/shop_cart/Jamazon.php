<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="homepage.css">
<script src="functions.js"></script>
<title>Shopping Cart</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
    <body class="Jamazon">
        <ul>
            <li>
                <a id="bt">
                <image src="black_thunder.jpg">
                    Black Thunder
                <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
                <div class="input-group plus-minus-input">
                <div class="input-group-button">
                    <button type="button" class="button hollow circle" data-quantity="minus" data-field="quantity">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                </div>
                <input class="input-group-field" type="number" name="quantity" value="0">
                <div class="input-group-button">
                    <button type="button" class="button hollow circle" data-quantity="plus" data-field="quantity">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </div>
                </div>


                </a>
            </li>
            <li>
                Mitsuya Cyder Candy
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