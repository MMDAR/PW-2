<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.container {    
    width: 300px;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh;
}
.main {
    width: 100%;
    border: 1px solid rgb(10, 7, 7);
    box-shadow: 3px 5px;
    border-radius: 10px;
    padding: 1.5em;
    align-items: center;
    background-color: rgb(187, 187, 187);
}
input {
    display: block;
    width: 100%;
    box-sizing: border-box;
    height: 25px;
}
button {
    width: 100%;
    font-size: 15px;
    font-weight: bold;
    padding: 5px;
    text-transform: uppercase;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="main">
            <h2 style="text-align: center;">Login</h4>
            <label for="username">Username</label>
            <input type="text" name="" id="Username">
            <label for="password">Password</label>
            <input type="password" name="" id="Password">
            <br>
            <button type="submit" id="Submit" onclick="login()">Login</button>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_GET['Submit'])){
$username = $_GET['Username'];
$password = $_GET['Password'];
if($username == 'admin' && $password == 'admin');
    // '<script>
    //     function login() {
    //         let uname = document.getElementById("Username").value;
    //         let pass = document.getElementById("Password").value;
            
    //         if (uname == "admin" && pass == "admin"){
    //             alert("Yeayy! Berhasil");
    //             location.href = "index.php"
    //         } else {
    //             alert("Sugmadeeck");
    //         }
    //     }
    // </script>';
}
?>

    <script>
        function login() {
            let uname = document.getElementById("Username").value;
            let pass = document.getElementById("Password").value;
            
            if (uname == "admin" && pass == "admin"){
                alert("Selamat datang");
                location.href = "index.php"
            } else {
                alert("Username atau ID salah");
            }
        }
    </script>';

<!-- <script>
    var btn = document.getElementById('Submit');
    btn.addEventListener('click', function() {
      document.location.href = 'index.php';
    });
  </script> -->
