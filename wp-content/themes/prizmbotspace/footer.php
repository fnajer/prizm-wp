<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prizmbotspace
 */

?>
	<footer class="footer container">
      <div class="footer-top">
        <span class="logo"><?php get_template_part( 'template-parts/content', 'logo' ); ?></span>
				<?php 
					$translations = pll_the_languages( array( 'raw' => 1 ) );
					$currentLang = null; $langs = array();
					foreach ($translations as $lang) {
							if ($lang['current_lang']) 
								$currentLang = $lang;
							
							array_push($langs, "<li><a href='$lang[url]'><img src='$lang[flag]' alt='$lang[name]'/></a></li>");
					}
					echo "<div class='wrapper-dropdown wrapperDropdown' tabindex='1'>
									<div class='dropdown-head'>
										<img class='language__img' src='$currentLang[flag]' alt='$currentLang[name]'/>
									</div>
									<ul class='dropdown dropdownList'>" .
										implode("", $langs)
									. "</ul>
								</div>";
				?>
        <form class="email-form">
          <input type="text" placeholder="Email"/>
          <submit>
            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
              <g fill="none" fill-rule="evenodd">
                  <path d="M-9 18V-6h24v24z"/>
                  <path fill="#E0E0FF" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
              </g>
            </svg>
          </submit>
        </form>
        <ul class="social">
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <g fill="none" fill-rule="evenodd">
                  <path d="M-2-2h24v24H-2z"/>
                  <path fill="#E0E0FF" fill-rule="nonzero" d="M10 0c5.523 0 10 4.477 10 10s-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0zm4.979 6.545c-.073-.614-.817-.479-1.23-.34-2.128.809-4.234 1.678-6.332 2.563-1.219.54-2.524 1.077-3.693 1.721-.57.417.399.693 1.06.966.736.227 1.595.573 2.332.168 1.443-.83 2.778-1.83 4.147-2.773.249-.16 1.004-.68.749-.062-.948 1.036-2.008 1.873-3.008 2.858-.35.285-.714.858-.322 1.257 1.198.838 2.422 1.65 3.635 2.47.505.404 1.295.077 1.406-.553.322-1.892.653-3.783.939-5.681.112-.863.277-1.726.316-2.594z"/>
              </g>
            </svg>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <g fill="none" fill-rule="evenodd">
                  <path d="M-2-2h24v24H-2z"/>
                  <path fill="#E0E0FF" fill-rule="nonzero" d="M12.417.3c5.357 1.335 8.617 6.762 7.281 12.12-1.335 5.356-6.761 8.617-12.119 7.28C2.224 18.366-1.037 12.94.3 7.583 1.636 2.224 7.06-1.036 12.418.299zm-2.83 3.185l-.45 1.801a36.705 36.705 0 0 1-.7-.164v-.006l-1.513-.378-.291 1.172s.814.187.796.198c.445.111.525.405.512.638l-1.232 4.938c-.054.135-.192.338-.502.26.01.017-.798-.198-.798-.198l-.545 1.256 1.428.356c.266.066.526.136.782.201l-.454 1.824 1.096.273.45-1.804c.3.081.59.156.874.227l-.448 1.795 1.097.274.454-1.82c1.871.354 3.278.211 3.87-1.48.478-1.363-.023-2.15-1.008-2.662.717-.165 1.257-.637 1.401-1.61.2-1.331-.814-2.047-2.2-2.524l.45-1.802-1.097-.274-.437 1.755c-.289-.071-.585-.14-.88-.206l.441-1.767-1.096-.273zm-.462 6.632c.744.185 3.129.553 2.774 1.974-.339 1.362-2.633.626-3.376.44l.602-2.414zm.822-3.297c.62.155 2.614.443 2.292 1.736-.31 1.24-2.219.61-2.838.455l.546-2.19z"/>
              </g>
            </svg>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <g fill="none" fill-rule="evenodd">
                  <path d="M-2-2h24v24H-2z"/>
                  <path fill="#E0E0FF" fill-rule="nonzero" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.879V12.89h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.989C16.343 19.129 20 14.99 20 10"/>
              </g>
            </svg>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <g fill="none" fill-rule="evenodd">
                  <path d="M-2-2h24v24H-2z"/>
                  <path fill="#E0E0FF" fill-rule="nonzero" d="M10 0C4.477 0 0 4.477 0 10c0 4.418 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.342-3.369-1.342-.454-1.155-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.268 2.75 1.026A9.578 9.578 0 0 1 10 4.836c.85.004 1.705.114 2.504.337 1.909-1.294 2.747-1.026 2.747-1.026.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C17.137 18.163 20 14.418 20 10c0-5.523-4.478-10-10-10"/>
              </g>
            </svg>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <g fill="none" fill-rule="evenodd">
                  <path d="M-2-2h24v24H-2z"/>
                  <path fill="#E0E0FF" fill-rule="nonzero" d="M17.04 17.043h-2.962v-4.64c0-1.107-.023-2.531-1.544-2.531-1.544 0-1.78 1.204-1.78 2.449v4.722H7.793V7.5h2.844v1.3h.039c.397-.75 1.364-1.54 2.808-1.54 3.001 0 3.556 1.974 3.556 4.545v5.238zM4.447 6.194c-.954 0-1.72-.771-1.72-1.72s.767-1.72 1.72-1.72a1.72 1.72 0 0 1 0 3.44zm1.484 10.85h-2.97V7.5h2.97v9.543zM18.521 0H1.476C.66 0 0 .645 0 1.44v17.12C0 19.355.66 20 1.476 20h17.042c.815 0 1.482-.644 1.482-1.44V1.44C20 .646 19.333 0 18.518 0h.003z"/>
              </g>
            </svg>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16">
              <g fill="none" fill-rule="evenodd">
                  <path d="M-1-4h24v24H-1z"/>
                  <path fill="#E0E0FF" fill-rule="nonzero" d="M11.238 0c1.227.006 6.832.051 8.357.463A2.764 2.764 0 0 1 21.54 2.42C22 4.147 22 7.75 22 7.75s0 3.603-.46 5.33a2.765 2.765 0 0 1-1.945 1.957C17.88 15.5 11 15.5 11 15.5s-6.88 0-8.595-.463A2.765 2.765 0 0 1 .46 13.08C.057 11.569.007 8.62 0 7.908v-.316c.007-.713.057-3.66.46-5.172A2.764 2.764 0 0 1 2.405.463C3.93.05 9.535.006 10.762 0zM8.75 4.48v6.542l5.75-3.27-5.75-3.272z"/>
              </g>
           </svg>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
              <g fill="none" fill-rule="nonzero">
                  <path d="M-2-3h24v24H-2z"/>
                  <path fill="#E0E0FF" d="M6.28 17.126c7.544 0 11.672-6.256 11.672-11.672 0-.176 0-.352-.008-.528a8.357 8.357 0 0 0 2.048-2.128 8.314 8.314 0 0 1-2.36.648 4.127 4.127 0 0 0 1.808-2.272 8.16 8.16 0 0 1-2.608.992A4.095 4.095 0 0 0 13.84.87a4.107 4.107 0 0 0-4.104 4.104c0 .32.04.632.104.936a11.649 11.649 0 0 1-8.456-4.288 4.113 4.113 0 0 0 1.272 5.48A4.15 4.15 0 0 1 .8 6.59v.056a4.11 4.11 0 0 0 3.288 4.024 4 4 0 0 1-1.08.144c-.264 0-.52-.024-.768-.072a4.102 4.102 0 0 0 3.832 2.848 8.228 8.228 0 0 1-5.096 1.76c-.328 0-.656-.016-.976-.056a11.669 11.669 0 0 0 6.28 1.832"/>
              </g>
            </svg>
          </li>
        </ul>
      </div>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => '',
			'menu_class'	 => 'footer__menu menu',
			'container'		 =>	false,
		) );
		?>
      <div class="footer-bottom">
        <span>
          &copy;PrizmSpaceBot 2019, 
          All rights reserved.
        </span>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => '',
					'menu_class'	 => 'footer__menu menu menu_extra',
					'container'		 =>	false,
				) );
				?>
        <!--<ul class="footer__menu menu ">
          <li>Terms & Conditions</li>
          <li>Privacy Policy</li>
          <li>Sales & Refunds</li>
          <li>Legal</li>
        </ul>-->
        <span>
          madeBy 
          <span class="footer__made">roobinium</span>
        </span>
      </div>
    </footer>
  </div> <!-- end main wrapper -->
<?php wp_footer(); ?>
</body>
</html>
