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
                            {{ trans('cruds.faculty.dept.fields.image_on_faculty_preview') }}
                        </th>
                        <td>
                            <img src="{{ asset('images/faculty/dept/'.$dept_details->dept_faculty_image )}}" alt="Faculty Deaprtment Image" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.dept.fields.faculty_dept_title') }}
                        </th>
                        <td>
                            {{ $dept_details->dept_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.dept.fields.faculty_dept_title_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $dept_details->dept_name_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.dept.fields.faculty_dept_short_description') }}
                        </th>
                        <td>
                            {{ $dept_details->dept_short_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.dept.fields.faculty_dept_short_description_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $dept_details->dept_short_description_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.dept.fields.dept_url') }}
                        </th>
                        <td>
                            {{ $dept_details->dept_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.dept.fields.dept_image_preview') }}
                        </th>
                        <td>
                            <img src="{{ asset('images/faculty/dept/'.$dept_details->dept_image )}}" alt="Deaprtment Image" class="img-fluid">
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.faculty.dept.fields.faculty_dept_description') }}
                        </th>
                        <td>
                            {{ $dept_details->dept_main_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.dept.fields.faculty_dept_description_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $dept_details->dept_main_description_arabic }}
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