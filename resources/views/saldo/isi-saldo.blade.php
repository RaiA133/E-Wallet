@extends('layouts.app')

@section('content')
    <div class="container position-sticky z-index-sticky top-0 mb-5">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('home') }}">
                            E-Wallet BCA
                        </a>
                            <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="/kirim" class="btn btn-sm mb-0 me-1 btn-primary">Kirim Saldo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content">
        <section>
            <div class="page-header min-vh-100 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    
                                    <h4 class="font-weight-bolder"><a href="/billing"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;Isi Saldo</h4>
                                    <p class="mb-0"></p>
                                </div>

                                <div class="card-body py-0">

                                    <div class="text-center">
                                        <div class="text-start w-100 mt-4 mb-0 py-0">Kartu Pembayaran Saya</div>
                                        <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mb-0">Kartu Baru&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></button>
                                    </div>

                                    <div class="text-center">
                                        <div class="text-start w-100 mt-4 mb-0 py-0">Transfer Bank</div>
                                        <button type="button" class="btn btn-lg btn-tranparant btn-lg border w-100 my-0">
                                            Saldo Rp. 3.500.000&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                        <button type="button" class="btn btn-lg btn-tranparant btn-lg border w-100 my-0">
                                            <img width="70" src="/img/isi-saldo/bca-logo.png" alt="">&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                        <button type="button" class="btn btn-lg btn-tranparant btn-lg border w-100 my-0">
                                            <img width="50" src="/img/isi-saldo/bri-logo.png" alt="">&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                        <button type="button" class="btn btn-lg btn-tranparant btn-lg border w-100 my-0">
                                            <img width="50" src="/img/isi-saldo/bni-logo.png" alt="">&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-start w-100 mt-4 mb-0 py-0">Transfer Bank</div>
                                        <button type="button" class="btn btn-lg btn-tranparant btn-lg border w-100 my-0">
                                            Isi Ke Admin&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                    
                                </div>

                                <div class="card-body">
                                    <a href="billing" class="text-center">
                                        <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Kembali</button>
                                    </a>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Transfer Teman Uang?
                                        <a href="/kirim" class="text-primary text-gradient font-weight-bold">Kirim</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg'); background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new
                                    currency"</h4>
                                <p class="text-white position-relative">The more effortless the writing looks, the more
                                    effort the writer actually put into the process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
@endsection
