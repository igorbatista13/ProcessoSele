@extends('base.header.header')
@section('content')


    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-12 mt-4">

                    <div class="card">
                        <div class="card-body collapse show">
                            <h4 class="card-title">Perfil</h4>
                            <p class="card-text"> Edite as suas informações aqui.</p>
                        </div>
                    </div>
                </div>
            </div>

     
    
    
        <section class="section profile">
          <div class="row">
            <div class="col-xl-4">
    
              <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <div class="casrd" style="width: 18rem;">
                        @if (Auth::user()->perfil && Auth::user()->perfil->image)
                        <img src="{{asset('/images/perfil/'. Auth::user()->perfil->image)}}" width="100px" class="card-img-top1" alt="Profile">
                        @else
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQypzZmOZTGyNqKwyz-cArUPA3a1AIwxOfxUw&s" width="100px" class="card-img-top1" alt="Profile">
                    @endif
                        {{-- <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                          <h5 class="card-title">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->name }}}</h5>
                          <p class="card-text">{{{ isset(Auth::user()->email) ? Auth::user()->email : Auth::user()->email }}}</p>
                          <p class="card-text">{{{ isset(Auth::user()->perfil->cargo) ?? '' }}} </p>
                          <p class="card-text">{{{ isset(Auth::user()->role) ? Auth::user()->role : Auth::user()->role }}} </p>
                          {{-- @foreach(auth()->user()->roles as $role)
                          <p> {{ $role->name }}</p>
                   @endforeach --}}
                          <a href="" class="btn btn-primary">Botão</a>
                        </div>
                      </div>
                  
              
                    <p>
                 
    
              @if (Auth::user()->perfil && Auth::user()->perfil->Tipo)
              <h3> <b> {{Auth::user()->perfil->Tipo }} </b></h3>
            </p>
              @endif
                  <div class="social-links mt-2">
                     {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>  --}}
                     @if (Auth::user()->perfil && Auth::user()->perfil->facebook)
                        <a href="https://facebook.com/{{Auth::user()->perfil->facebook}}" target="_blank" class="f-icon">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                   
                     @endif
    
                     @if (Auth::user()->perfil && Auth::user()->perfil->instagram)
                        <a href="https://instagram.com/{{Auth::user()->perfil->instagram}}" target="_blank" class="f-icon">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    
                     @endif
    
                     @if (Auth::user()->perfil && Auth::user()->perfil->linkedin)
                        <a href="https://linkedin.com/{{Auth::user()->perfil->linkedin}}" target="_blank" class="f-icon">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                   
                     @endif
    
    
    
    
                    {{-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> --}}
                    {{-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
                  </div>
                </div>
              </div>
    
            </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <ul class="nav nav-tabs mb-3">
                                    <li class="nav-item">
                                        <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                            <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block text-primary"><i class="fa fa-user fa-1x"></i>  Resumo</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile" data-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1">s</i>
                                            <span class="d-none d-lg-block text-primary "><i class="fa fa-edit fa-1x"></i>  Editar Perfil</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#anexos" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block text-primary"><i data-feather="folder" class="feather-icon"></i>Documentos</span>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block text-primary"><i data-feather="crosshair" class="feather-icon"></i>Currículo</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    @include('paginas.perfil.resumo')
                                    @include('paginas.perfil.edit')
                                    @include('paginas.perfil.anexos')
                                    @include('paginas.perfil.curriculo')
                                
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

            
          </div>
        </section>
    
      </main><!-- End #main -->


@endsection
@include('base.footer.footer')
