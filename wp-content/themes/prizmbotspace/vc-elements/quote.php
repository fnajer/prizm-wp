<?php
/*
Element Description: VC Info Box
*/
 
// Element Class 
class vcQuote extends WPBakeryShortCode {
     
  // Element Init
  function __construct() {
      add_action( 'init', array( $this, 'vc_quote_mapping' ) );
      add_shortcode( 'vc_quote', array( $this, 'vc_quote_html' ) );
  }
   
  // Element Mapping
  public function vc_quote_mapping() {
       
      // Stop all if VC is not enabled
      if ( !defined( 'WPB_VC_VERSION' ) ) {
          return;
      }
       
      // Map the block with vc_map()
      vc_map( 
          array(
              'name' => __('Заметка', 'text-domain'),
              'base' => 'vc_quote',
              'description' => __('Заметка страницы', 'text-domain'), 
              'category' => __('Spacebot', 'text-domain'),   
              'icon' => 'icon-heart',            
              'params' => array(   
                       
                  array(
                      'type' => 'textfield',
                      'holder' => 'h3',
                      'class' => 'title-class',
                      'heading' => __( 'Title', 'text-domain' ),
                      'param_name' => 'title',
                      'value' => __( 'Заголовок заметки', 'text-domain' ),
                      'description' => __( 'Заголовок заметки', 'text-domain' ),
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
  public function vc_quote_html( $atts ) {
      // Params extraction
      extract(
          shortcode_atts(
              array(
                  'title'   => 'Заголовок заметки',
                  'text'    => 'Текст',
                  'margin'  => true
              ), 
              $atts
          )
      );

      if ($margin)
        $marginHtml = '';
      else 
        $marginHtml = 'style="margin-bottom: 0;"';
      // Fill $html var with data
      $html = '
        <div class="system" ' . $marginHtml . '>
            <h4 class="system__heading">' . $title . '</h4>
            <p class="system__text">' . $text . '</p>
        </div>
      ';      
       
      return $html;
       
  }
   
} // End Element Class


// Element Class Init
new vcQuote();    
