<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('css/student.css')}}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
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
                    <td class="head-table music-name">ชื่อ</td>
                    <td class="head-table music-album">นามสกุล</td>
                    <td class="head-table music-lyric">สาขา</td>
                    <td class="head-table music-lyric">รหัสนักศึกษา</td>
                </tr>
            </thead>

            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->major }}</td>
                    <td>{{ $student->student_id }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</article>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: skyblue">
    <!-- Navbar -->
    <style>
    .navbar {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    th {
        text-align: center;
    }

    td {
        text-align: center;
    }

    .rounded-content {
        border-radius: 15px;
        /* ปรับระดับขอบกลมตามต้องการ */
    }

    .nav-item:hover {
        background-color: skyblue;
        /* เปลี่ยนสีพื้นหลังเมื่อเม้าส์ไปอยู่เหนือปุ่ม */
        transition: background-color 0.5s;
        /* เพิ่มการเคลื่อนไหวเมื่อเม้าส์ไปอยู่เหนือปุ่ม */
        font: 1em sans-serif;
    }

    td:hover {
        background-color: skyblue;
        /* เปลี่ยนสีพื้นหลังเมื่อเม้าส์ไปอยู่เหนือปุ่ม */
        transition: background-color 0.5s;
        /* เพิ่มการเคลื่อนไหวเมื่อเม้าส์ไปอยู่เหนือปุ่ม */
        font: 1em sans-serif;
    }

    a {
        text-decoration: none;
        color: darkmagenta;
    }
    </style>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <H1>
            <p class="navbar-brand mb-0 h1" href="#" style="font-size: 35px;">The class</p>
        </H1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item active">
                    <a class="nav-link" href="#">{{ auth()->user()->name }}<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">ออกจากระบบ</button>
                    </form>
                </li>
                @endauth

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>

    <div class="row">
        <!-- Sidebar (เริ่มต้น) -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar mt-3 ml-4 rounded-content">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <!-- เพิ่มรายการเมนู sidebar ตามที่คุณต้องการ -->
                    <li class="nav-item mt-3 "
                        style="text-align: left; font-size: 25px;  border: 3px solid darkmagenta; border-radius: 10px; padding: 10px; margin-bottom: 10px;">
                        <a class="nav-link active" href="/home">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-house" viewBox="0 0 16 16">
                                <path
                                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li class="nav-item hover"
                        style="text-align: left; font-size: 25px;  border: 3px solid darkmagenta; border-radius: 10px; padding: 10px; margin-bottom: 10px;">
                        <a class="nav-link" href="/students">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-backpack4" viewBox="0 0 16 16">
                                <path
                                    d="M4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-4Zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10H5Z" />
                                <path
                                    d="M8 0a2 2 0 0 0-2 2H3.5a2 2 0 0 0-2 2v1c0 .52.198.993.523 1.349A.5.5 0 0 0 2 6.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V6.5a.5.5 0 0 0-.023-.151c.325-.356.523-.83.523-1.349V4a2 2 0 0 0-2-2H10a2 2 0 0 0-2-2Zm0 1a1 1 0 0 0-1 1h2a1 1 0 0 0-1-1ZM3 14V6.937c.16.041.327.063.5.063h4v.5a.5.5 0 0 0 1 0V7h4c.173 0 .34-.022.5-.063V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm9.5-11a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-9a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h9Z" />
                            </svg>
                            All Students
                        </a>
                    </li>
                    <li class="nav-item hover"
                        style="text-align: left; font-size: 25px;  border: 3px solid darkmagenta; border-radius: 10px; padding: 10px; margin-bottom: 10px;">
                        <a class="nav-link" href="/subjects">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-backpack4" viewBox="0 0 16 16">
                                <path
                                    d="M4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-4Zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10H5Z" />
                                <path
                                    d="M8 0a2 2 0 0 0-2 2H3.5a2 2 0 0 0-2 2v1c0 .52.198.993.523 1.349A.5.5 0 0 0 2 6.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V6.5a.5.5 0 0 0-.023-.151c.325-.356.523-.83.523-1.349V4a2 2 0 0 0-2-2H10a2 2 0 0 0-2-2Zm0 1a1 1 0 0 0-1 1h2a1 1 0 0 0-1-1ZM3 14V6.937c.16.041.327.063.5.063h4v.5a.5.5 0 0 0 1 0V7h4c.173 0 .34-.022.5-.063V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm9.5-11a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-9a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h9Z" />
                            </svg>
                            Subject
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Content of your website goes here -->
        <div class="container d-flex flex-column align-items-center justify-content-top mt-3 mb-5   rounded-content"
            style="background-color: rgb(255, 255, 255); height: 100vh;">

            <!-- เพิ่มรายบุคคล -->
            <div class="modal fade" id="addStdModal" tabindex="-1" role="dialog" aria-labelledby="addStdModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="mr-auto mt-2" data-toggle="modal" data-target="#addSubjectModal">เพิ่มวิชา</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('students.store') }}" method="POST">
                                @csrf
                                <p>รหัสนักศึกษา:</p>
                                <input type="text" name="student_id">
                                <p>ชื่อจริง:</p>
                                <input type="text" name="first_name">
                                <p>นามสกุล:</p>
                                <input type="text" name="last_name">
                                <p>สาขา:</p>
                                <input type="text" name="major">
                                <input type="hidden" name="sub_id" value="">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                            <button type="submit" class="btn btn-success">เพิ่ม</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- เพิ่มเข้าจาก excel -->
            <div class="modal fade" id="addexecelModal" tabindex="-1" role="dialog" aria-labelledby="addxecelModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="mr-auto mt-2" data-toggle="modal" data-target="#addSubjectModal">เพิ่มวิชา</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                @csrf
                                <p>นำเข้าจาก excel</p>
                                <input type="file">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                            <button type="submit" class="btn btn-success">เพิ่ม</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- รายละเอียดวิชาย -->

            <!-- รายละเอียดวิชา -->

       

            <table class="table table-bordered table-striped mt-2">
                <thead>
                    <tr>

                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อนามสกุล</th>
                        <th>สาขา</th>
                        <th>กลุ่มเรียน</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->student_id }}</td>
                        <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                        <td>{{ $student->major }}</td>
                        <td>{{ $student->student_id }}</td>
                        <td class="text-center">
            <button class="btn" data-toggle="modal" data-target="#deleteSubjectModal-{{ $student->id }}"
                style="color: red; border: 2px solid red;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                            </svg>
                        </button>
                        <button class="btn" data-toggle="modal" data-target="#editSubjectModal"
                            style="color: gray; border: 2px solid gray;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </button>
                    </td>
                    </tr>
                   <!-- Modal ลบนักศึกษา -->
    <div class="modal fade" id="deleteSubjectModal-{{ $student->id }}" tabindex="-1" role="dialog"
        aria-labelledby="deleteSubjectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteSubjectModalLabel">ลบนักศึกษา</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <p>คุณจะลบ {{ $student->first_name }} {{ $student->last_name }} ใช่หรือไม่?</p>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">ลบ</button>
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

                    <!-- Modal แก้ไข -->
                    <div class="modal fade" id="editSubjectModal" tabindex="-1" role="dialog"
                        aria-labelledby="editSubjectModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editSubjectModalLabel">แก้ไขวิชา</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST">
                                        @csrf
                                        <p>รหัสนักศึกษา:</p>
                                        <input type="text" name="student_id">
                                        <p>ชื่อจริง:</p>
                                        <input type="text" name="first_name">
                                        <p>นามสกุล:</p>
                                        <input type="text" name="last_name">
                                        <p>สาขา:</p>
                                        <input type="text" name="major">
                                        <input type="hidden" name="sub_id" value="">
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="submit" class="btn btn-warning">แก้ไข</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>