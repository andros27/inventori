@extends('admin.layout')
@section('title')Pegawai @endsection
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

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <a onclick="addForm()" class="btn btn-success"><i class="fa fa-plus-circle"></i>Tambah</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">No Telp.</th>
                <th align="center">E-mail</th>
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

@include('pegawai.form')

@endsection
@section('script')
<script type="text/javascript">
  var table, save_method;
  $(function(){

    table = $('.table').DataTable({
     "processing" : true,
     "ajax" : {
       "url" : "{{ route('user.data') }}",
       "type" : "GET"
     }
   }); 

    $('#modal-form form').validator().on('submit', function(e){
      if(!e.isDefaultPrevented()){
         var id = $('#id').val();
         if(save_method == "add") url = "{{ route('profile.store') }}";
         else url = "profile/"+id;
         
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

//menampilkan form tambah
  function addForm()
  {
    save_method = "add";
    $('input[name = method]').val('POST');
    $('#modal-form').modal('show');
    $('#modal-form form')[0].reset();
    $('.modal-title').text('Tambah Kategori');
  }  

  //menampilkan data di edit form  
function editForm(id)
{
  save_method = "edit";
  $('input[name=_method]').val('PATCH');
  $('#modal-form form')[0].reset();
  $.ajax({
    url : "profile/"+id+"/edit",
    type : "GET",
    dataType : "JSON",
    success : function(data){
      $('#modal-form').modal('show');
      $('.modal-title').text('Edit Pegawai');
       
      $('#id').val(data.id);
      $('#nama').val(data.name);
      $('#username').val(data.username);
      $('#email').val(data.email);
      $('#notelp').val(data.no_telp);
      $('#jabatan').val(data.jabatan);
    },
    error : function(){
      alert("Tidak dapat menampilkan data!");
    }
  });
}

</script>
@endsection