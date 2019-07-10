@extends('layouts.dashboard')

@section('content')
    <dashboard-stars-section
      :stars="{{json_encode($stars)}}"
      :success="{{json_encode(Session::get('success'))}}"
      :failed="{{json_encode(Session::get('failed'))}}"
    >

    </dashboard-stars-section>
@endsection
