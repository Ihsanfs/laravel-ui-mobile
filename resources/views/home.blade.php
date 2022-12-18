
@extends('layouts.app') @section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<div class="container">
    <div class="card">

        <h1>selamat datang</h1>
        <div class="col " id="search-bar">
            <div class="input-group input-group border d-flex ">
                <input type="search" class="form-control h-100 m-0 align-items-left border-0"
                    id="search-item" placeholder="  search.." style="height:60px;width:auto;border-radius:auto">
                <i class="fa-sharp fa-solid fa-circle-xmark fa-2x"></i> <i
                        class="fa fa-search fa-2x" aria-hidden="true"></i>
            </div>
        </div>
        <br>
          @include('component.card')

    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    @include('component.template')

</div>



@endsection

<script src="js/app.js"></script>
