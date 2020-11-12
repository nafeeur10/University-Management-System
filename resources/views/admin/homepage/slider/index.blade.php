@extends('layouts.admin')
@section('content')
@can('editor_add_update')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.slider.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.homepagecontent.slider.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.homepagecontent.slider.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Slider">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.homeslider.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.homeslider.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.homeslider.fields.main_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.homeslider.fields.text_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.homeslider.fields.button_text') }}
                        </th>
                        <th>
                            {{ trans('cruds.homeslider.fields.button_link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sliders as $key => $slider)
                        <tr data-entry-id="{{ $slider->id }}">
                            <td></td>
                            <td>{{ $slider->id }}</td>
                            <td>{{ $slider->slider_label }}</td>
                            <td><img src="{{ asset('images/slider/'.$slider->slider_main_image) }}" style="width: 100px;"/></td>
                            <td><img src="{{ asset('images/slider/'.$slider->slider_title_image) }}" style="width: 100px;"/></td>
                            <td>{{ $slider->slider_button_text }}</td>
                            <td>{{ $slider->slider_button_link }}</td>
                            <td>
                                <a href="{{ route('admin.slider.show', $slider->id) }}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('admin.slider.destroy', $slider->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}">
                                </form>
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
    @can('users_manage')
    let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
    let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
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
  $('.datatable-Slider:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection