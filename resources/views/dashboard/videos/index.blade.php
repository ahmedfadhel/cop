@extends('layouts.dashboard')

@section('content')
  <dashboard-videos-section
  :videos="{{json_encode($videos)}}"
  :errors="{{json_encode($errors)}}"
  :success="{{json_encode(Session::get('success'))}}"
  :failed="{{json_encode(Session::get('failed'))}}"
  ></dashboard-videos-section>
@endsection

