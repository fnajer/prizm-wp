<?php
/*
Element Description: VC Info Box
*/
 
// Element Class 
class vcParagraph extends WPBakeryShortCode {
     
  // Element Init
  function __construct() {
      add_action( 'init', array( $this, 'vc_paragraph_mapping' ) );
      add_shortcode( 'vc_paragraph', array( $this, 'vc_paragraph_html' ) );
  }
   
  // Element Mapping
  public function vc_paragraph_mapping() {
       
      // Stop all if VC is not enabled
      if ( !defined( 'WPB_VC_VERSION' ) ) {
          return;
      }
       
      // Map the block with vc_map()
      vc_map( 
          array(
              'name' => __('Абзац', 'text-domain'),
              'base' => 'vc_paragraph',
              'description' => __('Блок текста', 'text-domain'), 
              'category' => __('Spacebot', 'text-domain'),   
              'icon' => 'icon-heart',            
              'params' => array(   
                       
                  array(
                      'type' => 'textarea_html',
                      'holder' => 'h3',
                      'class' => 'title-class',
                      'heading' => __( 'Text', 'text-domain' ),
                      'param_name' => 'text',
                      'value' => __( 'Paragraph', 'text-domain' ),
                      'description' => __( 'Блок текста', 'text-domain' ),
                      'admin_label' => false,
                      'weight' => 0,
                      'group' => 'Основное',
                  )                  
                      
              ),
          )
      );                                
      
  }
   
   
  // Element HTML
  public function vc_paragraph_html( $atts ) {
       
      // Params extraction
      extract(
          shortcode_atts(
              array(
                  'text'   => 'Paragraph',
              ), 
              $atts
          )
      );
       
      // Fill $html var with data
      $html = '<p class="text">' . $text . '</p>';      
       
      return $html;
       
  }
   
} // End Element Class


// Element Class Init
new vcParagraph();    



/*
Element Description: VC Heading 
*/
 
// Element Class 
// class vcHeading extends WPBakeryShortCode {
     
//   // Element Init
//   function __construct() {
//       add_action( 'init', array( $this, 'vc_heading_mapping' ) );
//       add_shortcode( 'vc_heading ', array( $this, 'vc_heading_html' ) );
//   }
   
//   // Element Mapping
//   public function vc_heading_mapping() {
//     // Stop all if VC is not enabled
//     if ( !defined( 'WPB_VC_VERSION' ) ) {
//       return;
//     }
          
//     // Map the block with vc_map()
//     vc_map( 
//       array(
//         'name' => __('Заголовок', 'text-domain'),
//         'base' => 'vc_heading',
//         'description' => __('Заголовок страницы', 'text-domain'), 
//         'category' => __('Spacebot', 'text-domain'),   
//         'icon' => 'icon-heart',            
//         'params' => array(   
                
//             array(
//                 'type' => 'textfield',
//                 'holder' => 'h3',
//                 'class' => 'title-class',
//                 'heading' => __( 'Title', 'text-domain' ),
//                 'param_name' => 'title',
//                 'value' => __( 'Default value', 'text-domain' ),
//                 'description' => __( 'Box Title', 'text-domain' ),
//                 'admin_label' => false,
//                 'weight' => 0,
//                 'group' => 'Custom Group',
//             )                  
                
//         )
//       )
//     );              
//   } 
   
   
//   // Element HTML
  // public function vc_heading_html( $atts ) {
  //     // Params extraction
  //     extract(
  //       shortcode_atts(
  //           array(
  //               'title'   => '',
  //           ), 
  //           $atts
  //       )
  //   );
    
  //   // Fill $html var with data
  //   $html = '<h2 class="heading">' . $title . '</h2>';      
    
  //   return $html; 
//   } 
   
// } // End Element Class

// // Element Class Init
// new vcHeading(); 