<!DOCTYPE html>
<html lang="en">
    
@include('inc.header')

<title>@yield('title', config('app.name'))</title>

<body class="index-page">
    @include('inc.navbar') {{-- Correct way to include the navbar --}}
    
    @yield('content')

    @include('inc.footer') {{-- Correct way to include the footer --}}

    @include('layouts.modals')

<!-- Page Heading -->
@isset($header)
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
@endisset

<!-- {{}} $slot -->

</body>

</html>
