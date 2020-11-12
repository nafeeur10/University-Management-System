@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.welcomemessage.title') }} {{ trans('cruds.welcomemessage.details') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.welcomemessage.fields.id') }}
                        </th>
                        <td>
                            {{ $welcomemessage->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.welcomemessage.fields.welcome_message_title') }}
                        </th>
                        <td>
                            {{ $welcomemessage->welcome_message_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.welcomemessage.fields.welcome_message_title_arabic') }}
                        </th>
                        <td class="float-right text-right" dir="rtl">
                            {{ $welcomemessage->welcome_message_title_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.welcomemessage.fields.welcome_description') }}
                        </th>
                        <td>
                            {{ $welcomemessage->welcome_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.welcomemessage.fields.welcome_description_arabic') }}
                        </th>
                        <td class="float-right text-right" dir="rtl">
                            {{ $welcomemessage->welcome_description_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.welcomemessage.fields.welcome_signature') }}
                        </th>
                        <td>
                            <img src="{{ asset('images/signature/'.$welcomemessage->welcome_signature )}}" alt="Main Image" style="width: 100px">
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