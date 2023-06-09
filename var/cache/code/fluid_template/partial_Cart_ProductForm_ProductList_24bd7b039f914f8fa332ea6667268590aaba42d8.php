<?php

class partial_Cart_ProductForm_ProductList_24bd7b039f914f8fa332ea6667268590aaba42d8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section withoutVariant
 */
public function section_c73a9419a668b4857b25e776534e63590821dcba(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['then'] = '';
$arguments1['else'] = 'danger';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '">
        <td colspan="2" class="col-md-6">
            <div class="product-name">
                ';
$array6 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.title', $array6)]);

$output0 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('product.feVariant.value', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$output12 = '';

$output12 .= '- ';
$array13 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.feVariant.value', $array13)]);
$arguments7['then'] = $output12;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
            </div>
            <p>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['languageKey'] = NULL;
$arguments14['alternativeLanguageKeys'] = NULL;
$arguments14['key'] = 'tx_cart_domain_model_order_product.sku.short';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output0 .= '
                : ';
$array16 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.sku', $array16)]);

$output0 .= '
            </p>
        </td>
        <td class="col-md-2 text-right">
            <span class="price">
                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array20 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.bestPrice', $array20)]);
};
$arguments17 = array();
$arguments17['currencySign'] = NULL;
$arguments17['decimalSeparator'] = NULL;
$arguments17['thousandsSeparator'] = NULL;
$arguments17['prependCurrency'] = NULL;
$arguments17['separateCurrency'] = NULL;
$arguments17['decimals'] = NULL;
$arguments17['currencyTranslation'] = 1.0;
$array19 = array (
);$arguments17['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array19);

$output0 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
            </span>
        </td>
        <td class="col-md-1 text-right">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['aria'] = NULL;
$arguments21['name'] = NULL;
$arguments21['value'] = NULL;
$arguments21['property'] = NULL;
$arguments21['autofocus'] = NULL;
$arguments21['disabled'] = NULL;
$arguments21['maxlength'] = NULL;
$arguments21['readonly'] = NULL;
$arguments21['size'] = NULL;
$arguments21['placeholder'] = NULL;
$arguments21['pattern'] = NULL;
$arguments21['errorClass'] = 'f3-form-error';
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['required'] = false;
$arguments21['type'] = 'text';
$arguments21['class'] = 'form-control form-control-inline';
$arguments21['type'] = 'text';
$array23 = array (
);$arguments21['value'] = $renderingContext->getVariableProvider()->getByPath('product.quantity', $array23);
$output24 = '';

$output24 .= 'quantities[';
$array25 = array (
);
$output24 .= $renderingContext->getVariableProvider()->getByPath('product.id', $array25);

$output24 .= ']';
$arguments21['name'] = $output24;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
        </td>
        <td class="col-md-2 text-right">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$array60 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.gross', $array60)]);
};
$arguments57 = array();
$arguments57['currencySign'] = NULL;
$arguments57['decimalSeparator'] = NULL;
$arguments57['thousandsSeparator'] = NULL;
$arguments57['prependCurrency'] = NULL;
$arguments57['separateCurrency'] = NULL;
$arguments57['decimals'] = NULL;
$arguments57['currencyTranslation'] = 1.0;
$array59 = array (
);$arguments57['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array59);

$output56 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
                ';
return $output56;
};
$arguments54 = array();

$output53 .= '';

$output53 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['key'] = NULL;
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['languageKey'] = NULL;
$arguments70['alternativeLanguageKeys'] = NULL;
$arguments70['key'] = 'tx_cart.quantityBelowRange';

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output69 .= '
                    ';
return $output69;
};
$arguments64 = array();
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$arguments64['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array67 = array (
);$array66['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array67);

$expression68 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments64['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments64['__thenClosure'] = $renderChildrenClosure65;

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['key'] = NULL;
$arguments78['id'] = NULL;
$arguments78['default'] = NULL;
$arguments78['arguments'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['languageKey'] = NULL;
$arguments78['alternativeLanguageKeys'] = NULL;
$arguments78['key'] = 'tx_cart.quantityAboveRange';

$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output77 .= '
                    ';
return $output77;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array75);

$expression76 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = $renderChildrenClosure73;

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output63 .= '
                ';
return $output63;
};
$arguments61 = array();
$arguments61['if'] = NULL;

$output53 .= '';

$output53 .= '
            ';
return $output53;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array32 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.gross', $array32)]);
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
);$arguments29['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array31);

$output28 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
                ';
return $output28;
};
$arguments26['__elseClosures'][] = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$arguments40['key'] = 'tx_cart.quantityBelowRange';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= '
                    ';
return $output39;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array37);

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments34['__thenClosure'] = $renderChildrenClosure35;

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['languageKey'] = NULL;
$arguments48['alternativeLanguageKeys'] = NULL;
$arguments48['key'] = 'tx_cart.quantityAboveRange';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output47 .= '
                    ';
return $output47;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array45);

$expression46 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments42['__thenClosure'] = $renderChildrenClosure43;

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output33 .= '
                ';
return $output33;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '
        </td>
        <td class="last col-md-1 text-right">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                <span class="delete-link btn btn-danger" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['key'] = NULL;
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['languageKey'] = NULL;
$arguments85['alternativeLanguageKeys'] = NULL;
$arguments85['key'] = 'tx_cart.remove_product';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '">x</span>
            ';
return $output84;
};
$arguments80 = array();
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['aria'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['name'] = NULL;
$arguments80['rel'] = NULL;
$arguments80['rev'] = NULL;
$arguments80['target'] = NULL;
$arguments80['action'] = NULL;
$arguments80['controller'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['pluginName'] = NULL;
$arguments80['pageUid'] = NULL;
$arguments80['pageType'] = NULL;
$arguments80['noCache'] = NULL;
$arguments80['noCacheHash'] = NULL;
$arguments80['section'] = NULL;
$arguments80['format'] = NULL;
$arguments80['linkAccessRestrictedPages'] = NULL;
$arguments80['additionalParams'] = NULL;
$arguments80['absolute'] = NULL;
$arguments80['addQueryString'] = NULL;
$arguments80['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments80['addQueryStringMethod'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['controller'] = 'Cart\\Product';
$arguments80['action'] = 'remove';
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['product'] = $renderingContext->getVariableProvider()->getByPath('product.id', $array83);
$arguments80['arguments'] = $array82;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output0 .= '
        </td>
    </tr>
';

return $output0;
}
/**
 * section variant
 */
public function section_0e1d14a2180a6234ff47e1903faa5dbd7b45697b(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output87 = '';

$output87 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['section'] = NULL;
$arguments193['partial'] = NULL;
$arguments193['delegate'] = NULL;
$arguments193['renderable'] = NULL;
$arguments193['arguments'] = array (
);
$arguments193['optional'] = false;
$arguments193['default'] = NULL;
$arguments193['contentAs'] = NULL;
$arguments193['debug'] = true;
$arguments193['section'] = 'variant';
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['variant'] = $renderingContext->getVariableProvider()->getByPath('variantVariant', $array196);
$array197 = array (
);$array195['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array197);
$arguments193['arguments'] = $array195;

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '
            ';
return $output192;
};
$arguments189 = array();
$arguments189['each'] = NULL;
$arguments189['as'] = NULL;
$arguments189['key'] = NULL;
$arguments189['reverse'] = false;
$arguments189['iteration'] = NULL;
$array191 = array (
);$arguments189['each'] = $renderingContext->getVariableProvider()->getByPath('variant.beVariants', $array191);
$arguments189['as'] = 'variantVariant';

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
        ';
return $output188;
};
$arguments186 = array();

$output185 .= '';

$output185 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
            <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array204);

$expression205 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments201['then'] = '';
$arguments201['else'] = 'danger';

$output200 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= '">
                <td class="col-md-1">&nbsp;</td>
                <td class="col-md-5">
                    <div class="product-name">';
$array206 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.title', $array206)]);

$output200 .= '</div>
                    <p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['key'] = NULL;
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$arguments207['languageKey'] = NULL;
$arguments207['alternativeLanguageKeys'] = NULL;
$arguments207['key'] = 'tx_cart_domain_model_order_product.sku.short';

$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output200 .= '
                        : ';
$array209 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.completeSku', $array209)]);

$output200 .= '
                    </p>
                </td>
                <td class="col-md-2 text-right">
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$array213 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.bestPriceCalculated', $array213)]);
};
$arguments210 = array();
$arguments210['currencySign'] = NULL;
$arguments210['decimalSeparator'] = NULL;
$arguments210['thousandsSeparator'] = NULL;
$arguments210['prependCurrency'] = NULL;
$arguments210['separateCurrency'] = NULL;
$arguments210['decimals'] = NULL;
$arguments210['currencyTranslation'] = 1.0;
$array212 = array (
);$arguments210['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array212);

$output200 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output200 .= '
                </td>
                <td class="col-md-1">
                    <div class="qty-wrapper">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['additionalAttributes'] = NULL;
$arguments214['data'] = NULL;
$arguments214['aria'] = NULL;
$arguments214['name'] = NULL;
$arguments214['value'] = NULL;
$arguments214['property'] = NULL;
$arguments214['autofocus'] = NULL;
$arguments214['disabled'] = NULL;
$arguments214['maxlength'] = NULL;
$arguments214['readonly'] = NULL;
$arguments214['size'] = NULL;
$arguments214['placeholder'] = NULL;
$arguments214['pattern'] = NULL;
$arguments214['errorClass'] = 'f3-form-error';
$arguments214['class'] = NULL;
$arguments214['dir'] = NULL;
$arguments214['id'] = NULL;
$arguments214['lang'] = NULL;
$arguments214['style'] = NULL;
$arguments214['title'] = NULL;
$arguments214['accesskey'] = NULL;
$arguments214['tabindex'] = NULL;
$arguments214['onclick'] = NULL;
$arguments214['required'] = false;
$arguments214['type'] = 'text';
$arguments214['class'] = 'form-control form-control-inline';
$arguments214['type'] = 'text';
$array216 = array (
);$arguments214['value'] = $renderingContext->getVariableProvider()->getByPath('variant.quantity', $array216);
$output217 = '';

$output217 .= 'quantities';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\FieldNameViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['product'] = 0;
$arguments218['variant'] = 0;
$array220 = array (
);$arguments218['variant'] = $renderingContext->getVariableProvider()->getByPath('variant', $array220);

$output217 .= Extcode\Cart\ViewHelpers\FieldNameViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);
$arguments214['name'] = $output217;

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output200 .= '
                    </div>
                </td>
                <td class="col-md-2 text-right">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$array255 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.gross', $array255)]);
};
$arguments252 = array();
$arguments252['currencySign'] = NULL;
$arguments252['decimalSeparator'] = NULL;
$arguments252['thousandsSeparator'] = NULL;
$arguments252['prependCurrency'] = NULL;
$arguments252['separateCurrency'] = NULL;
$arguments252['decimals'] = NULL;
$arguments252['currencyTranslation'] = 1.0;
$array254 = array (
);$arguments252['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array254);

$output251 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
                        ';
return $output251;
};
$arguments249 = array();

