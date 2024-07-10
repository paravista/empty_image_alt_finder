<?php

declare(strict_types=1);
namespace Paravista\EmptyImageAltFinder\Condition;

use TYPO3\CMS\Core\ExpressionLanguage\AbstractProvider;

/**
 * Class EmptyImageAltFinderTypoScriptConditionProvider
 */
class EmptyImageAltFinderTypoScriptConditionProvider extends AbstractProvider
{
    /**
     * EmptyImageAltFinderTypoScriptConditionProvider constructor.
     */
    public function __construct()
    {
        $this->expressionLanguageProviders = [
            EmptyImageAltFinderConditionFunctionsProvider::class,
        ];
    }
}
