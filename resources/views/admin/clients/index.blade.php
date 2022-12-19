@extends('layouts.admin.master')
@section('title')
{{trans('admin/clients.clients')}}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <a href="{{route('clients.create')}}"
                            class="btn btn-success">{{trans('admin/clients.Add_new_client')}}</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('admin/clients.name')}}</th>
                                <th>{{trans('admin/clients.photo')}}</th>
                                <th>{{trans('admin/clients.Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr id="row_{{$row->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->name}}</td>
                                <td>
                                    {{$row->image}}
                                    @if ($row->image)

                                    <a href="{{$row->image}}" data-fancybox="group2">
                                        <img width="75px" height="75px" src="{{$row->image}}"
                                            alt="{{$row->title}}" class="">
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('clients.edit',$row->id)}}" class="btn btn-success btn-sm"><i
                                            class='bx bx-edit'></i></a>
                                    <button type="button" class="btn btn-danger waves-effect waves-light btn-sm"
                                        onclick="delete_alert({{$row->id}},'clients')"><i
                                            class="bx bx-trash"></i></button>
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
