<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShineSisters | Halaman Login</title>
    <link rel="icon" href="{{ asset('img/logo-a.png') }}" />
    <!-- Icons8 -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"/>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <img src="{{ asset('img/wave.svg') }}" alt="Img Wave" class="wave">
    <div class="container">
      <div class="img">
        <img src="{{ asset('img/imgLogin.png') }}" alt="Image Login">
      </div>
      <div class="login-container">
        <div class="title">
          <img src="{{ asset('img/logo-a.png') }}" alt="Logo ShineSisters" class="logoShineSisters">
          <h2>Login</h2>
        </div>
        <form action="" method="POST">
          <div class="input-element one">
            <div class="i">
              <i class="las la-user"></i>
            </div>
            <div class="input-username">
              <h5>Username</h5>
              <input type="text" class="input TextInput">
            </div>
          </div>
          <div class="input-element two">
            <div class="i">
              <i class="las la-lock"></i>
            </div>
            <div class="input-password">
              <h5>Password</h5>
              <input type="password" class="input PasswordInput">
            </div>
          </div>
          <button type="submit" class="btn-login">Login</button>
        </form>
      </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
