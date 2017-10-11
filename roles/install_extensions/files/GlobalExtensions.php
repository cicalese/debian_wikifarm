<?php
$EXTENSION_DIRECTORY = __DIR__ . '/../extensions';

wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;

wfLoadExtension( 'WikiEditor' );
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;

wfLoadExtension( 'SyntaxHighlight_GeSHi' );
