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
    <title>Ethar web app | home page </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="public/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="public/css/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.8.1/slick-theme.css"/>


</head>
  <body>
  <header style="background-color: #FDFDFD; width: 100%; margin: 0; padding: 2em; display: flex; flex-wrap: wrap;">
    <!--  header استدعاء  -->
    @include('partials._header')
     <div style="width: 100%; display: flex; justify-content: center; padding-top: 1em; position: relative; text-align: center;">
           <div class="d-flex m-0 justify-content-between col-6" style="border-top: #E5D7A6 1px solid; padding-top: 1em;">

                <a  style="color: #CEB255; font-family:Tajawal;"  href="/">الرئيسية</a>
                          <a style="color: #020213; font-family:Tajawal;" href="items/viewstate">التصنيفات</a>
                          <a style="color: #020213; font-family:Tajawal;" href="/seasons">المواسم الخيرية</a>
                          <a style="color: #020213; font-family:Tajawal;" href="#">العمل الخيري </a>
                          <a style="color: #020213; font-family:Tajawal;" href="#">تواصل معنا </a>
           </div>
     </div>
  </header>

  <div class="single-item">
    <div>
    <img src="ramadan.png" alt="" class="img-fluid">

    </div>

    <div>
    <img src="winterclothes.png" alt="" class="img-fluid">

    </div>
    <div>
    <img src="etharsite.png" alt="" class="img-fluid">

    </div>
  </div>
        <div class="row justify-content-start m-0 p-0 p-5">

          @foreach($items as $item)
          <div class="col-10  col-md-6 col-lg-3 m-0 p-0 px-3 py-5  d-flex justify-content-center align-items-start align-content-start" >
                                  <div class="card m-0 p-0 row col-8 justify-content-center px border-0 h-100 align-items-start">
                                    <img class="card-img-top" src="{{url('image/' .$item->itemimage)}}"alt="image">
                                    <div class="card-body row justify-content-center align-content-end">
                                      <h5 class="card-title h5 col-12 text-center">{{$item->name}} </h5>
                                      <a style="border-radius:45px; background-color:#CEB255; color:white;" href="{{ url('items/viewdetails',$item->id)}}" class="btn" > إعرض التفاصيل </a>
                                    </div>
                                  </div>
                       </div>
                           @endforeach
                       {!! $items->links() !!}

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-3.4.1.min.js"></script>

      <script type="text/javascript" src=""></script>
      <script type="text/javascript" src="public/js/slick.min.js"></script>

      <script type="text/javascript">
      $(document).ready(function(){
       $('.single-item').slick({
       dots:true,
       autoplay:true,
       arrows:true,
       autoplayspeed:1000
       });
       });
      </script>

    </body>
  </html>
