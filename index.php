<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Branch Directory System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e8eef3;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            background: #ffffff;
            margin: 100px auto;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        h1 {
            color: #1f2937;
            margin-bottom: 35px;
        }

        a.nav-btn {
            display: block;
            text-decoration: none;
            background: #2563eb;
            color: white;
            padding: 14px;
            margin: 12px 0;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s;
        }

        a.nav-btn:hover {
            background: #1e40af;
            transform: scale(1.05);
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Student Branch Directory System</h1>

    <a href="create.php" class="nav-btn">➕ Add Student</a>
    <a href="read.php" class="nav-btn">📋 View Students</a>
    <a href="read.php" class="nav-btn">✏️ Update Student</a>
    <a href="read.php" class="nav-btn">🗑️ Delete Student</a>
</div>

</body>
</html>
