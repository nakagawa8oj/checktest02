@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'index.blade.php')

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>price</th>
    <th>content</th>
  </tr>
  @foreach ($products as $author)
  <tr>
    <td>{{$product->id}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->content}}</td>
  </tr>
  @endforeach
</table>
@endsection
