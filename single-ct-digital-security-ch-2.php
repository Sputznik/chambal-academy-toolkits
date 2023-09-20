<?php
/**
 * This template will display digital security chapter two
 */
get_header();
?>
<div class="wrapper">
  <!-- bananer section :: BEGIN -->
  <section class="banner-section bg-dark bg-img ch-2">
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
          <h1 class="main-title">डिजिटल सुरक्षा</h1>
          <h1 class="main-title sub-title">लगाएंगे ध्यान तो होगा आसान</h1>
        </div>
      </div>
    </div>
    <!-- Button section :: BEGIN -->
    <div class="banner-btn-section">
      <div class="row mb-2">
        <div class="col-md-2 col-1 bg-red"></div>
        <div class="col-10 col-md-10 bg-red btn-radius">
          <button>अपनी ऑनलाइन सुरक्षा को</button>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-2 col-1 bg-red"></div>
        <div class="col-10 col-md-10 bg-red btn-radius">
          <button>बनाएं अपनी तरह, strong!</button>
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
  <div class="page-section bg-light-gray" id="nex-section">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-6">
          <div class="tag-box align-items-md-end align-items-center">
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
            src="https://player.vimeo.com/video/841764300?h=a9a6e05cbc&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
          >
          </iframe>
        </div>
        <div class="col-12 col-md-6">
          <p class="white-text mt-3 f-17px">
            जैसे हम अपने दैनिक जीवन में अपनी सुरक्षा को प्राथमिकता देते हैं,
            उसी तरह हमें अपनी ऑनलाइन सुरक्षा को भी एक समान स्तर की महत्ता
            देनी चाहिए। इस वीडियो में हमने ऑनलाइन सुरक्षा के बारे में जाना
            और इंटरनेट पर किसी भी जानकारी को साझा करने से पहले लेने वाली
            सावधानियों के बारे में सीखा।
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- section 1 section :: END -->

  <!-- section 2 section :: BEGIN -->
  <section class="page-section bg-dark" id="khel01">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="tag-box ms-4 purple-bg">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/section_khelo.png"
            width="25"
            class="me-1"
          />खेलो और सीखो
        </div>

        <div class="col-12 gray-box pb-0">
          <div class="row d-flex title-box align-items-end d-md-none pb-0">
            <div class="col-7">
              <h1 class="main-title">
                आप अपने घर को कैसे सुरक्षित रखेंगे?
              </h1>
            </div>
            <div class="col-5 title-box img-show pb-0 mb-0">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/vector-user2.png" width="100%" />
            </div>
          </div>
          <div class="row d-md-none">
            <div class="col-12">
              <p class="mb-4 white-text-100 f-20px">
                यह सच है कि हम आमतौर पर दिन के दौरान अपने घर का दरवाजा खुला
                रखते हैं
              </p>
              <p class="mb-4 white-text-100 f-20px">
                लेकिन रात के बारे में क्या...दरवाजे पर कुंडी लगाने के बाद ही
                हम सुरक्षित महसूस करते हैं ना? डिजिटल दुनिया में सुरक्षित
                रहना भी कुछ इसी तरह है। इसे बेहतर ढंग से समझने के लिए, आइए
                एक खेल खेलते हैं।
              </p>
            </div>
          </div>

          <div class="row d-md-flex align-items-center d-none">
            <div class="col-7 col-md-7 title-box">
              <h1 class="main-title">
                आप अपने घर को कैसे सुरक्षित रखेंगे?
              </h1>
              <p class="mb-4 white-text-100 f-20px">
                यह सच है कि हम आमतौर पर दिन के दौरान अपने घर का दरवाजा खुला
                रखते हैं
              </p>
              <p class="mb-4 white-text-100 f-20px">
                लेकिन रात के बारे में क्या...दरवाजे पर कुंडी लगाने के बाद ही
                हम सुरक्षित महसूस करते हैं ना? डिजिटल दुनिया में सुरक्षित
                रहना भी कुछ इसी तरह है। इसे बेहतर ढंग से समझने के लिए, आइए
                एक खेल खेलते हैं।
              </p>
            </div>
            <div class="col-5 col-md-5">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/vector-user2.png" />
            </div>
          </div>
        </div>
        <div class="pe-5 ps-5 slider-text-info">
          <div
            class="row d-flex align-items-center bg-dark-300 pb-md-4 set-border-bottom"
          >
            <div class="col-md-1"></div>
            <div class="col-12 col-md-10">
              <div class="box mt-md-4">
                <div class="box-desc">
                  <p class="f-20px yellow-text">
                    अपने घर का दरवाजा देखें। ताले जोड़ने के लिए स्लाइडर को
                    आगे की ओर धकेलें और देखें कि हर ताले का क्या मतलब है।
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="m-auto col-12 col-md-7 text-center">
            <div class="img-sliders"></div>
            <div class="timemachine">
              <form action="">
                <input type="range" />
                <div class="range-output"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-1 col-lg-2"></div>
          <div class="col-12 col-md-10 col-lg-8">
            <div class="owl-carousel owl-theme with-nav door-slider ">
              <div
                class="item yellow-bg slider-text-desc text-center f-24px"
              >
                <h4>स्लाइडर को आगे करें</h4>
              </div>
              <div class="item yellow-bg slider-text-desc text-center">
                <div class="d-flex align-items-center gap-4">
                  <img
                    src="<?php _e( CBAT_ASSET_IMAGES ); ?>/door-slider/icon1.png"
                    alt="ICON"
                  />
                  <p class="f-20px">
                    आपका दरवाजा अब बंद है। ठीक उसी तरह जब आपका फोन लॉक होता
                    है, तो यह तभी खुल सकता है जब किसी को इसका पासकोड पता हो।
                  </p>
                </div>
              </div>
              <div class="item yellow-bg slider-text-desc text-center">
                <div class="d-flex align-items-center gap-4">
                  <img
                    src="<?php _e( CBAT_ASSET_IMAGES ); ?>/door-slider/icon2.png"
                    alt="ICON"
                  />
                  <p class="f-20px">
                    ग्रिल डोर: ग्रिल डोर आपके घर में प्रवेश के लिए अंतिम
                    सुरक्षा प्रदान करता है। यह आपके बैंक खाते में प्रवेश
                    करने के लिए एक ओटीपी की तरह है।
                  </p>
                </div>
              </div>
              <div class="item yellow-bg slider-text-desc text-center">
                <div class="d-flex align-items-center gap-4">
                  <img
                    src="<?php _e( CBAT_ASSET_IMAGES ); ?>/door-slider/icon3.png"
                    alt="ICON"
                  />
                  <p class="f-20px">
                    पैडलॉक सुरक्षित: यह एक अतिरिक्त लॉक की तरह है जो आपके
                    ऑनलाइन बैंक खाते को खोलने के लिए आवश्यक एक मजबूत पासवर्ड
                    के समान है। बहुत अच्छा!
                  </p>
                </div>
              </div>
              <div class="item yellow-bg slider-text-desc text-center">
                <div class="d-flex align-items-center gap-4">
                  <img
                    src="<?php _e( CBAT_ASSET_IMAGES ); ?>/door-slider/icon4.png"
                    alt="ICON"
                  />
                  <p class="f-20px">
                    एक और बोल्ट: आपका दरवाजा अब डबल सिक्योर है। जैसे फोन को
                    खोलने के लिए अपने फिंगरप्रिंट का इस्तेमाल करना भी ऐसा ही
                    एक बोल्ट है।
                  </p>
                </div>
              </div>
            </div>
            <p class=""></p>
          </div>
          <div class="col-md-1 col-lg-2"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 2 section :: END -->

  <!-- section 2 section :: BEGIN -->
  <section
    class="page-section bg-light-gray password-knowledge"
    id="abhyas1"
  >
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="tag-box ms-4 purple-bg">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/title-icon.png"
            width="25"
            class="me-1"
          />अभ्यास
        </div>
        <div class="col-12 gray-box bg-dark pb-0">
          <div class="row d-flex align-items-center">
            <div class="col-12 col-md-7 title-box">
              <h1 class="main-title">
                पासवर्ड मजबूत - डिजिटल सुरक्षा का सबूत
              </h1>
              <p class="mb-4 white-text-100 f-20px">
                क्यों और कैसे दें अपने पासवर्ड की सुरक्षा पर ख़ास ध्यान 
              </p>
              <p class="white-text f-17px">
                ईमेल हो या फेसबुक, फ़ोन हो या कंप्यूटर - इंटरनेट पर बने आपके
                किसी भी अकाउंट के लिए पहली और सबसे ज़्यादा ध्यान देने वाली
                बात है एक स्ट्रोंग पासवर्ड रखना
              </p>
            </div>
            <div class="col-12 col-md-5 d-flex">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/vector-user6.png" />
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row password-hints-section">
            <div class="col-12 mb-4">
              <p
                class="yellow-text mt-4 secondary-fonts text-center f-20px"
              >
                उत्तर देखने के लिए कार्ड पर टैप करें
              </p>
            </div>
            <!-- Icon 1 :: BEGIN -->
            <div class="col-12 col-md-6">
              <div class="box-swipe">
                <div class="front-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon1.png" />
                </div>
                <div class="back-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon-black1.png" />
                  <p class="f-17px">
                    पासवर्ड को स्ट्रांग बनाने के लिए उसमें एक कैपिटल अक्षर,
                    एक स्माल अक्षर, कोई भी नंबर और फिर एक सिम्बल/स्पेशल
                    कैरेक्टर  होना चाहिये।
                  </p>
                </div>
              </div>
            </div>
            <!-- Icon 1 :: END -->
            <!-- Icon 2 :: BEGIN -->
            <div class="col-12 col-md-6">
              <div class="box-swipe">
                <div class="front-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon2.png" />
                </div>
                <div class="back-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon-black2.png" />
                  <p class="f-17px">
                    ध्यान रहे, यह पासवर्ड ऐसा न हो जिसका कोई अनुमान लगा सके
                    - जैसे नंबर में अपना birthdate या anniversary की तारिख
                    मत डालिये।
                  </p>
                </div>
              </div>
            </div>
            <!-- Icon 2 :: END -->
            <!-- Icon 3 :: BEGIN -->
            <div class="col-12 col-md-6">
              <div class="box-swipe">
                <div class="front-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon3.png" />
                </div>
                <div class="back-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon-black3.png" />
                  <p class="f-17px">
                    साथ ही यह भी ज़रूरी है की हम अपना पासवर्ड किसी को भी न
                    बताएं।
                  </p>
                </div>
              </div>
            </div>
            <!-- Icon 3 :: END -->
            <!-- Icon 4 :: BEGIN -->
            <div class="col-12 col-md-6">
              <div class="box-swipe">
                <div class="front-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon4.png" />
                </div>
                <div class="back-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon-black4.png" />
                  <p class="f-17px">
                    अगर आप किसी अन्य व्यक्ति के फ़ोन में अपना अकाउंट लॉग इन
                    (यानी अकाउंट में प्रवेश) कर रहे है तो इस बात का विशेष
                    ध्यान रखे कि अपना काम करने के बाद आप तुरंत लॉग आउट (यानी
                    अकाउंट से निकलना) भी करें।
                  </p>
                </div>
              </div>
            </div>
            <!-- Icon 4 :: END -->
            <!-- Icon 5 :: BEGIN -->
            <div class="col-12 col-md-6">
              <div class="box-swipe">
                <div class="front-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon5.png" />
                </div>
                <div class="back-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon-black5.png" />
                  <p class="f-17px">
                    किसी भी अन्य व्यक्ति के फ़ोन या लैपटॉप में ‘रेमेम्बेर
                    मी’ यानी ‘मुझे याद रखे’ आप्शन, पर क्लिक न करें।
                    "रेमेम्बेर मी" करने से आपकी लॉगइन जानकारी यानी ID और
                    पासवर्ड सेव हो जाती है और वह मोबाइल या लैपटॉप इस्तेमाल
                    करने वाला व्यक्ति आपका अकाउंट खोल सकता है।
                  </p>
                </div>
              </div>
            </div>
            <!-- Icon 5 :: END -->
            <!-- Icon 6 :: BEGIN -->
            <div class="col-12 col-md-6">
              <div class="box-swipe">
                <div class="front-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon6.png" />
                </div>
                <div class="back-side">
                  <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/case-study/icon-black6.png" />
                  <p class="f-17px">
                    आपके फ़ोन और कंप्यूटर में आपकी सारी सबसे कीमती जानकारी
                    saved होती है। इसलिए आप सबसे पहले अपने फोन और कंप्यूटर
                    में पासवर्ड लगाएं। ये उपकरण आपके कमरे में अलमारी की तरह
                    होने चाहिए। हर कोई आसानी से अंदर आकर आपकी अलमारी न खोलने
                    पाए।
                  </p>
                </div>
              </div>
            </div>
            <!-- Icon 6 :: END -->
          </div>
        </div>
        <div class="col-12 col-lg-10 m-auto">
          <div class="box-with-icons purple-box mb-0 h-152px">
            <div class="box-desc">
              <div class="box-title f-20px">
                "पासवर्ड क्या करें और क्या न करें" पोस्टर डाउनलोड करें<br
                  class="d-none d-md-block"
                />और अपने दोस्तों के साथ share करें
              </div>
            </div>
            <div class="svg-section">
              <a href="<?php _e( CBAT_ASSET_IMAGES ); ?>/Ch 02_Poster-V2.png" download>
                <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/down-arrow-btn.png" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 2 section :: END -->

  <!-- section 3 section :: BEGIN -->
  <section class="page-section bg-dark" id="khel02">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="tag-box ms-4 yellow-bg">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/section_khelo.png"
            width="25"
            class="me-1"
          />खेलो और सीखो
        </div>
        <div class="col-12 bg-light-gray p-0 borderRadius-10">
          <div class="row d-flex align-items-center m-0">
            <div class="col-12 col-md-6 title-box p-4">
              <h1 class="main-title mb-0">
                एक मजबूत पासवर्ड टाइप करें और जांचें कि यह कितना मजबूत है
              </h1>
              <!-- <p class="yellow-text">
                <span class="secondary-fonts">English</span> / अंग्रेजी में
                टाइप करें
              </p> -->
            </div>
            <div class="col-12 col-md-6 p-4 bg-dark-300 password-trick">
              <p class="white-text-100 f-17px mb-4">
                नीचे एक गेम दिया गया है । आपको बस इतना करना है कि पासवर्ड
                कितना मजबूत है यह देखने के लिए अंग्रेजी में एक पासवर्ड टाइप
                करना है । यह गेम आपको मजबूत पासवर्ड सेट करने का अभ्यास करने
                में भी मदद करेगा।
              </p>
              <div class="input-group mb-3 gap-1">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Type in English"
                  aria-label="Password"
                  aria-describedby="basic-addon2"
                  value=""
                  id="password"
                  name="password"
                />
                <span class="input-group-text" id="basic-addon2">
                  <i class="fa fa-arrow-circle-o-right"></i>
                </span>
              </div>
              <div
                class="d-flex align-items-center justify-content-between"
              >
                <!--<div class="password-sterngth"></div>-->
                <div
                  id="password-strength"
                  class="progress-bar"
                  role="progressbar"
                  aria-valuenow="40"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="
                    width: 0%;
                    width: 170px;
                    height: 20px;
                    border-radius: 12.3926px;
                    background-color: var(--ch-font-color);
                  "
                ></div>
                <!-- NOTE
                  =====================
                  Add class according password strength like :: super-strong, strong, weak, super-weak
                -->
                <p class="white-text">अंग्रेजी में टाइप करें</p>
              </div>
              <div class="password-instuctions row mt-3">
                <div class="col-12 mb-2">
                  <div class="d-flex align-items-center gap-2">
                    <div class="answer-trick low-case">
                      <div></div>
                      <img
                        src="<?php _e( CBAT_ASSET_IMAGES ); ?>/true.png"
                        width="35"
                        class="d-none"
                      />
                    </div>
                    <div class="answer-option">
                      <p class="yellow-text">a</p>
                      <p>स्माल अक्षर</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mb-2">
                  <div class="d-flex align-items-center gap-2">
                    <div class="answer-trick upper-case">
                      <div></div>
                      <img
                        src="<?php _e( CBAT_ASSET_IMAGES ); ?>/true.png"
                        width="35"
                        class="d-none"
                      />
                    </div>
                    <div class="answer-option">
                      <p class="yellow-text">A</p>
                      <p>कैपिटल अक्षर</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mb-2">
                  <div class="d-flex align-items-center gap-2">
                    <div class="answer-trick one-number">
                      <div></div>
                      <img
                        src="<?php _e( CBAT_ASSET_IMAGES ); ?>/true.png"
                        width="35"
                        class="d-none"
                      />
                    </div>
                    <div class="answer-option">
                      <p class="yellow-text">1</p>
                      <p>नंबर</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mb-2">
                  <div class="d-flex align-items-center gap-2">
                    <div class="answer-trick one-special-char">
                      <div></div>
                      <img
                        src="<?php _e( CBAT_ASSET_IMAGES ); ?>/true.png"
                        width="35"
                        class="d-none"
                      />
                    </div>
                    <div class="answer-option">
                      <p class="yellow-text">#</p>
                      <p>सिम्बल/स्पेशल कैरेक्टर</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Video section :: BEGIN -->
      <div class="row d-flex align-items-center mt-5 pt-4">
        <div class="tag-box ms-4">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/video-icon.png"
            width="25"
            class="me-1"
          />वीडियो देखें
        </div>
        <div class="col-12 gray-box">
          <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6 title-box">
              <h1 class="main-title">
                ऑनलाइन सुरक्षित रहने के लिए एक महत्वपूर्ण टिप
              </h1>
            </div>
            <div class="col-12 col-md-6">
              <iframe
                width="100%"
                height="410"
                class="iframe-video"
                src="https://player.vimeo.com/video/841764502?h=ca7371d72b&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
              >
              </iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- Video section :: END -->
    </div>
  </section>
  <!-- section 3 section :: END -->

  <!-- section 4 :: BEGIN -->
  <section class="page-section bg-light-gray" id="factor2">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="tag-box ms-4">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/video-icon.png"
            width="25"
            class="me-1"
          />वीडियो देखें
        </div>
        <div class="col-12 gray-box bg-dark">
          <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6 title-box col-lg-5">
              <h1 class="main-title">
                2-फैक्टर ऑथेंटिकेशन: डिजिटल सुरक्षा की डबल परत
              </h1>
              <p class="mb-4 white-text-100 f-27px otp-info">
                अपने अकाउंट को रखें <br />दोगुना सुरक्षित
              </p>
            </div>
            <div class="col-12 col-md-6 col-lg-7">
              <iframe
                width="100%"
                height="410"
                class="iframe-video"
                src="https://player.vimeo.com/video/845204066?h=d8cbb6ffa7&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
              >
              </iframe>
              <p class="white-text-200 f-17px">
                इस वीडियो में हमने देखा कि 2-फैक्टर ऑथेंटिकेशन कैसे काम करता
                है । इसमें दो चरण होते हैं: पहले, आप अपनी जानकारी को पासवर्ड
                या फोन पैटर्न लॉक जैसे चीज़ों से सुरक्षित करते हैं। दूसरा,
                जहां आप अपने फ़ोन पर एक विशेष कोड, जैसे कि OTP, प्राप्त करते
                हैं। यदि कोई आपका पासवर्ड जान भी लेता है, तो उसे आपके खाते
                में पहुँचने के लिए, आपके फोन या ईमेल से वह कोड चाहिए होगा
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 4 :: END -->

  <!-- section 5 :: BEGIN -->
  <section class="page-section bg-dark" id="otpimp">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="tag-box ms-4">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/video-icon.png"
            width="25"
            class="me-1"
          />वीडियो देखें
        </div>
        <div class="col-12 gray-box bg-light-gray">
          <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6 col-lg-5 title-box">
              <h1 class="main-title">
                मिल-बांट के रहना, पर PIN या OTP के मामले में नहीं 
              </h1>
              <p class="mb-4 white-text-100 otp-info">
                अपना PIN या OTP कभी भी, किसी को भी न दें
              </p>
            </div>
            <div class="col-12 col-md-6 col-lg-7">
              <iframe
                width="100%"
                height="410"
                class="iframe-video"
                src="https://player.vimeo.com/video/841764737?h=aceca6ba8f&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
              >
              </iframe>
              <p class="white-text-200 f-17px">
                इस वीडियो में हमने OTP के बारे में सीखा, जिसे "वन-टाइम
                पासवर्ड" कहा जाता है। यह विभिन्न ऑनलाइन लेन-देन और
                गतिविधियों में सुरक्षा को बढ़ाने के लिए महत्वपूर्ण है। OTP
                एक ऐसा पासवर्ड है जो हमें ऑनलाइन वित्तीय लेन-देन करते समय या
                कंप्यूटर या डिजिटल उपकरण पर नया खाता बनाने का प्रयास करते
                समय प्रदान किया जाता है।
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 5 :: END -->

  <!-- section 6 :: BEGIN -->
  <section class="page-section bg-light-gray otp-trick">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="tag-box ms-4 yellow-bg">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/section_khelo.png"
            width="25"
            class="me-1"
          />खेलो और सीखो
        </div>
        <div class="col-12 gray-box bg-dark set-box-shodow">
          <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6 title-box">
              <h1 class="main-title">
                आप अपना ओटीपी किसके साथ शेयर कर सकते हैं?
              </h1>
              <p class="yellow-text f-20px">( कम से कम एक चुनें )</p>
            </div>
            <div class="col-12 col-md-6 otp-options-selection">
              <div class="row">
                <div class="col-6">
                  <div class="box-swipe">
                    <div class="front-side">सरकार को</div>
                    <div class="back-side">
                      <p class="f-20px">गलत जवाब</p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="box-swipe">
                    <div class="front-side">अपने भाई को</div>
                    <div class="back-side">
                      <p class="f-20px">गलत जवाब</p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="box-swipe">
                    <div class="front-side">
                      अपनी मोबाइल नेटवर्क कम्पनी को
                    </div>
                    <div class="back-side">
                      <p class="f-20px">गलत जवाब</p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="box-swipe">
                    <div class="front-side">बैंक से आये हुए फ़ोन कॉल</div>
                    <div class="back-side">
                      <p class="f-20px">गलत जवाब</p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="box-swipe">
                    <div class="front-side">किसी को भी नहीं</div>
                    <div class="back-side true-answer">
                      <p class="f-20px">सही उत्तर!</p>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="box-swipe">
                    <div class="front-side">अपनी बेस्ट फ्रेंड को</div>
                    <div class="back-side">
                      <p class="f-20px">गलत जवाब</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pe-4 ps-4">
        <div
          class="row d-flex m-0 ps-md-3 pe-md-3 align-items-center yellow-bg w-100 pt-4 pb-4 set-border-bottom"
        >
          <div class="col-12">
            <div class="d-flex align-items-start gap-2 ps-md-5 pe-md-5">
              <img
                src="<?php _e( CBAT_ASSET_IMAGES ); ?>/remember.png"
                alt="Image"
                width="90"
              />
              <div class="desc">
                <h5><strong>याद रखें</strong></h5>
                <p class="f-20px">
                  आप जो कुछ भी ऑनलाइन साझा करते हैं वह किसी के द्वारा भी
                  एक्सेस किए जाने के लिए उपलब्ध है। और, कोई भी- आपका सबसे
                  अच्छा दोस्त या कोई अजनबी आपकी जानकारी चुरा सकता है और उसका
                  दुरुपयोग कर सकता है।
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 6 :: END -->

  <!-- section 7 :: BEGIN -->
  <section class="page-section bg-dark pb-0 next-ch-detail">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-6">
          <h1 class="main-title">
            आगे बढ़ने के लिए अगले चैप्टर पर क्लिक करें
          </h1>
          <div class="text-center m-auto">
            <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/vector-user7.png" />
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="box-with-icons">
            <div class="svg-section">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/report.png" width="25" />
            </div>
            <div class="box-desc">
              <div class="box-title">रिपोर्ट &amp; ब्लॉक करना</div>
              <div class="arrow-section">
                <a href="<?php _e( CBAT_SITE_URL ); ?>/ct/digital-security-ch-3"
                  ><img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/arrow-icon.png" width="25"
                /></a>
              </div>
            </div>
          </div>
          <div class="box-with-icons">
            <div class="svg-section">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/help.png" />
            </div>
            <div class="box-desc">
              <div class="box-title">कानूनी मदद &amp; सहारा</div>
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
  <!-- section 7 :: END -->

