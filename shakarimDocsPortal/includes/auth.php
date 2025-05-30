

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
            include "../assets/css/style.css";
        ?>

        .content{
            border-radius: 10px;
            box-shadow: rgb(10, 50, 100) 5px 5px 20px 0px;
        }

        .auth_form{
            max-width: 800px;
            height: fit-content;
            margin: auto;
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .form_separater{
            width: 100%;
        }
        .form_separater input{
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
            padding-top: 10px;
            padding-bottom: 10px;
            border: none;
            border-bottom: 3px rgb(50, 100, 200) solid;
            font-size: 14pt;
            text-align: center;
            text-transform: uppercase;
        }
        .form_separater *{
            margin-top: 20px;
        }
        .btn_3d_container{
            width: 200px;
            height: 50px;
            background: rgb(29, 76, 170);
            border-radius: 5px;
            font-size: 16pt;
            text-transform: uppercase;
            margin-top: 40px;
        }
        .form_btn{
            margin: 0;
            width: 100%;
            height: 100%;
            transform: translate(0px, -10px);
            background: rgb(50, 100, 200);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 14pt;
        }
        .form_btn:hover{
            transform: ;
        }
        .form_btn:active{
            transform: scale(0);
            transform: translate(0px, 0px);
        }

    </style>
</head>
<body style="background: rgb(50, 100, 200);">
    
    <div class="wrapper">
        <div class="main">
            <div class="content">
                <br>
                <form action="auth_logic.php" method="post" class="auth_form">
                    <div class="title">
                        <center>
                            Авторизация
                        </center>
                    </div>
                    <div class="form_separater">
                        <input type="number" name="user_login" placeholder="login" required>
                    </div>
                    
                    <div class="form_separater">
                        <input type="password" name="user_password" placeholder="password" required>
                    </div>

                    <div class="form_separater">
                        <center>
                            <div class="btn_3d_container">
                                <button class="form_btn" type="submit">войти</button>
                            </div>
                        </center>
                    </div>
                    
                </form>
                <br>
            </div>
        </div>
    </div>

    
</body>
</html>

