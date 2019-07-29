@extends('layouts.dashboard')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          Create New Star
        </div>
        <div class="card-body">
          <form action="{{route('stars.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <dashboard-stars-form-section :errors="{{json_encode($errors)}}"></dashboard-stars-form-section>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
