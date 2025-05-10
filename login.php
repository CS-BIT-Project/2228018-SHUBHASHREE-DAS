<?php
session_start();
$conn = new mysqli("localhost", "root", "", "smartprep");
if ($conn->connect_error) die("DB Error");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();

  if ($user && password_verify($password, $user["password"])) {
    $_SESSION["username"] = $user["username"];
    $_SESSION["full_name"] = $user["full_name"];
    header("Location: index.php");
    exit;
  } else {
    $error = "❌ Invalid username or password.";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login - SMARTPrep</title>
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
    <h2 class="mb-4">Login to Your Account</h2>
    <?php if (isset($_GET['registered'])) echo "<div class='alert alert-success'>✅ Registered! You can now login.</div>"; ?>
    <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form method="POST">
      <div class="mb-3">
        <input name="username" class="form-control" placeholder="Username" required />
      </div>
      <div class="mb-3">
        <input name="password" type="password" class="form-control" placeholder="Password" required />
      </div>
      <button type="submit" class="btn btn-custom w-100">Login</button>
      <p class="mt-3">Don't have an account? <a href="signup.php" class="text-info">Sign up</a></p>
    </form>
  </div>
</body>
</html>