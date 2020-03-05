<!doctype html>
<html lang="ar" dir="rtl">
  <head>
  <!--  head استدعاء  -->
      <!-- Required meta tags -->
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v3.8.5">
      <title>Ethar web app @yield('title') </title>

      <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

      <!-- Bootstrap core CSS -->
  <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
  <header style="background-color: #FDFDFD; width: 100%; margin: 0; padding: 2em; display: flex; flex-wrap: wrap;">
    <!--  header استدعاء  -->
    <div class="justify-content-start" style="width:33.33%; display: flex;">

              <a class="pl-5" style="color: #020213;" href="/profile" >الحساب الشخصي</a>
              <a style="color: #020213;" href="logout" >تسجيل خروج </a>
          </div>

          <div style="width:33.33%;">
              <a class="p-0" style="float: unset;" href="/">
                  <img style="display: block; margin: 0 auto; height: 100px;" src="Etharlogo.png" alt="Ethar Logo">
              </a>
          </div>

          <div class="d-flex m-0 p-0 align-items-start align-self-start justify-content-end" style="width:33.33%;">
              <input placeholder="بحث ..." class="col-12 m-0 px-4 py-1" style="border: #555 solid 1px; border-radius: 45px; max-width: 300px;" type="text" >
          </div>

     <div style="width: 100%; display: flex; justify-content: center; padding-top: 1em; position: relative; text-align: center;">
           <div class="d-flex m-0 justify-content-between col-6" style="border-top: #E5D7A6 1px solid; padding-top: 1em;">
            <!-- كتابة كود ناف لكل صفحة   -->
                <a  style="color: #020213;"  href="/">الرئيسية</a>
                <a style="color: #020213;" href="/categories">التصنيفات</a>
                <a style="color: #CEB255;" href="/seasons">المواسم الخيرية</a>
                <a style="color: #020213;" href="#">العمل الخيري </a>
                <a style="color: #020213;" href="#">تواصل معنا </a>
           </div>
     </div>
  </header>
  <br>
<div class="container-fluid">
<div class="row no-gutter">
<div class="d-flex col-12 justify-content-center align-items-center" style="background-image:url(/blurrybg.png); height:80vh; background-size:cover; background-position:center;">
<div class="col-4 p-3 bg-white shadow d-flex flex-wrap justify-content-center">

    <!-- left Column -->
    <div class="text-right" style=" font-family:Tajawal;">

           <!--  season name -->
                 <div style="border-bottom: 1px solid #E1E8EE;">

                 <h5 style="color: #CEB255;">{{$charityseason->seasonName}} </h5>
                 </div>

                 <!-- season Description -->
                 <div>
                 <p>الهدف  :{{$charityseason->description}}</p>
                 </div>

                <!-- end date -->
                 <div>
                 <p>تاريخ إنتهاء الموسم : {{$charityseason->duration}}</p>
                 </div>

                 <!-- item state -->
                       <div>
                       <p>إسم الوحدة المتبرع بها :{{$charityseason->unitname}}</p>
                       </div>

                   <!-- unit value  -->
                             <div>
                             <p>قيمة كل وحدة :{{$charityseason->unitvalue}} د </p>
                             </div>

                 <!-- number of units wanted -->
                 <div>
                   <p>عدد الوحدات المطلوبة لتحقيق الهدف : {{$charityseason->numofunits}}</p>
                 </div>

   </div>
</div>
</div>
</div>
</div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>
