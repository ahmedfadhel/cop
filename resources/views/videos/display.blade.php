@extends('layouts.app')

@section('content')
    <display-video-section
      :display = "{{json_encode($display)}}"
    ></display-video-section>
@endsection
