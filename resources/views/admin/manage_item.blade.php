@extends('layouts.adminSide')

@section('content')

    <h1 class="text-center mb-4 manage_items_heading">manage item</h1>
    <div class="container">
        <div class="row">

            <table class="table table-dark text-center">
                <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Show Items</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                <tr class="row_data_vendor_and_item">
                    <td style="width: 200px;"><img src="{{asset('images/vendorImage/profileUserImage/'.$item->profile->image)}}" width="150px"/></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td><a href="{{route('show_item_vendor',$item->id)}}" class="show-item"><i class="fas fa-eye"></i>show items</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