$output248 .= '';

$output248 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['key'] = NULL;
$arguments265['id'] = NULL;
$arguments265['default'] = NULL;
$arguments265['arguments'] = NULL;
$arguments265['extensionName'] = NULL;
$arguments265['languageKey'] = NULL;
$arguments265['alternativeLanguageKeys'] = NULL;
$arguments265['key'] = 'tx_cart.quantityBelowRange';

$output264 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext)]);

$output264 .= '
                            ';
return $output264;
};
$arguments259 = array();
$arguments259['then'] = NULL;
$arguments259['else'] = NULL;
$arguments259['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array262);

$expression263 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments259['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments259['__thenClosure'] = $renderChildrenClosure260;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output258 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['key'] = NULL;
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$arguments273['languageKey'] = NULL;
$arguments273['alternativeLanguageKeys'] = NULL;
$arguments273['key'] = 'tx_cart.quantityAboveRange';

$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext)]);

$output272 .= '
                            ';
return $output272;
};
$arguments267 = array();
$arguments267['then'] = NULL;
$arguments267['else'] = NULL;
$arguments267['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array269 = array();
$array270 = array (
);$array269['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array270);

$expression271 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments267['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression271(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array269)
					),
					$renderingContext
				);
$arguments267['__thenClosure'] = $renderChildrenClosure268;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output258 .= '
                        ';
return $output258;
};
$arguments256 = array();
$arguments256['if'] = NULL;

$output248 .= '';

$output248 .= '
                    ';
return $output248;
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array246 = array (
);$array245['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array246);

$expression247 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);
$arguments221['__thenClosure'] = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$array227 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.gross', $array227)]);
};
$arguments224 = array();
$arguments224['currencySign'] = NULL;
$arguments224['decimalSeparator'] = NULL;
$arguments224['thousandsSeparator'] = NULL;
$arguments224['prependCurrency'] = NULL;
$arguments224['separateCurrency'] = NULL;
$arguments224['decimals'] = NULL;
$arguments224['currencyTranslation'] = 1.0;
$array226 = array (
);$arguments224['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array226);

$output223 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '
                        ';
return $output223;
};
$arguments221['__elseClosures'][] = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['key'] = NULL;
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$arguments235['languageKey'] = NULL;
$arguments235['alternativeLanguageKeys'] = NULL;
$arguments235['key'] = 'tx_cart.quantityBelowRange';

$output234 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext)]);

$output234 .= '
                            ';
return $output234;
};
$arguments229 = array();
$arguments229['then'] = NULL;
$arguments229['else'] = NULL;
$arguments229['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array231 = array();
$array232 = array (
);$array231['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array232);

$expression233 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments229['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression233(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array231)
					),
					$renderingContext
				);
$arguments229['__thenClosure'] = $renderChildrenClosure230;

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['key'] = NULL;
$arguments243['id'] = NULL;
$arguments243['default'] = NULL;
$arguments243['arguments'] = NULL;
$arguments243['extensionName'] = NULL;
$arguments243['languageKey'] = NULL;
$arguments243['alternativeLanguageKeys'] = NULL;
$arguments243['key'] = 'tx_cart.quantityAboveRange';

$output242 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext)]);

$output242 .= '
                            ';
return $output242;
};
$arguments237 = array();
$arguments237['then'] = NULL;
$arguments237['else'] = NULL;
$arguments237['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array239 = array();
$array240 = array (
);$array239['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array240);

$expression241 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments237['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression241(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array239)
					),
					$renderingContext
				);
$arguments237['__thenClosure'] = $renderChildrenClosure238;

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output228 .= '
                        ';
return $output228;
};

$output200 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output200 .= '
                </td>
                <td class="last col-md-1 text-right">
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
                        <span class="delete-link btn btn-danger" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['key'] = NULL;
$arguments280['id'] = NULL;
$arguments280['default'] = NULL;
$arguments280['arguments'] = NULL;
$arguments280['extensionName'] = NULL;
$arguments280['languageKey'] = NULL;
$arguments280['alternativeLanguageKeys'] = NULL;
$arguments280['key'] = 'tx_cart.remove_product';

$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext)]);

$output279 .= '">x</span>
                    ';
return $output279;
};
$arguments275 = array();
$arguments275['additionalAttributes'] = NULL;
$arguments275['data'] = NULL;
$arguments275['aria'] = NULL;
$arguments275['class'] = NULL;
$arguments275['dir'] = NULL;
$arguments275['id'] = NULL;
$arguments275['lang'] = NULL;
$arguments275['style'] = NULL;
$arguments275['title'] = NULL;
$arguments275['accesskey'] = NULL;
$arguments275['tabindex'] = NULL;
$arguments275['onclick'] = NULL;
$arguments275['name'] = NULL;
$arguments275['rel'] = NULL;
$arguments275['rev'] = NULL;
$arguments275['target'] = NULL;
$arguments275['action'] = NULL;
$arguments275['controller'] = NULL;
$arguments275['extensionName'] = NULL;
$arguments275['pluginName'] = NULL;
$arguments275['pageUid'] = NULL;
$arguments275['pageType'] = NULL;
$arguments275['noCache'] = NULL;
$arguments275['noCacheHash'] = NULL;
$arguments275['section'] = NULL;
$arguments275['format'] = NULL;
$arguments275['linkAccessRestrictedPages'] = NULL;
$arguments275['additionalParams'] = NULL;
$arguments275['absolute'] = NULL;
$arguments275['addQueryString'] = NULL;
$arguments275['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments275['addQueryStringMethod'] = NULL;
$arguments275['arguments'] = NULL;
$arguments275['product'] = NULL;
$arguments275['beVariant'] = NULL;
$arguments275['controller'] = 'Cart\\Product';
$arguments275['action'] = 'remove';
$array277 = array (
);$arguments275['product'] = $renderingContext->getVariableProvider()->getByPath('variant.product', $array277);
$array278 = array (
);$arguments275['beVariant'] = $renderingContext->getVariableProvider()->getByPath('variant', $array278);

$output200 .= Extcode\Cart\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output200 .= '
                </td>
            </tr>
        ';
return $output200;
};
$arguments198 = array();
$arguments198['if'] = NULL;

$output185 .= '';

$output185 .= '
    ';
return $output185;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('variant.beVariants', $array183);

$expression184 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['section'] = NULL;
$arguments95['partial'] = NULL;
$arguments95['delegate'] = NULL;
$arguments95['renderable'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['optional'] = false;
$arguments95['default'] = NULL;
$arguments95['contentAs'] = NULL;
$arguments95['debug'] = true;
$arguments95['section'] = 'variant';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['variant'] = $renderingContext->getVariableProvider()->getByPath('variantVariant', $array98);
$array99 = array (
);$array97['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array99);
$arguments95['arguments'] = $array97;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
            ';
return $output94;
};
$arguments91 = array();
$arguments91['each'] = NULL;
$arguments91['as'] = NULL;
$arguments91['key'] = NULL;
$arguments91['reverse'] = false;
$arguments91['iteration'] = NULL;
$array93 = array (
);$arguments91['each'] = $renderingContext->getVariableProvider()->getByPath('variant.beVariants', $array93);
$arguments91['as'] = 'variantVariant';

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
        ';
return $output90;
};
$arguments88['__elseClosures'][] = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
            <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array104);

$expression105 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments101['then'] = '';
$arguments101['else'] = 'danger';

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '">
                <td class="col-md-1">&nbsp;</td>
                <td class="col-md-5">
                    <div class="product-name">';
$array106 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.title', $array106)]);

$output100 .= '</div>
                    <p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['key'] = NULL;
