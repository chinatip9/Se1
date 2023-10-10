<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('css/addstudent.css')}}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Subject</title>
</head>

<body>

    <div class="container">
        <header>
            <div class="logo">
                <ion-icon class="icon" name="home"></ion-icon>
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
            <!-- //nav -->
            <nav>
                <menu>
                    <p>MENU</p>
                    <ul>
                        <li><a href="{{ url('/home') }}">
                                <ion-icon class="menu-icon" name="home"></ion-icon>HOME
                            </a></li>
                    </ul>
                    <p>ADMIN MENU</p>
                    <ul>

                        <li><a  href="{{ url('/addstudent') }}">
                                <ion-icon class="menu-icon" name="add"></ion-icon>Add Student
                            </a></li>
                            
                        <li><a class="active" href="{{ url('/addsubject') }}">
                                <ion-icon class="menu-icon" name="add"></ion-icon>Add Subject
                            </a></li>
                            <li><a  href="{{ url('/addcourse') }}">
                                <ion-icon class="menu-icon" name="add"></ion-icon>Add People to the Course
                            </a></li>

                    </ul>
                </menu>
                <menu>
                    <p>ADMIN VIEW</p>
                    <ul>

                        <li><a href="{{ url('/students') }}">
                                <ion-icon class="menu-icon" name="person"></ion-icon>Student
                            </a></li>

                            <li><a href="{{ url('/subjects') }}">
                                <ion-icon class="menu-icon" name="book"></ion-icon>Subject
                            </a></li>
                            <li><a href="{{ url('/courses') }}">
                                <ion-icon class="menu-icon" name="people-circle"></ion-icon>Course
                            </a></li>
                            

                           
                    </ul>
                </menu>
            </nav>
            <article>
            <div class="content-article">
                
                <h1>Add Subject</h1>
                    <form class="form" action="{{ route('subjects.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="con">
                            <div class="label">
                                <label>ชื่อวิชา</label> <br>
                                <input type="text" id="subject_name" name="subject_name"  placeholder="ใส่ชื่อวิชา" required>
                            </div>
                            <div class="label">
                                <label>รหัสวิชา</label> <br>
                                <input type="text" id="subject_id" name="subject_id" placeholder="ใส่รหัสวิชา" required>
                            </div>
                            <div class="label">
                                <label>อาจารย์ผู้สอน</label> <br>
                                <input type="text" id="lecturer" name="lecturer" placeholder="ใส่ชื่ออาจารย์ผู้สอน" required>
                            </div>
                            <div class="label">
                                <label>กลุ่มเรียน</label> <br>
                                <input type="text" id="group" name="group" placeholder="ใส่กลุ่มเรียน" required>
                            </div>
                        </div>
                     
                        <div class="bottom-form">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div>
                                <input class="sub-btn" type="submit" onclick="showPopup()">
                            </div>
                        </div>
                    </form>
            </div>
        </article>




</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>