@extends('admin.layout')
@section('main')
<section class="content-header">
  <h1>
    Data Master
    <small>Lihat Pegawai</small>
  </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{Route('profile.index')}}">Data master</a></li>
        <li class="active">Lihat Pegawai</li>
      </ol>
    </section>

@endsection
@section('script')
<!--<script type="text/javascript">
  var table, save_method;
  $(function()
  {
    //menampilkan dataTable
    table = $('.table').DataTable(
    {
      "processing" : true,
      "serverside" : true,
      "ajax" : "{//!! route('kategori.data') !!}"
      
    });
  }
</script>-->
@endsection