$arguments107['id'] = NULL;
$arguments107['default'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['languageKey'] = NULL;
$arguments107['alternativeLanguageKeys'] = NULL;
$arguments107['key'] = 'tx_cart_domain_model_order_product.sku.short';

$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output100 .= '
                        : ';
$array109 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.completeSku', $array109)]);

$output100 .= '
                    </p>
                </td>
                <td class="col-md-2 text-right">
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$array113 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.bestPriceCalculated', $array113)]);
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
);$arguments110['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array112);

$output100 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output100 .= '
                </td>
                <td class="col-md-1">
                    <div class="qty-wrapper">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['aria'] = NULL;
$arguments114['name'] = NULL;
$arguments114['value'] = NULL;
$arguments114['property'] = NULL;
$arguments114['autofocus'] = NULL;
$arguments114['disabled'] = NULL;
$arguments114['maxlength'] = NULL;
$arguments114['readonly'] = NULL;
$arguments114['size'] = NULL;
$arguments114['placeholder'] = NULL;
$arguments114['pattern'] = NULL;
$arguments114['errorClass'] = 'f3-form-error';
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['required'] = false;
$arguments114['type'] = 'text';
$arguments114['class'] = 'form-control form-control-inline';
$arguments114['type'] = 'text';
$array116 = array (
);$arguments114['value'] = $renderingContext->getVariableProvider()->getByPath('variant.quantity', $array116);
$output117 = '';

$output117 .= 'quantities';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\FieldNameViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['product'] = 0;
$arguments118['variant'] = 0;
$array120 = array (
);$arguments118['variant'] = $renderingContext->getVariableProvider()->getByPath('variant', $array120);

$output117 .= Extcode\Cart\ViewHelpers\FieldNameViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
$arguments114['name'] = $output117;

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output100 .= '
                    </div>
                </td>
                <td class="col-md-2 text-right">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$array155 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.gross', $array155)]);
};
$arguments152 = array();
$arguments152['currencySign'] = NULL;
$arguments152['decimalSeparator'] = NULL;
$arguments152['thousandsSeparator'] = NULL;
$arguments152['prependCurrency'] = NULL;
$arguments152['separateCurrency'] = NULL;
$arguments152['decimals'] = NULL;
$arguments152['currencyTranslation'] = 1.0;
$array154 = array (
);$arguments152['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array154);

$output151 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output151 .= '
                        ';
return $output151;
};
$arguments149 = array();

$output148 .= '';

$output148 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['key'] = NULL;
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$arguments165['languageKey'] = NULL;
$arguments165['alternativeLanguageKeys'] = NULL;
$arguments165['key'] = 'tx_cart.quantityBelowRange';

$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext)]);

$output164 .= '
                            ';
return $output164;
};
$arguments159 = array();
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array162);

$expression163 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments159['__thenClosure'] = $renderChildrenClosure160;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['key'] = NULL;
$arguments173['id'] = NULL;
$arguments173['default'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['extensionName'] = NULL;
$arguments173['languageKey'] = NULL;
$arguments173['alternativeLanguageKeys'] = NULL;
$arguments173['key'] = 'tx_cart.quantityAboveRange';

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output172 .= '
                            ';
return $output172;
};
$arguments167 = array();
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$arguments167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array170);

$expression171 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);
$arguments167['__thenClosure'] = $renderChildrenClosure168;

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output158 .= '
                        ';
return $output158;
};
$arguments156 = array();
$arguments156['if'] = NULL;

$output148 .= '';

$output148 .= '
                    ';
return $output148;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array146 = array (
);$array145['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array146);

$expression147 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);
$arguments121['__thenClosure'] = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$array127 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.gross', $array127)]);
};
$arguments124 = array();
$arguments124['currencySign'] = NULL;
$arguments124['decimalSeparator'] = NULL;
$arguments124['thousandsSeparator'] = NULL;
$arguments124['prependCurrency'] = NULL;
$arguments124['separateCurrency'] = NULL;
$arguments124['decimals'] = NULL;
$arguments124['currencyTranslation'] = 1.0;
$array126 = array (
);$arguments124['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array126);

$output123 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
                        ';
return $output123;
};
$arguments121['__elseClosures'][] = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['key'] = NULL;
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$arguments135['languageKey'] = NULL;
$arguments135['alternativeLanguageKeys'] = NULL;
$arguments135['key'] = 'tx_cart.quantityBelowRange';

$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext)]);

$output134 .= '
                            ';
return $output134;
};
$arguments129 = array();
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$arguments129['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array132);

$expression133 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments129['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments129['__thenClosure'] = $renderChildrenClosure130;

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['key'] = NULL;
$arguments143['id'] = NULL;
$arguments143['default'] = NULL;
$arguments143['arguments'] = NULL;
$arguments143['extensionName'] = NULL;
$arguments143['languageKey'] = NULL;
$arguments143['alternativeLanguageKeys'] = NULL;
$arguments143['key'] = 'tx_cart.quantityAboveRange';

$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output142 .= '
                            ';
return $output142;
};
$arguments137 = array();
$arguments137['then'] = NULL;
$arguments137['else'] = NULL;
$arguments137['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array140);

$expression141 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments137['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$arguments137['__thenClosure'] = $renderChildrenClosure138;

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output128 .= '
                        ';
return $output128;
};

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output100 .= '
                </td>
                <td class="last col-md-1 text-right">
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
                        <span class="delete-link btn btn-danger" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['key'] = NULL;
$arguments180['id'] = NULL;
$arguments180['default'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['languageKey'] = NULL;
$arguments180['alternativeLanguageKeys'] = NULL;
$arguments180['key'] = 'tx_cart.remove_product';

$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext)]);

$output179 .= '">x</span>
                    ';
return $output179;
};
$arguments175 = array();
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['aria'] = NULL;
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$arguments175['name'] = NULL;
$arguments175['rel'] = NULL;
$arguments175['rev'] = NULL;
$arguments175['target'] = NULL;
$arguments175['action'] = NULL;
$arguments175['controller'] = NULL;
$arguments175['extensionName'] = NULL;
$arguments175['pluginName'] = NULL;
$arguments175['pageUid'] = NULL;
$arguments175['pageType'] = NULL;
$arguments175['noCache'] = NULL;
$arguments175['noCacheHash'] = NULL;
$arguments175['section'] = NULL;
$arguments175['format'] = NULL;
$arguments175['linkAccessRestrictedPages'] = NULL;
$arguments175['additionalParams'] = NULL;
$arguments175['absolute'] = NULL;
$arguments175['addQueryString'] = NULL;
$arguments175['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments175['addQueryStringMethod'] = NULL;
$arguments175['arguments'] = NULL;
$arguments175['product'] = NULL;
$arguments175['beVariant'] = NULL;
$arguments175['controller'] = 'Cart\\Product';
$arguments175['action'] = 'remove';
$array177 = array (
);$arguments175['product'] = $renderingContext->getVariableProvider()->getByPath('variant.product', $array177);
$array178 = array (
);$arguments175['beVariant'] = $renderingContext->getVariableProvider()->getByPath('variant', $array178);

$output100 .= Extcode\Cart\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output100 .= '
                </td>
            </tr>
        ';
return $output100;
};

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
';

return $output87;
}
/**
 * section withVariant
 */
public function section_54b8ee6daa8755c7ba29a2cc01b17a611fc01c5a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output282 = '';

$output282 .= '
    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['then'] = NULL;
$arguments283['else'] = NULL;
$arguments283['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array286);

$expression287 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments283['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
$arguments283['then'] = '';
$arguments283['else'] = 'danger';

$output282 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output282 .= '">
        <td colspan="2">
            <div class="product-name">
                ';
$array288 = array (
);
$output282 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.title', $array288)]);

$output282 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['then'] = NULL;
$arguments289['else'] = NULL;
$arguments289['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array291 = array();
$array292 = array (
);$array291['0'] = $renderingContext->getVariableProvider()->getByPath('product.feVariant.value', $array292);

$expression293 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments289['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression293(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array291)
					),
					$renderingContext
				);
$output294 = '';

$output294 .= '- ';
$array295 = array (
);
$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.feVariant.value', $array295)]);
$arguments289['then'] = $output294;

$output282 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output282 .= '
            </div>
        </td>
        <td class="text-right">
            &nbsp;
        </td>
        <td class="a-center">
            &nbsp;
        </td>
        <td class="text-right">
            &nbsp;
        </td>
        <td class="last">
            &nbsp;
        </td>
    </tr>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['section'] = NULL;
$arguments300['partial'] = NULL;
$arguments300['delegate'] = NULL;
$arguments300['renderable'] = NULL;
$arguments300['arguments'] = array (
);
$arguments300['optional'] = false;
$arguments300['default'] = NULL;
$arguments300['contentAs'] = NULL;
$arguments300['debug'] = true;
$arguments300['section'] = 'variant';
// Rendering Array
$array302 = array();
$array303 = array (
);$array302['cart'] = $renderingContext->getVariableProvider()->getByPath('cart', $array303);
$array304 = array (
);$array302['variant'] = $renderingContext->getVariableProvider()->getByPath('variant', $array304);
$array305 = array (
);$array302['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array305);
$arguments300['arguments'] = $array302;

$output299 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output299 .= '
    ';
return $output299;
};
$arguments296 = array();
$arguments296['each'] = NULL;
$arguments296['as'] = NULL;
$arguments296['key'] = NULL;
$arguments296['reverse'] = false;
$arguments296['iteration'] = NULL;
$array298 = array (
);$arguments296['each'] = $renderingContext->getVariableProvider()->getByPath('product.beVariants', $array298);
$arguments296['as'] = 'variant';

$output282 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output282 .= '

    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['then'] = NULL;
$arguments306['else'] = NULL;
$arguments306['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array308 = array();
$array309 = array (
);$array308['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array309);

$expression310 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments306['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression310(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array308)
					),
					$renderingContext
				);
$arguments306['then'] = '';
$arguments306['else'] = 'danger';

$output282 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output282 .= '">
        <td colspan="2">
            &nbsp;
        </td>
        <td class="text-right">
            &nbsp;
        </td>
        <td class="a-center">
            <div class="qty-wrapper">
                ';
$array311 = array (
);
$output282 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.quantity', $array311)]);

$output282 .= '
            </div>
        </td>
        <td class="text-right">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$output325 = '';

$output325 .= '
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$array329 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.gross', $array329)]);
};
$arguments326 = array();
$arguments326['currencySign'] = NULL;
$arguments326['decimalSeparator'] = NULL;
$arguments326['thousandsSeparator'] = NULL;
$arguments326['prependCurrency'] = NULL;
$arguments326['separateCurrency'] = NULL;
$arguments326['decimals'] = NULL;
$arguments326['currencyTranslation'] = 1.0;
$array328 = array (
);$arguments326['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array328);

$output325 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output325 .= '
                ';
return $output325;
};
$arguments323 = array();

$output322 .= '';

$output322 .= '
            ';
return $output322;
};
$arguments312 = array();
$arguments312['then'] = NULL;
$arguments312['else'] = NULL;
$arguments312['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array319 = array();
$array320 = array (
);$array319['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array320);

$expression321 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments312['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression321(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array319)
					),
					$renderingContext
				);
$arguments312['__thenClosure'] = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$array318 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.gross', $array318)]);
};
$arguments315 = array();
$arguments315['currencySign'] = NULL;
$arguments315['decimalSeparator'] = NULL;
$arguments315['thousandsSeparator'] = NULL;
$arguments315['prependCurrency'] = NULL;
$arguments315['separateCurrency'] = NULL;
$arguments315['decimals'] = NULL;
$arguments315['currencyTranslation'] = 1.0;
$array317 = array (
);$arguments315['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array317);

$output314 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output314 .= '
                ';
return $output314;
};

$output282 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output282 .= '
        </td>
        <td class="last">
            &nbsp;
        </td>
    </tr>
';

return $output282;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output330 = '';

$output330 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['then'] = NULL;
$arguments334['else'] = NULL;
$arguments334['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array336 = array();
$array337 = array (
);$array336['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array337);

$expression338 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments334['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression338(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array336)
					),
					$renderingContext
				);
$arguments334['then'] = '';
$arguments334['else'] = 'danger';

$output333 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output333 .= '">
        <td colspan="2" class="col-md-6">
            <div class="product-name">
                ';
$array339 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.title', $array339)]);

$output333 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments340 = array();
$arguments340['then'] = NULL;
$arguments340['else'] = NULL;
$arguments340['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array342 = array();
$array343 = array (
);$array342['0'] = $renderingContext->getVariableProvider()->getByPath('product.feVariant.value', $array343);

$expression344 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments340['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression344(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array342)
					),
					$renderingContext
				);
$output345 = '';

$output345 .= '- ';
$array346 = array (
);
$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.feVariant.value', $array346)]);
$arguments340['then'] = $output345;

$output333 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output333 .= '
            </div>
            <p>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['key'] = NULL;
$arguments347['id'] = NULL;
$arguments347['default'] = NULL;
$arguments347['arguments'] = NULL;
$arguments347['extensionName'] = NULL;
$arguments347['languageKey'] = NULL;
$arguments347['alternativeLanguageKeys'] = NULL;
$arguments347['key'] = 'tx_cart_domain_model_order_product.sku.short';

$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext)]);

