
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" name="category" value="{{ $modelgallery->category }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Projct Name</label>
                        <input type="text" class="form-control" name="project_name" value="{{ $modelgallery->project_name }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Foto Gallery</label>
                        <input type="file" class="form-control" name="foto_gallery" value="{{ $modelgallery->foto_gallery }}" placeholder="Enter ..." >
                        @if(strlen($modelgallery->foto_gallery)>0)
                          <img src="{{ asset('foto/'.$modelgallery->foto_gallery) }}" />
                        @endif
                      </div>
                    </div>
                 
                </div>
   <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
      