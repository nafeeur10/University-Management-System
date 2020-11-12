@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contact.social.title_singular') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.social.fields.id') }}
                        </th>
                        <td>
                            {{ $social_media_details->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.social.fields.title') }}
                        </th>
                        <td>
                            {{ $social_media_details->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.social.fields.icon') }}
                        </th>
                        <td>
                            {{ $social_media_details->icon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.social.fields.link') }}
                        </th>
                        <td>
                            {{ $social_media_details->link }}
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