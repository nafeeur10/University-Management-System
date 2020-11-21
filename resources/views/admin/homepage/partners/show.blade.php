@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.partners.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.partners.fields.id') }}
                        </th>
                        <td>
                            {{ $partner->id }}
                        </td>
                    </tr>


                    <tr>
                        <th>
                            {{ trans('cruds.partners.fields.partner_name') }}
                        </th>
                        <td>
                            {{ $partner->partner_name }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.partners.fields.partner_link') }}
                        </th>
                        <td>
                            {{ $partner->partner_link }}
                        </td>
                    </tr>


                    <tr>
                        <th>
                            {{ trans('cruds.partners.fields.logo') }}
                        </th>
                        <td >
                            <img src="{{ asset('images/partners/' . $partner->partner_image) }}" />
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