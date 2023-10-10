<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('css/student.css')}}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="{{ url('/home') }}">
                    <ion-icon class="icon" name="home"></ion-icon>
                </a>
            </div>
            <div class="headlogo">

                <h1>The Class</h1>
            </div>
            <div class="login-btn">
                <ul>
                    @if (Route::has('login'))
                    @auth
                    <div class="dropdown">
                        <div class="dropbtn">#{{ Auth::user()->name }} <ion-icon class="auth-icon"
                                name="chevron-down-outline"></ion-icon>
                        </div>
                        <div class="dropdown-content">
                            <a href="{{ route('profile.show') }}">Profile</a>
                            <form class="logout" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </div>
                    @else
                    <li><a href="{{ route('login') }}">Sign In</a></li>
                    <li><a href="{{ route('register') }}">Sign Up</a></li>
                    @endif
                    @endif
                </ul>
            </div>
        </header>
        <nav>
            <menu>
                <p>MENU</p>
                <ul>
                    <li><a class="active" href="{{ url('/home') }}">
                            <ion-icon class="menu-icon" name="home"></ion-icon>HOME
                        </a></li>    
                        <li><a class="active" href="{{ url('/home') }}">
                            <ion-icon class="menu-icon" name="home"></ion-icon>HOME
                        </a></li>  
                                       
                </ul>
            </menu>
        </nav>
        <article>
    <div class="content-article">
        <table>
            <thead>
                <tr>
                    <td class="head-table music-id">#</td>
                    <td class="head-table music-name">ชื่อนักเรียน</td>
                    <td class="head-table music-album">ชื่อวิชา</td>
                    <td class="head-table music-album">รหัสวิชา</td>
                    <td class="head-table music-album">กลุ่มเรียน</td>
                   
                </tr>
            </thead>

            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->student->first_name }} {{ $course->student->last_name }}</td>
                    <td>{{ $course->subject->subject_name }}</td>
                    <td>{{ $course->subject->subject_id }}</td>
                    <td>{{ $course->subject->group }}</td>
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</article>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>