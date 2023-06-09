<?php

class partial_Product_Price_214d6b88388106f7d80e2f092780a18827e8f646 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'cart' => 
  array (
    0 => 'Extcode\\Cart\\ViewHelpers',
  ),
  'cartproducts' => 
  array (
    0 => 'Extcode\\CartProducts\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

';
// Rendering ViewHelper Extcode\CartProducts\ViewHelpers\Product\IfBestSpecialPriceAvailableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
        <div class="regular_price">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['key'] = NULL;
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['languageKey'] = NULL;
$arguments65['alternativeLanguageKeys'] = NULL;
$arguments65['key'] = 'tx_cartproducts_domain_model_product_product.regular_price';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output64 .= ':
            <del>
                <span class="price">
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$array71 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.price', $array71)]);
};
$arguments67 = array();
$arguments67['currencySign'] = NULL;
$arguments67['decimalSeparator'] = NULL;
$arguments67['thousandsSeparator'] = NULL;
$arguments67['prependCurrency'] = NULL;
$arguments67['separateCurrency'] = NULL;
$arguments67['decimals'] = NULL;
$arguments67['currencyTranslation'] = 1.0;
$array69 = array (
);$arguments67['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array69);
$array70 = array (
);$arguments67['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array70);

$output64 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output64 .= '
                </span>
            </del>
        </div>
        <div class="special_price">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['languageKey'] = NULL;
$arguments72['alternativeLanguageKeys'] = NULL;
$arguments72['key'] = 'tx_cartproducts_domain_model_product_product.special_price';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output64 .= ':
            <span class="price">
                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Extcode\CartProducts\ViewHelpers\Product\BestSpecialPriceViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['product'] = NULL;
$array80 = array (
);$arguments78['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array80);
return Extcode\CartProducts\ViewHelpers\Product\BestSpecialPriceViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);
};
$arguments74 = array();
$arguments74['currencySign'] = NULL;
$arguments74['decimalSeparator'] = NULL;
$arguments74['thousandsSeparator'] = NULL;
$arguments74['prependCurrency'] = NULL;
$arguments74['separateCurrency'] = NULL;
$arguments74['decimals'] = NULL;
$arguments74['currencyTranslation'] = 1.0;
$array76 = array (
);$arguments74['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array76);
$array77 = array (
);$arguments74['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array77);

$output64 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output64 .= '
            </span>
        </div>
        <div class="special_price_percentage_discount">
            <strong>(Sie sparen: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Extcode\CartProducts\ViewHelpers\Product\BestSpecialPricePercentageDiscountViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['product'] = NULL;
$array85 = array (
);$arguments83['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array85);
return Extcode\CartProducts\ViewHelpers\Product\BestSpecialPricePercentageDiscountViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);
};
$arguments81 = array();
$arguments81['decimals'] = '2';
$arguments81['decimalSeparator'] = '.';
$arguments81['thousandsSeparator'] = ',';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output64 .= ' %)</strong>
        </div>
    ';
return $output64;
};
$arguments62 = array();

$output61 .= '';

$output61 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
        <div class="regular_price">
            <span class="price">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
                        ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$array114 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.beVariants.0.priceCalculated', $array114)]);
};
$arguments110 = array();
$arguments110['currencySign'] = NULL;
$arguments110['decimalSeparator'] = NULL;
$arguments110['thousandsSeparator'] = NULL;
$arguments110['prependCurrency'] = NULL;
$arguments110['separateCurrency'] = NULL;
$arguments110['decimals'] = NULL;
$arguments110['currencyTranslation'] = 1.0;
$array112 = array (
);$arguments110['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array112);
$array113 = array (
);$arguments110['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array113);

$output109 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
                    ';
return $output109;
};
$arguments107 = array();

$output106 .= '';

$output106 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
                        ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$array122 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.minPrice', $array122)]);
};
$arguments118 = array();
$arguments118['currencySign'] = NULL;
$arguments118['decimalSeparator'] = NULL;
$arguments118['thousandsSeparator'] = NULL;
$arguments118['prependCurrency'] = NULL;
$arguments118['separateCurrency'] = NULL;
$arguments118['decimals'] = NULL;
$arguments118['currencyTranslation'] = 1.0;
$array120 = array (
);$arguments118['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array120);
$array121 = array (
);$arguments118['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array121);

$output117 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
                    ';
return $output117;
};
$arguments115 = array();
$arguments115['if'] = NULL;

$output106 .= '';

$output106 .= '
                ';
return $output106;
};
$arguments89 = array();
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$arguments89['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('product.beVariants', $array104);

$expression105 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments89['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments89['__thenClosure'] = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                        ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$array96 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.beVariants.0.priceCalculated', $array96)]);
};
$arguments92 = array();
$arguments92['currencySign'] = NULL;
$arguments92['decimalSeparator'] = NULL;
$arguments92['thousandsSeparator'] = NULL;
$arguments92['prependCurrency'] = NULL;
$arguments92['separateCurrency'] = NULL;
$arguments92['decimals'] = NULL;
$arguments92['currencyTranslation'] = 1.0;
$array94 = array (
);$arguments92['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array94);
$array95 = array (
);$arguments92['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array95);

$output91 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
                    ';
return $output91;
};
$arguments89['__elseClosures'][] = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
                        ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$array102 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.minPrice', $array102)]);
};
$arguments98 = array();
$arguments98['currencySign'] = NULL;
$arguments98['decimalSeparator'] = NULL;
$arguments98['thousandsSeparator'] = NULL;
$arguments98['prependCurrency'] = NULL;
$arguments98['separateCurrency'] = NULL;
$arguments98['decimals'] = NULL;
$arguments98['currencyTranslation'] = 1.0;
$array100 = array (
);$arguments98['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array100);
$array101 = array (
);$arguments98['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array101);

$output97 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
                    ';
return $output97;
};

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
            </span>
        </div>
    ';
return $output88;
};
$arguments86 = array();
$arguments86['if'] = NULL;

