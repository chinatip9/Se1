<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Kanit:wght@100;200;300;400&family=Lobster+Two:ital,wght@0,400;0,700;1,400&family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Kanit:wght@100;200;300;400&family=Lobster+Two:ital,wght@0,400;0,700;1,400&family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Great+Vibes&family=Kanit:wght@100;200;300;400&family=Lobster+Two:ital,wght@0,400;0,700;1,400&family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="left-con">
            <div class="slideshow">
                <img class="slide" src="{{ asset('img/1.png') }}" alt="1.png">
                <img class="slide" src="{{ asset('img/2.jpg') }}" alt="2.jpg">
                <!-- เพิ่มรูปภาพสไลด์ต่าง ๆ ตามที่คุณต้องการ -->
            </div>
        </div>
        
        <div class="right-con">
            <div class="form-info">
                <h1>Project SE</h1>
                <h2>Sign In</h2>
                <form method="POST" action="{{ route('login') }}" class="form">
                @csrf
                    <label class="form-head">E-mail</label> <br>
                    <input class="form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your username."> <br>

                    <label class="form-head">Password</label> <br>
                    <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password."> <br>
                    <div class="forgot">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                    </div>
                    <x-validation-errors class="mb-4" />
                    <button class="form-input next-btn" type="submit">NEXT</button>
                </form>
                <p><a href="{{ route('register') }}">Register</a></p>
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