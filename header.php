<!DOCTYPE html>
<html lang="ru">
 <head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	 
	<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
    wp_head();
  ?>
</head>
<body class="<?= (is_front_page(  ) && !is_home(  )) ? 'loading' : ''; ?>">

<div class="wrapper">
    <header class="header">
			<div class="header__container _container">
				<div class="header__body ">

					<a href="<?= (is_front_page(  ) && !is_home(  )) ? 'https://webnauts.pro' : get_bloginfo( 'url' ); ?>">
						<div class="header__icon a ">
							<div class="header__icon_logo">
								<img src="<?= get_custom_logo_url(  ); ?>" alt="<?= get_bloginfo( 'name' ); ?>">
							</div>
						</div>
					</a>
					<div class="header__menu menu__body <?= is_singular( 'cases' ) ? 'header__menu--cases' : ''; ?>">
						<div class="header__language a">
							<?php
                $translations = pll_the_languages(array('raw'=>1));
								foreach ($translations as $key => $translation) {
									?>
                    <div class="border_bottom <?= $translation['current_lang'] ? '_active' : ''; ?>">
                      <div class=" header_input_3d">
                        <a href="<?= $translation['url']; ?>">
                          <div class="label">
                            <?= ($translation['slug'] === 'ru') ? 'рус' : (($translation['slug'] === 'uk') ? 'укр' : $translation['slug']) ; ?>
                          </div>
                        </a>
                      </div>
							      </div>
									<?php
								}
							?>

							<div class="header__language_circle circle_20 a " >
								<div class="" id="circle_20" ></div>
							</div>
						</div>
						
						<?php
              $theme_location = (is_front_page(  ) && !is_home(  ) ) ? 'top_menu' : 'top_menu_inner';

							wp_nav_menu(
								array(
									'theme_location'  => $theme_location,
									'container'       => null,
									'menu_class'      => 'header__sidebar',
									'depth'           => 0,
								)
							);	
						?>
					</div>
					<button type="button" class="icon-menu">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>

			</div>
		</header>