$output333 .= '
                : ';
$array349 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.sku', $array349)]);

$output333 .= '
            </p>
        </td>
        <td class="col-md-2 text-right">
            <span class="price">
                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$array353 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.bestPrice', $array353)]);
};
$arguments350 = array();
$arguments350['currencySign'] = NULL;
$arguments350['decimalSeparator'] = NULL;
$arguments350['thousandsSeparator'] = NULL;
$arguments350['prependCurrency'] = NULL;
$arguments350['separateCurrency'] = NULL;
$arguments350['decimals'] = NULL;
$arguments350['currencyTranslation'] = 1.0;
$array352 = array (
);$arguments350['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array352);

$output333 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output333 .= '
            </span>
        </td>
        <td class="col-md-1 text-right">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments354 = array();
$arguments354['additionalAttributes'] = NULL;
$arguments354['data'] = NULL;
$arguments354['aria'] = NULL;
$arguments354['name'] = NULL;
$arguments354['value'] = NULL;
$arguments354['property'] = NULL;
$arguments354['autofocus'] = NULL;
$arguments354['disabled'] = NULL;
$arguments354['maxlength'] = NULL;
$arguments354['readonly'] = NULL;
$arguments354['size'] = NULL;
$arguments354['placeholder'] = NULL;
$arguments354['pattern'] = NULL;
$arguments354['errorClass'] = 'f3-form-error';
$arguments354['class'] = NULL;
$arguments354['dir'] = NULL;
$arguments354['id'] = NULL;
$arguments354['lang'] = NULL;
$arguments354['style'] = NULL;
$arguments354['title'] = NULL;
$arguments354['accesskey'] = NULL;
$arguments354['tabindex'] = NULL;
$arguments354['onclick'] = NULL;
$arguments354['required'] = false;
$arguments354['type'] = 'text';
$arguments354['class'] = 'form-control form-control-inline';
$arguments354['type'] = 'text';
$array356 = array (
);$arguments354['value'] = $renderingContext->getVariableProvider()->getByPath('product.quantity', $array356);
$output357 = '';

$output357 .= 'quantities[';
$array358 = array (
);
$output357 .= $renderingContext->getVariableProvider()->getByPath('product.id', $array358);

$output357 .= ']';
$arguments354['name'] = $output357;

$output333 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output333 .= '
        </td>
        <td class="col-md-2 text-right">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
$array393 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.gross', $array393)]);
};
$arguments390 = array();
$arguments390['currencySign'] = NULL;
$arguments390['decimalSeparator'] = NULL;
$arguments390['thousandsSeparator'] = NULL;
$arguments390['prependCurrency'] = NULL;
$arguments390['separateCurrency'] = NULL;
$arguments390['decimals'] = NULL;
$arguments390['currencyTranslation'] = 1.0;
$array392 = array (
);$arguments390['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array392);

$output389 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output389 .= '
                ';
return $output389;
};
$arguments387 = array();

$output386 .= '';

$output386 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$output396 = '';

$output396 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$output402 = '';

$output402 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['key'] = NULL;
$arguments403['id'] = NULL;
$arguments403['default'] = NULL;
$arguments403['arguments'] = NULL;
$arguments403['extensionName'] = NULL;
$arguments403['languageKey'] = NULL;
$arguments403['alternativeLanguageKeys'] = NULL;
$arguments403['key'] = 'tx_cart.quantityBelowRange';

$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext)]);

$output402 .= '
                    ';
return $output402;
};
$arguments397 = array();
$arguments397['then'] = NULL;
$arguments397['else'] = NULL;
$arguments397['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array399 = array();
$array400 = array (
);$array399['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array400);

$expression401 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments397['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression401(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array399)
					),
					$renderingContext
				);
$arguments397['__thenClosure'] = $renderChildrenClosure398;

$output396 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output396 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
$output410 = '';

$output410 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments411 = array();
$arguments411['key'] = NULL;
$arguments411['id'] = NULL;
$arguments411['default'] = NULL;
$arguments411['arguments'] = NULL;
$arguments411['extensionName'] = NULL;
$arguments411['languageKey'] = NULL;
$arguments411['alternativeLanguageKeys'] = NULL;
$arguments411['key'] = 'tx_cart.quantityAboveRange';

$output410 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext)]);

$output410 .= '
                    ';
return $output410;
};
$arguments405 = array();
$arguments405['then'] = NULL;
$arguments405['else'] = NULL;
$arguments405['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array407 = array();
$array408 = array (
);$array407['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array408);

$expression409 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments405['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression409(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array407)
					),
					$renderingContext
				);
$arguments405['__thenClosure'] = $renderChildrenClosure406;

$output396 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output396 .= '
                ';
return $output396;
};
$arguments394 = array();
$arguments394['if'] = NULL;

$output386 .= '';

$output386 .= '
            ';
return $output386;
};
$arguments359 = array();
$arguments359['then'] = NULL;
$arguments359['else'] = NULL;
$arguments359['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array383 = array();
$array384 = array (
);$array383['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array384);

$expression385 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments359['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression385(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array383)
					),
					$renderingContext
				);
$arguments359['__thenClosure'] = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$array365 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.gross', $array365)]);
};
$arguments362 = array();
$arguments362['currencySign'] = NULL;
$arguments362['decimalSeparator'] = NULL;
$arguments362['thousandsSeparator'] = NULL;
$arguments362['prependCurrency'] = NULL;
$arguments362['separateCurrency'] = NULL;
$arguments362['decimals'] = NULL;
$arguments362['currencyTranslation'] = 1.0;
$array364 = array (
);$arguments362['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array364);

$output361 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output361 .= '
                ';
return $output361;
};
$arguments359['__elseClosures'][] = function() use ($renderingContext, $self) {
$output366 = '';

$output366 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['key'] = NULL;
$arguments373['id'] = NULL;
$arguments373['default'] = NULL;
$arguments373['arguments'] = NULL;
$arguments373['extensionName'] = NULL;
$arguments373['languageKey'] = NULL;
$arguments373['alternativeLanguageKeys'] = NULL;
$arguments373['key'] = 'tx_cart.quantityBelowRange';

$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext)]);

$output372 .= '
                    ';
return $output372;
};
$arguments367 = array();
$arguments367['then'] = NULL;
$arguments367['else'] = NULL;
$arguments367['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array369 = array();
$array370 = array (
);$array369['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array370);

$expression371 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments367['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression371(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array369)
					),
					$renderingContext
				);
$arguments367['__thenClosure'] = $renderChildrenClosure368;

$output366 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output366 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
$output380 = '';

$output380 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments381 = array();
$arguments381['key'] = NULL;
$arguments381['id'] = NULL;
$arguments381['default'] = NULL;
$arguments381['arguments'] = NULL;
$arguments381['extensionName'] = NULL;
$arguments381['languageKey'] = NULL;
$arguments381['alternativeLanguageKeys'] = NULL;
$arguments381['key'] = 'tx_cart.quantityAboveRange';

$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext)]);

$output380 .= '
                    ';
return $output380;
};
$arguments375 = array();
$arguments375['then'] = NULL;
$arguments375['else'] = NULL;
$arguments375['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array377 = array();
$array378 = array (
);$array377['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array378);

$expression379 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments375['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression379(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array377)
					),
					$renderingContext
				);
$arguments375['__thenClosure'] = $renderChildrenClosure376;

$output366 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output366 .= '
                ';
return $output366;
};

