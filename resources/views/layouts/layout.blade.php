<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light" data-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- Author --}}
  <meta name="author" content="{{ env('AUTHOR_NAME') }}" />
  {{-- Description --}}
  <meta name="description" content="{{ $description }}" />
  {{-- Keywords --}}
  <meta name="keywords" content="{{ $keywords }}" />
  {{-- Title --}}
  <title>{{ $title }}</title>
  {{-- Icon --}}
  <link rel="shortcut icon" href={{ Vite::asset('resources/image/logo.svg') }} type="image/x-icon" />
  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" />
  {{-- AOS --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  {{-- AlpineJs --}}
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  {{-- Scripts --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  @include('layouts.includes.header')
  {{ $slot }}
  @include('layouts.includes.footer')
</body>
</html>
