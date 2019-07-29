@extends('layouts.dashboard')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          Update New {{$star->name}}
        </div>
        <div class="card-body">
          <form action="{{route('stars.update',$star->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">

            <dashboard-stars-edit-form-section :errors="{{json_encode($errors)}}" :star="{{json_encode($star)}}"></dashboard-stars-edit-form-section>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
