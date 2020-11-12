@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.faculty.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.fields.id') }}
                        </th>
                        <td>
                            {{ $faculty->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_image') }}
                        </th>
                        <td>
                            <img src="{{ asset('images/faculty/'.$faculty->home_faculty_image )}}" alt="Home Faculty Image" style="width: 100px">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_title') }}
                        </th>
                        <td>
                            {{ $faculty->home_faculty_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_title_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $faculty->home_faculty_title_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_description') }}
                        </th>
                        <td>
                            {{ $faculty->home_faculty_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_description_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $faculty->home_faculty_description_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_link') }}
                        </th>
                        <td>
                            {{ $faculty->home_faculty_link }}
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