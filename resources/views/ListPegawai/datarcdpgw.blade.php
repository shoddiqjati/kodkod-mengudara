@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
          <div class="panel-body">



<br>
<br>




<br>
<br>



<table class="table table-striped">


	
<tr>
<th>Nama Surat</th>
<th>No Surat</th>
<th>Keterangan</th>
<th>Tanggal</th>

</tr>

@foreach($rcdpgw as $recor)
<tr>
	<td>{{$recor->nama_surat}}</td>
	<td>{{$recor->no_surat}}</td>
	<td>{{$recor->keterangan}}</td>
	<td>{{$recor->created_at}}</td>

</tr>

@endforeach
</table>



{!!$rcdpgw->render()!!}
					</div>
                  
                </div>
            </div>
        </div>
    </div>
</div>



@endsection