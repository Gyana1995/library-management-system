<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            @if(Auth::check() && (Auth::user()->role === '1'))
            <h2 class="text-white">Admin Panel</h2>
            @endif
            @if(Auth::check() && (Auth::user()->role === '2'))
            <h2 class="text-white">Librarian Panel</h2>
            @endif
            @if(Auth::check() && (Auth::user()->role === '3'))
            <h2 class="text-white">User Panel</h2>
            @endif
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
                @if(Auth::check() && (Auth::user()->role === '1'))
                <li class="nav-item">
                    <a class="nav-link" href="#">Manage Users</a>
                </li>
                @endif
                @if(Auth::check() && (Auth::user()->role === '1' || Auth::user()->role === '2'))
                <li class="nav-item">
                    <a class="nav-link" href="#">Manage Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Available Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
                @endif
                @if(Auth::check() && (Auth::user()->role === '3'))
                <li class="nav-item">
                    <a class="nav-link" href="#">Borrowed Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">View Borrowed Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li> -->

                @endif
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            </ul>
        </div>


        <!-- Main Content -->
        <div class="content">
            <header class="d-flex justify-content-between align-items-center mb-4">
                <h1>Welcome, {{ Auth::user()->name }}</h1>
                @if(Auth::check() && (Auth::user()->role === '1'))
                <a href="#" class="btn btn-primary">Add New User</a>
                @endif
                @if(Auth::check() && (Auth::user()->role === '2'))
                <a href="#" class="btn btn-primary">Add New Book</a>
                @endif
            </header>
