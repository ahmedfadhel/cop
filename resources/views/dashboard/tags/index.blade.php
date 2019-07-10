@extends('layouts.dashboard')

@section('content')
<dashboard-tags-section
  :tags="{{json_encode($tags)}}"
  :status="{{json_encode(Session::get('status'))}}"
  :success="{{json_encode(Session::get('success'))}}"
  :failed="{{json_encode(Session::get('failed'))}}"
  ></dashboard-tags-section>

@endsection
