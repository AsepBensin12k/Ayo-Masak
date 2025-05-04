<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        input[type="password"]::-ms-reveal,
        input[type="password"]::-ms-clear,
        input.hide-password-toggle::-webkit-contacts-auto-fill-button,
        input.hide-password-toggle::-webkit-credentials-auto-fill-button {
            display: none !important;
        }
        input.hide-password-toggle::-webkit-credentials-auto-fill-button,
        input.hide-password-toggle::-webkit-caps-lock-indicator {
            visibility: hidden;
            pointer-events: none;
            position: absolute;
            right: 0;
        }
    </style>
</head>
<body class="min-h-screen flex justify-center items-center bg-[radial-gradient(ellipse_at_right,_var(--tw-gradient-stops))] from-[#6f4a8e] via-[#221f3b] to-[#050505]">
    <div class="bg-white bg-opacity-10 backdrop-blur-xl p-6 rounded-xl shadow-xl w-full max-w-sm transition-transform transform hover:scale-105 duration-500">
        @yield('content')
    </div>
</body>
</html>
