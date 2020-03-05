@extends('items.layout')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Edit Item</a></h2>
<br>

<form action="{{ route('season.update', $season_info->id) }}" method="POST" name="update_season">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>name of the season</strong>
            <input type="text" name="seasonName" class="form-control" placeholder="Enter name of the season " value="{{ $season_info->seasonName }}">
            <span class="text-danger">{{ $errors->first('seasonName') }}</span>
        </div>
    </div>
    <div class="col-md-12">
                  <div class="form-group">
                      <strong>Description</strong>
                      <textarea class="form-control" col="4" name="description" placeholder="Enter Description" >{{ $season_info->description }}</textarea>
                      <span class="text-danger">{{ $errors->first('description') }}</span>
                  </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>duration</strong>
            <input type="text" name="duration" class="form-control" placeholder="Enter season duration" value="{{ $season_info->duration }}">
            <span class="text-danger">{{ $errors->first('duration') }}</span>
        </div>
    </div>
     <div class="col-md-12">
            <div class="form-group">
                <strong>unit name </strong>
                <input type="text" name="unitname" class="form-control" placeholder="Enter unit name " value="{{ $season_info->unitname }}">
                <span class="text-danger">{{ $errors->first('unitname') }}</span>
            </div>
     </div>
      <div class="col-md-12">
             <div class="form-group">
                 <strong>unit value</strong>
                 <input type="text" name="unit value" class="form-control" placeholder="Enter unit value" value="{{ $season_info->unitvalue }}">
                 <span class="text-danger">{{ $errors->first('unitvalue') }}</span>
             </div>
      </div>
       <div class="col-md-12">
              <div class="form-group">
                  <strong>number of units needed to achieve goal</strong>
                  <input type="text" name="numofunits" class="form-control" placeholder="Enter number of units" value="{{ $season_info->numofunits }}">
                  <span class="text-danger">{{ $errors->first('numofunits') }}</span>
              </div>
       </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>
@endsection
