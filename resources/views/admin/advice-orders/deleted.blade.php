@extends('layouts.admin.master')
@section('title')
    {{trans('admin/advice-orders.Archive_advice_orders')}}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="card">
                <div class="card-header">
                    <p class="h5 text-primary"> {{trans('admin/advice-orders.Archive_orders')}}</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered text-center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('admin/advice-orders.name')}}</th>
                                <th>{{trans('admin/advice-orders.phone')}}</th>
                                <th>{{trans('admin/advice-orders.note')}}</th>
                                <th>{{trans('admin/advice-orders.archive_date')}}</th>
                                <th>{{trans('admin/advice-orders.Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($adviceOrders as $row)
                                <tr id="row_{{$row->id}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->note}}</td>
                                    <td>{{$row->deleted_at->diffForHumans()}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"
                                                onclick="reset_alert({{$row->id}},'advice-orders')"><i
                                                class="bx bx-archive-out"></i></button>

                                        <button type="button" class="btn btn-danger waves-effect waves-light btn-sm"
                                                onclick="delete_alert({{$row->id}},'advice-orders')"><i
                                                class="bx bx-trash"></i></button>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
