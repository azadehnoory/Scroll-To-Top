<?php
// ================ Add a Setting Menu in Options =====================
add_action('admin_menu', 'stt_register_admin_menu');
function stt_register_admin_menu(): void
{
    $args = array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => NULL
    );

    add_options_page(
        'تنظیمات دکمه اسکرول',
        'دکمه اسکرول',
        'manage_options',
        'scroll-to-top-setting',
        'stt_admin_menu_layout',
        ''
    );
}

function stt_admin_menu_layout()
{
    if (!current_user_can('manage_options')) {
        wp_die('شما اجازه دسترسی به این صفحه را ندارید.');
    }
    ?>
    <form action="" method="post">
        <?php
        if (isset($_POST['btn-submit'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $option_value = [
                    'position' => $_POST['position'],
                    'width' => $_POST['width'],
                    'height' => $_POST['height'],
                    'background-color' => $_POST['background-color'],
                    'foreground-color' => $_POST['foreground-color']
                ];
                update_option('_stt_button_style', $option_value);
            }
        }
        include_once 'view/setting-form.php';
        ?>
    </form>
    <?php
}
