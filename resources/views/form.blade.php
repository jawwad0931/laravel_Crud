<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Using Url --}}
    {{-- <a href="{{ url('reg/view') }}">Go to update</a> --}}
    {{-- using route method --}}
    {{-- <a href="{{ route('customer.view') }}">Go to view</a> --}}
    <h2>{{ $title }}</h2>
    <form  action="{{ $url }}" method="post">
        @csrf
        {{-- <pre>
        @php
            print_r($errors->all());
        @endphp
        </pre> --}}
        {{-- this value is used for update --}}
        {{-- <input type="text" name="name" value="{{ $customer->name }}"> --}}
        <input type="text" name="name" value="{{old('name')}}">
        <span style="color:red">
            @error('name')
                {{$message}}
            @enderror  
        </span>    
        {{-- <input type="number" name="grade" value="{{ $customer->grade }}"> --}}
        <input type="number" name="grade" value="{{old('grade')}}">
        <span style="color:red">
            @error('grade')
                {{$message}}
            @enderror
        </span>
        <input type="submit" name="" id="">
    </form>
</body>
</html>