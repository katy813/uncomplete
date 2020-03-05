<!DOCTYPE html>
<html lang="ar" dir="rtl">
<html>
<head>
<title>Login Form |user </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">

</head>
<body>
<a class="p-5" style="color: #CEB255; text-decoration: underline; font-family:Tajawal;" href="adminlogin">تسجيل الدخول كمسؤول  </a>
<div class="container-fluid">
<div class="row no-gutter">
<div class="d-flex col-12 justify-content-center align-items-center" style="background-image:url(blurrybg.png); height:100vh; background-size:cover; background-position:center;">
<div class="col-5 p-3 bg-white shadow d-flex flex-wrap justify-content-center">
<div class="col-10 px-5" style="background-image:url(logo2.png); background-position:center; background-repeat:no-repeat; height:200px; background-size:contain;">
</div>

<p class="text-center" style="font-family:Tajawal; color:#020213;">
      مرحباً بك في موقع إيثار الخيري<br>
      قم بتسجيل الدخول لتفعيل المزيد من المميزات.
    </p>
<form class="p-5 col-12" action="{{url('post-login')}}" method="POST" id="logForm">

                 {{ csrf_field() }}

               <div class="form-label-group">
                                 <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" style="height:30px;" >
                                 <label for="inputEmail"  style="font-family:Tajawal; color:#CEB255; text-align:center;">البريد الإلكتروني</label>

                                 @if ($errors->has('email'))
                                 <span class="error">{{ $errors->first('email') }}</span>
                                 @endif
               </div>

                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" style="height:30px;">
                  <label for="inputPassword" style="font-family:Tajawal; color:#CEB255; text-align:center;">كلمة المرور </label>

                  @if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif
                </div>
                <br>

                <button class="btn btn-lg  btn-block btn-login font-weight-bold mb-2" type="submit" style="font-family:Tajawal; color:white; text-align:center; background-color:#CEB255; height:40px;">تسجيل دخول</button>
                <div class="text-center" style="font-family:Tajawal;">ليس لديك حساب ?
                <a class="small" style="color:#CEB255; text-decoration: underline;" href="{{url('registration')}}">انشئ حسابك الخاص الآن</a>
                </div>
              </form>
              </div>
    </div>
  </div>
</div>

</body>
</html>
