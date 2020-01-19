<link rel="stylesheet" type="text/css" href="homepage.css">
<h1>Atsushi's Home Page</h1>
<div>
    <p  herf="home.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "home.php"){
                echo "class=\"active\"";
            }
        ?>
    >Home Page</p>
    
    <p  herf="assignmen.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "assignment.php"){
                echo "class=\"active\"";
            }
        ?>
    >Assignment</p>
</div>