<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <table class="table" border="1">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">path</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
            <tr>
                <th scope="row">{{$image->id}}</th>
                <td><img src="{{asset('imgs/'.$image->path)}}" width="200px" height="200px"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>