<?php

include_once "split.php";

$text = file_get_contents('README.md');

$s = new \diversen\markdownSplit();

// Split by header level 1
// @text => a markdown text
// @setext => use both setext and atx headers
// @level => the header-level which will attach a new array 
$res = $s->splitMarkdownAtLevel($text, $setext = true, $level = 1);
print_r($res);

// Or split by header-level 2, which means that both level 1 and level 2 headers
// will be placed as array values 
$res = $s->splitMarkdownAtLevel($text, true, 2);
print_r($res);

// `Notice` $ret[0] is always any text that may be `before the first header`
// This is normally empty.
