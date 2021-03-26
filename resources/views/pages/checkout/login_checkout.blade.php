<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('public/backend/css/sign/style.css')}}" />
    <title>Đăng nhập và Đăng xuất</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form action="{{URL::to('/login-customer')}}" class="sign-in-form" method="post">
            {{csrf_field()}}
            <h2 class="title">Đăng nhập</h2>

            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="email_account" placeholder="Tài Khoản" />
            </div>

            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_account" placeholder="Mật Khẩu" />
            </div>

            <input type="submit" value="Đăng Nhập" class="btn solid" />

            <p class="social-text">Hoặc Đăng nhập bằng các nền tảng xã hội</p>

            <div class="social-media">
                <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </form>

        <form action="{{URL::to('/add-customer')}}" class="sign-up-form" method="post">
            {{ csrf_field() }}
            <h2 class="title">Đăng ký</h2>

            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="customer_name" placeholder="Tên Đăng Nhập" />
            </div>

            <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="text" name="customer_phone" placeholder="Số Điện Thoại" />
            </div>

            <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" name="customer_email" placeholder="Email" />
            </div>

            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="customer_password" placeholder="Mật Khẩu" />
            </div>

            <input type="submit" class="btn" value="Đăng Ký" />
            <p class="social-text">Hoặc Đăng ký bằng các nền tảng xã hội</p>
            <div class="social-media">
                <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Bạn Có Thể Đăng Ký Thành Viên Để Nhận Được Nhiều Ưu Đãi Hơn</h3>
            <p>
              
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Đăng Ký
            </button>
          </div>
          <img src="{{asset('public/backend/image/sign/log.svg')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Vui Lòng đăng Nhập Tài Khoản Của Bạn.</h3>
            <p>
              
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Đăng Nhập
            </button>
          </div>
          <img src="{{asset('public/backend/image/sign/register.svg')}}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('public/backend/js/sign/app.js')}}"></script>
  </body>
</html>
