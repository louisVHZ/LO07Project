<?php

$html = '<ul>';
foreach($users as $element) {
	$html .= '<li>' . $element . '</li>';
}
$html .= '</ul>';

echo($html);

?>