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
                <th align="center">Alamat Kantor</th>
                <th align="center">Provinsi</th>
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

@include('supplier.form')
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
  });
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

function addForm(){
   save_method = "add";
   $('input[name=_method]').val('POST');
   $('#modal-form').modal('show');
   $('#modal-form form')[0].reset();
   $('.modal-title').text('Tambah Supplier');
}

function editForm(id){
   save_method = "edit";
   $('input[name=_method]').val('PATCH');
   $('#modal-form form')[0].reset();
   $.ajax({
     url : "supplier/"+id+"/edit",
     type : "GET",
     dataType : "JSON",
     success : function(data){
       $('#modal-form').modal('show');
       $('.modal-title').text('Edit Supplier');

       $('#id').val(data.id_supplier);
       $('#nama').val(data.nama_supplier);
       $('#alamat').val(data.alamat_kantor);
       $('#noTelp').val(data.no_telp);
       $('#email').val(data.email);
       $('#provinsi').val(data.provinsi_id);
       $('#kota').val(data.kota_id);
     },
     error : function(){
       alert("Tidak dapat menampilkan data!");
     }
   });
}

/*function showForm(id){
   //save_method = "edit";
   $('input[name=_method]').val('PATCH');
   $('#modal-form form')[0].reset();
   $.ajax({
     url : "supplier/"+id+"/edit",
     type : "GET",
     dataType : "JSON",
     success : function(data){
       $('#modal-form').modal('show');
       $('.modal-title').text('Edit Supplier');

       $('#id').val(data.id_supplier);
       $('#nama').val(data.nama_supplier);
       $('#alamat').val(data.alamat_kantor);
       $('#noTelp').val(data.no_telp);
       $('#email').val(data.email);
       $('#provinsi').val(data.provinsi);
       $('#kota').val(data.kota);
     },
     error : function(){
       alert("Tidak dapat menampilkan data!");
     }
   });
}*/

function deleteData(id){
  if(confirm("Apakah yakin data akan dihapus?")){
    $.ajax({
      url : "supplier/"+id,
      type : "POST",
      data : {'_method' : 'DELETE', '_token' : $('meta[name=csrf-token]').attr('content')},
      success : function(data)
      {
        table.ajax.reload();
      },
      error : function()
      {
        alert("Tidak dapat menghapus data!");
      }
    });
  }
}

function hanyaAngka(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

  return false;
  return true;
}

//fungsi pada bagian kota saat memilih provinsi
$('#provinsi').on('change', function(){
  var provinsi_id = $(this).val();

  if(provinsi_id){
    $.ajax({
      url : 'supplier/get-kota-list/'+provinsi_id,
      type : "GET",
      dataType : "json",
      success : function (data){
        $('#kota').empty();
        $.each(data, function(key, value){
          $('#kota').append('<option value="'+key+'">'+value+'</option>');
        });
      }
    });
  }
  else
  {
    $('#kota').empty();
  }
});
</script>
@endsection
