@extends('layouts.dashboard')

@section('content')

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            Create New Album
          </div>
          <div class="card-body">
            <form action="{{route('album.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <dashboard-albums-form-section
              :tags="{{json_encode($tags)}}"
              :cats="{{json_encode($cats)}}"
              :errors="{{json_encode($errors)}}"
              ></dashboard-albums-form-section>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
