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
                        <form role="form" id="form_admin" method="post" action="templates/demo_merge.php" class="col-md-5 well">
                            <label class="control-label" for="lunch">Jenis Surat</label>
                            <div class="form-group">
                                <select required="required" id="surat" name="tpl" class="form-control selectpicker" data-live-search="true" title="Pilih Jenis Surat" >
                                    @foreach($namasurat as $nSurat)
                                        <option value="{{ $nSurat->filename }}">{{ $nSurat->nama_surat }}</option>
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
                            <div class="form-group" >
                                <label class="control-label" for="kepada">Surat Ini Ditujukan Kepada</label>
                                <input placeholder="Masukkan Penerima Surat" name="kepada" id="kepada" type="text" disabled="true" class="form-control"/>
                            </div>

                            {{--<div class="form-group" id="grpid">--}}
                                {{--<label class="control-label" for="grp_id">Jumlah Pegawai</label><br>--}}
                                {{--<select id="jml_id" name="jml_id" class="form-control selectpicker" title="Pilih Angka">--}}
                                    {{--<option value="1">1</option>--}}
                                    {{--<option value="2">2</option>--}}
                                    {{--<option value="3">3</option>--}}
                                    {{--<option value="4">4</option>--}}
                                    {{--<option value="5">5</option>--}}
                                    {{--<option value="6">6</option>--}}
                                    {{--<option value="7">7</option>--}}
                                    {{--<option value="8">8</option>--}}
                                    {{--<option value="9">9</option>--}}
                                    {{--<option value="10">10</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}

                        @role(3)
                            <div class="form-group">
                                <label class="control-label" for="NIM">Masukkan NIM</label>
                                <input name="niu1" placeholder="Masukkan NIM" id="NIM" type="text" class="form-control"/>

                                <div class="form-group" id="grptanggal1">
                                    <label class="control-label">Tanggal Izin</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay1" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth1" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear1" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>


                                    <label class="control-label">Lama Izin (dalam angka)</label>
                                    <input name="lamacuti1" id="lamacuti1" type="text" class="form-control"/>
                                </div>
                            </div>
                            @endrole
                            @role(2)
                            <div class="form-group">
                                <label class="control-label" for="NIM">Masukkan nip</label>
                                <input name="nip1" placeholder="Masukkan nip    " id="nip" type="text" class="form-control"/>

                                <div class="form-group" id="grptanggal1">
                                    <label class="control-label">Tanggal Mulai Cuti</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay1" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth1" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear1" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>


                                    <label class="control-label">Lama Cuti (dalam angka)</label>
                                    <input name="lamacuti1" id="lamacuti1" type="text" class="form-control"/>
                                </div>
                            </div>
                            @endrole
                            @role(1)
                            <div class="form-group">
                                <label class="control-label" for="NIM">Masukkan Identitas</label>
                                <input name="nip1" placeholder="Masukkan Indentitas" id="Identitas" type="text" class="form-control"/>

                                <div class="form-group" id="grptanggal1">
                                    <label class="control-label">Tanggal Mulai Cuti</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay1" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth1" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear1" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>


                                    <label class="control-label">Lama Cuti (dalam angka)</label>
                                    <input name="lamacuti1" id="lamacuti1" type="text" class="form-control"/>
                                </div>
                            </div>
                            @endrole

                            <div class="form-group" id="grpnip2">
                                <hr>
                                <label class="control-label" for="nip2">Masukkan nip</label>
                                <input name="nip2" placeholder="Masukkan nip" id="nip2" type="text" class="form-control" />

                                <div class="form-group" id="grptanggal2">
                                    <label class="control-label">Tanggal Mulai Cuti</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay2" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth2" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear2" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>



                                    <label class="control-label">Lama Cuti (dalam angka)</label>
                                    <input name="lamacuti2" id="lamacuti2" type="text" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group" id="grpnip3">
                                <hr>
                                <label class="control-label" for="nip3">Masukkan nip</label>
                                <input name="nip3" placeholder="Masukkan nip" id="nip3" type="text" class="form-control"/>

                                <div class="form-group" id="grptanggal3">
                                    <label class="control-label">Tanggal Mulai Cuti</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay3" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth3" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear3" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>



                                    <label class="control-label">Lama Cuti (dalam angka)</label>
                                    <input name="lamacuti3" id="lamacuti3" type="text" class="form-control"/>
                                </div>

                            </div>

                            <div class="form-group" id="grpnip4">
                                <hr>
                                <label class="control-label" for="nip4">Masukkan nip</label>
                                <input name="nip4" placeholder="Masukkan nip" id="nip3" type="text" class="form-control"/>

                                <div class="form-group" id="grptanggal4">
                                    <label class="control-label">Tanggal Mulai Cuti</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay4" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth4" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear4" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>

                                    <label class="control-label">Lama Cuti (dalam angka)</label>
                                    <input name="lamacuti4" id="lamacuti4" type="text" class="form-control"/>
                                </div>

                            </div>

                            <div class="form-group" id="grpnip5">
                                <hr>
                                <label class="control-label" for="nip5">Masukkan nip</label>
                                <input name="nip5" placeholder="Masukkan nip" id="nip5" type="text" class="form-control"/>
                                <div class="form-group" id="grptanggal5">
                                    <label class="control-label">Tanggal Mulai Cuti</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay5" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth5" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear5" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>

                                    <label class="control-label">Lama Cuti (dalam angka)</label>
                                    <input name="lamacuti5" id="lamacuti5" type="text" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group" id="grpnip6">
                                <hr>
                                <label class="control-label" for="nip6">Masukkan nip</label>
                                <input name="nip6" placeholder="Masukkan nip" id="nip6" type="text" class="form-control"/>
                                <div class="form-group" id="grptanggal6">
                                    <label class="control-label">Tanggal Mulai Cuti</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay6" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth6" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear6" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>

                                    <label class="control-label">Lama Cuti (dalam angka)</label>
                                    <input name="lamacuti6" id="lamacuti6" type="text" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group" id="grpnip7">
                                <hr>
                                <label class="control-label" for="nip7">Masukkan nip</label>
                                <input name="nip7" placeholder="Masukkan nip" id="nip7" type="text" class="form-control"/>
                                <div class="form-group" id="grptanggal7">
                                    <label class="control-label">Tanggal Mulai Cuti</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay7" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth7" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear7" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>

                                    <label class="control-label">Lama Cuti (dalam angka)</label>
                                    <input name="lamacuti7" id="lamacuti7" type="text" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group" id="grpnip8">
                                <hr>
                                <label class="control-label" for="nip8">Masukkan nip</label>
                                <input name="nip8" placeholder="Masukkan nip" id="nip8" type="text" class="form-control"/>
                                <div class="form-group" id="grptanggal8">
                                    <label class="control-label">Tanggal Mulai Cuti</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay8" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth8" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear8" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>

                                    <label class="control-label">Lama Cuti (dalam angka)</label>
                                    <input name="lamacuti8" id="lamacuti8" type="text" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group" id="grpnip9">
                                <hr>
                                <label class="control-label" for="nip9">Masukkan nip</label>
                                <input name="nip9" placeholder="Masukkan nip" id="nip9" type="text" class="form-control"/>
                                <div class="form-group" id="grptanggal9">
                                    <label class="control-label">Tanggal Mulai Cuti</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay9" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth9" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear9" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>

                                    <label class="control-label">Lama Cuti (dalam angka)</label>
                                    <input name="lamacuti9" id="lamacuti9" type="text" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group" id="grpnip10">
                                <hr>
                                <label class="control-label" for="nip10">Masukkan nip</label>
                                <input name="nip10" placeholder="Masukkan nip" id="nip10" type="text" class="form-control"/>
                                <div class="form-group" id="grptanggal10">
                                    <label class="control-label">Tanggal Mulai Cuti</label>
                                    <br>
                                    <div class="col-xs-4">
                                        <select name="DOBDay10" class="form-control">
                                            <option> - Hari - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBMonth10" class="form-control">
                                            <option> - Bulan - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-4">
                                        <select name="DOBYear10" class="form-control">
                                            <option> - Tahun - </option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>

                                    <label class="control-label">Lama Cuti (dalam angka)</label>
                                    <input name="lamacuti10" id="lamacuti10" type="text" class="form-control"/>
                                </div>
                            </div>



                            <input type="submit" name="btn_result" value="Cetak" class="btn btn-primary" style="float:right" />


                        </form>
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
                            <div class="col-xs-7">
                                <h4>Petunjuk Penggunaan</h4>
                                <ol>
                                    <li>Pilih jenis surat yang akan dibuat</li>
                                    <li>Masukkan penerima surat</li>
                                    <li>Masukkan Identitas pegawai yang akan dibuatkan surat</li>
                                    <li>Melengkapi Data yang dibutuhkan</li>
                                    <li>Klik Cetak</li>
                                </ol>
                                <p>Setelah Anda memilih cetak maka file akan otomatis terunduh melalui browser yang Anda gunakan saat ini.</p>
                            </div>
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
        $(document).ready(function() {
            $('.selectpicker').selectpicker({
                style: 'btn-info',
                size: 4
            });

        })
    </script>

    <!-- <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script> -->
    <script>
        $(function() {
            for(i=1; i<=10; i++){
                $( "#tanggalmulai"+i ).datepicker({dateFormat: 'dd/mm/yy'});
            }

        });
    </script>

    <script>
        for(i=2; i<=10; i++){
            $('#grpnip'+i).hide();
        }

        $('#grptanggal1').show();
        for(i=2; i<=10; i++){
            $('#grptanggal'+i).hide();
        }

        $('#grpid').hide();
        $('#surat').on('change', function() {
            if($(this).val() == "ijin_belajar.odt" || $(this).val() == "cuti_besar.odt" || $(this).val() == "pengajuan_taspen.odt" || $(this).val() == "permohonan_pensiun.odt" || $(this).val() == "cuti_haji.odt" || $(this).val() == "cuti_umroh.odt") {
                $('#grpid').show();
            }
            else{
                $('#grpid').hide();

                for(i=2; i<=10; i++){
                    $('#grpnip'+i).hide();
                }
            }

            if($(this).val() == "ijin_belajar.odt" || $(this).val() == "pengajuan_taspen.odt" || $(this).val() == "pensiun_janda.odt" || $(this).val() == "permohonan_pensiun.odt" || $(this).val() == "pemberian_kenaikan_gaji.odt" || $(this).val() == "plt(penunjukkan).odt" || $(this).val() == "rekomendasi.odt" || $(this).val() == "seleksi_masuk_perguruan_tinggi.odt" || $(this).val() == "SPMJ.odt" || $(this).val() == "SPMT.odt" || $(this).val() == "SPPD.odt" || $(this).val() == "keterangan_anak_yatim.odt" || $(this).val() == "keterangan_tidak_dihukum.odt" || $(this).val() == "laporan_kematian.odt" || $(this).val() == "pembatalan_permohonan_cuti.odt" || $(this).val() == "surat_tugas.odt" ) {
                for(i=1; i<=10; i++){
                    $('#grptanggal'+i).hide();
                }
            }
            else{


                $('#jml_id').on('change', function() {
                    if($(this).val() == "1" ) {
                        $('#grpnip').show();
                        $('#grptanggal1').show();

                        for(i=2; i<=10; i++){
                            //document.getElementById('nip'+i).value = "";
                            $('#grpnip'+i).hide();
                            $('#grptanggal'+i).hide();

                        }
                    }

                    else if($(this).val() == "2" ) {
                        for(i=1; i<=3; i++){
                            $('#grpnip'+i).show();
                            $('#grptanggal'+i).show();
                        }
                        for(i=3; i<=10; i++){
                            $('#grpnip'+i).hide();
                            $('#grptanggal'+i).hide();
                        }

                    }

                    else if($(this).val() == "3" ) {
                        for(i=1; i<=3; i++){
                            $('#grpnip'+i).show();
                            $('#grptanggal'+i).show();

                        }
                        for(i=4; i<=10; i++){
                            $('#grpnip'+i).hide();
                            $('#grptanggal'+i).hide();
                        }

                    }
                    else if($(this).val() == "4" ) {
                        for(i=1; i<=4; i++){
                            $('#grpnip'+i).show();
                            $('#grptanggal'+i).show();

                        }
                        for(i=5; i<=10; i++){
                            $('#grpnip'+i).hide();
                            $('#grptanggal'+i).hide();
                        }
                    }
                    else if($(this).val() == "5" ) {
                        for(i=1; i<=5; i++){
                            $('#grpnip'+i).show();
                            $('#grptanggal'+i).show();

                        }
                        for(i=6; i<=10; i++){
                            $('#grpnip'+i).hide();
                            $('#grptanggal'+i).hide();
                        }
                    }
                    else if($(this).val() == "6" ) {
                        for(i=1; i<=6; i++){
                            $('#grpnip'+i).show();
                            $('#grptanggal'+i).show();
                        }
                        for(i=7; i<=10; i++){
                            $('#grpnip'+i).hide();
                            $('#grptanggal'+i).hide();
                        }
                    }
                    else if($(this).val() == "7" ) {
                        for(i=1; i<=7; i++){
                            $('#grpnip'+i).show();
                            $('#grptanggal'+i).show();
                        }
                        for(i=8; i<=10; i++){
                            $('#grpnip'+i).hide();
                            $('#grptanggal'+i).hide();
                        }
                    }
                    else if($(this).val() == "8" ) {
                        for(i=1; i<=8; i++){
                            $('#grpnip'+i).show();
                            $('#grptanggal'+i).show();
                        }
                        for(i=9; i<=10; i++){
                            $('#grpnip'+i).hide();
                            $('#grptanggal'+i).hide();
                        }

                    }
                    else if($(this).val() == "9" ) {
                        for(i=1; i<=9; i++){
                            $('#grpnip'+i).show();
                            $('#grptanggal'+i).show();
                        }
                        $('#grpnip10').hide();
                        $('#grptanggal10').hide();
                    }
                    else if($(this).val() == "10" ) {
                        for(i=1; i<=10; i++){
                            $('#grpnip'+i).show();
                            $('#grptanggal'+i).show();
                        }
                    }
                });

            }


        });
    </script>
@show