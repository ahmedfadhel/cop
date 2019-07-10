@extends('layouts.dashboard')

@section('content')
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            Create New Video
          </div>
          <div class="card-body">
            <form action="{{route('videos.store')}}" method="POST">
              @csrf
            <dashboard-videos-form-section
              :errors="{{json_encode($errors)}}"
              :tags="{{json_encode($tags)}}"
              :cats="{{json_encode($cats)}}"
              :stars="{{json_encode($stars)}}"
              :videos="{{json_encode($videos)}}"
              >
            </dashboard-videos-form-section>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
