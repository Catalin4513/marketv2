<?php

class partial_Cart_CurrencyForm_80e3ef1fd0a02b41f6f531407145a8cdf9e11843 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
        <div class="row top-buffer">
            <div class="col-sm-6 col-md-2">
                <div class="input-box">
                    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['aria'] = NULL;
$arguments12['name'] = NULL;
$arguments12['value'] = NULL;
$arguments12['property'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['size'] = NULL;
$arguments12['disabled'] = NULL;
$arguments12['options'] = NULL;
$arguments12['optionsAfterContent'] = false;
$arguments12['optionValueField'] = NULL;
$arguments12['optionLabelField'] = NULL;
$arguments12['sortByOptionLabel'] = false;
$arguments12['selectAllByDefault'] = false;
$arguments12['errorClass'] = 'f3-form-error';
$arguments12['prependOptionLabel'] = NULL;
$arguments12['prependOptionValue'] = NULL;
$arguments12['multiple'] = false;
$arguments12['required'] = false;
$arguments12['translationKey'] = NULL;
$arguments12['class'] = 'form-control cart-currency-selector';
$arguments12['name'] = 'currencyCode';
$array14 = array (
);$arguments12['value'] = $renderingContext->getVariableProvider()->getByPath('cart.code', $array14);
$array15 = array (
);$arguments12['options'] = $renderingContext->getVariableProvider()->getByPath('settings.currencies', $array15);
$arguments12['optionValueField'] = 'code';
$arguments12['optionLabelField'] = 'sign';

$output11 .= Extcode\Cart\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
                </div>
            </div>
        </div>
    ';
return $output11;
};
$arguments9 = array();
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['aria'] = NULL;
$arguments9['action'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['controller'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['pluginName'] = NULL;
$arguments9['pageUid'] = NULL;
$arguments9['object'] = NULL;
$arguments9['pageType'] = 0;
$arguments9['noCache'] = false;
$arguments9['noCacheHash'] = NULL;
$arguments9['section'] = '';
$arguments9['format'] = '';
$arguments9['additionalParams'] = array (
);
$arguments9['absolute'] = false;
$arguments9['addQueryString'] = false;
$arguments9['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments9['addQueryStringMethod'] = 'GET';
$arguments9['fieldNamePrefix'] = NULL;
$arguments9['actionUri'] = NULL;
$arguments9['objectName'] = NULL;
$arguments9['hiddenFieldClassName'] = NULL;
$arguments9['enctype'] = NULL;
$arguments9['method'] = NULL;
$arguments9['name'] = NULL;
$arguments9['onreset'] = NULL;
$arguments9['onsubmit'] = NULL;
$arguments9['target'] = NULL;
$arguments9['novalidate'] = NULL;
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['class'] = 'form form-currency';
$arguments9['name'] = 'currency';
$arguments9['pluginName'] = 'Cart';
$arguments9['controller'] = 'Cart\\Currency';
$arguments9['action'] = 'update';
$arguments9['pageType'] = 2278001;
$arguments9['method'] = 'post';

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
';
return $output8;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array6 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings.currencies', $array6);
};
$arguments4 = array();
$arguments4['subject'] = NULL;
$renderChildrenClosure5 = ($arguments4['subject'] !== null) ? function() use ($arguments4) { return $arguments4['subject']; } : $renderChildrenClosure5;$array3['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
$array3['1'] = ' > 1';

$expression7 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#