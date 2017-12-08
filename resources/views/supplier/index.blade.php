@extends('admin.layout')
@section('title')Supplier @endsection
@section('main')

<section class="content-header">
  <h1>
    Data Master
    <small>Lihat Supplier</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{Route('supplier.index')}}">Data master</a></li>
    <li class="active">Lihat Supplier</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <a onclick="addForm()" class="btn btn-success"><i class="fa fa-plus-circle"></i>Tambah</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">No Telp.</th>
                <th align="center">Alamat</th>
                <th align="center">Kota</th>
                <th align="center">#</th>
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


@endsection
@section('script')
<script type="text/javascript">
var table, save_method;
$(function(){
  table = $('.table').DataTable({
    "processing" : true,
    "ajax" : {
      "url" : "{{ route('supplier.data') }}",
      "type" : "GET"
    }

  $('#modal-form form').validator().on('submit', function(e){
      if(!e.isDefaultPrevented()){
         var id = $('#id').val();
         if(save_method == "add") url = "{{ route('supplier.store') }}";
         else url = "supplier/"+id;
         
         $.ajax({
           url : url,
           type : "POST",
           data : $('#modal-form form').serialize(),
           success : function(data){
             $('#modal-form').modal('hide');
             table.ajax.reload();
           },
           error : function(){
             alert("Tidak dapat menyimpan data!");
           }   
         });
         return false;
     }  
  });
}); 
</script>
@endsection