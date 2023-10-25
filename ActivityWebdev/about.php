<!DOCTYPE html>
<html>
<head>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      background-image: url(images/pic3.PNG);
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
      font-size: 20px;
      margin: 0 0 20px;
      color: #333;
    }

    .input-field {
      margin: 10px 0;
    }

    .about-text {
      font-weight: bold;
      color: #333;
    }

    input, textarea {
      width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
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
  <title>About me\t</title>
  <link rel="stylesheet" href="./styles/about.css">

</head>
<body>
  <div class="wrapper">
    <form action="details.php" method="post">
      <h2>About me</h2>
        <div class="input-field">
        <textarea type="text" id="username" name="username" placeholder="Enter Username" required></textarea>
      </div>
      <div class="input-field">
        <textarea name="about" id="about" cols="30" rows="5" placeholder="Enter something about yourself" required></textarea>
      </div>
      <div class="input-field">
        <div class="about-text">Enter your date of birth</div>
        <input type="date" id="bdate" name="bdate" required>
      </div>
      <div class="input-field">
        <div class="about-text">Enter your phone number</div>
        <input type="number" id="contact" name="contact" required>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>