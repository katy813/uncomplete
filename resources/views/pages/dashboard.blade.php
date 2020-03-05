
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .active{
      color: #CEB255 !important;
      }


      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
   <nav style=" height:60px;" class="navbar  fixed-top bg-light flex-md-nowrap p-0 shadow-sm">
  <a style="color:black !important; height:100%;" class="bg-light  col-sm-3 col-md-2 mr-0" href="#"> <img style="height:100%;" src="Etharlogo.png"></a>
  <input class="form-control form-control-dark  bg-light col" type="text" placeholder="Search" aria-label="Search">
  <ul style=" border:none !important;" class="navbar-nav px-3 bg-light border-0 ">
    <li style=" border:none !important;" class="nav-item text-nowrap border-0">
      <a style="color:#CEB255 !important; border:none !important;" class="nav-link border-0" href="adminlogout">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid ">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column mt-4 pl-3">
          <li class="nav-item py-1">
            <a class="nav-link active"  href="/dashboard">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item py-1">
            <a class="nav-link" href="/items">
              <span data-feather="shopping-cart"></span>
              Items
            </a>
          </li>
          <li class="nav-item py-1">
            <a class="nav-link " href="/seasons">
              <span data-feather="users"></span>
              Charity Seasons
            </a>
          </li>
          <li class="nav-item py-1">
            <a class="nav-link" href="/admins-dashboard">
              <span data-feather="bar-chart-2"></span>
              Admins
            </a>
          </li>
        </ul>


      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-3">
        <h1 class="h2">Dashboard</h1>

      </div>

    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

        <script src="dashboard.js"></script></body>
</html>
