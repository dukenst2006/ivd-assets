@extends('layouts.app')

@section('main-content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">{{$pageTitle}}</h3>
        </div>
        <div class="box-body">
          <form method="POST" action="{{ url('manufacturers') }}">
            {{csrf_field()}}
            <div class="form-group">
              <label for="name">Manufacturer Name</label>
              <input type="text" name="name" class="form-control" value="{{old('name')}}">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Add New Manufacturer</button>
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
