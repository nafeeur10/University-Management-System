@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.breakingnews.title') }} {{ trans('cruds.homeslider.details') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.breakingnews.fields.id') }}
                        </th>
                        <td>
                            {{ $breakingnews->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.breakingnews.fields.title') }}
                        </th>
                        <td>
                            {{ $breakingnews->news_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.breakingnews.fields.title_arabic') }}
                        </th>
                        <td dir="rtl" class="float-right">
                            {{ $breakingnews->news_title_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.breakingnews.fields.news_link') }}
                        </th>
                        <td>
                            {{ $breakingnews->news_main_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.breakingnews.fields.start_time') }}
                        </th>
                        <td>
                            {{ $breakingnews->news_start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.breakingnews.fields.end_time') }}
                        </th>
                        <td>
                            {{ $breakingnews->news_end_date }}
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