@extends('layouts.app')
@section('content')

<h1>{{$user->name}}</h1>
<h1>{{$user->email}}</h1>
<h1>{{$user->profile->location}}</h1>
<h1>{{$user->profile->description}}</h1>
<h1>{{$user->profile->number}}</h1>
<img src="{{asset('images/vendorImage/profileUserImage/'.$user->profile->image)}}" style="width:70px;height:70px"/>
<h2>{{$item->name}}</h2>
<h2>{{$item->description}}</h2>
<h2>{{$item->price}}</h2>
<img src="{{asset('images/vendorImage/addItemProductImage/'.$item->image)}}" style="width:70px;height:70px"/>

@endsection
