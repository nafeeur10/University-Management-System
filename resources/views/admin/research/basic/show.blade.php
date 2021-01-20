@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.research.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.research.fields.main_title') }}
                        </th>
                        <td>
                            {{ $research->research_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.research.fields.main_title_arabic') }}
                        </th>
                        <td dir="ltr" class="text-right">
                            {{ $research->research_title_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.research.fields.main_description') }}
                        </th>
                        <td>
                            {{ $research->research_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.research.fields.main_description_arabic') }}
                        </th>
                        <td dir="ltr" class="text-right">
                            {{ $research->research_description_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.research.fields.home_image') }}
                        </th>
                        <td>
                            <img src="{{ asset('images/research/'.$research->research_homepage_image) }}" alt="Research Home Image">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.research.fields.details_page_image') }}
                        </th>
                        <td>
                            <img src="{{ asset('images/research/'.$research->research_details_main_image) }}" alt="Research Details Page Image">
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-primary" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection