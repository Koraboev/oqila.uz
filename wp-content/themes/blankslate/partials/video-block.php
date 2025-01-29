<div class="modal fade bd-example-modal-lg" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo get_field('video-url') ?>
      </div>
    </div>
  </div>
</div>
<div class="video-area">
    <div class="wrd-video-wrapper">
        <div class="wrd-video-wrapper-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="block-1-title mrt-80"><?=get_field('video-title')?></h2>
                </div>
                <div class="col-lg-12 video-area-box">
                    <div class="wrd-popup-video wrd-cover-bg wow fadeInUp" data-wow-duration="1.25s" style="background-image: url(<?=get_field('video-image')?>);>; background-size: cover;" >
                        <div class="wrd-video-image-overlay"></div>
                        <a type="button" class="wrd-video-button mfp-iframe" data-toggle="modal" data-target="#video">
                          <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>