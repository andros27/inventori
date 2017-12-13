@extends('admin.layout')
@section('title')Kota @endsection  
@section('main')

<section class="content-header">
  <h1>
    Data Master
    <small>Tabel Kota</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{route('home')}}">Data Master</a></li>
    <li class="active">Kota</li>
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
            <form method="post" id="form-kota">
              {{ csrf_field() }}
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th align="center"><input type="checkbox" value="1" id="select-all"></th>
                    <th align="center">No</th>
                    <th align="center">Nama Provinsi</th>
                    <th align="center">Nama Kota</th>
                    <th align="center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </form>
            </div>
          </div>
        </div>
      </div>

@include('kota.form')
</section>

@include('provinsi.formProvinsi')
@endsection

@section('script')
<script type="text/javascript">
var table, save_method;
$(function(){
  //menampilkan data
  table = $('.table').DataTable({
    "processing" : true,
    "serverside" : true,
    "ajax" : {
      "url" : "{{route('kota.data')}}",
      "type" : "GET"
    },
    'columnDefs' : [{
      'targets' : 0,
      'searchable' : false,
      'orderable' :false
    }],
    'order' : [1, 'asc']
  });

  //centang semua checkbox ketika dicentang dengan id #select-all
  $('#select-all').click(function(){
    $('input[type="checkbox"]').prop('checked',this.checked);
  });

  //menyimpan data dari form tambah/edit
  $('#modal-form form').validator().on('submit', function(e){
    if(!e.isDefaultPrevented()){
      var id = $('#id').val();
      if(save_method == "add") url = "{{ route('kota.store') }}";
      else url = "kota/"+id;
         
      $.ajax({
        url : url,
        type : "POST",
        data : $('#modal-form form').serialize(),
        dataType: 'JSON',
        success : function(data){
          if(data.msg=="error"){
            alert('Nama Kota sudah digunakan!');
            $('#nama_kota').focus().select();
          }else{
            $('#modal-form').modal('hide');
            table.ajax.reload();
          }            
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
  $('input[name = method]').val('POST');
  $('#modal-form').modal('show');
  $('#modal-form form')[0].reset();
  $('.modal-title').text('Tambah Kota');
}

function editForm(id){
   save_method = "edit";
   $('input[name=_method]').val('PATCH');
   $('#modal-form form')[0].reset();
   $.ajax({
     url : "kota/"+id+"/edit",
     type : "GET",
     dataType : "JSON",
     success : function(data){
       $('#modal-form').modal('show');
       $('.modal-title').text('Edit Kota');
       
       $('#id').val(data.id_kota);
       $('#nama_kota').val(data.nama_kota);
       $('#provinsi').val(data.provinsi_id);
     },
     error : function(){
       alert("Tidak dapat menampilkan data!");
     }
   });
}
  
function deleteData(id){
  if(confirm("Apakah yakin data akan dihapus?")){
    $.ajax({
      url : "kota/"+id,
      type : "POST",
      data : {'_method' : 'DELETE', '_token' : $('meta[name=csrf-token]').attr('content')},
      success : function(data){
        table.ajax.reload();
      },
      error : function(){
        alert("Tidak dapat menghapus data!");
      }
    });
  }
}

function deleteAll(){
  if($('input:checked').length < 1){
    alert('Pilih data yang akan dihapus!');
  }else if(confirm("Apakah yakin akan menghapus semua data terpilih?")){
     $.ajax({
       url : "kota/hapus",
       type : "POST",
       data : $('#form-kota').serialize(),
       success : function(data){
         table.ajax.reload();
       },
       error : function(){
         alert("Tidak dapat menghapus data!");
       }
     });
   }
}
</script>

@endsection
