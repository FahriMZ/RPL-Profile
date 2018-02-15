@extends('layouts.app')

@section('title', 'Kirim Pesan')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('sweet-alert2/css/sweetalert2.min.css') }}">
<style>
input, textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button[type=submit] {
    width: 100%;
    background-color: indianred;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

form {
    /*background-color: #f2f2f2;*/
    /*padding-left: 111px;*/
}
</style>
@endsection

@section('content_guest')
<div class="right-column-content">
    <div class="right-column-content-heading">
      <h1>Kirim Pesan</h1>
    </div>
    <div class="right-column-content-content">
      <form action="{{ route('tamu') }}" method="POST">
      {{ csrf_field() }}
        <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>E-Mail</label>
            <input type="email" name="email">
        </div>
        <div>
            <label>Pesan</label>
            <textarea name="pesan"></textarea>
        </div>

        <button type="submit">Kirim</button>
      </form>
    </div>
</div>
@endsection