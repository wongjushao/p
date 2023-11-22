<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
    .btn{
        @apply rounded-md px-2 py-1 text-center font-medium shadow-sm text-slate-700 ring-1 ring-slate-700/10 hover:bg-slate-50 
    }
    .link{
        @apply font-medium text-gray-700 underline decoration-pink-500
    }
    </style>
    @vite('resources/css/app.css')
    <title>Laravel 10 Task List App</title>
    @yield('styles')
</head>
<body class="contanier mx-auto mt-10 mb-10 max-w-lg" >
    <h1 class="text-2xl mb-4">@yield('title')</h1>
    <div>
        @if (session()->has('success'))
            <div>{{session('success')}}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>