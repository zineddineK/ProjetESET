<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GLDV APP</title>

    <!-- Bootstrap -->

    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

            <form role="form" method="POST" action="{{url('/vl')}}">
                {{ csrf_field() }}
              <h1>S'authentifier</h1>
              <div>
                @if($errors->any())
                  <div class="animate alert alert-info alert-dismissible fadeInDown" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                        <h4>{{$errors->first()}}</h4>
                  </div>
                @endif
              </div>
              <div>
                <input type="text" name="t1" class="form-control" placeholder="Entrez votre login" required autofocus />
              </div>
              <div>
                <input type="password" name="t2" class="form-control" placeholder="Entrez votre mot de passe" required />
              </div>
              <div>
                <input class="btn btn-success" type="submit" name="b1" value="Se connecter"></div>
              </div>
            </form>
          </section>

        </div>
      </div>
    </div>
  </body>
</html>
