@extends('layouts.app')

@section('head.style')
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- <link href="{{ URL::asset('css/jquery-ui-1.10.0.custom.css') }}" rel="stylesheet"> -->
@show

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="{{ url('/home') }}">Surat</a>
                            </li>
                            @role(2)
                            <li>
                                <a href="{{ url('/recordpgw') }}">Data</a>
                            </li>
                            @endrole

                            @role(3)
                            <li>
                                <a href="{{ url('/record') }}">Data</a>
                            </li>
                            @endrole


                            @role(1)
                            <li>
                                <a href="{{ url('admin/cms') }}">Tambah Template</a>
                            </li>
                            @endrole
                        </ul>
                        <br>

                        @role(1)
                        <form role="form" id="form_admin" method="post" action="template/merge_mhs.php" class="col-md-5 well" style="float: left">
                             <h3>Surat Mahasiswa</h3>
                        <hr>
                            <label class="control-label" for="lunch">Jenis Surat</label>
                            <div class="form-group">
                                <select required="required" id="surat" name="tpl" class="form-control selectpicker" data-live-search="true" title="Pilih Jenis Surat" >
                                    @foreach($namasurat as $nSurat)
                                    @if($nSurat->kategori == "mahasiswa")
                                        <option value="{{ $nSurat->filename }}">{{ $nSurat->nama_surat }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        @endrole
                        @role(2)
                        <form role="form" id="form_pgw" method="post" action="template/merge_pgw.php" class="col-md-5 well">
                            <label class="control-label" for="lunch">Jenis Surat</label>
                            <div class="form-group">
                                <select required="required" id="surat" name="tpl" class="form-control selectpicker" data-live-search="true" title="Pilih Jenis Surat" >
                                    @foreach($namasurat as $nSurat)
                                        @if($nSurat->kategori == "pegawai")
                                            <option value="{{ $nSurat->filename }}">{{ $nSurat->nama_surat }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        @endrole
                        @role(3)
                        <form role="form" id="form_mhs" method="post" action="template/merge_mhs.php" class="col-md-5 well">
                            <label class="control-label" for="lunch">Jenis Surat</label>
                            <div class="form-group">
                                <select required="required" id="surat" name="tpl" class="form-control selectpicker" data-live-search="true" title="Pilih Jenis Surat" >
                                    @foreach($namasurat as $nSurat)
                                        @if($nSurat->kategori == "mahasiswa")
                                            <option value="{{ $nSurat->filename }}">{{ $nSurat->nama_surat }}</option>
                                        @endif
                                        @endforeach
                                </select>
                            </div>
                        @endrole


                        @role(3)
                       
                            <div class="form-group">
                                <label class="control-label" for="keterangan">Keterangan</label>
                                <input name="keterangan" placeholder="Keterangan" id="keterangan" type="text" class="form-control"/>
                                <label class="control-label" for="NIM">Masukkan nip</label>
                                <input name="niu1" placeholder="Masukkan niu" id="nip" type="text" class="form-control"/>

                             
                            
                                 <input type="submit" name="btn_result" value="Cetak" class="btn btn-primary" style="float:right" />
                            </div>




                           </form>

                           @endrole



                       




                             @role(2)
                       
                            <div class="form-group">
                                <label class="control-label" for="keterangan">Keterangan</label>
                                <input name="keterangan" placeholder="Keterangan" id="keterangan" type="text" class="form-control"/>
                                <label class="control-label" for="NIM">Masukkan nip</label>
                                <input name="nip1" placeholder="Masukkan niu" id="nip" type="text" class="form-control"/>

                             
                            
                                 <input type="submit" name="btn_result" value="Cetak" class="btn btn-primary" style="float:right" />
                            </div>




                           </form>

                           @endrole


                                @role(1)
                       
                            <div class="form-group">
                                <label class="control-label" for="NIM">Masukkan niu</label>
                                <input name="niu1" placeholder="Masukkan niu" id="nip" type="text" class="form-control"/>

                             
                            
                                 <input type="submit" name="btn_result" value="Cetak" class="btn btn-primary" style="float:right" />
                            </div>




                           </form>

                           @endrole



                     @role(3)
                        <div class="col-xs-7">
                            <h4>Petunjuk Penggunaan</h4>
                            <ol>
                                <li>Pilih jenis surat yang akan dibuat</li>
                                {{--<li>Masukkan penerima surat</li>--}}
                                <li>Masukkan NIM</li>
                                <li>Klik Cetak</li>
                            </ol>
                            <p>Setelah Anda memilih cetak maka file akan otomatis terunduh melalui browser yang Anda gunakan saat ini.</p>
                        </div>


                        @endrole
                        @role(2)
                            <div class="col-xs-7">
                                <h4>Petunjuk Penggunaan</h4>
                                <ol>
                                    <li>Pilih jenis surat yang akan dibuat</li>
                                    <li>Masukkan penerima surat</li>
                                    <li>Masukkan nip pegawai yang akan dibuatkan surat</li>
                                    <li>Klik Cetak</li>
                                </ol>
                                <p>Setelah Anda memilih cetak maka file akan otomatis terunduh melalui browser yang Anda gunakan saat ini.</p>
                            </div>
                        @endrole
                            

            @role(1)
                        <form role="form" id="form_admin" method="post" action="template/merge_pgw.php" class="col-md-5 well" style="float: right;">
                        <h3>Surat Pegawai</h3>
                        <hr>
                            <label class="control-label" for="lunch">Jenis Surat</label>
                            <div class="form-group">
                                <select required="required" id="surat" name="tpl" class="form-control selectpicker" data-live-search="true" title="Pilih Jenis Surat" >
                                    @foreach($namasurat as $nSurat)
                                    @if($nSurat->kategori == "pegawai")
                                        <option value="{{ $nSurat->filename }}">{{ $nSurat->nama_surat }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>


                                    <div class="form-group">
                                <label class="control-label" for="NIM">Masukkan nip</label>
                                <input name="nip1" placeholder="Masukkan niu" id="nip" type="text" class="form-control"/>

                             
                            
                                 <input type="submit" name="btn_result" value="Cetak" class="btn btn-primary" style="float:right" />
                            </div>




                           </form>

                        @endrole




                    </div>





                </div>



            </div>





        </div>
    </div>
@endsection

@section('body.script')
    <script src="js/bootstrap-select.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('.selectpicker').selectpicker({
        //         style: 'btn-info',
        //         size: 4
        //     });

        // })
    </script>

    <!-- <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script> -->
    <script>
        // $(function() {
        //     for(i=1; i<=10; i++){
        //         $( "#tanggalmulai"+i ).datepicker({dateFormat: 'dd/mm/yy'});
        //     }

        // });
    </script>

    <script>
        // for(i=2; i<=10; i++){
        //     $('#grpnip'+i).hide();
        // }

        // $('#grptanggal1').show();
        // for(i=2; i<=10; i++){
        //     $('#grptanggal'+i).hide();
        // }

        // $('#grpid').hide();
        // $('#surat').on('change', function() {
        //     if($(this).val() == "ijin_belajar.odt" || $(this).val() == "cuti_besar.odt" || $(this).val() == "pengajuan_taspen.odt" || $(this).val() == "permohonan_pensiun.odt" || $(this).val() == "cuti_haji.odt" || $(this).val() == "cuti_umroh.odt") {
        //         $('#grpid').show();
        //     }
        //     else{
        //         $('#grpid').hide();

        //         for(i=2; i<=10; i++){
        //             $('#grpnip'+i).hide();
        //         }
        //     }

        //     if($(this).val() == "ijin_belajar.odt" || $(this).val() == "pengajuan_taspen.odt" || $(this).val() == "pensiun_janda.odt" || $(this).val() == "permohonan_pensiun.odt" || $(this).val() == "pemberian_kenaikan_gaji.odt" || $(this).val() == "plt(penunjukkan).odt" || $(this).val() == "rekomendasi.odt" || $(this).val() == "seleksi_masuk_perguruan_tinggi.odt" || $(this).val() == "SPMJ.odt" || $(this).val() == "SPMT.odt" || $(this).val() == "SPPD.odt" || $(this).val() == "keterangan_anak_yatim.odt" || $(this).val() == "keterangan_tidak_dihukum.odt" || $(this).val() == "laporan_kematian.odt" || $(this).val() == "pembatalan_permohonan_cuti.odt" || $(this).val() == "surat_tugas.odt" ) {
        //         for(i=1; i<=10; i++){
        //             $('#grptanggal'+i).hide();
        //         }
        //     }
        //     else{


        //         $('#jml_id').on('change', function() {
        //             if($(this).val() == "1" ) {
        //                 $('#grpnip').show();
        //                 $('#grptanggal1').show();

        //                 for(i=2; i<=10; i++){
        //                     //document.getElementById('nip'+i).value = "";
        //                     $('#grpnip'+i).hide();
        //                     $('#grptanggal'+i).hide();

        //                 }
        //             }

        //             else if($(this).val() == "2" ) {
        //                 for(i=1; i<=3; i++){
        //                     $('#grpnip'+i).show();
        //                     $('#grptanggal'+i).show();
        //                 }
        //                 for(i=3; i<=10; i++){
        //                     $('#grpnip'+i).hide();
        //                     $('#grptanggal'+i).hide();
        //                 }

        //             }

        //             else if($(this).val() == "3" ) {
        //                 for(i=1; i<=3; i++){
        //                     $('#grpnip'+i).show();
        //                     $('#grptanggal'+i).show();

        //                 }
        //                 for(i=4; i<=10; i++){
        //                     $('#grpnip'+i).hide();
        //                     $('#grptanggal'+i).hide();
        //                 }

        //             }
        //             else if($(this).val() == "4" ) {
        //                 for(i=1; i<=4; i++){
        //                     $('#grpnip'+i).show();
        //                     $('#grptanggal'+i).show();

        //                 }
        //                 for(i=5; i<=10; i++){
        //                     $('#grpnip'+i).hide();
        //                     $('#grptanggal'+i).hide();
        //                 }
        //             }
        //             else if($(this).val() == "5" ) {
        //                 for(i=1; i<=5; i++){
        //                     $('#grpnip'+i).show();
        //                     $('#grptanggal'+i).show();

        //                 }
        //                 for(i=6; i<=10; i++){
        //                     $('#grpnip'+i).hide();
        //                     $('#grptanggal'+i).hide();
        //                 }
        //             }
        //             else if($(this).val() == "6" ) {
        //                 for(i=1; i<=6; i++){
        //                     $('#grpnip'+i).show();
        //                     $('#grptanggal'+i).show();
        //                 }
        //                 for(i=7; i<=10; i++){
        //                     $('#grpnip'+i).hide();
        //                     $('#grptanggal'+i).hide();
        //                 }
        //             }
        //             else if($(this).val() == "7" ) {
        //                 for(i=1; i<=7; i++){
        //                     $('#grpnip'+i).show();
        //                     $('#grptanggal'+i).show();
        //                 }
        //                 for(i=8; i<=10; i++){
        //                     $('#grpnip'+i).hide();
        //                     $('#grptanggal'+i).hide();
        //                 }
        //             }
        //             else if($(this).val() == "8" ) {
        //                 for(i=1; i<=8; i++){
        //                     $('#grpnip'+i).show();
        //                     $('#grptanggal'+i).show();
        //                 }
        //                 for(i=9; i<=10; i++){
        //                     $('#grpnip'+i).hide();
        //                     $('#grptanggal'+i).hide();
        //                 }

        //             }
        //             else if($(this).val() == "9" ) {
        //                 for(i=1; i<=9; i++){
        //                     $('#grpnip'+i).show();
        //                     $('#grptanggal'+i).show();
        //                 }
        //                 $('#grpnip10').hide();
        //                 $('#grptanggal10').hide();
        //             }
        //             else if($(this).val() == "10" ) {
        //                 for(i=1; i<=10; i++){
        //                     $('#grpnip'+i).show();
        //                     $('#grptanggal'+i).show();
        //                 }
        //             }
        //         });

        //     }


        // });
    </script>
@show