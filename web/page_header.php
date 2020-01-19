<link rel="stylesheet" type="text/css" href="homepage.css">
<div id="navbar" >
    <a
        href="home.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "home.php"){
                echo "id=\"hover\"";
            }
        ?>
    >
    <a>Home</a>
    </a>
    
    <a
        href="assignment.php"
        <?php
            if(basename($_SERVER['PHP_SELF']) == "assignment.php"){
                echo "id=\"hover\"";
            }
        ?>
    >
    <a>Assignment</a>
    </a>
</div>