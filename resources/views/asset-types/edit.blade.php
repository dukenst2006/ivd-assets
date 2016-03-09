@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Edit Asset Type</h3>
        </div>
          <div class="panel-body">
            <form method="POST" action="/asset-types/{{$asset_type->id}}/update">
              {{method_field('PATCH')}}
              {{csrf_field()}}
              <div class="form-group">
                <label for="type_name">Asset Type Name</label>
                <input type="text" name="type_name" class="form-control" value="{{$asset_type->type_name}}">
              </div>
              <div class="form-group">
                <label for="abbreviation">Abbreviation</label>
                <input type="text"  name="abbreviation" class="form-control" value="{{$asset_type->abbreviation}}">
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit Asset Type</button>
              </div>
            </form>
          </div>
        </div>

      @if(count($errors))
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      @endif
    </div>
  </div>
@endsection
