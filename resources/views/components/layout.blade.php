@php use Illuminate\Support\Facades\Vite; @endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    <meta name="description" content="Insert page description">
    <meta name="author" content="Preston Gramberg">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk pb-20">
<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div><a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
            </a></div>
        <div class="space-x-6 font-bold">
            <a href="#">Job</a>
            <a href="#">Careers</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
        </div>

        @auth()
            <div class="space-x-6 font-bold flex">
                <a href="#">Post a Job</a>

                <form action="POST" action="/logout">
                    @csrf
                    @method('DELETE')

                    <button>Log Out</button>
                </form>
            </div>
        @endauth

        @guest()
            <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Log In</a>
            </div>
        @endguest
    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</div>
</body>
</html>
