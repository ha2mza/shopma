@extends('home')
@section('css')

    <!-- chartist CSS
    <link href="{{ asset('assets/plugins/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/chartist-js/dist/chartist-init.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}"
          rel="stylesheet">  -->
    <style>
        a {
            color: #455a64;
        }
    </style>
@endsection
@section('content')

@stop


@section('js')
    <!-- chartist chart
    <script src="{{ asset('assets/plugins/chartist-js/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>

<!-- Chart JS
    <script src="{{ asset('js/dashboard4.js') }}"></script>
-->
@stop