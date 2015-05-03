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
    $snippetName = '';
    
    foreach($params as $key => $param) {
        $snippetName .= ucfirst($key) . ucfirst($param);
    }
    
    $snippetName = lcfirst($snippetName);
    
    $snippet = $template->getConfigVariable($snippetName);
    
    return $snippet ? $snippet : '#' . $snippetName . '#';
}