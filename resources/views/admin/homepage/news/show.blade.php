@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.event.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.id') }}
                        </th>
                        <td>
                            {{ $event->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_title') }}
                        </th>
                        <td>
                            {{ $event->event_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_title_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $event->event_title_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_description') }}
                        </th>
                        <td>
                            {{ $event->event_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_description_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $event->event_description_arabic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_date') }}
                        </th>
                        <td>
                            {{ $event->event_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_start_time') }}
                        </th>
                        <td>
                            {{ $event->event_start_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_end_time') }}
                        </th>
                        <td>
                            {{ $event->event_end_time }}
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="my-2">
                @foreach($eventimages as $key => $image)
                    <img src="{{ asset('images/event/' . $image->event_image ) }}" 
                        class="mr-2" 
                        style="width: 250px; object-fit:cover;"/>
                @endforeach
            </div>
            <a style="margin-top:20px;" class="btn btn-primary" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection