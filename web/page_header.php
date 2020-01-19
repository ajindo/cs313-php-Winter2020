<link rel="stylesheet" type="text/css" href="homepage.css">
<h1>Atsushi's Home Page</h1>
<div id="header1">
    <a  
        <?php
            if(basename($_SERVER['PHP_SELF']) == "home.php"){
                echo "class=\"active\"";
            }
        ?>
        herf="home.php"
    >Home</a>
    
    <a  
        <?php
            if(basename($_SERVER['PHP_SELF']) == "assignment.php"){
                echo "class=\"active\"";
            }
        ?>
        herf="assignmen.php"
    >Assignment</a>
</div>