<?php

include 'config/db.php';

$message = "";

if (isset($_POST['submit'])) {
    $student_no = $_POST['student_no'];
    $fullname = $_POST['fullname'];
    $branch = $_POST['branch'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO students (student_no, fullname, branch, email, contact) 
            VALUES ('$student_no', '$fullname', '$branch', '$email', '$contact')";

    if ($conn->query($sql)) {
        $message = "<p class='success'>✅ Student added successfully!</p>";
    } else {
        $message = "<p class='error'>❌ Error: " . $conn->error . "</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 40px;
        }
        .container {
            width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .btn {
            background: #2563eb;
            padding: 10px;
            color: white;
            border: none;
            width: 100%;
            cursor: pointer;
        }
        .btn:hover {
            background: #1e40af;
        }
        .success {
            background: #d1fae5;
            padding: 10px;
            border-left: 5px solid #10b981;
        }
        .error {
            background: #fee2e2;
            padding: 10px;
            border-left: 5px solid #ef4444;
        }
        a {
            text-decoration: none;
            color: #2563eb;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Add Student</h2>

    <!-- Display messages -->
    <?php echo $message; ?>

    <form method="POST">

        <label>Student Number:</label>
        <input type="text" name="student_no" required>

        <label>Full Name:</label>
        <input type="text" name="fullname" required>

        <label>Branch:</label>
        <select name="branch" required>
            <option value="" disabled selected>Select Branch</option>
            <option value="Quezon City">Quezon City</option>
            <option value="Cubao">Cubao</option>
            <option value="Marikina">Marikina</option>
            <option value="Manila">Manila</option>
        </select>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Contact:</label>
        <input type="text" name="contact" required>

        <button type="submit" name="submit" class="btn">Add Student</button>
    </form>

    <br>
    <a href="index.php">⬅ Back to Homepage</a>
</div>

</body>
</html>
