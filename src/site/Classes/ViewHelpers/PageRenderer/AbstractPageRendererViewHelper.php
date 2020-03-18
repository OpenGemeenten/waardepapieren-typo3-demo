<?php
declare(strict_types = 1);
namespace Discipl\Site\ViewHelpers\PageRenderer;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Page\PageRenderer;

/**
 * Abstract for page renderer view helpers
 */
class AbstractPageRendererViewHelper extends AbstractViewHelper
{
    /**
     * Returns current PageRenderer
     *
     * @return PageRenderer
     */
    protected function getPageRenderer(): PageRenderer
    {
        return GeneralUtility::makeInstance(PageRenderer::class);
    }
}
