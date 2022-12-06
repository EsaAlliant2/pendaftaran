@extends('template.layout')

@section('title')
    Profile
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Profile | {{ Auth()->user()->name }}</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="">
                        <div class="card-body text-center">
                            <img alt="image" src="https://animemotivation.com/wp-content/uploads/2022/06/anime-character-blue-eyes-wallpaper-boy.jpg" class="rounded-circle mr-1"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3"> {{ Auth()->user()->name }}</h5>
                            <p class="text-muted mb-1">Full Stack Developer</p>
                            <p class="text-muted">Esa Alliant</p>

                            <button type="button" onclick="#" class="btn btn-tool btn-primary shadow-sm rounded-pill" style="width: 120px;">
                                Edit Profil
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    
                    <div class="">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"> {{ Auth()->user()->name }}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jurusan</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">RPL</p>
                                </div>
                            </div>

                            <hr>

                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">akuloikouk@example.com</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Asal Sekolah</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">SMK ANTARTIKA 1</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection