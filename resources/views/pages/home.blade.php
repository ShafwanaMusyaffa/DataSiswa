@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
<header class="bg-dark">
    <div class="container pt-4 pt-xl-5">
    <div class="row pt-5">
        <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
        <div class="text-center">
            <p class="fw-bold text-success mb-2">Terbukti #1 Serbaguna</p>
            <h1 class="fw-bold">
            Solusi terbaik untuk mendata siswa
            </h1>
        </div>
        </div>
        <div class="col-12 col-lg-10 mx-auto">
        <div
            class="position-relative"
            style="display: flex; flex-wrap: wrap; justify-content: flex-end"
        >
            <div
            style="
                position: relative;
                flex: 0 0 45%;
                transform: translate3d(-15%, 35%, 0);
            "
            >
            <img
                class="img-fluid"
                data-bss-parallax=""
                data-bss-parallax-speed="0.8"
                src="assets/img/products/siswa3.jpg"
            />
            </div>
            <div
            style="
                position: relative;
                flex: 0 0 45%;
                transform: translate3d(-5%, 20%, 0);
            "
            >
            <img
                class="img-fluid"
                data-bss-parallax=""
                data-bss-parallax-speed="0.4"
                src="assets/img/products/siswa2.jpg"
            />
            </div>
            <div
            style="
                position: relative;
                flex: 0 0 60%;
                transform: translate3d(0, 0%, 0);
            "
            >
            <img
                class="img-fluid"
                data-bss-parallax=""
                data-bss-parallax-speed="0.25"
                src="assets/img/products/siswa1.jpg"
            />
            </div>
        </div>
        </div>
    </div>
    </div>
</header>
<section class="py-5 mt-5">
    <div class="container py-5">
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
        <p class="fw-bold text-success mb-2">Testimoni</p>
        <h2 class="fw-bold"><strong>Berikut beberapa testimoni dari client</strong></h2>
        <p class="text-muted w-lg-50">
            Beberapa orang berkata jujur.&nbsp;
        </p>
        </div>
    </div>
    <div
        class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-sm-flex justify-content-sm-center"
    >
        <div class="col mb-4">
        <div
            class="d-flex flex-column align-items-center align-items-sm-start"
        >
            <p class="bg-dark border rounded border-dark p-4">
            Wajib di coba ama lu pada.
            </p>
            <div class="d-flex">
            <img
                class="rounded-circle flex-shrink-0 me-3 fit-cover"
                width="50"
                height="50"
                src="assets/img/team/avatar2.jpg"
            />
            <div>
                <p class="fw-bold text-primary mb-0">Fariz Ferdiano</p>
                <p class="text-muted mb-0">Desainer</p>
            </div>
            </div>
        </div>
        </div>
        <div class="col mb-4">
        <div
            class="d-flex flex-column align-items-center align-items-sm-start"
        >
            <p class="bg-dark border rounded border-dark p-4">
            Saya sangat berharap aplikasi ini dapat membantu operator sekolah.
            </p>
            <div class="d-flex">
            <img
                class="rounded-circle flex-shrink-0 me-3 fit-cover"
                width="50"
                height="50"
                src="assets/img/team/avatar4.jpg"
            />
            <div>
                <p class="fw-bold text-primary mb-0">Pak Acun</p>
                <p class="text-muted mb-0">Professor MTK</p>
            </div>
            </div>
        </div>
        </div>
        <div class="col mb-4">
        <div
            class="d-flex flex-column align-items-center align-items-sm-start"
        >
            <p class="bg-dark border rounded border-dark p-4">
            Saya sangat mengapresiasi karya anak bangsa ini.
            </p>
            <div class="d-flex">
            <img
                class="rounded-circle flex-shrink-0 me-3 fit-cover"
                width="50"
                height="50"
                src="assets/img/team/avatar5.jpg"
            />
            <div>
                <p class="fw-bold text-primary mb-0">Raihan Nur Ibrahim</p>
                <p class="text-muted mb-0">OSIS</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

@endsection