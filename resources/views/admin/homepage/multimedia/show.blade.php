@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.multimedia.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.multimedia.image') }}
                        </th>
                        <td>
                            <img src="{{ asset($multimedia->href )}}" class="img-fluid" />
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