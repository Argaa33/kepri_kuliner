<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP Verification - Kuliner Riau</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
</head>
<body class="bg-cover bg-center min-h-screen flex items-center justify-center" style="background-image: url('{{ asset('images/barelang.jpg') }}');">

    <div class="bg-white bg-opacity-60 backdrop-blur-md rounded-3xl shadow-lg p-10 w-[350px] sm:w-[400px]">
        <h2 class="text-2xl sm:text-3xl font-bold text-center text-black mb-6">OTP VERIFICATION</h2>
        <p class="text-center text-sm text-gray-700 mb-4">Enter the OTP sent to your email</p>

        <form method="POST">
            <div class="mb-6">
                <label for="otp" class="block text-sm font-semibold text-gray-800 mb-1">OTP Code :</label>
                <input type="text" id="otp" name="otp" maxlength="6" required
                       class="w-full px-4 py-2 rounded-full bg-white bg-opacity-70 text-black placeholder-gray-500 focus:ring focus:ring-blue-300 focus:outline-none text-center tracking-widest text-lg">
            </div>

            <div class="flex flex-col gap-4 items-center">
                <button type="submit"
                        class="px-6 py-2 bg-blue-500 text-white rounded-full shadow hover:bg-blue-600 transition text-lg font-semibold w-full">
                    Verify OTP
                </button>

                <button type="button" id="resendBtn"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-full shadow cursor-not-allowed w-full"
                        disabled>
                    Resend OTP (60s)
                </button>
            </div>
        </form>
    </div>

    <script>
        let resendBtn = document.getElementById("resendBtn");
        let countdown = 60;
        let timer = setInterval(() => {
            countdown--;
            resendBtn.textContent = `Resend OTP (${countdown}s)`;
            if (countdown <= 0) {
                clearInterval(timer);
                resendBtn.disabled = false;
                resendBtn.classList.remove("bg-gray-300", "text-gray-700", "cursor-not-allowed");
                resendBtn.classList.add("bg-blue-500", "text-white", "hover:bg-blue-600", "cursor-pointer");
                resendBtn.textContent = "Resend OTP";
            }
        }, 1000);

        resendBtn.addEventListener("click", () => {
            // Logic to request resend OTP here (if backend available)

            // Restart timer
            resendBtn.disabled = true;
            resendBtn.classList.remove("bg-blue-500", "text-white", "hover:bg-blue-600", "cursor-pointer");
            resendBtn.classList.add("bg-gray-300", "text-gray-700", "cursor-not-allowed");
            countdown = 60;
            resendBtn.textContent = `Resend OTP (${countdown}s)`;
            timer = setInterval(() => {
                countdown--;
                resendBtn.textContent = `Resend OTP (${countdown}s)`;
                if (countdown <= 0) {
                    clearInterval(timer);
                    resendBtn.disabled = false;
                    resendBtn.classList.remove("bg-gray-300", "text-gray-700", "cursor-not-allowed");
                    resendBtn.classList.add("bg-blue-500", "text-white", "hover:bg-blue-600", "cursor-pointer");
                    resendBtn.textContent = "Resend OTP";
                }
            }, 1000);
        });
    </script>
</body>
</html>
