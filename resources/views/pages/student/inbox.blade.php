@extends('layouts.dashboard')

@section('content')
  <div class="mdk-drawer-layout__content page">    
    <!-- page title      -->
    <div class="container-fluid page__heading-container">
      <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
        <h1 class="m-lg-0">Inbox</h1>
      </div>
    </div>   
    <!-- content              -->
    <div class="container-fluid page__container">
    <div class="row">
      {{-- <div class="col-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
            <i class="fa fa-envelope mr-2"></i>
            Inbox
          </a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
            <i class="fa fa-users mr-2"></i>
            Group
          </a>
        </div>
      </div> --}}
      <div class="col-10">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-3">
                  <div class="px-4 py-3">
                    <div class="d-flex mb-1">
                      <div class="avatar avatar-sm mr-3">
                        <span class="avatar-title rounded-circle bg-info text-white">P</span>
                      </div>
                      <div class="flex">
                        <div class="d-flex align-items-center mb-1">
                          <strong class="text-15pt">M. Mossi Febrian</strong>
                          <small class="ml-2 text-muted">3 days ago</small>
                          <span class="badge badge-info ml-2">Tugas Terbaru</span>
                        </div>
                        <div>
                          <p>Anda Memilik 1 Tugas baru yang harus segera dikerjakan</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="px-4 py-3">
                    <div class="d-flex mb-1">
                      <div class="avatar avatar-sm mr-3">
                        <span class="avatar-title rounded-circle bg-info text-white">P</span>
                      </div>
                      <div class="flex">
                        <div class="d-flex align-items-center mb-1">
                          <strong class="text-15pt">M. Mossi Febrian</strong>
                          <small class="ml-2 text-muted">3 days ago</small>
                          <span class="badge badge-primary ml-2">PR Terbaru</span>
                        </div>
                        <div>
                          <p>Anda Memiliki <strong> 1 PR</strong> baru, dari mata pelajaran <strong>Bahasa Inggris</strong> dengan batas pengerjaan hingga tanggal <strong>12 Mei 2021</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="px-4 py-3">
                    <div class="d-flex mb-1">
                      <div class="avatar avatar-sm mr-3">
                        <span class="avatar-title rounded-circle bg-info text-white">P</span>
                      </div>
                      <div class="flex">
                        <div class="d-flex align-items-center mb-1">
                          <strong class="text-15pt">M. Mossi Febrian</strong>
                          <small class="ml-2 text-muted">3 days ago</small>
                          <span class="badge badge-warning ml-2">Project Terbaru</span>
                        </div>
                        <div>
                          <p>Anda Memiliki <strong> 1 Project</strong> baru</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="px-4 py-3">
                    <div class="d-flex mb-1">
                      <div class="avatar avatar-sm mr-3">
                        <span class="avatar-title rounded-circle bg-info text-white">P</span>
                      </div>
                      <div class="flex">
                        <div class="d-flex align-items-center mb-1">
                          <strong class="text-15pt">M. Mossi Febrian</strong>
                          <small class="ml-2 text-muted">3 days ago</small>
                          <span class="badge badge-info ml-2">Tugas Terbaru</span>
                        </div>
                        <div>
                          <p>Anda Memilik 1 Tugas baru yang harus segera dikerjakan</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="px-4 py-3">
                    <div class="d-flex mb-1">
                      <div class="avatar avatar-sm mr-3">
                        <span class="avatar-title rounded-circle bg-info text-white">P</span>
                      </div>
                      <div class="flex">
                        <div class="d-flex align-items-center mb-1">
                          <strong class="text-15pt">M. Mossi Febrian</strong>
                          <small class="ml-2 text-muted">3 days ago</small>
                          <span class="badge badge-primary ml-2">PR Terbaru</span>
                        </div>
                        <div>
                          <p>Anda Memiliki <strong> 1 PR</strong> baru, dari mata pelajaran <strong>Bahasa Inggris</strong> dengan batas pengerjaan hingga tanggal <strong>12 Mei 2021</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-block text-center">
                  <button type="button" class="btn btn-info px-5">Load More</button>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="card card-form">
              <div class="row no-gutters">
                <div class="col-lg-7 card-form__body">
                  <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values="[&quot;js-lists-values-employee-name&quot;]">
                    <table class="table mb-0 thead-border-top-0">
                      <thead>
                        <tr>
                          <th>Nama Group</th>
                          <th>Mata Pelajaran</th>
                          <th>Jumlah Peserta</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <tr>
                          <td>
                            <a href="#" class="text-dark">X IPA A</a>
                          </td>
                          <td>Matematika</td>
                          <td>22</td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-dark">X IPA B</a>
                          </td>
                          <td>Bahasa Inggris</td>
                          <td>22</td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-dark">XI IPS A</a>
                          </td>
                          <td>Bahasa Indonesia</td>
                          <td>22</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
                <div class="col-lg-5 card-body">
                  <p><strong class="headings-color">Recent Chat</strong></p>
                  <div data-perfect-scrollbar style="position: relative; height:400px;">
                    <div class="card">
                      <div class="px-4 py-3">
                        <div class="d-flex mb-1">
                          <div class="avatar avatar-sm mr-3">
                            <img src="{{ asset('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')}}" alt="Avatar" class="avatar-img rounded-circle">
                          </div>
                          <div class="flex">
                            <div class="d-flex align-items-center mb-1">
                              <strong>Sherri J. Cardenas</strong>
                              <small class="ml-2 text-muted">3 days ago</small>
                            </div>
                            <small>Thanks for contributing to the release of FREE Admin Vision - PRO Admin Dashboard Theme </small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="px-4 py-3">
                        <div class="d-flex mb-1">
                          <div class="avatar avatar-sm mr-3">
                            <img src="{{ asset('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')}}" alt="Avatar" class="avatar-img rounded-circle">
                          </div>
                          <div class="flex">
                            <div class="d-flex align-items-center mb-1">
                              <strong>Sherri J. Cardenas</strong>
                              <small class="ml-2 text-muted">3 days ago</small>
                            </div>
                            <small>Thanks for contributing to the release of FREE Admin Vision - PRO Admin Dashboard Theme </small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card bg-info">
                      <div class="px-4 py-3">
                        <div class="d-flex  flex-row-reverse mb-1">
                          <div class="avatar avatar-sm ml-3">
                            <img src="{{ asset('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')}}" alt="Avatar" class="avatar-img rounded-circle">
                          </div>
                          <div class="flex">
                            <div class="d-flex align-items-center mb-1">
                              <strong>Sherri J. Cardenas</strong>
                              <small class="ml-2 text-muted">3 days ago</small>
                            </div>
                            <small>Thanks for contributing to the release of FREE Admin Vision - PRO Admin Dashboard Theme </small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="px-4 py-3">
                        <div class="d-flex mb-1">
                          <div class="avatar avatar-sm mr-3">
                            <img src="{{ asset('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')}}" alt="Avatar" class="avatar-img rounded-circle">
                          </div>
                          <div class="flex">
                            <div class="d-flex align-items-center mb-1">
                              <strong>Sherri J. Cardenas</strong>
                              <small class="ml-2 text-muted">3 days ago</small>
                            </div>
                            <small>Thanks for contributing to the release of FREE Admin Vision - PRO Admin Dashboard Theme </small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
      <div class="row">
        <div class="col-md-12">
          
        </div>
      </div>
      
    </div>    
  </div>
@stop