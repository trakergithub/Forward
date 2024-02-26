<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/forward.ico" type="image/x-icon">
    <link rel="icon" href="img/forward.ico" type="image/x-icon">
    
    <!-- Vendor -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FORWARD</title>
    
    <style>
        @font-face {
            font-family: 'Montserrat';
            src: url('/fonts/Montserrat-Regular.ttf');
        }
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f7fafc;
        }
    </style>

</head>

<body>

<div>

{{$content}}

</div>

</body>
</html>
