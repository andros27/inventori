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
    <li class="active">Kategori</li>
  </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a onclick="addForm()" class="btn btn-success"><i class="fa fa-plus-circle"></i>Tambah</a>
              <a onclick="deleteAll()" class="btn btn-danger"><i class="fa fa-trash"></i> Haspus</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form method="post" id="form-kategori">
              {{ csrf_field() }}
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th align="center"><input type="checkbox" value="1" id="select-all"></th>
                    <th align="center">No</th>
                    <th align="center">Nama Kategori</th>
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
</section>

@include('kategori.form')
@endsection

@section('script')
<script type="text/javascript">
 var table, save_method;
$(function(){
   table = $('.table').DataTable({
     "processing" : true,
     "ajax" : {
       "url" : "{{ route('kategori.data') }}",
       "type" : "GET"
     }
   }); 

   //centang semua checkbox ketika dicentang dengan id #select-all
  $('#select-all').click(function(){
    $('input[type="checkbox"]').prop('checked',this.checked);
  });
   
   $('#modal-form form').validator().on('submit', function(e){
    if(!e.isDefaultPrevented()){
      var id = $('#id').val();
      if(save_method == "add") url = "{{ route('kategori.store') }}";
      else url = "kategori/"+id;
         
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
   $('.modal-title').text('Tambah Kategori');
}

function editForm(id){
   save_method = "edit";
   $('input[name=_method]').val('PATCH');
   $('#modal-form form')[0].reset();
   $.ajax({
     url : "kategori/"+id+"/edit",
     type : "GET",
     dataType : "JSON",
     success : function(data){
       $('#modal-form').modal('show');
       $('.modal-title').text('Edit Kategori');
       
       $('#id').val(data.id_kategori);
       $('#nama').val(data.nama_kategori);
       
     },
     error : function(){
       alert("Tidak dapat menampilkan data!");
     }
   });
}

function deleteData(id){
  if(confirm("Apakah yakin data akan dihapus?")){
    $.ajax({
      url : "kategori/"+id,
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

function deleteAll(){
  if($('input:checked').length < 1){
    alert('Pilih data yang akan dihapus!');
  }else if(confirm("Apakah yakin akan menghapus semua data terpilih?")){
     $.ajax({
       url : "kategori/hapus",
       type : "POST",
       data : $('#form-kategori').serialize(),
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
