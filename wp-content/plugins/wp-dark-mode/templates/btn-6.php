<?php

$is_floating = isset( $floating ) && 'yes' == $floating;
$position    = wp_dark_mode_get_settings( 'wp_dark_mode_switch', 'switcher_position', 'right_bottom' );

?>

<div class="wp-dark-mode-switcher wp-dark-mode-ignore  style-6  <?php echo $class; ?> <?php echo $is_floating ? "floating $position" : ''; ?>">
    <label for="wp-dark-mode-switch wp-dark-mode-ignore">
        <div class="modes wp-dark-mode-ignore">
            <img class="light" src="<?php echo WP_DARK_MODE_ASSETS.'/images/btn-6/sun.png'; ?>" alt="Light">
            <img class="dark" src="<?php echo WP_DARK_MODE_ASSETS.'/images/btn-6/moon.png'; ?>" alt="Dark">
        </div>
    </label>
</div>