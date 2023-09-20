<?php
/**
 * This template will display digital security chapter three
 */
get_header();
?>
<div class="wrapper">
  <!-- bananer section :: BEGIN -->
  <section class="banner-section bg-dark bg-img ch-3">
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
          <h1 class="main-title">रिपोर्ट और ब्लॉक करना</h1>
          <h1 class="main-title sub-title">ज़रूरी भी, आसान भी</h1>
        </div>
      </div>
    </div>
    <!-- Button section :: BEGIN -->
    <div class="banner-btn-section">
      <div class="row mb-2">
        <div class="col-md-2 col-1 bg-red"></div>
        <div class="col-10 col-md-10 bg-red btn-radius">
          <button>कैसे करें अनचाही चीज़ें को</button>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-2 col-1 bg-red"></div>
        <div class="col-10 col-md-10 bg-red btn-radius">
          <button>रिपोर्ट व ब्लॉक </button>
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
          <div
            class="tag-box w-160px align-items-md-end align-items-center"
          >
            <img
              src="<?php _e( CBAT_ASSET_IMAGES ); ?>/video-icon.png"
              width="25"
              class="me-1"
            />वीडियो देखें
          </div>
          <iframe
            width="100%"
            height="410"
            class="iframe-video"
            src="https://player.vimeo.com/video/841764959?h=2ceeee5923&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
          >
          </iframe>
        </div>
        <div class="col-12 col-md-6">
          <p class="white-text mt-3 f-17px">
            असल जीवन की तरह इंटरनेट पर भी सोशल मीडिया साइट के ज़रिये अकसर
            लोग दूसरों को परेशान करते हैं - जैसे कि उन्हें अश्लील फोटो
            /वीडियो भेजना, उनकी मर्ज़ी के बिना उनको मैसेज/ कॉल करना, किसी और
            को उनकी प्राइवेट जानकारी दे देना, आदि । यह सब साइबर उत्पीड़न या
            बुलिंग में आता है। इस वीडियो में हमने इंटरनेट सुरक्षा के एक बहुत
            ही ज़रूरी भाग के बारे में जाना - रिपोर्ट और ब्लॉक करना।
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- section 1 section :: END -->

  <!-- section 2 section :: BEGIN -->
  <section class="page-section bg-dark" id="fbreport">
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

        <div class="col-12 gray-box bg-light-gray">
          <div class="row d-flex align-items-center">
            <div class="col-12 col-md-5 title-box">
              <h1 class="main-title">
                फेसबुक पर कैसे करते हैं अनचाही पोस्ट्स को रिपोर्ट
              </h1>
              <p class="mb-4 white-text-100">आइये देखें इसका पूरा तरीका…</p>
            </div>
            <div class="col-12 col-md-7">
              <iframe
                width="100%"
                height="410"
                class="iframe-video"
                src="https://player.vimeo.com/video/841765126?h=75baef8a98&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
              >
              </iframe>
              <p class="mt-2 white-text f-17px">
                इस वीडियो में, हमने सीखा कि फेसबुक पर कंटेंट को रिपोर्ट कैसे
                करें। फेसबुक पर स्क्रोल करते समय हमें कोई ऐसी फोटो या वीडियो
                भी मिल सकती है जो की अपमानजनक और अनुचित हो । ऐसे किसी फोटो
                या वीडियो को रिपोर्ट करने से , आपको वह चीज़ दुबारा नहीं
                दिखेगी।खेगी।चीज़ दुबारा नहीं दिखेगी।आदि ।
              </p>
              <!--<p class="mt-2 white-text f-17px">-->
              <!--  यह सब साइबर उत्पीड़न या बुलिंग में आता है। इस वीडियो में हम-->
              <!--  इंटरनेट सुरक्षा के एक बहुत ही ज़रूरी भाग के बारे में बात-->
              <!--  करेंगे - रिपोर्ट और ब्लॉक करना।-->
              <!--</p>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 2 section :: END -->

  <!-- section 3 :: BEGIN -->
  <section class="page-section bg-light-gray" id="khel01">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="tag-box ms-4 yellow-bg">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/title-icon.png"
            width="25"
            class="me-1"
          />खेलो और सीखो
        </div>
        <div class="col-12 gray-box bg-dark">
          <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6 title-box">
              <h1 class="main-title">अगर आप सुनीता होतीं तो क्या करतीं?</h1>
            </div>
            <div class="col-12 col-md-6">
              <p class="white-text-200 line-40 f-24px">
                नीचे फेसबुक पोस्ट के कुछ उदाहरण दिए गए हैं। चुनें कि अगर
                सुनीता ये पोस्ट देखेगी तो क्या करेगी- क्या वह उन्हें रिपोर्ट
                करेगी? या उन्हें ब्लॉक? या बस उन्हें जाने देंगी ?
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-flex align-items-center mt-4">
        <!-- quiz section 1 :: BEGIN -->
        <div class="col-12 mb-3 mb-md-5">
          <div class="video-content-box" id="post1">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="tag-box green-bg">
                  <img
                    src="<?php _e( CBAT_ASSET_IMAGES ); ?>/post-icon.png"
                    width="25"
                    class="me-1"
                  />Post 01
                </div>
                <img
                  src="<?php _e( CBAT_ASSET_IMAGES ); ?>/post1-img.png"
                  alt="Image"
                  class="post-img"
                />
                <div class="video-btn-section mt-1">
                  <div class="yellow-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="report-opt"
                        ><input type="radio" name="post-options" /><span
                          >रिपोर्ट</span
                        ></label
                      >
                    </div>
                  </div>
                  <div class="red-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="block-opt"
                        ><input type="radio" name="post-options" /><span
                          >ब्लॉक</span
                        ></label
                      >
                    </div>
                  </div>
                  <div class="green-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="reject-opt"
                        ><input type="radio" name="post-options" /><span
                          >जाने दो</span
                        ></label
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="post-actions-box" data-opt="post-options">
                  <p>
                    यह देखने के लिए कि प्रत्येक विकल्प का क्या अर्थ है, उन
                    पर क्लिक करें
                  </p>
                </div>
                <div
                  class="post-actions-box yellow-bg-500 d-none"
                  data-show="report-opt"
                >
                  <p>
                    जब फेसबुक पर कुछ रिपोर्ट किया जाता है तो वे ऐसी किसी भी
                    चीज़ पर कार्रवाई करेंगे जो उनके सामुदायिक मानकों का पालन
                    नहीं करती है। आपकी रिपोर्ट गोपनीय रखी जाएगी और आपके
                    द्वारा रिपोर्ट किए गए खाते में यह नहीं देखा जाएगा कि
                    उन्हें किसने रिपोर्ट किया है।
                  </p>
                </div>
                <div
                  class="post-actions-box red-bg d-none"
                  data-show="block-opt"
                >
                  <p>
                    जब आप किसी को ब्लॉक करते हैं तो आपके पुराने पोस्ट और
                    कमेंट उनसे छुप जाते हैं। इसी तरह, उनके पोस्ट, कमेंट,
                    लाइक आदि आपके फ़ीड से गायब हो जाएंगे।
                  </p>
                </div>
                <div
                  class="post-actions-box green-bg d-none"
                  data-show="reject-opt"
                >
                  <p>
                    इसका मतलब है कि आप पोस्ट को रिपोर्ट या उसे ब्लॉक नहीं
                    करना चाहते हैं और यदि इस प्रकार की पोस्ट आपके फेसबुक पर
                    दिखाई देती है तो आपको कोई आपत्ति नहीं है।
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- quiz section 1 :: END -->
        <!-- quiz section 2 :: BEGIN -->
        <div class="col-12 mb-3 mb-md-5">
          <div class="video-content-box" id="post2">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="tag-box green-bg">
                  <img
                    src="<?php _e( CBAT_ASSET_IMAGES ); ?>/post-icon.png"
                    width="25"
                    class="me-1"
                  />Post 02
                </div>
                <img
                  src="<?php _e( CBAT_ASSET_IMAGES ); ?>/post2-img.png"
                  alt="Image"
                  class="post-img"
                />
                <div class="video-btn-section mt-1">
                  <div class="yellow-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="report-opt2"
                        ><input type="radio" name="post-options2" /><span
                          >रिपोर्ट</span
                        ></label
                      >
                    </div>
                  </div>
                  <div class="red-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="block-opt2"
                        ><input type="radio" name="post-options2" /><span
                          >ब्लॉक</span
                        ></label
                      >
                    </div>
                  </div>
                  <div class="green-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="reject-opt2"
                        ><input type="radio" name="post-options2" /><span
                          >जाने दो</span
                        ></label
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="post-actions-box" data-opt="post-options2">
                  <p>
                    यह देखने के लिए कि प्रत्येक विकल्प का क्या अर्थ है, उन
                    पर क्लिक करें
                  </p>
                </div>
                <div
                  class="post-actions-box yellow-bg-500 d-none"
                  data-show="report-opt2"
                >
                  <p>
                    जब फेसबुक पर कुछ रिपोर्ट किया जाता है तो वे ऐसी किसी भी
                    चीज़ पर कार्रवाई करेंगे जो उनके सामुदायिक मानकों का पालन
                    नहीं करती है। आपकी रिपोर्ट गोपनीय रखी जाएगी और आपके
                    द्वारा रिपोर्ट किए गए खाते में यह नहीं देखा जाएगा कि
                    उन्हें किसने रिपोर्ट किया है।
                  </p>
                </div>
                <div
                  class="post-actions-box red-bg d-none"
                  data-show="block-opt2"
                >
                  <p>
                    जब आप किसी को ब्लॉक करते हैं तो आपके पुराने पोस्ट और
                    कमेंट उनसे छुप जाते हैं। इसी तरह, उनके पोस्ट, कमेंट,
                    लाइक आदि आपके फ़ीड से गायब हो जाएंगे।
                  </p>
                </div>
                <div
                  class="post-actions-box green-bg d-none"
                  data-show="reject-opt2"
                >
                  <p>
                    इसका मतलब है कि आप पोस्ट को रिपोर्ट या उसे ब्लॉक नहीं
                    करना चाहते हैं और यदि इस प्रकार की पोस्ट आपके फेसबुक पर
                    दिखाई देती है तो आपको कोई आपत्ति नहीं है।
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- quiz section 2 :: END -->
        <!-- quiz section 3 :: BEGIN -->
        <div class="col-12 mb-3 mb-md-5">
          <div class="video-content-box" id="post3">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="tag-box green-bg">
                  <img
                    src="<?php _e( CBAT_ASSET_IMAGES ); ?>/post-icon.png"
                    width="25"
                    class="me-1"
                  />Post 03
                </div>
                <img
                  src="<?php _e( CBAT_ASSET_IMAGES ); ?>/post3-img.png"
                  alt="Image"
                  class="post-img"
                />
                <div class="video-btn-section mt-1">
                  <div class="yellow-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="report-opt3"
                        ><input type="radio" name="post-options3" /><span
                          >रिपोर्ट</span
                        ></label
                      >
                    </div>
                  </div>
                  <div class="red-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="block-opt3"
                        ><input type="radio" name="post-options3" /><span
                          >ब्लॉक</span
                        ></label
                      >
                    </div>
                  </div>
                  <div class="green-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="reject-opt3"
                        ><input type="radio" name="post-options3" /><span
                          >जाने दो</span
                        ></label
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="post-actions-box" data-opt="post-options3">
                  <p>
                    यह देखने के लिए कि प्रत्येक विकल्प का क्या अर्थ है, उन
                    पर क्लिक करें
                  </p>
                </div>
                <div
                  class="post-actions-box yellow-bg-500 d-none"
                  data-show="report-opt3"
                >
                  <p>
                    जब फेसबुक पर कुछ रिपोर्ट किया जाता है तो वे ऐसी किसी भी
                    चीज़ पर कार्रवाई करेंगे जो उनके सामुदायिक मानकों का पालन
                    नहीं करती है। आपकी रिपोर्ट गोपनीय रखी जाएगी और आपके
                    द्वारा रिपोर्ट किए गए खाते में यह नहीं देखा जाएगा कि
                    उन्हें किसने रिपोर्ट किया है।
                  </p>
                </div>
                <div
                  class="post-actions-box red-bg d-none"
                  data-show="block-opt3"
                >
                  <p>
                    जब आप किसी को ब्लॉक करते हैं तो आपके पुराने पोस्ट और
                    कमेंट उनसे छुप जाते हैं। इसी तरह, उनके पोस्ट, कमेंट,
                    लाइक आदि आपके फ़ीड से गायब हो जाएंगे।
                  </p>
                </div>
                <div
                  class="post-actions-box green-bg d-none"
                  data-show="reject-opt3"
                >
                  <p>
                    इसका मतलब है कि आप पोस्ट को रिपोर्ट या उसे ब्लॉक नहीं
                    करना चाहते हैं और यदि इस प्रकार की पोस्ट आपके फेसबुक पर
                    दिखाई देती है तो आपको कोई आपत्ति नहीं है।
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- quiz section 3 :: END -->
        <!-- quiz section 3 :: BEGIN -->
        <div class="col-12 mb-3 mb-md-5">
          <div class="video-content-box" id="post4">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="tag-box green-bg">
                  <img
                    src="<?php _e( CBAT_ASSET_IMAGES ); ?>/post-icon.png"
                    width="25"
                    class="me-1"
                  />Post 04
                </div>
                <img
                  src="<?php _e( CBAT_ASSET_IMAGES ); ?>/post4-img.png"
                  alt="Image"
                  class="post-img"
                />
                <div class="video-btn-section mt-1">
                  <div class="yellow-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="report-opt4"
                        ><input type="radio" name="post-options4" /><span
                          >रिपोर्ट</span
                        ></label
                      >
                    </div>
                  </div>
                  <div class="red-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="block-opt4"
                        ><input type="radio" name="post-options4" /><span
                          >ब्लॉक</span
                        ></label
                      >
                    </div>
                  </div>
                  <div class="green-btn btn">
                    <div class="fancy-checkbox">
                      <label data-show="reject-opt4"
                        ><input type="radio" name="post-options4" /><span
                          >जाने दो</span
                        ></label
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="post-actions-box" data-opt="post-options4">
                  <p>
                    यह देखने के लिए कि प्रत्येक विकल्प का क्या अर्थ है, उन
                    पर क्लिक करें
                  </p>
                </div>
                <div
                  class="post-actions-box yellow-bg-500 d-none"
                  data-show="report-opt4"
                >
                  <p>
                    जब फेसबुक पर कुछ रिपोर्ट किया जाता है तो वे ऐसी किसी भी
                    चीज़ पर कार्रवाई करेंगे जो उनके सामुदायिक मानकों का पालन
                    नहीं करती है। आपकी रिपोर्ट गोपनीय रखी जाएगी और आपके
                    द्वारा रिपोर्ट किए गए खाते में यह नहीं देखा जाएगा कि
                    उन्हें किसने रिपोर्ट किया है।
                  </p>
                </div>
                <div
                  class="post-actions-box red-bg d-none"
                  data-show="block-opt4"
                >
                  <p>
                    जब आप किसी को ब्लॉक करते हैं तो आपके पुराने पोस्ट और
                    कमेंट उनसे छुप जाते हैं। इसी तरह, उनके पोस्ट, कमेंट,
                    लाइक आदि आपके फ़ीड से गायब हो जाएंगे।
                  </p>
                </div>
                <div
                  class="post-actions-box green-bg d-none"
                  data-show="reject-opt4"
                >
                  <p>
                    इसका मतलब है कि आप पोस्ट को रिपोर्ट या उसे ब्लॉक नहीं
                    करना चाहते हैं और यदि इस प्रकार की पोस्ट आपके फेसबुक पर
                    दिखाई देती है तो आपको कोई आपत्ति नहीं है।
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- quiz section 3 :: END -->
      </div>
    </div>
  </section>
  <!-- section 3 :: END -->

  <!-- section 4 :: BEGIN -->
  <section class="page-section bg-dark pb-0 next-ch-detail">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-6">
          <h1 class="main-title f-46">
            आगे बढ़ने के लिए अगले चैप्टर पर क्लिक करें
          </h1>
          <div class="text-center m-auto">
            <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/vector-user8.png" />
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="box-with-icons">
            <div class="svg-section">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/help.png" />
            </div>
            <div class="box-desc">
              <div class="box-title">कानूनी मदद &amp; सहारा</div>
              <div class="arrow-section">
                <a href="<?php _e( CBAT_SITE_URL ); ?>/digital-security-ch-4">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/arrow-icon.png" width="25" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 4 :: END -->
</div>

<!-- scripts:: BEGIN -->
<script>
  jQuery("window").ready(function () {
    jQuery(".video-btn-section input").click(function () {
      var getAttr = jQuery(this).parent().attr("data-show");
      var getPost = jQuery(this)
        .parent()
        .parent()
        .parent()
        .parent()
        .parent()
        .parent()
        .parent()
        .attr("id");
      var getId = "#" + getPost;
      // console.log(getId + " .post-actions-box");
      jQuery(getId + " .post-actions-box").each(function () {
        var compareAttr = jQuery(this).attr("data-show");
        if (compareAttr == getAttr) {
          jQuery(getId + " .post-actions-box").addClass("d-none");
          jQuery(this).removeClass("d-none");
        }
      });
    });
  });
</script>
<!-- scripts:: END -->
<?php get_footer();?>
