<?php
$success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = new mysqli("localhost", "root", "", "smartprep");
  if ($conn->connect_error) die("Connection failed");

  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $stmt = $conn->prepare("INSERT INTO feedbacks (name, email, message) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $message);
  $stmt->execute();

  $success = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Feedback Form - SMARTPrep</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #1a1a2e, #16213e);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      width: 400px;
      text-align: center;
    }
    h2 { margin-bottom: 10px; }
    .input-group { margin: 10px 0; text-align: left; }
    label { display: block; font-weight: 600; margin-bottom: 5px; }
    input, textarea {
      width: 100%;
      padding: 8px;
      border-radius: 6px;
      border: none;
      outline: none;
      font-size: 14px;
      color: #333;
    }
    textarea { resize: none; height: 80px; }
    button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
    }
    .submit-btn {
      background: #ff5733;
      color: white;
      font-weight: bold;
      transition: 0.3s;
    }
    .submit-btn:hover {
      background: #e04c2f;
    }
    .home-btn {
      background: #00adb5;
      color: white;
      font-weight: bold;
      transition: 0.3s;
    }
    .home-btn:hover {
      background: #0097a7;
    }
    .success-message {
      display: <?= $success ? 'block' : 'none' ?>;
      color: #0f0;
      font-weight: bold;
      margin-top: 10px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Feedback Form</h2>
    <p>We'd love to hear your thoughts!</p>

    <form method="POST" action="">
      <div class="input-group">
        <label for="name">Your Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
      </div>

      <div class="input-group">
        <label for="email">Your Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
      </div>

      <div class="input-group">
        <label for="message">Your Feedback</label>
        <textarea name="message" id="message" placeholder="Write your feedback..." required></textarea>
      </div>

      <button type="submit" class="submit-btn">Submit Feedback</button>
      <button type="button" class="home-btn" onclick="goHome()">Go to Homepage</button>

      <p id="successMessage" class="success-message">Thank you for your feedback! 🎉</p>
    </form>
  </div>

  <script>
    function goHome() {
      window.location.href = "index.php";
    }
  </script>

</body>
</html>