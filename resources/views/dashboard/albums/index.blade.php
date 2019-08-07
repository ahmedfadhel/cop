@extends('layouts.dashboard')

@section('content')
    <dashboard-albums-section
    :albums="{{json_encode($albums)}}"
    :success="{{json_encode(Session::get('success'))}}"
    :failed="{{json_encode(Session::get('failed'))}}"
    ></dashboard-albums-section>
@endsection
