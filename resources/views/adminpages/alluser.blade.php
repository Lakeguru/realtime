@extends('layouts.dashboard')

@section('content')
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
                    <th>FULL NAME</th>
                    <th>USERNAME</th>
                    <th>PHONE NUMBER</th>
                    <th>DATE REGISTER</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->username}}</td>
                        <td>{{$users->phone_number}}</td>
                        <td>{{$users->created_at->toDateTimeString()}}</td>
                    </tr>
                @endforeach
                </tfoot>
            </table>
        </div>
    {{$users->links()}}
    <!-- /.box-body -->
    </div>
@endsection