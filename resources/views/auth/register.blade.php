


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Kanit:wght@100;200;300;400&family=Lobster+Two:ital,wght@0,400;0,700;1,400&family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Kanit:wght@100;200;300;400&family=Lobster+Two:ital,wght@0,400;0,700;1,400&family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Great+Vibes&family=Kanit:wght@100;200;300;400&family=Lobster+Two:ital,wght@0,400;0,700;1,400&family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <div class="right-con">
            <div class="form-info">
                <h1>Project SE</h1>
                <h2>Sign Up</h2>
                <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <label class="form-head">Username</label> <br>
                    <input type="text" class="form-input" id="name" name="name" :value="old('name')" autofocus autocomplete="name" placeholder="Enter your username." required> <br>
                    <label class="form-head">E-mail</label> <br>
                    <input id="email" class="form-input" type="email" name="email" :value="old('email')" autocomplete="username" placeholder="Enter your E-mail" required> <br>
                    <label class="form-head">Password</label> <br>
                    <input id="password" class="form-input"  type="password" name="password" autocomplete="new-password" placeholder="Enter your password." required> <br>
                    <label class="form-head">Confirm Password</label> <br>
                    <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" autocomplete="new-password" placeholder="Enter your password." required> <br>
                    <x-validation-errors class="mb-4" />
                    <button class="form-input next-btn" type="submit">Next</button>
                </form>
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>
        <div class="left-con">
            <div class="slideshow">
                <img class="slide" src="img/1.png" alt="1.png">
                <img class="slide" src="img/2.jpg" alt="2.jpg">
                <!-- เพิ่มรูปภาพสไลด์ต่าง ๆ ตามที่คุณต้องการ -->
            </div>
        </div>
    </div>
</body>
<script>
    const slideshow = document.querySelector('.slideshow');
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        slideshow.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    setInterval(nextSlide, 3000); // เปลี่ยนรูปทุก 3 วินาที
</script>


</html>