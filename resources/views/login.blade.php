<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Login Page</title>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div id="login" class="w-64 h-80 bg-indigo-50 rounded shadow flex flex-col justify-center items-center">       
        <form class="text-indigo-500 justify-center items-center flex" action="" method="post">
            <fieldset class="border-4 border-dotted justify-center items-center border-indigo-500 p-5">
                <legend class="px-2 italic -mx-2">Welcome again!</legend>
                <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="email">Mail </label>     
                <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-indigo-500" type="email" required="">   
                <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="password">Password  </label>
                <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-indigo-500" type="password" required="">
                <a href="#" class="block text-right text-xs text-indigo-500 text-center mb-4">Forgot Password?</a>
                <a href="#" class="block text-right text-xs text-indigo-500 text-center mb-4">tidak punya akun</a>
                <button class="w-full rounded bg-indigo-500 text-indigo-50 p-2 text-center font-bold hover:bg-indigo-400">Log In</button>
            </fieldset>
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

