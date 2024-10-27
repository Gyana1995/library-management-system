<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url("{{ asset('img/open-book.jpg') }}"); /* Replace with your book image URL */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .register-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group input, .form-group select {
            height: 45px;
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
        }

        .captcha-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .captcha-image {
            background-color: #ddd;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 20px;
            color: #333;
        }

        .btn-register {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .btn-register:hover {
            background-color: #45a049;
        }

        .btn-reload {
            font-size: 14px;
            cursor: pointer;
            color: #007bff;
            text-decoration: underline;
        }
        .error{
            color: red;
        }
        .success{
            color: green;
        }
    </style>
</head>
<body>
    <div class="register-container">
        @foreach($errors->all() as $er)
        <strong class='error'>{{ $er }}</strong><br /> 
        @endforeach
        @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif
        <h1>Register</h1>
        <form action="/register" method="POST">
            @csrf

            <!-- Name input -->
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" >
            </div>

            <!-- Phone number input -->
            <div class="form-group">
                <input type="tel" name="phone" class="form-control" placeholder="Phone Number" >
            </div>

            <!-- Email input -->
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" >
            </div>

            <!-- User Role dropdown -->
            <div class="form-group">
                <select name="role" class="form-control" >
                    <option value="" disabled selected>Select Role</option>
                    <option value="1">Super Admin</option>
                    <option value="2">Librarian</option>
                    <option value="3">User</option>
                </select>
            </div>

            <!-- Password input -->
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" >
            </div>

            <!-- Confirm Password input -->
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" >
            </div>

            <!-- CAPTCHA with reload button -->
            <div class="form-group captcha-container">
                <div id="captcha-question" class="captcha-image"></div> <!-- Placeholder, will be replaced dynamically -->
                <button type="button" class="btn-reload" onclick="reloadCaptcha()">Reload</button>
            </div>
            <div class="form-group">
                <input type="text" name="captcha" class="form-control" placeholder="CAPTCHA Answer" >
            </div>

            <button type="submit" class="btn btn-register">Register</button>
            <a href="{{ route('login') }}" class="btn btn-login">Login</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(()=>{
            reloadCaptcha();
        })
        function reloadCaptcha() {
            $.ajax({
                url: "{{ route('captcha.refresh') }}", // Route for refreshing CAPTCHA
                type: 'GET',
                success: function(data) {
                    $('#captcha-question').text(data.question); // Update the CAPTCHA question
                }
            });
        }
    </script>
</body>
</html>
