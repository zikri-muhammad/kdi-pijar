@extends('layouts.dashboard')

@section('content')
  <div class="mdk-drawer-layout__content page">    
    <!-- page title      -->
    <div class="container-fluid page__heading-container">
      <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
        <h1 class="m-lg-0">Mata Pelajaran</h1>
      </div>
    </div>   
    <!-- content -->
    <div class="container-fluid page__container">
      <form action="#" class="">
        <div class="d-lg-flex">
          <div class="search-form mb-3 mr-3-lg search-form--light">
            <input type="text" class="form-control" placeholder="Search courses" id="searchSample02">
            <button class="btn" type="button"><i class="material-icons">search</i></button>
          </div>

          <div class="form-inline  mb-3 ml-auto">
            <div class="form-group mr-3">
              <label for="custom-select" class="form-label mr-1">Category</label>
              <select id="custom-select" class="form-control custom-select" style="width: 200px;">
                <option selected="">All categories</option>
                <option value="1">Vue.js</option>
                <option value="2">Node.js</option>
                <option value="3">GitHub</option>
              </select>
            </div>
            <div class="form-group">
              <label for="published01" class="form-label mr-1">Status</label>
              <select id="published01" class="form-control custom-select" style="width: 200px;">
                <option selected="">All</option>
                <option value="1">In Progress</option>
                <option value="3">New Releases</option>
              </select>
            </div>
          </div>
        </div>
      </form>
      <div class="row">
        @foreach($classes as $class)   
          <div class="col-md-4">
            <div class="card card__course mb-3">
            <img src="{{ asset('assets/images/video-bg.png') }}" class="mb-1" style="width: 100%;" alt="logo">
              <div class="p-3">
                <div class="d-flex align-items-center">
                  <strong class="h5 m-0">{{ $class['name'] }}<br> <span class="text-muted" style="font-size: 14px;">2 BAB</span></strong>
                  <a href="/student/course/{{ $class['slug'] }}" class="btn btn-primary ml-auto">Masuk Kelas</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      
    </div>    
  </div>
@stop