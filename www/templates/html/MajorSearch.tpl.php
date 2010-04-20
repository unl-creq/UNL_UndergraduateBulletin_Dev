<?php
$url = UNL_UndergraduateBulletin_Controller::getURL();
if ($context->options['format'] != 'partial') {
    echo $savvy->render('', 'MajorSearchForm.tpl.php');
}
if (!$context->count()) {
    echo 'Sorry, no matching areas of study';
} else {
    echo '<h2>'.$context->count().' result(s)</h2>'; ?>
    <ul>
    <?php foreach ($context as $major): ?>
    <li><a href="<?php echo $url; ?>major/<?php echo urlencode($major->getRaw('title')); ?>"><?php echo $major->title; ?></a></li>
    <?php endforeach; ?>
    </ul>
<?php
}
?>