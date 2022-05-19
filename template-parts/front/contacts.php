<?php 
  $frontpage_id = get_option( 'page_on_front' );
  $contacts = get_field( 'contacts',  $frontpage_id);

  $title = get_sub_field('title');
  $text_left = get_sub_field('text_left');
  $text_right = get_sub_field('text_right');
  $mailto = get_sub_field('mailto');
?>

<section class="contact_us" id="contacts">
  <div class="contact_us__container _container">
    <div class="contact_us__body">

      <div class="contact_us__body__before  circle_20 a">
        <div class="" id="circle_20"></div>
      </div>

      <h2 class="contact_us_title">
        <?= $title; ?>
      </h2>

      <div class="contact_us_tel">
        <div class="contact_us_tel_top">|</div>

        <div class="contact_us_tel_p">
          <?= $text_left; ?>
        </div>
        <div class="contact_us_tel_num">

          <div class="border_bottom">
            <a href="https://telegram.im/<?= $contacts['telegram']; ?>"
              class="a contact_us_tel_num_3d"><?= $contacts['telegram']; ?></a>
          </div>

        </div>
      </div>
      <!---->
      <div class="contact_us_subtitle__container">

        <div class="contact_us_subtitle">
          <?= $text_right; ?>
        </div>
        <form class="contact_us_subtitle_form">
          <div class="input" data-error-message="<?php _e( 'Некорректное Имя', 'design' ); ?>">
            <div class="input__border__top"></div>
            <input type="text" name="name" placeholder="<?php _e( 'YOUR NAME', 'design' ); ?>" id="contact_us_input_1">
          </div>
          <div class="input" data-error-message="<?php _e( 'Такого адреса не существует', 'design' ); ?>">
            <div class="input__border__top"></div>
            <input type="email" name="email" placeholder="<?php _e( 'E-MAIL', 'design' ); ?>" id="contact_us_input_2">
          </div>
          <div class="input input_l">
            <div class="input__border__top"></div>
            <textarea name="message" placeholder="<?php _e( 'MESSAGE', 'design' ); ?>"></textarea>
            <div class="input__border__bottom"></div>
          </div>
          <input type="hidden" name="security" value="<?= wp_create_nonce( 'design_nonce' ); ?>">
          <?php 
            if (!empty($mailto)) {
              ?>
                <input type="hidden" name="mailto" value="<?= $mailto; ?>">
              <?php
            }
          ?>
        </form>

        <!---->
        <div class="contact_us_subtitle_unshow">
          <p></p>
          <template id="contact_us_subtitle_unshow_success">
            <?php _e( 'Thank you!', 'design' ); ?>
            <br>
            <?php _e( 'Your message has been send successfully', 'design' ); ?>
          </template>
          <template id="contact_us_subtitle_unshow_error">
            <?php _e( 'Something went wrong...', 'design' ); ?>
            <br>
            <?php _e( 'Your message was not sent', 'design' ); ?>
          </template>
        </div>

        <div class="contact_us_subtitle_unshow_p">
          <p></p>
          <template id="contact_us_subtitle_unshow_p_success">
            <?php _e( 'We will contact you soon', 'design' ); ?>
          </template>
          <template id="contact_us_subtitle_unshow_p_error">
            <?php _e( 'Try again or contact us in another way', 'design' ); ?>
          </template>
        </div>
      </div>
      <div class="border_bottom a">
        <button class="contact_us_button  contact_us_button_3d" data-full="0"
          data-success="<?php _e( 'SEND AGAIN', 'design' ); ?>" data-default="<?php _e( 'SEND IT', 'design' ); ?>">
          <?php _e( 'SEND IT', 'design' ); ?>
        </button>
      </div>

    </div>
  </div>
</section>