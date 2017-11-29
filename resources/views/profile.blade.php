@extends('admin.layout')

@section('title') {{$profile->username}} @endsection

@section('main')
<section class="content-header">
      <h1>
        Data Master
        <small>Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('profile.index')}}"></a>Pegawai</li>
        <li class="active">{{$profile->username}}</li>
      </ol>
    </section>
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{$profile->name}}'s Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" action="{{route('profile.update', Auth::user()->id)}}" method="POST">
              {{method_field('PATCH')}} {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" value="{{ $profile->name }}" name="name" placeholder="Name" class="form-control">
                    <span class="text-danger"><strong>{{ $errors->first('name') }}</strong></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Username</label>
                  <input type="text" value="{{ $profile->username }}" name="username" placeholder="Username" class="form-control">
                  <span class="text-danger"><strong>{{ $errors->first('username') }}</strong></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">E-mail</label>
                  <input type="text" value="{{ $profile->email }}" name="email" placeholder="E-mail" class="form-control">
                  <span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No. Telp</label>
                  <input type="text" value="{{ $profile->no_telp }}" name="no.telp" placeholder="no.Telp" class="form-control">
                  <span class="text-danger"><strong>{{ $errors->first('notelp') }}</strong></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile" name="avatar">
                  <p class="help-block">Masukan Gambar atau Foto disini</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
            </div>
        </div>
    </section>
@endsection