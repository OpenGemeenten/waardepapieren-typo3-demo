<?php
declare(strict_types = 1);
namespace Discipl\Site\ViewHelpers\PageRenderer;

/**
 * Add a javascript footer file to the page renderer
 */
class AddJsFooterFileViewHelper extends AbstractPageRendererViewHelper
{
    /**
     * Initialize arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('file', 'string', 'File to include in the footer', true);
        $this->registerArgument('type', 'string', 'Content type', false, 'text/javascript');
        $this->registerArgument('compress', 'bool', 'Compress JS', false, true);
        $this->registerArgument('forceOnTop', 'bool', 'Force JS on top', false, false);
        $this->registerArgument('allWrap', 'string', 'Wrap JS');
        $this->registerArgument('excludeFromConcatenation', 'string', 'Exclude from concatenation', false, false);
        $this->registerArgument('splitChar', 'string', 'The char used to split the allWrap value, default is "|"', false, '|');
        $this->registerArgument('async', 'bool', 'if property async="async" should be added to JavaScript tags', false, false);
        $this->registerArgument('integrity', 'string', 'Subresource Integrity (SRI)');
    }

    /**
     * Adds JS file to footer
     */
    public function render(): void
    {
        $this->getPageRenderer()->addJsFooterFile(
            $this->arguments['file'],
            $this->arguments['type'],
            $this->arguments['compress'],
            $this->arguments['forceOnTop'],
            $this->arguments['allWrap'],
            $this->arguments['excludeFromConcatenation'],
            $this->arguments['splitChar'],
            $this->arguments['async'],
            $this->arguments['integrity']
        );
    }
}
