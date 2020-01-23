<?php
/**
 * Template name: Страница Prizm
 */

get_header();
?>
<!-- only content wrapper -->
    <main class="content-wrapper">

		<div class="breadcrumbs breadcrumbs_top container">
        <!--<span class="breadcrumbs__crumb">Home</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
          <g fill="none" fill-rule="evenodd">
              <path d="M-9 18V-6h24v24z"/>
              <path fill="#e0e0ff" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
          </g>
       </svg>
        <span class="breadcrumbs__current-page">Prizm</span>-->
				<?php prizmbotspace_the_breadcrumb() ?>
      </div>
     
      <section class="article small-container">
        <div class="article__container">
          <h1 class="heading"><?php pll_e('prizm_1_main_title'); ?></h1>
          <p class="text"><?php format_paragraph(pll__('prizm_1_main_paragraph')); ?></p>
          <iframe class="article__video" width="730" height="410" src="<?php pll_e('prizm_1_video_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          <h2 class="heading-2"><?php pll_e('prizm_c_1_title'); ?></h2>
          <h3 class="heading-3"><?php pll_e('prizm_c_1_subtitle_1'); ?></h3>
          <p class="sub-text"><?php format_paragraph(pll__('prizm_c_1_paragraph_1')); ?></p>
          <p class="sub-text"><?php pll_e('prizm_c_1_paragraph_2'); ?></p>
          
          <figure class="article__figure">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article.jpg" alt="Logo of minter site" />
            <figcaption><?php pll_e('prizm_c_1_img_caption'); ?></figcaption>
          </figure>

          <h3 class="heading-3"><?php pll_e('prizm_c_1_subtitle_2'); ?></h3>
          <ol class="article__list">
            <li><p class="sub-text"><?php format_paragraph(pll__('prizm_c_1_list_item_1')); ?></p></li>
            <li><p class="sub-text"><?php pll_e('prizm_c_1_list_item_2'); ?></p></li>
            <li><p class="sub-text"><?php pll_e('prizm_c_1_list_item_3'); ?></p></li>
          </ol>
          
          <div class="system">
            <h4 class="system__heading"><?php pll_e('prizm_c_1_note_title'); ?></h4>
            <p class="system__text"><?php pll_e('prizm_c_1_note_paragraph'); ?></p>
          </div>

          <h2 class="heading-2"><?php pll_e('prizm_c_2_title'); ?></h2>
          <h3 class="heading-3"><?php pll_e('prizm_c_2_subtitle_1'); ?></h3>
          <ul class="article__list article__list_ul">
            <li><p class="sub-text"><?php pll_e('prizm_c_2_paragraph_1'); ?></p></li>
            <li><p class="sub-text"><?php pll_e('prizm_c_2_paragraph_2'); ?></p></li>
            <li><p class="sub-text"><?php pll_e('prizm_c_2_paragraph_3'); ?></p></li>
          </ul>

          <div class="system">
            <h4 class="system__heading"><?php pll_e('prizm_c_2_note_title'); ?></h4>
            <ul class="system__list">
              <li>
                <p class="system__text"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="Logo of minter site" /><?php pll_e('prizm_c_2_note_paragraph_1'); ?></p>
              </li>
              <li>
                <p class="system__text"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="Logo of minter site" /><?php pll_e('prizm_c_2_note_paragraph_2'); ?></p>
              </li>
              <li>
                <p class="system__text"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="Logo of minter site" /><?php pll_e('prizm_c_2_note_paragraph_3'); ?></p>
              </li>
              <li>
                <p class="system__text"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/checkbox.svg" alt="Logo of minter site" /><?php pll_e('prizm_c_2_note_paragraph_4'); ?> <a class="system__link" href="#"><?php pll_e('prizm_c_2_note_button_more'); ?></a></p>
              </li>
            </ul>
          </div>

          <h3 class="heading-2"><?php pll_e('prizm_c_3_title'); ?></h2>
            <div class="faq__block">
              <div class="faq__head">
                <h4 class="faq__heading"><?php format_paragraph(pll__('prizm_c_3_block_1_title')); ?></h4>
                <div class="faq__btn">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plus.svg" class="faq__svg" alt="open faq"/>
                </div>
              </div>
              <div class="faq__body faq_hide-content">
                <p class="faq__text"><?php pll_e('prizm_c_3_block_1_paragraph'); ?></p>
                <iframe width="682" height="383" src="<?php pll_e('prizm_c_3_block_1_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="faq__block">
              <div class="faq__head">
                <h4 class="faq__heading"><?php format_paragraph(pll__('prizm_c_3_block_2_title')); ?></h4>
                <div class="faq__btn">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plus.svg" class="faq__svg" alt="open faq"/>
                </div>
              </div>
              <div class="faq__body faq_hide-content">
                <p class="faq__text"><?php pll_e('prizm_c_3_block_2_paragraph'); ?></p>
                <iframe width="682" height="383" src="<?php pll_e('prizm_c_3_block_2_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="faq__block">
              <div class="faq__head">
                <h4 class="faq__heading"><?php format_paragraph(pll__('prizm_c_3_block_3_title')); ?></h4>
                <div class="faq__btn">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plus.svg" class="faq__svg" alt="open faq"/>
                </div>
              </div>
              <div class="faq__body faq_hide-content">
                <p class="faq__text"><?php pll_e('prizm_c_3_block_3_paragraph'); ?></p>
                <iframe width="682" height="383" src="<?php pll_e('prizm_c_3_block_3_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            
            <div class="article__footer">
              <div class="breadcrumbs">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                  <g fill="none" fill-rule="evenodd">
                    <path d="M16-6v24H-8V-6z"/>
                    <path fill="#E0E0FF" fill-rule="nonzero" d="M6.71 2.12L2.83 6l3.88 3.88a.996.996 0 1 1-1.41 1.41L.71 6.7a.996.996 0 0 1 0-1.41L5.3.7a.996.996 0 0 1 1.41 0c.38.39.39 1.03 0 1.42z"/>
                  </g>
               </svg>
                <span class="breadcrumbs__crumb"><?php pll_e('breadcrumbs_home'); ?></span>
              </div>
              <div class="article__footer-social">
                <span class="breadcrumbs__crumb"><?php pll_e('breadcrumbs_share'); ?></span>
                <ul class="social social_article">
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
                          <path fill="#E0E0FF" fill-rule="nonzero" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.879V12.89h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.989C16.343 19.129 20 14.99 20 10"/>
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
            </div>
        </div>
      
      </section>
      
    </main> <!-- end content wrapper -->
<?php
get_footer();
?>
