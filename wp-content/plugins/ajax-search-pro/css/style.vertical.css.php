<?php
/**
 * WARNING! DO NOT EDIT THIS FILE DIRECTLY!
 *
 * FOR CUSTOM CSS USE THE PLUGIN THEME OPTIONS->CUSTOM CSS PANEL.
 */

/* Prevent direct access */
defined('ABSPATH') or die("You can't access this file directly.");
?>

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.vertical,
    <?php echo $asp_res_ids2; ?>.vertical,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.vertical {
    padding: 4px;
    background: <?php echo $style['resultsbackground']; ?>;
    border-radius: 3px;
    <?php echo $style['resultsborder']; ?>
    <?php echo $style['resultshadow']; ?>
    visibility: hidden;
    display: none;
}

<?php if ( $style['v_res_show_scrollbar'] == 1): ?>
<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.vertical .results,
    <?php echo $asp_res_ids2; ?>.vertical .results,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.vertical .results {
    max-height: <?php echo $style['v_res_max_height']; ?>;
}
<?php endif; ?>

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.vertical .item,
    <?php echo $asp_res_ids2; ?>.vertical .item,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.vertical .item {
    position: relative;
    box-sizing: border-box;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.vertical .item .asp_content h3,
    <?php echo $asp_res_ids2; ?>.vertical .item .asp_content h3,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.vertical .item .asp_content h3 {
    display: inline;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.vertical .results .item .asp_content,
    <?php echo $asp_res_ids2; ?>.vertical .results .item .asp_content,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.vertical .results .item .asp_content {
    overflow: hidden;
    width: auto;
    height: <?php echo $style['resultitemheight']; ?>;
    background: transparent;
    margin: 0;
    padding: 8px;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.vertical .results .item .asp_image,
    <?php echo $asp_res_ids2; ?>.vertical .results .item .asp_image,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.vertical .results .item .asp_image {
    width: <?php echo $style['image_width']; ?>px;
    height: <?php echo $style['image_height']; ?>px;
    margin: 2px 8px 0 0;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.vertical .asp_simplebar-scrollbar::before,
    <?php echo $asp_res_ids2; ?>.vertical .asp_simplebar-scrollbar::before,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.vertical .asp_simplebar-scrollbar::before {
    background: transparent;
    <?php wpdreams_gradient_css($style['v_res_overflow_color']); ?>
}

<?php if ( intval($style['v_res_column_count']) > 1 ): ?>
    <?php if ($use_compatibility == true): ?>
        <?php echo $asp_res_ids1; ?>.vertical .resdrg,
        <?php echo $asp_res_ids2; ?>.vertical .resdrg,
    <?php endif; ?>
    <?php echo $asp_res_ids; ?>.vertical .resdrg {
        display: flex;
        flex-wrap: wrap;
    }
    <?php if ($use_compatibility == true): ?>
        <?php echo $asp_res_ids1; ?>.vertical .results .item,
        <?php echo $asp_res_ids2; ?>.vertical .results .item,
    <?php endif; ?>
    <?php echo $asp_res_ids; ?>.vertical .results .item {
        min-width: <?php echo $style['v_res_column_min_width']; ?>;
        width: <?php echo floor( 100 / intval($style['v_res_column_count']) - 1 ); ?>%;
        flex-grow: 1;
    }
<?php else: ?>
    <?php if ($use_compatibility == true): ?>
        <?php echo $asp_res_ids1; ?>.vertical .results .item::after,
        <?php echo $asp_res_ids2; ?>.vertical .results .item::after,
    <?php endif; ?>
    <?php echo $asp_res_ids; ?>.vertical .results .item::after {
        display: block;
        position: absolute;
        bottom: 0;
        content: "";
        height: 1px;
        width: 100%;
        background: <?php echo $style['spacercolor']; ?>;
    }
    <?php if ($use_compatibility == true): ?>
        <?php echo $asp_res_ids1; ?>.vertical .results .item.asp_last_item::after,
        <?php echo $asp_res_ids2; ?>.vertical .results .item.asp_last_item::after,
    <?php endif; ?>
    <?php echo $asp_res_ids; ?>.vertical .results .item.asp_last_item::after {
        display: none;
    }
<?php endif; ?>
/* @deprecated - uses the one above */
.asp_spacer {
    display: none !important;;
}

.asp_v_spacer {
    width: 100%;
    height: 0;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .asp_group_header,
    <?php echo $asp_res_ids2; ?> .asp_group_header,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .asp_group_header {
    background: #DDDDDD;
    background: <?php echo $style['exsearchincategoriesboxcolor']; ?>;
    border-radius: 3px 3px 0 0;
    border-top: 1px solid <?php echo $style['groupingbordercolor']; ?>;
    border-left: 1px solid <?php echo $style['groupingbordercolor']; ?>;
    border-right: 1px solid <?php echo $style['groupingbordercolor']; ?>;
    margin: 10px 0 -3px;
    padding: 7px 0 7px 10px;
    position: relative;
    z-index: 1000;
    min-width: 90%;
    flex-grow: 1;
    <?php echo ASP_Helpers::font($style['groupbytextfont']); ?>
}


<?php
// ----------------------------------------- TABLET SPECIFIC STYLES ----------------------------------------------------
ob_start();
?>
<?php if ( $style['v_res_show_scrollbar'] == 1 && $style['v_res_max_height'] != $style['v_res_max_height_tablet'] ): ?>
<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.vertical .results,
    <?php echo $asp_res_ids2; ?>.vertical .results,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.vertical .results {
    max-height: <?php echo $style['v_res_max_height_tablet']; ?>;
}
<?php endif; ?>
<?php if ( intval($style['v_res_column_count']) > 1 ): ?>
    <?php if ($use_compatibility == true): ?>
        <?php echo $asp_res_ids1; ?>.vertical .results .item,
        <?php echo $asp_res_ids2; ?>.vertical .results .item,
    <?php endif; ?>
    <?php echo $asp_res_ids; ?>.vertical .results .item {
        min-width: <?php echo $style['v_res_column_min_width_tablet']; ?>;
    }
<?php endif; ?>
<?php
// ---------------------------------------------------------------------------------------------------------------------
?>
<?php $css_for_tablet = ob_get_clean(); ?>
<?php $css_for_tablet = trim( preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $css_for_tablet) ); ?>
<?php if ( $css_for_tablet != '' ): ?>
@media only screen and (min-width: 641px) and (max-width: 1024px) {
    <?php echo $css_for_tablet; ?>
}
<?php endif; ?>

<?php
// ----------------------------------------- PHONE SPECIFIC STYLES -----------------------------------------------------
ob_start();
?>
<?php if ( $style['v_res_show_scrollbar'] == 1 && $style['v_res_max_height'] != $style['v_res_max_height_phone'] ): ?>
<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.vertical .results,
    <?php echo $asp_res_ids2; ?>.vertical .results,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.vertical .results {
    max-height: <?php echo $style['v_res_max_height_phone']; ?>;
}
<?php endif; ?>
<?php if ( intval($style['v_res_column_count']) > 1 ): ?>
    <?php if ($use_compatibility == true): ?>
        <?php echo $asp_res_ids1; ?>.vertical .results .item,
        <?php echo $asp_res_ids2; ?>.vertical .results .item,
    <?php endif; ?>
    <?php echo $asp_res_ids; ?>.vertical .results .item {
        min-width: <?php echo $style['v_res_column_min_width_phone']; ?>;
    }
<?php endif; ?>
<?php
// ---------------------------------------------------------------------------------------------------------------------
?>
<?php $css_for_phone = ob_get_clean(); ?>
<?php $css_for_phone = trim( preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $css_for_phone) ); ?>
<?php if ( $css_for_phone != '' ): ?>
@media only screen and (max-width: 640px) {
    <?php echo $css_for_phone; ?>
}
<?php endif; ?>
