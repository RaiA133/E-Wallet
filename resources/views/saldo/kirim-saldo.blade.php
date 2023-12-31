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
                                    <a href="/kirim" class="btn btn-sm mb-0 me-1 btn-primary">isi Saldo</a>
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
                                    
                                    <h4 class="font-weight-bolder"><a href="/billing"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;Kirim Saldo</h4>
                                    <p class="mb-0"></p>
                                </div>

                                <div class="card-body py-0">
                                    <div class="text-start w-100 mt-4 mb-0 py-0">&nbsp;Kirim Ke</div>
                                    <ul class="list-group">

                                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Teman</h6>
                                                    <span class="text-xs">250 Online, <span class="font-weight-bold">346+
                                                            Account</span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div>
                                        </li>

                                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                    <i class="fa fa-university" aria-hidden="true"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Kirim Ke Bank</h6>
                                                    <span class="text-xs">10 closed, <span class="font-weight-bold">35
                                                            open</span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div>
                                        </li>
                                        
                                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                    <i class="fa fa-money" aria-hidden="true"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Tarik Tunai</h6>
                                                    <span class="text-xs">3 is closed, <span class="font-weight-bold">40
                                                            Active</span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div>
                                        </li>

                                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                                    <i class="fa fa-qrcode" aria-hidden="true"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Scan Kode QR</h6>
                                                    <span class="text-xs font-weight-bold">+ 430 Transaction</span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button
                                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                                <div class="card-body py-0">

                                    <div class="text-center">
                                        <div class="text-start w-100 mt-4 mb-0 py-0 pb-1">&nbsp;Jumlah</div>

                                        <form role="form">
                                            <div class="mb-3">
                                                <input type="email" class="form-control form-control-lg" placeholder="Minimal 10.000"
                                                    aria-label="Email">
                                            </div>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-2 mb-0">Kirim</button>
                                            </div>
                                            <a href="billing" class="text-center">
                                                <button type="button" class="btn btn-lg btn-transparant btn-lg w-100 mt-2 mb-0 border">Kembali</button>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="card-footer text-center pt-0 px-lg-2 px-1 mt-4">
                                    <p class="mb-4 text-sm mx-auto">
                                        Uang tidak cukup?
                                        <a href="/isi" class="text-primary text-gradient font-weight-bold">Isi</a>
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
