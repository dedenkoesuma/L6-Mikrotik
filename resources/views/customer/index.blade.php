@extends('layouts.app')
@section('page')
<div class="container "style="padding-top:85px;">
    <table class="table table=bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">NIK</th>
          <th scope="col">No Hp</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          @foreach($customers as $customer) 
          <tr>
              <td>{{$customer['id']}}</td>
              <td>{{$customer['name']}}</td>
              <td>{{$customer['nik']}}</td>
              <td>{{$customer['phone']}}</td>
              <td>
                <a class="btn btn-sm btn-info" href="{{ url('customer/detail')}}?parameter={{$customer['parameter']}}."&include=subscription>Detail</a>
              </td>
          </tr> 
          @endforeach
      </tbody>
    </table>
</div>
@endSection