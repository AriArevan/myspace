@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Siswa</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nama Siswa : </strong> {{$post->title}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Alamat Siswa : </strong> {{$post->body}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('posts.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection