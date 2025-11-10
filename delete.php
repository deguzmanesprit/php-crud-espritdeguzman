<?php

include 'config/db.php';

if (!isset($_GET['id'])) {
    echo "No student selected!";
    exit;
}

$id = $_GET['id'];

$sql = "SELECT fullname FROM students WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "Student not found!";
    exit;
}

$student = $result->fetch_assoc();
$fullname = $student['fullname'];

if (isset($_POST['confirm_delete'])) {
    $delete_sql = "DELETE FROM students WHERE id = $id";

    if ($conn->query($delete_sql)) {
        header("Location: read.php?deleted=1"); 
        exit;
    } else {
        echo "Error deleting student: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete Student</title>
    <style>
        body {
            font-family: Arial;
            background: #f3f4f6;
            padding: 40px;
        }
        .container {
            width: 450px;
            margin: auto;
            background: white;
            padding: 25px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #aaa;
        }
        .warning-box {
            background: #fef3c7;
            border-left: 5px solid #f59e0b;
            padding: 15px;
            margin-bottom: 20px;
        }
        .danger-text {
            color: #dc2626;
            font-weight: bold;
        }
        .btn {
            padding: 10px 15px;
            border: none;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-delete {
            background: #dc2626;
            color: white;
        }
        .btn-cancel {
            background: #6b7280;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .btn-delete:hover {
            background: #b91c1c;
        }
        .btn-cancel:hover {
            background: #4b5563;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Delete Student</h2>

    <div class="warning-box">
        <p class="danger-text">⚠ WARNING! This action cannot be undone.</p>
        <p>You are about to delete the record of:</p>
        <h3><?php echo $fullname; ?></h3>
        <p>Are you sure you want to proceed?</p>
    </div>

    <form method="POST">
        <button type="submit" name="confirm_delete" class="btn btn-delete">✅ Yes, Delete</button>
        <a href="read.php" class="btn-cancel">❌ Cancel</a>
    </form>
</div>

</body>
</html>
