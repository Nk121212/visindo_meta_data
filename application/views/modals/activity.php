
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Activity</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" action="<?=base_url()?>main/add_new_activity" enctype="multipart/form-data">

        <div class="modal-body">

          <div class="row">
            
            <div class="col-lg-12">

                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control" accept="image/x-png,image/gif,image/jpeg" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="p1" class="col-sm-2">Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="title" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="desc"></textarea>
                    </div>
                  </div>
              
            </div>

          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="icofont-close"></i> Tutup</button>
          <button type="submit" class="btn btn-sm btn-primary"><i class="icofont-plus"></i> Simpan</button>
        </div>
        
      </form>

    </div>
  </div>