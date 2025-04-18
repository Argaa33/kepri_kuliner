<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <title>Login Page</title>
</head>

<body>
    <div class="login-container" id="loginform">
        <img src="assets/icon/selamat-datang.png" alt="Jogfood">
        <form method="post" action="php/login.php" class="form">
            <div class="flex-column align-items-center">
                <label for="username">Username</label>
            </div>
            <div class="inputForm">
                <i class="fa-solid fa-user"></i>
                <input placeholder="Enter your Username" class="input" type="text" name="username" id="username">
            </div>
            <div class="flex-column">
                <label for="password">Password</label>
            </div>
            <div class="inputForm">
                <i class="fa-solid fa-lock"></i>
                <input placeholder="Enter your Password" class="input" type="password" name="password" id="password">
                <i class="fa-solid fa-eye" id="togglePassword"></i>
            </div>
            <div class="flex-row">
                <div>
                    <input type="checkbox" id="remember-me" name="remember">
                    <label for="remember-me">Remember me</label>
                </div>
            </div>
            <button class="button-submit" name="login">Sign In</button>
            Tidak Punya Akun?<span class="span"><a href='registrasiform.php' style="text-decoration: none;">Daftar
                    Disini!</a></span>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>

