<div class="header__lang lang links">
  <ul class="lang__list">
    <?php
      $translations = pll_the_languages(array('raw'=>1)) ?? [];
      foreach ($translations as $key => $translation) {
          $lang = '';

          switch ($translation['slug']) {
            case 'uk':
              $lang = 'ukr';

              break;

            case 'ru':
              $lang = 'ru';

              break;
            
            case 'gb':
              $lang = 'eng';

              break;

            case 'en':
              $lang = 'eng';

              break;
            
            default:
              $lang = $translation['slug'];

              break;
          }
        ?>
          <li class="lang__item lang__item--<?= $lang; ?>">
            <a href="<?= $translation['url']; ?>" class="lang__link <?= $translation['current_lang'] ? 'lang__link--active' : ''; ?> links__hover a">
              <span class="lang__text links__front"><?= strtoupper($lang); ?></span>
              <span class="lang__text links__back"><?= strtoupper($lang); ?></span>
            </a>
          </li>
        <?php
      }
    ?>
  </ul>
</div>