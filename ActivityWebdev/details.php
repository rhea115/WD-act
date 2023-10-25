<!DOCTYPE html>
<html>
<head>
  <style>
 body{
  font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      background-image: url(images/pic3.PNG);
  background-attachment: fixed;
  
}

    .wrapper {
  text-align: center;
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
  <title>Details</title>
  <link rel="stylesheet" href="./styles/details.css">
    <?php
        function getZodiacSign($month, $day) {
            $signs = array(
                array("Aquarius", "Pisces"),
                array("Pisces", "Aries"),
                array("Aries", "Taurus"),
                array("Taurus", "Gemini"),
                array("Gemini", "Cancer"),
                array("Cancer", "Leo"),
                array("Leo", "Virgo"),
                array("Virgo", "Libra"),
                array("Libra", "Scorpio"),
                array("Scorpio", "Sagittarius"),
                array("Sagittarius", "Capricorn"),
                array("Capricorn", "Aquarius")
            );
        
            if (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
                return "Capricorn";
            } elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
                return "Aquarius";
            } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
                return "Pisces";
            } elseif (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
                return "Aries";
            } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
                return "Taurus";
            } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
                return "Gemini";
            } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
                return "Cancer";
            } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
                return "Leo";
            } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
                return "Virgo";
            } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
                return "Libra";
            } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
                return "Scorpio";
            } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
                return "Sagittarius";
            }
        }

        $birthdate = $_POST["bdate"];
        list($year, $month, $day) = explode("-", $birthdate);
        $zodiacSign = getZodiacSign((int)$month, (int)$day);
        
    ?>
</head>
<body>
  <div class="wrapper">
    <form method="post">
      <h2>About me</h2>
        <div class="input-field">
        <div class="about-text">Your Name</div>
        <input type="text" name="username" id="username" readonly disabled value="<?php echo $_POST["username"]; ?>" required>
      </div>
      <div class="input-field">
        <div class="about-text">Tell something about yourself</div>
        <textarea name="about" id="about" cols="30" rows="5" readonly disabled required><?php echo $_POST["about"]; ?></textarea>
      </div>
      <div class="input-field">
        <div class="about-text">Your date of birth</div>
        <input type="date" id="bdate" readonly disabled value="<?php echo $_POST["bdate"]; ?>" name="bdate" required>
      </div>
      <div class="input-field">
      <div class="about-text">Your Zodiac Sign</div>
        <input type="text" name="zodiac" id="zodiac" readonly disabled value="<?php echo $zodiacSign; ?>" required>
      </div>
      <div class="input-field">
        <div class="about-text">Enter your phone number</div>
        <input type="number" id="contact" name="contact" readonly disabled value="<?php echo $_POST["contact"]; ?>" required>
      </div>
    </form>
        <a href="index.php" class="back-home">
        <button>Back to home</button>
      </a>
  </div>
</body>
</html>