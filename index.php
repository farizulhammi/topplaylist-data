<?php
include 'dom.php';
$html = file_get_html('https://musiclist.com/en/top-ventas-indonesia');

foreach ($html->find('h4[class=truncate text-sm font-bold text-gray-600]') as $key) {
	$data = $key->plaintext;
	$dataa[] =$data;
}
print_r($dataa);
// print_r(json_encode($dataa));
