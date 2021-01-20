@extends('layouts.admin')
@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif
<style>
    .excel-btn .dt-buttons .btn {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
        background-color: black!important;
    }
</style>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.newsletter.title') }} {{ trans('global.list') }}
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-Newsletter">
                <thead>
                    <tr>
                        <th>{{ trans('cruds.newsletter.email') }}</th>
                        <th>&nbsp; Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($newsletter as $key => $nl)
                    <tr data-entry-id="{{ $nl->id }}">
                        <td>{{ $nl->newsletter_email }}</td>
                        <td>
                            @if(Auth::user()->can('users_manage') && Auth::user()->can('editor_add_update'))
                                <form action="{{ route('newsletter.destroy', $nl->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                            @endif
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
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Newsletter:not(.ajaxTable)').DataTable({
        dom: "<'d-flex justify-content-between'<'excel-btn'B><f>>rtip",
        buttons: [
            'csv'
        ]
  })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
  })

</script>
@endsection