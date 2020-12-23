<!DOCTYPE html>
<html>
<head>
  <title>Update Tentang Kami</title>

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

    <form method="post" action="<?=base_url()?>main/patch_about_us" enctype="multipart/form-data">

        <div class="row">
          
          <div class="col-lg-2"></div>
          <div class="col-lg-8">

            <div class="card">
              <div class="card-header bg-primary text-white">
                Update Tentang Kami
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
                  <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" accept="image/x-png,image/gif,image/jpeg" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="p1" class="col-sm-2">Pharagraph 1</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="p1"><?=isset($records->row()->text_1) ? $records->row()->text_1 : ''?></textarea>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Pharagraph 2</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="p2"><?=isset($records->row()->text_2) ? $records->row()->text_2 : ''?></textarea>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Pharagraph 3</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="p3"><?=isset($records->row()->text_3) ? $records->row()->text_3 : ''?></textarea>
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
                