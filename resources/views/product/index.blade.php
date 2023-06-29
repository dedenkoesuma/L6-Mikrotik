@extends('layouts.app')
@section('page')
<div class="container " style="padding-top:85px;">
      <table class="table table=bordered table-hover">
        <thead>
        <tr>
          <th scope="col">Kode</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product['code']}}</td>
                <td>{{$product['name']}}</td>
                <td>{{'Rp. '.number_format($product['price'])}}</td>
                <td>
                <a class="btn btn-sm btn-info" href="{{ url('product/detail') }}?parameter= {{$product['parameter']}}">Detail</a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
@endSection