<?php
$conn = new mysqli("localhost", "root", "", "neet_mock_test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$subject = $_GET['subject'] ?? 'Biology';
$result = $conn->query("SELECT * FROM questions WHERE subject='$subject' ORDER BY RAND() LIMIT 10");

echo "<h2>Mock Test - $subject</h2>";
echo "<form method='post' action='submit_test.php'>";
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>" . $row['question'] . "</strong></p>";
    echo "<label><input type='radio' name='q{$row['id']}' value='A'> A) {$row['option_a']}</label><br>";
    echo "<label><input type='radio' name='q{$row['id']}' value='B'> B) {$row['option_b']}</label><br>";
    echo "<label><input type='radio' name='q{$row['id']}' value='C'> C) {$row['option_c']}</label><br>";
    echo "<label><input type='radio' name='q{$row['id']}' value='D'> D) {$row['option_d']}</label><br><hr>";
}
echo "<button type='submit'>Submit Test</button>";
echo "</form>";

$conn->close();
?>