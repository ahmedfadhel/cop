@extends('layouts.app')

@section('content')
    <display-album-section
      :album="{{json_encode($album)}}"
    ></display-album-section>
@endsection
