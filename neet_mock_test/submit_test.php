<?php
$conn = new mysqli("localhost", "root", "", "neet_mock_test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$score = 0;
$total = 0;

$result = $conn->query("SELECT * FROM questions");
while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $correct = $row['correct_option'];
    if (isset($_POST["q$id"])) {
        $total++;
        if ($_POST["q$id"] == $correct) {
            $score++;
        }
    }
}

echo "<h2>Your Score: $score / $total</h2>";
$conn->close();
?>