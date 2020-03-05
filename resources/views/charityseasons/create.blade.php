@extends('items.layout')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Add Charity season</a></h2>
<br>

<form action="{{ route('seasons.store') }}" method="POST" name="add_season"  enctype="multipart/form-data">
{{ csrf_field() }}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>season name</strong>
            <input type="text" name="seasonName" class="form-control" placeholder="Enter name of the season ">
            <span class="text-danger">{{ $errors->first('seasonName') }}</span>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" col="4" name="description" placeholder="Enter Description"></textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>

    <div class="col-md-12">
            <div class="form-group">
                <strong>duration of the season</strong>
                <input type="date" name="duration" class="form-control" placeholder="Enter duration">
                <span class="text-danger">{{ $errors->first('duration') }}</span>
            </div>
    </div>

    <div class="col-md-12">
            <div class="form-group">
                <strong>unit name</strong>
                <input type="text" name="unitname" class="form-control" placeholder="Enter unit name">
                <span class="text-danger">{{ $errors->first('unitname') }}</span>
            </div>
    </div>

    <div class="col-md-12">
            <div class="form-group">
                <strong>unit value </strong>
                <input type="text" name="unitvalue" class="form-control" placeholder="Enter value of the unit">
                <span class="text-danger">{{ $errors->first('unitvalue') }}</span>
            </div>
    </div>

    <div class="col-md-12">
            <div class="form-group">
                <strong>number of units needed to achieve the goal</strong>
                <input type="text" name="numofunits" class="form-control" placeholder="Enter number of units">
                <span class="text-danger">{{ $errors->first('numofunits') }}</span>
            </div>
    </div>

<div class="col-md-12">
            <div class="form-group">
               <input type="file" id="file-input" name="file" placeholder="upload a photo" />
               <span class="text-danger">{{ $errors->first('file') }}</span>
            </div>
</div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>
@endsection
