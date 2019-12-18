<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div id="app">
@foreach($city as $item)
        <div>
            latitude: {{$item['latitude']}}
        </div>
        <div>
            longitude: {{$item['longitude']}}
        </div>
        <div>
            time zone: {{$item['time_zone']}}
        </div>
@endforeach

        <div>
            <geo-location :urldata="{{json_encode($city)}}"></geo-location>
        </div>

        <example-component></example-component>

    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
