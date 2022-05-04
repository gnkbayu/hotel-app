
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $modeltamu->name }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>No.Identitas</label>
                        <input type="text" class="form-control" name="no_identitas" value="{{ $modeltamu->no_identitas }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Negara</label>
                        <input type="text" class="form-control" name="warga_negara" value="{{ $modeltamu->warga_negara }}" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $modeltamu->alamat }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" class="form-control" name="kabupaten" value="{{ $modeltamu->kabupaten }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" value="{{ $modeltamu->provinsi }}" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $modeltamu->email }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>No.Telepon</label>
                        <input type="text" class="form-control" name="phone" value="{{ $modeltamu->phone }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="hidden" class="form-control" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
   <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
      