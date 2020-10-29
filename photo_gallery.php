<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/photo_gallery.css">
    <title><?php echo $_GET['name']?></title>
</head>
<body>
    <h1 id="main_title"><?php echo $_GET['name']?></h1>
    
    <section id="photo_gallery">
        <?php
            $folder = $_GET['folder'];
            $filelist = glob("./images/$folder/*");
            
            foreach($filelist as $key => $filename) {
                echo "<div><img id='$key' class=\"item\" src='".$filename."'></div><br>";
            } 
        ?>
    </section>

    <!-- The modal that pops up when the user clicks on a photo  -->
    <section>
        <div id="myModal">
            <!-- Look up HTML entity names -->
            <span class="close">&times;</span>
            <a class="current_pic" href="" download>
                <img class="modal_content">
            </a>
            <div id="navigate_pics">
                <span class="backwards">&laquo;</span>
                <span class="forward">&raquo;</span>
            </div>
        
        </div>
    </section>
    
    <script src="js/script.js"></script>
</body>
</html>