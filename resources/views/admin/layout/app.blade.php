<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
</head>

<body>

    @include('admin.components.sidebar')
    @include('admin.components.header')

    <div class="content">
        @yield('content')
    </div>

</body>

</html>