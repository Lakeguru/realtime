@extends('layouts.dashboard')

@section('content')

    <form role="form" action="{{ route('postpin') }}" method="post">
        @csrf
        <div class="box-body">
                <div class="form-group col-md-3" >
                    <label for="Pins">Enter Pin</label>
                    <input type="text" name="random" class="form-control" name="numbers" placeholder="Enter The Numbers of Pins">
                </div>
        </div>
        <div class="box-body">
        <div class="form-group col-md-3" >
                <button type="submit" class="btn btn-primary">Submit</button>
         </div>
        </div>
    </form>

    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>PINS</th>
                  <th>USED PIN</th>
                  <th>DELETE PIN</th>
                  <th>DATE CREATED</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($numbers as $number)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$number->numbers}}</td>
                    <td>{{$number->status}}</td>
                    <td>{{$number->delete}}</td>
                    <td>{{$number->created_at->toDateTimeString()}}</td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            {{$numbers->links()}}
            <!-- /.box-body -->
          </div>
@endsection
