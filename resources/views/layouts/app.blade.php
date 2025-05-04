<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayo Masak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class=" flex flex-col min-h-screen bg-[url('/images/bg-dashboard.jpg')] bg-cover bg-center">
    @include('components.navbar')
    <main class="flex-grow container mx-auto p-4">
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>
