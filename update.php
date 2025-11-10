<?php

include 'config/db.php';

if (!isset($_GET['id'])) {
    echo "No student selected!";
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "Student not found!";
    exit;
}

$student = $result->fetch_assoc();

$message = "";

if (isset($_POST['update'])) {
    $student_no = $_POST['student_no'];
    $fullname = $_POST['fullname'];
    $branch = $_POST['branch'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $update_sql = "UPDATE students SET 
                    student_no = '$student_no',
                    fullname = '$fullname',
                    branch = '$branch',
                    email = '$email',
                    contact = '$contact'
                  WHERE id = $id";

    if ($conn->query($update_sql)) {
        header("Location: read.php?updated=1");
        exit;
    } else {
        $message = "<p class='error'>❌ Error updating student: " . $conn->error . "</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Student</title>
    <style>
        body {
            font-family: Arial;
            background: #f3f4f6;
            padding: 40px;
        }
        .container {
            width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .btn:hover {
            background: #1e40af;
        }
        .back {
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            color: #2563eb;
        }
        .error {
            padding: 10px;
            background: #fee2e2;
            border-left: 4px solid #ef4444;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Update Student</h2>

    <?php echo $message; ?>

    <form method="POST">

        <label>Student Number:</label>
        <input type="text" name="student_no" value="<?php echo $student['student_no']; ?>" required>

        <label>Full Name:</label>
        <input type="text" name="fullname" value="<?php echo $student['fullname']; ?>" required>

        <label>Branch:</label>
        <select name="branch" required>
            <option value="Quezon City" <?php if($student['branch'] == 'Quezon City') echo 'selected'; ?>>Quezon City</option>
            <option value="Cubao" <?php if($student['branch'] == 'Cubao') echo 'selected'; ?>>Cubao</option>
            <option value="Marikina" <?php if($student['branch'] == 'Marikina') echo 'selected'; ?>>Marikina</option>
            <option value="Manila" <?php if($student['branch'] == 'Manila') echo 'selected'; ?>>Manila</option>
        </select>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $student['email']; ?>" required>

        <label>Contact:</label>
        <input type="text" name="contact" value="<?php echo $student['contact']; ?>" required>

        <button type="submit" name="update" class="btn">Update Student</button>
    </form>

    <a href="read.php" class="back">⬅ Back to Student List</a>

</div>

</body>
</html>
