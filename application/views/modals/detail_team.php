
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Selengkapnya dari <span>tim kami</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <section id="team" class="team section-bg">

              <div class="container" data-aos="fade-up">

                <div class="row">

                  <?php
                    foreach ($all_team->result() as $team) {
                      # code...

                  ?>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                      <div class="member">
                        <div class="member-img">
                          <img src="<?=base_url().$team->image?>" class="img-fluid" alt="">
                          <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                          </div>
                        </div>
                        <div class="member-info">
                          <h4><?=$team->nama?></h4>
                          <span><?=$team->jabatan?></span>
                        </div>
                      </div>
                    </div>

                  <?php    
                    }
                  ?>

                </div>

              </div>

            </section><!-- End Team Section -->

      </div>
      <div class="modal-footer">
        <!--button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button-->
      </div>
    </div>
  </div>