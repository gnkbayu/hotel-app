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
                <header class="text-dark" style="margin-top: 200px; margin-bottom: 200px;;">
                <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <form action="{{ url('pesanhotel/'.$modelpesanhotel->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm">
                      <!-- text input -->
                      <div class="form-group mt-4">
                        <label>Checkin</label>
                        <input type="date" id="cekin" class="form-control tanggal" value="{{ $modelpesanhotel->cekin }}" name="cekin" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="form-group mt-4">
                        <label>Checkout</label>
                        <input type="date" id="cekout" class="form-control tanggal" value="{{ $modelpesanotel->cekout }}" name="cekout" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm">
                      <!-- text input -->
                      <div class="form-group mt-4">
                        <label>Nama Pemesan</label>
                        <input type="text" id="nama_pemesan" value="{{ $modelpesanhotel->nama_pemesan }}" class="form-control" name="nama_pemesan" placeholder="Masukan Nama">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="form-group mt-4">
                        <label>Email Pemesan</label>
                        <input type="text" id="email_pemesan" value="{{ $modelpesanhotel->email_pemesan }}" class="form-control" name="email_pemesan" placeholder="Masukan Email" >
                      </div>
                    </div>
                    <div class="col-sm">
                    <div class="form-group mt-4">
                        <label>No.Hp</label>
                        <input type="text" id="phone" class="form-control" value="{{ $modelpesanhotel->phone }}" name="phone" placeholder="Masukkan No.Hp" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <label class="mt-4">Tipe Kamar</label>
                      <select class="form-select" id="tipe_kamar" value="{{ $modelpesanhotel->tipe_kamar }}" name="tipe_kamar" aria-label="Default select example">
                        <option selected>Pilih Kamar</option>
                        <option value="Single Room">Single Room</option>
                        <option value="Deluxe Room">Deluxe Room</option>
                        <option value="Presidential Suite">Presidential Suite</option>
                      </select>
                      <!-- <div class="form-group">
                        <label>No.Hp</label>
                        <input type="text" class="form-control" name="tipe_kamar" placeholder="Enter ..." >
                      </div> -->
                    </div>
                    <div class="col-sm-6">
                    <label class="mt-4">Jumlah Kamar</label>
                      <!-- <div class="form-group">
                        <label>Jumlah Kamar</label>
                        <input type="text" class="form-control" name="jml_kamar"  placeholder="Enter ..." >
                      </div> -->
                      <select class="form-select" value="{{ $modelpesanhotel->jml_kamar }}" id="jml_kamar" name="jml_kamar" aria-label="Default select example">
                        <option selected>Jumlah Kamar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                  </div>
                </div>
   <!-- /.card-body -->

                <div class="">
                  <button type="submit" class="btn btn-info mt-3">Submit</button>
                </div>
                </form>
            </div>
          </div>
        </header>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(function(){
        var a = localStorage.getItem('cekin')
        var b = localStorage.getItem('cekout')
        var c = localStorage.getItem('jml_kamar')
        var d = localStorage.getItem('nama_pemesan')
        var e = localStorage.getItem('email_pemesan')
        var f = localStorage.getItem('phone')
        var g = localStorage.getItem('tipe_kamar')
        var h = localStorage.getItem('created_at')

        $('#cekin').val(a)
        $('#cekout').val(b)
        $('#jml_kamar').val(c)
        $('#nama_pemesan').val(d)
        $('#email_pemesan').val(e)
        $('#phone').val(f)
        $('#tipe_kamar').val(g)
        $('#created_at').val(h)
    })
</script>
</html>