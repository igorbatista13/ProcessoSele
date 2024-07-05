@extends('base.header.header')

@section('content')
    <div class="page-wrapper">

        <div class="container-fluid">
            <div class="pagetitle">
                <h1>FAQ  <i data-feather="help-circle" class="feather-icon"></i></h1> 

            </div><!-- End Page Title -->

            <section class="section contact">

                <div class="row gy-4">

                    <div class="col-xl-12">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="info-box card">
                                    <i class="bi bi-geo-alt"></i>
                                    <div class="accordion" id="faqAccordion">
                                        @foreach ($faq as $index => $faqs)
                                            <div class="card">
                                                <div class="card-header" id="heading{{ $index }}">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                            data-target="#collapse{{ $index }}"
                                                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                                            aria-controls="collapse{{ $index }}">
                                                            <b> {{ $faqs->pergunta }} </b> <i data-feather="help-circle" class="feather-icon"></i>

                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse{{ $index }}"
                                                    class="collapse {{ $index === 0 ? 'show' : '' }}"
                                                    aria-labelledby="heading{{ $index }}"
                                                    data-parent="#faqAccordion">
                                                    <div class="card-body">
                                                        {{ $faqs->resposta }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-6">
                                <div class="card p-4">

                                    <img src="{{ asset('/images/samples/note-suporte.jpg') }}">

                                </div>

                            </div>

                        </div>

            </section>
        @endsection
        @include('base.footer.footer')
