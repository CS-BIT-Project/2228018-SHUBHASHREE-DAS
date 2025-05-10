<?php
$conn = new mysqli("localhost", "root", "", "neet_mock_test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch questions from database
$result = $conn->query("SELECT * FROM questions");
echo "<form action='submit_test.php' method='post'>";
while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['question']}</p>";
    echo "<label><input type='radio' name='q{$row['id']}' value='A'> A) {$row['option_a']}</label><br>";
    echo "<label><input type='radio' name='q{$row['id']}' value='B'> B) {$row['option_b']}</label><br>";
    echo "<label><input type='radio' name='q{$row['id']}' value='C'> C) {$row['option_c']}</label><br>";
    echo "<label><input type='radio' name='q{$row['id']}' value='D'> D) {$row['option_d']}</label><br><hr>";
}
echo "<button type='submit'>Submit Test</button>";
echo "</form>";

$conn->close();
?>