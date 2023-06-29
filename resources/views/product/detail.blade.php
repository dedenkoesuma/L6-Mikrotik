@extends('layouts.app') 
@section('page')

<div class="container "style="padding-top:85px;">
  <table class="table table=bordered table-hover">
    <tbody>
      <tr>
      <th>Status</th>
      <td>{{ $detail['status']['name']}}</td>
      </tr>
      <tr>
      <th>Kode</th>
      <td>{{ $detail['code']}}</td>
      </tr>
      <tr>
      <th>Nama</th>
      <td>{{ $detail['name']}}</td>
      </tr>
      <tr>
      <th>Harga</th>
      <td>{{ 'Rp. '.number_format( $detail['price'])}}</td>
      </tr> 
      <tr>
      <th>Speed</th>
      <td>{{ $detail['speed']}}</td>
      </tr> 
      <td>
              <a class="btn btn-sm btn-info" href="{{ url('/product') }}">Back</a>
            </td>
    </tbody>
  </table>
</div>
    @endSection