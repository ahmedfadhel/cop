@extends('layouts.dashboard')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        Edit {{$album->title}}
      </div>
      <div class="card-body">
        <form action="{{route('album.update',$album->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="_method" value="PATCH">
          <dashboard-albums-edit-form-section
            :album="{{json_encode($album)}}"
            :tags="{{json_encode($tags)}}"
            :cats="{{json_encode($cats)}}"
            :errors="{{json_encode($errors)}}"
          ></dashboard-albums-edit-form-section>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
