@extends('layouts.admin.master')
@section('title')
    {{trans('admin/orders.orders')}}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered text-center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('admin/orders.name')}}</th>
                                <th>{{trans('admin/orders.phone')}}</th>
                                <th>{{trans('admin/orders.service_type')}}</th>
                                <th>{{trans('admin/orders.received_date')}}</th>
                                <th>{{trans('admin/orders.Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($Orders as $row)
                                <tr id="row_{{$row->id}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->type}}</td>
                                    <td>{{$row->created_at->diffForHumans()}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" onclick="delete_alert({{$row->id}},'orders')" ><i class="bx bx-archive-in"></i></button>
                                        <a href="{{route('orders.show',$row->id)}}" class="btn btn-success btn-sm waves-effect waves-light"><i class="bx bx-show"></i></a>
                                    </td>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
