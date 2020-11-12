@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="row">
        <div class="col-md-6">
            <div class="card-header">
                <h4 class="text-center">Total Visitors</h4>
            </div>
            <div class="card-body">
                {{ $totalVisitors }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-header">
                <h4 class="text-center">Active Visitors</h4>
            </div>
            <div class="card-body">
                {{ $activeVisitorCounter }}
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.visitors.title') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped dataex-html5-selectors" id="visitorsTable">
                <thead>
                    <tr>
                        <th width="10">
                           
                        </th>
                        <th>
                            {{ trans('cruds.visitors.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.visitors.fields.ip') }}
                        </th>
                        <th>
                            {{ trans('cruds.visitors.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.visitors.fields.state') }}
                        </th>
                        <th>
                            {{ trans('cruds.visitors.fields.zipCode') }}
                        </th>
                        <th>
                            {{ trans('cruds.visitors.fields.isOnline') }}
                        </th>
                        <th>
                            {{ trans('cruds.visitors.fields.entry_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.visitors.fields.exit_time') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($visitors as $key => $user)
                        <tr data-entry-id="{{ $user->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $user->id ?? '' }}
                            </td>
                            <td>
                                {{ $user->ip ?? '' }}
                            </td>
                            <td>
                                {{ $user->country ?? '' }}
                            </td>
                            <td>
                                {{ $user->state ?? '' }}
                            </td>
                            <td>
                                {{ $user->postCode ?? '' }}
                            </td>
                            <td>
                                @php
                                    $currentTime = strtotime(date('Y-m-d H:i:s'));
                                    $exitTime = strtotime($user->updated_at);

                                    $differencetTime = abs(($currentTime-$exitTime)/60);

                                    $timeDurationOfExitAndCurrenct = $differencetTime ;
                                @endphp
                                @if($timeDurationOfExitAndCurrenct<=2)
                                <span class="badge badge-pill badge-success">Online</span>
                                @else
                                <span class="badge badge-pill badge-secondary">Offline</span>
                                @endif
                            </td>
                            <td>
                                {{ $user->created_at ?? '' }}
                            </td>
                            <td>
                                {{ $user->updated_at ?? '' }}
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
@endsection