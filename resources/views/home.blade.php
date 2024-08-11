<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="p-5 m-5">
    @foreach ($ser as $serr)
    <div class="card p-5 m-5" >
        <div class="card-body container-xl">
          <h5 class="card-title container-xl m-5">{{$serr->title}}</h5>
          <img src="../{{$serr->img}}" class="card-img-center container-xl" alt="...">
          <p class="card-text container-xl m-5">{{$serr->description}}</p>

        </div>
      </div>

      @endforeach
</body>
</html>
