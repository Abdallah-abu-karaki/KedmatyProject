@extends('layouts.adminSide')

@section('content')

    <h1 class="text-center mb-4 manage_items_heading">Items</h1>
    <div class="container">
        <p class="row">
            @if($items->count() == 0)
            <p class="alert-no-item-added">no items added</p>

            @else
            <table class="table table-dark text-center">
                <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">Name</th>
                    <th scope="col">delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr class="row_data_vendor_and_item">
                        <td style="width: 200px;"><img src="{{asset('images/vendorImage/addItemProductImage/'.$item->image)}}" width="150px"/></td>
                        <td>{{$item->name}}</td>
                        <td><a href="{{route('delete_item',$item->id)}}" class="show-item"><i class="fas fa-trash-alt"></i>delete item</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $items->links() !!}
                @endif
        </div>
    </div>
@endsection
