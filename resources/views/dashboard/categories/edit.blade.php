@extends('layouts.dashboard')

@section('content')
    <form action="{{route('category.update',$cat->id)}}" method="post">
      @csrf
      <input type="hidden" name="_method" value="PATCH">
      <cat-edit-form-section
      :cat="{{json_encode($cat)}}"
      :errors="{{json_encode($errors)}}"

      ></cat-edit-form-section>
    </form>
@endsection
