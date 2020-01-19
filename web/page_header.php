<link rel="stylesheet" type="text/css" href="homepage.css">
<h1>Atsushi's Home Page</h1>
<div>
    <a  herf="home.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "home.php"){
                echo "class=\"active\"";
            }
        ?>
    >Home Page</a>
    
    <a  herf="assignmen.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "assignment.php"){
                echo "class=\"active\"";
            }
        ?>
    >Assignment</a>
</div>