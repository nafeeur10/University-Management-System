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
            <a class="btn btn-success" href="{{ route("admin.breakingnews.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.homepagecontent.slider.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.homepagecontent.breakingnews.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-BreakingNews">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.breakingnews.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.breakingnews.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.breakingnews.fields.title_arabic') }}
                        </th>
                        <th>
                            {{ trans('cruds.breakingnews.fields.news_link') }}
                        </th>
                        <th>
                            {{ trans('cruds.breakingnews.fields.start_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.breakingnews.fields.end_time') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($breakingNews as $key => $news)
                        <tr data-entry-id="{{ $news->id }}">
                            <td></td>
                            <td>{{ $news->id }}</td>
                            <td>{{ $news->news_title }}</td>
                            <td>{{ $news->news_title_arabic }}</td>
                            <td>{{ $news->news_start_date }}</td>
                            <td>{{ $news->news_end_date }}</td>
                            <td>
                                <a href="{{ route('admin.breakingnews.show', $news->id) }}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{ route('admin.breakingnews.edit', $news->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('admin.breakingnews.destroy', $news->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    @can('users_manage')
                                    <input type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}">
                                    @endcan
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
  $('.datatable-BreakingNews:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection