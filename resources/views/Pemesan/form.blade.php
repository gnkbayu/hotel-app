
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Layanan</label>
                        <input type="text" class="form-control" name="cekin" value="{{ $modelpemesan->cekin }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Satuan</label>
                        <input type="text" class="form-control" name="cekout" value="{{ $modelpemesan->cekout }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="jml_kamar" value="{{ $modelpemesan->jml_kamar }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Layanan</label>
                        <input type="text" class="form-control" name="nama_pemesan" value="{{ $modelpemesan->nama_pemesan }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Satuan</label>
                        <input type="text" class="form-control" name="email_pemesan" value="{{ $modelpemesan->email_pemesan }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="phone" value="{{ $modelpemesan->phone }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Layanan</label>
                        <input type="text" class="form-control" name="tipe_kamar" value="{{ $modelpemesan->tipe_kamar }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Satuan</label>
                        <input type="text" class="form-control" name="status" value="{{ $modelpemesan->status }}" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
                </div>
   <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
      