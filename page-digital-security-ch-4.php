<?php
/**
 * This template will display category page
 */
get_header();
?>
<div class="wrapper">
  <!-- bananer section :: BEGIN -->
  <section class="banner-section bg-dark bg-img ch-4">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-1 d-none d-md-block"></div>
        <div class="col-12 col-md-11 mb-5">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/logo-white.png"
            class="mb-0 mb-md-2 logo-image"
            width="190"
          />
        </div>
        <div class="col-md-1 d-none d-md-block"></div>
        <div class="col-12 col-md-11">
          <h1 class="main-title">कानून के हाथ</h1>
          <h1 class="main-title sub-title">इंटरनेट पर भी होते हैं लम्बे</h1>
        </div>
      </div>
    </div>
    <!-- Button section :: BEGIN -->
    <div class="banner-btn-section">
      <div class="row mb-2">
        <div class="col-md-2 col-1 bg-red"></div>
        <div class="col-10 col-md-10 bg-red btn-radius">
          <button>कानूनी मदद & सहारा</button>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-2 col-1 bg-red"></div>
        <div class="col-10 col-md-10 bg-red btn-radius">
          <button>क्यों हैं ज़रूरी & कैसे लिए जाएँ </button>
        </div>
      </div>
    </div>
    <!-- Button section :: END -->
    <!-- Down arrow section :: BEGIN -->
    <p class="mt-5 text-center next-section-arrow">
      <a href="#nex-section">
        <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/down-arrow.png" width="30" />
      </a>
    </p>
    <!-- Down arrow section :: END -->
    <?php get_template_part( 'partials/floating-menu' );?>
  </section>
  <!-- bananer section :: END -->

  <!-- section 1 section :: BEGIN -->
  <div class="page-section bg-light-gray cyber-info" id="nex-section">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div
          class="tag-box w-160px align-items-md-end align-items-center ms-4"
        >
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/video-icon.png"
            width="25"
            class="me-1"
          />वीडियो देखें
        </div>

        <div class="col-12 gray-box bg-dark">
          <div class="row d-flex align-items-center">
            <div class="col-12 col-md-5 title-box">
              <h1 class="main-title mb-md-5">
                कानून के हाथ इंटरनेट पर भी होते हैं लम्बे
              </h1>
              <p class="mb-md-4 white-text-100 f-27px p-0 line-46">
                कानूनी मदद और सहारा: क्यों हैं ज़रूरी और कैसे लिए जाएँ
              </p>
            </div>
            <div class="col-12 col-md-7">
              <iframe
                width="100%"
                height="410"
                class="iframe-video"
                src="https://player.vimeo.com/video/841765291?h=2209262643&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
              >
              </iframe>
              <p class="mt-2 white-text f-17px">
                इस वीडियो में हम डिजिटल सुरक्षा और इंटरनेट पर सुरक्षित रहने
                के बारे में सीखी गई बातों को दोहराया । साथ ही हमने सरकार
                द्वारा बनाई गई साइबर अपराध वेबसाइट पर डिजिटल उत्पीड़न
                रिपोर्ट दर्ज करने की प्रक्रिया को जाना और रिपोर्ट दर्ज करते
                समय याद रखने वाली बातों को भी समझा।
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="pe-4 ps-4">
        <div
          class="row d-flex align-items-center bg-dark-300 pb-md-4 set-border-bottom"
        >
          <div class="col-md-1"></div>
          <div class="col-12 col-md-10">
            <div class="box-with-icons mt-md-5">
              <div class="box-desc">
                <div class="box-title">
                  राष्ट्रीय साइबर अपराध रिपोर्टिंग
                  <strong>पोर्टल का लिंक</strong>
                </div>
              </div>
              <div class="svg-section">
                <a
                  href="https://cybercrime.gov.in/Hindi/Defaulthn.aspx"
                  target="_blank"
                >
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/link-icon.png" />
                </a>
              </div>
            </div>
            <div class="box-with-icons mt-3">
              <div class="box-desc">
                <div class="box-title">
                  साइबर अपराध की शिकायत ऑनलाइन कैसे दर्ज की जाए?
                  <strong>पोस्टर डाउनलोड करें</strong>
                </div>
              </div>
              <div class="svg-section">
                <a
                  href="<?php _e( CBAT_ASSET_IMAGES ); ?>/Ch-04_%E0%A4%AA%E0%A5%8B%E0%A4%B8%E0%A5%8D%E0%A4%9F%E0%A4%B0.png"
                  download
                  target="_blank"
                >
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/download-icon.png" />
                </a>
              </div>
            </div>
            <div class="box-with-icons mt-3">
              <div class="box-desc">
                <div class="box-title">
                  ऑनलाइन उत्पीड़न की रिपोर्ट करते समय क्या करें और क्या न
                  करें?
                  <strong>पोस्टर डाउनलोड करें</strong>
                </div>
              </div>
              <div class="svg-section">
                <a
                  href="<?php _e( CBAT_ASSET_IMAGES ); ?>/Ch 04_02_poster.png"
                  target="_blank"
                  download
                >
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/download-icon.png" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- section 1 section :: END -->

  <!-- section 2 section :: BEGIN -->
  <section class="page-section bg-dark cyber-info" id="info">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="tag-box ms-4 white-text-bg">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/info-icon.png"
            width="25"
            class="me-1"
          />जानकारी
        </div>

        <div class="col-12 gray-box pb-0">
          <div class="row d-flex title-box align-items-end d-md-none pb-0">
            <div class="col-7">
              <h1 class="main-title">
                डिजिटल सुरक्षा के बारे में अतिरिक्त जानकारी
              </h1>
            </div>
            <div class="col-5 title-box img-show pb-0 mb-0">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/vector-user1.png" width="100%" />
            </div>
          </div>
          <div class="row d-md-none">
            <div class="col-12">
              <p class="mb-4 white-text-100 f-27px">
                डिजिटल सुरक्षा को बेहतर ढंग से समझने और अतिरिक्त ज्ञान
                प्राप्त करने में आपकी सहायता के लिए नीचे दिए गए लिंक पर
                क्लिक करें
              </p>
            </div>
          </div>

          <div class="row d-md-flex align-items-center d-none">
            <div class="col-7 col-md-7 title-box">
              <h1 class="main-title mb-md-5">
                डिजिटल सुरक्षा के बारे में अतिरिक्त जानकारी
              </h1>
              <p class="mb-4 white-text-100 f-24px line-40">
                डिजिटल सुरक्षा को बेहतर ढंग से समझने और अतिरिक्त ज्ञान
                प्राप्त करने में आपकी सहायता के लिए नीचे दिए गए लिंक पर
                क्लिक करें
              </p>
            </div>
            <div class="col-5 col-md-5">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/vector-user1.png" />
            </div>
          </div>
        </div>
      </div>
      <div class="pe-4 ps-4">
        <div
          class="row d-flex align-items-center bg-dark-300 pb-md-4 set-border-bottom"
        >
          <div class="col-md-1"></div>
          <div class="col-12 col-md-10">
            <div class="box-with-icons mt-md-5">
              <div class="box-desc">
                <div class="box-title">
                  राष्ट्रीय साइबर अपराध रिपोर्टिंग
                  <strong>पोर्टल का लिंक</strong>
                </div>
              </div>
              <div class="svg-section">
                <a
                  href="https://cybercrime.gov.in/Webform/radioGallery.aspx"
                  target="_blank"
                >
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/link-icon.png" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 2 section :: END -->
</div>
<?php get_footer();?>
