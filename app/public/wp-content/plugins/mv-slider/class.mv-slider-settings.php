<?php


if (is_admin()) {
    if (!class_exists('MV_Slider_Settings')) {
        class MV_Slider_Settings
        {
            public static $options;

            public function __construct()
            {
                self::$options = get_option('mv_slider_options');
                add_action('admin_init', array($this, 'admin_init'));
            }

            public function admin_init()
            {
                include_once(ABSPATH . 'wp-admin/includes/plugin.php'); // Certifique-se de incluir o arquivo que contém register_settings

                register_setting('mv_slider_group', 'mv_slider_options');
                add_settings_section(
                    'mv_slider_main_section',
                    'How does it work?',
                    null,
                    'mv_slider_page1'
                );

                add_settings_section(
                    'mv_slider_second_section',
                    'Other Plugin Options',
                    null,
                    'mv_slider_page2'
                );



                add_settings_field(
                    'mv_slider_shortcode',
                    'Shortcode',
                    array($this, 'mv_slider_shortcode_callback'),
                    'mv_slider_page1',
                    'mv_slider_main_section'
                );

                add_settings_field(
                    'mv_slider_title',
                    'Slider Title',
                    array($this, 'mv_slider_title_callback'),
                    'mv_slider_page2',
                    'mv_slider_second_section'
                );

                add_settings_field(
                    'mv_slider_bullets',
                    'Display bullets',
                    array($this, 'mv_slider_bullets_callback'),
                    'mv_slider_page2',
                    'mv_slider_second_section'
                );





            }

            public function mv_slider_shortcode_callback()
            {
                ?>
                <span>Use the shortcode [mv_slider] to display the slider in any page/post/widget</span>
                <?php
            }
            public function mv_slider_title_callback()
            {
                ?>
                <input type="text" name="mv_slider_options[mv_slider_title]" id="mv_slider_title"
                    value="<?php echo isset(self::$options['mv_slider_title']) ? esc_attr(self::$options['mv_slider_title']) : ''; ?>">
                <?php
            }

            public function mv_slider_bullets_callback()
            {
                ?>
                <input type="checkbox" name="mv_slider_options[mv_slider_bullets]" id="mv_slider_bullets" value="1" <?php
                if (isset(self::$options['mv_slider_bullets'])) {
                    checked("1", self::$options['mv_slider_bullets'], true);
                }
                ?> />
                <label for="mv_slider_bullets">Whether to display bullets or not</label>
                <?php
            }

        }

    }
}