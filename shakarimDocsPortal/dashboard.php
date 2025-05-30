
<?php

    include "config/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <style>
        <?php
            include "assets/css/style.css";
            include "assets/css/all.css"
        ?>
    </style>
</head>
<body>

    <?php include "includes/header.php" ?>

    <div class="wrapper">
        <div class="main">
            <div class="content">

                <div class="title uppercase">
                    title
                </div>

                <form action="" method="post">

                    <div class="main_form_separator">
                        <input type="text" name="document_name">
                    </div>

                    <div class="main_form_separator">
                        <div class="file_input_container">
                            <input type="file" name="document">
                        </div>
                        
                    </div>

                    <div class="main_form_separator">
                        
                    </div>
                    

                    
                    

                </form>
                
            </div>
        </div>
    </div>

    <? include "includes/footer.php" ?>
    
</body>
</html>

<script>
    <?php
        include "assets/js/script.js";
    ?>
</script>