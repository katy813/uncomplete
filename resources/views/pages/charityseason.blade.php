@extends('main')
@section('title','| Charity seasons')
@section('navbarsection')
           <a  style="color: #020213; font-family:Tajawal;"  href="/">الرئيسية</a>
           <a style="color: #020213; font-family:Tajawal;" href="#">التصنيفات</a>
           <a style="color: #CEB255; font-family:Tajawal;" href="/seasons">المواسم الخيرية</a>
           <a style="color: #020213; font-family:Tajawal;" href="#">العمل الخيري </a>
           <a style="color: #020213; font-family:Tajawal;" href="#">تواصل معنا </a>
@endsection

@section('itemdisplay')
<div class="row justify-content-start">

                   @foreach($charityseasons  as $charityseason)
                        <div class="d-flex justify-content-center" >
                          <div class="card row col-12 justify-content-center px border-0 h-100 " style="display:inline-block; position:relative;">
                            <img class="card-img-top" src="{{url('image/' .$charityseason->seasonphoto)}}"alt="image">
                            <a style="border-radius:35px; position: absolute; bottom:4em; left:4em; background-color:#CEB255; color:white; text-transform:uppercase; padding:1em 1.5em;" href="{{ url('seasons/viewseasondetails',$charityseason->id)}} " class="btn">إعرض التفاصيل</a>
                          </div>
                       </div>
                       <br>
 </div>
                   @endforeach
               {!! $charityseasons ->links() !!}


        @endsection
