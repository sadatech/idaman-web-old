@extends('layouts.app')
@section('content')
<div class="portlet-body">
    <div class="row filter">
        <form class="" id="form_news_report" action="#" method="post">
          <div class="col-md-12">
            <div class="pull-left" style="padding-right:10px;">
                <input type="text" name="by_area" class="form-control" placeholder="By Area">
            </div>
            <div class="pull-left" style="padding-right:10px;">
                <select class="form-control" id="kejadian" name="kejadian">
                    <option value="">Select Kejadian</option>
                    <option value="kriminal">Kriminal</option>
                    <option value="pengaduan_masyarakat">Pengaduan Masyarakat</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="pull-left" style="padding-right:10px;">
                <select class="form-control" id="status" name="status">
                    <option value="">Select Status</option>
                    <option value="checked">checked</option>
                    <option value="handled">handled</option>
                    <option value="case closed">case closed</option>
                    <option value="hoax">hoax</option>
                    <option value="waiting">waiting</option>
                </select>
            </div>
            <div class="pull-left" style="padding-right:10px;">
                <input type="date" name="startdate" class="form-control" id="startDate" placeholder="Start Date">
            </div>
            <div class="pull-left" style="padding-right:10px;">
                <input type="date" name="enddate" class="form-control" id="endDate" placeholder="End Date">
            </div>
            <div class="pull-left" style="padding-right:10px;">
                <button type="submit" class="btn btn-primary"><i class="icon-magnifier"></i> Proses</button>
            </div>
          </div>
        </form>
        <br>
    </div>
</div>
<br>
<div class="portlet-body">
<table class="table" id="news_report" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th> description </th>
            <th> lat </th>
            <th> lon </th>
            <th> Category Report </th>
            <th> status </th>
            <th> created_at </th>
        </tr>
    </thead>
    <tbody>
                                                    
    </tbody>
</table>
</div>
</div>
@endsection