</div>

<!-- scripts:: BEGIN -->
<style type="text/css">
  .progress-bar {
    width: 170px;
    height: 20px;
    border-radius: 12.3926px;
    background-color: var(--ch-font-color);
  }
  .progress-bar-danger {
    background-color: #e90f10;
  }
  .progress-bar-warning {
    background-color: #ffad00;
  }
  .progress-bar-success {
    background-color: #02b502;
  }
</style>
<script>
jQuery(document).ready(function() {

  jQuery(".slider-boxes").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    items: 1,
  });

  // checkbox button active class
  jQuery(".radio-box .roundedBtn input:checkbox").click(function () {
    if (this.checked) {
      // alert("checked");
      // console.log(jQuery(this).parent().parent().parent().addClass("active"));
      jQuery(this).parent().parent().parent().addClass("active");
    } else {
      // alert("unchecked");
      jQuery(this).parent().parent().parent().removeClass("active");
    }
  });

  // door text slider
  jQuery(".owl-carousel.door-slider").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
    autoplay:true,
    autoplayTimeout:5000,
  });

});


  // image slider
  function jsonFlickrApi2(){
    var asset_path = "<?php _e( CBAT_ASSET_IMAGES ); ?>";
    var images = ["00_Door_Corrected.png", "01_Door_Corrected.png","02_Door_Corrected.png","03_Door_Corrected.png","04_Door_Corrected.png"];

    // console.log(images);

    image_elements = images.map(function (mg, i) {
      var img = document.createElement("img");
      img.src = `${asset_path}/${mg}`;
      // var numb = document.createElement("h2");
      // numb.textContent = i + 1;
      var fig = document.createElement("figure");
      fig.appendChild(img);
      // fig.appendChild(numb);
      document.querySelector(".img-sliders").appendChild(fig);
      return fig;
    });
    var slider = document.querySelector("input");
    var SetWidth = document.querySelector(".range-output");
    slider.min = 0;
    slider.max = slider.value = images.length - 1;
    var setVal = 25 * slider.value;
    // console.log(setVal);
    if (setVal < 95) {
      SetWidth.style.width = setVal + "%";
    } else {
      SetWidth.style.width = "100%";
    }
    // SetWidth.style.width = setVal + "%";
    image_elements[slider.max].style.opacity = 1;
    // slider.step = 0.01;
    slider.addEventListener("input", function (e) {
      // console.log(Math.floor(e.target.value));
      image_elements.forEach(function (e) {
        e.style.opacity = 0;
        // e.style.zIndex=-100;
        var setVal = 25 * slider.value;
        if (setVal < 8) {
          SetWidth.style.width = "7%";
        } else if (setVal < 95) {
          SetWidth.style.width = setVal + "%";
        } else {
          SetWidth.style.width = "100%";
        }
      });
      image_elements[Math.floor(e.target.value)].style.opacity = 1;
      // image_elements[Math.floor(e.target.value)].style.zIndex=100;
    });
  }

  jsonFlickrApi2();

