<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
{{-- START HEADER --}}

@include ('header')
{{-- END HEADER --}}

{{-- START CONTENT --}}
<h1>APP MAIN PAGE</h1>

@extends ('content')
@section('con')
@endsection
{{-- END CONTENT--}}

{{-- START FOOTER --}}
@include ('footer')
{{-- END FOOTER --}}
</body>
</html>