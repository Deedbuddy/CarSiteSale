<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $add = $_POST['add'];
            $tele = $_POST['tp'];
            $email = $_POST['email'];
        }



        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ex";


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO login (username, password,address,telephone, email)
VALUES ('".$user."','".$pass."','".$add."','".$tele."','".$email."')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header('location:index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?> 



        ?>
    </body>
</html>
