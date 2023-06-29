@extends('layouts.app')
@section('page')
<div class="container "style="padding-top:85px;">
    @if(isset($details) && is_array($details)) 
      
      @foreach($details as $detail)
  <table class="table table=bordered table-hover">
    <tbody>
    <tr>
      <th>Kode</th>
      <td><?php echo $detail['code']; ?></td>
      </tr>
      <tr>
      <th>Number</th>
      <td><?php echo $detail['number']; ?></td>
      </tr>
      <tr>
      <th>Status</th>
      <td><?php echo $detail['status']['value']; ?></td>
      </tr>
      <tr>
      <th>Start</th>
      <td><?php echo $detail['start']['dFY']; ?></td>
      </tr> 
      <tr>
      <th>Install</th>
      <td><?php echo $detail['install']['dFY'];?></td>
      </tr> 
      <tr>
      <th>latitude</th>
      <td><?php echo $detail['latitude']; ?></td>
      </tr> 
      <tr>
      <tr>
      <th>longitude</th>
      <td><?php echo $detail['longitude']; ?></td>
      </tr> 
    </tbody>
    </table>
        @endforeach
      @endif
      <a class="btn btn-sm btn-info" href="{{ url('/customer') }}">Back</a>
</div>

    @endSection