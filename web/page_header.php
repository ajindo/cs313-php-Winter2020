<link rel="stylesheet" type="text/css" href="homepage.css">
<div id="header1" class = "navbar">
    <a
        href="home.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "home.php"){
                echo "class=\"active\"";
            }
        ?>
    >
    <a>Home</a>
    </a>
    
    <a
        href="assignment.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "assignment.php"){
                echo "class=\"active\"";
            }
        ?>
    >
    <a>Assignment</a>
    </a>
</div>