<!doctype html>
<html lang="ar" dir="rtl">
  <head>
  <!--  head استدعاء  -->
  @include('partials._head')
  </head>
  <body>
  <header style="background-color: #FDFDFD; width: 100%; margin: 0; padding: 2em; display: flex; flex-wrap: wrap;">
    <!--  header استدعاء  -->
    @include('partials._header')
     <div style="width: 100%; display: flex; justify-content: center; padding-top: 1em; position: relative; text-align: center;">
           <div class="d-flex m-0 justify-content-between col-6" style="border-top: #E5D7A6 1px solid; padding-top: 1em;">
            <!-- كتابة كود ناف لكل صفحة   -->
               @yield('navbarsection')
           </div>
     </div>
  </header>
         @yield('itemdisplay')

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
  </html>
