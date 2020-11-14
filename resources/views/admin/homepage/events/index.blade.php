@extends('layouts.admin')
@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif
@can('editor_add_update')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.events.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.events.title') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.events.title') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Home-Events">
                <thead>
                    <tr>
                        <th width="10">

                        </th>

                        <th>
                            {{ trans('cruds.events.fields.id') }}
                        </th>

                        <th>
                            {{ trans('cruds.events.fields.event_title') }}
                        </th>

                        <th>
                            {{ trans('cruds.events.fields.event_title_arabic') }}
                        </th>
                        <th>
                            {{ trans('cruds.events.fields.event_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.events.fields.event_description_arabic') }}
                        </th>
                        <th>
                            {{ trans('cruds.events.fields.event_date') }}
                        </th>

                        <th>
                            {{ trans('cruds.events.fields.event_start_time') }}
                        </th>

                        <th>
                            {{ trans('cruds.events.fields.event_end_time') }}
                        </th>
                        
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $key => $event)
                        <tr data-entry-id="{{ $event->id }}">
                            <td></td>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->event_title }}</td>
                            <td>{{ $event->event_title_arabic }}</td>
                            <td>{{ $event->event_description }}</td>
                            <td>{{ $event->event_description_arabic }}</td>
                            <td>{{ $event->event_date }}</td>
                            <td>{{ $event->event_start_time }}</td>
                            <td>{{ $event->event_end_date }}</td>
                            <td>
                                <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-sm btn-info">Edit</a>
                                @can('user_manage')
                                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    
$(function () {
    let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
    @can("users_manage")
    let deleteButtonTrans = "{{ trans('global.datatables.delete') }}"
    let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert("{{ trans('global.datatables.zero_selected') }}")

        return
      }

      if (confirm("{{ trans('global.areYouSure') }}")) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Home-Events:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection