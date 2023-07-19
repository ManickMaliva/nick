<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>

.list{
    border: 2px solid;
    width: 50%;
    margin: auto;
    display: grid;
    align-items: center;
    height: 100%;
}        
    </style>
</head>
<body>
    <div class="list">

  Name: <?php echo $_POST["name"]; ?><br>Email address: <?php echo $_POST["em"]; ?>
    <br>comment:<?php echo $_POST["te"];?>
    </div>

      
</body>
</html>