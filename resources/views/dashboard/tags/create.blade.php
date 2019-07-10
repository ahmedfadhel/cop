@extends('layouts.dashboard')

@section('content')
    <form action="{{route('tags.store')}}" method="POST">
      @csrf
      <dashboard-tags-form-section
        :errors="{{ json_encode($errors)}}"
      ></dashboard-tags-form-section>
    </form>
@endsection
