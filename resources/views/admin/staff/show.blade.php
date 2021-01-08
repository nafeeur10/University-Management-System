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
                            {{ trans('cruds.staff.fields.dept_name_show') }}
                        </th>
                        <td>
                            {{ App\FacultyDept::findOrFail($deptStaff->dept_id)->dept_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.staff_name') }}
                        </th>
                        <td>
                            {{ $deptStaff->staff_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.staff_name_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $deptStaff->staff_name_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.staff_designation') }}
                        </th>
                        <td>
                            {{ $deptStaff->staff_designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.staff_designation_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $deptStaff->staff_designation_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.staff_resume') }}
                        </th>
                        <td>
                            <embed src="{{ asset('images/staff/'.$deptStaff->staff_resume ) }}" height="600px" width="100%"/>
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