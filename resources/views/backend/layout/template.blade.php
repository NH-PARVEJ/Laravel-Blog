<!DOCTYPE html>
<html lang="en">

<head>

    @include ('backend/include/header');
    @include ('backend/include/css');

</head>

<body>

    @include ('backend/include/leftmenu');

    @include ('backend/include/topbar');

    @include ('backend/include/rightsidebar');

    @yield('body-content');
    @include ('backend/include/script');
</body>

</html>