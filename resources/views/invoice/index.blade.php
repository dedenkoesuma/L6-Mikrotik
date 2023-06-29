@extends('layouts.app')
@section('page')
<div class="container "style="padding-top:85px;">
    <table class="table table=bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Status</th>
          <th scope="col">Periode</th>
          <th scope="col">Invoiced</th>
          <th scope="col">Expired</th>
          <th scope="col">Code</th>
          <th scope="col">Value</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          @foreach($invoices as $invoice)
          <tr>
              <td>{{$invoice['status']['client']}}</td>
              <td>{{$invoice['period']['period']}}</td>
              <td>{{$invoice['invoiced']['dFY']}}</td>
              <td>{{$invoice['expired']['dFY']}}</td>
              <td>{{$invoice['code']}}</td>
              <td>{{'Rp.'.number_format($invoice['value'])}}</td>
              <td>
                <a class="btn btn-sm btn-info" href="{{ url('invoice/detail') }}?parameter={{ $invoice['parameter']}}">Detail</a>
              </td>
          </tr> 
          @endforeach
      </tbody>
    </table>
</div>
@endSection