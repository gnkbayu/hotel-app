
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tipe Kamar</label>
                        <input type="text" class="form-control" name="tipe_kamar" value="{{ $modelfasilitas->tipe_kamar }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga" value="{{ $modelfasilitas->harga }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    
                  
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" value="{{ $modelfasilitas->deskripsi }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Foto Fasilitas</label>
                        <input type="file" class="form-control" name="foto_fasilitas" value="{{ $modelfasilitas->foto_fasilitas }}" placeholder="Enter ..." >
                        @if(strlen($modelfasilitas->foto_fasilitas)>0)
                          <img src="{{ asset('foto/'.$modelfasilitas->foto_fasilitas) }}" />
                        @endif
                      </div>
                    </div>
                 
                </div>
   <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
      