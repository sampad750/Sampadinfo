<?php

// Header Section
Redux::setSection('sampadinfo_opt', array(
    'title'            => esc_html__( 'Header Settings', 'sampadinfo' ),
    'id'               => 'header_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-home'
) );


Redux::setSection('sampadinfo_opt', array(
    'title'            => esc_html__( 'Logo', 'sampadinfo' ),
    'id'               => 'logo_opt',
    'subsection'       => true,
    'icon'             => 'dashicons dashicons-schedule',
    'fields'           => array(
        array(
            'title'     => esc_html__('Upload Font Page logo', 'sampadinfo'),
            'subtitle'  => esc_html__( 'Upload here a image file for your font page logo', 'sampadinfo' ),
            'id'        => 'main_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => SAMPADINFO_DIR_IMG.'/logo.png'
            )
        ),
        array(
            'title'     => esc_html__('Upload Inner Page logo', 'sampadinfo'),
            'subtitle'  => esc_html__( 'Upload here a image file for your inner page logo', 'sampadinfo' ),
            'id'        => 'inner_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => SAMPADINFO_DIR_IMG.'/logo2.png'
            )
        ),
        array(
            'title'     => esc_html__('Logo dimensions', 'sampadinfo'),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'sampadinfo' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array('em','px','%'),
            'output'    => '.navbar-brand > img'
        ),
        array(
            'title'     => esc_html__('Padding', 'sampadinfo'),
            'subtitle'  => esc_html__('Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'sampadinfo'),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.header_area .navbar-brand' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );




