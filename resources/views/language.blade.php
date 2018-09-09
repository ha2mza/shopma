@extends('layouts.app')
@section('css')
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet"/>
@endsection
@section('js')
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <script>
        $(function () {
            $("#CLI_CODE").select2({
                templateSelection: function (element) {
                    if (element.hasOwnProperty("element"))
                        return element.text + ", " + element.element.value
                }
            });

            $("#LANG").select2({
                templateSelection: function (element) {
                    if (element.hasOwnProperty("element"))
                        return "<i class=\"flag-icon flag-icon-" + element.element.value + "\"></i><span class='p-r-10'></span>" + element.text;
                },

                templateResult: function (element) {
                    if (element.hasOwnProperty("element"))
                        return "<i class=\"flag-icon flag-icon-" + element.element.value + "\"></i><span class='p-r-10'></span>" + element.text;
                },

                escapeMarkup: function (x) {
                    return x;
                }
            });
        });
    </script>
@endsection
@section('content')
    <div class="login-register">
        <div class="login-box card">
            <div class="card-body">
                <h3 class="box-title m-b-20">Configuration</h3>
                <form class="form-horizontal form-material" action="{{ url('/configuration') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Client</label>
                        {!! Form::select('CLI_CODE',$clients,null,['id'=>'CLI_CODE','style'=>'width:100%','class'=>'form-control','placeholder'=>'Choisi une Client']) !!}
                    </div>

                    <div class="form-group">
                        <label>Language</label>
                        {!! Form::select('LANG',$langs,'fr',['id'=>'LANG','style'=>'width:100%','class'=>'form-control','placeholder'=>'Choisi une Language']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form1').submit();"
                           class="btn btn-primary">
                            Logout
                        </a>
                    </div>
                </form>

                <form id="logout-form1" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@stop