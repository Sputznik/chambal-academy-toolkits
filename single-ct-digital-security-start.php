<?php
/**
 * This template will display digital security homepage
 */
get_header();
?>
<div class="wrapper">
  <!-- bananer section :: BEGIN -->
  <section class="banner-section bg-dark bg-img">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-1 d-none d-md-block"></div>
        <div class="col-12 col-md-11 mb-5">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/logo-white.png"
            class="mb-0 mb-md-2"
            width="190"
          />
        </div>
        <div class="col-md-1 d-none d-md-block"></div>
        <div class="col-12 col-md-11">
          <h1 class="main-title">डिजिटल सुरक्षा </h1>
          <h1 class="main-title sub-title">टूलकिट </h1>
        </div>
      </div>
    </div>
    <!-- Button section :: BEGIN -->
    <div class="banner-btn-section">
      <div class="row mb-2">
        <div class="col-md-2 col-1 bg-red"></div>
        <div class="col-10 col-md-10 bg-red btn-radius">
          <button>ऑनलाइन रहें,</button>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-2 col-1 bg-red"></div>
        <div class="col-10 col-md-10 bg-red btn-radius">
          <button>और सुरक्षित भी</button>
        </div>
      </div>
    </div>
    <!-- Button section :: END -->

    <!-- Down arrow section :: BEGIN -->
    <p class="mt-5 text-center next-section-arrow">
      <a href="#next-section">
        <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/down-arrow.png" width="30" />
      </a>
    </p>
    <!-- Down arrow section :: END -->
    <?php get_template_part( 'partials/floating-menu' );?>
  </section>
  <!-- bananer section :: END -->

  <!-- section 1 section :: BEGIN -->
  <div class="page-section bg-light-gray" id="next-section">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-6">
          <h1 class="main-title">
            <span class="orange-text">क्यों? कैसे?</span><br />जानिये हमारे
            साथ!
          </h1>
        </div>
        <div class="col-12 col-md-6">
          <div class="tag-box align-items-end">
            <img
              src="<?php _e( CBAT_ASSET_IMAGES ); ?>/video-icon.png"
              width="30"
              class="me-1"
            />वीडियो देखें
          </div>
          <iframe
            width="100%"
            height="410"
            src="https://player.vimeo.com/video/831183411?h=1c8d797c19"
            allow="autoplay; fullscreen"
            allowfullscreen
            class="iframe-video"
          >
          </iframe>
          <p class="white-text mt-3 mb-4 mb-md-0 f-17px">
            यह डिजिटल सुरक्षा टूलकिट आपके और मेरे लिए बनाई गई है, और इसका
            उद्देश्य आपकी मदद करना है कि आप इंटरनेट पर होते हुए सुरक्षित
            कैसे रह सकते हैं।
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- section 1 section :: END -->

  <!-- section 2 section :: BEGIN -->
  <section class="page-section bg-dark next-alignments">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-6">
          <h1 class="main-title">
            ऑनलाइन सुरक्षा के <br class="d-none d-md-block" /><span
              class="orange-text"
              >चार ज़रूरी भाग</span
            >, <br class="d-none d-md-block" />जिन पर हम ध्यान देंगे, वह
            हैं:
          </h1>
        </div>
        <div class="col-12 col-md-6">
          <div class="box-with-icons">
            <div class="svg-section">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/Home_privacy.png" />
            </div>
            <div class="box-desc">
              <div class="box-title">प्राइवेसी</div>
              <div class="arrow-section">
                <a href="<?php _e( CBAT_SITE_URL ); ?>/ct/digital-security-ch-1">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/arrow-icon.png" width="25" />
                </a>
              </div>
            </div>
          </div>
          <div class="box-with-icons">
            <div class="svg-section">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/security.png" />
            </div>
            <div class="box-desc">
              <div class="box-title">सिक्योरिटी ( सुरक्षा )</div>
              <div class="arrow-section">
                <a href="<?php _e( CBAT_SITE_URL ); ?>/ct/digital-security-ch-2">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/arrow-icon.png" width="25" />
                </a>
              </div>
            </div>
          </div>
          <div class="box-with-icons">
            <div class="svg-section">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/report.png" width="25" />
            </div>
            <div class="box-desc">
              <div class="box-title">रिपोर्ट & ब्लॉक करना</div>
              <div class="arrow-section">
                <a href="<?php _e( CBAT_SITE_URL ); ?>/ct/digital-security-ch-3">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/arrow-icon.png" width="25" />
                </a>
              </div>
            </div>
          </div>
          <div class="box-with-icons">
            <div class="svg-section">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/help.png" />
            </div>
            <div class="box-desc">
              <div class="box-title">कानूनी मदद & सहारा</div>
              <div class="arrow-section">
                <a href="<?php _e( CBAT_SITE_URL ); ?>/ct/digital-security-ch-4">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/arrow-icon.png" width="25" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 2 section :: END -->

</div>
<?php get_footer(); ?>
