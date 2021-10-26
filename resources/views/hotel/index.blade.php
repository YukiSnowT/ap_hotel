

@extends('layouts.hotelapp')

@section("title","Hotel.Index")
@section("menubar")
    @parent
    インデックスページ
@endsection


@section("content")
<table>
    <tr><th>Name</th><th>Address</th><th>tel</th></tr>
    @foreach($items as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->tel}}</td>          
      </tr>
    @endforeach
</table>
@endsection
