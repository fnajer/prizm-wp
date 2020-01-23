<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prizmbotspace
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- main wrapper -->
  <div class="wrapper">
    <header class="header">
      <div class="header__container container">
        <span class="logo"><?php get_template_part( 'template-parts/content', 'logo' ); ?></span>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	 => 'header__menu menu',
					'container' 	 => false,
				) );
				?>
				<?php 
					$translations = pll_the_languages( array( 'raw' => 1 ) );
					$currentLang = null; $langs = array();
					foreach ($translations as $lang) {
							if ($lang['current_lang']) 
								$currentLang = $lang;
							
							array_push($langs, "<li><a href='$lang[url]'><img class='language__img' src='$lang[flag]' alt='$lang[name]'/><span>" . strtoupper($lang['slug']) . "</span></a></li>");
					}
					echo "<div class='wrapper-dropdown wrapperDropdown' tabindex='1'>
									<div class='dropdown-head'>
										<img class='language__img' src='$currentLang[flag]' alt='$currentLang[name]'/>
										<span class='language__name'>" . strtoupper($currentLang['slug']) . "</span>
									</div>
									<ul class='dropdown dropdownList'>" .
										implode("", $langs)
									. "</ul>
								</div>";
				?>
        <!--echo get_template_directory_uri(); ?>/assets/img/lng-ch.svg">-->
        <button class="button button_theme_purple button_mr_none"><?php pll_e('get_in_touch'); ?></button>
        <div class="mobile-header">
          <div class="mobile-header__body">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'	 => 'mobile-menu',
							'container'		 =>	false,
						) );
						?>
            <div class="language-view wrapperMobileDropdown">
							<?php 
								$translations = pll_the_languages( array( 'raw' => 1 ) );
								$currentLang = null; $langs = array();
								foreach ($translations as $lang) {
										if ($lang['current_lang']) 
											$currentLang = $lang;
										
										array_push($langs, "<li class='" . ($lang['current_lang']  ? 'lang-active' : '') . "'><a href='$lang[url]'><img class='language__img' src='$lang[flag]' alt='$lang[name]'/><span>" . $lang['name'] . "</span></a></li>");
								}
							?>
              <div class="language-view__left-col">
                <img class='language__img' src='<?php echo $currentLang[flag]; ?>' alt='<?php echo $currentLang[name]; ?>'/>
                <?php pll_e('language_mobile'); ?>
              </div>
              <div class="language-view__current">
                <span class="language__name"><?php echo strtoupper($currentLang['slug']); ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M-9 18V-6h24v24z"/>
                      <path fill="#E0E0FF" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
                  </g>
                </svg>
              </div>
            </div>
            <button class="button button_theme_purple button_mr_none"><?php pll_e('get_in_touch'); ?></button>
          </div>
          <div class="mobile-header__language">
            <div class="language__head">
              <div class="language__back">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M16-6v24H-8V-6z"/>
                      <path fill="#9c42f5" fill-rule="nonzero" d="M6.71 2.12L2.83 6l3.88 3.88a.996.996 0 1 1-1.41 1.41L.71 6.7a.996.996 0 0 1 0-1.41L5.3.7a.996.996 0 0 1 1.41 0c.38.39.39 1.03 0 1.42z"/>
                  </g>
               </svg>
               <?php pll_e('menu_mobile'); ?>
              </div>
              <span><?php pll_e('language_mobile'); ?></span>
            </div>
						<?php
							echo "<ul class='language__list dropdownList'>" .
											implode("", $langs)
										. "</ul>";
						?>
          </div>
        </div>
        <div class="burger-btn"></div>
      </div>
    </header>
