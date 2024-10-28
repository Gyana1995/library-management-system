<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            padding: 15px;
        }
        .sidebar a {
            color: #ffffff;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="text-white">User Panel</h2>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Available Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Borrowed Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <header class="d-flex justify-content-between align-items-center mb-4">
            <h1>Welcome, [User Name]</h1>
        </header>

        <h2>Your Borrowed Books</h2>
        <ul class="list-group mb-4">
            <li class="list-group-item">"The Great Gatsby" - Due on: 2024-10-30</li>
            <li class="list-group-item">"1984" - Due on: 2024-11-05</li>
        </ul>

        <h2>Available Books</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>The Catcher in the Rye</td>
                    <td>J.D. Salinger</td>
                    <td><button class="btn btn-success">Borrow</button></td>
                </tr>
                <tr>
                    <td>To Kill a Mockingbird</td>
                    <td>Harper Lee</td>
                    <td><button class="btn btn-success">Borrow</button></td>
                </tr>
                <tr>
                    <td>Pride and Prejudice</td>
                    <td>Jane Austen</td>
                    <td><button class="btn btn-success">Borrow</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
