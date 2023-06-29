@extends('layouts.app')
@section('page')
<div class="container "style="padding-top:85px;">
  <table class="table table=bordered table-hover">
    <tbody>
      <tr>
      <th>Status</th>
      <td>{{$detail['status']['client']}}</td>
      </tr>
      <tr>
      <th>Periode</th>
      <td>{{$detail['period']['period']}}</td>
      </tr>
      <tr>
      <th>Invoice</th>
      <td>{{$detail['invoiced']['dFY']}}</td>
      </tr>
      <tr>
      <th>Expired</th>
      <td>{{$detail['expired']['dFY']}}</td>
      </tr> 
      <tr>
      <th>Code</th>
      <td>{{$detail['code']}}</td>
      </tr> 
      <tr>
      <th>Value</th>
      <td>{{'Rp. '.number_format( $detail['value'])}}</td>
      </tr> 
      <td>
              <a class="btn btn-sm btn-info" href="{{ url('/invoice') }}">Back</a>
            </td>
    </tbody>
  </table>
</div>

@endSection