$output333 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output333 .= '
        </td>
        <td class="last col-md-1 text-right">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output417 = '';

$output417 .= '
                <span class="delete-link btn btn-danger" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['key'] = NULL;
$arguments418['id'] = NULL;
$arguments418['default'] = NULL;
$arguments418['arguments'] = NULL;
$arguments418['extensionName'] = NULL;
$arguments418['languageKey'] = NULL;
$arguments418['alternativeLanguageKeys'] = NULL;
$arguments418['key'] = 'tx_cart.remove_product';

$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext)]);

$output417 .= '">x</span>
            ';
return $output417;
};
$arguments413 = array();
$arguments413['additionalAttributes'] = NULL;
$arguments413['data'] = NULL;
$arguments413['aria'] = NULL;
$arguments413['class'] = NULL;
$arguments413['dir'] = NULL;
$arguments413['id'] = NULL;
$arguments413['lang'] = NULL;
$arguments413['style'] = NULL;
$arguments413['title'] = NULL;
$arguments413['accesskey'] = NULL;
$arguments413['tabindex'] = NULL;
$arguments413['onclick'] = NULL;
$arguments413['name'] = NULL;
$arguments413['rel'] = NULL;
$arguments413['rev'] = NULL;
$arguments413['target'] = NULL;
$arguments413['action'] = NULL;
$arguments413['controller'] = NULL;
$arguments413['extensionName'] = NULL;
$arguments413['pluginName'] = NULL;
$arguments413['pageUid'] = NULL;
$arguments413['pageType'] = NULL;
$arguments413['noCache'] = NULL;
$arguments413['noCacheHash'] = NULL;
$arguments413['section'] = NULL;
$arguments413['format'] = NULL;
$arguments413['linkAccessRestrictedPages'] = NULL;
$arguments413['additionalParams'] = NULL;
$arguments413['absolute'] = NULL;
$arguments413['addQueryString'] = NULL;
$arguments413['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments413['addQueryStringMethod'] = NULL;
$arguments413['arguments'] = NULL;
$arguments413['controller'] = 'Cart\\Product';
$arguments413['action'] = 'remove';
// Rendering Array
$array415 = array();
$array416 = array (
);$array415['product'] = $renderingContext->getVariableProvider()->getByPath('product.id', $array416);
$arguments413['arguments'] = $array415;

$output333 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output333 .= '
        </td>
    </tr>
';
return $output333;
};
$arguments331 = array();
$arguments331['name'] = NULL;
$arguments331['name'] = 'withoutVariant';

$output330 .= '';

$output330 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
$output422 = '';

$output422 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
$output523 = '';

$output523 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
$output527 = '';

$output527 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments528 = array();
$arguments528['section'] = NULL;
$arguments528['partial'] = NULL;
$arguments528['delegate'] = NULL;
$arguments528['renderable'] = NULL;
$arguments528['arguments'] = array (
);
$arguments528['optional'] = false;
$arguments528['default'] = NULL;
$arguments528['contentAs'] = NULL;
$arguments528['debug'] = true;
$arguments528['section'] = 'variant';
// Rendering Array
$array530 = array();
$array531 = array (
);$array530['variant'] = $renderingContext->getVariableProvider()->getByPath('variantVariant', $array531);
$array532 = array (
);$array530['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array532);
$arguments528['arguments'] = $array530;

$output527 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);

$output527 .= '
            ';
return $output527;
};
$arguments524 = array();
$arguments524['each'] = NULL;
$arguments524['as'] = NULL;
$arguments524['key'] = NULL;
$arguments524['reverse'] = false;
$arguments524['iteration'] = NULL;
$array526 = array (
);$arguments524['each'] = $renderingContext->getVariableProvider()->getByPath('variant.beVariants', $array526);
$arguments524['as'] = 'variantVariant';

$output523 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output523 .= '
        ';
return $output523;
};
$arguments521 = array();

$output520 .= '';

$output520 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
$output535 = '';

$output535 .= '
            <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments536 = array();
$arguments536['then'] = NULL;
$arguments536['else'] = NULL;
$arguments536['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array538 = array();
$array539 = array (
);$array538['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array539);

$expression540 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments536['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression540(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array538)
					),
					$renderingContext
				);
$arguments536['then'] = '';
$arguments536['else'] = 'danger';

$output535 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output535 .= '">
                <td class="col-md-1">&nbsp;</td>
                <td class="col-md-5">
                    <div class="product-name">';
$array541 = array (
);
$output535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.title', $array541)]);

$output535 .= '</div>
                    <p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments542 = array();
$arguments542['key'] = NULL;
$arguments542['id'] = NULL;
$arguments542['default'] = NULL;
$arguments542['arguments'] = NULL;
$arguments542['extensionName'] = NULL;
$arguments542['languageKey'] = NULL;
$arguments542['alternativeLanguageKeys'] = NULL;
$arguments542['key'] = 'tx_cart_domain_model_order_product.sku.short';

$output535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext)]);

$output535 .= '
                        : ';
$array544 = array (
);
$output535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.completeSku', $array544)]);

$output535 .= '
                    </p>
                </td>
                <td class="col-md-2 text-right">
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
$array548 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.bestPriceCalculated', $array548)]);
};
$arguments545 = array();
$arguments545['currencySign'] = NULL;
$arguments545['decimalSeparator'] = NULL;
$arguments545['thousandsSeparator'] = NULL;
$arguments545['prependCurrency'] = NULL;
$arguments545['separateCurrency'] = NULL;
$arguments545['decimals'] = NULL;
$arguments545['currencyTranslation'] = 1.0;
$array547 = array (
);$arguments545['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array547);

$output535 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);

$output535 .= '
                </td>
                <td class="col-md-1">
                    <div class="qty-wrapper">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['additionalAttributes'] = NULL;
$arguments549['data'] = NULL;
$arguments549['aria'] = NULL;
$arguments549['name'] = NULL;
$arguments549['value'] = NULL;
$arguments549['property'] = NULL;
$arguments549['autofocus'] = NULL;
$arguments549['disabled'] = NULL;
$arguments549['maxlength'] = NULL;
$arguments549['readonly'] = NULL;
$arguments549['size'] = NULL;
$arguments549['placeholder'] = NULL;
$arguments549['pattern'] = NULL;
$arguments549['errorClass'] = 'f3-form-error';
$arguments549['class'] = NULL;
$arguments549['dir'] = NULL;
$arguments549['id'] = NULL;
$arguments549['lang'] = NULL;
$arguments549['style'] = NULL;
$arguments549['title'] = NULL;
$arguments549['accesskey'] = NULL;
$arguments549['tabindex'] = NULL;
$arguments549['onclick'] = NULL;
$arguments549['required'] = false;
$arguments549['type'] = 'text';
$arguments549['class'] = 'form-control form-control-inline';
$arguments549['type'] = 'text';
$array551 = array (
);$arguments549['value'] = $renderingContext->getVariableProvider()->getByPath('variant.quantity', $array551);
$output552 = '';

$output552 .= 'quantities';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\FieldNameViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments553 = array();
$arguments553['product'] = 0;
$arguments553['variant'] = 0;
$array555 = array (
);$arguments553['variant'] = $renderingContext->getVariableProvider()->getByPath('variant', $array555);

$output552 .= Extcode\Cart\ViewHelpers\FieldNameViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);
$arguments549['name'] = $output552;

$output535 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output535 .= '
                    </div>
                </td>
                <td class="col-md-2 text-right">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$output583 = '';

$output583 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
$array590 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.gross', $array590)]);
};
$arguments587 = array();
$arguments587['currencySign'] = NULL;
$arguments587['decimalSeparator'] = NULL;
$arguments587['thousandsSeparator'] = NULL;
$arguments587['prependCurrency'] = NULL;
$arguments587['separateCurrency'] = NULL;
$arguments587['decimals'] = NULL;
$arguments587['currencyTranslation'] = 1.0;
$array589 = array (
);$arguments587['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array589);

$output586 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output586 .= '
                        ';
return $output586;
};
$arguments584 = array();

$output583 .= '';

$output583 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure592 = function() use ($renderingContext, $self) {
$output593 = '';

$output593 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
$output599 = '';

$output599 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments600 = array();
$arguments600['key'] = NULL;
$arguments600['id'] = NULL;
$arguments600['default'] = NULL;
$arguments600['arguments'] = NULL;
$arguments600['extensionName'] = NULL;
$arguments600['languageKey'] = NULL;
$arguments600['alternativeLanguageKeys'] = NULL;
$arguments600['key'] = 'tx_cart.quantityBelowRange';

$output599 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext)]);

$output599 .= '
                            ';
return $output599;
};
$arguments594 = array();
$arguments594['then'] = NULL;
$arguments594['else'] = NULL;
$arguments594['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array596 = array();
$array597 = array (
);$array596['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array597);

$expression598 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments594['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression598(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array596)
					),
					$renderingContext
				);
$arguments594['__thenClosure'] = $renderChildrenClosure595;

$output593 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext);

$output593 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
$output607 = '';

$output607 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments608 = array();
$arguments608['key'] = NULL;
$arguments608['id'] = NULL;
$arguments608['default'] = NULL;
$arguments608['arguments'] = NULL;
$arguments608['extensionName'] = NULL;
$arguments608['languageKey'] = NULL;
$arguments608['alternativeLanguageKeys'] = NULL;
$arguments608['key'] = 'tx_cart.quantityAboveRange';

$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext)]);

$output607 .= '
                            ';
return $output607;
};
$arguments602 = array();
$arguments602['then'] = NULL;
$arguments602['else'] = NULL;
$arguments602['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array604 = array();
$array605 = array (
);$array604['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array605);

$expression606 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments602['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression606(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array604)
					),
					$renderingContext
				);
$arguments602['__thenClosure'] = $renderChildrenClosure603;

$output593 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);

