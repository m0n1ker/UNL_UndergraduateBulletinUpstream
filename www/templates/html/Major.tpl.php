<?php
$url = UNL_UndergraduateBulletin_Controller::getURL();
UNL_UndergraduateBulletin_Controller::setReplacementData('doctitle', 'UNL | Undergraduate Bulletin | '.htmlentities($context->title));
UNL_UndergraduateBulletin_Controller::setReplacementData('head', '<script type="text/javascript" src="'.$url.'templates/html/scripts/jQuery.toc.js"></script>
                                                                  <script type="text/javascript" src="'.$url.'templates/html/scripts/majors.js"></script>');
?>
<h1><?php echo $context->title; ?></h1>
<h2 class="subhead"><?php echo $context->college; ?></h2>
<ul class="wdn_tabs">
    <li><a href="<?php echo $url; ?>major/<?php echo urlencode($context->title); ?>"><span>Description</span></a></li>
    <li <?php echo ($_GET['view']=='courses')?'class="selected"':''; ?>><a href="<?php echo $url; ?>?view=courses&amp;name=<?php echo urlencode($context->title); ?>"><span>Courses</span></a></li>
</ul>
