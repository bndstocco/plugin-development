<?php
$meta = get_post_meta($post->ID);
$link_text_value = get_post_meta($post->ID, 'mv_slider_link_text', true);
$link_url_value = get_post_meta($post->ID, 'mv_slider_link_url', true);
?>

<table class="form-table mv-slider-metabox">
    <input type="hidden" name="mv_slider_nonce" value="<?php echo wp_create_nonce("mv_slider_nonce"); ?>">
    <tr>
        <th>
            <label for="mv_slider_link_text">Link Text</label>
        </th>
        <td>
            <input type="text"
                name="mv_slider_link_text"
                id="mv_slider_link_text"
                class="regular-text link-text"
                value="<?php echo (isset($link_text_value)) ? esc_html($link_text_value) : ''; ?>"
                required
            >
        </td>
    </tr>
    <tr>
        <th>
            <label for="mv_slider_link_url">Link URL</label>
        </th>
        <td>
            <input type="url"
                name="mv_slider_link_url"
                id="mv_slider_link_url"
                class="regular-url link-url"
                value="<?php echo (isset($link_url_value)) ? esc_url($link_url_value) : ''; ?>"
                required
            >
        </td>
    </tr>
</table>