$output593 .= '
                        ';
return $output593;
};
$arguments591 = array();
$arguments591['if'] = NULL;

$output583 .= '';

$output583 .= '
                    ';
return $output583;
};
$arguments556 = array();
$arguments556['then'] = NULL;
$arguments556['else'] = NULL;
$arguments556['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array580 = array();
$array581 = array (
);$array580['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array581);

$expression582 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments556['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression582(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array580)
					),
					$renderingContext
				);
$arguments556['__thenClosure'] = function() use ($renderingContext, $self) {
$output558 = '';

$output558 .= '
                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
$array562 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.gross', $array562)]);
};
$arguments559 = array();
$arguments559['currencySign'] = NULL;
$arguments559['decimalSeparator'] = NULL;
$arguments559['thousandsSeparator'] = NULL;
$arguments559['prependCurrency'] = NULL;
$arguments559['separateCurrency'] = NULL;
$arguments559['decimals'] = NULL;
$arguments559['currencyTranslation'] = 1.0;
$array561 = array (
);$arguments559['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array561);

$output558 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext);

$output558 .= '
                        ';
return $output558;
};
$arguments556['__elseClosures'][] = function() use ($renderingContext, $self) {
$output563 = '';

$output563 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
$output569 = '';

$output569 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments570 = array();
$arguments570['key'] = NULL;
$arguments570['id'] = NULL;
$arguments570['default'] = NULL;
$arguments570['arguments'] = NULL;
$arguments570['extensionName'] = NULL;
$arguments570['languageKey'] = NULL;
$arguments570['alternativeLanguageKeys'] = NULL;
$arguments570['key'] = 'tx_cart.quantityBelowRange';

$output569 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext)]);

$output569 .= '
                            ';
return $output569;
};
$arguments564 = array();
$arguments564['then'] = NULL;
$arguments564['else'] = NULL;
$arguments564['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array566 = array();
$array567 = array (
);$array566['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array567);

$expression568 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments564['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression568(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array566)
					),
					$renderingContext
				);
$arguments564['__thenClosure'] = $renderChildrenClosure565;

$output563 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext);

$output563 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
$output577 = '';

$output577 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments578 = array();
$arguments578['key'] = NULL;
$arguments578['id'] = NULL;
$arguments578['default'] = NULL;
$arguments578['arguments'] = NULL;
$arguments578['extensionName'] = NULL;
$arguments578['languageKey'] = NULL;
$arguments578['alternativeLanguageKeys'] = NULL;
$arguments578['key'] = 'tx_cart.quantityAboveRange';

$output577 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext)]);

$output577 .= '
                            ';
return $output577;
};
$arguments572 = array();
$arguments572['then'] = NULL;
$arguments572['else'] = NULL;
$arguments572['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array574 = array();
$array575 = array (
);$array574['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array575);

$expression576 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments572['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression576(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array574)
					),
					$renderingContext
				);
$arguments572['__thenClosure'] = $renderChildrenClosure573;

$output563 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext);

$output563 .= '
                        ';
return $output563;
};

$output535 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext);

$output535 .= '
                </td>
                <td class="last col-md-1 text-right">
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
$output614 = '';

$output614 .= '
                        <span class="delete-link btn btn-danger" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments615 = array();
$arguments615['key'] = NULL;
$arguments615['id'] = NULL;
$arguments615['default'] = NULL;
$arguments615['arguments'] = NULL;
$arguments615['extensionName'] = NULL;
$arguments615['languageKey'] = NULL;
$arguments615['alternativeLanguageKeys'] = NULL;
$arguments615['key'] = 'tx_cart.remove_product';

$output614 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext)]);

$output614 .= '">x</span>
                    ';
return $output614;
};
$arguments610 = array();
$arguments610['additionalAttributes'] = NULL;
$arguments610['data'] = NULL;
$arguments610['aria'] = NULL;
$arguments610['class'] = NULL;
$arguments610['dir'] = NULL;
$arguments610['id'] = NULL;
$arguments610['lang'] = NULL;
$arguments610['style'] = NULL;
$arguments610['title'] = NULL;
$arguments610['accesskey'] = NULL;
$arguments610['tabindex'] = NULL;
$arguments610['onclick'] = NULL;
$arguments610['name'] = NULL;
$arguments610['rel'] = NULL;
$arguments610['rev'] = NULL;
$arguments610['target'] = NULL;
$arguments610['action'] = NULL;
$arguments610['controller'] = NULL;
$arguments610['extensionName'] = NULL;
$arguments610['pluginName'] = NULL;
$arguments610['pageUid'] = NULL;
$arguments610['pageType'] = NULL;
$arguments610['noCache'] = NULL;
$arguments610['noCacheHash'] = NULL;
$arguments610['section'] = NULL;
$arguments610['format'] = NULL;
$arguments610['linkAccessRestrictedPages'] = NULL;
$arguments610['additionalParams'] = NULL;
$arguments610['absolute'] = NULL;
$arguments610['addQueryString'] = NULL;
$arguments610['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments610['addQueryStringMethod'] = NULL;
$arguments610['arguments'] = NULL;
$arguments610['product'] = NULL;
$arguments610['beVariant'] = NULL;
$arguments610['controller'] = 'Cart\\Product';
$arguments610['action'] = 'remove';
$array612 = array (
);$arguments610['product'] = $renderingContext->getVariableProvider()->getByPath('variant.product', $array612);
$array613 = array (
);$arguments610['beVariant'] = $renderingContext->getVariableProvider()->getByPath('variant', $array613);

$output535 .= Extcode\Cart\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments610, $renderChildrenClosure611, $renderingContext);

$output535 .= '
                </td>
            </tr>
        ';
return $output535;
};
$arguments533 = array();
$arguments533['if'] = NULL;

$output520 .= '';

$output520 .= '
    ';
return $output520;
};
$arguments423 = array();
$arguments423['then'] = NULL;
$arguments423['else'] = NULL;
$arguments423['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array517 = array();
$array518 = array (
);$array517['0'] = $renderingContext->getVariableProvider()->getByPath('variant.beVariants', $array518);

$expression519 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments423['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression519(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array517)
					),
					$renderingContext
				);
$arguments423['__thenClosure'] = function() use ($renderingContext, $self) {
$output425 = '';

$output425 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$output429 = '';

$output429 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['section'] = NULL;
$arguments430['partial'] = NULL;
$arguments430['delegate'] = NULL;
$arguments430['renderable'] = NULL;
$arguments430['arguments'] = array (
);
$arguments430['optional'] = false;
$arguments430['default'] = NULL;
$arguments430['contentAs'] = NULL;
$arguments430['debug'] = true;
$arguments430['section'] = 'variant';
// Rendering Array
$array432 = array();
$array433 = array (
);$array432['variant'] = $renderingContext->getVariableProvider()->getByPath('variantVariant', $array433);
$array434 = array (
);$array432['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array434);
$arguments430['arguments'] = $array432;

$output429 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output429 .= '
            ';
return $output429;
};
$arguments426 = array();
$arguments426['each'] = NULL;
$arguments426['as'] = NULL;
$arguments426['key'] = NULL;
$arguments426['reverse'] = false;
$arguments426['iteration'] = NULL;
$array428 = array (
);$arguments426['each'] = $renderingContext->getVariableProvider()->getByPath('variant.beVariants', $array428);
$arguments426['as'] = 'variantVariant';

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output425 .= '
        ';
return $output425;
};
$arguments423['__elseClosures'][] = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
            <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['then'] = NULL;
$arguments436['else'] = NULL;
$arguments436['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array438 = array();
$array439 = array (
);$array438['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array439);

$expression440 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments436['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression440(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array438)
					),
					$renderingContext
				);
$arguments436['then'] = '';
$arguments436['else'] = 'danger';

$output435 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output435 .= '">
                <td class="col-md-1">&nbsp;</td>
                <td class="col-md-5">
                    <div class="product-name">';
$array441 = array (
);
$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.title', $array441)]);

$output435 .= '</div>
                    <p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments442 = array();
$arguments442['key'] = NULL;
$arguments442['id'] = NULL;
$arguments442['default'] = NULL;
$arguments442['arguments'] = NULL;
$arguments442['extensionName'] = NULL;
$arguments442['languageKey'] = NULL;
$arguments442['alternativeLanguageKeys'] = NULL;
$arguments442['key'] = 'tx_cart_domain_model_order_product.sku.short';

$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext)]);

$output435 .= '
                        : ';
$array444 = array (
);
$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.completeSku', $array444)]);

$output435 .= '
                    </p>
                </td>
                <td class="col-md-2 text-right">
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$array448 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.bestPriceCalculated', $array448)]);
};
$arguments445 = array();
$arguments445['currencySign'] = NULL;
$arguments445['decimalSeparator'] = NULL;
$arguments445['thousandsSeparator'] = NULL;
$arguments445['prependCurrency'] = NULL;
$arguments445['separateCurrency'] = NULL;
$arguments445['decimals'] = NULL;
$arguments445['currencyTranslation'] = 1.0;
$array447 = array (
);$arguments445['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array447);

$output435 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output435 .= '
                </td>
                <td class="col-md-1">
                    <div class="qty-wrapper">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments449 = array();
$arguments449['additionalAttributes'] = NULL;
$arguments449['data'] = NULL;
$arguments449['aria'] = NULL;
$arguments449['name'] = NULL;
$arguments449['value'] = NULL;
$arguments449['property'] = NULL;
$arguments449['autofocus'] = NULL;
$arguments449['disabled'] = NULL;
$arguments449['maxlength'] = NULL;
$arguments449['readonly'] = NULL;
$arguments449['size'] = NULL;
$arguments449['placeholder'] = NULL;
$arguments449['pattern'] = NULL;
$arguments449['errorClass'] = 'f3-form-error';
$arguments449['class'] = NULL;
$arguments449['dir'] = NULL;
$arguments449['id'] = NULL;
$arguments449['lang'] = NULL;
$arguments449['style'] = NULL;
$arguments449['title'] = NULL;
$arguments449['accesskey'] = NULL;
$arguments449['tabindex'] = NULL;
$arguments449['onclick'] = NULL;
$arguments449['required'] = false;
$arguments449['type'] = 'text';
$arguments449['class'] = 'form-control form-control-inline';
$arguments449['type'] = 'text';
$array451 = array (
);$arguments449['value'] = $renderingContext->getVariableProvider()->getByPath('variant.quantity', $array451);
$output452 = '';

$output452 .= 'quantities';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\FieldNameViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['product'] = 0;
$arguments453['variant'] = 0;
$array455 = array (
);$arguments453['variant'] = $renderingContext->getVariableProvider()->getByPath('variant', $array455);

$output452 .= Extcode\Cart\ViewHelpers\FieldNameViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);
$arguments449['name'] = $output452;

