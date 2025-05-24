<!-- resources/views/register.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            width: 350px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
        }

        h2 {
            color: #102c57;
            margin-bottom: 30px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 25px;
            background-color: #d3e0f0;
            font-size: 16px;
            text-align: center;
        }

        button {
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            border: none;
            border-radius: 25px;
            background-color: #102c57;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #0b1d3a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>REGISTER</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
