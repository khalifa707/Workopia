<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Available Jobs</title>
</head>
<body>
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
</body>
</html>
