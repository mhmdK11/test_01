<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form class="p-5 m-5" action="/update/{{$ser->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT');
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">العنوان</label>
          <input type="text" class="form-control" placeholder="{{$ser->title}}" name="tit">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">الصورة</label>
            <input type="file" class="form-control" name="img">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">الوصف</label>
          <input type="text" class="form-control" placeholder="{{$ser->description}}" name="des">
        </div>
        <button type="submit" class="btn btn-primary">تعديل </button>
      </form>
</body>
