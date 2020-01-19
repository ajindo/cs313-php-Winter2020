<link rel="stylesheet" type="text/css" href="homepage.css">
<div id="header1" class = "navbar">
    <div
        href="home.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "home.php"){
                echo "class=\"active\"";
            }
        ?>
    >
    <a>Home</a>
    </div>
    
    <div
        href="assignment.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "assignment.php"){
                echo "class=\"active\"";
            }
        ?>
    >
    <a>Assignment</a>
    </div>
</div>