@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.research.individual.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.research.individual.fields.title') }}
                        </th>
                        <td>
                            {{ $research->research_individual_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.research.individual.fields.title_arabic') }}
                        </th>
                        <td dir="ltr" class="text-right">
                            {{ $research->research_individual_title_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.research.individual.fields.description') }}
                        </th>
                        <td>
                            {{ $research->research_individual_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.research.individual.fields.description_arabic') }}
                        </th>
                        <td dir="ltr" class="text-right">
                            {{ $research->research_individual_description_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.research.individual.fields.image') }}
                        </th>
                        <td>
                            <img src="{{ asset('images/research/individual/'.$research->research_individual_image) }}" alt="Research Individual Image" class="img-fluid">
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