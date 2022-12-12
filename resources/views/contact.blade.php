@extends('layouts.app')
@section('title','contact')
@section('content')
   <h1>contact page</h1>
    <h1>{{$username}}</h1>
    {{-- Return to <a href="/">Home page</a>
    @isset($age)
        {{$age}}
    @endisset
    @if($username=='mohamed')
    <p>Hello <strong>{{$username}}</strong></p>
    @elseif($username=='ahmed')
    <p>Hello <strong>{{$username}}</strong></p>
    @else
    <p>you are welcome</p>
    @endif
@endsection --}}
@auth
    {{$username}}
@endauth

@guest
     <p>Please login first</p>
@endguest
    
 
@section('footer')
<div style="background-color: brown">olkmkjmj</div>
@endsection
