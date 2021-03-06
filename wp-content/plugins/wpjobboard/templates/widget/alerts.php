<?php echo $theme->before_widget ?>
<?php if($is_smart): ?>

<div class="wpjb-widget-smart-alert">
    <strong style=""><?php esc_html_e($title) ?></strong>
    <div><span><?php _e("Like this job search results?", "wpjobboard") ?></span></div>
    <a href="#" class="wpjb-subscribe wpjb-button"><?php _e("Subscribe Now ...", "wpjobboard") ?></a>
</div>

<?php else: ?>

<div class="wpjb-widget-smart-alert">
    <strong ><?php esc_html_e($title) ?></strong>
    <form action="<?php esc_attr_e(wpjb_link_to("alert_confirm")) ?>" method="post">
    <input type="hidden" name="add_alert" value="1" />
    <ul id="wpjb_widget_alerts" class="wpjb_widget">
        <li>
            <input type="text" style="width:90%" name="keyword" placeholder="<?php _e("Keyword", "wpjobboard") ?>" value="" />
        </li>
        <li>
            <input type="text" style="width:90%" name="email" value="" placeholder="<?php _e("E-mail", "wpjobboard") ?>" />
        </li>
        <li>
            <input type="submit" class="wpjb-button" value="<?php _e("Add Alert", "wpjobboard") ?>" />
        </li>
    </ul>
    </form>
</div>

<?php endif; ?>
<?php echo $theme->after_widget ?>