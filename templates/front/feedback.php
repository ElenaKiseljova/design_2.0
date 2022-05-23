<?php 
  $title = get_sub_field('title') ?? '';

  $image = get_sub_field('image') ?? '';
  $text_left = get_sub_field('text_left') ?? '';
  $telegram = get_sub_field('telegram') ?? '';

  $text_right = get_sub_field('text_right') ?? '';
  $mailto = get_sub_field('mailto') ?? '';
?>

<section class="feedback <?= is_singular( 'cases' ) ? 'white' : ''; ?>" id="feedback" data-scroll-section>
  <div class="container">
    <div class="feedback__inner">
      <div class="feedback__left">
        <h2 class="feedback__title title"><?= $title; ?></h2>

        <div class="feedback__image">
          <?php if ( $image && !empty($image) ) : ?>
            <img src="<?= $image; ?>" alt="<?= get_bloginfo( 'name' ); ?>" />
          <?php endif; ?>          
        </div>

        <div class="feedback__info links">
          <h5 class="feedback__head"><?= $text_left; ?></h5>

          <?php if ( $telegram && !empty($telegram) ) : ?>
            <a
              class="feedback__link a links__hover"
              href="https://telegram.im/<?= $telegram; ?>"
              target="_blank"
            >
              <span class="links__front"><?= $telegram; ?></span>
              <span class="links__back"><?= $telegram; ?></span>
            </a>
          <?php endif; ?>          
        </div>
      </div>

      <div class="feedback__right">
        <p class="feedback__descr">
          <?= $text_right; ?>
        </p>
        <div class="feedback__form">
          <form class="form links" data-full="0">
            <label class="form__label a">
              <div class="form__border form__border--top"></div>
              <input
                id="form__name"
                class="form__input"
                name="name"
                type="text"
                placeholder="<?= __( 'Your Name', 'design' ); ?>"
              />
              <span class="form__error"><?= __( 'Invalid name', 'design' ); ?></span>
            </label>
            <label class="form__label a">
              <div class="form__border form__border--top"></div>
              <input
                id="form__email"
                class="form__input"
                name="email"
                type="email"
                placeholder="<?= __( 'E-mail', 'design' ); ?>"
              />
              <span class="form__error"><?= __( 'There is no such address', 'design' ); ?></span>
            </label>
            <label class="form__label a">
              <div class="form__border form__border--top"></div>
              <textarea
                class="form__input"
                name="message"
                placeholder="<?= __( 'Message', 'design' ); ?>"
              ></textarea>
              <div class="form__border form__border--bottom"></div>
            </label>

            <?php if ( $mailto && !empty($mailto) ) : ?>
              <input type="hidden" name="mailto" value="<?= $mailto; ?>">
            <?php endif; ?>
          </form>
          <button class="feedback__btn a links__hover">
            <span class="links__front" data-send-it="<?= __( 'SEND IT', 'design' ); ?>" data-send-again="<?= __( 'SEND AGAIN', 'design' ); ?>"><?= __( 'SEND IT', 'design' ); ?></span>
            <span class="links__back" data-send-it="<?= __( 'SEND IT', 'design' ); ?>" data-send-again="<?= __( 'SEND AGAIN', 'design' ); ?>"><?= __( 'SEND IT', 'design' ); ?></span>
          </button>
          
          <div class="feedback__message">            
          </div>
          <template id="feedback-success-message">
            <h3><?= __( 'Thank you for the request!', 'design' ); ?></h3>
            <p>
              <?= __( 'Your message has been send successfully.', 'design' ); ?> 
              <br />
              <?= __( 'We will contact you soon.', 'design' ); ?>
            </p>
          </template>
          <template id="feedback-error-message">
            <h3><?= __( 'Something went wrong ...', 'design' ); ?></h3>
            <p><?= __( 'Your message has not been sent', 'design' ); ?></p>
          </template>
        </div>
      </div>
    </div>
  </div>
</section>