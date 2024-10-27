<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Styling similar to the previous example */
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

        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .login-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group input {
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

        .btn-login {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .btn-login:hover {
            background-color: #45a049;
        }

        .btn-reload {
            font-size: 14px;
            cursor: pointer;
            color: #007bff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf

            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <!-- CAPTCHA with reload button -->
            <div class="form-group captcha-container">
                <div id="captcha-question" class="captcha-image">{{ session('captcha_question') }}</div>
                <button type="button" class="btn-reload" onclick="reloadCaptcha()">Reload</button>
            </div>
            <div class="form-group">
                <input type="text" name="captcha" class="form-control" placeholder="Answer" required>
            </div>

            <button type="submit" class="btn btn-login">Login</button>
            <a href="{{ route('register') }}" class="btn btn-register">Register</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(()=>{
            reloadCaptcha();
        })
        function reloadCaptcha() {
            $.ajax({
                url: "{{ route('captcha.refresh') }}",
                type: 'GET',
                success: function(data) {
                    $('#captcha-question').text(data.question);
                }
            });
        }
    </script>
</body>
</html>
