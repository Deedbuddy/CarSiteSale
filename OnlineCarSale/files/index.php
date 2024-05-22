<!DOCTYPE html>

<html>
    <head>
        <title>Online Shop - Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>



<?php include 'header.php';?>
            
            <form method="post" action="log.php">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" name="username" placeholder="username">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><button type="submit" class="btn btn-primary btn-block">Login</button></span>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon">Not Registered yet?  <a href="register.php"> Click Here</a></span>
          
                </div>
            </form>
            <br>
        </div>
        <?php
        
        ?>
    </body>
</html>
