<!DOCTYPE html>
<html>
<head>
  <style>
 body {
      font-family: Arial, sans-serif;
      background-image: url(images/pic2.PNG);
  background-attachment: fixed;
    }

    .wrapper {
  text-align: center center;
  margin: 100px auto;
  width: 300px;
  padding: 40px;
  border: 1px solid #ccc;
  border-radius: 20px;
  background-color: #E0B786;
}

h2 {
  font-size: 24px;
  margin: 0 0 20px;
  color: #333;
}

.input-field {
  margin: 10px 0;
}

.input-field input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
}

.input-field label {
  display: block;
  margin: 5px 0;
  font-weight: bold;
  color: #333;
}

.forget {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 10px;
}

.forget input[type="checkbox"] {
  margin-right: 5px;
}

.forget a {
  text-decoration: none;
  color: black;
}

.invalid-pass {
  color: red;
  font-weight: bold;
  margin-top: 10px;
}

button {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #A07949;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

button:hover {
  background-color: #0056b3;
}
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link rel="stylesheet" href="./styles/index.css">
  <?php
    $logIn = false;
    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        $username = "RheamaeNaga";
        $password = "12345";
        
        $userInput = $_POST["username"];
        $userPass = $_POST["password"];

        if($username == $userInput && $password == $userPass)
        {
            header("Location: ./about.php");
        }else{
            $logIn = true;
        }
    }
  ?>
</head>

<body>
  <div class="wrapper">
    <form method="post">
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" name="username" required>
        <label>Enter your username</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <?php
        if($logIn)
        {
            echo "<div class='invalid-pass'>Invalid Password</div>";
        }
      ?>
      <button type="submit">Log In</button>
    </form>
  </div>
</body>
</html>