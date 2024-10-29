<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="icon" href="https://livewire.laravel.com/apple-touch-icon.png">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">
<div class="max-w-2xl mx-auto p-6">

    {{-- Navigation block --}}
    <div class="shadow-lg rounded-lg p-6 mb-8">
        {{-- Title --}}
        <h1 class="text-3xl font-semibold text-center mb-6 text-gray-700">Navigation</h1>
        <nav class="flex justify-center space-x-8">

            {{-- Todos --}}
            <a wire:navigate  href="/"
               class="text-gray-600 hover:text-blue-500 transition-colors duration-300
               @if(request()->is('/')) font-semibold @endif">
                Todos
            </a>

            {{-- Counter --}}
            <a wire:navigate href="/counter"
               class="text-gray-600 hover:text-blue-500 transition-colors duration-300
               @if(request()->is('counter')) font-semibold @endif">
                Counter
            </a>

            {{-- Posts --}}
            <a wire:navigate href="/posts"
               class="text-gray-600 hover:text-blue-500 transition-colors duration-300
               @if(request()->is('posts')) font-semibold @endif">
                Posts
            </a>

            {{-- Create Post --}}
            <a wire:navigate href="/create_post"
               class="text-gray-600 hover:text-blue-500 transition-colors duration-300
               @if(request()->is('create_post')) font-semibold @endif">
                Create Post
            </a>
        </nav>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-6">
        {{ $slot }}
    </div>
</div>
</body>
</html>
