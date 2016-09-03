<?php

include_once "split.php";

$text = file_get_contents('README.md');

$s = new \diversen\markdownSplit();

// Split by header level 1
$res = $s->splitMarkdownAtLevel($text, true, 1);
print_r($res);

// Or split by header 2
$res = $s->splitMarkdownAtLevel($text, true, 2);
print_r($res);

`Notice` $ret[0] is always any text that may be `before the first header` - this is normally empty.
