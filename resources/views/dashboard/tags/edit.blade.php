@extends('layouts.dashboard')

@section('content')
    <form action="{{route('tags.update',$tag->id)}}" method="post">
      @csrf
      <input type="hidden" name="_method" value="PATCH">
      <dashboard-edit-tag-form-section
      :tag="{{json_encode($tag)}}"
      :errors="{{json_encode($errors)}}"
      ></dashboard-edit-tag-form-section>
    </form>
@endsection
