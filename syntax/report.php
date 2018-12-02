<?php
/**
 * DokuWiki Plugin nowrep (Syntax Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  torinky <k_tori@me.com>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) {
    die();
}

class syntax_plugin_nowrep_report extends DokuWiki_Syntax_Plugin {
    /**
     * @return string Syntax mode type
     */
    public function getType() {
//        return 'FIXME: container|baseonly|formatting|substition|protected|disabled|paragraphs';
        return 'substition';
    }

    /**
     * @return string Paragraph type
     */
    public function getPType() {
//        return 'FIXME: normal|block|stack';
        return 'block';
    }

    /**
     * @return int Sort order - Low numbers go before high numbers
     */
    public function getSort() {
//        return FIXME;
        return 32;
    }

    /**
     * Connect lookup pattern to lexer.
     *
     * @param string $mode Parser mode
     */
    public function connectTo($mode) {
//        $this->Lexer->addSpecialPattern('<FIXME>', $mode, 'plugin_nowrep_report');
//        $this->Lexer->addEntryPattern('<FIXME>', $mode, 'plugin_nowrep_report');
        $this->Lexer->addSpecialPattern('\[nowrep\]', $mode, 'plugin_nowrep_report');
//        $this->Lexer->addEntryPattern('\[nowrep\]',$mode,'plugin_nowrep_report');

    }

//    public function postConnect()
//    {
//        $this->Lexer->addExitPattern('</FIXME>', 'plugin_nowrep_report');
//    }

    /**
     * Handle matches of the nowrep syntax
     *
     * @param string       $match   The match of the syntax
     * @param int          $state   The state of the handler
     * @param int          $pos     The position in the document
     * @param Doku_Handler $handler The handler
     *
     * @return array Data for the renderer
     */
    public function handle($match, $state, $pos, Doku_Handler $handler) {
//        $data = array();
        $data = array($match, $state, $pos);
//        var_dump($data);

        return $data;
    }

    /**
     * Render xhtml output or metadata
     *
     * @param string        $mode     Renderer mode (supported modes: xhtml)
     * @param Doku_Renderer $renderer The renderer
     * @param array         $data     The data from the handler() function
     *
     * @return bool If rendering was successful.
     */
    public function render($mode, Doku_Renderer $renderer, $data) {
        var_dump($mode);
        if($mode !== 'xhtml') {
            return false;
        }
//        var_dump($renderer->doc);
        $renderer->doc .= '<div class="alert alert-info">nowrep pulugin test!!</div>';
        return true;
    }
}

