@extends('layouts.app')

@section('main-content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">{{$pageTitle}}</h3>
        </div>
        <div class="box-body">
          <form method="POST" action="/assets/{{$asset->id}}">
            {{method_field('PATCH')}}
            {{csrf_field()}}
            <div class="form-group">
              <label for="serial_number">Serial Number</label>
              <input type="text" name="serial_number" class="form-control" value="{{$asset->serial_number}}">
            </div>
            <div class="form-group">
              <label for="asset_model_id">Model</label>
              <select class="form-control asset_model_id" name="asset_model_id">
                @foreach($asset_models as $asset_model)
                  <option
                    @if($asset->model_id == $asset_model->id)
                      selected
                    @endif
                  value="{{$asset_model->id}}">{{$asset_model->manufacturer->name}} - {{$asset_model->asset_model}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="division_id">Division</label>
              <select class="form-control division_id" name="division_id">
                @foreach($divisions as $division)
                  <option
                    @if($asset->division_id == $division->id)
                      selected
                    @endif
                  value="{{$division->id}}">{{$division->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="supplier_id">Supplier</label>
              <select class="form-control supplier_id" name="supplier_id">
                @foreach($suppliers as $supplier)
                  <option
                    @if($asset->supplier_id == $supplier->id)
                      selected
                    @endif
                  value="{{$supplier->id}}">{{$supplier->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="invoice_id">Invoice</label>
              <select class="form-control invoice_id" name="invoice_id">
                <option value=""></option>
                @foreach($invoices as $invoice)
                  <option
                    @if($asset->invoice_id == $invoice->id)
                      selected
                    @endif
                  value="{{$invoice->id}}">{{$invoice->invoice_number}} - {{$invoice->invoiced_date}} - {{$invoice->supplier->name}} - R{{$invoice->total}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="purchase_date">Purchase Date</label>
              <input type="date" name="purchase_date" class="form-control" value="{{$asset->purchase_date}}">
            </div>
            <div class="form-group">
              <label for="warranty_months">Warranty Months</label>
              <input type="text" name="warranty_months" class="form-control" value="{{$asset->warranty_months}}">
            </div>
            <div class="form-group">
              <label for="warranty_type_id">Warranty Type</label>
              <select class="form-control warranty_type_id" name="warranty_type_id">
                <option value=""></option>
                @foreach($warranty_types as $warranty_type)
                  <option
                    @if($asset->warranty_type_id == $warranty_type->id)
                      selected
                    @endif
                  value="{{$warranty_type->id}}">{{$warranty_type->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="ip">IP Address (If PC/Laptop)</label>
              <input type="text" name="ip" class="form-control" value="{{$asset->ip}}">
            </div>
            <div class="form-group">
              <label for="mac">MAC Address (If PC/Laptop)</label>
              <input type="text" name="mac" class="form-control" value="{{$asset->mac}}">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary"><b>Edit Asset</b></button>
            </div>
          </form>
          <div class="text-center"><a class="btn btn-primary" href="{{ URL::previous() }}">Back</a></div>
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
@section('footer')
  <script type="text/javascript">
    $(document).ready(function() {
      $(".asset_model_id").select2();
      $(".division_id").select2();
      $(".supplier_id").select2();
      $(".invoice_id").select2();
      $(".warranty_type_id").select2();
    });
  </script>
  <script>
    $(":input").keypress(function(event){
      if (event.which == '10' || event.which == '13') {
        event.preventDefault();
      }
    });
  </script>
@endsection
