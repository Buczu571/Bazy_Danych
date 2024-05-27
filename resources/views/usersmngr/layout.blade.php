<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="container mt-4">
            @yield('content')
        </div>

        @php
            // Sprawdzamy, czy aktualnie zalogowany użytkownik ma rolę "admin"
            $isAdmin = auth()->user()->usertype === 'admin';
        @endphp

        <!-- Dodajemy warunek, aby wyświetlić przycisk usuwania konta tylko dla użytkowników, którzy nie są administratorem -->
        @if (!$isAdmin)
            <form action="{{ url('delete-user/' . $user->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Usuń konto</button>
            </form>
        @endif
    </x-app-layout>
</body>
</html>
