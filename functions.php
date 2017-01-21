<? php 
    
    /**
 * Functions
 *
 * @package      Concept Refinery
 * @author       concept refinery <conceptrefinery@gmail.com>
 * @copyright    Copyright (c) 2017, Concept Refinery
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */
    
    //set up for genesis child theme
add_action('genesis_setup','cr-theme-setup', 15);
  function cr-theme-setup() {
      
     define( 'Child_Theme_Name', __( 'Concept Refinery Theme', 'genesischild' ) );
//* We tell the web address of our child theme (More info & demo)
define( 'Child_Theme_Url', 'http://conceptrefinery.com.au' );
//* We tell the version of our child theme
define( 'Child_Theme_Version', '1.0' );

//* Add HTML5 markup structure from Genesis
add_theme_support( 'html5' );

//* Add HTML5 responsive recognition
add_theme_support( 'genesis-responsive-viewport' );
      
  }
