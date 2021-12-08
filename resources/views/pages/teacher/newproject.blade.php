@extends('layouts.teacher')

@section('content')
  <div class="mdk-drawer-layout__content page">    
    <!-- page title      -->
    <div class="container-fluid page__heading-container">
      <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
        <h1 class="m-lg-0">Project Baru</h1>
      </div>
    </div>   
    <!-- content              -->
    <div class="container-fluid page__container">
      
      <div class="row">
        <div class="col-md-12">
          <div class="card card-form">
            <div class="row no-gutters">
              <div class="col-lg-4 card-body">
                  <p><strong class="headings-color">Buat Project Baru</strong></p>
                  <p class="text-muted mb-0">Please fill required field to create a new Project.</p>
              </div>
              <div class="col-lg-8 card-form__body card-body">
                <div class="form-group">
                  <label>Pilih Kelas:</label>
                  <select name="province" class="form-control selectoption" data-placeholder="Pilih Kelas">
                    <option value=""></option>
                    <option value="0">IPS XII A</option>
                    <option value="1">IPS XII B</option>
                    <option value="2">IPA XII A</option>
                    <option value="3">IPA XII B</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="desc2">Upload Project</label>
                  <input type="file" class="form-control">
                </div>
                <div class="form-group">
                  <label for="desc2">Batas Waktu Pengerjaan</label>
                  <input name="rangetime" type="text" class="form-control" placeholder="Waktu Live">
                </div>
                <div class="form-group">
                  <label for="desc2">Description</label>
                  <textarea id="desc2" rows="4" class="form-control" placeholder="Description ..."></textarea>
                </div>
              </div>
            </div>
          </div>        
          <div class="text-right mb-5">
            <a href="" class="btn btn-success">Simpan</a>
          </div>
        </div>
      </div>
      
    </div>    
  </div>
@stop