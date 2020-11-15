<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Images</title>
</head>
<body>
    <p>Image URL: {{ $data['storage']->url($data['img']) }}</p>
    <img src="{{ $data['storage']->url($data['img']) }}" alt="">
    <h3>server ip {{$data['ip']}}</h3>
</body>
</html>