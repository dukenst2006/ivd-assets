@extends('layouts.app')

@section('main-content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Edit Division</h3>
        </div>
          <div class="panel-body">
            <form method="POST" action="/divisions/{{$division->id}}/update">
              {{method_field('PATCH')}}
              {{csrf_field()}}
              <div class="form-group">
                <label for="name">Division Name</label>
                <input type="text" name="name" class="form-control" value="{{$division->name}}">
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit Division</button>
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
