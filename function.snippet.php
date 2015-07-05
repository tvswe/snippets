<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.snippet.php
 * Type:     function
 * Name:     snippet
 * Purpose:  outputs a random magic answer
 * -------------------------------------------------------------
 */
function smarty_function_snippet($params, Smarty_Internal_Template $template)
{
    $snippetArray = [];
    
    foreach($params as $key => $param) {
        $snippetArray[] = "$key/$param";
    }
    
    $snippetName = implode('/', $snippetArray);
    
    $CI =& get_instance();
    $snippet = $CI->lang->line($snippetName);
    
    return $snippet ?: "{$snippetName}";
}