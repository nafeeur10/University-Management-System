@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.homeslider.title') }} {{ trans('cruds.homeslider.details') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.homeslider.fields.id') }}
                        </th>
                        <td>
                            {{ $slider->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.homeslider.fields.name') }}
                        </th>
                        <td>
                            {{ $slider->slider_label }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.homeslider.fields.main_image') }}
                        </th>
                        <td>
                            <img src="{{ asset('images/slider/'.$slider->slider_main_image )}}" alt="Main Image" style="width: 100px">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.homeslider.fields.text_image') }}
                        </th>
                        <td>
                            <img src="{{ asset('images/slider/'.$slider->slider_title_image )}}" alt="Title Image" style="width: 100px">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.homeslider.fields.button_text') }}
                        </th>
                        <td>
                            {{ $slider->slider_button_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.homeslider.fields.button_link') }}
                        </th>
                        <td>
                            {{ $slider->slider_button_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-primary" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection