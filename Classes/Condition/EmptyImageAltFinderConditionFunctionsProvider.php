<?php

declare(strict_types=1);
namespace Paravista\EmptyImageAltFinder\Condition;

use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;

/**
 * Class EmptyImageAltFinderConditionFunctionsProvider
 * to provide new functions in TypoScript conditions
 */
class EmptyImageAltFinderConditionFunctionsProvider implements ExpressionFunctionProviderInterface
{
    /**
     * @return array|ExpressionFunction[]
     */
    public function getFunctions(): array
    {
        return [
            $this->isEmptyImageAltFinderFeDebug(),
        ];
    }

    /**
     * Check if current backend user has turned on emptyImageAltFinderFeDebug in user settings
     *
     * Example usage:
     *      [isEmptyImageAltFinderFeDebug()]
     *
     * @return ExpressionFunction
     */
    protected function isEmptyImageAltFinderFeDebug(): ExpressionFunction
    {
        return new ExpressionFunction('isEmptyImageAltFinderFeDebug', function () {
            // Not implemented, we only use the evaluator
        }, function () {
            $loggedInBeUser = $GLOBALS['BE_USER'] ?? false;
            if($loggedInBeUser) {
                return $GLOBALS['BE_USER']->uc['emptyImageAltFinderFeDebug'] ?? false;
            }
            return false;
        });
    }
}
