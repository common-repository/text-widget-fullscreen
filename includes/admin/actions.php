<?php// Exit if accessed directlyif ( ! defined( 'ABSPATH' ) ) exit;/** Main Actions **************************************************************/add_action( 'wp_print_scripts',                                                 'text_widget_fullscreen__print_scripts'                                          );// For registering styles and scriptsadd_action( 'admin_init',                                                       'text_widget_fullscreen__register_scripts_and_styles_admin_action'               );// For adding the script files to the array that will get used lateradd_action( 'text_widget_fullscreen__enqueue_style_scripts_admin_settings',     'text_widget_fullscreen__enqueue_style_scripts_admin_settings'                   );// For priting styles and scripts files urls in headeradd_action( 'admin_enqueue_scripts',                                            'text_widget_fullscreen__enqueue_style_scripts_by_hook_suffix_action'            );