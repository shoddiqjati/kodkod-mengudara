@extends('layouts.app')

@section('head.style')
<link href="{{ URL::asset('css/bootstrap-select.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/jquery-ui-1.10.0.custom.css') }}" rel="stylesheet">
@show
   
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
                  <br>
                  <form action="{{ url('admin/cms/search') }}" method="get" enctype="multipart/form-data">
                    <div class="col-xs-3 pull-left">
                      <input class="form-control"  type="text" name="search" id="search" placeholder="cari.." >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
                    </div>
                    <button type="submit" class="btn btn-default pull-left" value="Cari"><span class="fa fa-search"></span></button>
                  </form>
                  <div class="col-xs-12" ><a data-placement="bottom" href="#" title="Tambah" class="btn btn-default btn-fill" style="float:right; margin-top:-5px" data-toggle="modal" data-target="#modalimport">Tambah Template</a>
                    <div class="modal fade" id="modalimport" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">  
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title"><b>Unggah Template Baru</b></h4>
                          </div>
                          <div class="modal-body">
                            <div class="col-xs-12">
                              <form action="{{ url('admin/cms/tambah') }}" method="post" enctype="multipart/form-data">
                                <div>
                                  <input type="file" class="btn btn-default btn-sm btn-file" name="fileToUpload" id="fileToUpload" required="required">
                                </div><br>
                                <div>
                                Nama Surat
                                <input type="text" name="nama_surat">
                                </div>
                                <div style="float:right;">
                                  <input type="submit" class="btn btn-success" value="Upload" name="submit">
                                  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                  <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                </div>
                            </form>
                            </div>
                          </div>
                          <div class="modal-footer">
                          </div>
                      </div>
                    </div>
                  </div>
                  <div>
                  @if ($result->count())
                    <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>Id</th>
                              <th>Nama Surat</th>
                              <th>File Name</th>
                              <th>Waktu Unggah</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>

                      <tbody>
                        <?php $i=0; ?>
                        @foreach ($result as $surati)
                        <?php $i++; ?>
                        <tr>
                          <td>{{ $surati->id }}</td>
                          <td>{{ $surati->nama_surat }}</td>
                          <td>{{ $surati->filename }}</td>
                          <td>{{ $surati->updated_at }}</td>

                          <td><a class="btn btn-warning" data-placement="bottom" title="Update Template" data-toggle="modal" href="#" data-target="#modalupdate"><span class="glyphicon glyphicon-pencil"></a><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete"><span class="glyphicon glyphicon-trash"></a></td>

                            <div class="modal fade" id="modalupdate" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">  
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Unggah Template Baru</b></h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="col-xs-12">
                                      <form action="{{ url('admin/cms/update', $surati->id) }}" method="post" enctype="multipart/form-data">
                                        <div>
                                          <input type="file" class="btn btn-default btn-sm btn-file" name="fileToUpload" id="fileToUpload" required="required">
                                        </div><br>
                                        <div>
                                        Nama Surat
                                        <input type="text" name="nama_surat">
                                        </div>
                                        <div style="float:right;">
                                          <input type="submit" class="btn btn-success" value="Upload" name="submit">
                                          <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                        </div>
                                    </form>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div>

                          <div class="modal fade" id="modaldelete" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-sm" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Perhatian</b></h4>
                                </div>
                                
                                <div class="modal-body">
                                  <input type="hidden" value="<?php echo $surati->id;?>" name="id">
                                  <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                  <div class="divider"></div>
                                  <a class="btn btn-danger btn-simple" title="Hapus" href="{{ action('templateController@delete', $surati->id) }}">Hapus</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  <center>
                    {!!$result->appends(Request::only('search'))->render()!!}
                  </center>
                  @else
                    Belum ada template surat
                  @endif
                
              </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('body.script')
<script src="js/bootstrap-select.js"></script>
<script>
$(document).ready(function() {
    $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
    });
    
})
</script>
@show