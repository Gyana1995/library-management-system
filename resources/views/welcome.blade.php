<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            margin: 0;
        }
        .welcome-container {
            text-align: center;
            padding: 2em;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }
        .btn-custom {
            width: 150px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to the Library Management System</h1>
        <p>Manage books, track borrowings, and simplify your library experience.</p>
        
        <!-- Buttons for Login and Register -->
        <div>
            <a href="/login" class="btn btn-primary btn-custom">Login</a>
            <a href="/register" class="btn btn-success btn-custom">Register</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
