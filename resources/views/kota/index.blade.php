@extends('admin.layout')
@section('main')

<section class="content-header">
  <h1>
    Data Master
    <small>Tabel Kategori</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{route('home')}}">Data Master</a></li>
    <li class="active">Provinsi dan Kota</li>
  </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a onclick="addForm()" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
              <a onclick="deleteAll()" class="btn btn-danger"><i class="fa fa-trash"></i> Haspus</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th align="center">#</th>
                    <th align="center">No</th>
                    <th align="center">Nama Provinsi</th>
                    <th align="center">Nama Kota</th>
                    <th align="center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</section>

@include('provinsi.formProvinsi')
@endsection

@section('script')
<script type="text/javascript">
var table, save_method;
$(function(){
  table = $('.table').DataTable({
    "processing" : true,
    "serverside" : true,
    "ajax" : "{{ route('kota.data') }}"
  });
});
</script>

@endsection
