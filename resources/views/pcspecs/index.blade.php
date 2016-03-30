@extends('layouts.app')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">PC Specifications</h3>
        </div>
        <div class="box-body">
          <p><a href="pcspecs/create"><button type="button" class="btn btn-default" name="create-new-pcspec" data-toggle="tooltip" data-original-title="Create New PC Specification"><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> <b>Create New PC Specification</b></button></a></p>
          <table class="table table-striped table-bordered table-hover">
            <tr>
              <th>CPU</th>
              <th>RAM</th>
              <th>HDD</th>
              <th>Actions</th>
            </tr>
            @foreach($pcspecs as $pcspec)
              <tr>
                <div>
                  <td>{{$pcspec->cpu}}</td>
                  <td>{{$pcspec->ram}}</td>
                  <td>{{$pcspec->hdd}}</td>
                  <td><a href="/pcspecs/{{ $pcspec->id }}/edit">Edit</a></td>
                </div>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
      <div class="text-center">{!! $pcspecs->links() !!}</div>
    </div>
@endsection