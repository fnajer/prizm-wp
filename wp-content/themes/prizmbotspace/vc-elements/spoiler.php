<?php
/*
Element Description: VC Info Box
*/
 
// Element Class 
class vcSpoiler extends WPBakeryShortCode {
     
  // Element Init
  function __construct() {
      add_action( 'init', array( $this, 'vc_spoiler_mapping' ) );
      add_shortcode( 'vc_spoiler', array( $this, 'vc_spoiler_html' ) );
  }
   
  // Element Mapping
  public function vc_spoiler_mapping() {
       
      // Stop all if VC is not enabled
      if ( !defined( 'WPB_VC_VERSION' ) ) {
          return;
      }
       
      // Map the block with vc_map()
      vc_map( 
          array(
              'name' => __('Спойлер', 'text-domain'),
              'base' => 'vc_spoiler',
              'description' => __('Спойлер страницы', 'text-domain'), 
              'category' => __('Spacebot', 'text-domain'),   
              'icon' => 'icon-heart',            
              'params' => array(   
                       
                  array(
                      'type' => 'textfield',
                      'holder' => 'h3',
                      'class' => 'title-class',
                      'heading' => __( 'Title', 'text-domain' ),
                      'param_name' => 'title',
                      'value' => __( 'Заголовок спойлера', 'text-domain' ),
                      'description' => __( 'Заголовок спойлера', 'text-domain' ),
                      'admin_label' => false,
                      'weight' => 0,
                      'group' => 'Основное',
                  ),
                  array(
                    'type' => 'textarea',
                    'holder' => 'h3',
                    'class' => 'title-class',
                    'heading' => __( 'Text', 'text-domain' ),
                    'param_name' => 'text',
                    'value' => __( 'Текст', 'text-domain' ),
                    'description' => __( 'Блок текста', 'text-domain' ),
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Основное',
                  ),
                  array(
                    'type' => 'textfield',
                    'holder' => 'h3',
                    'class' => 'title-class',
                    'heading' => __( 'Video URL', 'text-domain' ),
                    'param_name' => 'url',
                    'value' => __( '', 'text-domain' ),
                    'description' => __( 'URL видео', 'text-domain' ),
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Основное',
                ),
                  array(
                    'type' => 'checkbox',
                    'holder' => 'h3',
                    'class' => 'title-class',
                    'heading' => __( 'Margin', 'text-domain' ),
                    'param_name' => 'margin',
                    'value' => array('Enable'   => 'value' ),
                    'description' => __( 'Отступ снизу', 'text-domain' ),
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Дополнительно',
                    'std' => 'value'
                  ),                          
                      
              ),
          )
      );                                
      
  }
   
   
  // Element HTML
  public function vc_spoiler_html( $atts ) {
      // Params extraction
      extract(
          shortcode_atts(
              array(
                  'title'   => 'Заголовок спойлера',
                  'text'    => 'Текст',
                  'margin'  => true,
                  'url'     => ''
              ), 
              $atts
          )
      );

      if ($margin)
        $marginHtml = '';
      else 
        $marginHtml = 'style="margin-bottom: 0;"';
      
      if ($url)
        $urlHtml = '<iframe width="682" height="383" src="' . $url . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
      else 
        $urlHtml = '';
      // Fill $html var with data
      $html = '
        <div class="faq__block" ' . $marginHtml . '>
          <div class="faq__head">
            <h4 class="faq__heading">' . get_format_paragraph($title) . '</h4>
            <div class="faq__btn">
              <img src="' . get_template_directory_uri() . '/assets/img/plus.svg" class="faq__svg" alt="open faq"/>
            </div>
          </div>
          <div class="faq__body faq_hide-content">
            <p class="faq__text">' . get_format_paragraph($text) . '</p>
            ' . $urlHtml . '
          </div>
        </div>
      ';      
       
      return $html;
       
  }
   
} // End Element Class


// Element Class Init
new vcSpoiler();    