$output435 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext);

$output435 .= '
                    </div>
                </td>
                <td class="col-md-2 text-right">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
$output483 = '';

$output483 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
$output486 = '';

$output486 .= '
                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$array490 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.gross', $array490)]);
};
$arguments487 = array();
$arguments487['currencySign'] = NULL;
$arguments487['decimalSeparator'] = NULL;
$arguments487['thousandsSeparator'] = NULL;
$arguments487['prependCurrency'] = NULL;
$arguments487['separateCurrency'] = NULL;
$arguments487['decimals'] = NULL;
$arguments487['currencyTranslation'] = 1.0;
$array489 = array (
);$arguments487['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array489);

$output486 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output486 .= '
                        ';
return $output486;
};
$arguments484 = array();

$output483 .= '';

$output483 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
$output493 = '';

$output493 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$output499 = '';

$output499 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments500 = array();
$arguments500['key'] = NULL;
$arguments500['id'] = NULL;
$arguments500['default'] = NULL;
$arguments500['arguments'] = NULL;
$arguments500['extensionName'] = NULL;
$arguments500['languageKey'] = NULL;
$arguments500['alternativeLanguageKeys'] = NULL;
$arguments500['key'] = 'tx_cart.quantityBelowRange';

$output499 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext)]);

$output499 .= '
                            ';
return $output499;
};
$arguments494 = array();
$arguments494['then'] = NULL;
$arguments494['else'] = NULL;
$arguments494['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array496 = array();
$array497 = array (
);$array496['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array497);

$expression498 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments494['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression498(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array496)
					),
					$renderingContext
				);
$arguments494['__thenClosure'] = $renderChildrenClosure495;

$output493 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);

$output493 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
$output507 = '';

$output507 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments508 = array();
$arguments508['key'] = NULL;
$arguments508['id'] = NULL;
$arguments508['default'] = NULL;
$arguments508['arguments'] = NULL;
$arguments508['extensionName'] = NULL;
$arguments508['languageKey'] = NULL;
$arguments508['alternativeLanguageKeys'] = NULL;
$arguments508['key'] = 'tx_cart.quantityAboveRange';

$output507 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext)]);

$output507 .= '
                            ';
return $output507;
};
$arguments502 = array();
$arguments502['then'] = NULL;
$arguments502['else'] = NULL;
$arguments502['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array504 = array();
$array505 = array (
);$array504['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array505);

$expression506 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments502['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression506(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array504)
					),
					$renderingContext
				);
$arguments502['__thenClosure'] = $renderChildrenClosure503;

$output493 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments502, $renderChildrenClosure503, $renderingContext);

$output493 .= '
                        ';
return $output493;
};
$arguments491 = array();
$arguments491['if'] = NULL;

$output483 .= '';

$output483 .= '
                    ';
return $output483;
};
$arguments456 = array();
$arguments456['then'] = NULL;
$arguments456['else'] = NULL;
$arguments456['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array480 = array();
$array481 = array (
);$array480['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array481);

$expression482 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments456['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression482(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array480)
					),
					$renderingContext
				);
$arguments456['__thenClosure'] = function() use ($renderingContext, $self) {
$output458 = '';

$output458 .= '
                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$array462 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('variant.gross', $array462)]);
};
$arguments459 = array();
$arguments459['currencySign'] = NULL;
$arguments459['decimalSeparator'] = NULL;
$arguments459['thousandsSeparator'] = NULL;
$arguments459['prependCurrency'] = NULL;
$arguments459['separateCurrency'] = NULL;
$arguments459['decimals'] = NULL;
$arguments459['currencyTranslation'] = 1.0;
$array461 = array (
);$arguments459['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array461);

$output458 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output458 .= '
                        ';
return $output458;
};
$arguments456['__elseClosures'][] = function() use ($renderingContext, $self) {
$output463 = '';

$output463 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['key'] = NULL;
$arguments470['id'] = NULL;
$arguments470['default'] = NULL;
$arguments470['arguments'] = NULL;
$arguments470['extensionName'] = NULL;
$arguments470['languageKey'] = NULL;
$arguments470['alternativeLanguageKeys'] = NULL;
$arguments470['key'] = 'tx_cart.quantityBelowRange';

$output469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext)]);

$output469 .= '
                            ';
return $output469;
};
$arguments464 = array();
$arguments464['then'] = NULL;
$arguments464['else'] = NULL;
$arguments464['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array466 = array();
$array467 = array (
);$array466['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityBelowRange', $array467);

$expression468 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments464['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression468(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array466)
					),
					$renderingContext
				);
$arguments464['__thenClosure'] = $renderChildrenClosure465;

$output463 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output463 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['key'] = NULL;
$arguments478['id'] = NULL;
$arguments478['default'] = NULL;
$arguments478['arguments'] = NULL;
$arguments478['extensionName'] = NULL;
$arguments478['languageKey'] = NULL;
$arguments478['alternativeLanguageKeys'] = NULL;
$arguments478['key'] = 'tx_cart.quantityAboveRange';

$output477 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext)]);

$output477 .= '
                            ';
return $output477;
};
$arguments472 = array();
$arguments472['then'] = NULL;
$arguments472['else'] = NULL;
$arguments472['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array474 = array();
$array475 = array (
);$array474['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityAboveRange', $array475);

$expression476 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments472['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression476(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array474)
					),
					$renderingContext
				);
$arguments472['__thenClosure'] = $renderChildrenClosure473;

$output463 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output463 .= '
                        ';
return $output463;
};

$output435 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output435 .= '
                </td>
                <td class="last col-md-1 text-right">
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
$output514 = '';

$output514 .= '
                        <span class="delete-link btn btn-danger" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments515 = array();
$arguments515['key'] = NULL;
$arguments515['id'] = NULL;
$arguments515['default'] = NULL;
$arguments515['arguments'] = NULL;
$arguments515['extensionName'] = NULL;
$arguments515['languageKey'] = NULL;
$arguments515['alternativeLanguageKeys'] = NULL;
$arguments515['key'] = 'tx_cart.remove_product';

$output514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext)]);

$output514 .= '">x</span>
                    ';
return $output514;
};
$arguments510 = array();
$arguments510['additionalAttributes'] = NULL;
$arguments510['data'] = NULL;
$arguments510['aria'] = NULL;
$arguments510['class'] = NULL;
$arguments510['dir'] = NULL;
$arguments510['id'] = NULL;
$arguments510['lang'] = NULL;
$arguments510['style'] = NULL;
$arguments510['title'] = NULL;
$arguments510['accesskey'] = NULL;
$arguments510['tabindex'] = NULL;
$arguments510['onclick'] = NULL;
$arguments510['name'] = NULL;
$arguments510['rel'] = NULL;
$arguments510['rev'] = NULL;
$arguments510['target'] = NULL;
$arguments510['action'] = NULL;
$arguments510['controller'] = NULL;
$arguments510['extensionName'] = NULL;
$arguments510['pluginName'] = NULL;
$arguments510['pageUid'] = NULL;
$arguments510['pageType'] = NULL;
$arguments510['noCache'] = NULL;
$arguments510['noCacheHash'] = NULL;
$arguments510['section'] = NULL;
$arguments510['format'] = NULL;
$arguments510['linkAccessRestrictedPages'] = NULL;
$arguments510['additionalParams'] = NULL;
$arguments510['absolute'] = NULL;
$arguments510['addQueryString'] = NULL;
$arguments510['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments510['addQueryStringMethod'] = NULL;
$arguments510['arguments'] = NULL;
$arguments510['product'] = NULL;
$arguments510['beVariant'] = NULL;
$arguments510['controller'] = 'Cart\\Product';
$arguments510['action'] = 'remove';
$array512 = array (
);$arguments510['product'] = $renderingContext->getVariableProvider()->getByPath('variant.product', $array512);
$array513 = array (
);$arguments510['beVariant'] = $renderingContext->getVariableProvider()->getByPath('variant', $array513);

$output435 .= Extcode\Cart\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output435 .= '
                </td>
            </tr>
        ';
return $output435;
};

$output422 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output422 .= '
';
return $output422;
};
$arguments420 = array();
$arguments420['name'] = NULL;
$arguments420['name'] = 'variant';

$output330 .= '';

$output330 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
$output619 = '';

$output619 .= '
    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments620 = array();
$arguments620['then'] = NULL;
$arguments620['else'] = NULL;
$arguments620['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array622 = array();
$array623 = array (
);$array622['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array623);

$expression624 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments620['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression624(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array622)
					),
					$renderingContext
				);
$arguments620['then'] = '';
$arguments620['else'] = 'danger';

$output619 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments620, $renderChildrenClosure621, $renderingContext);

