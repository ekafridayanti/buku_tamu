<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buku Tamu | Login</title>
    <link rel="icon" href="{{ asset('template/production') }}/images/Logo BKPSDM.png" type="image/icon type">
    <!-- Bootstrap -->
    <link href="{{ asset('template') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('template') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('template') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('template') }}/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('template') }}/build/css/custom.min.css" rel="stylesheet">

  </head>

  <body class="login">
    <div class="text-center">
      
      <a class="hiddenanchor" id="signin"></a>
      <img src="{{ asset('template/production') }}/images/Logo Atas Layanan BKPSDM.png" alt="logo header" style="width: 100%; height: auto" class="rounded">
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{ route('auth.attempt') }}" method="POST">
              @csrf
              <h1>Login Form</h1>
              <div>
                <input name="username" type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-primary submit">Log in</button>
              </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
