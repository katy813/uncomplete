@extends('items.layout')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Edit Item</a></h2>
<br>

<form action="{{ route('items.update', $item_info->itemid) }}" method="POST" name="update_item">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>name</strong>
            <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ $item_info->name }}">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>
    <div class="col-md-12">
                  <div class="form-group">
                      <strong>Description</strong>
                      <textarea class="form-control" col="4" name="description" placeholder="Enter Description" >{{ $item_info->description }}</textarea>
                      <span class="text-danger">{{ $errors->first('description') }}</span>
                  </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Item state</strong>
            <input type="text" name="state" class="form-control" placeholder="Enter Item state" value="{{ $item_info->state }}">
            <span class="text-danger">{{ $errors->first('state') }}</span>
        </div>
    </div>
     <div class="col-md-12">
            <div class="form-group">
                <strong>Item price</strong>
                <input type="text" name="price" class="form-control" placeholder="Enter Item price" value="{{ $item_info->price }}">
                <span class="text-danger">{{ $errors->first('price') }}</span>
            </div>
     </div>
      <div class="col-md-12">
             <div class="form-group">
                 <strong>charity fee you want to donate</strong>
                 <input type="text" name="charityfee" class="form-control" placeholder="Enter charity fee" value="{{ $item_info->charityfee }}">
                 <span class="text-danger">{{ $errors->first('charityfee') }}</span>
             </div>
      </div>
       <div class="col-md-12">
              <div class="form-group">
                  <strong>Item status</strong>
                  <input type="text" name="status" class="form-control" placeholder="Enter Item status" value="{{ $item_info->status }}">
                  <span class="text-danger">{{ $errors->first('status') }}</span>
              </div>
       </div>
        <div class="col-md-12">
               <div class="form-group">
                   <strong>Item category</strong>
                   <input type="text" name="category" class="form-control" placeholder="Enter Item category" value="{{ $item_info->category }}">
                   <span class="text-danger">{{ $errors->first('category') }}</span>
               </div>
           </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>
@endsection