$output619 .= '">
        <td colspan="2">
            <div class="product-name">
                ';
$array625 = array (
);
$output619 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.title', $array625)]);

$output619 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments626 = array();
$arguments626['then'] = NULL;
$arguments626['else'] = NULL;
$arguments626['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array628 = array();
$array629 = array (
);$array628['0'] = $renderingContext->getVariableProvider()->getByPath('product.feVariant.value', $array629);

$expression630 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments626['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression630(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array628)
					),
					$renderingContext
				);
$output631 = '';

$output631 .= '- ';
$array632 = array (
);
$output631 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.feVariant.value', $array632)]);
$arguments626['then'] = $output631;

$output619 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments626, $renderChildrenClosure627, $renderingContext);

$output619 .= '
            </div>
        </td>
        <td class="text-right">
            &nbsp;
        </td>
        <td class="a-center">
            &nbsp;
        </td>
        <td class="text-right">
            &nbsp;
        </td>
        <td class="last">
            &nbsp;
        </td>
    </tr>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure634 = function() use ($renderingContext, $self) {
$output636 = '';

$output636 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments637 = array();
$arguments637['section'] = NULL;
$arguments637['partial'] = NULL;
$arguments637['delegate'] = NULL;
$arguments637['renderable'] = NULL;
$arguments637['arguments'] = array (
);
$arguments637['optional'] = false;
$arguments637['default'] = NULL;
$arguments637['contentAs'] = NULL;
$arguments637['debug'] = true;
$arguments637['section'] = 'variant';
// Rendering Array
$array639 = array();
$array640 = array (
);$array639['cart'] = $renderingContext->getVariableProvider()->getByPath('cart', $array640);
$array641 = array (
);$array639['variant'] = $renderingContext->getVariableProvider()->getByPath('variant', $array641);
$array642 = array (
);$array639['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array642);
$arguments637['arguments'] = $array639;

$output636 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments637, $renderChildrenClosure638, $renderingContext);

$output636 .= '
    ';
return $output636;
};
$arguments633 = array();
$arguments633['each'] = NULL;
$arguments633['as'] = NULL;
$arguments633['key'] = NULL;
$arguments633['reverse'] = false;
$arguments633['iteration'] = NULL;
$array635 = array (
);$arguments633['each'] = $renderingContext->getVariableProvider()->getByPath('product.beVariants', $array635);
$arguments633['as'] = 'variant';

$output619 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments633, $renderChildrenClosure634, $renderingContext);

$output619 .= '

    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['then'] = NULL;
$arguments643['else'] = NULL;
$arguments643['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array645 = array();
$array646 = array (
);$array645['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array646);

$expression647 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments643['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression647(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array645)
					),
					$renderingContext
				);
$arguments643['then'] = '';
$arguments643['else'] = 'danger';

$output619 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext);

$output619 .= '">
        <td colspan="2">
            &nbsp;
        </td>
        <td class="text-right">
            &nbsp;
        </td>
        <td class="a-center">
            <div class="qty-wrapper">
                ';
$array648 = array (
);
$output619 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.quantity', $array648)]);

$output619 .= '
            </div>
        </td>
        <td class="text-right">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
$output659 = '';

$output659 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
$output662 = '';

$output662 .= '
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure664 = function() use ($renderingContext, $self) {
$array666 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.gross', $array666)]);
};
$arguments663 = array();
$arguments663['currencySign'] = NULL;
$arguments663['decimalSeparator'] = NULL;
$arguments663['thousandsSeparator'] = NULL;
$arguments663['prependCurrency'] = NULL;
$arguments663['separateCurrency'] = NULL;
$arguments663['decimals'] = NULL;
$arguments663['currencyTranslation'] = 1.0;
$array665 = array (
);$arguments663['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array665);

$output662 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments663, $renderChildrenClosure664, $renderingContext);

$output662 .= '
                ';
return $output662;
};
$arguments660 = array();

$output659 .= '';

$output659 .= '
            ';
return $output659;
};
$arguments649 = array();
$arguments649['then'] = NULL;
$arguments649['else'] = NULL;
$arguments649['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array656 = array();
$array657 = array (
);$array656['0'] = $renderingContext->getVariableProvider()->getByPath('product.quantityIsInRange', $array657);

$expression658 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments649['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression658(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array656)
					),
					$renderingContext
				);
$arguments649['__thenClosure'] = function() use ($renderingContext, $self) {
$output651 = '';

$output651 .= '
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
$array655 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.gross', $array655)]);
};
$arguments652 = array();
$arguments652['currencySign'] = NULL;
$arguments652['decimalSeparator'] = NULL;
$arguments652['thousandsSeparator'] = NULL;
$arguments652['prependCurrency'] = NULL;
$arguments652['separateCurrency'] = NULL;
$arguments652['decimals'] = NULL;
$arguments652['currencyTranslation'] = 1.0;
$array654 = array (
);$arguments652['currencySign'] = $renderingContext->getVariableProvider()->getByPath('cart.currencySign', $array654);

$output651 .= Extcode\Cart\ViewHelpers\Format\CurrencyViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext);

$output651 .= '
                ';
return $output651;
};

$output619 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext);

$output619 .= '
        </td>
        <td class="last">
            &nbsp;
        </td>
    </tr>
';
return $output619;
};
$arguments617 = array();
$arguments617['name'] = NULL;
$arguments617['name'] = 'withVariant';

$output330 .= '';

$output330 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure668 = function() use ($renderingContext, $self) {
$output670 = '';

$output670 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
$output688 = '';

$output688 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
$output691 = '';

$output691 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments692 = array();
$arguments692['section'] = NULL;
$arguments692['partial'] = NULL;
$arguments692['delegate'] = NULL;
$arguments692['renderable'] = NULL;
$arguments692['arguments'] = array (
);
$arguments692['optional'] = false;
$arguments692['default'] = NULL;
$arguments692['contentAs'] = NULL;
$arguments692['debug'] = true;
$arguments692['section'] = 'withVariant';
// Rendering Array
$array694 = array();
$array695 = array (
);$array694['cart'] = $renderingContext->getVariableProvider()->getByPath('cart', $array695);
$array696 = array (
);$array694['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array696);
$arguments692['arguments'] = $array694;

$output691 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);

$output691 .= '
        ';
return $output691;
};
$arguments689 = array();

$output688 .= '';

$output688 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
$output699 = '';

$output699 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments700 = array();
$arguments700['section'] = NULL;
$arguments700['partial'] = NULL;
$arguments700['delegate'] = NULL;
$arguments700['renderable'] = NULL;
$arguments700['arguments'] = array (
);
$arguments700['optional'] = false;
$arguments700['default'] = NULL;
$arguments700['contentAs'] = NULL;
$arguments700['debug'] = true;
$arguments700['section'] = 'withoutVariant';
// Rendering Array
$array702 = array();
$array703 = array (
);$array702['cart'] = $renderingContext->getVariableProvider()->getByPath('cart', $array703);
$array704 = array (
);$array702['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array704);
$arguments700['arguments'] = $array702;

$output699 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext);

$output699 .= '
        ';
return $output699;
};
$arguments697 = array();
$arguments697['if'] = NULL;

$output688 .= '';

$output688 .= '
    ';
return $output688;
};
$arguments671 = array();
$arguments671['then'] = NULL;
$arguments671['else'] = NULL;
$arguments671['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array685 = array();
$array686 = array (
);$array685['0'] = $renderingContext->getVariableProvider()->getByPath('product.beVariants', $array686);

$expression687 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments671['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression687(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array685)
					),
					$renderingContext
				);
$arguments671['__thenClosure'] = function() use ($renderingContext, $self) {
$output673 = '';

$output673 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments674 = array();
$arguments674['section'] = NULL;
$arguments674['partial'] = NULL;
$arguments674['delegate'] = NULL;
$arguments674['renderable'] = NULL;
$arguments674['arguments'] = array (
);
$arguments674['optional'] = false;
$arguments674['default'] = NULL;
$arguments674['contentAs'] = NULL;
$arguments674['debug'] = true;
$arguments674['section'] = 'withVariant';
// Rendering Array
$array676 = array();
$array677 = array (
);$array676['cart'] = $renderingContext->getVariableProvider()->getByPath('cart', $array677);
$array678 = array (
);$array676['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array678);
$arguments674['arguments'] = $array676;

$output673 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments674, $renderChildrenClosure675, $renderingContext);

$output673 .= '
        ';
return $output673;
};
$arguments671['__elseClosures'][] = function() use ($renderingContext, $self) {
$output679 = '';

$output679 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments680 = array();
$arguments680['section'] = NULL;
$arguments680['partial'] = NULL;
$arguments680['delegate'] = NULL;
$arguments680['renderable'] = NULL;
$arguments680['arguments'] = array (
);
$arguments680['optional'] = false;
$arguments680['default'] = NULL;
$arguments680['contentAs'] = NULL;
$arguments680['debug'] = true;
$arguments680['section'] = 'withoutVariant';
// Rendering Array
$array682 = array();
$array683 = array (
);$array682['cart'] = $renderingContext->getVariableProvider()->getByPath('cart', $array683);
$array684 = array (
);$array682['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array684);
$arguments680['arguments'] = $array682;

$output679 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext);

$output679 .= '
        ';
return $output679;
};

$output670 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext);

$output670 .= '
';
return $output670;
};
$arguments667 = array();
$arguments667['each'] = NULL;
$arguments667['as'] = NULL;
$arguments667['key'] = NULL;
$arguments667['reverse'] = false;
$arguments667['iteration'] = NULL;
$array669 = array (
);$arguments667['each'] = $renderingContext->getVariableProvider()->getByPath('products', $array669);
$arguments667['as'] = 'product';

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments667, $renderChildrenClosure668, $renderingContext);

$output330 .= '
';

return $output330;
}


}
#