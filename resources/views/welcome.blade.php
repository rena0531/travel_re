@extends('layout')

@foreach ($plans as $plan)
    <div class="list-group-item">
        {{ $plan->title }} <br >
        {{ $plan->image }}
    </div>
    @endforeach
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-4">
                <nav class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                            <div>
                                @foreach ($plans as $plan)
                                    <div class="list-group-item">
                                        {{ $plan->title }} <br >
                                        {{ $plan->image }}
                                    </div>
                                @endforeach
                            </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
