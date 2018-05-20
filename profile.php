<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width">
<title>COMMERCE | The only online store</title>
<link rel="stylesheet" href="style.css">
</head>
    
<body>

    <div id="content">
        <h1>PROFILE</h1>
        <div id="content_1">
            <?php
                $userid = $_POST["user"];
                echo '<h1>Welcome '.$userid.'</h1><br>';
                echo '<h3>Password is '.$_POST["password"].'</h3>';
            ?>
            <br><br>
            <a style="color:gray;" href="../Thinkpad">Go to store</a>
        </div>
    </div>

</body>
</html>



