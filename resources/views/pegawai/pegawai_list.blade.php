@extends('admin.layout')
@section('main')
<header>
	<div class="page-header">
        <h2 class="no-margin-bottom">Data Master</h2>
    </div>
</header>
<ul class="breadcrumb">
    <div class="container-fluid">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
        <li class="breadcrumb-item active">Pegawai</li>
    </div>
</ul>

<selection class="table">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<div class="card">
				<div class="card-header d-flex align-items-center">
                    <h3 class="h4">Daftar Pegawai</h3>
                </div>
                <div class="card-body">
                	<table class="table">
                        <thead>
                        	<tr>
                        		<td></td>
                        		<td></td>
                            <td></td>
                        		<td align="right"><a href="{{url('register')}}"  class="btn btn-primary"><i class="fa fa-plus-square-o"></i> Tambah</a></td>
                        	</tr>
                          <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($pegawai as $lists)
                          <tr>
                            <th>{{++$no}}</th>
                            <td>{{$lists->name}}</td>
                            <td>{{$lists->jabatan}}</td>
                            <td>
                              <form action="{{ route('profile.destroy', $lists->id) }}" method="POST">
                                <a href="{{ route('profile.edit', $lists->id) }}" class="btn btn-outline-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                {{ csrf_field() }}
                    
                                <input name="_method" type="hidden" value="DELETE">  
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                              </form>
                              
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $pegawai->links() }}
                    </div>
                  </div>
                </div>
                </div>
			</div>
		</div>		
	</div>
</selection>

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