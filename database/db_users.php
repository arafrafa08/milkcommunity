<?php

    class Users{

        private $mysqli;

        function __construct($conn){
            $this->mysqli = $conn;
        }

		function registerUsers($username,$password){
            $db = $this->mysqli->conn;
            $check = mysqli_num_rows($db->query("SELECT * FROM users WHERE username='$username'"));
                if ($check > 0) {
                    echo "<script>alert('Register failed, Username Duplicate!');document.location.href='index.php'</script>";
                } else {
                    $db->query("INSERT INTO users VALUES('','$username','$password')");
                    echo "<script>alert('Register Success!');document.location.href='index.php'</script>";
                }
        }

    }

?>