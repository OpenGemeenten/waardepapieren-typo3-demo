<?php
declare(strict_types = 1);
namespace Discipl\Site\ViewHelpers\PageRenderer;

/**
 * Add a CSS file to the page renderer
 */
class AddCssLibraryViewHelper extends AbstractPageRendererViewHelper
{
    /**
     * Initialize arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('file', 'string', 'The CSS file to add', true);
        $this->registerArgument('rel', 'string', 'Relationship', false, 'stylesheet');
        $this->registerArgument('media', 'string', 'The media to use this stylesheet for', false, 'all');
        $this->registerArgument('title', 'string', 'Title', false, '');
        $this->registerArgument('compress', 'bool', 'Compress CSS', false, true);
        $this->registerArgument('forceOnTop', 'bool', 'Force CSS on top', false, false);
        $this->registerArgument('allWrap', 'string', 'Wrap all', false, '');
        $this->registerArgument('excludeFromConcatenation', 'bool', 'Exlude CSS file from concatenation', false, false);
        $this->registerArgument('splitChar', 'string', 'Split character for wrap', false, '|');
    }

    /**
     * Adds CSS file to the page renderer
     */
    public function render(): void
    {
        $this->getPageRenderer()->addCssLibrary(
            $this->arguments['file'],
            $this->arguments['rel'],
            $this->arguments['media'],
            $this->arguments['title'],
            $this->arguments['compress'],
            $this->arguments['forceOnTop'],
            $this->arguments['allWrap'],
            $this->arguments['excludeFromConcatenation'],
            $this->arguments['splitChar']
        );
    }
}
