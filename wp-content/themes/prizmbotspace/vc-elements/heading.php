<?php
/*
Element Description: VC Info Box
*/
 
// Element Class 
class vcHeading extends WPBakeryShortCode {
     
  // Element Init
  function __construct() {
      add_action( 'init', array( $this, 'vc_heading_mapping' ) );
      add_shortcode( 'vc_heading', array( $this, 'vc_heading_html' ) );
  }
   
  // Element Mapping
  public function vc_heading_mapping() {
       
      // Stop all if VC is not enabled
      if ( !defined( 'WPB_VC_VERSION' ) ) {
          return;
      }
       
      // Map the block with vc_map()
      vc_map( 
          array(
              'name' => __('Заголовок', 'text-domain'),
              'base' => 'vc_heading',
              'description' => __('Заголовок страницы', 'text-domain'), 
              'category' => __('Spacebot', 'text-domain'),   
              'icon' => 'icon-heart',            
              'params' => array(   
                       
                  array(
                      'type' => 'textfield',
                      'holder' => 'h3',
                      'class' => 'title-class',
                      'heading' => __( 'Title', 'text-domain' ),
                      'param_name' => 'title',
                      'value' => __( 'Заголовок', 'text-domain' ),
                      'description' => __( 'Текст заголовка', 'text-domain' ),
                      'admin_label' => false,
                      'weight' => 0,
                      'group' => 'Основное',
                  ),
                  array(
                    'type' => 'dropdown',
                    'holder' => 'h3',
                    'class' => 'title-class',
                    'heading' => __( 'Size', 'text-domain' ),
                    'param_name' => 'size',
                    'value' => array(
                        __( 'Big',  'text-domain'  ) => 'big',
                        __( 'Medium',  'text-domain'  ) => 'medium',
                        __( 'Small',  'text-domain'  ) => 'small',
                    ),
                    'description' => __( 'Выбор размера заголовка', 'text-domain' ),
                    'admin_label' => false,
                    'weight' => 0,
                    'group' => 'Основное',
                )               
                      
              ),
          )
      );                                
      
  }
   
   
  // Element HTML
  public function vc_heading_html( $atts ) {
       
      // Params extraction
      extract(
          shortcode_atts(
              array(
                  'title'   => 'Default value',
                  'size'   => 'big',
              ), 
              $atts
          )
      );
       
      if ($size === 'big') {
        $sizeHtml = 'h1';
        $classHtml = 'heading';
      } elseif ($size === 'medium') {
        $sizeHtml = 'h2';
        $classHtml = 'heading-2';
      }  elseif ($size === 'small') {
        $sizeHtml = 'h3';
        $classHtml = 'heading-3';
      }


      // Fill $html var with data
      $html = '<' . $sizeHtml . ' class="' . $classHtml . '">' . $title . '</' . $sizeHtml .'>';      
       
      return $html;
       
  }
   
} // End Element Class


// Element Class Init
new vcHeading();    



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