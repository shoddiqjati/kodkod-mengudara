@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
          <div class="panel-body">

<form action="{{ url('admin/recordmahasiswacari/'. $mhs->id) }}" method="get">
<input type="hidden" name="_token" value="{{ csrf_token() }}" >
  <input class="form-control pull-left" type="text" name="mhs" id="mhs" placeholder="cari.." style="width: 200px; height:30px; margin-top: 2px;margin-right:10px"></input>
  <input class="btn btn-default pull-left" type="submit" value="Cari" ></input>

</form>

<br>
<br>


{{$mhs->nama}}

<br>
<br>



<table class="table table-striped">


	
<tr>
<th>Nama Surat</th>
<th>Keterangan</th>
<th>Tanggal</th>
</tr>

@foreach($record as $recor)
<tr>
	<td>{{$recor->nama_surat}}</td>
  <td>{{$recor->no_surat}}</td>
	<td>{{$recor->keterangan}}</td>

</tr>

@endforeach
</table>



{!!$record->appends(Request::only('mhs'))->render()!!}
					</div>
                  
                </div>
            </div>
        </div>
    </div>
</div>



@endsection