<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('{{ asset('storage/background.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }
        .login-box {
            width: 400px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 20px;
            box-shadow: 0px 0px 10px #00000055;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .login-box h2 {
            font-size: 24px;
            font-weight: bold;
            color: #1c1c3f;
            margin-bottom: 30px;
        }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 30px;
            background: #cfd8dc;
        }
        .login-box button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 30px;
            background: #1c1c3f;
            color: white;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        .login-box .register-link {
            margin-top: 15px;
            font-size: 14px;
        }
        .login-box .register-link a {
            color: #1c1c3f;
            text-decoration: none;
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin-top: 10px;
            font-size: 14px;
        }
        .remember-me input {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>LOGIN TO YOUR ACCOUNT</h2>
    <form method="POST" action="/login">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <div class="remember-me">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </div>

        <button type="submit">Login</button>

        <div class="register-link">
            Don’t have an account? <a href="{{ route('register') }}">Register</a>
        </div>
    </form>
</div>

</body>
</html>
