@extends('main')
@section('title','| Home page')
@section('navbarsection')
           <a  style="color: #CEB255; font-family:Tajawal;"  href="/">الرئيسية</a>
           <a style="color: #020213; font-family:Tajawal;" href="{{ url('items/viewstate')}}">التصنيفات</a>
           <a style="color: #020213; font-family:Tajawal;" href="/seasons">المواسم الخيرية</a>
           <a style="color: #020213; font-family:Tajawal;" href="#">العمل الخيري </a>
           <a style="color: #020213; font-family:Tajawal;" href="#">تواصل معنا </a>
@endsection

@section('itemdisplay')
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


        @endsection