</script>
<!--PAssword Check Script-->
<script type="text/javascript">
  let state = false;
  let password = document.getElementById("password");
  let passwordStrength = document.getElementById("password-strength");
  let lowCase = document.querySelector(".low-case img");
  let bgremover = document.querySelector(".low-case div");
  let bgremover2 = document.querySelector(".upper-case div");
  let bgremover3 = document.querySelector(".one-number div");
  let bgremover4 = document.querySelector(".one-special-char div");
  let upCase = document.querySelector(".upper-case img");
  let number = document.querySelector(".one-number img");
  let specialChar = document.querySelector(".one-special-char img");
  // let eightChar = document.querySelector(".eight-character i");

  password.addEventListener("keyup", function () {
    let pass = document.getElementById("password").value;
    checkStrength(pass);
  });

  function checkStrength(password) {
    let strength = 0;

    //If password contains both lower and uppercase characters
    if (password.match(/.*[a-z].*/)) {
      strength += 1;
      lowCase.classList.remove("d-none");
      lowCase.classList.add("d-block");
      bgremover.style.background = "transparent";
      bgremover.style.display = "none";
    } else {
      lowCase.classList.add("d-none");
      lowCase.classList.remove("d-block");
      bgremover.style.background = "#f2d493";
      bgremover.style.display = "block";
    }
    if (password.match(/.*[A-Z].*/)) {
      strength += 1;
      upCase.classList.remove("d-none");
      upCase.classList.add("d-block");
      bgremover2.style.background = "transparent";
      bgremover.style.display = "none";
    } else {
      upCase.classList.add("d-none");
      upCase.classList.remove("d-block");
      bgremover2.style.background = "#f2d493";
      bgremover.style.display = "block";
    }
    //If it has numbers and characters
    if (password.match(/([0-9])/)) {
      strength += 1;
      number.classList.remove("d-none");
      number.classList.add("d-block");
      bgremover3.style.background = "transparent";
      bgremover.style.display = "none";
    } else {
      number.classList.add("d-none");
      number.classList.remove("d-block");
      bgremover3.style.background = "#f2d493";
      bgremover.style.display = "block";
    }
    //If it has one special character
    if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
      strength += 1;
      specialChar.classList.remove("d-none");
      specialChar.classList.add("d-block");
      bgremover4.style.background = "transparent";
      bgremover.style.display = "none";
    } else {
      specialChar.classList.add("d-none");
      specialChar.classList.remove("d-block");
      bgremover4.style.background = "#f2d493";
      bgremover.style.display = "block";
    }

    // If value is less than 2
    if (strength < 2) {
      passwordStrength.classList.remove("progress-bar-warning");
      passwordStrength.classList.remove("progress-bar-success");
      passwordStrength.classList.add("progress-bar-danger");
      passwordStrength.style = "width: 25%";
    } else if (strength == 3) {
      passwordStrength.classList.remove("progress-bar-success");
      passwordStrength.classList.remove("progress-bar-danger");
      passwordStrength.classList.add("progress-bar-warning");
      passwordStrength.style = "width: 40%";
    } else if (strength == 4) {
      passwordStrength.classList.remove("progress-bar-warning");
      passwordStrength.classList.remove("progress-bar-danger");
      passwordStrength.classList.add("progress-bar-success");
      passwordStrength.style = "width: 70%";
    }
  }
</script>
<!-- scripts:: END -->
<?php get_footer();?>
