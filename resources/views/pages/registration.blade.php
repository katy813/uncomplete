<!DOCTYPE html>
<html lang="ar" dir="rtl">
<html>
<head>
<title>Register |user </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
<script src="https://kit.fontawesome.com/e057d80752.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
<div class="row no-gutter">
<div class="d-flex col-12 justify-content-center align-items-center" style="background-image:url(blurrybg.png); height:100vh; background-size:cover; background-position:center;">
<div class="col-5 p-3 bg-white shadow d-flex flex-wrap justify-content-center">
<i class="fas fa-times-circle" style="color:#CEB255; height:7;" href="/"></i>
<div class="col-10 px-5" style="background-image:url(logo2.png); background-position:center; background-repeat:no-repeat; height:200px; background-size:contain;">
</div>

<p class="text-center" style="font-family:Tajawal; color:#020213; line-height:1;">
      مرحباً بك في موقع إيثار الخيري<br>
      قم بتسجيل الدخول لتفعيل المزيد من المميزات.
    </p>
<form class="p-2 col-12" action="{{url('post-registration')}}" method="POST" id="logForm">

                 {{ csrf_field() }}

  <div class="form-label-group">
         <input type="text" id="inputFName" name="Firstname" class="form-control" placeholder="First name" style="height:30px;" autofocus>
         <label for="inputFName" style="font-family:Tajawal; color:#CEB255; text-align:center;"> إسمك الأول </label>

         @if ($errors->has('Firstname'))
                    <span class="error">{{ $errors->first('Firstname') }}</span>
                    @endif
                  </div>
                  <div class="form-label-group">
                    <input type="text" id="inputLName" name="lastname" class="form-control" placeholder="last name" style="height:30px;" autofocus>
                      <label for="inputLName" style="font-family:Tajawal; color:#CEB255; text-align:center;">إسمك الأخير </label>

                                    @if ($errors->has('lastname'))
                                    <span class="error">{{ $errors->first('lastname') }}</span>
                                    @endif

                                  </div>
                   <div class="form-label-group">
                   <input type="text" id="inputuserName" name="username" class="form-control" placeholder="user name" style="height:30px;" autofocus>
                        <label for="inputuserName" style="font-family:Tajawal; color:#CEB255; text-align:center;">إسم المستخدم</label>

                       @if ($errors->has('username'))
                           <span class="error">{{ $errors->first('username') }}</span>
                            @endif

                             </div>
                  <div class="form-label-group">
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" style="height:30px;">
                    <label for="inputEmail" style="font-family:Tajawal; color:#CEB255; text-align:center;">بريدك الإلكتروني </label>

                    @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                    @endif
                  </div>

                  <div class="form-label-group">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" style="height:30px;">
                    <label for="inputPassword" style="font-family:Tajawal; color:#CEB255; text-align:center;">كلمة المرور</label>

                    @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                    @endif
                  </div>


                <button class="btn btn-lg  btn-block btn-login font-weight-bold mb-2" type="submit" style="font-family:Tajawal; color:white; text-align:center; background-color:#CEB255; height:40px;">إنشاء حساب</button>
                <div class="text-center" style="font-family:Tajawal;">لديك حساب بالفعل ?
                <a class="small" style="color:#CEB255; text-decoration: underline;" href="{{url('login')}}">قم بتسجيل الدخول الآن</a>
                </div>
              </form>
              </div>
    </div>
  </div>
</div>

</body>
</html>
