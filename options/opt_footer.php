<?php

// Footer settings
Redux::setSection('sampadinfo_opt', array(
	'title'     => esc_html__('Footer Settings', 'sampadinfo'),
	'id'        => 'sampadinfo_footer',
	'icon'      => 'dashicons dashicons-download',
));


// Footer background
Redux::setSection('sampadinfo_opt', array(
	'title'     => esc_html__('Footer Settings', 'sampadinfo'),
	'id'        => 'sampadinfo_footer_sec',
	'icon'      => 'dashicons dashicons-media-text',
	'subsection'=> true,
	'fields'    => array(
        array(
            'title'     => esc_html__('Footer Logo', 'sampadinfo'),
            'desc'      => esc_html__('Upload logo for footer area', 'sampadinfo'),
            'id'        => 'footer_logo',
            'type'      => 'media',
            'default'   => array(
                'url' => SAMPADINFO_DIR_IMG.'/logo2.png'
            )
        ),
        array(
            'title'     => esc_html__('Footer Menu', 'sampadinfo'),
            'desc'      => esc_html__('Show/Hide footer Menu', 'sampadinfo'),
            'id'        => 'footer_menu',
            'type'      => 'switch',
            'default'  => true,
        ),
		array(
			'title'     => esc_html__('Footer Copyright Text', 'sampadinfo'),
			'id'        => 'copyright_txt',
			'type'      => 'editor',
			'default'   => '© 2018 <a href="http://droitthemes.com">DroiThemes</a>. All rights reserved',
			'args'    => array(
				'wpautop'       => true,
				'media_buttons' => false,
				'textarea_rows' => 10,
				//'tabindex' => 1,
				//'editor_css' => '',
				'teeny'         => false,
				//'tinymce' => array(),
				'quicktags'     => false,
			)
		),
	)
));


// Footer Social Share
Redux::setSection('sampadinfo_opt', array(
	'title'     => esc_html__('Footer Social Share', 'sampadinfo'),
	'id'        => 'sampadinfo_footer_social_id',
	'icon'      => 'dashicons dashicons-share',
	'subsection'=> true,
	'fields'    => array(
		array(
			'title'     => esc_html__('Footer Social Share', 'sampadinfo'),
			'subtitle'  => esc_html__('Show/hide on footer Social Share', 'sampadinfo'),
			'id'        => 'is_footer_social_share',
			'type'      => 'switch',
			'on'        => esc_html__('Show', 'sampadinfo'),
			'off'       => esc_html__('Hide', 'sampadinfo'),
			'default'   => '1',
		),
        array(
            'title'     => esc_html__('Facebook', 'sampadinfo'),
            'id'        => 'facebook_share',
            'subtitle'  => esc_html__('If you don\'t need facebook share button leave it blank.', 'sampadinfo'),
            'type'      => 'text',
            'default'   => '#',
            'required' => array( 'is_footer_social_share', '=', 1 )
        ),
        array(
            'title'     => esc_html__('Twitter', 'sampadinfo'),
            'id'        => 'twitter_share',
            'subtitle'  => esc_html__('If you don\'t need twitter share button leave it blank.', 'sampadinfo'),
            'type'      => 'text',
            'default'   => '#',
            'required' => array( 'is_footer_social_share', '=', 1 )
        ),
        array(
            'title'     => esc_html__('Instagram', 'sampadinfo'),
            'id'        => 'instagram_share',
            'subtitle'  => esc_html__('If you don\'t need instagram share button leave it blank.', 'sampadinfo'),
            'type'      => 'text',
            'default'   => '#',
            'required' => array( 'is_footer_social_share', '=', 1 )
        ),
        array(
            'title'     => esc_html__('Linkedin', 'sampadinfo'),
            'id'        => 'linkedin_share',
            'subtitle'  => esc_html__('If you don\'t need linkedin share button leave it blank.', 'sampadinfo'),
            'type'      => 'text',
            'default'   => '#',
            'required' => array( 'is_footer_social_share', '=', 1 )
        ),
		array(
			'title'     => esc_html__('Youtube', 'sampadinfo'),
			'id'        => 'youtube_share',
			'subtitle'  => esc_html__('If you don\'t need youtube share button leave it blank.', 'sampadinfo'),
			'type'      => 'text',
			'default'   => '#',
			'required' => array( 'is_footer_social_share', '=', 1 )
		),
        array(
            'title'     => esc_html__('Skype', 'sampadinfo'),
            'id'        => 'skype_share',
            'subtitle'  => esc_html__('If you don\'t need skype share button leave it blank.', 'sampadinfo'),
            'type'      => 'text',
            'default'   => '#',
            'required' => array( 'is_footer_social_share', '=', 1 )
        ),
        array(
            'title'     => esc_html__('Pinterest', 'sampadinfo'),
            'id'        => 'pinterest_share',
            'subtitle'  => esc_html__('If you don\'t need pinterest share button leave it blank.', 'sampadinfo'),
            'type'      => 'text',
            'default'   => '#',
            'required' => array( 'is_footer_social_share', '=', 1 )
        )
	)
));
