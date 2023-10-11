<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body >
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a class="navbar-brand" href="/home">
                    <img src="./img/logo.png" alt="Logo" width="200" height="45"
                        class="d-inline-block align-text-top">
                </a>
            </div>

            @guest <!-- ตรวจสอบว่าไม่มีใครล็อกอิน -->
                <div class="dropdown">
                    <a href="/login" type="button" class="btn btn-outline-dark">Login</a>
                    <a href="/register" type="button" class="btn btn-dark">Register</a>
                </div>
            @else
                <!-- ถ้ามีใครล็อกอินแล้ว -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-circle" style="font-size: 1.2rem;"> </i>{{ Auth::user()->name }}<span
                            class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/user/profile">Setting</a></li>
                        @if (Auth::user()->roles == 2)
                            <li><a class="dropdown-item" href="/addstudent">Add Student</a></li>
                            <li><a class="dropdown-item" href="/addsubject">Add Subject</a></li>
                        @else
                        <li><a class="dropdown-item" href="/addsubject">Add Subject</a></li>
                            <li><a class="dropdown-item" href="/students">Score</a></li>
                        @endif
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </header>
    </div>
    <div class="home">
        <h2 class="title mx-5">Subject</h2>
            <div class="row mt-3">
                @foreach ($subjects as $s)
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card h-100 mx-4">
                            <div class="card-body">
                            <h4 class="card-title">{{ $s->subject_id }}</h4>
                            <h1 class="card-title">{{ $s->subject_name }}</h1>
                            <p class="card-text">Teacher: {{ $s->lecturer }}</p>
                            <p class="card-text">Section: {{ $s->group }}</p>
                            <a href="/subjects" type="button" class="btn btn-outline-dark ">Subject</a>
                        </div>
                    </div>
                </div>
             @endforeach
        </div>
    </div>


   

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="/home" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="/students" class="nav-link px-2 text-body-secondary">Student</a></li>
                <li class="nav-item"><a href="/subjects" class="nav-link px-2 text-body-secondary">Subject</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Score</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
    </div>
    
</div>
</body>

</html>

