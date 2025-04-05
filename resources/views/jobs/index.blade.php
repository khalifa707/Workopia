@extends('layout')

@section('content')
<h1>Available Jobs</h1>
@if(!empty($jobs))
    <ul>
        @foreach($jobs as $job)
            <li>{{ $job }}</li>
        @endforeach
    </ul>
@else
    <p>No jobs available</p>
@endif
@endsection
