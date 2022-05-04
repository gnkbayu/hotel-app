
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $modeluser->name }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Level</label>
                        <input type="text" class="form-control" name="level" value="{{ $modeluser->level }}" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" value="{{ $modeluser->password }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $modeluser->email }}" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Foto Profile</label>
                        <input type="file" class="form-control" name="foto_profil" value="{{ $modeluser->foto_profil }}" placeholder="Enter ...">
                        @if(strlen($modeluser->foto_profil)>0)
                          <img src="{{ asset('foto/'.$modeluser->foto_profil) }}" />
                        @endif
                      </div>
                    </div>
                  </div>
   <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
      