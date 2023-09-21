<?php
  $links = array(
    'digital-security-start' => array(
      'text' => 'Home'
    ),
    'digital-security-ch-1' => array(
      'text' => 'अध्याय 01: प्राइवेसी'
    ),
    'digital-security-ch-2' => array(
      'text' => 'अध्याय 02: सुरक्षा'
    ),
    'digital-security-ch-3' => array(
      'text' => 'अध्याय 03: रिपोर्ट & ब्लॉक'
    ),
    'digital-security-ch-4' => array(
      'text' => 'अध्याय 04: कानून'
    ),
  );
?>
<!-- Menu section :: BEGIN -->
<div class="dropdown menu-dropdown dropup">
  <button
    class="btn btn-secondary dropdown-toggle sticky"
    type="button"
    id="dropdownMenuButton1"
    data-bs-toggle="dropdown"
    data-bs-auto-close="outside"
    aria-expanded="false"
  >
    <img src="<?php _e( CBAT_ASSET_IMAGES ); ?>/Header_burger.png" />
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li class="text-end">
      <div class="close-dropdown text-end">
        <img
          src="<?php _e( CBAT_ASSET_IMAGES ); ?>/Header_close_burger.png"
          width="20"
          type="button"
          aria-label="Close Dropdown"
          class="ms-auto close-floating-menu"
        />
      </div>
    </li>
    <?php foreach( $links as $slug => $link ): ?>
      <li class="dropdown">
        <a href="<?php _e( CBAT_SITE_URL.'/ct/'.$slug ); ?>" class="dropdown-item <?php if( is_single( $slug ) ){ echo 'active'; }?>">
          <?php _e( $link['text'] ); ?>
          <img
            src="<?php _e( CBAT_ASSET_IMAGES ); ?>/right-arrow.png"
            width="15"
            class="ms-auto"
          />
        </a>
      </li>
    <?php endforeach;?>
  </ul>
</div>
<!-- Menu section :: END -->
