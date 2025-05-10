<?php
$conn = new mysqli("localhost", "root", "", "neet_mock_test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST['subject'];
    $question = $_POST['question'];
    $a = $_POST['option_a'];
    $b = $_POST['option_b'];
    $c = $_POST['option_c'];
    $d = $_POST['option_d'];
    $correct = $_POST['correct_option'];

    $stmt = $conn->prepare("INSERT INTO questions (subject, question, option_a, option_b, option_c, option_d, correct_option) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $subject, $question, $a, $b, $c, $d, $correct);
    $stmt->execute();
    echo "<p>✅ Question Added Successfully!</p>";
}
?>

<h2>Add New Question</h2>
<form method="post">
    Subject: 
    <select name="subject" required>
        <option value="Biology">Biology</option>
        <option value="Physics">Physics</option>
        <option value="Chemistry">Chemistry</option>
    </select><br><br>
    
    Question:<br>
    <textarea name="question" rows="4" cols="80" required></textarea><br><br>

    Option A: <input type="text" name="option_a" required><br>
    Option B: <input type="text" name="option_b" required><br>
    Option C: <input type="text" name="option_c" required><br>
    Option D: <input type="text" name="option_d" required><br><br>

    Correct Option:
    <select name="correct_option" required>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br><br>

    <button type="submit">Add Question</button>
</form>