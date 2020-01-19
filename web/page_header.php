<link rel="stylesheet" type="text/css" href="homepage.css">
<div class = "navbar">
    <a
        href="home.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "home.php"){
                echo "class=\"active\"";
            }
        ?>
    >
    Home
    </a>
    
    <a
        href="assignment.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "assignment.php"){
                echo "class=\"active\"";
            }
        ?>
    >
    Assignment
    </a>
</div>