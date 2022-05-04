
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Layanan</label>
                        <input type="text" class="form-control" name="nama_layanan" value="{{ $modellayanan->nama_layanan }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Satuan</label>
                        <input type="text" class="form-control" name="satuan" value="{{ $modellayanan->satuan }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga" value="{{ $modellayanan->harga }}" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
                  
   <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
      