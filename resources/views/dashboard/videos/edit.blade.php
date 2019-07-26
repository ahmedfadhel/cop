@extends('layouts.dashboard')

@section('content')
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            Edit {{$video[0]->title}}
          </div>
          <div class="card-body">
            <form action="{{route('videos.update',$video[0]->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="_method" value="PATCH">
            <dashboard-video-edit-form-section
              :errors="{{json_encode($errors)}}"
              :video="{{json_encode($video)}}"
              :tags="{{json_encode($tags)}}"
              :cats="{{json_encode($cats)}}"
              :stars="{{json_encode($stars)}}"
              >
            </dashboard-video-edit-form-section>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
