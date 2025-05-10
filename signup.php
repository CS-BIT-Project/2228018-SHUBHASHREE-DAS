<?php
$conn = new mysqli("localhost", "root", "", "smartprep");
if ($conn->connect_error) die("DB Error");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["full_name"];
  $username = $_POST["username"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  if (preg_match('/\s/', $username)) {
    $error = "❌ Username should not contain spaces.";
  } else {
    $stmt = $conn->prepare("INSERT INTO users (full_name, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $username, $password);
    if ($stmt->execute()) {
      header("Location: login.php?registered=1");
      exit;
    } else {
      $error = "❌ Username already exists.";
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up - SMARTPrep</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(120deg, #1a1a2e, #16213e);
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }
    .container {
      margin-top: 80px;
      max-width: 500px;
      background: #0f3460;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }
    .btn-custom {
      background: #29b6f6;
      color: black;
      font-weight: 600;
    }
    .btn-custom:hover {
      background: #00bcd4;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container text-center">
    <h2 class="mb-4">Create Your Account</h2>
    <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form method="POST">
      <div class="mb-3">
        <input name="full_name" class="form-control" placeholder="Full Name" required />
      </div>
      <div class="mb-3">
        <input name="username" class="form-control" placeholder="Username (no space)" required />
      </div>
      <div class="mb-3">
        <input name="password" type="password" class="form-control" placeholder="Password" required />
      </div>
      <button type="submit" class="btn btn-custom w-100">Sign Up</button>
      <p class="mt-3">Already have an account? <a href="login.php" class="text-info">Login</a></p>
    </form>
  </div>
</body>
</html>