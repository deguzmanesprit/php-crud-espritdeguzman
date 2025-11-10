<?php

include 'config/db.php';

$sql = "SELECT * FROM students ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Students</title>
    <style>
        body {
            font-family: Arial;
            background: #f3f4f6;
            padding: 40px;
        }
        .container {
            width: 90%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #2563eb;
            color: white;
        }
        tr:hover {
            background-color: #e5e7eb;
        }
        a.btn, .back-btn {
            text-decoration: none;
            padding: 8px 12px;
            background: #2563eb;
            color: white;
            border-radius: 5px;
        }
        .btn-edit {
            background: #fbbf24;
            color: black;
        }
        .btn-delete {
            background: #ef4444;
        }
        .top-actions {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Records</h2>

    <div class="top-actions">
        <a href="index.php" class="back-btn">⬅ Back to Homepage</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Student No</th>
            <th>Full Name</th>
            <th>Branch</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Date Added</th>
            <th>Actions</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['student_no']; ?></td>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['date_added']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-delete">Delete</a>
            </td>
        </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='8'>No student records found.</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
