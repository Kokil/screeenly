@extends('layouts.app')

@section('content')


    <div class="content">

        <div class="panel panel-default">
            <div class="panel-heading">Documentation</div>

            <div class="panel-body">
                You can find our API documentation in our <a href="https://github.com/stefanzweifel/screeenly/wiki">Github Wiki</a>.
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Create new API Keys</div>

            <div class="panel-body">
                @include('apiKeys._form')
            </div>
        </div>


        @if (count($apiKeys) > 0)

            <div class="panel panel-default">
                <div class="panel-heading">API Keys</div>
                @include('apiKeys._table')
            </div>

        @else
            <div class="alert alert-warning">
                <span>You currently doesn't have an API key setup</span>
            </div>
        @endif

    </div>
@stop