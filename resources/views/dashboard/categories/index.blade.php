@extends('layouts.dashboard')

@section('content')
  <dashboard-cats-section
    :cats="{{json_encode($cats)}}"
    :success="{{json_encode(Session::get('success'))}}"
    :failed="{{json_encode(Session::get('failed'))}}"
    ></dashboard-cats-section>
@endsection
