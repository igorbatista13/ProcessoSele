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
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                        </div>
                    </div>
                </div>
            </div>

    
    
    
        <section class="section profile">
          <div class="row">
            <div class="col-xl-4">
    
              <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
    
                  
                  @if (Auth::user()->perfil && Auth::user()->perfil->image)
                  <img src="{{asset('/images/perfil/'. Auth::user()->perfil->image)}}" alt="Profile">
                  @else
                  <img src="{{ asset('images/brasao_mt.png') }}" alt="Profile" class="rounded">
              @endif
    
                  <h2>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->name }}}</h2>
                  <h6>{{{ isset(Auth::user()->email) ? Auth::user()->email : Auth::user()->email }}}</h6>
                  @foreach(auth()->user()->roles as $role)
                     <h3> {{ $role->name }}</h3>
              @endforeach
    
              @if (Auth::user()->perfil && Auth::user()->perfil->Tipo)
              <h3> <b> {{Auth::user()->perfil->Tipo }} </b></h3>
    
              @endif
                  <div class="social-links mt-2">
                     {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>  --}}
                     @if (Auth::user()->perfil && Auth::user()->perfil->Facebook)
                        <a href="https://facebook.com/{{Auth::user()->perfil->Facebook}}" target="_blank" class="f-icon">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                     @else
                        <a href="" class="f-icon"><i class="fab fa-facebook fa-2x"></i>
                           </a>
                     @endif
    
                     @if (Auth::user()->perfil && Auth::user()->perfil->Instagram)
                        <a href="https://instagram.com/{{Auth::user()->perfil->Instagram}}" target="_blank" class="f-icon">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                     @else
                        <a href="" class="f-icon">
                            <i class="fab fa-instagram fa-2x"></i></a>
                     @endif
    
                     @if (Auth::user()->perfil && Auth::user()->perfil->Linkedin)
                        <a href="https://linkedin.com/{{Auth::user()->perfil->Linkedin}}" target="_blank" class="f-icon">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                     @else
                        <a href="" class="f-icon"><i class="fab fa-linkedin fa-2x"></i></a>
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
                                            <span class="d-none d-lg-block">Resumo</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile" data-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Editar Perfil</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Currículo</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    @include('paginas.perfil.resumo')
                                    @include('paginas.perfil.edit')
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
