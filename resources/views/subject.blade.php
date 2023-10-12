<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Subject</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: skyblue;">
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
        border-radius: 15px; /* ปรับระดับขอบกลมตามต้องการ */
    }
    .nav-item:hover {
        background-color: skyblue; /* เปลี่ยนสีพื้นหลังเมื่อเม้าส์ไปอยู่เหนือปุ่ม */
        transition: background-color 0.5s; /* เพิ่มการเคลื่อนไหวเมื่อเม้าส์ไปอยู่เหนือปุ่ม */
        font: 1em sans-serif ;
    }
    td:hover {
        background-color: skyblue; /* เปลี่ยนสีพื้นหลังเมื่อเม้าส์ไปอยู่เหนือปุ่ม */
        transition: background-color 0.5s; /* เพิ่มการเคลื่อนไหวเมื่อเม้าส์ไปอยู่เหนือปุ่ม */
        font: 1em sans-serif ;
    }
    a{
        text-decoration: none;
        color: darkmagenta;
    }
    </style>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <H1>
                <p class="navbar-brand mb-0 h1" href="#" style="font-size: 35px;">The class</p>
                </H1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <div class="row"  >
                    <!-- Sidebar (เริ่มต้น) -->
                    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar mt-3 ml-4 rounded-content">
                        <div class="position-sticky">
                            <ul class="nav flex-column">
                                <!-- เพิ่มรายการเมนู sidebar ตามที่คุณต้องการ -->
                                <li class="nav-item mt-3 " style="text-align: left; font-size: 25px;  border: 3px solid darkmagenta; border-radius: 10px; padding: 10px; margin-bottom: 10px;">
                                    <a class="nav-link active" href="/home">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                                        </svg>
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item hover" style="text-align: left; font-size: 25px;  border: 3px solid darkmagenta; border-radius: 10px; padding: 10px; margin-bottom: 10px;">
                                    <a class="nav-link" href="/students">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-backpack4" viewBox="0 0 16 16">
                                            <path d="M4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-4Zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10H5Z"/>
                                            <path d="M8 0a2 2 0 0 0-2 2H3.5a2 2 0 0 0-2 2v1c0 .52.198.993.523 1.349A.5.5 0 0 0 2 6.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V6.5a.5.5 0 0 0-.023-.151c.325-.356.523-.83.523-1.349V4a2 2 0 0 0-2-2H10a2 2 0 0 0-2-2Zm0 1a1 1 0 0 0-1 1h2a1 1 0 0 0-1-1ZM3 14V6.937c.16.041.327.063.5.063h4v.5a.5.5 0 0 0 1 0V7h4c.173 0 .34-.022.5-.063V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm9.5-11a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-9a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h9Z"/>
                                        </svg>
                                        All Students
                                    </a>
                                </li>
                                <li class="nav-item hover" style="text-align: left; font-size: 25px;  border: 3px solid darkmagenta; border-radius: 10px; padding: 10px; margin-bottom: 10px;">
                                    <a class="nav-link" href="/subjects">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-backpack4" viewBox="0 0 16 16">
                                            <path d="M4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-4Zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10H5Z"/>
                                            <path d="M8 0a2 2 0 0 0-2 2H3.5a2 2 0 0 0-2 2v1c0 .52.198.993.523 1.349A.5.5 0 0 0 2 6.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V6.5a.5.5 0 0 0-.023-.151c.325-.356.523-.83.523-1.349V4a2 2 0 0 0-2-2H10a2 2 0 0 0-2-2Zm0 1a1 1 0 0 0-1 1h2a1 1 0 0 0-1-1ZM3 14V6.937c.16.041.327.063.5.063h4v.5a.5.5 0 0 0 1 0V7h4c.173 0 .34-.022.5-.063V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm9.5-11a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-9a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h9Z"/>
                                        </svg>
                                        Subject
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
   
    <!-- Content of your website goes here -->
    <div class="container d-flex flex-column align-items-center justify-content-top mt-3 mb-5   rounded-content" style="background-color: rgb(255, 255, 255); height: 100vh;">
        <!-- เพิ่มปุ่มเพิ่มวิชา และ Modal -->

        <button class="btn btn-success mr-auto mt-2" data-toggle="modal" data-target="#addSubjectModal">เพิ่มวิชา</button>

        <!-- เพิ่มวิชา -->
        <div class="modal fade" id="addSubjectModal" tabindex="-1" role="dialog" aria-labelledby="addSubjectModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="mr-auto mt-2" data-toggle="modal" data-target="#addSubjectModal">เพิ่มวิชา</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('subjects.store') }}" method="POST">
                            @csrf
                            <p>รหัสวิชา:</p>
                            <input type="text" name="subject_id">
                            <p>ชื่อวิชา:</p>
                            <input type="text" name="subject_name">
                            <p>อาจาร์ยผู้สอน</p>
                            <input type="text" name="lecturer">
                            <p>กลุ่มเรียน:</p>
                            <input type="text" name="group">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary">เพิ่ม</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-striped mt-2">
            <thead>
                <tr>
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>อาจารย์ผู้สอน</th>
                    <th>กลุ่มเรียน</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                <tr>
                    <td>{{$subject->subject_id}}</td>
                    <td><a href="{{ route('courses.index' , ['sub_id' => $subject->id]) }}">{{$subject->subject_name}}</a></td>
                    <td>{{$subject->lecturer}}</td>
                    <td>{{$subject->group}}</td>
                    <td class="text-center">
            <button class="btn" data-toggle="modal" data-target="#deleteSubjectModal-{{ $subject->id }}"
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
                <!-- Modal แก้ไข -->
                <div class="modal fade" id="editSubjectModal" tabindex="-1" role="dialog" aria-labelledby="editSubjectModalLabel" aria-hidden="true">
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
                                        <p>รหัสวิชา:</p>
                                        <input type="text" name="student_code">
                                        <p>ชื่อวิชา:</p>
                                        <input type="text" name="student_name">
                                        <p>อาจารย์ผู้สอน:</p>
                                        <input type="text" name="student_email">
                                        <p>กลุ่มเรียน:</p>
                                        <input type="text" name="student_email">
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="submit" class="btn btn-warning">แก้ไข</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                
                 <!-- Modal ลบนักศึกษา -->
    <div class="modal fade" id="deleteSubjectModal-{{ $subject->id }}" tabindex="-1" role="dialog"
        aria-labelledby="deleteSubjectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteSubjectModalLabel">ลบรายวิชา</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('subjects.destroy', ['subject' => $subject->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <p>คุณจะลบ {{ $subject->subject_name }}  ใช่หรือไม่?</p>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">ลบ</button>
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                @endforeach
            </tbody>
        </table>


    <!-- Link to Bootstrap JS and jQuery (required for Bootstrap functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<script>
function confirmDelete(subjectId) {
    if (confirm("Are you sure you want to delete this subject?")) {
        document.getElementById(`deleteForm-${subjectId}`).submit();
    }
}
</script>


