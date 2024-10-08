<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('/Assets/bootstrap-5.3.3-dist/css/bootstrap.css') }}">
    <script src="{{ asset('/Assets/bootstrap-5.3.3-dist/js/bootstrap.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/Assets/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('/Assets/fontawesome-free-6.6.0-web/css/all.css') }}">
    <script src="{{asset("/Assets/bootstrap-5.3.3-dist/js/jquery.js")}}"></script>
</head>

<body>
    <div class="m-0 p-0 row">
        <div class="col-2 bg-dark admin-menus">
            <a href="/admin" class="flex-column">
                <div class="admin-header mt-3 d-flex justify-content-center">
                </div>
                <h1 class="text-center mb-5">Project name</h1>
            </a>
            <div class="menu-options ">
                <a href="/admin/Category">
                    <img class="mx-2 " width="40px" src="{{ asset('/Assets/image/categorization.png') }}" alt="">
                    <h2>Category</h2>
                </a>
            </div>
        </div>
        <div class="col-10 admin-contents">
            @yield('menu-contents')
        </div>
    </div>
</body>
<script src="/Assets/js/admin.js"></script>

</html>