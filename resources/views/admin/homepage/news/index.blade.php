@extends('layouts.admin')
@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif
@can(['editor_add_update'])
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.latest_news.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.latest_news.title') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.latest_news.title') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Home-Latest-News">
                <thead>
                    <tr>
                        <th width="10">

                        </th>

                        <th>
                            {{ trans('cruds.latest_news.fields.id') }}
                        </th>

                        <th>
                            {{ trans('cruds.latest_news.fields.news_home_title') }}
                        </th>

                        <th>
                            {{ trans('cruds.latest_news.fields.news_home_title_arabic') }}
                        </th>

                        <th>
                            {{ trans('cruds.latest_news.fields.news_home_description') }}
                        </th>

                        <th>
                            {{ trans('cruds.latest_news.fields.news_home_description_arabic') }}
                        </th>

                        <th>
                            {{ trans('cruds.latest_news.fields.news_single_title') }}
                        </th>

                        <th>
                            {{ trans('cruds.latest_news.fields.news_single_title_arabic') }}
                        </th>

                        <th>
                            {{ trans('cruds.latest_news.fields.news_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_description_arabic') }}
                        </th>

                        <th>
                            {{ trans('cruds.latest_news.fields.news_slider_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_slider_description_arabic') }}
                        </th>


                        <th>
                            {{ trans('cruds.latest_news.fields.news_date') }}
                        </th>
                        
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($latest_news as $key => $news)
                        <tr data-entry-id="{{ $news->id }}">
                            <td></td>
                            <td>{{ $news->id }}</td>
                            <td>{{ $news->news_home_title }}</td>
                            <td>{{ $news->news_home_title_arabic }}</td>
                            <td>{{ $news->news_home_description }}</td>
                            <td>{{ $news->news_home_description_arabic }}</td>
                            <td>{{ $news->news_single_title }}</td>
                            <td>{{ $news->news_single_title_arabic }}</td>
                            <td>{{ $news->news_description }}</td>
                            <td>{{ $news->news_description_arabic }}</td>
                            <td>{{ $news->news_slider_description }}</td>
                            <td>{{ $news->news_slider_description_arabic }}</td>
                            <td>{{ $news->news_date }}</td>
                            <td>
                                <a href="{{ route('admin.latest_news.show', $news->id) }}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{ route('admin.latest_news.edit', $news->id) }}" class="btn btn-sm btn-info">Edit</a>
                                
                                <form action="{{ route('admin.latest_news.destroy', $news->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
  $('.datatable-Home-Latest-News:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection