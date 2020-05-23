<?php
/*
Element Description: VC Info Box
*/


// Element Class 
class solutionBox extends WPBakeryShortCode {
     
    function __construct() {
        add_action( 'vc_before_init', $this->vc_solutionBox_mapping() );
        add_shortcode( 'vc_solutionBox', array( $this, 'vc_solutionBox_html' ) );
    }
     
    public function vc_solutionBox_mapping() {
            
        vc_map( 
    
            array(
                'name' => esc_html__('Solution Box', 'js_composer'),
                'base' => 'vc_solutionBox',
                'icon' => 'vc_element-icon',
                'category' => esc_html__('Custom Elements', 'js_composer'),   
                'description' => esc_html__('Another simple VC box', 'js_composer'), 
                'params' => array(

                    array(
                        'type' => 'attach_image',
                        'heading' => esc_html__( 'Imagen', 'js_composer' ),
                        'param_name' => 'image',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Widget title', 'js_composer' ),
                        'param_name' => 'title',
                        'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
                    ),

                    array(
                        'type' => 'textarea_raw_html',
                        'heading' => esc_html__( 'SVG Icon Animation', 'js_composer' ),
                        'param_name' => 'icon',
                        'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
                    ),

                    array(
                        'type' => 'textarea_html',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Descrição', 'js_composer' ),
                        'param_name' => 'content',
                        'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
                    ),

                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__( 'Link Saiba Mais', 'js_composer' ),
                        'param_name' => 'content_link',
                        'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
                    )
                        
                )
            )
        );                                
            
    }     
     
    public function vc_solutionBox_html( $atts, $content ) {
        
        extract(
            shortcode_atts(
                array(
                    'image' => '',
                    'title' => '',
                    'icon' => '',
                    'content_link' => '',
                ), 
                $atts
            )
        );

        $html = '
        <div class="solutions-card d-flex flex-column">
            <img class="solutions-bg" src="'.wp_get_attachment_url($image).'" />
            <div class="solutions-icon">' . rawurldecode( base64_decode($icon)) . '</div>
            <h1 class="solutions-title">'.$title.'</h1>
            <p>'.$content.'</p>
            <a class="btn btn-light content-btn solution-version mt-auto" href="'.$content_link.'">Saiba Mais</a>
        </div>
        ';      
        
        return $html;
        
    }
     
}
 
new solutionBox(); 

class homeBox extends WPBakeryShortCode {
     
    function __construct() {
        add_action( 'vc_before_init', $this->homeBox_mapping());
        add_shortcode( 'homeBox', array( $this, 'homeBox_html' ) );
    }
     
    public function homeBox_mapping() {

            
        vc_map( 
    
            array(
                'name' => esc_html__('Home Box', 'js_composer'),
                'base' => 'homeBox',
                'description' => esc_html__('Another simple VC box', 'js_composer'), 
                'category' => esc_html__('My Custom Elements', 'js_composer'),   
                'icon' => 'vc_element-icon',            
                'params' => array(


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Widget title', 'js_composer' ),
                        'param_name' => 'title1',
                        'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Widget title', 'js_composer' ),
                        'param_name' => 'title2',
                        'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
                    ),

                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__( 'Texto Botão', 'js_composer' ),
                        'param_name' => 'text_link',
                        'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
                    ),

                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__( 'Link Botão', 'js_composer' ),
                        'param_name' => 'content_link',
                        'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'js_composer' ),
                    )
                        
                )
            )
        );                                
            
    }     
     
    public function homeBox_html( $atts, $content ) {
        
        extract(
            shortcode_atts(
                array(
                    'title1' => '',
                    'title2' => '',
                    'text_link' => '',
                    'content_link' => '',
                ), 
                $atts
            )
        );

        $html = '
        <div class="video-color-overlay" data-color="#212121" style="opacity: 0.4; background-color: rgb(33, 33, 33);"></div>
		<div id="video-bg"></div>
        <div class="row">
        <div class="col text-center">
        <h2 style="font-weight: 600;">'.$title1.'</h2>
        <h2>'.$title2.'</h2>
        <a class="btn btn-light content-btn first-version" href="'.$content_link.'">'.$text_link.'</a>

        </div>
        </div>
        ';      
        
        return $html;
        
    }
     
}
 
new homeBox(); 