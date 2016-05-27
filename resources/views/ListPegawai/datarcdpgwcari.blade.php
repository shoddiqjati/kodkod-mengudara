@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
          <div class="panel-body">

<form action="{{ url('/daftarrecordmahasiswacari/') }}" method="get">
<input type="hidden" name="_token" value="{{ csrf_token() }}" >
  <input class="form-control pull-left" type="text" name="rcd" id="rcd" placeholder="cari.." style="width: 200px; height:30px; margin-top: 2px;margin-right:10px"></input>
  <input class="btn btn-default pull-left" type="submit" value="Cari" ></input>

</form>

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

@foreach($result as $recor)
<tr>
	<td>{{$recor->nama_surat}}</td>
	<td>{{$recor->no_surat}}</td>
	<td>{{$recor->keterangan}}</td>
	<td>{{$recor->created_at}}</td>

</tr>

@endforeach
</table>



{!!$result->appends(Request::only('rcd'))->render()!!}
					</div>
                  
                </div>
            </div>
        </div>
    </div>
</div>



@endsection