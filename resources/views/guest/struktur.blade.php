@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@section('css')
<style type="text/css">
* {margin: 0; padding: 0;}

.tree {
  padding-left: 45px;
}

.tree ul {
    padding-top: 20px; position: relative;
  
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}

.tree li {
  float: left; text-align: center;
  list-style-type: none;
  position: relative;
  padding: 20px 5px 0 5px;
  
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.tree li::before, .tree li::after{
  content: '';
  position: absolute; top: 0; right: 50%;
  border-top: 1px solid #ccc;
  width: 50%; height: 20px;
}
.tree li::after{
  right: auto; left: 50%;
  border-left: 1px solid #ccc;
}

/*We need to remove left-right connectors from elements without 
any siblings*/
.tree li:only-child::after, .tree li:only-child::before {
  display: none;
}

/*Remove space from the top of single children*/
.tree li:only-child{ padding-top: 0;}

/*Remove left connector from first child and 
right connector from last child*/
.tree li:first-child::before, .tree li:last-child::after{
  border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.tree li:last-child::before{
  border-right: 1px solid #ccc;
  border-radius: 0 5px 0 0;
  -webkit-border-radius: 0 5px 0 0;
  -moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
  border-radius: 5px 0 0 0;
  -webkit-border-radius: 5px 0 0 0;
  -moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree ul ul::before{
  content: '';
  position: absolute; top: 0; left: 50%;
  border-left: 1px solid #ccc;
  width: 0; height: 20px;
}

.tree li a, .tree li p{
  border: 1px solid #ccc;
  padding: 5px 10px;
  text-decoration: none;
  color: #666;
  font-family: arial, verdana, tahoma;
  font-size: 11px;
  display: inline-block;
  
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li a:hover, .tree li a:hover+ul li a {
  background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.tree li a:hover+ul li::after, 
.tree li a:hover+ul li::before, 
.tree li a:hover+ul::before, 
.tree li a:hover+ul ul::before{
  border-color:  #94a0b4;
}
</style>
@endsection

@section('content_guest')
<div class="right-column-content">
  <!-- Coding dari sini -->
  <div class="right-column-content-heading">
      <h1>Struktur Organisasi</h1>
      <h2>Rekayasa Perangkat Lunak</h2>
  </div>

  <div class="column-content tree">
      <ul>
        <li>
          <p>
            <b>{{ $kepala_ti->jabatan_guru }}</b>
            <br>
            {{ $kepala_ti->nama_guru }}
          </p>
          <ul>
            <li>
              <p>
                <b>{{ $kepala_rpl->jabatan_guru }}</b>
                <br>
                {{ $kepala_rpl->nama_guru }}
              </p>
              <ul>
                @foreach($guru as $g)
                <li>
                  <p>
                    <b>{{ $g->jabatan_guru }}</b>
                    <br>
                    {{ $g->nama_guru }}
                  </p>
                </li>
                @endforeach
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      {{-- <h3>Yudi Subekti</h3>
      <h4>Kepala Laboratorium</h4>

      <br><p>Lahir: BANDUNG, 1976-02-19<br>
      NUPTK: 5551754656200012<br>
      Nip:</p>
      <p>
        Ditugaskan: 2014-07-14<br>
        Nomor: 421.5/555-smkn-11/VII/2014
      </p>

    </div>
  <div class="right-column-content-img-right right-column-content-img-right-margin-bottom-none"> <img src="images/image1.jpg" height="150" alt="banner" /> </div>
  <div class="clear right-cloumn-content-border"></div>
  <div class="right-column-content-content">
    <h3>Ani Nuraeni</h3>
    <h4>Ketua Program Keahlian</h4>

    <br><p>Lahir: BANDUNG, 1980-12-27<br>
    NUPTK: 8559758660300083<br>
    Nip:</p>
    <p>
      Ditugaskan: 2014-07-14<br>
      Nomor: 421.5/444-SMKN.11/VII/2014
    </p>
  </div>
  <div class="right-column-content-img-right right-column-content-img-right-margin-bottom-none"> <img src="images/image2.jpg" height="150" alt="banner" /> </div>
  <div class="clear right-cloumn-content-border"></div> --}}
</div>
@endsection 