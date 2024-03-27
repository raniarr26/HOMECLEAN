@extends('layout.list')

@section('title','ini Adalah judul pada Meta')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product }}</td>
        </tr>
        @endforeach 
    </tbody>
</table>
@endsection
