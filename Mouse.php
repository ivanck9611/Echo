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
            
            <div class = "productslot">
                <?php
                    $link = mysqli_connect("localhost", "root", "", "Echo");
                    if($link === false){
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                    include("content/productslot.inc.php");
                    
                    mysqli_close($link);
                ?> 
            </div> 
            
            
            <footer>
                <?php
                    include("content/footer.inc.php")
                ?>
            </footer>
        </div>
        
        
    </body>
    
</html>
