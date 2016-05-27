@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
          <div class="panel-body">
                  
            <ul class="nav nav-tabs">
              <li>
                <a href="{{ url('/home') }}">Surat</a>
              </li>
              <li>
                <a href="{{ url('/getData') }}">Data</a>
              </li>
              <li class="active">
                  <a href="{{ url('admin/cms') }}">CMS</a>
              </li>
            </ul>

<form action="{{ url('admin/listmahasiswacari') }}" method="get">
<input type="hidden" name="_token" value="{{ csrf_token() }}" >
  <input class="form-control pull-left" type="text" name="mhs" id="mhs" placeholder="cari.." style="width: 200px; height:30px; margin-top: 2px;margin-right:10px"></input>
  <input class="btn btn-default pull-left" type="submit" value="Cari" ></input>

</form>


<table class="table table-striped">

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
<td><a class="btn btn-info" data-placement="bottom" title="Lihat Detil Mahasiswa" data-toggle="modal" data-id ="espede->id" data-target="#modalshow<?php echo $mhs->id;?>" href="#"><span class="fa fa-book"></span></a></td>

<td><a class="btn btn-succes" data-placement="bottom" title="Lihat Record Mahasiswa" href="{{url('admin/listmahasiswa/record/'. $mhs->id)}}"><span> Record </span></a></td>
</tr>

<div class="modal fade" id="modalshow<?php echo $mhs->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Detil Mahasiswa</b></h4>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $mhs->id;?>" name="id">
                                    <div class="panel panel-group">
                                        <div class="panel-body">
                                            <div class="row col-md-10 col-md-offset-1">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-6"><div class="pull-right">&nbsp;</div></label>
                                                        <div class="col-sm-6"></div>
                                                    </div>
                                                </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Nama
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $mhs->nama}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Angkatan
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $mhs->angkatan}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    NIU
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $mhs->niu}}</div>
                                                        </div>
                                                    </div>
                                                   
                                                   <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Fakultas
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $mhs->fakultas}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    NIF
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $mhs->nif}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Jurusan
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $mhs->jurusan}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Prodi
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $mhs->prodi}}</div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tempat Lahir
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $mhs->tempat_lahir}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tanggal Lahir
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $mhs->tanggal_lahir}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Alamat
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $mhs->alamat}}</div>
                                                        </div>
                                                    </div>
                                           

                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <a class="btn btn-info btn-simple pull-left" style="width:70px" title="Kembali" data-dismiss="modal">Kembali</a>
                                    
                                    </div>
                                </div>


@endforeach

</table>

{!!$listmhs->render()!!}
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection