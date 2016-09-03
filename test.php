<?php

include_once "split.php";

$text = file_get_contents('README.md');

$s = new \diversen\markdownSplit();
$res = $s->splitMarkdownAtLevel($text, true, 2);



print_r($res);