$output61 .= '';

$output61 .= '
';
return $output61;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['product'] = NULL;
$array60 = array (
);$arguments1['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array60);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
        <div class="regular_price">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['languageKey'] = NULL;
$arguments4['alternativeLanguageKeys'] = NULL;
$arguments4['key'] = 'tx_cartproducts_domain_model_product_product.regular_price';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= ':
            <del>
                <span class="price">
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$array10 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.price', $array10)]);
};
$arguments6 = array();
$arguments6['currencySign'] = NULL;
$arguments6['decimalSeparator'] = NULL;
$arguments6['thousandsSeparator'] = NULL;
$arguments6['prependCurrency'] = NULL;
$arguments6['separateCurrency'] = NULL;
$arguments6['decimals'] = NULL;
$arguments6['currencyTranslation'] = 1.0;
$array8 = array (
);$arguments6['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array8);
$array9 = array (
);$arguments6['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array9);

$output3 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
                </span>
            </del>
        </div>
        <div class="special_price">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'tx_cartproducts_domain_model_product_product.special_price';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output3 .= ':
            <span class="price">
                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Extcode\CartProducts\ViewHelpers\Product\BestSpecialPriceViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['product'] = NULL;
$array19 = array (
);$arguments17['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array19);
return Extcode\CartProducts\ViewHelpers\Product\BestSpecialPriceViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
};
$arguments13 = array();
$arguments13['currencySign'] = NULL;
$arguments13['decimalSeparator'] = NULL;
$arguments13['thousandsSeparator'] = NULL;
$arguments13['prependCurrency'] = NULL;
$arguments13['separateCurrency'] = NULL;
$arguments13['decimals'] = NULL;
$arguments13['currencyTranslation'] = 1.0;
$array15 = array (
);$arguments13['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array15);
$array16 = array (
);$arguments13['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array16);

$output3 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output3 .= '
            </span>
        </div>
        <div class="special_price_percentage_discount">
            <strong>(Sie sparen: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Extcode\CartProducts\ViewHelpers\Product\BestSpecialPricePercentageDiscountViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['product'] = NULL;
$array24 = array (
);$arguments22['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array24);
return Extcode\CartProducts\ViewHelpers\Product\BestSpecialPricePercentageDiscountViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
};
$arguments20 = array();
$arguments20['decimals'] = '2';
$arguments20['decimalSeparator'] = '.';
$arguments20['thousandsSeparator'] = ',';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\NumberViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output3 .= ' %)</strong>
        </div>
    ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
        <div class="regular_price">
            <span class="price">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                        ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$array51 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.beVariants.0.priceCalculated', $array51)]);
};
$arguments47 = array();
$arguments47['currencySign'] = NULL;
$arguments47['decimalSeparator'] = NULL;
$arguments47['thousandsSeparator'] = NULL;
$arguments47['prependCurrency'] = NULL;
$arguments47['separateCurrency'] = NULL;
$arguments47['decimals'] = NULL;
$arguments47['currencyTranslation'] = 1.0;
$array49 = array (
);$arguments47['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array49);
$array50 = array (
);$arguments47['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array50);

$output46 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                    ';
return $output46;
};
$arguments44 = array();

$output43 .= '';

$output43 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                        ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$array59 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.minPrice', $array59)]);
};
$arguments55 = array();
$arguments55['currencySign'] = NULL;
$arguments55['decimalSeparator'] = NULL;
$arguments55['thousandsSeparator'] = NULL;
$arguments55['prependCurrency'] = NULL;
$arguments55['separateCurrency'] = NULL;
$arguments55['decimals'] = NULL;
$arguments55['currencyTranslation'] = 1.0;
$array57 = array (
);$arguments55['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array57);
$array58 = array (
);$arguments55['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array58);

$output54 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
                    ';
return $output54;
};
$arguments52 = array();
$arguments52['if'] = NULL;

$output43 .= '';

$output43 .= '
                ';
return $output43;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('product.beVariants', $array41);

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                        ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array33 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.beVariants.0.priceCalculated', $array33)]);
};
$arguments29 = array();
$arguments29['currencySign'] = NULL;
$arguments29['decimalSeparator'] = NULL;
$arguments29['thousandsSeparator'] = NULL;
$arguments29['prependCurrency'] = NULL;
$arguments29['separateCurrency'] = NULL;
$arguments29['decimals'] = NULL;
$arguments29['currencyTranslation'] = 1.0;
$array31 = array (
);$arguments29['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array31);
$array32 = array (
);$arguments29['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array32);

$output28 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
                    ';
return $output28;
};
$arguments26['__elseClosures'][] = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                        ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array39 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.minPrice', $array39)]);
};
$arguments35 = array();
$arguments35['currencySign'] = NULL;
$arguments35['decimalSeparator'] = NULL;
$arguments35['thousandsSeparator'] = NULL;
$arguments35['prependCurrency'] = NULL;
$arguments35['separateCurrency'] = NULL;
$arguments35['decimals'] = NULL;
$arguments35['currencyTranslation'] = 1.0;
$array37 = array (
);$arguments35['currencyTranslation'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencyTranslation', $array37);
$array38 = array (
);$arguments35['currencySign'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData.currencySign', $array38);

$output34 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                    ';
return $output34;
};

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
            </span>
        </div>
    ';
return $output25;
};

$output0 .= Extcode\CartProducts\ViewHelpers\Product\IfBestSpecialPriceAvailableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
        <div class="quantity_discount">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$arguments146['languageKey'] = NULL;
$arguments146['alternativeLanguageKeys'] = NULL;
$arguments146['key'] = 'tx_cartproducts_domain_model_product_product.quantity_discounts';

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext)]);

$output145 .= ':
            <ul>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
                    <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['key'] = NULL;
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$arguments152['languageKey'] = NULL;
$arguments152['alternativeLanguageKeys'] = NULL;
$arguments152['key'] = 'tx_cartproducts_domain_model_product_product.quantity_discount_from';
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('quantityDiscount.quantity', $array155);
$arguments152['arguments'] = $array154;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext)]);

$output151 .= ': ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$array158 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('quantityDiscount.price', $array158)]);
};
$arguments156 = array();
$arguments156['currencySign'] = NULL;
$arguments156['decimalSeparator'] = NULL;
$arguments156['thousandsSeparator'] = NULL;
$arguments156['prependCurrency'] = NULL;
$arguments156['separateCurrency'] = NULL;
$arguments156['decimals'] = NULL;
$arguments156['currencyTranslation'] = 1.0;

$output151 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output151 .= '</li>
                ';
return $output151;
};
$arguments148 = array();
$arguments148['each'] = NULL;
$arguments148['as'] = NULL;
$arguments148['key'] = NULL;
$arguments148['reverse'] = false;
$arguments148['iteration'] = NULL;
$array150 = array (
);$arguments148['each'] = $renderingContext->getVariableProvider()->getByPath('product.quantityDiscounts', $array150);
$arguments148['as'] = 'quantityDiscount';

$output145 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output145 .= '
            </ul>
        </div>
    ';
return $output145;
};
$arguments143 = array();

$output142 .= '';

$output142 .= '
';
return $output142;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityDiscounts', $array140);

$expression141 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
        <div class="quantity_discount">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['languageKey'] = NULL;
$arguments126['alternativeLanguageKeys'] = NULL;
$arguments126['key'] = 'tx_cartproducts_domain_model_product_product.quantity_discounts';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext)]);

$output125 .= ':
            <ul>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
                    <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['key'] = NULL;
$arguments132['id'] = NULL;
$arguments132['default'] = NULL;
$arguments132['arguments'] = NULL;
$arguments132['extensionName'] = NULL;
$arguments132['languageKey'] = NULL;
$arguments132['alternativeLanguageKeys'] = NULL;
$arguments132['key'] = 'tx_cartproducts_domain_model_product_product.quantity_discount_from';
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('quantityDiscount.quantity', $array135);
$arguments132['arguments'] = $array134;

$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext)]);

$output131 .= ': ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$array138 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('quantityDiscount.price', $array138)]);
};
$arguments136 = array();
$arguments136['currencySign'] = NULL;
$arguments136['decimalSeparator'] = NULL;
$arguments136['thousandsSeparator'] = NULL;
$arguments136['prependCurrency'] = NULL;
$arguments136['separateCurrency'] = NULL;
$arguments136['decimals'] = NULL;
$arguments136['currencyTranslation'] = 1.0;

$output131 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output131 .= '</li>
                ';
return $output131;
};
$arguments128 = array();
$arguments128['each'] = NULL;
$arguments128['as'] = NULL;
$arguments128['key'] = NULL;
$arguments128['reverse'] = false;
$arguments128['iteration'] = NULL;
$array130 = array (
);$arguments128['each'] = $renderingContext->getVariableProvider()->getByPath('product.quantityDiscounts', $array130);
$arguments128['as'] = 'quantityDiscount';

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output125 .= '
            </ul>
        </div>
    ';
return $output125;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#