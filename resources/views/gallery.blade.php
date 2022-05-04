
<!DOCTYPE html>
<html lang="en">
<style>
    .card:hover{
        box-shadow:2px 2px 2px rgba(0,0,0,0.8);
    }
</style>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome | Mega Hotel</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('admin/dist/img/favicon.ico') }}" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
       @include('navbar')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Gallery Mega Hotel</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Pesan Dan Dapatkan Kamar Dengan Pelayanan Terbaik</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- fasilitas -->
        
        <!-- Akhir fasilitas -->
        <!-- About-->
       
        <!-- Services-->
              <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                @foreach($gallery as $key=>$value)
                    <div class="col-lg-4 col-sm-6">
                    @if(strlen($value->foto_gallery)>0)
                        <a class="portfolio-box" href="{{ asset('foto/'.$value->foto_gallery) }}" title="{{ $value->project_name }}">
                            <img class="img-fluid" src="{{ asset('foto/'.$value->foto_gallery) }}" alt="..." />
                            @endif
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">{{ $value->category }}</div>
                                <div class="project-name">{{ $value->project_name }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Mega Hotel</h2>
                <!-- <a class="btn btn-light btn-xl" href="{{ ('registrasi') }}">Register Now!</a> -->
            </div>
        </section>
        <!-- Contact-->
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Mega Hotel</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('admin/js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
