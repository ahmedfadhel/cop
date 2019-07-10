@extends('layouts.dashboard')

@section('content')
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            Create New Category
          </div>
          <div class="card-body">
            <form action="{{route('category.store')}}" method="POST">
              @csrf
            <cat-form-section
              :errors="{{json_encode($errors)}}"
              ></cat-form-section>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
