<?php

namespace Tvswe\Snippets;

trait Snippets {
    /**
     * Snippet files
     * @var string[]
     */
    private $snippets = [];
    
    /**
     * Adds a snippet file to the snippets array
     * @param string $file
     */
    protected function requireSnippets($file)
    {
        $this->snippets[] = $file;
    }
    
    /**
     * Loads the snippet files and adds smarty plugin
     * @param string $controller
     * @param string $action
     */
    protected function readSnippets($controller, $action)
    {
        $this->requireSnippets("$controller/$action");
        $this->lang->load($this->snippets, 'german', false, false);
        if($this->smartyci) {
            $this->smartyci->addPluginsDir(APPPATH.'../vendor/tvswe/snippets');
        }
    }
}
