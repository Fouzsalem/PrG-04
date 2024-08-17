<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body dir="rtl">
@include('nav')
@foreach ($cli as $cl)
<div class="card p-3 m-3" style="width: 50rem;">
  <img src="{{$cl->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$cl->name}}</h5>
    
    <a href="#" class="btn btn-primary">{{$cl->about}}</a>

    <a href="/edit/{{$cl->id}}" class="btn btn-primary">تعديل</a>

  
<form method="post" action="/del/{{$cl->id}}">
@method('DELETE')
@csrf
<button>حذف</button>
    
    </form>
  </div>
</div>

@endforeach
</body>
</html>