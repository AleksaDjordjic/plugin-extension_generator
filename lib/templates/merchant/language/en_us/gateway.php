<?php
/**
 * en_us language for the {{name}} gateway.
 */
// Basics
$lang['{{class_name}}.name'] = '{{name}}';
$lang['{{class_name}}.description'] = '{{description}}';


// Settings{{array:fields}}
$lang['{{class_name}}.meta.{{fields.name}}'] = '{{fields.label}}';{{array:fields}}

{{array:fields}}{{if:fields.tooltip:}}{{else:fields.tooltip}}
$lang['{{class_name}}.meta.tooltip_{{fields.name}}'] = '{{fields.tooltip}}';{{if:fields.tooltip}}{{array:fields}}