<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 


function my_theme_setup() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

add_action( 'after_setup_theme', 'yourtheme_setup' );

function yourtheme_setup() {


add_theme_support( 'wc-product-gallery-slider' );
} 


/*******truncar cantidad de palabras******/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/*******truncar cantidad de palabras******/


// Minimum CSS to remove +/- default buttons on input field type number
add_action( 'wp_head' , 'custom_quantity_fields_css' );
function custom_quantity_fields_css(){
    ?>
    <style>
    .quantity input::-webkit-outer-spin-button,
    .quantity input::-webkit-inner-spin-button {
        display: none;
        margin: 0;
    }
    .quantity input.qty {
        appearance: textfield;
        -webkit-appearance: none;
        -moz-appearance: textfield;
	}
	.quantity input {
		width: 30% !important;
    margin: 0 0px 20px;
    height: 45px;
    padding: 6px 15px;
    border-radius: 5px;
    outline: none;
    border: none;
    background: rgba(214, 218, 224, 0.52) !important;
    color: #252525 !important;
    font-family: "Poppins", sans-serif !important;
    padding: 8px 2px !important;
    min-width: 50px !important;
    font-size: 12px !important;

    }
    .quantity input:focus {
      background: rgba(134, 194, 143, 0.37) !important;
      border-color: transparent !important;
      outline: 0;
      box-shadow: 0 0 0 0.2rem transparent !important;
    }

    @media (min-width: 0px) and (max-width: 767px){
      .quantity input{
        width: 10% !important;
      }
    }
    @media (min-width: 768px) and (max-width: 991px){
       .quantity input{
        width: 10% !important;
      }
    }
    </style>
    <?php
}

// agregar botones negativos y positivos en input type number Quantity de woocommerce
add_action( 'wp_footer' , 'custom_quantity_fields_script' );
function custom_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
    jQuery( function( $ ) {
        if ( ! String.prototype.getDecimals ) {
            String.prototype.getDecimals = function() {
                var num = this,
                    match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                if ( ! match ) {
                    return 0;
                }
                return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
            }
        }
        // Quantity "plus" and "minus" buttons
        $( document.body ).on( 'click', '.plus, .minus', function() {
            var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
                currentVal  = parseFloat( $qty.val() ),
                max         = parseFloat( $qty.attr( 'max' ) ),
                min         = parseFloat( $qty.attr( 'min' ) ),
                step        = $qty.attr( 'step' );

            // Format values
            if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
            if ( max === '' || max === 'NaN' ) max = '';
            if ( min === '' || min === 'NaN' ) min = 0;
            if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

            // Change the value
            if ( $( this ).is( '.plus' ) ) {
                if ( max && ( currentVal >= max ) ) {
                    $qty.val( max );
                } else {
                    $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            } else {
                if ( min && ( currentVal <= min ) ) {
                    $qty.val( min );
                } else if ( currentVal > 0 ) {
                    $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            }

            // Trigger change event
            $qty.trigger( 'change' );
        });
    });
    </script>
    <?php
}



// Register Custom Post Type
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner', 'Post Type General Name', 'florence' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'florence' ),
		'menu_name'             => __( 'Banner', 'florence' ),
		'name_admin_bar'        => __( 'Post Type', 'florence' ),
		'archives'              => __( 'Archivo', 'florence' ),
		'attributes'            => __( 'Atributos', 'florence' ),
		'parent_item_colon'     => __( 'Artículo principal', 'florence' ),
		'all_items'             => __( 'Todos los artículos', 'florence' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'florence' ),
		'add_new'               => __( 'Añadir nuevo', 'florence' ),
		'new_item'              => __( 'Nuevo artículo', 'florence' ),
		'edit_item'             => __( 'Editar elemento', 'florence' ),
		'update_item'           => __( 'Actualizar artículo', 'florence' ),
		'view_item'             => __( 'Ver ítem', 'florence' ),
		'view_items'            => __( 'Ver artículos', 'florence' ),
		'search_items'          => __( 'Buscar artículo', 'florence' ),
		'not_found'             => __( 'Extraviado', 'florence' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'florence' ),
		'featured_image'        => __( 'Foto principal', 'florence' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'florence' ),
		'remove_featured_image' => __( 'Remove featured image', 'florence' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'florence' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'florence' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'florence' ),
		'items_list'            => __( 'Lista de artículos', 'florence' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'florence' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'florence' ),
	);
	$args = array(
		'label'                 => __( 'Banner', 'florence' ),
		'description'           => __( 'Post Type Description', 'florence' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );

