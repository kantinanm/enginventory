@extends('layouts.front-end.default')
@section('title')
    Home frontend
@stop
@section('css_script')
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>
                    @if(Auth::user()!=null)
                    <div class="panel-body">
                        You are logged in!, Hello
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')@endsection
@section('js_plugin')

    <!-- jQuery plugins/scripts - end -->
@endsection