<!doctype html>
<html lang="ar" dir="rtl">
  <head>
  <!--  head استدعاء  -->
  @include('partials._head')
  </head>
  <body>
  <header style="background-color: #FDFDFD; width: 100%; margin: 0; padding: 2em; display: flex; flex-wrap: wrap;">
    <!--  header استدعاء  -->
<div class="justify-content-start" style="width:33.33%; display: flex;">

          <a class="pl-5" style="color: #020213;" href="loggedin">الرئيسية </a>
          <a style="color: #020213;" href="logout" >تسجيل خروج</a>
      </div>


          <div style="width:33.33%;">
              <a class="p-0" style="float: unset;" href="/identification">
                  <img style="display: block; margin: 0 auto; height: 100px;" src="Etharlogo.png" alt="Ethar Logo">
              </a>
          </div>

          <div class="d-flex m-0 p-0 align-items-start align-self-start justify-content-end" style="width:33.33%;">
              <input placeholder="بحث ..." class="col-12 m-0 px-4 py-1" style="border: #555 solid 1px; border-radius: 45px; max-width: 300px;" type="text" >
          </div>


  </header
<br>


          <a href="{{ route('items.create') }}" class="btn btn-success mb-2">إضافة قطعة للبيع</a>
<div class="container position:relative" >
           <div class="card" style="width: 14rem;">
             <img class="card-img-top" src="101-3d-book.png" alt="item image">
             <div class="card-body">
               <h5 class="card-title">كتاب الصعاب</h5>
               <p class="card-text">كتاب يتحدث عن الصعاب</p>
               <a href="#" class="btn btn-primary">إعرض التفاصيل</a>
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
