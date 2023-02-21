<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ 'admin/assets/img/favicon.png' }}">

    <link rel="stylesheet" href="{{ 'admin/assets/css/bootstrap.min.css' }}">

    <link rel="stylesheet" href="{{ 'admin/assets/plugins/fontawesome/css/fontawesome.min.css' }}">
    <link rel="stylesheet" href="{{ 'admin/assets/plugins/fontawesome/css/all.min.css' }}">

    <link rel="stylesheet" href="{{ 'admin/assets/css/style.css' }}">
    <!-- toaster CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body class="account-page">

    @yield('login');
    @yield('register');


    <script src="{{ 'admin/assets/js/jquery-3.6.0.min.js' }}"></script>

    <script src="{{ 'admin/assets/js/feather.min.js' }}"></script>

    <script src="{{ 'admin/assets/js/bootstrap.bundle.min.js' }}"></script>

    <script src="{{ 'admin/assets/js/script.js' }}"></script>
    <!-- toaster  JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
</body>

</html>
