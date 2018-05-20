<?php
    $var = '<h1>ECOMMERCE | The only online store</h1><br>';
    displayHTML( $var );

    function displayHTML( $title ){
        echo '
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8" name="viewport" content="width=device-width">
        <title>COMMERCE | The only online store</title>
        <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div id="content">
                <div id="content_1">'
                    .$title.'
                    <h3 style="font:12px helvetica;color:lightgray;">(Under Construction)</h3><br><br>
                    <h4>Login or create new account</h4><br><br>
                    <form action="profile.php" method="post">
                        <input class="login" type="text" name="user" placeholder="User Name">
                        </input><br><br>
                        <input class="login" type="password" name="password" placeholder="Password">
                        </input><br><br>
                        <button class="login_button" type="submit">Login</button>
                    </form><br><br>
                    <a><div style="font:12px helvetica;color:lightgray;">Create New Account</div></a>
                </div>
            </div>
        </body>
        </html>
        ';
    }
?>



