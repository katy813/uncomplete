<!DOCTYPE html>
<html lang="ar" dir="rtl">
<html>
<head>
<title>Login Form |admin </title>

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
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-flex col-12 justify-content-center align-items-center p-5" style="background-image:url(/blurrybg.png); background-size:cover; background-position:center;">
<div class="col-5 p-5 bg-white shadow d-flex flex-wrap justify-content-center">

<p class="text-center">إضافة قطعة للبيع</p>
<br>

<form class="p-5 col-12 text-right" action="{{ route('items.store') }}" method="POST" name="add_item" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>أسم</strong>
            <input type="text" name="name" class="form-control" placeholder="أدخل اسم القطعة">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
   </div>
    <div class="col-md-12">
    <div class="form-group">
                           <strong>وصف</strong>
                           <textarea class="form-control" col="4" name="description" placeholder=" يمثل القطعة وصف"></textarea>
                           <span class="text-danger">{{ $errors->first('description') }}</span>
                       </div>
   </div>

    <div class="col-md-12">
            <div class="form-group">
                <strong>الحالة</strong>
                <input type="text" name="state" class="form-control" placeholder="حالة القطعة">
                <span class="text-danger">{{ $errors->first('state') }}</span>
            </div>
    </div>
    <div class="col-md-12">
                <div class="form-group">
                    <strong>السعر</strong>
                    <input type="text" name="price" class="form-control" placeholder="السعر التي تود بيعها به">
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                </div>
    </div>
    <div class="col-md-12">
                <div class="form-group">
                    <strong>النسبة</strong>
                    <input type="text" name="charityfee" class="form-control" placeholder="النسبة التي تود التبرع بها من المبلغ">
                    <span class="text-danger">{{ $errors->first('charityfee') }}</span>
                </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>التصنيف</strong>
            <input type="text" name="category" class="form-control" placeholder="تصنيف القطعة">
            <span class="text-danger">{{ $errors->first('category') }}</span>
        </div>
    </div>

    <div class="col-md-12">
            <div class="form-group">
               <input type="file" id="file-input" name="file" placeholder="قم بتحميل صورة القطعة" />
               <span class="text-danger">{{ $errors->first('file') }}</span>
            </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">إضافة</button>
    </div>
</div>

</form>
</div>
</div>
</div>
</div>
</body>
</html>
