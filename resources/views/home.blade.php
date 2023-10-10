<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome,{{ Auth::user()->name }}</h1>

                <li><a href="{{ url('/addstudent') }}">Admin Menu</a></li>

</body>
</html>

