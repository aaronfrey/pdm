<?php

/**
 * Featured Jobs
 * 
 * Featured jobs widget template file
 * 
 * 
 * @author Greg Winiarski
 * @package Templates
 * @subpackage Widget
 * 
 */

 /* @var $jobList array List of Wpjb_Model_Job objects */

?>

<?php echo $theme->before_widget ?>
<?php if($title) echo $theme->before_title.$title.$theme->after_title ?>

<ul>
    <?php if(!empty($jobList)): foreach($jobList as $job): ?>
    <li>
        <a href="<?php echo wpjb_link_to("job", $job) ?>"><?php esc_html_e($job->job_title) ?></a>
        <?php _e("at", "wpjobboard"); esc_html_e(" ".$job->company_name) ?>
        <br />
        <small>
            <?php _e("Location", "wpjobboard"); esc_html_e(": ".$job->locationToString()) ?>
        </small>
    </li>
    <?php endforeach; ?>
    <?php else: ?>
    <li><?php _e("No featured jobs found.", "wpjobboard") ?></li>
    <?php endif; ?>
</ul>

<?php echo $theme->after_widget ?>