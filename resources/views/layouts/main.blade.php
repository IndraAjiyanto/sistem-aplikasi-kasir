<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
     <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
        }
    </style>
</head>
<body>

@include('components.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>


    <!-- Bootstrap JS -->
     <!-- <script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->
     <script src="bootsrap/js/vendor/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
