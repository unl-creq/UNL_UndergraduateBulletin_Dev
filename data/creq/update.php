<?php

$handle = fopen(dirname(__FILE__).'/subject_codes.csv', 'r');
while (($subject = fgetcsv($handle, 1000, ",", "'")) !== false) {
    if ($data = file_get_contents('http://creq.unl.edu/courses/public-view/all-courses/subject/'.$subject[0])) {
        file_put_contents(dirname(__FILE__).'/subjects/'.$subject[0].'.xml', $data);
    } else {
        echo 'Could not retrieve data for '.$subject[0].PHP_EOL;
    }
}