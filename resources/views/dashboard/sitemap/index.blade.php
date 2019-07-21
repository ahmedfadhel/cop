@extends('layouts.dashboard')

@section('content')
    <div class="row mb-4">
      <div class="col-6">
        <h3>Sitemap Managment </h3>
      </div>
      <div class="col-6">
      <form action="{{route('sitemap-generation')}}">
        <button class="btn btn-outline-secondary float-right" type="submit">Generate New Sitemap File</button>
      </form>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <th scope="col">Location</th>
            <th scope="col">Last Modification</th>
          </thead>
          <tbody>
            @foreach ($current as $item)
              <tr>
                <td>{{$item->loc}}</td>
                <td>{{$item->lastmod}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection
