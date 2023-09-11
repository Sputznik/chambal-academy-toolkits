<?php
/**
 * This template will display category page
 */
get_header();
?>
<div class="wrapper">
  <!-- bananer section :: BEGIN -->
  <section class="banner-section bg-dark bg-img ch-1">
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
          <h1 class="main-title">यह प्राइवेसी-प्राइवेसी</h1>
          <h1 class="main-title sub-title">क्या है?</h1>
        </div>
      </div>
    </div>
    <!-- Button section :: BEGIN -->
    <div class="banner-btn-section">
      <div class="row mb-2">
        <div class="col-md-2 col-1 bg-red"></div>
        <div class="col-10 col-md-10 bg-red btn-radius">
          <button>ऑनलाइन सुरक्षा का</button>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-2 col-1 bg-red"></div>
        <div class="col-10 col-md-10 bg-red btn-radius">
          <button>एक महत्वपूर्ण हिस्सा... </button>
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
            src="https://player.vimeo.com/video/841763530?h=08cf80ad0a&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
          >
          </iframe>
        </div>
        <div class="col-12 col-md-6">
          <p class="white-text f-17px">
            इस वीडियो ने हमें प्राइवेसी के बारे में सिखाया और इसकी
            महत्त्वपूर्णता पर जोर दिया, चाहे वह ऑनलाइन दुनिया हो या ऑफ़लाइन
            दुनिया। प्राइवेसी का मतलब होता है कि हम अपनी जानकारी केवल चुने
            हुए व्यक्तियों के साथ ही साझा करते हैं, सभी के साथ नहीं। हमने यह
            भी समझा कि इंटरनेट हमें यह अधिकार देता है कि हम किस जानकारी को
            दूसरों के साथ साझा करें ।
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- section 1 section :: END -->

  <!-- section 2 section :: BEGIN -->
  <section class="page-section bg-dark-300" id="khel01">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="tag-box ms-4 yellow-bg">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/section_khelo.png"
            width="25"
            class="me-1"
          />खेलो और सीखो
        </div>
        <div class="col-12 gray-box bg-dark pb-2 set-m">
          <div class="row d-flex align-items-center">
            <div class="col-12 col-md-12 title-box">
              <h1 class="main-title text-lowercase">
                इसमें से कौनसी जानकारी आप सबके
                <br class="d-none d-md-block" />साथ ऑनलाइन share करेंगे ?
              </h1>
              <p class="mb-md-4 yellow-text f-20px p-0">
                ( कम से कम एक चुनें )
              </p>
            </div>
            <div
              class="py-1 px-2 col-12 gray-box sharing-info-selection mb-3"
            >
              <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="box-swipe">
                    <div class="front-side">
                      <div class="d-flex align-items-center gap-2">
                        <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/pic.png" width="53" />
                        <p>अपनी तस्वीर</p>
                      </div>
                    </div>
                    <div class="back-side">
                      <p class="f-17px">
                        अपनी तस्वीरों को इंटरनेट पर साझा करने से पहले दो बार
                        सोचें क्योंकि उनका कोई भी गलत इस्तेमाल कर सकता है।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="box-swipe">
                    <div class="front-side">
                      <div class="d-flex align-items-center gap-2">
                        <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/name-card.png" width="53" />
                        <p>अपना नाम</p>
                      </div>
                    </div>
                    <div class="back-side">
                      <p class="f-17px">
                        आप अपना नाम ऑनलाइन शेयर कर सकते हैं लेकिन आपके पास
                        इसे शेयर न करने का विकल्प भी है ।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="box-swipe">
                    <div class="front-side">
                      <div class="d-flex align-items-center gap-2">
                        <img
                          src="<?php _e( CBAT_ASSET_IMAGES ); ?>/contact-numb.png"
                          width="53"
                        />
                        <p>अपना फोन नंबर</p>
                      </div>
                    </div>
                    <div class="back-side">
                      <p class="f-17px">
                        किसी अनजान व्यक्ति को अपना फ़ोन नंबर साझा करने से
                        पहले दो बार सोचें. कोई व्यक्ति इसका दुरुपयोग कर सकता
                        है और आपको परेशान कर सकता है
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="box-swipe">
                    <div class="front-side">
                      <div class="d-flex align-items-center gap-2">
                        <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/location.png" width="53" />
                        <p>अपना पता</p>
                      </div>
                    </div>
                    <div class="back-side">
                      <p class="f-17px">
                        अपने घर का पता किसी अनजान के साथ साझा नहीं करना
                        चाहिए क्योंकि यह व्यक्तिगत सुरक्षा के लिए खतरा बन
                        सकता है
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="box-swipe">
                    <div class="front-side">
                      <div class="d-flex align-items-center gap-2">
                        <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/bank-acc.png" width="53" />
                        <p>बैंक खाते की संख्या</p>
                      </div>
                    </div>
                    <div class="back-side">
                      <p class="f-17px">
                        वित्तीय धोखाधड़ी के जोखिम के कारण बैंक खाते का विवरण
                        साझा करना असुरक्षित हो सकता है।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="box-swipe">
                    <div class="front-side">
                      <div class="d-flex align-items-center gap-2">
                        <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/pan.png" width="53" />
                        <p>PAN/ आधार</p>
                      </div>
                    </div>
                    <div class="back-side">
                      <p class="f-17px">
                        अपना पैन/आधार नंबर किसी के साथ साझा करने से वित्तीय
                        धोखाधड़ी या व्यक्तिगत डेटा का उल्लंघन हो सकता है
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pe-md-4 ps-md-4 ps-0 yaad-rakhe-box">
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
                    अच्छा दोस्त या कोई अजनबी आपकी जानकारी चुरा सकता है और
                    उसका दुरुपयोग कर सकता है।
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 2 section :: END -->

  <!-- section 2 section :: BEGIN -->
  <section class="page-section bg-dark" id="fbprivacy">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="tag-box align-items-md-end align-items-center ms-4">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/video-icon.png"
            class="me-1"
            width="25"
          />वीडियो देखें
        </div>
        <div class="col-12 gray-box">
          <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6 title-box">
              <h1 class="main-title">मुझसे दोस्ती करोगे?</h1>
              <p class="mb-4 white-text-100 gray-sub-heading">
                फ़ेसबुक पर प्राइवेसी लगाने के कुछ आसान तरीके
              </p>
              <p class="white-text f-17px d-none d-md-block">
                इस वीडियो में, हमने विभिन्न सोशल मीडिया प्लेटफॉर्म का उपयोग
                करते समय गोपनीयता सुनिश्चित करने के बारे में सीखा, और फेसबुक
                पर प्राइवेसी सेटिंग को समझा कि कैसे कोई अपनी प्रोफ़ाइल को
                लॉक करके उसका दुरुपयोग होने से रोक सकते हैं |
              </p>
            </div>
            <div class="col-12 col-md-6">
              <iframe
                width="100%"
                height="410"
                class="iframe-video"
                src="https://player.vimeo.com/video/841764069?h=5ecc0af07a&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
              >
              </iframe>
              <div class="box-with-icons h-127px mt-3 d-none d-md-flex">
                <div class="svg-section">
                  <img
                    src="<?php _e( CBAT_ASSET_IMAGES ); ?>/video.png"
                    width="56"
                    height="56"
                  />
                </div>
                <div class="box-desc">
                  <div class="box-title text-center flex-set">
                    अपनी प्रोफ़ाइल को कैसे<br class="d-none d-md-block" />
                    लॉक करें? वीडियो
                    <br class="d-none d-md-block" />फिर से देखें
                  </div>
                  <div class="arrow-section">
                    <a
                      href="https://vimeo.com/844141198/5545902392?share=copy"
                      target="_blank"
                    >
                      <img
                        src="<?php _e( CBAT_ASSET_IMAGES ); ?>/arrow-icon.png"
                        width="30"
                        height="30"
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 d-block d-md-none">
              <p class="white-text f-17px">
                इस वीडियो में, हमने विभिन्न सोशल मीडिया प्लेटफॉर्म का उपयोग
                करते समय गोपनीयता सुनिश्चित करने के बारे में सीखा, और फेसबुक
                पर प्राइवेसी सेटिंग को समझा कि कैसे कोई अपनी प्रोफ़ाइल को
                लॉक करके उसका दुरुपयोग होने से रोक सकते हैं |
              </p>
              <div class="box-with-icons h-127px mt-3">
                <div class="svg-section">
                  <img
                    src="<?php _e( CBAT_ASSET_IMAGES ); ?>/video.png"
                    width="56"
                    height="56"
                  />
                </div>
                <div class="box-desc">
                  <div class="box-title">
                    अपनी प्रोफ़ाइल को कैसे लॉक करें? वीडियो फिर से देखें
                  </div>
                  <div class="arrow-section">
                    <a
                      href="https://vimeo.com/844141198/5545902392?share=copy"
                      target="_blank"
                    >
                      <img
                        src="<?php _e( CBAT_ASSET_IMAGES ); ?>/arrow-icon.png"
                        width="30"
                        height="30"
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 2 section :: END -->

  <!-- section 3 section :: BEGIN -->
  <section class="page-section bg-dark-300" id="khel02">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="tag-box ms-4 yellow-bg">
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/section_khelo.png"
            width="25"
            class="me-1"
          />खेलो और सीखो
        </div>
        <div class="col-12 gray-box pb-0">
          <div class="row d-flex align-items-start">
            <div
              class="row d-flex title-box align-items-start d-md-none pb-0"
            >
              <div class="col-5 title-box img-show pb-0 mb-0">
                <img
                  src="<?php _e( CBAT_ASSET_IMAGES ); ?>/vector-user4.png"
                  width="100%"
                  class="height-set-img"
                />
              </div>
              <div class="col-7">
                <h1 class="main-title f-27px">
                  फ़ेसबुक और प्राइवेसी- मैं, मेरे दोस्त या सब?
                </h1>
                <p class="yellow-text mb-2">
                  नीचे उत्तर देखने के लिए एक-एक करके टिक करें
                </p>
              </div>
            </div>
            <div class="col-12 col-md-6 title-box d-none d-md-block">
              <h1 class="main-title">
                फ़ेसबुक और प्राइवेसी- मैं, मेरे दोस्त या सब?
              </h1>
              <p class="yellow-text f-20px">( कम से कम एक चुनें )</p>
              <div class="text-center m-auto">
                <img
                  src="<?php _e( CBAT_ASSET_IMAGES ); ?>/vector-user4.png"
                  class="height-set-img"
                />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="owl-carousel owl-theme with-nav">
                <div class="item" id="postset1">
                  <div class="yellow-box">
                    <h5 class="text-black">
                      आपकी पोस्ट (फोटो / वीडियो / लोकेशन) कौन देख सकता है?
                    </h5>
                    <div class="post-options">
                      <ul>
                        <li>
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/public.png"
                            width="25"
                            alt="PUBLIC"
                          />पब्लिक
                          <div class="roundedBtn ms-auto">
                            <input
                              type="radio"
                              value="None"
                              id="post-option1"
                              name="postcheck1"
                            />
                            <label for="post-option1"></label>
                          </div>
                        </li>
                        <li>
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/friends.png"
                            width="25"
                            alt="Friends"
                          />दोस्त
                          <div class="roundedBtn ms-auto">
                            <input
                              type="radio"
                              value="None"
                              id="post-option2"
                              name="postcheck1"
                            />
                            <label for="post-option2"></label>
                          </div>
                        </li>
                        <li>
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/friends.png"
                            width="25"
                            alt="Friends except"
                          />इनके अलावा सभी दोस्त
                          <div class="roundedBtn ms-auto">
                            <input
                              type="radio"
                              value="None"
                              id="post-option3"
                              name="postcheck1"
                            />
                            <label for="post-option3"></label>
                          </div>
                        </li>
                        <li>
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/user.png"
                            width="25"
                            alt="Specific friends"
                          />चुनिंदा दोस्त
                          <div class="roundedBtn ms-auto">
                            <input
                              type="radio"
                              value="None"
                              id="post-option4"
                              name="postcheck1"
                            />
                            <label for="post-option4"></label>
                          </div>
                        </li>
                        <li>
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/lock-icon.png"
                            width="25"
                            alt="Only me"
                          />सिर्फ़ मैं
                          <div class="roundedBtn ms-auto">
                            <input
                              type="radio"
                              value="None"
                              id="post-option5"
                              name="postcheck1"
                            />
                            <label for="post-option5"></label>
                          </div>
                        </li>
                      </ul>
                    </div>

                    <div class="post-option-desc">
                      <p
                        class="description yellow-bg d-flex align-items-center"
                        data-id="post-option0"
                      >
                        यह देखने के लिए कि ऊपर दिये गये ऑप्शन्स का क्या अर्थ
                        है, उन पर एक-एक करके क्लिक करें
                      </p>
                      <div
                        class="description noactive"
                        data-id="post-option1"
                      >
                        <h5 class="d-flex align-items-start gap-3 mb-32">
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/public.png"
                            width="25"
                            class="choosen-img"
                            alt="PUBLIC"
                          />
                          <strong>पब्लिक / Public</strong>
                        </h5>
                        यह विकल्प फ़ेसबुक पर मौजूद या उससे बाहर के कोई भी
                        व्यक्ति को यह देखने की अनुमति देता है कि आपने क्या
                        पोस्ट किया है |
                      </div>
                      <div
                        class="description noactive"
                        data-id="post-option2"
                      >
                        <h5 class="d-flex align-items-start gap-3 mb-32">
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/friends.png"
                            width="25"
                            class="choosen-img"
                            alt="PUBLIC"
                          />
                          <strong>दोस्त /Friends</strong>
                        </h5>
                        यह विकल्प केवल आपके उन दोस्तों को अनुमति देता है जो
                        आपके फेसबुक पर हैं, यह देखने के लिए कि आपने क्या
                        पोस्ट किया है |
                      </div>
                      <div
                        class="description noactive"
                        data-id="post-option3"
                      >
                        <h5 class="d-flex align-items-start gap-3 mb-32">
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/friends.png"
                            width="25"
                            class="choosen-img"
                            alt="PUBLIC"
                          />
                          <strong
                            >इनके अलावा सभी दोस्त / Friends except</strong
                          >
                        </h5>
                        यह विकल्प आपको अपने दोस्तों में से उन लोगों को चुनने
                        की अनुमति देता है जिनसे आप अपनी पोस्ट को छिपाना
                        चाहते हैं |
                      </div>
                      <div
                        class="description noactive"
                        data-id="post-option4"
                      >
                        <h5 class="d-flex align-items-start gap-3 mb-32">
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/user.png"
                            width="25"
                            class="choosen-img"
                            alt="PUBLIC"
                          />
                          <strong>चुनिंदा दोस्त / Specific friends</strong>
                        </h5>
                        यह विकल्प आपको उन दोस्तों को चुनने की अनुमति देता है
                        जिन्हें आप दिखाना चाहते हैं कि आपने क्या पोस्ट किया
                        है |
                      </div>
                      <div
                        class="description noactive"
                        data-id="post-option5"
                      >
                        <h5 class="d-flex align-items-start gap-3 mb-32">
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/lock.png"
                            width="25"
                            class="choosen-img"
                            alt="PUBLIC"
                          />
                          <strong>सिर्फ़ मैं / Only me</strong>
                        </h5>
                        यह विकल्प आपको जो कुछ भी आपने पोस्ट किया है उसे निजी
                        रखने की अनुमति देता है। फेसबुक पर या फेसबुक के बाहर
                        कोई भी इसे नहीं देख पाएगा।
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item" id="postset2">
                  <div class="yellow-box">
                    <h5 class="text-black">
                      आपकी प्रोफाइल पर कौन पोस्ट कर सकता है?
                    </h5>
                    <div class="post-options">
                      <ul>
                        <li>
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/friends.png"
                            width="25"
                            alt="दोस्त"
                          />दोस्त
                          <div class="roundedBtn ms-auto">
                            <input
                              type="radio"
                              value="None"
                              id="post-option11"
                              name="postcheck2"
                            />
                            <label for="post-option11"></label>
                          </div>
                        </li>
                        <li>
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/lock.png"
                            width="25"
                            alt="सिर्फ़ मैं"
                          />सिर्फ़ मैं
                          <div class="roundedBtn ms-auto">
                            <input
                              type="radio"
                              value="None"
                              id="post-option12"
                              name="postcheck2"
                            />
                            <label for="post-option12"></label>
                          </div>
                        </li>
                      </ul>
                    </div>

                    <div class="post-option-desc">
                      <p
                        class="description yellow-bg d-flex align-items-center"
                        data-id="post-option0"
                      >
                        यह देखने के लिए कि ऊपर दिये गये ऑप्शन्स का क्या अर्थ
                        है, उन पर एक-एक करके क्लिक करें
                      </p>
                      <div
                        class="description noactive"
                        data-id="post-option11"
                      >
                        <h5 class="d-flex align-items-start gap-3 mb-32">
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/friends.png"
                            width="25"
                            class="choosen-img"
                            alt="Friends"
                          />
                          <strong>दोस्त /Friends</strong>
                        </h5>
                        यह विकल्प केवल आपके उन दोस्तों को अनुमति देता है जो
                        आपके फेसबुक पर हैं, यह देखने के लिए कि आपने क्या
                        पोस्ट किया है
                      </div>
                      <div
                        class="description noactive"
                        data-id="post-option12"
                      >
                        <h5 class="d-flex align-items-start gap-3 mb-32">
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/lock.png"
                            width="25"
                            class="choosen-img"
                            alt="Only Me"
                          />
                          <strong>सिर्फ़ मैं / Only me</strong>
                        </h5>
                        यह विकल्प आपको जो कुछ भी आपने पोस्ट किया है उसे निजी
                        रखने की अनुमति देता है। फेसबुक पर या फेसबुक के बाहर
                        कोई भी इसे नहीं देख पाएगा।
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item" id="postset3">
                  <div class="yellow-box">
                    <h5 class="text-black">
                      आपको फ्रेंड रिक्वेस्ट कौन भेज सकता है?
                    </h5>
                    <div class="post-options">
                      <ul>
                        <li>
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/public.png"
                            width="25"
                            alt="हर कोई"
                          />हर कोई
                          <div class="roundedBtn ms-auto">
                            <input
                              type="radio"
                              value="None"
                              id="post-option21"
                              name="postcheck3"
                            />
                            <label for="post-option21"></label>
                          </div>
                        </li>
                        <li>
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/friends.png"
                            width="25"
                            alt="Friends of Friends"
                          />दोस्तों के दोस्त
                          <div class="roundedBtn ms-auto">
                            <input
                              type="radio"
                              value="None"
                              id="post-option22"
                              name="postcheck3"
                            />
                            <label for="post-option22"></label>
                          </div>
                        </li>
                      </ul>
                    </div>

                    <div class="post-option-desc">
                      <p
                        class="description yellow-bg d-flex align-items-center"
                        data-id="post-option0"
                      >
                        यह देखने के लिए कि ऊपर दिये गये ऑप्शन्स का क्या अर्थ
                        है, उन पर एक-एक करके क्लिक करें
                      </p>
                      <div
                        class="description noactive"
                        data-id="post-option21"
                      >
                        <h5 class="d-flex align-items-start gap-3 mb-32">
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/public.png"
                            width="25"
                            class="choosen-img"
                            alt="Everyone"
                          />
                          <strong>हर कोई / Everyone</strong>
                        </h5>
                        फेसबुक पर अकाउंट रखने वाला कोई भी व्यक्ति आपको
                        फ्रेंड रिक्वेस्ट भेज सकता है ।
                      </div>
                      <div
                        class="description noactive"
                        data-id="post-option22"
                      >
                        <h5 class="d-flex align-items-start gap-3 mb-32">
                          <img
                            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/friends.png"
                            width="25"
                            class="choosen-img"
                            alt="Friends of Friends"
                          />
                          <strong
                            >दोस्तों के दोस्त / Friends of friends</strong
                          >
                        </h5>
                        आपके दोस्त के दोस्त जो फेसबुक पर हैं, आपको फ्रेंड
                        रिक्वेस्ट भेज सकते हैं ।
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 3 section :: END -->

  <!-- section 4 section :: BEGIN -->
  <section class="page-section bg-dark pt-5 pb-0 next-ch-detail">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-6">
          <h1 class="main-title">
            आगे बढ़ने के लिए अगले चैप्टर पर क्लिक करें
          </h1>
          <div class="text-center m-auto">
            <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/vector-user5.png" />
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="box-with-icons">
            <div class="svg-section">
              <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/security.png" />
            </div>
            <div class="box-desc">
              <div class="box-title">सिक्योरिटी ( सुरक्षा )</div>
              <div class="arrow-section">
                <a href="<?php _e( CBAT_SITE_URL ); ?>/digital-security-ch-2">
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
              <div class="box-title">रिपोर्ट &amp; ब्लॉक करना</div>
              <div class="arrow-section">
                <a href="<?php _e( CBAT_SITE_URL ); ?>/digital-security-ch-3">
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
  <!-- section 4 section :: END -->

</div>

<!-- scripts:: BEGIN -->

<script>
  jQuery(document).ready(function() {

    jQuery(".owl-carousel").owlCarousel({
      loop: false,
      margin: 10,
      nav: true,
      navText: [
        "<img src='<?php _e( CBAT_ASSET_IMAGES ); ?>/left-arrow.png'>",
        "<img src='<?php _e( CBAT_ASSET_IMAGES ); ?>/right-arrow-carousal.png'>",
      ],
      items: 1,
    });

    // Post description show
    jQuery("window").ready(function () {
      jQuery(".post-options li .roundedBtn input").click(function () {
        var getMainID = jQuery(this)
          .parent()
          .parent()
          .parent()
          .parent()
          .parent()
          .parent()
          .attr("id");
        var getPostId = jQuery(this).attr("id");
        jQuery(this).attr("checked", true);
        jQuery(this).parent().addClass("active-radio");
        console.log(jQuery(this).parent());
        jQuery("#" + getMainID + " .post-option-desc .description").each(
          function () {
            var getId = jQuery(this).attr("data-id");
            if (getId == getPostId) {
              jQuery("#" + getMainID + " .post-option-desc .description").addClass(
                "noactive"
              );
              jQuery(this).removeClass("noactive");
              console.log("class removed");
            }
          }
        );
      });
    });

    /* jQuery(window).scroll(function() {
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 500) {
            //clearHeader, not clearheader - caps H
            jQuery(".fixed-link").addClass("sticky");
        }else{
            jQuery(".fixed-link").removeClass("sticky");
        }
    }); */

  });
</script>
<!-- scripts:: END -->
<?php get_footer(); ?>
