<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Branch Directory System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background: white;
            padding: 50px 60px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            width: 500px;
        }

        h1 {
            margin-bottom: 30px;
            color: #1f2937;
        }

        .nav-btn {
            display: block;
            margin: 15px auto;
            padding: 12px 20px;
            width: 70%;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .nav-btn:hover {
            background: #1e40af;
            transform: scale(1.05);
        }

        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #555;
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

    <div class="footer">Developed by: Your Name</div>
</div>
</body>
</html>
