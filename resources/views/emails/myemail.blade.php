<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>
<body>
    {{-- {{dd($alldata)}} --}}
    <h1>You Received a Contact Massage</h1>
    <b>This Message Was Received From:</b><span style="color:blue">{{$alldata['name']}}</span><br>
    <h2><b>The Massage Was:</b></h2>
    <p>
        {{$alldata['message']}}
    </p>
    <h3>{{$alldata['name']." "}} email is: <span style="color:blue">{{$alldata['email']}}</span> </h3>
    {{-- <p>{{$alldata}}</p> --}}
    {{-- @foreach ($alldata as $item)
      <h3>{{$item}}</h3>  
    @endforeach --}}
</body>
</html>