@extends('layouts.dashboard')

@section('content')

    <dashboard-stats-section
      :countv="{{json_encode($totalVideos)}}"
      :counts="{{json_encode($totalStars)}}"
      :countt="{{json_encode($totalTags)}}"
      :countc="{{json_encode($totalCats)}}"
      :stars="{{json_encode($stars)}}"
      :videos="{{json_encode($videos)}}"
    ></dashboard-stats-section>
@endsection
