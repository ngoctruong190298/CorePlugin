<?php
/**
 * Created by vagrant.
 * User: vagrant
 * Date: 10/29/2020
 * Time: 11:27 AM
 */

CSF::createOptions( CCT_OPTIONS, array(
	'framework_title' => esc_html__('Site Options', 'cct-helper'),
	'menu_title'      => esc_html__('Theme Options', 'cct-helper'),
	'menu_slug'       => 'cct-options',
) );

