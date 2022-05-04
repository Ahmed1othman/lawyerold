@extends('layouts.admin.master')
@section('title')
    {{trans('admin/advice-orders.details')}}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('advice-orders.index')}}" class="btn btn-primary">{{__('admin/app.back')}}</a>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.name')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control"  disabled readonly value="{{$adviceOrder->name}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.email')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control"  disabled readonly value="{{$adviceOrder->email}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.phone')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control"  disabled readonly value="{{$adviceOrder->phone}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.subject')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control"  disabled readonly value="{{$adviceOrder->subject}}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.msg')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <textarea class="form-control" disabled readonly>{{$adviceOrder->msg}}</textarea>
                            </div>
                        </div>
                        <hr>


                        <form action="{{ route('advice-orders.update','orders') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id" value="{{ $adviceOrder->id }}">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">{{__('admin/app.notes')}}</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <textarea class="form-control"  name="note">{{$adviceOrder->note}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="{{__('admin/app.save_note')}}" />
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
