<!doctype html>
<html>
<head>
@include('theme.layout.head')
</head>
<body class="bg-gray-50">
@include('theme.layout.header')
@include('theme.layout.nav')

<div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
    <main>
    @yield('content')
    
    </main>
    @include('theme.layout.footer')
</div>
</body>
</html>