<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>
<body dir="rtl">
@include('nav')
<h1>صفحة الادخال</h1>
<form  enctype="multipart/form-data" class="p-3 m-3"dir="rtl"  action="/insert2" method="POST">
	@csrf
  <div class="mb-3">
    <label class="form-label">العنوان</label>
    <input type="TEXT" class="form-control" name="tti" >
   
 <div class="mb-3">
    <label  class="form-label">صوره</label>
    <input type="file" class="form-control" name="immi">
  </div> 

  <div class="mb-3">
    <label class="form-label">الوصف</label>
    <input type="TEXT" class="form-control" name ="abb">
  </div>

  <button type="submit" class="btn btn-primary">ارسال البيانات</button>
</form>


</body>
</html>