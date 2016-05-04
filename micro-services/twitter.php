<?php
/**
 * Twitter snippet to replace username and widget-id for users
 *
 * A sample micro-service example for WordPress Power-Box Widget URL Example
 *
 * Create and know your Widget ID as:
 * 1. Visit: https://twitter.com/settings/widgets/new
 * 2. Create Widget
 * 3. See in URL or
 *
 * /micro-services/twitter.php?username=USERNAME&widget_id=000000000000000000
 */

$username = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING);
$widget_id = filter_input(INPUT_GET, 'widget_id', FILTER_SANITIZE_STRING);

?>
<a class="twitter-timeline" href="https://twitter.com/<?php echo $username; ?>" data-widget-id="<?php echo $widget_id; ?>">Tweets by @<?php echo $username; ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
