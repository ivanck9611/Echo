<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="wrapper">
            <?php
                include("content/wrapper.inc.php");
            ?>
                
            <div class="banner">
                <?php
                    include("content/banner.inc.php");
                ?>
            </div>
            <div class = "navigation">
                <?php
                    include("content/navigation.inc.php");
                ?>
            </div>
            <div class="searchbox">
                <?php
                    include("content/searchbox.inc.php");
                ?>
            </div>
            <div class="collection">
                <link rel="stylesheet" type="text/css" href="Styles/collection.css">
                <?php
                    echo"<p>COLLECTION</p>";
                ?>
            </div>
            
        </div>
 </body>
 <footer>
         <?php
            include("content/footer.inc.php")
         ?>
    </footer>
</html>