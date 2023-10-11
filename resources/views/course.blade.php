<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: burlywood">
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
    </style>
        @foreach($subjects as $subject)
            @foreach($subjects_id as $subject_id) 
                @if($subject_id->id == $subject->id)    

            <nav class="navbar navbar-expand-lg navbar-light bg-light" >
                <h1><p class="navbar-brand" style="text-transform: uppercase;">The Class</p></h1>
                <p class="navbar-brand"><a href="{{ url('/subjects') }}">subject</a></p><p> * subject * {{$subject->subject_name}}</p> 
            </nav>                    

    
    <!-- Content of your website goes here -->
    <div class="container d-flex flex-column align-items-center justify-content-top mt-5 mb-5" style="background-color: rgb(255, 255, 255); height: 100vh;">

        <!-- เพิ่มรายบุคคล -->
        <div class="modal fade" id="addStdModal" tabindex="-1" role="dialog" aria-labelledby="addStdModalLabel" aria-hidden="true">
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
                            <input type="hidden" name="sub_id" value="{{$subject_id->id}}">
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
        <div class="modal fade" id="addexecelModal" tabindex="-1" role="dialog" aria-labelledby="addxecelModalLabel" aria-hidden="true">
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
        <div class="container mt-5 mb-5">
        <!-- รายละเอียดวิชา -->
        <div class="row">
            <div class="col-md-6">
                    <p>รหัสวิชา : {{$subject->subject_id}}</p>
                    <p>ชื่อวิชา : {{$subject->subject_name}}</p>
                    <p>อาจาร์ยผู้สอน : {{$subject->lecturer}}</p>
                    <p>กลุ่ม : {{$subject->group}}</p>
            </div>
                @endif
            @endforeach
        @endforeach
            <div class="container mb-5">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-outline-primary mr-2" data-toggle="modal" data-target="#addexecelModal">นำเข้าไฟล์ excel</button>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#addStdModal">นำเข้ารายบุคคล</button>
                </div>
            </div>

            <table class="table table-bordered table-striped mt-2">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อนามสกุล</th>
                        <th>สาขา</th>
                        <th>กลุ่มเรียน</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody> 
                    <tr> 
                @foreach($subjects_id as $subject_id) 
                    @foreach($students as $student) 
                        @if($subject_id->id == $student->subject_id)
                        <td>{{$student->id}}</td>
                        <td>{{$student->student_id}}</td>
                        <td>{{$student->first_name}} {{$student->last_name}}</td>
                        <td>{{$student->major}}</td></td>
                        <td>{{$subject->group}}</td> 
                        <td class="text-center">
                            <button class="btn" data-toggle="modal" data-target="#deleteSubjectModal" style="color: red; border: 2px solid red;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                </svg>
                            </button>
                            <button class="btn" data-toggle="modal" data-target="#editSubjectModal" style="color: gray; border: 2px solid gray;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <!-- Modal ลบวิชา -->
                    <div class="modal fade" id="deleteSubjectModal" tabindex="-1" role="dialog" aria-labelledby="deleteSubjectModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteSubjectModalLabel">ลบวิชา</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST">
                                        @csrf
                                        <p>คุณจะลบ test ออกจากวิชา test ใช่หรือไม่?</p>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger">ลบ</button>
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>

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
                                        <p>รหัสนักศึกษา:</p>
                                        <input type="text" name="student_id">
                                        <p>ชื่อจริง:</p>
                                        <input type="text" name="first_name">
                                        <p>นามสกุล:</p>
                                        <input type="text" name="last_name">
                                        <p>สาขา:</p>
                                        <input type="text" name="major">
                                        <input type="hidden" name="sub_id" value="{{$subject_id->id}}">
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="submit" class="btn btn-warning">แก้ไข</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                @endforeach
                </tbody>
            </table>
    </div>

    <!-- Link to Bootstrap JS and jQuery (required for Bootstrap functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>