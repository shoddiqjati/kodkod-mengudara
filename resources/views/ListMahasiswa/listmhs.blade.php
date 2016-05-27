@extends('layouts.app')



@section('content')
<table>
	
<tr>
<th>Nama</th>
<th>Angkatan</th>
<th>NIU</th>
<th>Fakultas</th>	
</tr>

@foreach($listmhs as $mhs)
<tr>
<td>{{$mhs->nama}}</td>
<td>{{$mhs->angkatan}}</td>
<td>{{$mhs->niu}}</td>
<td>{{$mhs->fakultas}}</td>	

</tr>

@endforeach

</table>

{!!$listmhs->render()!!}
@endsection