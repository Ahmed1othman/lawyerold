@extends('layouts.admin.master')
@section('title')
    {{ trans('admin/clients.Edit_clients') }}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('clients.update', 'test') }}" method="post" autocomplete="off"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <div class="row">

                            <div class="col">
                                <label class="mb-2">{{ trans('admin/clients.client_name') }}</label>
                                <input type="text" name="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       value="{{ $data->getTranslation('name', 'en') }}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col">
                                <label class="mb-2">{{ trans('admin/clients.client_name_ar') }}</label>
                                <input type="text" name="name_ar"
                                       class="form-control  @error('name_ar') is-invalid @enderror"
                                       value="{{ $data->getTranslation('name', 'ar') }}">
                                @error('name_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <br>



                            <br>

                            <br>

                            <div class="row">
                                <div class="col-xl-9 mx-auto">
                                    @if ($data->image)
                                        <a href="{{ asset($data->image) }}" data-fancybox="group2">
                                            <img width="75px" height="75px" src="{{ asset($data->image) }}"
                                                 alt="{{ $data->name }}" class="">
                                        </a>
                                    @endif

                                    <p class="text-danger">*
                                        {{ trans('admin/clients.Attachments_are_of_image_type_only') }}</p>
                                    <h6 class="mb-0 text-uppercase">{{ trans('admin/clients.Attachments') }}
                                    </h6>
                                    <hr/>
                                    <div class="card">
                                        <div class="card-body">
                                            <input id="image-uploadify" name="photo" type="file" accept="image/*">
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <br>

                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-success">{{ trans('admin/clients.Edit') }}</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
