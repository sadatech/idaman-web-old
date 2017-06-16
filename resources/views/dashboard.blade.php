@extends('layouts.app')
@section('content')
<div class="col-md-8">
    <div id="map" style="width:100%;height:1000px;"></div>
</div>
<div class="col-md-4" style="border:solid 1px #000;">
    <div class="panel panel-primary" style="heigth:10px;overflow-x:scroll;overflow-y:scroll;"> 
        <div class="panel-heading"> 
            <h3 class="panel-title">Daftar Kejadian</h3> 
        </div> 
        @foreach($kejadian as $kjd)
        <div class="panel-body"> 
            <div class="panel panel-default panel-profile m-b-0">
                <div class="panel-heading">
                    <h4>
                        <a href="" data-toggle="modal" data-id='{{ @$kjd->id }}' id='{{ @$kjd->id }}' data-target="#detail_kejadian" ><b>{{ @$kjd->description }}</b></a>
                        <input type="checkbox" id="id_kejadian" value="{{ @$kjd->id }}" onchange='check_kejadian({{ @$kjd->id }}, {{ @$kjd->lat }}, {{ @$kjd->lon }})'>
                        <h4>
                            <h6 style="color:#999;">
                                <b>{{ @$kjd->updated_at }} WIB</b>
                                <h6>
                                </div>
                                <div class="panel-body text-center">
                                    Jl. Keutamaan, RT.7/RW.1, Krukut, Tamansari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11140
                                </div>
                            </div>
                        </div> 
                        @endforeach
                        <div class="panel-body"> 
                            <a href="" class="btn btn-danger broadcast" data-toggle="modal" id="broadcast" data-target="#brodcast" style="width:100%;" >
                              BroadCast
                          </a>
                      </div> 
                      <div class="modal fade" id="brodcast" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Broadcast</h4>
                            </div>
                            <form action="{{ url('broadcast/addBroadcast') }}" method="post" enctype="multipart/form-data">
                              <div class="modal-body">
                                <div class="form-group">
                                    <label>Judul</label>
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id_kejadian" id="id_kejadians" class="form-control" placeholder="id">
                                    <input type="text" name="judul" class="form-control" placeholder="judul">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi">
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto" class="form-control" placeholder="foto">
                                </div>
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <select id="lat_id" name="latitude" class="form-control">

                                    </select>
                                    <!-- <input type="text" name="latitude" id="lat" class="form-control" placeholder="latitude"> -->
                                </div>
                                <div class="form-group">
                                    <label>Longitude</label>
                                    <select id="long_id" name="longitude" class="form-control">

                                    </select>
                                    <!-- <input type="text" name="longitude" id="long" class="form-control" placeholder="longitude"> -->
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" id="kejadian" name="kejadian">
                                        <option value="">Select Kejadian</option>
                                        <option value="kriminal">Kriminal</option>
                                        <option value="pengaduan_masyarakat">Pengaduan Masyarakat</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="checked">Checked</option>
                                        <option value="handled">Handled</option>
                                        <option value="case_closed">Case Closed</option>
                                        <option value="hoax">Hoax</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal fade" id="detail_kejadian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Detail Laporan</h4>
                </div>
                <div class="modal-body">
                    <div class="panel panel-primary" style="heigth:10px;overflow-x:scroll;overflow-y:scroll;"> 
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Detail Kejadian</h3> 
                        </div> 
                        <div class="panel panel-default panel-profile m-b-0">
                            <div class="panel-heading">
                                <h4>
                                    <b id="judul">Filipina Buru 7 WNI terkait Bentrokan di Marawi</b>
                                    <h4>
                                        <h6 style="color:#999;" id="jam_kejadian">
                                            <b>Rabu, 31/05/2017 14:22 WIB</b>
                                            <h6>
                                            </div>
                                            <div class="col-md-4"> 
                                                <a href="#" class="thumbnail"> 
                                                    <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="attachment/sarinah.jpg" data-holder-rendered="true">
                                                </a> 
                                            </div>
                                            <div class="col-md-4"> 
                                                <a href="#" class="thumbnail"> 
                                                    <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="attachment/sarinah3.jpg" data-holder-rendered="true"> 
                                                </a> 
                                            </div>
                                            <div class="col-md-4"> 
                                                <a href="#" class="thumbnail"> 
                                                    <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="attachment/sarinah2.jpg" data-holder-rendered="true"> 
                                                </a> 
                                            </div>
                                            <div class="col-md-12">
                                                <video width="600" height="500" controls>
                                                  <source src="attachment/arab_bahlul.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                  Your browser does not support the video tag.
                                                </video>
                                            </div>
                                            <div class="col-md-12"> 
                                                <div class="panel-body text-center" id="alamat">
                                                    Jl. Keutamaan, RT.7/RW.1, Krukut, Tamansari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11140
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @endsection
