<!DOCTYPE html>
<html>
<head>
  <title>Update Visi & Misi</title>

  <link href="<?=base_url()?>assets/img/favicon.png" rel="icon">
  <link href="<?=base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?=base_url()?>assets/css/my_css.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

</head>
<body>

  <div class="col-lg-12 mb-4" style="margin-top:10px;">

    <form method="post" action="<?=base_url()?>main/patch_visi_misi">

      <div class="row">
        
        <div class="col-lg-2"></div>

          <div class="col-lg-8">

            <div class="card">
              <div class="card-header bg-primary text-white">
                Update Visi & Misi
              </div>
              <div class="card-body">

                <?php
                  if(!empty($this->session->flashdata('message'))){
                    $msg = $this->session->flashdata('message');
                    echo '
                      <div class="alert alert-'.$msg['color'].' alert-dismissible fade show" role="alert">
                        <strong>'.ucfirst($msg['status']).'</strong> '.$msg['message'].'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    ';
                  }else{

                  }
                ?>

                <div class="form-group row">
                  <label for="p1" class="col-sm-2">Visi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="visi" id="visi"><?=isset($records->row()->visi) ? $records->row()->visi : ''?></textarea>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Misi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="misi" id="misi"><?=isset($records->row()->misi) ? $records->row()->misi : ''?></textarea>
                  </div>
                </div>
                
              </div>
              <div class="card-footer text-center">
                <a href="<?=base_url()?>main" class="btn btn-sm btn-warning text-white">Kembali</a>
                <button type="submit" class="btn btn-sm btn-primary text-white">Simpan</button>
              </div>
            </div>
            
          </div>

          <div class="col-lg-2"></div>

      </div>

    </form>

  </div>

</body>
</html>

<!-- Vendor JS Files -->
  <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!--script src="<?=base_url()?>ckeditor/ckeditor.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){

        var roxyFileman = '../ckeditor/plugins/fileman/index.html';

    })
  </script-->
                