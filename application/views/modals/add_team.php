
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Team</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" action="<?=base_url()?>main/add_new_team" enctype="multipart/form-data">

        <div class="modal-body">

          <div class="row">
            
            <div class="col-lg-12">

              <div class="form-group row">
                <label for="p1" class="col-sm-2">Image</label>
                <div class="col-sm-10">
                  <input type="file" name="image" class="form-control" required>
                </div>
              </div>
              
            </div>

            <div class="col-lg-12">

              <div class="form-group row">
                <label for="p1" class="col-sm-2">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control">
                </div>
              </div>
              
            </div>

            <div class="col-lg-12">

              <div class="form-group row">
                <label for="p1" class="col-sm-2">Telp</label>
                <div class="col-sm-10">
                  <input type="text" name="telp" class="form-control">
                </div>
              </div>
              
            </div>

            <div class="col-lg-12">

              <div class="form-group row">
                <label for="p1" class="col-sm-2">Jabatan</label>
                <div class="col-sm-10">
                  <input type="text" name="jabatan" class="form-control">
                </div>
              </div>
              
            </div>

            <div class="col-lg-12">

              <div class="form-group row">
                <label for="p1" class="col-sm-2">Facebook</label>
                <div class="col-sm-10">
                  <input type="text" name="facebook" class="form-control">
                </div>
              </div>
              
            </div>

            <div class="col-lg-12">

              <div class="form-group row">
                <label for="p1" class="col-sm-2">Instagram</label>
                <div class="col-sm-10">
                  <input type="text" name="instagram" class="form-control">
                </div>
              </div>
              
            </div>

            <div class="col-lg-12">

              <div class="form-group row">
                <label for="p1" class="col-sm-2">Twitter</label>
                <div class="col-sm-10">
                  <input type="text" name="twitter" class="form-control">
                </div>
              </div>
              
            </div>

            <div class="col-lg-12">

              <div class="form-group row">
                <label for="p1" class="col-sm-2">Linkedin</label>
                <div class="col-sm-10">
                  <input type="text" name="linkedin" class="form-control">
                </div>
              </div>
              
            </div>

            <div class="col-lg-12">

              <div class="form-group row">
                <label for="p1" class="col-sm-2">Alamat</label>
                <div class="col-sm-10">
                  <textarea name="alamat" class="form-control"></textarea>
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