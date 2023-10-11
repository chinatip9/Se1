<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies2U</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="main">
        <div class="image-container">
            <img class="logo" src="{{ asset('./img/logo.png') }}" alt="logo">
        </div>
        @guest <!-- ตรวจสอบว่าไม่มีใครล็อกอิน -->
        <a href="/login">
            <button type="button" class="btn btn-outline-dark">Login</button>
        </a>
        <a href="/register">
            <button type="button" class="btn btn-dark">Register</button>
        </a>
        @else
        <a href="/home">
            <button type="button" class="btn btn-outline-dark">Visit Website</button>
        </a>
        @endguest
    </div>
</body>

</html>
