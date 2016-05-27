@extends('layouts.app')

@section('content')


<table>
	
<tr>
<th>Nama</th>
<th>Angkatan</th>
<th>NIU</th>
<th>Fakultas</th>	
</tr>

@foreach($listpgw as $pgw)
<tr>
<td>{{$pgw->nip}}</td>
<td>{{$pgw->nama}}</td>
<td>{{$pgw->tanggal_lahir}}</td>
<td>{{$pgw->pangkat}}</td>
<td>{{$pgw->golongan}}</td>
<td>{{$pgw->unit_kerja}}</td>	
<td><a class="btn btn-info" data-placement="bottom" title="Lihat Detil Mahasiswa" data-toggle="modal" data-id ="espede->id" data-target="#modalshow<?php echo $pgw->id;?>" href="#"><span class="fa fa-book"></span></a></td>

<td><a class="btn btn-succes" data-placement="bottom" title="Lihat Record Mahasiswa" href="{{url('admin/listmahasiswa/record/'. $pgw->id)}}"><span> Record </span></a></td>
</tr>

<div class="modal fade" id="modalshow<?php echo $pgw->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Detil Pegawai</b></h4>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $pgw->id;?>" name="id">
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
                                                            <div class="col-sm-6">{{ $pgw->nama}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    NIP
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $pgw->nip}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    tempat_lahir
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $pgw->tempat_lahir}}</div>
                                                        </div>
                                                    </div>
                                                   
                                                   <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tanggal Lahir
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $pgw->tanggal_lahir}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Pangkat
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $pgw->pangkat}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Golongan
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $pgw->golongan}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Jabatan
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $pgw->jabatan}}</div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Unit Kerja
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $pgw->unit_kerja}}</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tanggal Lahir
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $pgw->tanggal_lahir}}</div>
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


@endsection