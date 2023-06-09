<?php

class partial_Cart_OrderForm_Address_Shipping_4ff315091dec713fb1f34e1a4d767d3e7a19bba9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div id="checkout-step-shipping-address" class="checkout-step bg-light-grey" style="';
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['then'] = 'display: none;';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '" data-ajax-country data-ajax-currency>
    <h5 class="checkout-step-title">
        <span class="checkout-step-number"></span>
        <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['key'] = NULL;
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['languageKey'] = NULL;
$arguments6['alternativeLanguageKeys'] = NULL;
$arguments6['key'] = 'tx_cart.controller.order.action.show_cart.block-header.shipping_address';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '</span>
    </h5>
    <div class="checkout-step-content">
        <fieldset>
            <div class="checkout-step-content-list">
                <div class="checkout-step-fields">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                        <div class="field salutation">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                                    <label for="shippingAddress-salutation" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['key'] = NULL;
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['languageKey'] = NULL;
$arguments63['alternativeLanguageKeys'] = NULL;
$arguments63['key'] = 'tx_cart_domain_model_order_address.salutation';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output62 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['aria'] = NULL;
$arguments65['name'] = NULL;
$arguments65['value'] = NULL;
$arguments65['property'] = NULL;
$arguments65['autofocus'] = NULL;
$arguments65['disabled'] = NULL;
$arguments65['maxlength'] = NULL;
$arguments65['readonly'] = NULL;
$arguments65['size'] = NULL;
$arguments65['placeholder'] = NULL;
$arguments65['pattern'] = NULL;
$arguments65['errorClass'] = 'f3-form-error';
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$arguments65['required'] = false;
$arguments65['type'] = 'text';
$arguments65['id'] = 'shippingAddress-salutation';
$arguments65['class'] = 'form-control';
$arguments65['name'] = 'shippingAddress[salutation]';
$array67 = array (
);$arguments65['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.salutation', $array67);
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array68['0'] = 'true';

$expression69 = function($context) {return TRUE;};
$arguments65['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['then'] = 'true';
$arguments65['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);
// Rendering Array
$array75 = array();
$array75['disable-shipping'] = 'true';
$arguments65['data'] = $array75;

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output62 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                                                <div class="validation-error alert alert-danger">';
$array85 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.salutation.0.message', $array85)]);

$output84 .= '</div>
                                            ';
return $output84;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.salutation', $array82);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = $renderChildrenClosure80;

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
                                        ';
return $output78;
};
$arguments76 = array();
$arguments76['for'] = '';
$arguments76['as'] = 'validationResults';
$arguments76['for'] = 'shippingAddress';

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output62 .= '
                                   </div>
                                ';
return $output62;
};
$arguments60 = array();

$output59 .= '';

$output59 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                                    <label for="shippingAddress-salutation" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['key'] = NULL;
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['languageKey'] = NULL;
$arguments89['alternativeLanguageKeys'] = NULL;
$arguments89['key'] = 'tx_cart_domain_model_order_address.salutation';

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output88 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['aria'] = NULL;
$arguments91['name'] = NULL;
$arguments91['value'] = NULL;
$arguments91['property'] = NULL;
$arguments91['autofocus'] = NULL;
$arguments91['disabled'] = NULL;
$arguments91['maxlength'] = NULL;
$arguments91['readonly'] = NULL;
$arguments91['size'] = NULL;
$arguments91['placeholder'] = NULL;
$arguments91['pattern'] = NULL;
$arguments91['errorClass'] = 'f3-form-error';
$arguments91['class'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$arguments91['required'] = false;
$arguments91['type'] = 'text';
$arguments91['id'] = 'shippingAddress-salutation';
$arguments91['class'] = 'form-control';
$arguments91['name'] = 'shippingAddress[salutation]';
$array93 = array (
);$arguments91['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.salutation', $array93);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array97);

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
$arguments94['then'] = 'true';
$arguments91['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);
// Rendering Array
$array99 = array();
$array99['disable-shipping'] = 'true';
$arguments91['data'] = $array99;

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output88 .= '
                                    </div>
                                ';
return $output88;
};
$arguments86 = array();
$arguments86['if'] = NULL;

$output59 .= '';

$output59 .= '
                            ';
return $output59;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.salutation.validator', $array56);
$array54['0'] = $array55;
$array54['1'] = ' == ';
// Rendering Array
$array57 = array();
$array57['0'] = 'NotEmpty';
$array54['2'] = $array57;

$expression58 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments16['__thenClosure'] = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                                    <label for="shippingAddress-salutation" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'tx_cart_domain_model_order_address.salutation';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output18 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
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
$arguments21['id'] = 'shippingAddress-salutation';
$arguments21['class'] = 'form-control';
$arguments21['name'] = 'shippingAddress[salutation]';
$array23 = array (
);$arguments21['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.salutation', $array23);
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array24['0'] = 'true';

$expression25 = function($context) {return TRUE;};
$arguments21['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = 'true';
$arguments21['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);
// Rendering Array
$array31 = array();
$array31['disable-shipping'] = 'true';
$arguments21['data'] = $array31;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output18 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                                                <div class="validation-error alert alert-danger">';
$array41 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.salutation.0.message', $array41)]);

$output40 .= '</div>
                                            ';
return $output40;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.salutation', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = $renderChildrenClosure36;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                                        ';
return $output34;
};
$arguments32 = array();
$arguments32['for'] = '';
$arguments32['as'] = 'validationResults';
$arguments32['for'] = 'shippingAddress';

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output18 .= '
                                   </div>
                                ';
return $output18;
};
$arguments16['__elseClosures'][] = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                                    <label for="shippingAddress-salutation" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['key'] = NULL;
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['languageKey'] = NULL;
$arguments43['alternativeLanguageKeys'] = NULL;
$arguments43['key'] = 'tx_cart_domain_model_order_address.salutation';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['aria'] = NULL;
$arguments45['name'] = NULL;
$arguments45['value'] = NULL;
$arguments45['property'] = NULL;
$arguments45['autofocus'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['maxlength'] = NULL;
$arguments45['readonly'] = NULL;
$arguments45['size'] = NULL;
$arguments45['placeholder'] = NULL;
$arguments45['pattern'] = NULL;
$arguments45['errorClass'] = 'f3-form-error';
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['required'] = false;
$arguments45['type'] = 'text';
$arguments45['id'] = 'shippingAddress-salutation';
$arguments45['class'] = 'form-control';
$arguments45['name'] = 'shippingAddress[salutation]';
$array47 = array (
);$arguments45['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.salutation', $array47);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['then'] = 'true';
$arguments45['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);
// Rendering Array
$array53 = array();
$array53['disable-shipping'] = 'true';
$arguments45['data'] = $array53;

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '
                                    </div>
                                ';
return $output42;
};

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
                        </div>
                    ';
return $output15;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.salutation.validator', $array12);
$array10['0'] = $array11;
$array10['1'] = ' != ';
// Rendering Array
$array13 = array();
$array13['0'] = 'Empty';
$array10['2'] = $array13;

$expression14 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = $renderChildrenClosure9;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                        <div class="field title">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                                    <label for="shippingAddress-title" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['key'] = NULL;
$arguments155['id'] = NULL;
$arguments155['default'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['languageKey'] = NULL;
$arguments155['alternativeLanguageKeys'] = NULL;
$arguments155['key'] = 'tx_cart_domain_model_order_address.title';

$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output154 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['additionalAttributes'] = NULL;
$arguments157['data'] = NULL;
$arguments157['aria'] = NULL;
$arguments157['name'] = NULL;
$arguments157['value'] = NULL;
$arguments157['property'] = NULL;
$arguments157['autofocus'] = NULL;
$arguments157['disabled'] = NULL;
$arguments157['maxlength'] = NULL;
$arguments157['readonly'] = NULL;
$arguments157['size'] = NULL;
$arguments157['placeholder'] = NULL;
$arguments157['pattern'] = NULL;
$arguments157['errorClass'] = 'f3-form-error';
$arguments157['class'] = NULL;
$arguments157['dir'] = NULL;
$arguments157['id'] = NULL;
$arguments157['lang'] = NULL;
$arguments157['style'] = NULL;
$arguments157['title'] = NULL;
$arguments157['accesskey'] = NULL;
$arguments157['tabindex'] = NULL;
$arguments157['onclick'] = NULL;
$arguments157['required'] = false;
$arguments157['type'] = 'text';
$arguments157['id'] = 'shippingAddress-title';
$arguments157['class'] = 'form-control';
$arguments157['name'] = 'shippingAddress[title]';
$array159 = array (
);$arguments157['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.title', $array159);
// Rendering Boolean node
// Rendering Array
$array160 = array();
$array160['0'] = 'true';

$expression161 = function($context) {return TRUE;};
$arguments157['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$arguments162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array165);

$expression166 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments162['then'] = 'true';
$arguments157['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);
// Rendering Array
$array167 = array();
$array167['disable-shipping'] = 'true';
$arguments157['data'] = $array167;

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output154 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                                                <div class="validation-error alert alert-danger">';
$array177 = array (
);
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.title.0.message', $array177)]);

$output176 .= '</div>
                                            ';
return $output176;
};
$arguments171 = array();
$arguments171['then'] = NULL;
$arguments171['else'] = NULL;
$arguments171['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.title', $array174);

$expression175 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments171['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)
					),
					$renderingContext
				);
$arguments171['__thenClosure'] = $renderChildrenClosure172;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= '
                                        ';
return $output170;
};
$arguments168 = array();
$arguments168['for'] = '';
$arguments168['as'] = 'validationResults';
$arguments168['for'] = 'shippingAddress';

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output154 .= '
                                    </div>
                                ';
return $output154;
};
$arguments152 = array();

$output151 .= '';

$output151 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
                                    <label for="shippingAddress-title">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['key'] = NULL;
$arguments181['id'] = NULL;
$arguments181['default'] = NULL;
$arguments181['arguments'] = NULL;
$arguments181['extensionName'] = NULL;
$arguments181['languageKey'] = NULL;
$arguments181['alternativeLanguageKeys'] = NULL;
$arguments181['key'] = 'tx_cart_domain_model_order_address.title';

$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext)]);

$output180 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['additionalAttributes'] = NULL;
$arguments183['data'] = NULL;
$arguments183['aria'] = NULL;
$arguments183['name'] = NULL;
$arguments183['value'] = NULL;
$arguments183['property'] = NULL;
$arguments183['autofocus'] = NULL;
$arguments183['disabled'] = NULL;
$arguments183['maxlength'] = NULL;
$arguments183['readonly'] = NULL;
$arguments183['size'] = NULL;
$arguments183['placeholder'] = NULL;
$arguments183['pattern'] = NULL;
$arguments183['errorClass'] = 'f3-form-error';
$arguments183['class'] = NULL;
$arguments183['dir'] = NULL;
$arguments183['id'] = NULL;
$arguments183['lang'] = NULL;
$arguments183['style'] = NULL;
$arguments183['title'] = NULL;
$arguments183['accesskey'] = NULL;
$arguments183['tabindex'] = NULL;
$arguments183['onclick'] = NULL;
$arguments183['required'] = false;
$arguments183['type'] = 'text';
$arguments183['id'] = 'shippingAddress-title';
$arguments183['class'] = 'form-control';
$arguments183['name'] = 'shippingAddress[title]';
$array185 = array (
);$arguments183['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.title', $array185);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['then'] = NULL;
$arguments186['else'] = NULL;
$arguments186['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array188 = array();
$array189 = array (
);$array188['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array189);

$expression190 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments186['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression190(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array188)
					),
					$renderingContext
				);
$arguments186['then'] = 'true';
$arguments183['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);
// Rendering Array
$array191 = array();
$array191['disable-shipping'] = 'true';
$arguments183['data'] = $array191;

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output180 .= '
                                    </div>
                                ';
return $output180;
};
$arguments178 = array();
$arguments178['if'] = NULL;

$output151 .= '';

$output151 .= '
                            ';
return $output151;
};
$arguments108 = array();
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$arguments108['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.title.validator', $array148);
$array146['0'] = $array147;
$array146['1'] = ' == ';
// Rendering Array
$array149 = array();
$array149['0'] = 'NotEmpty';
$array146['2'] = $array149;

$expression150 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments108['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments108['__thenClosure'] = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                                    <label for="shippingAddress-title" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['key'] = NULL;
$arguments111['id'] = NULL;
$arguments111['default'] = NULL;
$arguments111['arguments'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['languageKey'] = NULL;
$arguments111['alternativeLanguageKeys'] = NULL;
$arguments111['key'] = 'tx_cart_domain_model_order_address.title';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output110 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['additionalAttributes'] = NULL;
$arguments113['data'] = NULL;
$arguments113['aria'] = NULL;
$arguments113['name'] = NULL;
$arguments113['value'] = NULL;
$arguments113['property'] = NULL;
$arguments113['autofocus'] = NULL;
$arguments113['disabled'] = NULL;
$arguments113['maxlength'] = NULL;
$arguments113['readonly'] = NULL;
$arguments113['size'] = NULL;
$arguments113['placeholder'] = NULL;
$arguments113['pattern'] = NULL;
$arguments113['errorClass'] = 'f3-form-error';
$arguments113['class'] = NULL;
$arguments113['dir'] = NULL;
$arguments113['id'] = NULL;
$arguments113['lang'] = NULL;
$arguments113['style'] = NULL;
$arguments113['title'] = NULL;
$arguments113['accesskey'] = NULL;
$arguments113['tabindex'] = NULL;
$arguments113['onclick'] = NULL;
$arguments113['required'] = false;
$arguments113['type'] = 'text';
$arguments113['id'] = 'shippingAddress-title';
$arguments113['class'] = 'form-control';
$arguments113['name'] = 'shippingAddress[title]';
$array115 = array (
);$arguments113['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.title', $array115);
// Rendering Boolean node
// Rendering Array
$array116 = array();
$array116['0'] = 'true';

$expression117 = function($context) {return TRUE;};
$arguments113['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array116)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array121);

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments118['then'] = 'true';
$arguments113['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
// Rendering Array
$array123 = array();
$array123['disable-shipping'] = 'true';
$arguments113['data'] = $array123;

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output110 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                                                <div class="validation-error alert alert-danger">';
$array133 = array (
);
$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.title.0.message', $array133)]);

$output132 .= '</div>
                                            ';
return $output132;
};
$arguments127 = array();
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$arguments127['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array129 = array();
$array130 = array (
);$array129['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.title', $array130);

$expression131 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression131(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);
$arguments127['__thenClosure'] = $renderChildrenClosure128;

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
                                        ';
return $output126;
};
$arguments124 = array();
$arguments124['for'] = '';
$arguments124['as'] = 'validationResults';
$arguments124['for'] = 'shippingAddress';

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output110 .= '
                                    </div>
                                ';
return $output110;
};
$arguments108['__elseClosures'][] = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                                    <label for="shippingAddress-title">
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
$arguments135['key'] = 'tx_cart_domain_model_order_address.title';

$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext)]);

$output134 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['aria'] = NULL;
$arguments137['name'] = NULL;
$arguments137['value'] = NULL;
$arguments137['property'] = NULL;
$arguments137['autofocus'] = NULL;
$arguments137['disabled'] = NULL;
$arguments137['maxlength'] = NULL;
$arguments137['readonly'] = NULL;
$arguments137['size'] = NULL;
$arguments137['placeholder'] = NULL;
$arguments137['pattern'] = NULL;
$arguments137['errorClass'] = 'f3-form-error';
$arguments137['class'] = NULL;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$arguments137['required'] = false;
$arguments137['type'] = 'text';
$arguments137['id'] = 'shippingAddress-title';
$arguments137['class'] = 'form-control';
$arguments137['name'] = 'shippingAddress[title]';
$array139 = array (
);$arguments137['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.title', $array139);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array143);

$expression144 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['then'] = 'true';
$arguments137['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);
// Rendering Array
$array145 = array();
$array145['disable-shipping'] = 'true';
$arguments137['data'] = $array145;

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output134 .= '
                                    </div>
                                ';
return $output134;
};

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
                        </div>
                    ';
return $output107;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.title.validator', $array104);
$array102['0'] = $array103;
$array102['1'] = ' != ';
// Rendering Array
$array105 = array();
$array105['0'] = 'Empty';
$array102['2'] = $array105;

$expression106 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments100['__thenClosure'] = $renderChildrenClosure101;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output0 .= '

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
                        <div class="field first-name">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
                                    <label for="shippingAddress-firstName" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['key'] = NULL;
$arguments247['id'] = NULL;
$arguments247['default'] = NULL;
$arguments247['arguments'] = NULL;
$arguments247['extensionName'] = NULL;
$arguments247['languageKey'] = NULL;
$arguments247['alternativeLanguageKeys'] = NULL;
$arguments247['key'] = 'tx_cart_domain_model_order_address.first_name';

$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);

$output246 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['additionalAttributes'] = NULL;
$arguments249['data'] = NULL;
$arguments249['aria'] = NULL;
$arguments249['name'] = NULL;
$arguments249['value'] = NULL;
$arguments249['property'] = NULL;
$arguments249['autofocus'] = NULL;
$arguments249['disabled'] = NULL;
$arguments249['maxlength'] = NULL;
$arguments249['readonly'] = NULL;
$arguments249['size'] = NULL;
$arguments249['placeholder'] = NULL;
$arguments249['pattern'] = NULL;
$arguments249['errorClass'] = 'f3-form-error';
$arguments249['class'] = NULL;
$arguments249['dir'] = NULL;
$arguments249['id'] = NULL;
$arguments249['lang'] = NULL;
$arguments249['style'] = NULL;
$arguments249['title'] = NULL;
$arguments249['accesskey'] = NULL;
$arguments249['tabindex'] = NULL;
$arguments249['onclick'] = NULL;
$arguments249['required'] = false;
$arguments249['type'] = 'text';
$arguments249['id'] = 'shippingAddress-firstName';
$arguments249['class'] = 'form-control';
$arguments249['name'] = 'shippingAddress[firstName]';
$array251 = array (
);$arguments249['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.firstName', $array251);
// Rendering Boolean node
// Rendering Array
$array252 = array();
$array252['0'] = 'true';

$expression253 = function($context) {return TRUE;};
$arguments249['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['then'] = NULL;
$arguments254['else'] = NULL;
$arguments254['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array256 = array();
$array257 = array (
);$array256['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array257);

$expression258 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments254['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression258(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array256)
					),
					$renderingContext
				);
$arguments254['then'] = 'true';
$arguments249['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);
// Rendering Array
$array259 = array();
$array259['disable-shipping'] = 'true';
$arguments249['data'] = $array259;

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output246 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
                                                <div class="validation-error alert alert-danger">';
$array269 = array (
);
$output268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.firstName.0.message', $array269)]);

$output268 .= '</div>
                                            ';
return $output268;
};
$arguments263 = array();
$arguments263['then'] = NULL;
$arguments263['else'] = NULL;
$arguments263['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.firstName', $array266);

$expression267 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array265)
					),
					$renderingContext
				);
$arguments263['__thenClosure'] = $renderChildrenClosure264;

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '
                                        ';
return $output262;
};
$arguments260 = array();
$arguments260['for'] = '';
$arguments260['as'] = 'validationResults';
$arguments260['for'] = 'shippingAddress';

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output246 .= '
                                    </div>
                                ';
return $output246;
};
$arguments244 = array();

$output243 .= '';

$output243 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
                                    <label for="shippingAddress-firstName" class="required">
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
$arguments273['key'] = 'tx_cart_domain_model_order_address.first_name';

$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext)]);

$output272 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['additionalAttributes'] = NULL;
$arguments275['data'] = NULL;
$arguments275['aria'] = NULL;
$arguments275['name'] = NULL;
$arguments275['value'] = NULL;
$arguments275['property'] = NULL;
$arguments275['autofocus'] = NULL;
$arguments275['disabled'] = NULL;
$arguments275['maxlength'] = NULL;
$arguments275['readonly'] = NULL;
$arguments275['size'] = NULL;
$arguments275['placeholder'] = NULL;
$arguments275['pattern'] = NULL;
$arguments275['errorClass'] = 'f3-form-error';
$arguments275['class'] = NULL;
$arguments275['dir'] = NULL;
$arguments275['id'] = NULL;
$arguments275['lang'] = NULL;
$arguments275['style'] = NULL;
$arguments275['title'] = NULL;
$arguments275['accesskey'] = NULL;
$arguments275['tabindex'] = NULL;
$arguments275['onclick'] = NULL;
$arguments275['required'] = false;
$arguments275['type'] = 'text';
$arguments275['id'] = 'shippingAddress-firstName';
$arguments275['class'] = 'form-control';
$arguments275['name'] = 'shippingAddress[firstName]';
$array277 = array (
);$arguments275['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.firstName', $array277);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$arguments278['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array280 = array();
$array281 = array (
);$array280['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array281);

$expression282 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments278['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression282(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array280)
					),
					$renderingContext
				);
$arguments278['then'] = 'true';
$arguments275['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);
// Rendering Array
$array283 = array();
$array283['disable-shipping'] = 'true';
$arguments275['data'] = $array283;

$output272 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output272 .= '
                                    </div>
                                ';
return $output272;
};
$arguments270 = array();
$arguments270['if'] = NULL;

$output243 .= '';

$output243 .= '
                            ';
return $output243;
};
$arguments200 = array();
$arguments200['then'] = NULL;
$arguments200['else'] = NULL;
$arguments200['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array238 = array();
// Rendering Array
$array239 = array();
$array240 = array (
);$array239['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.firstName.validator', $array240);
$array238['0'] = $array239;
$array238['1'] = ' == ';
// Rendering Array
$array241 = array();
$array241['0'] = 'NotEmpty';
$array238['2'] = $array241;

$expression242 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments200['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression242(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array238)
					),
					$renderingContext
				);
$arguments200['__thenClosure'] = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
                                    <label for="shippingAddress-firstName" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['key'] = NULL;
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$arguments203['languageKey'] = NULL;
$arguments203['alternativeLanguageKeys'] = NULL;
$arguments203['key'] = 'tx_cart_domain_model_order_address.first_name';

$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext)]);

$output202 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['additionalAttributes'] = NULL;
$arguments205['data'] = NULL;
$arguments205['aria'] = NULL;
$arguments205['name'] = NULL;
$arguments205['value'] = NULL;
$arguments205['property'] = NULL;
$arguments205['autofocus'] = NULL;
$arguments205['disabled'] = NULL;
$arguments205['maxlength'] = NULL;
$arguments205['readonly'] = NULL;
$arguments205['size'] = NULL;
$arguments205['placeholder'] = NULL;
$arguments205['pattern'] = NULL;
$arguments205['errorClass'] = 'f3-form-error';
$arguments205['class'] = NULL;
$arguments205['dir'] = NULL;
$arguments205['id'] = NULL;
$arguments205['lang'] = NULL;
$arguments205['style'] = NULL;
$arguments205['title'] = NULL;
$arguments205['accesskey'] = NULL;
$arguments205['tabindex'] = NULL;
$arguments205['onclick'] = NULL;
$arguments205['required'] = false;
$arguments205['type'] = 'text';
$arguments205['id'] = 'shippingAddress-firstName';
$arguments205['class'] = 'form-control';
$arguments205['name'] = 'shippingAddress[firstName]';
$array207 = array (
);$arguments205['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.firstName', $array207);
// Rendering Boolean node
// Rendering Array
$array208 = array();
$array208['0'] = 'true';

$expression209 = function($context) {return TRUE;};
$arguments205['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression209(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array208)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['then'] = NULL;
$arguments210['else'] = NULL;
$arguments210['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array213);

$expression214 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments210['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments210['then'] = 'true';
$arguments205['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);
// Rendering Array
$array215 = array();
$array215['disable-shipping'] = 'true';
$arguments205['data'] = $array215;

$output202 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output202 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
                                                <div class="validation-error alert alert-danger">';
$array225 = array (
);
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.firstName.0.message', $array225)]);

$output224 .= '</div>
                                            ';
return $output224;
};
$arguments219 = array();
$arguments219['then'] = NULL;
$arguments219['else'] = NULL;
$arguments219['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array221 = array();
$array222 = array (
);$array221['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.firstName', $array222);

$expression223 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments219['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression223(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array221)
					),
					$renderingContext
				);
$arguments219['__thenClosure'] = $renderChildrenClosure220;

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output218 .= '
                                        ';
return $output218;
};
$arguments216 = array();
$arguments216['for'] = '';
$arguments216['as'] = 'validationResults';
$arguments216['for'] = 'shippingAddress';

$output202 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output202 .= '
                                    </div>
                                ';
return $output202;
};
$arguments200['__elseClosures'][] = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
                                    <label for="shippingAddress-firstName" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['key'] = NULL;
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['languageKey'] = NULL;
$arguments227['alternativeLanguageKeys'] = NULL;
$arguments227['key'] = 'tx_cart_domain_model_order_address.first_name';

$output226 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext)]);

$output226 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['additionalAttributes'] = NULL;
$arguments229['data'] = NULL;
$arguments229['aria'] = NULL;
$arguments229['name'] = NULL;
$arguments229['value'] = NULL;
$arguments229['property'] = NULL;
$arguments229['autofocus'] = NULL;
$arguments229['disabled'] = NULL;
$arguments229['maxlength'] = NULL;
$arguments229['readonly'] = NULL;
$arguments229['size'] = NULL;
$arguments229['placeholder'] = NULL;
$arguments229['pattern'] = NULL;
$arguments229['errorClass'] = 'f3-form-error';
$arguments229['class'] = NULL;
$arguments229['dir'] = NULL;
$arguments229['id'] = NULL;
$arguments229['lang'] = NULL;
$arguments229['style'] = NULL;
$arguments229['title'] = NULL;
$arguments229['accesskey'] = NULL;
$arguments229['tabindex'] = NULL;
$arguments229['onclick'] = NULL;
$arguments229['required'] = false;
$arguments229['type'] = 'text';
$arguments229['id'] = 'shippingAddress-firstName';
$arguments229['class'] = 'form-control';
$arguments229['name'] = 'shippingAddress[firstName]';
$array231 = array (
);$arguments229['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.firstName', $array231);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['then'] = NULL;
$arguments232['else'] = NULL;
$arguments232['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array234 = array();
$array235 = array (
);$array234['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array235);

$expression236 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments232['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression236(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array234)
					),
					$renderingContext
				);
$arguments232['then'] = 'true';
$arguments229['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);
// Rendering Array
$array237 = array();
$array237['disable-shipping'] = 'true';
$arguments229['data'] = $array237;

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output226 .= '
                                    </div>
                                ';
return $output226;
};

$output199 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output199 .= '
                        </div>
                    ';
return $output199;
};
$arguments192 = array();
$arguments192['then'] = NULL;
$arguments192['else'] = NULL;
$arguments192['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array194 = array();
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.firstName.validator', $array196);
$array194['0'] = $array195;
$array194['1'] = ' != ';
// Rendering Array
$array197 = array();
$array197['0'] = 'Empty';
$array194['2'] = $array197;

$expression198 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments192['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array194)
					),
					$renderingContext
				);
$arguments192['__thenClosure'] = $renderChildrenClosure193;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output0 .= '

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
                        <div class="field last-name">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
                                    <label for="shippingAddress-lastName" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments339 = array();
$arguments339['key'] = NULL;
$arguments339['id'] = NULL;
$arguments339['default'] = NULL;
$arguments339['arguments'] = NULL;
$arguments339['extensionName'] = NULL;
$arguments339['languageKey'] = NULL;
$arguments339['alternativeLanguageKeys'] = NULL;
$arguments339['key'] = 'tx_cart_domain_model_order_address.last_name';

$output338 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext)]);

$output338 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['additionalAttributes'] = NULL;
$arguments341['data'] = NULL;
$arguments341['aria'] = NULL;
$arguments341['name'] = NULL;
$arguments341['value'] = NULL;
$arguments341['property'] = NULL;
$arguments341['autofocus'] = NULL;
$arguments341['disabled'] = NULL;
$arguments341['maxlength'] = NULL;
$arguments341['readonly'] = NULL;
$arguments341['size'] = NULL;
$arguments341['placeholder'] = NULL;
$arguments341['pattern'] = NULL;
$arguments341['errorClass'] = 'f3-form-error';
$arguments341['class'] = NULL;
$arguments341['dir'] = NULL;
$arguments341['id'] = NULL;
$arguments341['lang'] = NULL;
$arguments341['style'] = NULL;
$arguments341['title'] = NULL;
$arguments341['accesskey'] = NULL;
$arguments341['tabindex'] = NULL;
$arguments341['onclick'] = NULL;
$arguments341['required'] = false;
$arguments341['type'] = 'text';
$arguments341['id'] = 'shippingAddress-lastName';
$arguments341['class'] = 'form-control';
$arguments341['name'] = 'shippingAddress[lastName]';
$array343 = array (
);$arguments341['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.lastName', $array343);
// Rendering Boolean node
// Rendering Array
$array344 = array();
$array344['0'] = 'true';

$expression345 = function($context) {return TRUE;};
$arguments341['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression345(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array344)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['then'] = NULL;
$arguments346['else'] = NULL;
$arguments346['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array348 = array();
$array349 = array (
);$array348['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array349);

$expression350 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments346['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression350(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array348)
					),
					$renderingContext
				);
$arguments346['then'] = 'true';
$arguments341['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);
// Rendering Array
$array351 = array();
$array351['disable-shipping'] = 'true';
$arguments341['data'] = $array351;

$output338 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output338 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$output354 = '';

$output354 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
                                                <div class="validation-error alert alert-danger">';
$array361 = array (
);
$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.lastName.0.message', $array361)]);

$output360 .= '</div>
                                            ';
return $output360;
};
$arguments355 = array();
$arguments355['then'] = NULL;
$arguments355['else'] = NULL;
$arguments355['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array357 = array();
$array358 = array (
);$array357['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.lastName', $array358);

$expression359 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments355['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression359(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array357)
					),
					$renderingContext
				);
$arguments355['__thenClosure'] = $renderChildrenClosure356;

$output354 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output354 .= '
                                        ';
return $output354;
};
$arguments352 = array();
$arguments352['for'] = '';
$arguments352['as'] = 'validationResults';
$arguments352['for'] = 'shippingAddress';

$output338 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext);

$output338 .= '
                                    </div>
                                ';
return $output338;
};
$arguments336 = array();

$output335 .= '';

$output335 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
                                    <label for="shippingAddress-lastName">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['key'] = NULL;
$arguments365['id'] = NULL;
$arguments365['default'] = NULL;
$arguments365['arguments'] = NULL;
$arguments365['extensionName'] = NULL;
$arguments365['languageKey'] = NULL;
$arguments365['alternativeLanguageKeys'] = NULL;
$arguments365['key'] = 'tx_cart_domain_model_order_address.last_name';

$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext)]);

$output364 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments367 = array();
$arguments367['additionalAttributes'] = NULL;
$arguments367['data'] = NULL;
$arguments367['aria'] = NULL;
$arguments367['name'] = NULL;
$arguments367['value'] = NULL;
$arguments367['property'] = NULL;
$arguments367['autofocus'] = NULL;
$arguments367['disabled'] = NULL;
$arguments367['maxlength'] = NULL;
$arguments367['readonly'] = NULL;
$arguments367['size'] = NULL;
$arguments367['placeholder'] = NULL;
$arguments367['pattern'] = NULL;
$arguments367['errorClass'] = 'f3-form-error';
$arguments367['class'] = NULL;
$arguments367['dir'] = NULL;
$arguments367['id'] = NULL;
$arguments367['lang'] = NULL;
$arguments367['style'] = NULL;
$arguments367['title'] = NULL;
$arguments367['accesskey'] = NULL;
$arguments367['tabindex'] = NULL;
$arguments367['onclick'] = NULL;
$arguments367['required'] = false;
$arguments367['type'] = 'text';
$arguments367['id'] = 'shippingAddress-lastName';
$arguments367['class'] = 'form-control';
$arguments367['name'] = 'shippingAddress[lastName]';
$array369 = array (
);$arguments367['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.lastName', $array369);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments370 = array();
$arguments370['then'] = NULL;
$arguments370['else'] = NULL;
$arguments370['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array372 = array();
$array373 = array (
);$array372['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array373);

$expression374 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments370['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression374(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array372)
					),
					$renderingContext
				);
$arguments370['then'] = 'true';
$arguments367['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);
// Rendering Array
$array375 = array();
$array375['disable-shipping'] = 'true';
$arguments367['data'] = $array375;

$output364 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output364 .= '
                                    </div>
                                ';
return $output364;
};
$arguments362 = array();
$arguments362['if'] = NULL;

$output335 .= '';

$output335 .= '
                            ';
return $output335;
};
$arguments292 = array();
$arguments292['then'] = NULL;
$arguments292['else'] = NULL;
$arguments292['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array330 = array();
// Rendering Array
$array331 = array();
$array332 = array (
);$array331['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.lastName.validator', $array332);
$array330['0'] = $array331;
$array330['1'] = ' == ';
// Rendering Array
$array333 = array();
$array333['0'] = 'NotEmpty';
$array330['2'] = $array333;

$expression334 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments292['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression334(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments292['__thenClosure'] = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
                                    <label for="shippingAddress-lastName" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['key'] = NULL;
$arguments295['id'] = NULL;
$arguments295['default'] = NULL;
$arguments295['arguments'] = NULL;
$arguments295['extensionName'] = NULL;
$arguments295['languageKey'] = NULL;
$arguments295['alternativeLanguageKeys'] = NULL;
$arguments295['key'] = 'tx_cart_domain_model_order_address.last_name';

$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext)]);

$output294 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['additionalAttributes'] = NULL;
$arguments297['data'] = NULL;
$arguments297['aria'] = NULL;
$arguments297['name'] = NULL;
$arguments297['value'] = NULL;
$arguments297['property'] = NULL;
$arguments297['autofocus'] = NULL;
$arguments297['disabled'] = NULL;
$arguments297['maxlength'] = NULL;
$arguments297['readonly'] = NULL;
$arguments297['size'] = NULL;
$arguments297['placeholder'] = NULL;
$arguments297['pattern'] = NULL;
$arguments297['errorClass'] = 'f3-form-error';
$arguments297['class'] = NULL;
$arguments297['dir'] = NULL;
$arguments297['id'] = NULL;
$arguments297['lang'] = NULL;
$arguments297['style'] = NULL;
$arguments297['title'] = NULL;
$arguments297['accesskey'] = NULL;
$arguments297['tabindex'] = NULL;
$arguments297['onclick'] = NULL;
$arguments297['required'] = false;
$arguments297['type'] = 'text';
$arguments297['id'] = 'shippingAddress-lastName';
$arguments297['class'] = 'form-control';
$arguments297['name'] = 'shippingAddress[lastName]';
$array299 = array (
);$arguments297['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.lastName', $array299);
// Rendering Boolean node
// Rendering Array
$array300 = array();
$array300['0'] = 'true';

$expression301 = function($context) {return TRUE;};
$arguments297['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression301(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array300)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['then'] = NULL;
$arguments302['else'] = NULL;
$arguments302['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array304 = array();
$array305 = array (
);$array304['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array305);

$expression306 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments302['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression306(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array304)
					),
					$renderingContext
				);
$arguments302['then'] = 'true';
$arguments297['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);
// Rendering Array
$array307 = array();
$array307['disable-shipping'] = 'true';
$arguments297['data'] = $array307;

$output294 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output294 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$output310 = '';

$output310 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '
                                                <div class="validation-error alert alert-danger">';
$array317 = array (
);
$output316 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.lastName.0.message', $array317)]);

$output316 .= '</div>
                                            ';
return $output316;
};
$arguments311 = array();
$arguments311['then'] = NULL;
$arguments311['else'] = NULL;
$arguments311['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array313 = array();
$array314 = array (
);$array313['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.lastName', $array314);

$expression315 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments311['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression315(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array313)
					),
					$renderingContext
				);
$arguments311['__thenClosure'] = $renderChildrenClosure312;

$output310 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output310 .= '
                                        ';
return $output310;
};
$arguments308 = array();
$arguments308['for'] = '';
$arguments308['as'] = 'validationResults';
$arguments308['for'] = 'shippingAddress';

$output294 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output294 .= '
                                    </div>
                                ';
return $output294;
};
$arguments292['__elseClosures'][] = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
                                    <label for="shippingAddress-lastName">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['key'] = NULL;
$arguments319['id'] = NULL;
$arguments319['default'] = NULL;
$arguments319['arguments'] = NULL;
$arguments319['extensionName'] = NULL;
$arguments319['languageKey'] = NULL;
$arguments319['alternativeLanguageKeys'] = NULL;
$arguments319['key'] = 'tx_cart_domain_model_order_address.last_name';

$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext)]);

$output318 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['additionalAttributes'] = NULL;
$arguments321['data'] = NULL;
$arguments321['aria'] = NULL;
$arguments321['name'] = NULL;
$arguments321['value'] = NULL;
$arguments321['property'] = NULL;
$arguments321['autofocus'] = NULL;
$arguments321['disabled'] = NULL;
$arguments321['maxlength'] = NULL;
$arguments321['readonly'] = NULL;
$arguments321['size'] = NULL;
$arguments321['placeholder'] = NULL;
$arguments321['pattern'] = NULL;
$arguments321['errorClass'] = 'f3-form-error';
$arguments321['class'] = NULL;
$arguments321['dir'] = NULL;
$arguments321['id'] = NULL;
$arguments321['lang'] = NULL;
$arguments321['style'] = NULL;
$arguments321['title'] = NULL;
$arguments321['accesskey'] = NULL;
$arguments321['tabindex'] = NULL;
$arguments321['onclick'] = NULL;
$arguments321['required'] = false;
$arguments321['type'] = 'text';
$arguments321['id'] = 'shippingAddress-lastName';
$arguments321['class'] = 'form-control';
$arguments321['name'] = 'shippingAddress[lastName]';
$array323 = array (
);$arguments321['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.lastName', $array323);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['then'] = NULL;
$arguments324['else'] = NULL;
$arguments324['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array327);

$expression328 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments324['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array326)
					),
					$renderingContext
				);
$arguments324['then'] = 'true';
$arguments321['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);
// Rendering Array
$array329 = array();
$array329['disable-shipping'] = 'true';
$arguments321['data'] = $array329;

$output318 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output318 .= '
                                    </div>
                                ';
return $output318;
};

$output291 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output291 .= '
                        </div>
                    ';
return $output291;
};
$arguments284 = array();
$arguments284['then'] = NULL;
$arguments284['else'] = NULL;
$arguments284['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array286 = array();
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.lastName.validator', $array288);
$array286['0'] = $array287;
$array286['1'] = ' != ';
// Rendering Array
$array289 = array();
$array289['0'] = 'Empty';
$array286['2'] = $array289;

$expression290 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments284['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression290(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array286)
					),
					$renderingContext
				);
$arguments284['__thenClosure'] = $renderChildrenClosure285;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output0 .= '
                </div>

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '
                    <div class="field">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
$output430 = '';

$output430 .= '
                                <label for="shippingAddress-email" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['key'] = NULL;
$arguments431['id'] = NULL;
$arguments431['default'] = NULL;
$arguments431['arguments'] = NULL;
$arguments431['extensionName'] = NULL;
$arguments431['languageKey'] = NULL;
$arguments431['alternativeLanguageKeys'] = NULL;
$arguments431['key'] = 'tx_cart_domain_model_order_address.email';

$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext)]);

$output430 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments433 = array();
$arguments433['additionalAttributes'] = NULL;
$arguments433['data'] = NULL;
$arguments433['aria'] = NULL;
$arguments433['name'] = NULL;
$arguments433['value'] = NULL;
$arguments433['property'] = NULL;
$arguments433['autofocus'] = NULL;
$arguments433['disabled'] = NULL;
$arguments433['maxlength'] = NULL;
$arguments433['readonly'] = NULL;
$arguments433['size'] = NULL;
$arguments433['placeholder'] = NULL;
$arguments433['pattern'] = NULL;
$arguments433['errorClass'] = 'f3-form-error';
$arguments433['class'] = NULL;
$arguments433['dir'] = NULL;
$arguments433['id'] = NULL;
$arguments433['lang'] = NULL;
$arguments433['style'] = NULL;
$arguments433['title'] = NULL;
$arguments433['accesskey'] = NULL;
$arguments433['tabindex'] = NULL;
$arguments433['onclick'] = NULL;
$arguments433['required'] = false;
$arguments433['type'] = 'text';
$arguments433['id'] = 'shippingAddress-email';
$arguments433['class'] = 'form-control';
$arguments433['name'] = 'shippingAddress[email]';
$array435 = array (
);$arguments433['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.email', $array435);
$arguments433['type'] = 'email';
// Rendering Boolean node
// Rendering Array
$array436 = array();
$array436['0'] = 'true';

$expression437 = function($context) {return TRUE;};
$arguments433['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression437(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array436)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments438 = array();
$arguments438['then'] = NULL;
$arguments438['else'] = NULL;
$arguments438['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array440 = array();
$array441 = array (
);$array440['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array441);

$expression442 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments438['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression442(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array440)
					),
					$renderingContext
				);
$arguments438['then'] = 'true';
$arguments433['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);
// Rendering Array
$array443 = array();
$array443['disable-shipping'] = 'true';
$arguments433['data'] = $array443;

$output430 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output430 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$output452 = '';

$output452 .= '
                                            <div class="validation-error alert alert-danger">';
$array453 = array (
);
$output452 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.email.0.message', $array453)]);

$output452 .= '</div>
                                        ';
return $output452;
};
$arguments447 = array();
$arguments447['then'] = NULL;
$arguments447['else'] = NULL;
$arguments447['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array449 = array();
$array450 = array (
);$array449['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.email', $array450);

$expression451 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments447['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression451(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array449)
					),
					$renderingContext
				);
$arguments447['__thenClosure'] = $renderChildrenClosure448;

$output446 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output446 .= '
                                    ';
return $output446;
};
$arguments444 = array();
$arguments444['for'] = '';
$arguments444['as'] = 'validationResults';
$arguments444['for'] = 'shippingAddress';

$output430 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output430 .= '
                                </div>
                            ';
return $output430;
};
$arguments428 = array();

$output427 .= '';

$output427 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$output456 = '';

$output456 .= '
                                <label for="shippingAddress-email">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments457 = array();
$arguments457['key'] = NULL;
$arguments457['id'] = NULL;
$arguments457['default'] = NULL;
$arguments457['arguments'] = NULL;
$arguments457['extensionName'] = NULL;
$arguments457['languageKey'] = NULL;
$arguments457['alternativeLanguageKeys'] = NULL;
$arguments457['key'] = 'tx_cart_domain_model_order_address.email';

$output456 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext)]);

$output456 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments459 = array();
$arguments459['additionalAttributes'] = NULL;
$arguments459['data'] = NULL;
$arguments459['aria'] = NULL;
$arguments459['name'] = NULL;
$arguments459['value'] = NULL;
$arguments459['property'] = NULL;
$arguments459['autofocus'] = NULL;
$arguments459['disabled'] = NULL;
$arguments459['maxlength'] = NULL;
$arguments459['readonly'] = NULL;
$arguments459['size'] = NULL;
$arguments459['placeholder'] = NULL;
$arguments459['pattern'] = NULL;
$arguments459['errorClass'] = 'f3-form-error';
$arguments459['class'] = NULL;
$arguments459['dir'] = NULL;
$arguments459['id'] = NULL;
$arguments459['lang'] = NULL;
$arguments459['style'] = NULL;
$arguments459['title'] = NULL;
$arguments459['accesskey'] = NULL;
$arguments459['tabindex'] = NULL;
$arguments459['onclick'] = NULL;
$arguments459['required'] = false;
$arguments459['type'] = 'text';
$arguments459['id'] = 'shippingAddress-email';
$arguments459['class'] = 'form-control';
$arguments459['name'] = 'shippingAddress[email]';
$array461 = array (
);$arguments459['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.email', $array461);
$arguments459['type'] = 'email';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['then'] = NULL;
$arguments462['else'] = NULL;
$arguments462['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array464 = array();
$array465 = array (
);$array464['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array465);

$expression466 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments462['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression466(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array464)
					),
					$renderingContext
				);
$arguments462['then'] = 'true';
$arguments459['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);
// Rendering Array
$array467 = array();
$array467['disable-shipping'] = 'true';
$arguments459['data'] = $array467;

$output456 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output456 .= '
                                </div>
                            ';
return $output456;
};
$arguments454 = array();
$arguments454['if'] = NULL;

$output427 .= '';

$output427 .= '
                        ';
return $output427;
};
$arguments384 = array();
$arguments384['then'] = NULL;
$arguments384['else'] = NULL;
$arguments384['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array422 = array();
// Rendering Array
$array423 = array();
$array424 = array (
);$array423['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.email.validator', $array424);
$array422['0'] = $array423;
$array422['1'] = ' == ';
// Rendering Array
$array425 = array();
$array425['0'] = 'NotEmpty';
$array422['2'] = $array425;

$expression426 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments384['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression426(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array422)
					),
					$renderingContext
				);
$arguments384['__thenClosure'] = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
                                <label for="shippingAddress-email" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments387 = array();
$arguments387['key'] = NULL;
$arguments387['id'] = NULL;
$arguments387['default'] = NULL;
$arguments387['arguments'] = NULL;
$arguments387['extensionName'] = NULL;
$arguments387['languageKey'] = NULL;
$arguments387['alternativeLanguageKeys'] = NULL;
$arguments387['key'] = 'tx_cart_domain_model_order_address.email';

$output386 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext)]);

$output386 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments389 = array();
$arguments389['additionalAttributes'] = NULL;
$arguments389['data'] = NULL;
$arguments389['aria'] = NULL;
$arguments389['name'] = NULL;
$arguments389['value'] = NULL;
$arguments389['property'] = NULL;
$arguments389['autofocus'] = NULL;
$arguments389['disabled'] = NULL;
$arguments389['maxlength'] = NULL;
$arguments389['readonly'] = NULL;
$arguments389['size'] = NULL;
$arguments389['placeholder'] = NULL;
$arguments389['pattern'] = NULL;
$arguments389['errorClass'] = 'f3-form-error';
$arguments389['class'] = NULL;
$arguments389['dir'] = NULL;
$arguments389['id'] = NULL;
$arguments389['lang'] = NULL;
$arguments389['style'] = NULL;
$arguments389['title'] = NULL;
$arguments389['accesskey'] = NULL;
$arguments389['tabindex'] = NULL;
$arguments389['onclick'] = NULL;
$arguments389['required'] = false;
$arguments389['type'] = 'text';
$arguments389['id'] = 'shippingAddress-email';
$arguments389['class'] = 'form-control';
$arguments389['name'] = 'shippingAddress[email]';
$array391 = array (
);$arguments389['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.email', $array391);
$arguments389['type'] = 'email';
// Rendering Boolean node
// Rendering Array
$array392 = array();
$array392['0'] = 'true';

$expression393 = function($context) {return TRUE;};
$arguments389['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression393(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array392)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['then'] = NULL;
$arguments394['else'] = NULL;
$arguments394['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array396 = array();
$array397 = array (
);$array396['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array397);

$expression398 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments394['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression398(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array396)
					),
					$renderingContext
				);
$arguments394['then'] = 'true';
$arguments389['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);
// Rendering Array
$array399 = array();
$array399['disable-shipping'] = 'true';
$arguments389['data'] = $array399;

$output386 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output386 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
$output402 = '';

$output402 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
                                            <div class="validation-error alert alert-danger">';
$array409 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.email.0.message', $array409)]);

$output408 .= '</div>
                                        ';
return $output408;
};
$arguments403 = array();
$arguments403['then'] = NULL;
$arguments403['else'] = NULL;
$arguments403['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array405 = array();
$array406 = array (
);$array405['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.email', $array406);

$expression407 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments403['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression407(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array405)
					),
					$renderingContext
				);
$arguments403['__thenClosure'] = $renderChildrenClosure404;

$output402 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);

$output402 .= '
                                    ';
return $output402;
};
$arguments400 = array();
$arguments400['for'] = '';
$arguments400['as'] = 'validationResults';
$arguments400['for'] = 'shippingAddress';

$output386 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output386 .= '
                                </div>
                            ';
return $output386;
};
$arguments384['__elseClosures'][] = function() use ($renderingContext, $self) {
$output410 = '';

$output410 .= '
                                <label for="shippingAddress-email">
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
$arguments411['key'] = 'tx_cart_domain_model_order_address.email';

$output410 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext)]);

$output410 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments413 = array();
$arguments413['additionalAttributes'] = NULL;
$arguments413['data'] = NULL;
$arguments413['aria'] = NULL;
$arguments413['name'] = NULL;
$arguments413['value'] = NULL;
$arguments413['property'] = NULL;
$arguments413['autofocus'] = NULL;
$arguments413['disabled'] = NULL;
$arguments413['maxlength'] = NULL;
$arguments413['readonly'] = NULL;
$arguments413['size'] = NULL;
$arguments413['placeholder'] = NULL;
$arguments413['pattern'] = NULL;
$arguments413['errorClass'] = 'f3-form-error';
$arguments413['class'] = NULL;
$arguments413['dir'] = NULL;
$arguments413['id'] = NULL;
$arguments413['lang'] = NULL;
$arguments413['style'] = NULL;
$arguments413['title'] = NULL;
$arguments413['accesskey'] = NULL;
$arguments413['tabindex'] = NULL;
$arguments413['onclick'] = NULL;
$arguments413['required'] = false;
$arguments413['type'] = 'text';
$arguments413['id'] = 'shippingAddress-email';
$arguments413['class'] = 'form-control';
$arguments413['name'] = 'shippingAddress[email]';
$array415 = array (
);$arguments413['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.email', $array415);
$arguments413['type'] = 'email';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments416 = array();
$arguments416['then'] = NULL;
$arguments416['else'] = NULL;
$arguments416['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array418 = array();
$array419 = array (
);$array418['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array419);

$expression420 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments416['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression420(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array418)
					),
					$renderingContext
				);
$arguments416['then'] = 'true';
$arguments413['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);
// Rendering Array
$array421 = array();
$array421['disable-shipping'] = 'true';
$arguments413['data'] = $array421;

$output410 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output410 .= '
                                </div>
                            ';
return $output410;
};

$output383 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output383 .= '
                    </div>
                ';
return $output383;
};
$arguments376 = array();
$arguments376['then'] = NULL;
$arguments376['else'] = NULL;
$arguments376['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array378 = array();
// Rendering Array
$array379 = array();
$array380 = array (
);$array379['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.email.validator', $array380);
$array378['0'] = $array379;
$array378['1'] = ' != ';
// Rendering Array
$array381 = array();
$array381['0'] = 'Empty';
$array378['2'] = $array381;

$expression382 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments376['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression382(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array378)
					),
					$renderingContext
				);
$arguments376['__thenClosure'] = $renderChildrenClosure377;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output0 .= '

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
$output475 = '';

$output475 .= '
                    <div class="field">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$output519 = '';

$output519 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$output522 = '';

$output522 .= '
                                <label for="shippingAddress-phone" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments523 = array();
$arguments523['key'] = NULL;
$arguments523['id'] = NULL;
$arguments523['default'] = NULL;
$arguments523['arguments'] = NULL;
$arguments523['extensionName'] = NULL;
$arguments523['languageKey'] = NULL;
$arguments523['alternativeLanguageKeys'] = NULL;
$arguments523['key'] = 'tx_cart_domain_model_order_address.phone';

$output522 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext)]);

$output522 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments525 = array();
$arguments525['additionalAttributes'] = NULL;
$arguments525['data'] = NULL;
$arguments525['aria'] = NULL;
$arguments525['name'] = NULL;
$arguments525['value'] = NULL;
$arguments525['property'] = NULL;
$arguments525['autofocus'] = NULL;
$arguments525['disabled'] = NULL;
$arguments525['maxlength'] = NULL;
$arguments525['readonly'] = NULL;
$arguments525['size'] = NULL;
$arguments525['placeholder'] = NULL;
$arguments525['pattern'] = NULL;
$arguments525['errorClass'] = 'f3-form-error';
$arguments525['class'] = NULL;
$arguments525['dir'] = NULL;
$arguments525['id'] = NULL;
$arguments525['lang'] = NULL;
$arguments525['style'] = NULL;
$arguments525['title'] = NULL;
$arguments525['accesskey'] = NULL;
$arguments525['tabindex'] = NULL;
$arguments525['onclick'] = NULL;
$arguments525['required'] = false;
$arguments525['type'] = 'text';
$arguments525['id'] = 'shippingAddress-phone';
$arguments525['class'] = 'form-control';
$arguments525['name'] = 'shippingAddress[phone]';
$array527 = array (
);$arguments525['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.phone', $array527);
$arguments525['type'] = 'phone';
// Rendering Boolean node
// Rendering Array
$array528 = array();
$array528['0'] = 'true';

$expression529 = function($context) {return TRUE;};
$arguments525['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression529(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array528)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments530 = array();
$arguments530['then'] = NULL;
$arguments530['else'] = NULL;
$arguments530['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array532 = array();
$array533 = array (
);$array532['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array533);

$expression534 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments530['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression534(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array532)
					),
					$renderingContext
				);
$arguments530['then'] = 'true';
$arguments525['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);
// Rendering Array
$array535 = array();
$array535['disable-shipping'] = 'true';
$arguments525['data'] = $array535;

$output522 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);

$output522 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$output544 = '';

$output544 .= '
                                            <div class="validation-error alert alert-danger">';
$array545 = array (
);
$output544 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.phone.0.message', $array545)]);

$output544 .= '</div>
                                        ';
return $output544;
};
$arguments539 = array();
$arguments539['then'] = NULL;
$arguments539['else'] = NULL;
$arguments539['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array541 = array();
$array542 = array (
);$array541['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.phone', $array542);

$expression543 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments539['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression543(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array541)
					),
					$renderingContext
				);
$arguments539['__thenClosure'] = $renderChildrenClosure540;

$output538 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);

$output538 .= '
                                    ';
return $output538;
};
$arguments536 = array();
$arguments536['for'] = '';
$arguments536['as'] = 'validationResults';
$arguments536['for'] = 'shippingAddress';

$output522 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output522 .= '
                                </div>
                            ';
return $output522;
};
$arguments520 = array();

$output519 .= '';

$output519 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output548 = '';

$output548 .= '
                                <label for="shippingAddress-phone">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['key'] = NULL;
$arguments549['id'] = NULL;
$arguments549['default'] = NULL;
$arguments549['arguments'] = NULL;
$arguments549['extensionName'] = NULL;
$arguments549['languageKey'] = NULL;
$arguments549['alternativeLanguageKeys'] = NULL;
$arguments549['key'] = 'tx_cart_domain_model_order_address.phone';

$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext)]);

$output548 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments551 = array();
$arguments551['additionalAttributes'] = NULL;
$arguments551['data'] = NULL;
$arguments551['aria'] = NULL;
$arguments551['name'] = NULL;
$arguments551['value'] = NULL;
$arguments551['property'] = NULL;
$arguments551['autofocus'] = NULL;
$arguments551['disabled'] = NULL;
$arguments551['maxlength'] = NULL;
$arguments551['readonly'] = NULL;
$arguments551['size'] = NULL;
$arguments551['placeholder'] = NULL;
$arguments551['pattern'] = NULL;
$arguments551['errorClass'] = 'f3-form-error';
$arguments551['class'] = NULL;
$arguments551['dir'] = NULL;
$arguments551['id'] = NULL;
$arguments551['lang'] = NULL;
$arguments551['style'] = NULL;
$arguments551['title'] = NULL;
$arguments551['accesskey'] = NULL;
$arguments551['tabindex'] = NULL;
$arguments551['onclick'] = NULL;
$arguments551['required'] = false;
$arguments551['type'] = 'text';
$arguments551['id'] = 'shippingAddress-phone';
$arguments551['class'] = 'form-control';
$arguments551['name'] = 'shippingAddress[phone]';
$array553 = array (
);$arguments551['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.phone', $array553);
$arguments551['type'] = 'phone';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments554 = array();
$arguments554['then'] = NULL;
$arguments554['else'] = NULL;
$arguments554['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array556 = array();
$array557 = array (
);$array556['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array557);

$expression558 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments554['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression558(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array556)
					),
					$renderingContext
				);
$arguments554['then'] = 'true';
$arguments551['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext);
// Rendering Array
$array559 = array();
$array559['disable-shipping'] = 'true';
$arguments551['data'] = $array559;

$output548 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments551, $renderChildrenClosure552, $renderingContext);

$output548 .= '
                                </div>
                            ';
return $output548;
};
$arguments546 = array();
$arguments546['if'] = NULL;

$output519 .= '';

$output519 .= '
                        ';
return $output519;
};
$arguments476 = array();
$arguments476['then'] = NULL;
$arguments476['else'] = NULL;
$arguments476['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array514 = array();
// Rendering Array
$array515 = array();
$array516 = array (
);$array515['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.phone.validator', $array516);
$array514['0'] = $array515;
$array514['1'] = ' == ';
// Rendering Array
$array517 = array();
$array517['0'] = 'NotEmpty';
$array514['2'] = $array517;

$expression518 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments476['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression518(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array514)
					),
					$renderingContext
				);
$arguments476['__thenClosure'] = function() use ($renderingContext, $self) {
$output478 = '';

$output478 .= '
                                <label for="shippingAddress-phone" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments479 = array();
$arguments479['key'] = NULL;
$arguments479['id'] = NULL;
$arguments479['default'] = NULL;
$arguments479['arguments'] = NULL;
$arguments479['extensionName'] = NULL;
$arguments479['languageKey'] = NULL;
$arguments479['alternativeLanguageKeys'] = NULL;
$arguments479['key'] = 'tx_cart_domain_model_order_address.phone';

$output478 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext)]);

$output478 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments481 = array();
$arguments481['additionalAttributes'] = NULL;
$arguments481['data'] = NULL;
$arguments481['aria'] = NULL;
$arguments481['name'] = NULL;
$arguments481['value'] = NULL;
$arguments481['property'] = NULL;
$arguments481['autofocus'] = NULL;
$arguments481['disabled'] = NULL;
$arguments481['maxlength'] = NULL;
$arguments481['readonly'] = NULL;
$arguments481['size'] = NULL;
$arguments481['placeholder'] = NULL;
$arguments481['pattern'] = NULL;
$arguments481['errorClass'] = 'f3-form-error';
$arguments481['class'] = NULL;
$arguments481['dir'] = NULL;
$arguments481['id'] = NULL;
$arguments481['lang'] = NULL;
$arguments481['style'] = NULL;
$arguments481['title'] = NULL;
$arguments481['accesskey'] = NULL;
$arguments481['tabindex'] = NULL;
$arguments481['onclick'] = NULL;
$arguments481['required'] = false;
$arguments481['type'] = 'text';
$arguments481['id'] = 'shippingAddress-phone';
$arguments481['class'] = 'form-control';
$arguments481['name'] = 'shippingAddress[phone]';
$array483 = array (
);$arguments481['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.phone', $array483);
$arguments481['type'] = 'phone';
// Rendering Boolean node
// Rendering Array
$array484 = array();
$array484['0'] = 'true';

$expression485 = function($context) {return TRUE;};
$arguments481['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression485(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array484)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['then'] = NULL;
$arguments486['else'] = NULL;
$arguments486['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array488 = array();
$array489 = array (
);$array488['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array489);

$expression490 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments486['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression490(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array488)
					),
					$renderingContext
				);
$arguments486['then'] = 'true';
$arguments481['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);
// Rendering Array
$array491 = array();
$array491['disable-shipping'] = 'true';
$arguments481['data'] = $array491;

$output478 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$output478 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
$output494 = '';

$output494 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
                                            <div class="validation-error alert alert-danger">';
$array501 = array (
);
$output500 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.phone.0.message', $array501)]);

$output500 .= '</div>
                                        ';
return $output500;
};
$arguments495 = array();
$arguments495['then'] = NULL;
$arguments495['else'] = NULL;
$arguments495['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array497 = array();
$array498 = array (
);$array497['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.phone', $array498);

$expression499 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments495['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression499(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array497)
					),
					$renderingContext
				);
$arguments495['__thenClosure'] = $renderChildrenClosure496;

$output494 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext);

$output494 .= '
                                    ';
return $output494;
};
$arguments492 = array();
$arguments492['for'] = '';
$arguments492['as'] = 'validationResults';
$arguments492['for'] = 'shippingAddress';

$output478 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output478 .= '
                                </div>
                            ';
return $output478;
};
$arguments476['__elseClosures'][] = function() use ($renderingContext, $self) {
$output502 = '';

$output502 .= '
                                <label for="shippingAddress-phone">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['key'] = NULL;
$arguments503['id'] = NULL;
$arguments503['default'] = NULL;
$arguments503['arguments'] = NULL;
$arguments503['extensionName'] = NULL;
$arguments503['languageKey'] = NULL;
$arguments503['alternativeLanguageKeys'] = NULL;
$arguments503['key'] = 'tx_cart_domain_model_order_address.phone';

$output502 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext)]);

$output502 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['additionalAttributes'] = NULL;
$arguments505['data'] = NULL;
$arguments505['aria'] = NULL;
$arguments505['name'] = NULL;
$arguments505['value'] = NULL;
$arguments505['property'] = NULL;
$arguments505['autofocus'] = NULL;
$arguments505['disabled'] = NULL;
$arguments505['maxlength'] = NULL;
$arguments505['readonly'] = NULL;
$arguments505['size'] = NULL;
$arguments505['placeholder'] = NULL;
$arguments505['pattern'] = NULL;
$arguments505['errorClass'] = 'f3-form-error';
$arguments505['class'] = NULL;
$arguments505['dir'] = NULL;
$arguments505['id'] = NULL;
$arguments505['lang'] = NULL;
$arguments505['style'] = NULL;
$arguments505['title'] = NULL;
$arguments505['accesskey'] = NULL;
$arguments505['tabindex'] = NULL;
$arguments505['onclick'] = NULL;
$arguments505['required'] = false;
$arguments505['type'] = 'text';
$arguments505['id'] = 'shippingAddress-phone';
$arguments505['class'] = 'form-control';
$arguments505['name'] = 'shippingAddress[phone]';
$array507 = array (
);$arguments505['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.phone', $array507);
$arguments505['type'] = 'phone';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments508 = array();
$arguments508['then'] = NULL;
$arguments508['else'] = NULL;
$arguments508['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array510 = array();
$array511 = array (
);$array510['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array511);

$expression512 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments508['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression512(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array510)
					),
					$renderingContext
				);
$arguments508['then'] = 'true';
$arguments505['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);
// Rendering Array
$array513 = array();
$array513['disable-shipping'] = 'true';
$arguments505['data'] = $array513;

$output502 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output502 .= '
                                </div>
                            ';
return $output502;
};

$output475 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output475 .= '
                    </div>
                ';
return $output475;
};
$arguments468 = array();
$arguments468['then'] = NULL;
$arguments468['else'] = NULL;
$arguments468['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array470 = array();
// Rendering Array
$array471 = array();
$array472 = array (
);$array471['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.phone.validator', $array472);
$array470['0'] = $array471;
$array470['1'] = ' != ';
// Rendering Array
$array473 = array();
$array473['0'] = 'Empty';
$array470['2'] = $array473;

$expression474 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments468['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression474(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array470)
					),
					$renderingContext
				);
$arguments468['__thenClosure'] = $renderChildrenClosure469;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output0 .= '

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
$output567 = '';

$output567 .= '
                    <div class="field">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
$output611 = '';

$output611 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
$output614 = '';

$output614 .= '
                                <label for="shippingAddress-fax" class="required">
                                    ';
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
$arguments615['key'] = 'tx_cart_domain_model_order_address.fax';

$output614 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext)]);

$output614 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments617 = array();
$arguments617['additionalAttributes'] = NULL;
$arguments617['data'] = NULL;
$arguments617['aria'] = NULL;
$arguments617['name'] = NULL;
$arguments617['value'] = NULL;
$arguments617['property'] = NULL;
$arguments617['autofocus'] = NULL;
$arguments617['disabled'] = NULL;
$arguments617['maxlength'] = NULL;
$arguments617['readonly'] = NULL;
$arguments617['size'] = NULL;
$arguments617['placeholder'] = NULL;
$arguments617['pattern'] = NULL;
$arguments617['errorClass'] = 'f3-form-error';
$arguments617['class'] = NULL;
$arguments617['dir'] = NULL;
$arguments617['id'] = NULL;
$arguments617['lang'] = NULL;
$arguments617['style'] = NULL;
$arguments617['title'] = NULL;
$arguments617['accesskey'] = NULL;
$arguments617['tabindex'] = NULL;
$arguments617['onclick'] = NULL;
$arguments617['required'] = false;
$arguments617['type'] = 'text';
$arguments617['id'] = 'shippingAddress-fax';
$arguments617['class'] = 'form-control';
$arguments617['name'] = 'shippingAddress[fax]';
$array619 = array (
);$arguments617['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.fax', $array619);
$arguments617['type'] = 'fax';
// Rendering Boolean node
// Rendering Array
$array620 = array();
$array620['0'] = 'true';

$expression621 = function($context) {return TRUE;};
$arguments617['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression621(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array620)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments622 = array();
$arguments622['then'] = NULL;
$arguments622['else'] = NULL;
$arguments622['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array624 = array();
$array625 = array (
);$array624['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array625);

$expression626 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments622['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression626(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array624)
					),
					$renderingContext
				);
$arguments622['then'] = 'true';
$arguments617['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext);
// Rendering Array
$array627 = array();
$array627['disable-shipping'] = 'true';
$arguments617['data'] = $array627;

$output614 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);

$output614 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
$output630 = '';

$output630 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure632 = function() use ($renderingContext, $self) {
$output636 = '';

$output636 .= '
                                            <div class="validation-error alert alert-danger">';
$array637 = array (
);
$output636 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.fax.0.message', $array637)]);

$output636 .= '</div>
                                        ';
return $output636;
};
$arguments631 = array();
$arguments631['then'] = NULL;
$arguments631['else'] = NULL;
$arguments631['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array633 = array();
$array634 = array (
);$array633['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.fax', $array634);

$expression635 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments631['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression635(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array633)
					),
					$renderingContext
				);
$arguments631['__thenClosure'] = $renderChildrenClosure632;

$output630 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments631, $renderChildrenClosure632, $renderingContext);

$output630 .= '
                                    ';
return $output630;
};
$arguments628 = array();
$arguments628['for'] = '';
$arguments628['as'] = 'validationResults';
$arguments628['for'] = 'shippingAddress';

$output614 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments628, $renderChildrenClosure629, $renderingContext);

$output614 .= '
                                </div>
                            ';
return $output614;
};
$arguments612 = array();

$output611 .= '';

$output611 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure639 = function() use ($renderingContext, $self) {
$output640 = '';

$output640 .= '
                                <label for="shippingAddress-fax">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure642 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments641 = array();
$arguments641['key'] = NULL;
$arguments641['id'] = NULL;
$arguments641['default'] = NULL;
$arguments641['arguments'] = NULL;
$arguments641['extensionName'] = NULL;
$arguments641['languageKey'] = NULL;
$arguments641['alternativeLanguageKeys'] = NULL;
$arguments641['key'] = 'tx_cart_domain_model_order_address.fax';

$output640 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments641, $renderChildrenClosure642, $renderingContext)]);

$output640 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['additionalAttributes'] = NULL;
$arguments643['data'] = NULL;
$arguments643['aria'] = NULL;
$arguments643['name'] = NULL;
$arguments643['value'] = NULL;
$arguments643['property'] = NULL;
$arguments643['autofocus'] = NULL;
$arguments643['disabled'] = NULL;
$arguments643['maxlength'] = NULL;
$arguments643['readonly'] = NULL;
$arguments643['size'] = NULL;
$arguments643['placeholder'] = NULL;
$arguments643['pattern'] = NULL;
$arguments643['errorClass'] = 'f3-form-error';
$arguments643['class'] = NULL;
$arguments643['dir'] = NULL;
$arguments643['id'] = NULL;
$arguments643['lang'] = NULL;
$arguments643['style'] = NULL;
$arguments643['title'] = NULL;
$arguments643['accesskey'] = NULL;
$arguments643['tabindex'] = NULL;
$arguments643['onclick'] = NULL;
$arguments643['required'] = false;
$arguments643['type'] = 'text';
$arguments643['id'] = 'shippingAddress-fax';
$arguments643['class'] = 'form-control';
$arguments643['name'] = 'shippingAddress[fax]';
$array645 = array (
);$arguments643['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.fax', $array645);
$arguments643['type'] = 'fax';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments646 = array();
$arguments646['then'] = NULL;
$arguments646['else'] = NULL;
$arguments646['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array648 = array();
$array649 = array (
);$array648['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array649);

$expression650 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments646['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression650(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array648)
					),
					$renderingContext
				);
$arguments646['then'] = 'true';
$arguments643['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext);
// Rendering Array
$array651 = array();
$array651['disable-shipping'] = 'true';
$arguments643['data'] = $array651;

$output640 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext);

$output640 .= '
                                </div>
                            ';
return $output640;
};
$arguments638 = array();
$arguments638['if'] = NULL;

$output611 .= '';

$output611 .= '
                        ';
return $output611;
};
$arguments568 = array();
$arguments568['then'] = NULL;
$arguments568['else'] = NULL;
$arguments568['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array606 = array();
// Rendering Array
$array607 = array();
$array608 = array (
);$array607['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.fax.validator', $array608);
$array606['0'] = $array607;
$array606['1'] = ' == ';
// Rendering Array
$array609 = array();
$array609['0'] = 'NotEmpty';
$array606['2'] = $array609;

$expression610 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments568['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression610(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array606)
					),
					$renderingContext
				);
$arguments568['__thenClosure'] = function() use ($renderingContext, $self) {
$output570 = '';

$output570 .= '
                                <label for="shippingAddress-fax" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments571 = array();
$arguments571['key'] = NULL;
$arguments571['id'] = NULL;
$arguments571['default'] = NULL;
$arguments571['arguments'] = NULL;
$arguments571['extensionName'] = NULL;
$arguments571['languageKey'] = NULL;
$arguments571['alternativeLanguageKeys'] = NULL;
$arguments571['key'] = 'tx_cart_domain_model_order_address.fax';

$output570 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext)]);

$output570 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure574 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments573 = array();
$arguments573['additionalAttributes'] = NULL;
$arguments573['data'] = NULL;
$arguments573['aria'] = NULL;
$arguments573['name'] = NULL;
$arguments573['value'] = NULL;
$arguments573['property'] = NULL;
$arguments573['autofocus'] = NULL;
$arguments573['disabled'] = NULL;
$arguments573['maxlength'] = NULL;
$arguments573['readonly'] = NULL;
$arguments573['size'] = NULL;
$arguments573['placeholder'] = NULL;
$arguments573['pattern'] = NULL;
$arguments573['errorClass'] = 'f3-form-error';
$arguments573['class'] = NULL;
$arguments573['dir'] = NULL;
$arguments573['id'] = NULL;
$arguments573['lang'] = NULL;
$arguments573['style'] = NULL;
$arguments573['title'] = NULL;
$arguments573['accesskey'] = NULL;
$arguments573['tabindex'] = NULL;
$arguments573['onclick'] = NULL;
$arguments573['required'] = false;
$arguments573['type'] = 'text';
$arguments573['id'] = 'shippingAddress-fax';
$arguments573['class'] = 'form-control';
$arguments573['name'] = 'shippingAddress[fax]';
$array575 = array (
);$arguments573['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.fax', $array575);
$arguments573['type'] = 'fax';
// Rendering Boolean node
// Rendering Array
$array576 = array();
$array576['0'] = 'true';

$expression577 = function($context) {return TRUE;};
$arguments573['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression577(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array576)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments578 = array();
$arguments578['then'] = NULL;
$arguments578['else'] = NULL;
$arguments578['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array580 = array();
$array581 = array (
);$array580['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array581);

$expression582 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments578['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression582(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array580)
					),
					$renderingContext
				);
$arguments578['then'] = 'true';
$arguments573['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext);
// Rendering Array
$array583 = array();
$array583['disable-shipping'] = 'true';
$arguments573['data'] = $array583;

$output570 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments573, $renderChildrenClosure574, $renderingContext);

$output570 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
$output592 = '';

$output592 .= '
                                            <div class="validation-error alert alert-danger">';
$array593 = array (
);
$output592 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.fax.0.message', $array593)]);

$output592 .= '</div>
                                        ';
return $output592;
};
$arguments587 = array();
$arguments587['then'] = NULL;
$arguments587['else'] = NULL;
$arguments587['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array589 = array();
$array590 = array (
);$array589['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.fax', $array590);

$expression591 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments587['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression591(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array589)
					),
					$renderingContext
				);
$arguments587['__thenClosure'] = $renderChildrenClosure588;

$output586 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output586 .= '
                                    ';
return $output586;
};
$arguments584 = array();
$arguments584['for'] = '';
$arguments584['as'] = 'validationResults';
$arguments584['for'] = 'shippingAddress';

$output570 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output570 .= '
                                </div>
                            ';
return $output570;
};
$arguments568['__elseClosures'][] = function() use ($renderingContext, $self) {
$output594 = '';

$output594 .= '
                                <label for="shippingAddress-fax">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure596 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments595 = array();
$arguments595['key'] = NULL;
$arguments595['id'] = NULL;
$arguments595['default'] = NULL;
$arguments595['arguments'] = NULL;
$arguments595['extensionName'] = NULL;
$arguments595['languageKey'] = NULL;
$arguments595['alternativeLanguageKeys'] = NULL;
$arguments595['key'] = 'tx_cart_domain_model_order_address.fax';

$output594 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments595, $renderChildrenClosure596, $renderingContext)]);

$output594 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments597 = array();
$arguments597['additionalAttributes'] = NULL;
$arguments597['data'] = NULL;
$arguments597['aria'] = NULL;
$arguments597['name'] = NULL;
$arguments597['value'] = NULL;
$arguments597['property'] = NULL;
$arguments597['autofocus'] = NULL;
$arguments597['disabled'] = NULL;
$arguments597['maxlength'] = NULL;
$arguments597['readonly'] = NULL;
$arguments597['size'] = NULL;
$arguments597['placeholder'] = NULL;
$arguments597['pattern'] = NULL;
$arguments597['errorClass'] = 'f3-form-error';
$arguments597['class'] = NULL;
$arguments597['dir'] = NULL;
$arguments597['id'] = NULL;
$arguments597['lang'] = NULL;
$arguments597['style'] = NULL;
$arguments597['title'] = NULL;
$arguments597['accesskey'] = NULL;
$arguments597['tabindex'] = NULL;
$arguments597['onclick'] = NULL;
$arguments597['required'] = false;
$arguments597['type'] = 'text';
$arguments597['id'] = 'shippingAddress-fax';
$arguments597['class'] = 'form-control';
$arguments597['name'] = 'shippingAddress[fax]';
$array599 = array (
);$arguments597['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.fax', $array599);
$arguments597['type'] = 'fax';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments600 = array();
$arguments600['then'] = NULL;
$arguments600['else'] = NULL;
$arguments600['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array602 = array();
$array603 = array (
);$array602['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array603);

$expression604 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments600['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression604(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array602)
					),
					$renderingContext
				);
$arguments600['then'] = 'true';
$arguments597['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext);
// Rendering Array
$array605 = array();
$array605['disable-shipping'] = 'true';
$arguments597['data'] = $array605;

$output594 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext);

$output594 .= '
                                </div>
                            ';
return $output594;
};

$output567 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments568, $renderChildrenClosure569, $renderingContext);

$output567 .= '
                    </div>
                ';
return $output567;
};
$arguments560 = array();
$arguments560['then'] = NULL;
$arguments560['else'] = NULL;
$arguments560['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array562 = array();
// Rendering Array
$array563 = array();
$array564 = array (
);$array563['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.fax.validator', $array564);
$array562['0'] = $array563;
$array562['1'] = ' != ';
// Rendering Array
$array565 = array();
$array565['0'] = 'Empty';
$array562['2'] = $array565;

$expression566 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments560['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression566(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array562)
					),
					$renderingContext
				);
$arguments560['__thenClosure'] = $renderChildrenClosure561;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments560, $renderChildrenClosure561, $renderingContext);

$output0 .= '

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
$output659 = '';

$output659 .= '
                    <div class="field">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
$output703 = '';

$output703 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure705 = function() use ($renderingContext, $self) {
$output706 = '';

$output706 .= '
                                <label for="shippingAddress-company" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure708 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments707 = array();
$arguments707['key'] = NULL;
$arguments707['id'] = NULL;
$arguments707['default'] = NULL;
$arguments707['arguments'] = NULL;
$arguments707['extensionName'] = NULL;
$arguments707['languageKey'] = NULL;
$arguments707['alternativeLanguageKeys'] = NULL;
$arguments707['key'] = 'tx_cart_domain_model_order_address.company';

$output706 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments707, $renderChildrenClosure708, $renderingContext)]);

$output706 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure710 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments709 = array();
$arguments709['additionalAttributes'] = NULL;
$arguments709['data'] = NULL;
$arguments709['aria'] = NULL;
$arguments709['name'] = NULL;
$arguments709['value'] = NULL;
$arguments709['property'] = NULL;
$arguments709['autofocus'] = NULL;
$arguments709['disabled'] = NULL;
$arguments709['maxlength'] = NULL;
$arguments709['readonly'] = NULL;
$arguments709['size'] = NULL;
$arguments709['placeholder'] = NULL;
$arguments709['pattern'] = NULL;
$arguments709['errorClass'] = 'f3-form-error';
$arguments709['class'] = NULL;
$arguments709['dir'] = NULL;
$arguments709['id'] = NULL;
$arguments709['lang'] = NULL;
$arguments709['style'] = NULL;
$arguments709['title'] = NULL;
$arguments709['accesskey'] = NULL;
$arguments709['tabindex'] = NULL;
$arguments709['onclick'] = NULL;
$arguments709['required'] = false;
$arguments709['type'] = 'text';
$arguments709['id'] = 'shippingAddress-company';
$arguments709['class'] = 'form-control';
$arguments709['name'] = 'shippingAddress[company]';
$array711 = array (
);$arguments709['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.company', $array711);
// Rendering Boolean node
// Rendering Array
$array712 = array();
$array712['0'] = 'true';

$expression713 = function($context) {return TRUE;};
$arguments709['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression713(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array712)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure715 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments714 = array();
$arguments714['then'] = NULL;
$arguments714['else'] = NULL;
$arguments714['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array716 = array();
$array717 = array (
);$array716['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array717);

$expression718 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments714['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression718(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array716)
					),
					$renderingContext
				);
$arguments714['then'] = 'true';
$arguments709['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments714, $renderChildrenClosure715, $renderingContext);
// Rendering Array
$array719 = array();
$array719['disable-shipping'] = 'true';
$arguments709['data'] = $array719;

$output706 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments709, $renderChildrenClosure710, $renderingContext);

$output706 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure721 = function() use ($renderingContext, $self) {
$output722 = '';

$output722 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure724 = function() use ($renderingContext, $self) {
$output728 = '';

$output728 .= '
                                            <div class="validation-error alert alert-danger">';
$array729 = array (
);
$output728 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.company.0.message', $array729)]);

$output728 .= '</div>
                                        ';
return $output728;
};
$arguments723 = array();
$arguments723['then'] = NULL;
$arguments723['else'] = NULL;
$arguments723['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array725 = array();
$array726 = array (
);$array725['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.company', $array726);

$expression727 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments723['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression727(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array725)
					),
					$renderingContext
				);
$arguments723['__thenClosure'] = $renderChildrenClosure724;

$output722 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments723, $renderChildrenClosure724, $renderingContext);

$output722 .= '
                                    ';
return $output722;
};
$arguments720 = array();
$arguments720['for'] = '';
$arguments720['as'] = 'validationResults';
$arguments720['for'] = 'shippingAddress';

$output706 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments720, $renderChildrenClosure721, $renderingContext);

$output706 .= '
                                </div>
                            ';
return $output706;
};
$arguments704 = array();

$output703 .= '';

$output703 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure731 = function() use ($renderingContext, $self) {
$output732 = '';

$output732 .= '
                                <label for="shippingAddress-company">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure734 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments733 = array();
$arguments733['key'] = NULL;
$arguments733['id'] = NULL;
$arguments733['default'] = NULL;
$arguments733['arguments'] = NULL;
$arguments733['extensionName'] = NULL;
$arguments733['languageKey'] = NULL;
$arguments733['alternativeLanguageKeys'] = NULL;
$arguments733['key'] = 'tx_cart_domain_model_order_address.company';

$output732 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments733, $renderChildrenClosure734, $renderingContext)]);

$output732 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments735 = array();
$arguments735['additionalAttributes'] = NULL;
$arguments735['data'] = NULL;
$arguments735['aria'] = NULL;
$arguments735['name'] = NULL;
$arguments735['value'] = NULL;
$arguments735['property'] = NULL;
$arguments735['autofocus'] = NULL;
$arguments735['disabled'] = NULL;
$arguments735['maxlength'] = NULL;
$arguments735['readonly'] = NULL;
$arguments735['size'] = NULL;
$arguments735['placeholder'] = NULL;
$arguments735['pattern'] = NULL;
$arguments735['errorClass'] = 'f3-form-error';
$arguments735['class'] = NULL;
$arguments735['dir'] = NULL;
$arguments735['id'] = NULL;
$arguments735['lang'] = NULL;
$arguments735['style'] = NULL;
$arguments735['title'] = NULL;
$arguments735['accesskey'] = NULL;
$arguments735['tabindex'] = NULL;
$arguments735['onclick'] = NULL;
$arguments735['required'] = false;
$arguments735['type'] = 'text';
$arguments735['id'] = 'shippingAddress-company';
$arguments735['class'] = 'form-control';
$arguments735['name'] = 'shippingAddress[company]';
$array737 = array (
);$arguments735['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.company', $array737);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments738 = array();
$arguments738['then'] = NULL;
$arguments738['else'] = NULL;
$arguments738['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array740 = array();
$array741 = array (
);$array740['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array741);

$expression742 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments738['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression742(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array740)
					),
					$renderingContext
				);
$arguments738['then'] = 'true';
$arguments735['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments738, $renderChildrenClosure739, $renderingContext);
// Rendering Array
$array743 = array();
$array743['disable-shipping'] = 'true';
$arguments735['data'] = $array743;

$output732 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext);

$output732 .= '
                                </div>
                            ';
return $output732;
};
$arguments730 = array();
$arguments730['if'] = NULL;

$output703 .= '';

$output703 .= '
                        ';
return $output703;
};
$arguments660 = array();
$arguments660['then'] = NULL;
$arguments660['else'] = NULL;
$arguments660['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array698 = array();
// Rendering Array
$array699 = array();
$array700 = array (
);$array699['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.company.validator', $array700);
$array698['0'] = $array699;
$array698['1'] = ' == ';
// Rendering Array
$array701 = array();
$array701['0'] = 'NotEmpty';
$array698['2'] = $array701;

$expression702 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments660['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression702(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array698)
					),
					$renderingContext
				);
$arguments660['__thenClosure'] = function() use ($renderingContext, $self) {
$output662 = '';

$output662 .= '
                                <label for="shippingAddress-company" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure664 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments663 = array();
$arguments663['key'] = NULL;
$arguments663['id'] = NULL;
$arguments663['default'] = NULL;
$arguments663['arguments'] = NULL;
$arguments663['extensionName'] = NULL;
$arguments663['languageKey'] = NULL;
$arguments663['alternativeLanguageKeys'] = NULL;
$arguments663['key'] = 'tx_cart_domain_model_order_address.company';

$output662 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments663, $renderChildrenClosure664, $renderingContext)]);

$output662 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments665 = array();
$arguments665['additionalAttributes'] = NULL;
$arguments665['data'] = NULL;
$arguments665['aria'] = NULL;
$arguments665['name'] = NULL;
$arguments665['value'] = NULL;
$arguments665['property'] = NULL;
$arguments665['autofocus'] = NULL;
$arguments665['disabled'] = NULL;
$arguments665['maxlength'] = NULL;
$arguments665['readonly'] = NULL;
$arguments665['size'] = NULL;
$arguments665['placeholder'] = NULL;
$arguments665['pattern'] = NULL;
$arguments665['errorClass'] = 'f3-form-error';
$arguments665['class'] = NULL;
$arguments665['dir'] = NULL;
$arguments665['id'] = NULL;
$arguments665['lang'] = NULL;
$arguments665['style'] = NULL;
$arguments665['title'] = NULL;
$arguments665['accesskey'] = NULL;
$arguments665['tabindex'] = NULL;
$arguments665['onclick'] = NULL;
$arguments665['required'] = false;
$arguments665['type'] = 'text';
$arguments665['id'] = 'shippingAddress-company';
$arguments665['class'] = 'form-control';
$arguments665['name'] = 'shippingAddress[company]';
$array667 = array (
);$arguments665['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.company', $array667);
// Rendering Boolean node
// Rendering Array
$array668 = array();
$array668['0'] = 'true';

$expression669 = function($context) {return TRUE;};
$arguments665['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression669(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array668)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments670 = array();
$arguments670['then'] = NULL;
$arguments670['else'] = NULL;
$arguments670['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array672 = array();
$array673 = array (
);$array672['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array673);

$expression674 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments670['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression674(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array672)
					),
					$renderingContext
				);
$arguments670['then'] = 'true';
$arguments665['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments670, $renderChildrenClosure671, $renderingContext);
// Rendering Array
$array675 = array();
$array675['disable-shipping'] = 'true';
$arguments665['data'] = $array675;

$output662 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments665, $renderChildrenClosure666, $renderingContext);

$output662 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
$output678 = '';

$output678 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure680 = function() use ($renderingContext, $self) {
$output684 = '';

$output684 .= '
                                            <div class="validation-error alert alert-danger">';
$array685 = array (
);
$output684 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.company.0.message', $array685)]);

$output684 .= '</div>
                                        ';
return $output684;
};
$arguments679 = array();
$arguments679['then'] = NULL;
$arguments679['else'] = NULL;
$arguments679['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array681 = array();
$array682 = array (
);$array681['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.company', $array682);

$expression683 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments679['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression683(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array681)
					),
					$renderingContext
				);
$arguments679['__thenClosure'] = $renderChildrenClosure680;

$output678 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments679, $renderChildrenClosure680, $renderingContext);

$output678 .= '
                                    ';
return $output678;
};
$arguments676 = array();
$arguments676['for'] = '';
$arguments676['as'] = 'validationResults';
$arguments676['for'] = 'shippingAddress';

$output662 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);

$output662 .= '
                                </div>
                            ';
return $output662;
};
$arguments660['__elseClosures'][] = function() use ($renderingContext, $self) {
$output686 = '';

$output686 .= '
                                <label for="shippingAddress-company">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments687 = array();
$arguments687['key'] = NULL;
$arguments687['id'] = NULL;
$arguments687['default'] = NULL;
$arguments687['arguments'] = NULL;
$arguments687['extensionName'] = NULL;
$arguments687['languageKey'] = NULL;
$arguments687['alternativeLanguageKeys'] = NULL;
$arguments687['key'] = 'tx_cart_domain_model_order_address.company';

$output686 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments687, $renderChildrenClosure688, $renderingContext)]);

$output686 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments689 = array();
$arguments689['additionalAttributes'] = NULL;
$arguments689['data'] = NULL;
$arguments689['aria'] = NULL;
$arguments689['name'] = NULL;
$arguments689['value'] = NULL;
$arguments689['property'] = NULL;
$arguments689['autofocus'] = NULL;
$arguments689['disabled'] = NULL;
$arguments689['maxlength'] = NULL;
$arguments689['readonly'] = NULL;
$arguments689['size'] = NULL;
$arguments689['placeholder'] = NULL;
$arguments689['pattern'] = NULL;
$arguments689['errorClass'] = 'f3-form-error';
$arguments689['class'] = NULL;
$arguments689['dir'] = NULL;
$arguments689['id'] = NULL;
$arguments689['lang'] = NULL;
$arguments689['style'] = NULL;
$arguments689['title'] = NULL;
$arguments689['accesskey'] = NULL;
$arguments689['tabindex'] = NULL;
$arguments689['onclick'] = NULL;
$arguments689['required'] = false;
$arguments689['type'] = 'text';
$arguments689['id'] = 'shippingAddress-company';
$arguments689['class'] = 'form-control';
$arguments689['name'] = 'shippingAddress[company]';
$array691 = array (
);$arguments689['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.company', $array691);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments692 = array();
$arguments692['then'] = NULL;
$arguments692['else'] = NULL;
$arguments692['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array694 = array();
$array695 = array (
);$array694['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array695);

$expression696 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments692['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression696(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array694)
					),
					$renderingContext
				);
$arguments692['then'] = 'true';
$arguments689['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);
// Rendering Array
$array697 = array();
$array697['disable-shipping'] = 'true';
$arguments689['data'] = $array697;

$output686 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext);

$output686 .= '
                                </div>
                            ';
return $output686;
};

$output659 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$output659 .= '
                    </div>
                ';
return $output659;
};
$arguments652 = array();
$arguments652['then'] = NULL;
$arguments652['else'] = NULL;
$arguments652['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array654 = array();
// Rendering Array
$array655 = array();
$array656 = array (
);$array655['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.company.validator', $array656);
$array654['0'] = $array655;
$array654['1'] = ' != ';
// Rendering Array
$array657 = array();
$array657['0'] = 'Empty';
$array654['2'] = $array657;

$expression658 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments652['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression658(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array654)
					),
					$renderingContext
				);
$arguments652['__thenClosure'] = $renderChildrenClosure653;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext);

$output0 .= '

                <div class="field">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure745 = function() use ($renderingContext, $self) {
$output1021 = '';

$output1021 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1023 = function() use ($renderingContext, $self) {
$output1024 = '';

$output1024 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1026 = function() use ($renderingContext, $self) {
$output1032 = '';

$output1032 .= '
                                <div class="row">
                                    <div class="col-sm-8 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1034 = function() use ($renderingContext, $self) {
$output1076 = '';

$output1076 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1078 = function() use ($renderingContext, $self) {
$output1079 = '';

$output1079 .= '
                                                <label for="shippingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1081 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1080 = array();
$arguments1080['key'] = NULL;
$arguments1080['id'] = NULL;
$arguments1080['default'] = NULL;
$arguments1080['arguments'] = NULL;
$arguments1080['extensionName'] = NULL;
$arguments1080['languageKey'] = NULL;
$arguments1080['alternativeLanguageKeys'] = NULL;
$arguments1080['key'] = 'tx_cart_domain_model_order_address.street';

$output1079 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1080, $renderChildrenClosure1081, $renderingContext)]);

$output1079 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1083 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1082 = array();
$arguments1082['additionalAttributes'] = NULL;
$arguments1082['data'] = NULL;
$arguments1082['aria'] = NULL;
$arguments1082['name'] = NULL;
$arguments1082['value'] = NULL;
$arguments1082['property'] = NULL;
$arguments1082['autofocus'] = NULL;
$arguments1082['disabled'] = NULL;
$arguments1082['maxlength'] = NULL;
$arguments1082['readonly'] = NULL;
$arguments1082['size'] = NULL;
$arguments1082['placeholder'] = NULL;
$arguments1082['pattern'] = NULL;
$arguments1082['errorClass'] = 'f3-form-error';
$arguments1082['class'] = NULL;
$arguments1082['dir'] = NULL;
$arguments1082['id'] = NULL;
$arguments1082['lang'] = NULL;
$arguments1082['style'] = NULL;
$arguments1082['title'] = NULL;
$arguments1082['accesskey'] = NULL;
$arguments1082['tabindex'] = NULL;
$arguments1082['onclick'] = NULL;
$arguments1082['required'] = false;
$arguments1082['type'] = 'text';
$arguments1082['id'] = 'shippingAddress-street';
$arguments1082['class'] = 'form-control';
$arguments1082['name'] = 'shippingAddress[street]';
$array1084 = array (
);$arguments1082['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array1084);
// Rendering Boolean node
// Rendering Array
$array1085 = array();
$array1085['0'] = 'true';

$expression1086 = function($context) {return TRUE;};
$arguments1082['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1086(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1085)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1088 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1087 = array();
$arguments1087['then'] = NULL;
$arguments1087['else'] = NULL;
$arguments1087['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1089 = array();
$array1090 = array (
);$array1089['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1090);

$expression1091 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1087['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1091(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1089)
					),
					$renderingContext
				);
$arguments1087['then'] = 'true';
$arguments1082['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1087, $renderChildrenClosure1088, $renderingContext);
// Rendering Array
$array1092 = array();
$array1092['disable-shipping'] = 'true';
$arguments1082['data'] = $array1092;

$output1079 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1082, $renderChildrenClosure1083, $renderingContext);

$output1079 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1094 = function() use ($renderingContext, $self) {
$output1095 = '';

$output1095 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1097 = function() use ($renderingContext, $self) {
$output1101 = '';

$output1101 .= '
                                                            <div class="validation-error alert alert-danger">';
$array1102 = array (
);
$output1101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array1102)]);

$output1101 .= '</div>
                                                        ';
return $output1101;
};
$arguments1096 = array();
$arguments1096['then'] = NULL;
$arguments1096['else'] = NULL;
$arguments1096['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1098 = array();
$array1099 = array (
);$array1098['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array1099);

$expression1100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1096['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1098)
					),
					$renderingContext
				);
$arguments1096['__thenClosure'] = $renderChildrenClosure1097;

$output1095 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1096, $renderChildrenClosure1097, $renderingContext);

$output1095 .= '
                                                    ';
return $output1095;
};
$arguments1093 = array();
$arguments1093['for'] = '';
$arguments1093['as'] = 'validationResults';
$arguments1093['for'] = 'shippingAddress';

$output1079 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1093, $renderChildrenClosure1094, $renderingContext);

$output1079 .= '
                                                </div>
                                            ';
return $output1079;
};
$arguments1077 = array();

$output1076 .= '';

$output1076 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1104 = function() use ($renderingContext, $self) {
$output1105 = '';

$output1105 .= '
                                                <label for="shippingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1106 = array();
$arguments1106['key'] = NULL;
$arguments1106['id'] = NULL;
$arguments1106['default'] = NULL;
$arguments1106['arguments'] = NULL;
$arguments1106['extensionName'] = NULL;
$arguments1106['languageKey'] = NULL;
$arguments1106['alternativeLanguageKeys'] = NULL;
$arguments1106['key'] = 'tx_cart_domain_model_order_address.street';

$output1105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1106, $renderChildrenClosure1107, $renderingContext)]);

$output1105 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1108 = array();
$arguments1108['additionalAttributes'] = NULL;
$arguments1108['data'] = NULL;
$arguments1108['aria'] = NULL;
$arguments1108['name'] = NULL;
$arguments1108['value'] = NULL;
$arguments1108['property'] = NULL;
$arguments1108['autofocus'] = NULL;
$arguments1108['disabled'] = NULL;
$arguments1108['maxlength'] = NULL;
$arguments1108['readonly'] = NULL;
$arguments1108['size'] = NULL;
$arguments1108['placeholder'] = NULL;
$arguments1108['pattern'] = NULL;
$arguments1108['errorClass'] = 'f3-form-error';
$arguments1108['class'] = NULL;
$arguments1108['dir'] = NULL;
$arguments1108['id'] = NULL;
$arguments1108['lang'] = NULL;
$arguments1108['style'] = NULL;
$arguments1108['title'] = NULL;
$arguments1108['accesskey'] = NULL;
$arguments1108['tabindex'] = NULL;
$arguments1108['onclick'] = NULL;
$arguments1108['required'] = false;
$arguments1108['type'] = 'text';
$arguments1108['id'] = 'shippingAddress-street';
$arguments1108['class'] = 'form-control';
$arguments1108['name'] = 'shippingAddress[street]';
$array1110 = array (
);$arguments1108['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array1110);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1111 = array();
$arguments1111['then'] = NULL;
$arguments1111['else'] = NULL;
$arguments1111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1113 = array();
$array1114 = array (
);$array1113['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1114);

$expression1115 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1113)
					),
					$renderingContext
				);
$arguments1111['then'] = 'true';
$arguments1108['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1111, $renderChildrenClosure1112, $renderingContext);
// Rendering Array
$array1116 = array();
$array1116['disable-shipping'] = 'true';
$arguments1108['data'] = $array1116;

$output1105 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1108, $renderChildrenClosure1109, $renderingContext);

$output1105 .= '
                                                </div>
                                            ';
return $output1105;
};
$arguments1103 = array();
$arguments1103['if'] = NULL;

$output1076 .= '';

$output1076 .= '
                                        ';
return $output1076;
};
$arguments1033 = array();
$arguments1033['then'] = NULL;
$arguments1033['else'] = NULL;
$arguments1033['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1071 = array();
// Rendering Array
$array1072 = array();
$array1073 = array (
);$array1072['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.street.validator', $array1073);
$array1071['0'] = $array1072;
$array1071['1'] = ' == ';
// Rendering Array
$array1074 = array();
$array1074['0'] = 'NotEmpty';
$array1071['2'] = $array1074;

$expression1075 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1033['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1075(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1071)
					),
					$renderingContext
				);
$arguments1033['__thenClosure'] = function() use ($renderingContext, $self) {
$output1035 = '';

$output1035 .= '
                                                <label for="shippingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1036 = array();
$arguments1036['key'] = NULL;
$arguments1036['id'] = NULL;
$arguments1036['default'] = NULL;
$arguments1036['arguments'] = NULL;
$arguments1036['extensionName'] = NULL;
$arguments1036['languageKey'] = NULL;
$arguments1036['alternativeLanguageKeys'] = NULL;
$arguments1036['key'] = 'tx_cart_domain_model_order_address.street';

$output1035 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1036, $renderChildrenClosure1037, $renderingContext)]);

$output1035 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1039 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1038 = array();
$arguments1038['additionalAttributes'] = NULL;
$arguments1038['data'] = NULL;
$arguments1038['aria'] = NULL;
$arguments1038['name'] = NULL;
$arguments1038['value'] = NULL;
$arguments1038['property'] = NULL;
$arguments1038['autofocus'] = NULL;
$arguments1038['disabled'] = NULL;
$arguments1038['maxlength'] = NULL;
$arguments1038['readonly'] = NULL;
$arguments1038['size'] = NULL;
$arguments1038['placeholder'] = NULL;
$arguments1038['pattern'] = NULL;
$arguments1038['errorClass'] = 'f3-form-error';
$arguments1038['class'] = NULL;
$arguments1038['dir'] = NULL;
$arguments1038['id'] = NULL;
$arguments1038['lang'] = NULL;
$arguments1038['style'] = NULL;
$arguments1038['title'] = NULL;
$arguments1038['accesskey'] = NULL;
$arguments1038['tabindex'] = NULL;
$arguments1038['onclick'] = NULL;
$arguments1038['required'] = false;
$arguments1038['type'] = 'text';
$arguments1038['id'] = 'shippingAddress-street';
$arguments1038['class'] = 'form-control';
$arguments1038['name'] = 'shippingAddress[street]';
$array1040 = array (
);$arguments1038['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array1040);
// Rendering Boolean node
// Rendering Array
$array1041 = array();
$array1041['0'] = 'true';

$expression1042 = function($context) {return TRUE;};
$arguments1038['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1042(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1041)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1044 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1043 = array();
$arguments1043['then'] = NULL;
$arguments1043['else'] = NULL;
$arguments1043['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1045 = array();
$array1046 = array (
);$array1045['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1046);

$expression1047 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1043['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1047(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1045)
					),
					$renderingContext
				);
$arguments1043['then'] = 'true';
$arguments1038['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1043, $renderChildrenClosure1044, $renderingContext);
// Rendering Array
$array1048 = array();
$array1048['disable-shipping'] = 'true';
$arguments1038['data'] = $array1048;

$output1035 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1038, $renderChildrenClosure1039, $renderingContext);

$output1035 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1050 = function() use ($renderingContext, $self) {
$output1051 = '';

$output1051 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1053 = function() use ($renderingContext, $self) {
$output1057 = '';

$output1057 .= '
                                                            <div class="validation-error alert alert-danger">';
$array1058 = array (
);
$output1057 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array1058)]);

$output1057 .= '</div>
                                                        ';
return $output1057;
};
$arguments1052 = array();
$arguments1052['then'] = NULL;
$arguments1052['else'] = NULL;
$arguments1052['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1054 = array();
$array1055 = array (
);$array1054['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array1055);

$expression1056 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1052['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1056(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1054)
					),
					$renderingContext
				);
$arguments1052['__thenClosure'] = $renderChildrenClosure1053;

$output1051 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1052, $renderChildrenClosure1053, $renderingContext);

$output1051 .= '
                                                    ';
return $output1051;
};
$arguments1049 = array();
$arguments1049['for'] = '';
$arguments1049['as'] = 'validationResults';
$arguments1049['for'] = 'shippingAddress';

$output1035 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1049, $renderChildrenClosure1050, $renderingContext);

$output1035 .= '
                                                </div>
                                            ';
return $output1035;
};
$arguments1033['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1059 = '';

$output1059 .= '
                                                <label for="shippingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1061 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1060 = array();
$arguments1060['key'] = NULL;
$arguments1060['id'] = NULL;
$arguments1060['default'] = NULL;
$arguments1060['arguments'] = NULL;
$arguments1060['extensionName'] = NULL;
$arguments1060['languageKey'] = NULL;
$arguments1060['alternativeLanguageKeys'] = NULL;
$arguments1060['key'] = 'tx_cart_domain_model_order_address.street';

$output1059 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1060, $renderChildrenClosure1061, $renderingContext)]);

$output1059 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1063 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1062 = array();
$arguments1062['additionalAttributes'] = NULL;
$arguments1062['data'] = NULL;
$arguments1062['aria'] = NULL;
$arguments1062['name'] = NULL;
$arguments1062['value'] = NULL;
$arguments1062['property'] = NULL;
$arguments1062['autofocus'] = NULL;
$arguments1062['disabled'] = NULL;
$arguments1062['maxlength'] = NULL;
$arguments1062['readonly'] = NULL;
$arguments1062['size'] = NULL;
$arguments1062['placeholder'] = NULL;
$arguments1062['pattern'] = NULL;
$arguments1062['errorClass'] = 'f3-form-error';
$arguments1062['class'] = NULL;
$arguments1062['dir'] = NULL;
$arguments1062['id'] = NULL;
$arguments1062['lang'] = NULL;
$arguments1062['style'] = NULL;
$arguments1062['title'] = NULL;
$arguments1062['accesskey'] = NULL;
$arguments1062['tabindex'] = NULL;
$arguments1062['onclick'] = NULL;
$arguments1062['required'] = false;
$arguments1062['type'] = 'text';
$arguments1062['id'] = 'shippingAddress-street';
$arguments1062['class'] = 'form-control';
$arguments1062['name'] = 'shippingAddress[street]';
$array1064 = array (
);$arguments1062['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array1064);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1066 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1065 = array();
$arguments1065['then'] = NULL;
$arguments1065['else'] = NULL;
$arguments1065['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1067 = array();
$array1068 = array (
);$array1067['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1068);

$expression1069 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1065['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1069(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1067)
					),
					$renderingContext
				);
$arguments1065['then'] = 'true';
$arguments1062['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1065, $renderChildrenClosure1066, $renderingContext);
// Rendering Array
$array1070 = array();
$array1070['disable-shipping'] = 'true';
$arguments1062['data'] = $array1070;

$output1059 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1062, $renderChildrenClosure1063, $renderingContext);

$output1059 .= '
                                                </div>
                                            ';
return $output1059;
};

$output1032 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1033, $renderChildrenClosure1034, $renderingContext);

$output1032 .= '
                                    </div>
                                    <div class="col-sm-4 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1118 = function() use ($renderingContext, $self) {
$output1160 = '';

$output1160 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1162 = function() use ($renderingContext, $self) {
$output1163 = '';

$output1163 .= '
                                                <label for="shippingAddress-streetNumber" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1164 = array();
$arguments1164['key'] = NULL;
$arguments1164['id'] = NULL;
$arguments1164['default'] = NULL;
$arguments1164['arguments'] = NULL;
$arguments1164['extensionName'] = NULL;
$arguments1164['languageKey'] = NULL;
$arguments1164['alternativeLanguageKeys'] = NULL;
$arguments1164['key'] = 'tx_cart_domain_model_order_address.street_number';

$output1163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1164, $renderChildrenClosure1165, $renderingContext)]);

$output1163 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1166 = array();
$arguments1166['additionalAttributes'] = NULL;
$arguments1166['data'] = NULL;
$arguments1166['aria'] = NULL;
$arguments1166['name'] = NULL;
$arguments1166['value'] = NULL;
$arguments1166['property'] = NULL;
$arguments1166['autofocus'] = NULL;
$arguments1166['disabled'] = NULL;
$arguments1166['maxlength'] = NULL;
$arguments1166['readonly'] = NULL;
$arguments1166['size'] = NULL;
$arguments1166['placeholder'] = NULL;
$arguments1166['pattern'] = NULL;
$arguments1166['errorClass'] = 'f3-form-error';
$arguments1166['class'] = NULL;
$arguments1166['dir'] = NULL;
$arguments1166['id'] = NULL;
$arguments1166['lang'] = NULL;
$arguments1166['style'] = NULL;
$arguments1166['title'] = NULL;
$arguments1166['accesskey'] = NULL;
$arguments1166['tabindex'] = NULL;
$arguments1166['onclick'] = NULL;
$arguments1166['required'] = false;
$arguments1166['type'] = 'text';
$arguments1166['id'] = 'shippingAddress-streetNumber';
$arguments1166['class'] = 'form-control';
$arguments1166['name'] = 'shippingAddress[streetNumber]';
$array1168 = array (
);$arguments1166['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.streetNumber', $array1168);
// Rendering Boolean node
// Rendering Array
$array1169 = array();
$array1169['0'] = 'true';

$expression1170 = function($context) {return TRUE;};
$arguments1166['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1169)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1171 = array();
$arguments1171['then'] = NULL;
$arguments1171['else'] = NULL;
$arguments1171['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1173 = array();
$array1174 = array (
);$array1173['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1174);

$expression1175 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1171['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1173)
					),
					$renderingContext
				);
$arguments1171['then'] = 'true';
$arguments1166['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1171, $renderChildrenClosure1172, $renderingContext);
// Rendering Array
$array1176 = array();
$array1176['disable-shipping'] = 'true';
$arguments1166['data'] = $array1176;

$output1163 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1166, $renderChildrenClosure1167, $renderingContext);

$output1163 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1178 = function() use ($renderingContext, $self) {
$output1179 = '';

$output1179 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1181 = function() use ($renderingContext, $self) {
$output1185 = '';

$output1185 .= '
                                                            <div class="validation-error alert alert-danger">';
$array1186 = array (
);
$output1185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber.0.message', $array1186)]);

$output1185 .= '</div>
                                                        ';
return $output1185;
};
$arguments1180 = array();
$arguments1180['then'] = NULL;
$arguments1180['else'] = NULL;
$arguments1180['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1182 = array();
$array1183 = array (
);$array1182['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber', $array1183);

$expression1184 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1180['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1182)
					),
					$renderingContext
				);
$arguments1180['__thenClosure'] = $renderChildrenClosure1181;

$output1179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1180, $renderChildrenClosure1181, $renderingContext);

$output1179 .= '
                                                    ';
return $output1179;
};
$arguments1177 = array();
$arguments1177['for'] = '';
$arguments1177['as'] = 'validationResults';
$arguments1177['for'] = 'shippingAddress';

$output1163 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1177, $renderChildrenClosure1178, $renderingContext);

$output1163 .= '
                                                </div>
                                            ';
return $output1163;
};
$arguments1161 = array();

$output1160 .= '';

$output1160 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1188 = function() use ($renderingContext, $self) {
$output1189 = '';

$output1189 .= '
                                                <label for="shippingAddress-streetNumber">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1190 = array();
$arguments1190['key'] = NULL;
$arguments1190['id'] = NULL;
$arguments1190['default'] = NULL;
$arguments1190['arguments'] = NULL;
$arguments1190['extensionName'] = NULL;
$arguments1190['languageKey'] = NULL;
$arguments1190['alternativeLanguageKeys'] = NULL;
$arguments1190['key'] = 'tx_cart_domain_model_order_address.street_number';

$output1189 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1190, $renderChildrenClosure1191, $renderingContext)]);

$output1189 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1192 = array();
$arguments1192['additionalAttributes'] = NULL;
$arguments1192['data'] = NULL;
$arguments1192['aria'] = NULL;
$arguments1192['name'] = NULL;
$arguments1192['value'] = NULL;
$arguments1192['property'] = NULL;
$arguments1192['autofocus'] = NULL;
$arguments1192['disabled'] = NULL;
$arguments1192['maxlength'] = NULL;
$arguments1192['readonly'] = NULL;
$arguments1192['size'] = NULL;
$arguments1192['placeholder'] = NULL;
$arguments1192['pattern'] = NULL;
$arguments1192['errorClass'] = 'f3-form-error';
$arguments1192['class'] = NULL;
$arguments1192['dir'] = NULL;
$arguments1192['id'] = NULL;
$arguments1192['lang'] = NULL;
$arguments1192['style'] = NULL;
$arguments1192['title'] = NULL;
$arguments1192['accesskey'] = NULL;
$arguments1192['tabindex'] = NULL;
$arguments1192['onclick'] = NULL;
$arguments1192['required'] = false;
$arguments1192['type'] = 'text';
$arguments1192['id'] = 'shippingAddress-streetNumber';
$arguments1192['class'] = 'form-control';
$arguments1192['name'] = 'shippingAddress[streetNumber]';
$array1194 = array (
);$arguments1192['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.streetNumber', $array1194);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1195 = array();
$arguments1195['then'] = NULL;
$arguments1195['else'] = NULL;
$arguments1195['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1197 = array();
$array1198 = array (
);$array1197['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1198);

$expression1199 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1195['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1197)
					),
					$renderingContext
				);
$arguments1195['then'] = 'true';
$arguments1192['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1195, $renderChildrenClosure1196, $renderingContext);
// Rendering Array
$array1200 = array();
$array1200['disable-shipping'] = 'true';
$arguments1192['data'] = $array1200;

$output1189 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1192, $renderChildrenClosure1193, $renderingContext);

$output1189 .= '
                                                </div>
                                            ';
return $output1189;
};
$arguments1187 = array();
$arguments1187['if'] = NULL;

$output1160 .= '';

$output1160 .= '
                                        ';
return $output1160;
};
$arguments1117 = array();
$arguments1117['then'] = NULL;
$arguments1117['else'] = NULL;
$arguments1117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1155 = array();
// Rendering Array
$array1156 = array();
$array1157 = array (
);$array1156['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.streetNumber.validator', $array1157);
$array1155['0'] = $array1156;
$array1155['1'] = ' == ';
// Rendering Array
$array1158 = array();
$array1158['0'] = 'NotEmpty';
$array1155['2'] = $array1158;

$expression1159 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1155)
					),
					$renderingContext
				);
$arguments1117['__thenClosure'] = function() use ($renderingContext, $self) {
$output1119 = '';

$output1119 .= '
                                                <label for="shippingAddress-streetNumber" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1120 = array();
$arguments1120['key'] = NULL;
$arguments1120['id'] = NULL;
$arguments1120['default'] = NULL;
$arguments1120['arguments'] = NULL;
$arguments1120['extensionName'] = NULL;
$arguments1120['languageKey'] = NULL;
$arguments1120['alternativeLanguageKeys'] = NULL;
$arguments1120['key'] = 'tx_cart_domain_model_order_address.street_number';

$output1119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1120, $renderChildrenClosure1121, $renderingContext)]);

$output1119 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1122 = array();
$arguments1122['additionalAttributes'] = NULL;
$arguments1122['data'] = NULL;
$arguments1122['aria'] = NULL;
$arguments1122['name'] = NULL;
$arguments1122['value'] = NULL;
$arguments1122['property'] = NULL;
$arguments1122['autofocus'] = NULL;
$arguments1122['disabled'] = NULL;
$arguments1122['maxlength'] = NULL;
$arguments1122['readonly'] = NULL;
$arguments1122['size'] = NULL;
$arguments1122['placeholder'] = NULL;
$arguments1122['pattern'] = NULL;
$arguments1122['errorClass'] = 'f3-form-error';
$arguments1122['class'] = NULL;
$arguments1122['dir'] = NULL;
$arguments1122['id'] = NULL;
$arguments1122['lang'] = NULL;
$arguments1122['style'] = NULL;
$arguments1122['title'] = NULL;
$arguments1122['accesskey'] = NULL;
$arguments1122['tabindex'] = NULL;
$arguments1122['onclick'] = NULL;
$arguments1122['required'] = false;
$arguments1122['type'] = 'text';
$arguments1122['id'] = 'shippingAddress-streetNumber';
$arguments1122['class'] = 'form-control';
$arguments1122['name'] = 'shippingAddress[streetNumber]';
$array1124 = array (
);$arguments1122['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.streetNumber', $array1124);
// Rendering Boolean node
// Rendering Array
$array1125 = array();
$array1125['0'] = 'true';

$expression1126 = function($context) {return TRUE;};
$arguments1122['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1125)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1127 = array();
$arguments1127['then'] = NULL;
$arguments1127['else'] = NULL;
$arguments1127['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1129 = array();
$array1130 = array (
);$array1129['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1130);

$expression1131 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1131(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1129)
					),
					$renderingContext
				);
$arguments1127['then'] = 'true';
$arguments1122['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1127, $renderChildrenClosure1128, $renderingContext);
// Rendering Array
$array1132 = array();
$array1132['disable-shipping'] = 'true';
$arguments1122['data'] = $array1132;

$output1119 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1122, $renderChildrenClosure1123, $renderingContext);

$output1119 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1134 = function() use ($renderingContext, $self) {
$output1135 = '';

$output1135 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1137 = function() use ($renderingContext, $self) {
$output1141 = '';

$output1141 .= '
                                                            <div class="validation-error alert alert-danger">';
$array1142 = array (
);
$output1141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber.0.message', $array1142)]);

$output1141 .= '</div>
                                                        ';
return $output1141;
};
$arguments1136 = array();
$arguments1136['then'] = NULL;
$arguments1136['else'] = NULL;
$arguments1136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1138 = array();
$array1139 = array (
);$array1138['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber', $array1139);

$expression1140 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1138)
					),
					$renderingContext
				);
$arguments1136['__thenClosure'] = $renderChildrenClosure1137;

$output1135 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1136, $renderChildrenClosure1137, $renderingContext);

$output1135 .= '
                                                    ';
return $output1135;
};
$arguments1133 = array();
$arguments1133['for'] = '';
$arguments1133['as'] = 'validationResults';
$arguments1133['for'] = 'shippingAddress';

$output1119 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1133, $renderChildrenClosure1134, $renderingContext);

$output1119 .= '
                                                </div>
                                            ';
return $output1119;
};
$arguments1117['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1143 = '';

$output1143 .= '
                                                <label for="shippingAddress-streetNumber">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1144 = array();
$arguments1144['key'] = NULL;
$arguments1144['id'] = NULL;
$arguments1144['default'] = NULL;
$arguments1144['arguments'] = NULL;
$arguments1144['extensionName'] = NULL;
$arguments1144['languageKey'] = NULL;
$arguments1144['alternativeLanguageKeys'] = NULL;
$arguments1144['key'] = 'tx_cart_domain_model_order_address.street_number';

$output1143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1144, $renderChildrenClosure1145, $renderingContext)]);

$output1143 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1146 = array();
$arguments1146['additionalAttributes'] = NULL;
$arguments1146['data'] = NULL;
$arguments1146['aria'] = NULL;
$arguments1146['name'] = NULL;
$arguments1146['value'] = NULL;
$arguments1146['property'] = NULL;
$arguments1146['autofocus'] = NULL;
$arguments1146['disabled'] = NULL;
$arguments1146['maxlength'] = NULL;
$arguments1146['readonly'] = NULL;
$arguments1146['size'] = NULL;
$arguments1146['placeholder'] = NULL;
$arguments1146['pattern'] = NULL;
$arguments1146['errorClass'] = 'f3-form-error';
$arguments1146['class'] = NULL;
$arguments1146['dir'] = NULL;
$arguments1146['id'] = NULL;
$arguments1146['lang'] = NULL;
$arguments1146['style'] = NULL;
$arguments1146['title'] = NULL;
$arguments1146['accesskey'] = NULL;
$arguments1146['tabindex'] = NULL;
$arguments1146['onclick'] = NULL;
$arguments1146['required'] = false;
$arguments1146['type'] = 'text';
$arguments1146['id'] = 'shippingAddress-streetNumber';
$arguments1146['class'] = 'form-control';
$arguments1146['name'] = 'shippingAddress[streetNumber]';
$array1148 = array (
);$arguments1146['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.streetNumber', $array1148);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1149 = array();
$arguments1149['then'] = NULL;
$arguments1149['else'] = NULL;
$arguments1149['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1151 = array();
$array1152 = array (
);$array1151['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1152);

$expression1153 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1149['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1153(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1151)
					),
					$renderingContext
				);
$arguments1149['then'] = 'true';
$arguments1146['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1149, $renderChildrenClosure1150, $renderingContext);
// Rendering Array
$array1154 = array();
$array1154['disable-shipping'] = 'true';
$arguments1146['data'] = $array1154;

$output1143 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1146, $renderChildrenClosure1147, $renderingContext);

$output1143 .= '
                                                </div>
                                            ';
return $output1143;
};

$output1032 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1117, $renderChildrenClosure1118, $renderingContext);

$output1032 .= '
                                    </div>
                                </div>
                            ';
return $output1032;
};
$arguments1025 = array();
$arguments1025['then'] = NULL;
$arguments1025['else'] = NULL;
$arguments1025['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1027 = array();
// Rendering Array
$array1028 = array();
$array1029 = array (
);$array1028['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.street.validator', $array1029);
$array1027['0'] = $array1028;
$array1027['1'] = ' != ';
// Rendering Array
$array1030 = array();
$array1030['0'] = 'Empty';
$array1027['2'] = $array1030;

$expression1031 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1025['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1031(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1027)
					),
					$renderingContext
				);
$arguments1025['__thenClosure'] = $renderChildrenClosure1026;

$output1024 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1025, $renderChildrenClosure1026, $renderingContext);

$output1024 .= '
                        ';
return $output1024;
};
$arguments1022 = array();

$output1021 .= '';

$output1021 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1202 = function() use ($renderingContext, $self) {
$output1203 = '';

$output1203 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1205 = function() use ($renderingContext, $self) {
$output1211 = '';

$output1211 .= '
                                <div class="row">
                                    <div class="col-sm-12 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1213 = function() use ($renderingContext, $self) {
$output1255 = '';

$output1255 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1257 = function() use ($renderingContext, $self) {
$output1258 = '';

$output1258 .= '
                                                <label for="shippingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1259 = array();
$arguments1259['key'] = NULL;
$arguments1259['id'] = NULL;
$arguments1259['default'] = NULL;
$arguments1259['arguments'] = NULL;
$arguments1259['extensionName'] = NULL;
$arguments1259['languageKey'] = NULL;
$arguments1259['alternativeLanguageKeys'] = NULL;
$arguments1259['key'] = 'tx_cart_domain_model_order_address.street';

$output1258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1259, $renderChildrenClosure1260, $renderingContext)]);

$output1258 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1261 = array();
$arguments1261['additionalAttributes'] = NULL;
$arguments1261['data'] = NULL;
$arguments1261['aria'] = NULL;
$arguments1261['name'] = NULL;
$arguments1261['value'] = NULL;
$arguments1261['property'] = NULL;
$arguments1261['autofocus'] = NULL;
$arguments1261['disabled'] = NULL;
$arguments1261['maxlength'] = NULL;
$arguments1261['readonly'] = NULL;
$arguments1261['size'] = NULL;
$arguments1261['placeholder'] = NULL;
$arguments1261['pattern'] = NULL;
$arguments1261['errorClass'] = 'f3-form-error';
$arguments1261['class'] = NULL;
$arguments1261['dir'] = NULL;
$arguments1261['id'] = NULL;
$arguments1261['lang'] = NULL;
$arguments1261['style'] = NULL;
$arguments1261['title'] = NULL;
$arguments1261['accesskey'] = NULL;
$arguments1261['tabindex'] = NULL;
$arguments1261['onclick'] = NULL;
$arguments1261['required'] = false;
$arguments1261['type'] = 'text';
$arguments1261['id'] = 'shippingAddress-street';
$arguments1261['class'] = 'form-control';
$arguments1261['name'] = 'shippingAddress[street]';
$array1263 = array (
);$arguments1261['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array1263);
// Rendering Boolean node
// Rendering Array
$array1264 = array();
$array1264['0'] = 'true';

$expression1265 = function($context) {return TRUE;};
$arguments1261['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1265(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1264)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1266 = array();
$arguments1266['then'] = NULL;
$arguments1266['else'] = NULL;
$arguments1266['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1268 = array();
$array1269 = array (
);$array1268['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1269);

$expression1270 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1266['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1270(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1268)
					),
					$renderingContext
				);
$arguments1266['then'] = 'true';
$arguments1261['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1266, $renderChildrenClosure1267, $renderingContext);
// Rendering Array
$array1271 = array();
$array1271['disable-shipping'] = 'true';
$arguments1261['data'] = $array1271;

$output1258 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1261, $renderChildrenClosure1262, $renderingContext);

$output1258 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1273 = function() use ($renderingContext, $self) {
$output1274 = '';

$output1274 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1276 = function() use ($renderingContext, $self) {
$output1280 = '';

$output1280 .= '
                                                            <div class="validation-error alert alert-danger">';
$array1281 = array (
);
$output1280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array1281)]);

$output1280 .= '</div>
                                                        ';
return $output1280;
};
$arguments1275 = array();
$arguments1275['then'] = NULL;
$arguments1275['else'] = NULL;
$arguments1275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1277 = array();
$array1278 = array (
);$array1277['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array1278);

$expression1279 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1277)
					),
					$renderingContext
				);
$arguments1275['__thenClosure'] = $renderChildrenClosure1276;

$output1274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1275, $renderChildrenClosure1276, $renderingContext);

$output1274 .= '
                                                    ';
return $output1274;
};
$arguments1272 = array();
$arguments1272['for'] = '';
$arguments1272['as'] = 'validationResults';
$arguments1272['for'] = 'shippingAddress';

$output1258 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1272, $renderChildrenClosure1273, $renderingContext);

$output1258 .= '
                                                </div>
                                            ';
return $output1258;
};
$arguments1256 = array();

$output1255 .= '';

$output1255 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1283 = function() use ($renderingContext, $self) {
$output1284 = '';

$output1284 .= '
                                                <label for="shippingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1285 = array();
$arguments1285['key'] = NULL;
$arguments1285['id'] = NULL;
$arguments1285['default'] = NULL;
$arguments1285['arguments'] = NULL;
$arguments1285['extensionName'] = NULL;
$arguments1285['languageKey'] = NULL;
$arguments1285['alternativeLanguageKeys'] = NULL;
$arguments1285['key'] = 'tx_cart_domain_model_order_address.street';

$output1284 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1285, $renderChildrenClosure1286, $renderingContext)]);

$output1284 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1287 = array();
$arguments1287['additionalAttributes'] = NULL;
$arguments1287['data'] = NULL;
$arguments1287['aria'] = NULL;
$arguments1287['name'] = NULL;
$arguments1287['value'] = NULL;
$arguments1287['property'] = NULL;
$arguments1287['autofocus'] = NULL;
$arguments1287['disabled'] = NULL;
$arguments1287['maxlength'] = NULL;
$arguments1287['readonly'] = NULL;
$arguments1287['size'] = NULL;
$arguments1287['placeholder'] = NULL;
$arguments1287['pattern'] = NULL;
$arguments1287['errorClass'] = 'f3-form-error';
$arguments1287['class'] = NULL;
$arguments1287['dir'] = NULL;
$arguments1287['id'] = NULL;
$arguments1287['lang'] = NULL;
$arguments1287['style'] = NULL;
$arguments1287['title'] = NULL;
$arguments1287['accesskey'] = NULL;
$arguments1287['tabindex'] = NULL;
$arguments1287['onclick'] = NULL;
$arguments1287['required'] = false;
$arguments1287['type'] = 'text';
$arguments1287['id'] = 'shippingAddress-street';
$arguments1287['class'] = 'form-control';
$arguments1287['name'] = 'shippingAddress[street]';
$array1289 = array (
);$arguments1287['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array1289);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1290 = array();
$arguments1290['then'] = NULL;
$arguments1290['else'] = NULL;
$arguments1290['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1292 = array();
$array1293 = array (
);$array1292['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1293);

$expression1294 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1290['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1294(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1292)
					),
					$renderingContext
				);
$arguments1290['then'] = 'true';
$arguments1287['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1290, $renderChildrenClosure1291, $renderingContext);
// Rendering Array
$array1295 = array();
$array1295['disable-shipping'] = 'true';
$arguments1287['data'] = $array1295;

$output1284 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1287, $renderChildrenClosure1288, $renderingContext);

$output1284 .= '
                                                </div>
                                            ';
return $output1284;
};
$arguments1282 = array();
$arguments1282['if'] = NULL;

$output1255 .= '';

$output1255 .= '
                                        ';
return $output1255;
};
$arguments1212 = array();
$arguments1212['then'] = NULL;
$arguments1212['else'] = NULL;
$arguments1212['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1250 = array();
// Rendering Array
$array1251 = array();
$array1252 = array (
);$array1251['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.street.validator', $array1252);
$array1250['0'] = $array1251;
$array1250['1'] = ' == ';
// Rendering Array
$array1253 = array();
$array1253['0'] = 'NotEmpty';
$array1250['2'] = $array1253;

$expression1254 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1212['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1250)
					),
					$renderingContext
				);
$arguments1212['__thenClosure'] = function() use ($renderingContext, $self) {
$output1214 = '';

$output1214 .= '
                                                <label for="shippingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1215 = array();
$arguments1215['key'] = NULL;
$arguments1215['id'] = NULL;
$arguments1215['default'] = NULL;
$arguments1215['arguments'] = NULL;
$arguments1215['extensionName'] = NULL;
$arguments1215['languageKey'] = NULL;
$arguments1215['alternativeLanguageKeys'] = NULL;
$arguments1215['key'] = 'tx_cart_domain_model_order_address.street';

$output1214 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1215, $renderChildrenClosure1216, $renderingContext)]);

$output1214 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1217 = array();
$arguments1217['additionalAttributes'] = NULL;
$arguments1217['data'] = NULL;
$arguments1217['aria'] = NULL;
$arguments1217['name'] = NULL;
$arguments1217['value'] = NULL;
$arguments1217['property'] = NULL;
$arguments1217['autofocus'] = NULL;
$arguments1217['disabled'] = NULL;
$arguments1217['maxlength'] = NULL;
$arguments1217['readonly'] = NULL;
$arguments1217['size'] = NULL;
$arguments1217['placeholder'] = NULL;
$arguments1217['pattern'] = NULL;
$arguments1217['errorClass'] = 'f3-form-error';
$arguments1217['class'] = NULL;
$arguments1217['dir'] = NULL;
$arguments1217['id'] = NULL;
$arguments1217['lang'] = NULL;
$arguments1217['style'] = NULL;
$arguments1217['title'] = NULL;
$arguments1217['accesskey'] = NULL;
$arguments1217['tabindex'] = NULL;
$arguments1217['onclick'] = NULL;
$arguments1217['required'] = false;
$arguments1217['type'] = 'text';
$arguments1217['id'] = 'shippingAddress-street';
$arguments1217['class'] = 'form-control';
$arguments1217['name'] = 'shippingAddress[street]';
$array1219 = array (
);$arguments1217['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array1219);
// Rendering Boolean node
// Rendering Array
$array1220 = array();
$array1220['0'] = 'true';

$expression1221 = function($context) {return TRUE;};
$arguments1217['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1221(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1220)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1222 = array();
$arguments1222['then'] = NULL;
$arguments1222['else'] = NULL;
$arguments1222['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1224 = array();
$array1225 = array (
);$array1224['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1225);

$expression1226 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1222['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1226(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1224)
					),
					$renderingContext
				);
$arguments1222['then'] = 'true';
$arguments1217['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1222, $renderChildrenClosure1223, $renderingContext);
// Rendering Array
$array1227 = array();
$array1227['disable-shipping'] = 'true';
$arguments1217['data'] = $array1227;

$output1214 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1217, $renderChildrenClosure1218, $renderingContext);

$output1214 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1229 = function() use ($renderingContext, $self) {
$output1230 = '';

$output1230 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1232 = function() use ($renderingContext, $self) {
$output1236 = '';

$output1236 .= '
                                                            <div class="validation-error alert alert-danger">';
$array1237 = array (
);
$output1236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array1237)]);

$output1236 .= '</div>
                                                        ';
return $output1236;
};
$arguments1231 = array();
$arguments1231['then'] = NULL;
$arguments1231['else'] = NULL;
$arguments1231['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1233 = array();
$array1234 = array (
);$array1233['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array1234);

$expression1235 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1233)
					),
					$renderingContext
				);
$arguments1231['__thenClosure'] = $renderChildrenClosure1232;

$output1230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1231, $renderChildrenClosure1232, $renderingContext);

$output1230 .= '
                                                    ';
return $output1230;
};
$arguments1228 = array();
$arguments1228['for'] = '';
$arguments1228['as'] = 'validationResults';
$arguments1228['for'] = 'shippingAddress';

$output1214 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1228, $renderChildrenClosure1229, $renderingContext);

$output1214 .= '
                                                </div>
                                            ';
return $output1214;
};
$arguments1212['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1238 = '';

$output1238 .= '
                                                <label for="shippingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1239 = array();
$arguments1239['key'] = NULL;
$arguments1239['id'] = NULL;
$arguments1239['default'] = NULL;
$arguments1239['arguments'] = NULL;
$arguments1239['extensionName'] = NULL;
$arguments1239['languageKey'] = NULL;
$arguments1239['alternativeLanguageKeys'] = NULL;
$arguments1239['key'] = 'tx_cart_domain_model_order_address.street';

$output1238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1239, $renderChildrenClosure1240, $renderingContext)]);

$output1238 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1241 = array();
$arguments1241['additionalAttributes'] = NULL;
$arguments1241['data'] = NULL;
$arguments1241['aria'] = NULL;
$arguments1241['name'] = NULL;
$arguments1241['value'] = NULL;
$arguments1241['property'] = NULL;
$arguments1241['autofocus'] = NULL;
$arguments1241['disabled'] = NULL;
$arguments1241['maxlength'] = NULL;
$arguments1241['readonly'] = NULL;
$arguments1241['size'] = NULL;
$arguments1241['placeholder'] = NULL;
$arguments1241['pattern'] = NULL;
$arguments1241['errorClass'] = 'f3-form-error';
$arguments1241['class'] = NULL;
$arguments1241['dir'] = NULL;
$arguments1241['id'] = NULL;
$arguments1241['lang'] = NULL;
$arguments1241['style'] = NULL;
$arguments1241['title'] = NULL;
$arguments1241['accesskey'] = NULL;
$arguments1241['tabindex'] = NULL;
$arguments1241['onclick'] = NULL;
$arguments1241['required'] = false;
$arguments1241['type'] = 'text';
$arguments1241['id'] = 'shippingAddress-street';
$arguments1241['class'] = 'form-control';
$arguments1241['name'] = 'shippingAddress[street]';
$array1243 = array (
);$arguments1241['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array1243);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1244 = array();
$arguments1244['then'] = NULL;
$arguments1244['else'] = NULL;
$arguments1244['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1246 = array();
$array1247 = array (
);$array1246['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1247);

$expression1248 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1244['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1248(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1246)
					),
					$renderingContext
				);
$arguments1244['then'] = 'true';
$arguments1241['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1244, $renderChildrenClosure1245, $renderingContext);
// Rendering Array
$array1249 = array();
$array1249['disable-shipping'] = 'true';
$arguments1241['data'] = $array1249;

$output1238 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1241, $renderChildrenClosure1242, $renderingContext);

$output1238 .= '
                                                </div>
                                            ';
return $output1238;
};

$output1211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1212, $renderChildrenClosure1213, $renderingContext);

$output1211 .= '
                                    </div>
                                </div>
                            ';
return $output1211;
};
$arguments1204 = array();
$arguments1204['then'] = NULL;
$arguments1204['else'] = NULL;
$arguments1204['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1206 = array();
// Rendering Array
$array1207 = array();
$array1208 = array (
);$array1207['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.street.validator', $array1208);
$array1206['0'] = $array1207;
$array1206['1'] = ' != ';
// Rendering Array
$array1209 = array();
$array1209['0'] = 'Empty';
$array1206['2'] = $array1209;

$expression1210 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1204['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1210(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1206)
					),
					$renderingContext
				);
$arguments1204['__thenClosure'] = $renderChildrenClosure1205;

$output1203 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1204, $renderChildrenClosure1205, $renderingContext);

$output1203 .= '
                        ';
return $output1203;
};
$arguments1201 = array();
$arguments1201['if'] = NULL;

$output1021 .= '';

$output1021 .= '
                    ';
return $output1021;
};
$arguments744 = array();
$arguments744['then'] = NULL;
$arguments744['else'] = NULL;
$arguments744['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1016 = array();
// Rendering Array
$array1017 = array();
$array1018 = array (
);$array1017['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.streetNumber.validator', $array1018);
$array1016['0'] = $array1017;
$array1016['1'] = ' != ';
// Rendering Array
$array1019 = array();
$array1019['0'] = 'Empty';
$array1016['2'] = $array1019;

$expression1020 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments744['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1020(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1016)
					),
					$renderingContext
				);
$arguments744['__thenClosure'] = function() use ($renderingContext, $self) {
$output746 = '';

$output746 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure748 = function() use ($renderingContext, $self) {
$output754 = '';

$output754 .= '
                                <div class="row">
                                    <div class="col-sm-8 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure756 = function() use ($renderingContext, $self) {
$output798 = '';

$output798 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure800 = function() use ($renderingContext, $self) {
$output801 = '';

$output801 .= '
                                                <label for="shippingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure803 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments802 = array();
$arguments802['key'] = NULL;
$arguments802['id'] = NULL;
$arguments802['default'] = NULL;
$arguments802['arguments'] = NULL;
$arguments802['extensionName'] = NULL;
$arguments802['languageKey'] = NULL;
$arguments802['alternativeLanguageKeys'] = NULL;
$arguments802['key'] = 'tx_cart_domain_model_order_address.street';

$output801 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments802, $renderChildrenClosure803, $renderingContext)]);

$output801 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure805 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments804 = array();
$arguments804['additionalAttributes'] = NULL;
$arguments804['data'] = NULL;
$arguments804['aria'] = NULL;
$arguments804['name'] = NULL;
$arguments804['value'] = NULL;
$arguments804['property'] = NULL;
$arguments804['autofocus'] = NULL;
$arguments804['disabled'] = NULL;
$arguments804['maxlength'] = NULL;
$arguments804['readonly'] = NULL;
$arguments804['size'] = NULL;
$arguments804['placeholder'] = NULL;
$arguments804['pattern'] = NULL;
$arguments804['errorClass'] = 'f3-form-error';
$arguments804['class'] = NULL;
$arguments804['dir'] = NULL;
$arguments804['id'] = NULL;
$arguments804['lang'] = NULL;
$arguments804['style'] = NULL;
$arguments804['title'] = NULL;
$arguments804['accesskey'] = NULL;
$arguments804['tabindex'] = NULL;
$arguments804['onclick'] = NULL;
$arguments804['required'] = false;
$arguments804['type'] = 'text';
$arguments804['id'] = 'shippingAddress-street';
$arguments804['class'] = 'form-control';
$arguments804['name'] = 'shippingAddress[street]';
$array806 = array (
);$arguments804['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array806);
// Rendering Boolean node
// Rendering Array
$array807 = array();
$array807['0'] = 'true';

$expression808 = function($context) {return TRUE;};
$arguments804['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression808(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array807)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure810 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments809 = array();
$arguments809['then'] = NULL;
$arguments809['else'] = NULL;
$arguments809['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array811 = array();
$array812 = array (
);$array811['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array812);

$expression813 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments809['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression813(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array811)
					),
					$renderingContext
				);
$arguments809['then'] = 'true';
$arguments804['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments809, $renderChildrenClosure810, $renderingContext);
// Rendering Array
$array814 = array();
$array814['disable-shipping'] = 'true';
$arguments804['data'] = $array814;

$output801 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments804, $renderChildrenClosure805, $renderingContext);

$output801 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure816 = function() use ($renderingContext, $self) {
$output817 = '';

$output817 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure819 = function() use ($renderingContext, $self) {
$output823 = '';

$output823 .= '
                                                            <div class="validation-error alert alert-danger">';
$array824 = array (
);
$output823 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array824)]);

$output823 .= '</div>
                                                        ';
return $output823;
};
$arguments818 = array();
$arguments818['then'] = NULL;
$arguments818['else'] = NULL;
$arguments818['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array820 = array();
$array821 = array (
);$array820['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array821);

$expression822 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments818['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression822(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array820)
					),
					$renderingContext
				);
$arguments818['__thenClosure'] = $renderChildrenClosure819;

$output817 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments818, $renderChildrenClosure819, $renderingContext);

$output817 .= '
                                                    ';
return $output817;
};
$arguments815 = array();
$arguments815['for'] = '';
$arguments815['as'] = 'validationResults';
$arguments815['for'] = 'shippingAddress';

$output801 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments815, $renderChildrenClosure816, $renderingContext);

$output801 .= '
                                                </div>
                                            ';
return $output801;
};
$arguments799 = array();

$output798 .= '';

$output798 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure826 = function() use ($renderingContext, $self) {
$output827 = '';

$output827 .= '
                                                <label for="shippingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure829 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments828 = array();
$arguments828['key'] = NULL;
$arguments828['id'] = NULL;
$arguments828['default'] = NULL;
$arguments828['arguments'] = NULL;
$arguments828['extensionName'] = NULL;
$arguments828['languageKey'] = NULL;
$arguments828['alternativeLanguageKeys'] = NULL;
$arguments828['key'] = 'tx_cart_domain_model_order_address.street';

$output827 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments828, $renderChildrenClosure829, $renderingContext)]);

$output827 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure831 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments830 = array();
$arguments830['additionalAttributes'] = NULL;
$arguments830['data'] = NULL;
$arguments830['aria'] = NULL;
$arguments830['name'] = NULL;
$arguments830['value'] = NULL;
$arguments830['property'] = NULL;
$arguments830['autofocus'] = NULL;
$arguments830['disabled'] = NULL;
$arguments830['maxlength'] = NULL;
$arguments830['readonly'] = NULL;
$arguments830['size'] = NULL;
$arguments830['placeholder'] = NULL;
$arguments830['pattern'] = NULL;
$arguments830['errorClass'] = 'f3-form-error';
$arguments830['class'] = NULL;
$arguments830['dir'] = NULL;
$arguments830['id'] = NULL;
$arguments830['lang'] = NULL;
$arguments830['style'] = NULL;
$arguments830['title'] = NULL;
$arguments830['accesskey'] = NULL;
$arguments830['tabindex'] = NULL;
$arguments830['onclick'] = NULL;
$arguments830['required'] = false;
$arguments830['type'] = 'text';
$arguments830['id'] = 'shippingAddress-street';
$arguments830['class'] = 'form-control';
$arguments830['name'] = 'shippingAddress[street]';
$array832 = array (
);$arguments830['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array832);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure834 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments833 = array();
$arguments833['then'] = NULL;
$arguments833['else'] = NULL;
$arguments833['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array835 = array();
$array836 = array (
);$array835['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array836);

$expression837 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments833['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression837(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array835)
					),
					$renderingContext
				);
$arguments833['then'] = 'true';
$arguments830['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments833, $renderChildrenClosure834, $renderingContext);
// Rendering Array
$array838 = array();
$array838['disable-shipping'] = 'true';
$arguments830['data'] = $array838;

$output827 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments830, $renderChildrenClosure831, $renderingContext);

$output827 .= '
                                                </div>
                                            ';
return $output827;
};
$arguments825 = array();
$arguments825['if'] = NULL;

$output798 .= '';

$output798 .= '
                                        ';
return $output798;
};
$arguments755 = array();
$arguments755['then'] = NULL;
$arguments755['else'] = NULL;
$arguments755['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array793 = array();
// Rendering Array
$array794 = array();
$array795 = array (
);$array794['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.street.validator', $array795);
$array793['0'] = $array794;
$array793['1'] = ' == ';
// Rendering Array
$array796 = array();
$array796['0'] = 'NotEmpty';
$array793['2'] = $array796;

$expression797 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments755['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression797(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array793)
					),
					$renderingContext
				);
$arguments755['__thenClosure'] = function() use ($renderingContext, $self) {
$output757 = '';

$output757 .= '
                                                <label for="shippingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure759 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments758 = array();
$arguments758['key'] = NULL;
$arguments758['id'] = NULL;
$arguments758['default'] = NULL;
$arguments758['arguments'] = NULL;
$arguments758['extensionName'] = NULL;
$arguments758['languageKey'] = NULL;
$arguments758['alternativeLanguageKeys'] = NULL;
$arguments758['key'] = 'tx_cart_domain_model_order_address.street';

$output757 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments758, $renderChildrenClosure759, $renderingContext)]);

$output757 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure761 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments760 = array();
$arguments760['additionalAttributes'] = NULL;
$arguments760['data'] = NULL;
$arguments760['aria'] = NULL;
$arguments760['name'] = NULL;
$arguments760['value'] = NULL;
$arguments760['property'] = NULL;
$arguments760['autofocus'] = NULL;
$arguments760['disabled'] = NULL;
$arguments760['maxlength'] = NULL;
$arguments760['readonly'] = NULL;
$arguments760['size'] = NULL;
$arguments760['placeholder'] = NULL;
$arguments760['pattern'] = NULL;
$arguments760['errorClass'] = 'f3-form-error';
$arguments760['class'] = NULL;
$arguments760['dir'] = NULL;
$arguments760['id'] = NULL;
$arguments760['lang'] = NULL;
$arguments760['style'] = NULL;
$arguments760['title'] = NULL;
$arguments760['accesskey'] = NULL;
$arguments760['tabindex'] = NULL;
$arguments760['onclick'] = NULL;
$arguments760['required'] = false;
$arguments760['type'] = 'text';
$arguments760['id'] = 'shippingAddress-street';
$arguments760['class'] = 'form-control';
$arguments760['name'] = 'shippingAddress[street]';
$array762 = array (
);$arguments760['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array762);
// Rendering Boolean node
// Rendering Array
$array763 = array();
$array763['0'] = 'true';

$expression764 = function($context) {return TRUE;};
$arguments760['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression764(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array763)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure766 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments765 = array();
$arguments765['then'] = NULL;
$arguments765['else'] = NULL;
$arguments765['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array767 = array();
$array768 = array (
);$array767['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array768);

$expression769 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments765['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression769(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array767)
					),
					$renderingContext
				);
$arguments765['then'] = 'true';
$arguments760['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments765, $renderChildrenClosure766, $renderingContext);
// Rendering Array
$array770 = array();
$array770['disable-shipping'] = 'true';
$arguments760['data'] = $array770;

$output757 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments760, $renderChildrenClosure761, $renderingContext);

$output757 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure772 = function() use ($renderingContext, $self) {
$output773 = '';

$output773 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure775 = function() use ($renderingContext, $self) {
$output779 = '';

$output779 .= '
                                                            <div class="validation-error alert alert-danger">';
$array780 = array (
);
$output779 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array780)]);

$output779 .= '</div>
                                                        ';
return $output779;
};
$arguments774 = array();
$arguments774['then'] = NULL;
$arguments774['else'] = NULL;
$arguments774['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array776 = array();
$array777 = array (
);$array776['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array777);

$expression778 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments774['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression778(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array776)
					),
					$renderingContext
				);
$arguments774['__thenClosure'] = $renderChildrenClosure775;

$output773 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments774, $renderChildrenClosure775, $renderingContext);

$output773 .= '
                                                    ';
return $output773;
};
$arguments771 = array();
$arguments771['for'] = '';
$arguments771['as'] = 'validationResults';
$arguments771['for'] = 'shippingAddress';

$output757 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments771, $renderChildrenClosure772, $renderingContext);

$output757 .= '
                                                </div>
                                            ';
return $output757;
};
$arguments755['__elseClosures'][] = function() use ($renderingContext, $self) {
$output781 = '';

$output781 .= '
                                                <label for="shippingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure783 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments782 = array();
$arguments782['key'] = NULL;
$arguments782['id'] = NULL;
$arguments782['default'] = NULL;
$arguments782['arguments'] = NULL;
$arguments782['extensionName'] = NULL;
$arguments782['languageKey'] = NULL;
$arguments782['alternativeLanguageKeys'] = NULL;
$arguments782['key'] = 'tx_cart_domain_model_order_address.street';

$output781 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments782, $renderChildrenClosure783, $renderingContext)]);

$output781 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure785 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments784 = array();
$arguments784['additionalAttributes'] = NULL;
$arguments784['data'] = NULL;
$arguments784['aria'] = NULL;
$arguments784['name'] = NULL;
$arguments784['value'] = NULL;
$arguments784['property'] = NULL;
$arguments784['autofocus'] = NULL;
$arguments784['disabled'] = NULL;
$arguments784['maxlength'] = NULL;
$arguments784['readonly'] = NULL;
$arguments784['size'] = NULL;
$arguments784['placeholder'] = NULL;
$arguments784['pattern'] = NULL;
$arguments784['errorClass'] = 'f3-form-error';
$arguments784['class'] = NULL;
$arguments784['dir'] = NULL;
$arguments784['id'] = NULL;
$arguments784['lang'] = NULL;
$arguments784['style'] = NULL;
$arguments784['title'] = NULL;
$arguments784['accesskey'] = NULL;
$arguments784['tabindex'] = NULL;
$arguments784['onclick'] = NULL;
$arguments784['required'] = false;
$arguments784['type'] = 'text';
$arguments784['id'] = 'shippingAddress-street';
$arguments784['class'] = 'form-control';
$arguments784['name'] = 'shippingAddress[street]';
$array786 = array (
);$arguments784['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array786);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure788 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments787 = array();
$arguments787['then'] = NULL;
$arguments787['else'] = NULL;
$arguments787['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array789 = array();
$array790 = array (
);$array789['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array790);

$expression791 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments787['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression791(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array789)
					),
					$renderingContext
				);
$arguments787['then'] = 'true';
$arguments784['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments787, $renderChildrenClosure788, $renderingContext);
// Rendering Array
$array792 = array();
$array792['disable-shipping'] = 'true';
$arguments784['data'] = $array792;

$output781 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments784, $renderChildrenClosure785, $renderingContext);

$output781 .= '
                                                </div>
                                            ';
return $output781;
};

$output754 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments755, $renderChildrenClosure756, $renderingContext);

$output754 .= '
                                    </div>
                                    <div class="col-sm-4 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure840 = function() use ($renderingContext, $self) {
$output882 = '';

$output882 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure884 = function() use ($renderingContext, $self) {
$output885 = '';

$output885 .= '
                                                <label for="shippingAddress-streetNumber" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure887 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments886 = array();
$arguments886['key'] = NULL;
$arguments886['id'] = NULL;
$arguments886['default'] = NULL;
$arguments886['arguments'] = NULL;
$arguments886['extensionName'] = NULL;
$arguments886['languageKey'] = NULL;
$arguments886['alternativeLanguageKeys'] = NULL;
$arguments886['key'] = 'tx_cart_domain_model_order_address.street_number';

$output885 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments886, $renderChildrenClosure887, $renderingContext)]);

$output885 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure889 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments888 = array();
$arguments888['additionalAttributes'] = NULL;
$arguments888['data'] = NULL;
$arguments888['aria'] = NULL;
$arguments888['name'] = NULL;
$arguments888['value'] = NULL;
$arguments888['property'] = NULL;
$arguments888['autofocus'] = NULL;
$arguments888['disabled'] = NULL;
$arguments888['maxlength'] = NULL;
$arguments888['readonly'] = NULL;
$arguments888['size'] = NULL;
$arguments888['placeholder'] = NULL;
$arguments888['pattern'] = NULL;
$arguments888['errorClass'] = 'f3-form-error';
$arguments888['class'] = NULL;
$arguments888['dir'] = NULL;
$arguments888['id'] = NULL;
$arguments888['lang'] = NULL;
$arguments888['style'] = NULL;
$arguments888['title'] = NULL;
$arguments888['accesskey'] = NULL;
$arguments888['tabindex'] = NULL;
$arguments888['onclick'] = NULL;
$arguments888['required'] = false;
$arguments888['type'] = 'text';
$arguments888['id'] = 'shippingAddress-streetNumber';
$arguments888['class'] = 'form-control';
$arguments888['name'] = 'shippingAddress[streetNumber]';
$array890 = array (
);$arguments888['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.streetNumber', $array890);
// Rendering Boolean node
// Rendering Array
$array891 = array();
$array891['0'] = 'true';

$expression892 = function($context) {return TRUE;};
$arguments888['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression892(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array891)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure894 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments893 = array();
$arguments893['then'] = NULL;
$arguments893['else'] = NULL;
$arguments893['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array895 = array();
$array896 = array (
);$array895['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array896);

$expression897 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments893['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression897(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array895)
					),
					$renderingContext
				);
$arguments893['then'] = 'true';
$arguments888['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments893, $renderChildrenClosure894, $renderingContext);
// Rendering Array
$array898 = array();
$array898['disable-shipping'] = 'true';
$arguments888['data'] = $array898;

$output885 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments888, $renderChildrenClosure889, $renderingContext);

$output885 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure900 = function() use ($renderingContext, $self) {
$output901 = '';

$output901 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure903 = function() use ($renderingContext, $self) {
$output907 = '';

$output907 .= '
                                                            <div class="validation-error alert alert-danger">';
$array908 = array (
);
$output907 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber.0.message', $array908)]);

$output907 .= '</div>
                                                        ';
return $output907;
};
$arguments902 = array();
$arguments902['then'] = NULL;
$arguments902['else'] = NULL;
$arguments902['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array904 = array();
$array905 = array (
);$array904['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber', $array905);

$expression906 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments902['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression906(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array904)
					),
					$renderingContext
				);
$arguments902['__thenClosure'] = $renderChildrenClosure903;

$output901 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments902, $renderChildrenClosure903, $renderingContext);

$output901 .= '
                                                    ';
return $output901;
};
$arguments899 = array();
$arguments899['for'] = '';
$arguments899['as'] = 'validationResults';
$arguments899['for'] = 'shippingAddress';

$output885 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments899, $renderChildrenClosure900, $renderingContext);

$output885 .= '
                                                </div>
                                            ';
return $output885;
};
$arguments883 = array();

$output882 .= '';

$output882 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure910 = function() use ($renderingContext, $self) {
$output911 = '';

$output911 .= '
                                                <label for="shippingAddress-streetNumber">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure913 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments912 = array();
$arguments912['key'] = NULL;
$arguments912['id'] = NULL;
$arguments912['default'] = NULL;
$arguments912['arguments'] = NULL;
$arguments912['extensionName'] = NULL;
$arguments912['languageKey'] = NULL;
$arguments912['alternativeLanguageKeys'] = NULL;
$arguments912['key'] = 'tx_cart_domain_model_order_address.street_number';

$output911 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments912, $renderChildrenClosure913, $renderingContext)]);

$output911 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure915 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments914 = array();
$arguments914['additionalAttributes'] = NULL;
$arguments914['data'] = NULL;
$arguments914['aria'] = NULL;
$arguments914['name'] = NULL;
$arguments914['value'] = NULL;
$arguments914['property'] = NULL;
$arguments914['autofocus'] = NULL;
$arguments914['disabled'] = NULL;
$arguments914['maxlength'] = NULL;
$arguments914['readonly'] = NULL;
$arguments914['size'] = NULL;
$arguments914['placeholder'] = NULL;
$arguments914['pattern'] = NULL;
$arguments914['errorClass'] = 'f3-form-error';
$arguments914['class'] = NULL;
$arguments914['dir'] = NULL;
$arguments914['id'] = NULL;
$arguments914['lang'] = NULL;
$arguments914['style'] = NULL;
$arguments914['title'] = NULL;
$arguments914['accesskey'] = NULL;
$arguments914['tabindex'] = NULL;
$arguments914['onclick'] = NULL;
$arguments914['required'] = false;
$arguments914['type'] = 'text';
$arguments914['id'] = 'shippingAddress-streetNumber';
$arguments914['class'] = 'form-control';
$arguments914['name'] = 'shippingAddress[streetNumber]';
$array916 = array (
);$arguments914['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.streetNumber', $array916);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure918 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments917 = array();
$arguments917['then'] = NULL;
$arguments917['else'] = NULL;
$arguments917['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array919 = array();
$array920 = array (
);$array919['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array920);

$expression921 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments917['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression921(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array919)
					),
					$renderingContext
				);
$arguments917['then'] = 'true';
$arguments914['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments917, $renderChildrenClosure918, $renderingContext);
// Rendering Array
$array922 = array();
$array922['disable-shipping'] = 'true';
$arguments914['data'] = $array922;

$output911 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments914, $renderChildrenClosure915, $renderingContext);

$output911 .= '
                                                </div>
                                            ';
return $output911;
};
$arguments909 = array();
$arguments909['if'] = NULL;

$output882 .= '';

$output882 .= '
                                        ';
return $output882;
};
$arguments839 = array();
$arguments839['then'] = NULL;
$arguments839['else'] = NULL;
$arguments839['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array877 = array();
// Rendering Array
$array878 = array();
$array879 = array (
);$array878['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.streetNumber.validator', $array879);
$array877['0'] = $array878;
$array877['1'] = ' == ';
// Rendering Array
$array880 = array();
$array880['0'] = 'NotEmpty';
$array877['2'] = $array880;

$expression881 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments839['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression881(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array877)
					),
					$renderingContext
				);
$arguments839['__thenClosure'] = function() use ($renderingContext, $self) {
$output841 = '';

$output841 .= '
                                                <label for="shippingAddress-streetNumber" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure843 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments842 = array();
$arguments842['key'] = NULL;
$arguments842['id'] = NULL;
$arguments842['default'] = NULL;
$arguments842['arguments'] = NULL;
$arguments842['extensionName'] = NULL;
$arguments842['languageKey'] = NULL;
$arguments842['alternativeLanguageKeys'] = NULL;
$arguments842['key'] = 'tx_cart_domain_model_order_address.street_number';

$output841 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments842, $renderChildrenClosure843, $renderingContext)]);

$output841 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure845 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments844 = array();
$arguments844['additionalAttributes'] = NULL;
$arguments844['data'] = NULL;
$arguments844['aria'] = NULL;
$arguments844['name'] = NULL;
$arguments844['value'] = NULL;
$arguments844['property'] = NULL;
$arguments844['autofocus'] = NULL;
$arguments844['disabled'] = NULL;
$arguments844['maxlength'] = NULL;
$arguments844['readonly'] = NULL;
$arguments844['size'] = NULL;
$arguments844['placeholder'] = NULL;
$arguments844['pattern'] = NULL;
$arguments844['errorClass'] = 'f3-form-error';
$arguments844['class'] = NULL;
$arguments844['dir'] = NULL;
$arguments844['id'] = NULL;
$arguments844['lang'] = NULL;
$arguments844['style'] = NULL;
$arguments844['title'] = NULL;
$arguments844['accesskey'] = NULL;
$arguments844['tabindex'] = NULL;
$arguments844['onclick'] = NULL;
$arguments844['required'] = false;
$arguments844['type'] = 'text';
$arguments844['id'] = 'shippingAddress-streetNumber';
$arguments844['class'] = 'form-control';
$arguments844['name'] = 'shippingAddress[streetNumber]';
$array846 = array (
);$arguments844['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.streetNumber', $array846);
// Rendering Boolean node
// Rendering Array
$array847 = array();
$array847['0'] = 'true';

$expression848 = function($context) {return TRUE;};
$arguments844['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression848(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array847)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure850 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments849 = array();
$arguments849['then'] = NULL;
$arguments849['else'] = NULL;
$arguments849['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array851 = array();
$array852 = array (
);$array851['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array852);

$expression853 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments849['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression853(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array851)
					),
					$renderingContext
				);
$arguments849['then'] = 'true';
$arguments844['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments849, $renderChildrenClosure850, $renderingContext);
// Rendering Array
$array854 = array();
$array854['disable-shipping'] = 'true';
$arguments844['data'] = $array854;

$output841 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments844, $renderChildrenClosure845, $renderingContext);

$output841 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure856 = function() use ($renderingContext, $self) {
$output857 = '';

$output857 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure859 = function() use ($renderingContext, $self) {
$output863 = '';

$output863 .= '
                                                            <div class="validation-error alert alert-danger">';
$array864 = array (
);
$output863 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber.0.message', $array864)]);

$output863 .= '</div>
                                                        ';
return $output863;
};
$arguments858 = array();
$arguments858['then'] = NULL;
$arguments858['else'] = NULL;
$arguments858['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array860 = array();
$array861 = array (
);$array860['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber', $array861);

$expression862 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments858['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression862(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array860)
					),
					$renderingContext
				);
$arguments858['__thenClosure'] = $renderChildrenClosure859;

$output857 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments858, $renderChildrenClosure859, $renderingContext);

$output857 .= '
                                                    ';
return $output857;
};
$arguments855 = array();
$arguments855['for'] = '';
$arguments855['as'] = 'validationResults';
$arguments855['for'] = 'shippingAddress';

$output841 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments855, $renderChildrenClosure856, $renderingContext);

$output841 .= '
                                                </div>
                                            ';
return $output841;
};
$arguments839['__elseClosures'][] = function() use ($renderingContext, $self) {
$output865 = '';

$output865 .= '
                                                <label for="shippingAddress-streetNumber">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure867 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments866 = array();
$arguments866['key'] = NULL;
$arguments866['id'] = NULL;
$arguments866['default'] = NULL;
$arguments866['arguments'] = NULL;
$arguments866['extensionName'] = NULL;
$arguments866['languageKey'] = NULL;
$arguments866['alternativeLanguageKeys'] = NULL;
$arguments866['key'] = 'tx_cart_domain_model_order_address.street_number';

$output865 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments866, $renderChildrenClosure867, $renderingContext)]);

$output865 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure869 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments868 = array();
$arguments868['additionalAttributes'] = NULL;
$arguments868['data'] = NULL;
$arguments868['aria'] = NULL;
$arguments868['name'] = NULL;
$arguments868['value'] = NULL;
$arguments868['property'] = NULL;
$arguments868['autofocus'] = NULL;
$arguments868['disabled'] = NULL;
$arguments868['maxlength'] = NULL;
$arguments868['readonly'] = NULL;
$arguments868['size'] = NULL;
$arguments868['placeholder'] = NULL;
$arguments868['pattern'] = NULL;
$arguments868['errorClass'] = 'f3-form-error';
$arguments868['class'] = NULL;
$arguments868['dir'] = NULL;
$arguments868['id'] = NULL;
$arguments868['lang'] = NULL;
$arguments868['style'] = NULL;
$arguments868['title'] = NULL;
$arguments868['accesskey'] = NULL;
$arguments868['tabindex'] = NULL;
$arguments868['onclick'] = NULL;
$arguments868['required'] = false;
$arguments868['type'] = 'text';
$arguments868['id'] = 'shippingAddress-streetNumber';
$arguments868['class'] = 'form-control';
$arguments868['name'] = 'shippingAddress[streetNumber]';
$array870 = array (
);$arguments868['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.streetNumber', $array870);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure872 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments871 = array();
$arguments871['then'] = NULL;
$arguments871['else'] = NULL;
$arguments871['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array873 = array();
$array874 = array (
);$array873['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array874);

$expression875 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments871['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression875(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array873)
					),
					$renderingContext
				);
$arguments871['then'] = 'true';
$arguments868['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments871, $renderChildrenClosure872, $renderingContext);
// Rendering Array
$array876 = array();
$array876['disable-shipping'] = 'true';
$arguments868['data'] = $array876;

$output865 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments868, $renderChildrenClosure869, $renderingContext);

$output865 .= '
                                                </div>
                                            ';
return $output865;
};

$output754 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments839, $renderChildrenClosure840, $renderingContext);

$output754 .= '
                                    </div>
                                </div>
                            ';
return $output754;
};
$arguments747 = array();
$arguments747['then'] = NULL;
$arguments747['else'] = NULL;
$arguments747['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array749 = array();
// Rendering Array
$array750 = array();
$array751 = array (
);$array750['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.street.validator', $array751);
$array749['0'] = $array750;
$array749['1'] = ' != ';
// Rendering Array
$array752 = array();
$array752['0'] = 'Empty';
$array749['2'] = $array752;

$expression753 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments747['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression753(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array749)
					),
					$renderingContext
				);
$arguments747['__thenClosure'] = $renderChildrenClosure748;

$output746 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments747, $renderChildrenClosure748, $renderingContext);

$output746 .= '
                        ';
return $output746;
};
$arguments744['__elseClosures'][] = function() use ($renderingContext, $self) {
$output923 = '';

$output923 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure925 = function() use ($renderingContext, $self) {
$output931 = '';

$output931 .= '
                                <div class="row">
                                    <div class="col-sm-12 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure933 = function() use ($renderingContext, $self) {
$output975 = '';

$output975 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure977 = function() use ($renderingContext, $self) {
$output978 = '';

$output978 .= '
                                                <label for="shippingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure980 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments979 = array();
$arguments979['key'] = NULL;
$arguments979['id'] = NULL;
$arguments979['default'] = NULL;
$arguments979['arguments'] = NULL;
$arguments979['extensionName'] = NULL;
$arguments979['languageKey'] = NULL;
$arguments979['alternativeLanguageKeys'] = NULL;
$arguments979['key'] = 'tx_cart_domain_model_order_address.street';

$output978 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments979, $renderChildrenClosure980, $renderingContext)]);

$output978 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure982 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments981 = array();
$arguments981['additionalAttributes'] = NULL;
$arguments981['data'] = NULL;
$arguments981['aria'] = NULL;
$arguments981['name'] = NULL;
$arguments981['value'] = NULL;
$arguments981['property'] = NULL;
$arguments981['autofocus'] = NULL;
$arguments981['disabled'] = NULL;
$arguments981['maxlength'] = NULL;
$arguments981['readonly'] = NULL;
$arguments981['size'] = NULL;
$arguments981['placeholder'] = NULL;
$arguments981['pattern'] = NULL;
$arguments981['errorClass'] = 'f3-form-error';
$arguments981['class'] = NULL;
$arguments981['dir'] = NULL;
$arguments981['id'] = NULL;
$arguments981['lang'] = NULL;
$arguments981['style'] = NULL;
$arguments981['title'] = NULL;
$arguments981['accesskey'] = NULL;
$arguments981['tabindex'] = NULL;
$arguments981['onclick'] = NULL;
$arguments981['required'] = false;
$arguments981['type'] = 'text';
$arguments981['id'] = 'shippingAddress-street';
$arguments981['class'] = 'form-control';
$arguments981['name'] = 'shippingAddress[street]';
$array983 = array (
);$arguments981['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array983);
// Rendering Boolean node
// Rendering Array
$array984 = array();
$array984['0'] = 'true';

$expression985 = function($context) {return TRUE;};
$arguments981['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression985(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array984)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments986 = array();
$arguments986['then'] = NULL;
$arguments986['else'] = NULL;
$arguments986['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array988 = array();
$array989 = array (
);$array988['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array989);

$expression990 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments986['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression990(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array988)
					),
					$renderingContext
				);
$arguments986['then'] = 'true';
$arguments981['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments986, $renderChildrenClosure987, $renderingContext);
// Rendering Array
$array991 = array();
$array991['disable-shipping'] = 'true';
$arguments981['data'] = $array991;

$output978 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments981, $renderChildrenClosure982, $renderingContext);

$output978 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure993 = function() use ($renderingContext, $self) {
$output994 = '';

$output994 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure996 = function() use ($renderingContext, $self) {
$output1000 = '';

$output1000 .= '
                                                            <div class="validation-error alert alert-danger">';
$array1001 = array (
);
$output1000 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array1001)]);

$output1000 .= '</div>
                                                        ';
return $output1000;
};
$arguments995 = array();
$arguments995['then'] = NULL;
$arguments995['else'] = NULL;
$arguments995['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array997 = array();
$array998 = array (
);$array997['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array998);

$expression999 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments995['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression999(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array997)
					),
					$renderingContext
				);
$arguments995['__thenClosure'] = $renderChildrenClosure996;

$output994 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments995, $renderChildrenClosure996, $renderingContext);

$output994 .= '
                                                    ';
return $output994;
};
$arguments992 = array();
$arguments992['for'] = '';
$arguments992['as'] = 'validationResults';
$arguments992['for'] = 'shippingAddress';

$output978 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments992, $renderChildrenClosure993, $renderingContext);

$output978 .= '
                                                </div>
                                            ';
return $output978;
};
$arguments976 = array();

$output975 .= '';

$output975 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1003 = function() use ($renderingContext, $self) {
$output1004 = '';

$output1004 .= '
                                                <label for="shippingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1006 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1005 = array();
$arguments1005['key'] = NULL;
$arguments1005['id'] = NULL;
$arguments1005['default'] = NULL;
$arguments1005['arguments'] = NULL;
$arguments1005['extensionName'] = NULL;
$arguments1005['languageKey'] = NULL;
$arguments1005['alternativeLanguageKeys'] = NULL;
$arguments1005['key'] = 'tx_cart_domain_model_order_address.street';

$output1004 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1005, $renderChildrenClosure1006, $renderingContext)]);

$output1004 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1008 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1007 = array();
$arguments1007['additionalAttributes'] = NULL;
$arguments1007['data'] = NULL;
$arguments1007['aria'] = NULL;
$arguments1007['name'] = NULL;
$arguments1007['value'] = NULL;
$arguments1007['property'] = NULL;
$arguments1007['autofocus'] = NULL;
$arguments1007['disabled'] = NULL;
$arguments1007['maxlength'] = NULL;
$arguments1007['readonly'] = NULL;
$arguments1007['size'] = NULL;
$arguments1007['placeholder'] = NULL;
$arguments1007['pattern'] = NULL;
$arguments1007['errorClass'] = 'f3-form-error';
$arguments1007['class'] = NULL;
$arguments1007['dir'] = NULL;
$arguments1007['id'] = NULL;
$arguments1007['lang'] = NULL;
$arguments1007['style'] = NULL;
$arguments1007['title'] = NULL;
$arguments1007['accesskey'] = NULL;
$arguments1007['tabindex'] = NULL;
$arguments1007['onclick'] = NULL;
$arguments1007['required'] = false;
$arguments1007['type'] = 'text';
$arguments1007['id'] = 'shippingAddress-street';
$arguments1007['class'] = 'form-control';
$arguments1007['name'] = 'shippingAddress[street]';
$array1009 = array (
);$arguments1007['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array1009);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1011 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1010 = array();
$arguments1010['then'] = NULL;
$arguments1010['else'] = NULL;
$arguments1010['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1012 = array();
$array1013 = array (
);$array1012['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1013);

$expression1014 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1010['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1014(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1012)
					),
					$renderingContext
				);
$arguments1010['then'] = 'true';
$arguments1007['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1010, $renderChildrenClosure1011, $renderingContext);
// Rendering Array
$array1015 = array();
$array1015['disable-shipping'] = 'true';
$arguments1007['data'] = $array1015;

$output1004 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1007, $renderChildrenClosure1008, $renderingContext);

$output1004 .= '
                                                </div>
                                            ';
return $output1004;
};
$arguments1002 = array();
$arguments1002['if'] = NULL;

$output975 .= '';

$output975 .= '
                                        ';
return $output975;
};
$arguments932 = array();
$arguments932['then'] = NULL;
$arguments932['else'] = NULL;
$arguments932['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array970 = array();
// Rendering Array
$array971 = array();
$array972 = array (
);$array971['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.street.validator', $array972);
$array970['0'] = $array971;
$array970['1'] = ' == ';
// Rendering Array
$array973 = array();
$array973['0'] = 'NotEmpty';
$array970['2'] = $array973;

$expression974 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments932['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression974(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array970)
					),
					$renderingContext
				);
$arguments932['__thenClosure'] = function() use ($renderingContext, $self) {
$output934 = '';

$output934 .= '
                                                <label for="shippingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure936 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments935 = array();
$arguments935['key'] = NULL;
$arguments935['id'] = NULL;
$arguments935['default'] = NULL;
$arguments935['arguments'] = NULL;
$arguments935['extensionName'] = NULL;
$arguments935['languageKey'] = NULL;
$arguments935['alternativeLanguageKeys'] = NULL;
$arguments935['key'] = 'tx_cart_domain_model_order_address.street';

$output934 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments935, $renderChildrenClosure936, $renderingContext)]);

$output934 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure938 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments937 = array();
$arguments937['additionalAttributes'] = NULL;
$arguments937['data'] = NULL;
$arguments937['aria'] = NULL;
$arguments937['name'] = NULL;
$arguments937['value'] = NULL;
$arguments937['property'] = NULL;
$arguments937['autofocus'] = NULL;
$arguments937['disabled'] = NULL;
$arguments937['maxlength'] = NULL;
$arguments937['readonly'] = NULL;
$arguments937['size'] = NULL;
$arguments937['placeholder'] = NULL;
$arguments937['pattern'] = NULL;
$arguments937['errorClass'] = 'f3-form-error';
$arguments937['class'] = NULL;
$arguments937['dir'] = NULL;
$arguments937['id'] = NULL;
$arguments937['lang'] = NULL;
$arguments937['style'] = NULL;
$arguments937['title'] = NULL;
$arguments937['accesskey'] = NULL;
$arguments937['tabindex'] = NULL;
$arguments937['onclick'] = NULL;
$arguments937['required'] = false;
$arguments937['type'] = 'text';
$arguments937['id'] = 'shippingAddress-street';
$arguments937['class'] = 'form-control';
$arguments937['name'] = 'shippingAddress[street]';
$array939 = array (
);$arguments937['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array939);
// Rendering Boolean node
// Rendering Array
$array940 = array();
$array940['0'] = 'true';

$expression941 = function($context) {return TRUE;};
$arguments937['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression941(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array940)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure943 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments942 = array();
$arguments942['then'] = NULL;
$arguments942['else'] = NULL;
$arguments942['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array944 = array();
$array945 = array (
);$array944['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array945);

$expression946 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments942['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression946(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array944)
					),
					$renderingContext
				);
$arguments942['then'] = 'true';
$arguments937['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments942, $renderChildrenClosure943, $renderingContext);
// Rendering Array
$array947 = array();
$array947['disable-shipping'] = 'true';
$arguments937['data'] = $array947;

$output934 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments937, $renderChildrenClosure938, $renderingContext);

$output934 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure949 = function() use ($renderingContext, $self) {
$output950 = '';

$output950 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure952 = function() use ($renderingContext, $self) {
$output956 = '';

$output956 .= '
                                                            <div class="validation-error alert alert-danger">';
$array957 = array (
);
$output956 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array957)]);

$output956 .= '</div>
                                                        ';
return $output956;
};
$arguments951 = array();
$arguments951['then'] = NULL;
$arguments951['else'] = NULL;
$arguments951['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array953 = array();
$array954 = array (
);$array953['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array954);

$expression955 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments951['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression955(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array953)
					),
					$renderingContext
				);
$arguments951['__thenClosure'] = $renderChildrenClosure952;

$output950 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments951, $renderChildrenClosure952, $renderingContext);

$output950 .= '
                                                    ';
return $output950;
};
$arguments948 = array();
$arguments948['for'] = '';
$arguments948['as'] = 'validationResults';
$arguments948['for'] = 'shippingAddress';

$output934 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments948, $renderChildrenClosure949, $renderingContext);

$output934 .= '
                                                </div>
                                            ';
return $output934;
};
$arguments932['__elseClosures'][] = function() use ($renderingContext, $self) {
$output958 = '';

$output958 .= '
                                                <label for="shippingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure960 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments959 = array();
$arguments959['key'] = NULL;
$arguments959['id'] = NULL;
$arguments959['default'] = NULL;
$arguments959['arguments'] = NULL;
$arguments959['extensionName'] = NULL;
$arguments959['languageKey'] = NULL;
$arguments959['alternativeLanguageKeys'] = NULL;
$arguments959['key'] = 'tx_cart_domain_model_order_address.street';

$output958 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments959, $renderChildrenClosure960, $renderingContext)]);

$output958 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure962 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments961 = array();
$arguments961['additionalAttributes'] = NULL;
$arguments961['data'] = NULL;
$arguments961['aria'] = NULL;
$arguments961['name'] = NULL;
$arguments961['value'] = NULL;
$arguments961['property'] = NULL;
$arguments961['autofocus'] = NULL;
$arguments961['disabled'] = NULL;
$arguments961['maxlength'] = NULL;
$arguments961['readonly'] = NULL;
$arguments961['size'] = NULL;
$arguments961['placeholder'] = NULL;
$arguments961['pattern'] = NULL;
$arguments961['errorClass'] = 'f3-form-error';
$arguments961['class'] = NULL;
$arguments961['dir'] = NULL;
$arguments961['id'] = NULL;
$arguments961['lang'] = NULL;
$arguments961['style'] = NULL;
$arguments961['title'] = NULL;
$arguments961['accesskey'] = NULL;
$arguments961['tabindex'] = NULL;
$arguments961['onclick'] = NULL;
$arguments961['required'] = false;
$arguments961['type'] = 'text';
$arguments961['id'] = 'shippingAddress-street';
$arguments961['class'] = 'form-control';
$arguments961['name'] = 'shippingAddress[street]';
$array963 = array (
);$arguments961['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.street', $array963);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure965 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments964 = array();
$arguments964['then'] = NULL;
$arguments964['else'] = NULL;
$arguments964['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array966 = array();
$array967 = array (
);$array966['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array967);

$expression968 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments964['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression968(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array966)
					),
					$renderingContext
				);
$arguments964['then'] = 'true';
$arguments961['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments964, $renderChildrenClosure965, $renderingContext);
// Rendering Array
$array969 = array();
$array969['disable-shipping'] = 'true';
$arguments961['data'] = $array969;

$output958 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments961, $renderChildrenClosure962, $renderingContext);

$output958 .= '
                                                </div>
                                            ';
return $output958;
};

$output931 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments932, $renderChildrenClosure933, $renderingContext);

$output931 .= '
                                    </div>
                                </div>
                            ';
return $output931;
};
$arguments924 = array();
$arguments924['then'] = NULL;
$arguments924['else'] = NULL;
$arguments924['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array926 = array();
// Rendering Array
$array927 = array();
$array928 = array (
);$array927['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.street.validator', $array928);
$array926['0'] = $array927;
$array926['1'] = ' != ';
// Rendering Array
$array929 = array();
$array929['0'] = 'Empty';
$array926['2'] = $array929;

$expression930 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments924['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression930(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array926)
					),
					$renderingContext
				);
$arguments924['__thenClosure'] = $renderChildrenClosure925;

$output923 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments924, $renderChildrenClosure925, $renderingContext);

$output923 .= '
                        ';
return $output923;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments744, $renderChildrenClosure745, $renderingContext);

$output0 .= '

                    <div class="row">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1297 = function() use ($renderingContext, $self) {
$output1303 = '';

$output1303 .= '
                            <div class="col-sm-4 column">
                                <div class="field">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1305 = function() use ($renderingContext, $self) {
$output1347 = '';

$output1347 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1349 = function() use ($renderingContext, $self) {
$output1350 = '';

$output1350 .= '
                                            <label for="shippingAddress-zip" class="required">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1351 = array();
$arguments1351['key'] = NULL;
$arguments1351['id'] = NULL;
$arguments1351['default'] = NULL;
$arguments1351['arguments'] = NULL;
$arguments1351['extensionName'] = NULL;
$arguments1351['languageKey'] = NULL;
$arguments1351['alternativeLanguageKeys'] = NULL;
$arguments1351['key'] = 'tx_cart_domain_model_order_address.zip';

$output1350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1351, $renderChildrenClosure1352, $renderingContext)]);

$output1350 .= '
                                                <em>*</em>
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1353 = array();
$arguments1353['additionalAttributes'] = NULL;
$arguments1353['data'] = NULL;
$arguments1353['aria'] = NULL;
$arguments1353['name'] = NULL;
$arguments1353['value'] = NULL;
$arguments1353['property'] = NULL;
$arguments1353['autofocus'] = NULL;
$arguments1353['disabled'] = NULL;
$arguments1353['maxlength'] = NULL;
$arguments1353['readonly'] = NULL;
$arguments1353['size'] = NULL;
$arguments1353['placeholder'] = NULL;
$arguments1353['pattern'] = NULL;
$arguments1353['errorClass'] = 'f3-form-error';
$arguments1353['class'] = NULL;
$arguments1353['dir'] = NULL;
$arguments1353['id'] = NULL;
$arguments1353['lang'] = NULL;
$arguments1353['style'] = NULL;
$arguments1353['title'] = NULL;
$arguments1353['accesskey'] = NULL;
$arguments1353['tabindex'] = NULL;
$arguments1353['onclick'] = NULL;
$arguments1353['required'] = false;
$arguments1353['type'] = 'text';
$arguments1353['id'] = 'shippingAddress-zip';
$arguments1353['class'] = 'form-control';
$arguments1353['name'] = 'shippingAddress[zip]';
$array1355 = array (
);$arguments1353['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.zip', $array1355);
// Rendering Boolean node
// Rendering Array
$array1356 = array();
$array1356['0'] = 'true';

$expression1357 = function($context) {return TRUE;};
$arguments1353['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1357(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1356)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1358 = array();
$arguments1358['then'] = NULL;
$arguments1358['else'] = NULL;
$arguments1358['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1360 = array();
$array1361 = array (
);$array1360['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1361);

$expression1362 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1358['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1362(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1360)
					),
					$renderingContext
				);
$arguments1358['then'] = 'true';
$arguments1353['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1358, $renderChildrenClosure1359, $renderingContext);
// Rendering Array
$array1363 = array();
$array1363['disable-shipping'] = 'true';
$arguments1353['data'] = $array1363;

$output1350 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1353, $renderChildrenClosure1354, $renderingContext);

$output1350 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1365 = function() use ($renderingContext, $self) {
$output1366 = '';

$output1366 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1368 = function() use ($renderingContext, $self) {
$output1372 = '';

$output1372 .= '
                                                        <div class="validation-error alert alert-danger">';
$array1373 = array (
);
$output1372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.zip.0.message', $array1373)]);

$output1372 .= '</div>
                                                    ';
return $output1372;
};
$arguments1367 = array();
$arguments1367['then'] = NULL;
$arguments1367['else'] = NULL;
$arguments1367['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1369 = array();
$array1370 = array (
);$array1369['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.zip', $array1370);

$expression1371 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1367['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1371(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1369)
					),
					$renderingContext
				);
$arguments1367['__thenClosure'] = $renderChildrenClosure1368;

$output1366 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1367, $renderChildrenClosure1368, $renderingContext);

$output1366 .= '
                                                ';
return $output1366;
};
$arguments1364 = array();
$arguments1364['for'] = '';
$arguments1364['as'] = 'validationResults';
$arguments1364['for'] = 'shippingAddress';

$output1350 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1364, $renderChildrenClosure1365, $renderingContext);

$output1350 .= '
                                            </div>
                                        ';
return $output1350;
};
$arguments1348 = array();

$output1347 .= '';

$output1347 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1375 = function() use ($renderingContext, $self) {
$output1376 = '';

$output1376 .= '
                                            <label for="shippingAddress-zip">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1378 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1377 = array();
$arguments1377['key'] = NULL;
$arguments1377['id'] = NULL;
$arguments1377['default'] = NULL;
$arguments1377['arguments'] = NULL;
$arguments1377['extensionName'] = NULL;
$arguments1377['languageKey'] = NULL;
$arguments1377['alternativeLanguageKeys'] = NULL;
$arguments1377['key'] = 'tx_cart_domain_model_order_address.zip';

$output1376 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1377, $renderChildrenClosure1378, $renderingContext)]);

$output1376 .= '
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1380 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1379 = array();
$arguments1379['additionalAttributes'] = NULL;
$arguments1379['data'] = NULL;
$arguments1379['aria'] = NULL;
$arguments1379['name'] = NULL;
$arguments1379['value'] = NULL;
$arguments1379['property'] = NULL;
$arguments1379['autofocus'] = NULL;
$arguments1379['disabled'] = NULL;
$arguments1379['maxlength'] = NULL;
$arguments1379['readonly'] = NULL;
$arguments1379['size'] = NULL;
$arguments1379['placeholder'] = NULL;
$arguments1379['pattern'] = NULL;
$arguments1379['errorClass'] = 'f3-form-error';
$arguments1379['class'] = NULL;
$arguments1379['dir'] = NULL;
$arguments1379['id'] = NULL;
$arguments1379['lang'] = NULL;
$arguments1379['style'] = NULL;
$arguments1379['title'] = NULL;
$arguments1379['accesskey'] = NULL;
$arguments1379['tabindex'] = NULL;
$arguments1379['onclick'] = NULL;
$arguments1379['required'] = false;
$arguments1379['type'] = 'text';
$arguments1379['id'] = 'shippingAddress-zip';
$arguments1379['class'] = 'form-control';
$arguments1379['name'] = 'shippingAddress[zip]';
$array1381 = array (
);$arguments1379['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.zip', $array1381);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1382 = array();
$arguments1382['then'] = NULL;
$arguments1382['else'] = NULL;
$arguments1382['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1384 = array();
$array1385 = array (
);$array1384['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1385);

$expression1386 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1382['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1386(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1384)
					),
					$renderingContext
				);
$arguments1382['then'] = 'true';
$arguments1379['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1382, $renderChildrenClosure1383, $renderingContext);
// Rendering Array
$array1387 = array();
$array1387['disable-shipping'] = 'true';
$arguments1379['data'] = $array1387;

$output1376 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1379, $renderChildrenClosure1380, $renderingContext);

$output1376 .= '
                                            </div>
                                        ';
return $output1376;
};
$arguments1374 = array();
$arguments1374['if'] = NULL;

$output1347 .= '';

$output1347 .= '
                                    ';
return $output1347;
};
$arguments1304 = array();
$arguments1304['then'] = NULL;
$arguments1304['else'] = NULL;
$arguments1304['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1342 = array();
// Rendering Array
$array1343 = array();
$array1344 = array (
);$array1343['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.zip.validator', $array1344);
$array1342['0'] = $array1343;
$array1342['1'] = ' == ';
// Rendering Array
$array1345 = array();
$array1345['0'] = 'NotEmpty';
$array1342['2'] = $array1345;

$expression1346 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1304['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1346(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1342)
					),
					$renderingContext
				);
$arguments1304['__thenClosure'] = function() use ($renderingContext, $self) {
$output1306 = '';

$output1306 .= '
                                            <label for="shippingAddress-zip" class="required">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1307 = array();
$arguments1307['key'] = NULL;
$arguments1307['id'] = NULL;
$arguments1307['default'] = NULL;
$arguments1307['arguments'] = NULL;
$arguments1307['extensionName'] = NULL;
$arguments1307['languageKey'] = NULL;
$arguments1307['alternativeLanguageKeys'] = NULL;
$arguments1307['key'] = 'tx_cart_domain_model_order_address.zip';

$output1306 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1307, $renderChildrenClosure1308, $renderingContext)]);

$output1306 .= '
                                                <em>*</em>
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1309 = array();
$arguments1309['additionalAttributes'] = NULL;
$arguments1309['data'] = NULL;
$arguments1309['aria'] = NULL;
$arguments1309['name'] = NULL;
$arguments1309['value'] = NULL;
$arguments1309['property'] = NULL;
$arguments1309['autofocus'] = NULL;
$arguments1309['disabled'] = NULL;
$arguments1309['maxlength'] = NULL;
$arguments1309['readonly'] = NULL;
$arguments1309['size'] = NULL;
$arguments1309['placeholder'] = NULL;
$arguments1309['pattern'] = NULL;
$arguments1309['errorClass'] = 'f3-form-error';
$arguments1309['class'] = NULL;
$arguments1309['dir'] = NULL;
$arguments1309['id'] = NULL;
$arguments1309['lang'] = NULL;
$arguments1309['style'] = NULL;
$arguments1309['title'] = NULL;
$arguments1309['accesskey'] = NULL;
$arguments1309['tabindex'] = NULL;
$arguments1309['onclick'] = NULL;
$arguments1309['required'] = false;
$arguments1309['type'] = 'text';
$arguments1309['id'] = 'shippingAddress-zip';
$arguments1309['class'] = 'form-control';
$arguments1309['name'] = 'shippingAddress[zip]';
$array1311 = array (
);$arguments1309['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.zip', $array1311);
// Rendering Boolean node
// Rendering Array
$array1312 = array();
$array1312['0'] = 'true';

$expression1313 = function($context) {return TRUE;};
$arguments1309['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1313(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1312)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1314 = array();
$arguments1314['then'] = NULL;
$arguments1314['else'] = NULL;
$arguments1314['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1316 = array();
$array1317 = array (
);$array1316['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1317);

$expression1318 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1314['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1318(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1316)
					),
					$renderingContext
				);
$arguments1314['then'] = 'true';
$arguments1309['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1314, $renderChildrenClosure1315, $renderingContext);
// Rendering Array
$array1319 = array();
$array1319['disable-shipping'] = 'true';
$arguments1309['data'] = $array1319;

$output1306 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1309, $renderChildrenClosure1310, $renderingContext);

$output1306 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1321 = function() use ($renderingContext, $self) {
$output1322 = '';

$output1322 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1324 = function() use ($renderingContext, $self) {
$output1328 = '';

$output1328 .= '
                                                        <div class="validation-error alert alert-danger">';
$array1329 = array (
);
$output1328 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.zip.0.message', $array1329)]);

$output1328 .= '</div>
                                                    ';
return $output1328;
};
$arguments1323 = array();
$arguments1323['then'] = NULL;
$arguments1323['else'] = NULL;
$arguments1323['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1325 = array();
$array1326 = array (
);$array1325['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.zip', $array1326);

$expression1327 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1323['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1327(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1325)
					),
					$renderingContext
				);
$arguments1323['__thenClosure'] = $renderChildrenClosure1324;

$output1322 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1323, $renderChildrenClosure1324, $renderingContext);

$output1322 .= '
                                                ';
return $output1322;
};
$arguments1320 = array();
$arguments1320['for'] = '';
$arguments1320['as'] = 'validationResults';
$arguments1320['for'] = 'shippingAddress';

$output1306 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1320, $renderChildrenClosure1321, $renderingContext);

$output1306 .= '
                                            </div>
                                        ';
return $output1306;
};
$arguments1304['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1330 = '';

$output1330 .= '
                                            <label for="shippingAddress-zip">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1332 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1331 = array();
$arguments1331['key'] = NULL;
$arguments1331['id'] = NULL;
$arguments1331['default'] = NULL;
$arguments1331['arguments'] = NULL;
$arguments1331['extensionName'] = NULL;
$arguments1331['languageKey'] = NULL;
$arguments1331['alternativeLanguageKeys'] = NULL;
$arguments1331['key'] = 'tx_cart_domain_model_order_address.zip';

$output1330 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1331, $renderChildrenClosure1332, $renderingContext)]);

$output1330 .= '
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1334 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1333 = array();
$arguments1333['additionalAttributes'] = NULL;
$arguments1333['data'] = NULL;
$arguments1333['aria'] = NULL;
$arguments1333['name'] = NULL;
$arguments1333['value'] = NULL;
$arguments1333['property'] = NULL;
$arguments1333['autofocus'] = NULL;
$arguments1333['disabled'] = NULL;
$arguments1333['maxlength'] = NULL;
$arguments1333['readonly'] = NULL;
$arguments1333['size'] = NULL;
$arguments1333['placeholder'] = NULL;
$arguments1333['pattern'] = NULL;
$arguments1333['errorClass'] = 'f3-form-error';
$arguments1333['class'] = NULL;
$arguments1333['dir'] = NULL;
$arguments1333['id'] = NULL;
$arguments1333['lang'] = NULL;
$arguments1333['style'] = NULL;
$arguments1333['title'] = NULL;
$arguments1333['accesskey'] = NULL;
$arguments1333['tabindex'] = NULL;
$arguments1333['onclick'] = NULL;
$arguments1333['required'] = false;
$arguments1333['type'] = 'text';
$arguments1333['id'] = 'shippingAddress-zip';
$arguments1333['class'] = 'form-control';
$arguments1333['name'] = 'shippingAddress[zip]';
$array1335 = array (
);$arguments1333['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.zip', $array1335);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1337 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1336 = array();
$arguments1336['then'] = NULL;
$arguments1336['else'] = NULL;
$arguments1336['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1338 = array();
$array1339 = array (
);$array1338['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1339);

$expression1340 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1336['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1340(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1338)
					),
					$renderingContext
				);
$arguments1336['then'] = 'true';
$arguments1333['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1336, $renderChildrenClosure1337, $renderingContext);
// Rendering Array
$array1341 = array();
$array1341['disable-shipping'] = 'true';
$arguments1333['data'] = $array1341;

$output1330 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1333, $renderChildrenClosure1334, $renderingContext);

$output1330 .= '
                                            </div>
                                        ';
return $output1330;
};

$output1303 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1304, $renderChildrenClosure1305, $renderingContext);

$output1303 .= '
                                </div>
                            </div>
                        ';
return $output1303;
};
$arguments1296 = array();
$arguments1296['then'] = NULL;
$arguments1296['else'] = NULL;
$arguments1296['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1298 = array();
// Rendering Array
$array1299 = array();
$array1300 = array (
);$array1299['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.zip.validator', $array1300);
$array1298['0'] = $array1299;
$array1298['1'] = ' != ';
// Rendering Array
$array1301 = array();
$array1301['0'] = 'Empty';
$array1298['2'] = $array1301;

$expression1302 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1296['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1302(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1298)
					),
					$renderingContext
				);
$arguments1296['__thenClosure'] = $renderChildrenClosure1297;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1296, $renderChildrenClosure1297, $renderingContext);

$output0 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1389 = function() use ($renderingContext, $self) {
$output1395 = '';

$output1395 .= '
                            <div class="col-sm-8 column">
                                <div class="field">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1397 = function() use ($renderingContext, $self) {
$output1439 = '';

$output1439 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1441 = function() use ($renderingContext, $self) {
$output1442 = '';

$output1442 .= '
                                            <label for="shippingAddress-city" class="required">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1443 = array();
$arguments1443['key'] = NULL;
$arguments1443['id'] = NULL;
$arguments1443['default'] = NULL;
$arguments1443['arguments'] = NULL;
$arguments1443['extensionName'] = NULL;
$arguments1443['languageKey'] = NULL;
$arguments1443['alternativeLanguageKeys'] = NULL;
$arguments1443['key'] = 'tx_cart_domain_model_order_address.city';

$output1442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1443, $renderChildrenClosure1444, $renderingContext)]);

$output1442 .= '
                                                <em>*</em>
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1446 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1445 = array();
$arguments1445['additionalAttributes'] = NULL;
$arguments1445['data'] = NULL;
$arguments1445['aria'] = NULL;
$arguments1445['name'] = NULL;
$arguments1445['value'] = NULL;
$arguments1445['property'] = NULL;
$arguments1445['autofocus'] = NULL;
$arguments1445['disabled'] = NULL;
$arguments1445['maxlength'] = NULL;
$arguments1445['readonly'] = NULL;
$arguments1445['size'] = NULL;
$arguments1445['placeholder'] = NULL;
$arguments1445['pattern'] = NULL;
$arguments1445['errorClass'] = 'f3-form-error';
$arguments1445['class'] = NULL;
$arguments1445['dir'] = NULL;
$arguments1445['id'] = NULL;
$arguments1445['lang'] = NULL;
$arguments1445['style'] = NULL;
$arguments1445['title'] = NULL;
$arguments1445['accesskey'] = NULL;
$arguments1445['tabindex'] = NULL;
$arguments1445['onclick'] = NULL;
$arguments1445['required'] = false;
$arguments1445['type'] = 'text';
$arguments1445['id'] = 'shippingAddress-city';
$arguments1445['class'] = 'form-control';
$arguments1445['name'] = 'shippingAddress[city]';
$array1447 = array (
);$arguments1445['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.city', $array1447);
// Rendering Boolean node
// Rendering Array
$array1448 = array();
$array1448['0'] = 'true';

$expression1449 = function($context) {return TRUE;};
$arguments1445['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1449(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1448)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1450 = array();
$arguments1450['then'] = NULL;
$arguments1450['else'] = NULL;
$arguments1450['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1452 = array();
$array1453 = array (
);$array1452['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1453);

$expression1454 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1450['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1454(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1452)
					),
					$renderingContext
				);
$arguments1450['then'] = 'true';
$arguments1445['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1450, $renderChildrenClosure1451, $renderingContext);
// Rendering Array
$array1455 = array();
$array1455['disable-shipping'] = 'true';
$arguments1445['data'] = $array1455;

$output1442 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1445, $renderChildrenClosure1446, $renderingContext);

$output1442 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1457 = function() use ($renderingContext, $self) {
$output1458 = '';

$output1458 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1460 = function() use ($renderingContext, $self) {
$output1464 = '';

$output1464 .= '
                                                        <div class="validation-error alert alert-danger">';
$array1465 = array (
);
$output1464 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.city.0.message', $array1465)]);

$output1464 .= '</div>
                                                    ';
return $output1464;
};
$arguments1459 = array();
$arguments1459['then'] = NULL;
$arguments1459['else'] = NULL;
$arguments1459['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1461 = array();
$array1462 = array (
);$array1461['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.city', $array1462);

$expression1463 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1459['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1463(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1461)
					),
					$renderingContext
				);
$arguments1459['__thenClosure'] = $renderChildrenClosure1460;

$output1458 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1459, $renderChildrenClosure1460, $renderingContext);

$output1458 .= '
                                                ';
return $output1458;
};
$arguments1456 = array();
$arguments1456['for'] = '';
$arguments1456['as'] = 'validationResults';
$arguments1456['for'] = 'shippingAddress';

$output1442 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1456, $renderChildrenClosure1457, $renderingContext);

$output1442 .= '
                                            </div>
                                        ';
return $output1442;
};
$arguments1440 = array();

$output1439 .= '';

$output1439 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1467 = function() use ($renderingContext, $self) {
$output1468 = '';

$output1468 .= '
                                            <label for="shippingAddress-city">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1470 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1469 = array();
$arguments1469['key'] = NULL;
$arguments1469['id'] = NULL;
$arguments1469['default'] = NULL;
$arguments1469['arguments'] = NULL;
$arguments1469['extensionName'] = NULL;
$arguments1469['languageKey'] = NULL;
$arguments1469['alternativeLanguageKeys'] = NULL;
$arguments1469['key'] = 'tx_cart_domain_model_order_address.city';

$output1468 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1469, $renderChildrenClosure1470, $renderingContext)]);

$output1468 .= '
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1472 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1471 = array();
$arguments1471['additionalAttributes'] = NULL;
$arguments1471['data'] = NULL;
$arguments1471['aria'] = NULL;
$arguments1471['name'] = NULL;
$arguments1471['value'] = NULL;
$arguments1471['property'] = NULL;
$arguments1471['autofocus'] = NULL;
$arguments1471['disabled'] = NULL;
$arguments1471['maxlength'] = NULL;
$arguments1471['readonly'] = NULL;
$arguments1471['size'] = NULL;
$arguments1471['placeholder'] = NULL;
$arguments1471['pattern'] = NULL;
$arguments1471['errorClass'] = 'f3-form-error';
$arguments1471['class'] = NULL;
$arguments1471['dir'] = NULL;
$arguments1471['id'] = NULL;
$arguments1471['lang'] = NULL;
$arguments1471['style'] = NULL;
$arguments1471['title'] = NULL;
$arguments1471['accesskey'] = NULL;
$arguments1471['tabindex'] = NULL;
$arguments1471['onclick'] = NULL;
$arguments1471['required'] = false;
$arguments1471['type'] = 'text';
$arguments1471['id'] = 'shippingAddress-city';
$arguments1471['class'] = 'form-control';
$arguments1471['name'] = 'shippingAddress[city]';
$array1473 = array (
);$arguments1471['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.city', $array1473);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1475 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1474 = array();
$arguments1474['then'] = NULL;
$arguments1474['else'] = NULL;
$arguments1474['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1476 = array();
$array1477 = array (
);$array1476['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1477);

$expression1478 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1474['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1478(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1476)
					),
					$renderingContext
				);
$arguments1474['then'] = 'true';
$arguments1471['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1474, $renderChildrenClosure1475, $renderingContext);
// Rendering Array
$array1479 = array();
$array1479['disable-shipping'] = 'true';
$arguments1471['data'] = $array1479;

$output1468 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1471, $renderChildrenClosure1472, $renderingContext);

$output1468 .= '
                                            </div>
                                        ';
return $output1468;
};
$arguments1466 = array();
$arguments1466['if'] = NULL;

$output1439 .= '';

$output1439 .= '
                                    ';
return $output1439;
};
$arguments1396 = array();
$arguments1396['then'] = NULL;
$arguments1396['else'] = NULL;
$arguments1396['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1434 = array();
// Rendering Array
$array1435 = array();
$array1436 = array (
);$array1435['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.city.validator', $array1436);
$array1434['0'] = $array1435;
$array1434['1'] = ' == ';
// Rendering Array
$array1437 = array();
$array1437['0'] = 'NotEmpty';
$array1434['2'] = $array1437;

$expression1438 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1396['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1438(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1434)
					),
					$renderingContext
				);
$arguments1396['__thenClosure'] = function() use ($renderingContext, $self) {
$output1398 = '';

$output1398 .= '
                                            <label for="shippingAddress-city" class="required">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1400 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1399 = array();
$arguments1399['key'] = NULL;
$arguments1399['id'] = NULL;
$arguments1399['default'] = NULL;
$arguments1399['arguments'] = NULL;
$arguments1399['extensionName'] = NULL;
$arguments1399['languageKey'] = NULL;
$arguments1399['alternativeLanguageKeys'] = NULL;
$arguments1399['key'] = 'tx_cart_domain_model_order_address.city';

$output1398 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1399, $renderChildrenClosure1400, $renderingContext)]);

$output1398 .= '
                                                <em>*</em>
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1402 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1401 = array();
$arguments1401['additionalAttributes'] = NULL;
$arguments1401['data'] = NULL;
$arguments1401['aria'] = NULL;
$arguments1401['name'] = NULL;
$arguments1401['value'] = NULL;
$arguments1401['property'] = NULL;
$arguments1401['autofocus'] = NULL;
$arguments1401['disabled'] = NULL;
$arguments1401['maxlength'] = NULL;
$arguments1401['readonly'] = NULL;
$arguments1401['size'] = NULL;
$arguments1401['placeholder'] = NULL;
$arguments1401['pattern'] = NULL;
$arguments1401['errorClass'] = 'f3-form-error';
$arguments1401['class'] = NULL;
$arguments1401['dir'] = NULL;
$arguments1401['id'] = NULL;
$arguments1401['lang'] = NULL;
$arguments1401['style'] = NULL;
$arguments1401['title'] = NULL;
$arguments1401['accesskey'] = NULL;
$arguments1401['tabindex'] = NULL;
$arguments1401['onclick'] = NULL;
$arguments1401['required'] = false;
$arguments1401['type'] = 'text';
$arguments1401['id'] = 'shippingAddress-city';
$arguments1401['class'] = 'form-control';
$arguments1401['name'] = 'shippingAddress[city]';
$array1403 = array (
);$arguments1401['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.city', $array1403);
// Rendering Boolean node
// Rendering Array
$array1404 = array();
$array1404['0'] = 'true';

$expression1405 = function($context) {return TRUE;};
$arguments1401['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1405(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1404)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1407 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1406 = array();
$arguments1406['then'] = NULL;
$arguments1406['else'] = NULL;
$arguments1406['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1408 = array();
$array1409 = array (
);$array1408['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1409);

$expression1410 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1406['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1410(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1408)
					),
					$renderingContext
				);
$arguments1406['then'] = 'true';
$arguments1401['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1406, $renderChildrenClosure1407, $renderingContext);
// Rendering Array
$array1411 = array();
$array1411['disable-shipping'] = 'true';
$arguments1401['data'] = $array1411;

$output1398 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1401, $renderChildrenClosure1402, $renderingContext);

$output1398 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1413 = function() use ($renderingContext, $self) {
$output1414 = '';

$output1414 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1416 = function() use ($renderingContext, $self) {
$output1420 = '';

$output1420 .= '
                                                        <div class="validation-error alert alert-danger">';
$array1421 = array (
);
$output1420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.city.0.message', $array1421)]);

$output1420 .= '</div>
                                                    ';
return $output1420;
};
$arguments1415 = array();
$arguments1415['then'] = NULL;
$arguments1415['else'] = NULL;
$arguments1415['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1417 = array();
$array1418 = array (
);$array1417['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.city', $array1418);

$expression1419 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1415['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1417)
					),
					$renderingContext
				);
$arguments1415['__thenClosure'] = $renderChildrenClosure1416;

$output1414 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1415, $renderChildrenClosure1416, $renderingContext);

$output1414 .= '
                                                ';
return $output1414;
};
$arguments1412 = array();
$arguments1412['for'] = '';
$arguments1412['as'] = 'validationResults';
$arguments1412['for'] = 'shippingAddress';

$output1398 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1412, $renderChildrenClosure1413, $renderingContext);

$output1398 .= '
                                            </div>
                                        ';
return $output1398;
};
$arguments1396['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1422 = '';

$output1422 .= '
                                            <label for="shippingAddress-city">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1423 = array();
$arguments1423['key'] = NULL;
$arguments1423['id'] = NULL;
$arguments1423['default'] = NULL;
$arguments1423['arguments'] = NULL;
$arguments1423['extensionName'] = NULL;
$arguments1423['languageKey'] = NULL;
$arguments1423['alternativeLanguageKeys'] = NULL;
$arguments1423['key'] = 'tx_cart_domain_model_order_address.city';

$output1422 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1423, $renderChildrenClosure1424, $renderingContext)]);

$output1422 .= '
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1425 = array();
$arguments1425['additionalAttributes'] = NULL;
$arguments1425['data'] = NULL;
$arguments1425['aria'] = NULL;
$arguments1425['name'] = NULL;
$arguments1425['value'] = NULL;
$arguments1425['property'] = NULL;
$arguments1425['autofocus'] = NULL;
$arguments1425['disabled'] = NULL;
$arguments1425['maxlength'] = NULL;
$arguments1425['readonly'] = NULL;
$arguments1425['size'] = NULL;
$arguments1425['placeholder'] = NULL;
$arguments1425['pattern'] = NULL;
$arguments1425['errorClass'] = 'f3-form-error';
$arguments1425['class'] = NULL;
$arguments1425['dir'] = NULL;
$arguments1425['id'] = NULL;
$arguments1425['lang'] = NULL;
$arguments1425['style'] = NULL;
$arguments1425['title'] = NULL;
$arguments1425['accesskey'] = NULL;
$arguments1425['tabindex'] = NULL;
$arguments1425['onclick'] = NULL;
$arguments1425['required'] = false;
$arguments1425['type'] = 'text';
$arguments1425['id'] = 'shippingAddress-city';
$arguments1425['class'] = 'form-control';
$arguments1425['name'] = 'shippingAddress[city]';
$array1427 = array (
);$arguments1425['value'] = $renderingContext->getVariableProvider()->getByPath('shippingAddress.city', $array1427);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1429 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1428 = array();
$arguments1428['then'] = NULL;
$arguments1428['else'] = NULL;
$arguments1428['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1430 = array();
$array1431 = array (
);$array1430['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1431);

$expression1432 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1428['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1432(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1430)
					),
					$renderingContext
				);
$arguments1428['then'] = 'true';
$arguments1425['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1428, $renderChildrenClosure1429, $renderingContext);
// Rendering Array
$array1433 = array();
$array1433['disable-shipping'] = 'true';
$arguments1425['data'] = $array1433;

$output1422 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1425, $renderChildrenClosure1426, $renderingContext);

$output1422 .= '
                                            </div>
                                        ';
return $output1422;
};

$output1395 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1396, $renderChildrenClosure1397, $renderingContext);

$output1395 .= '
                                </div>
                            </div>
                        ';
return $output1395;
};
$arguments1388 = array();
$arguments1388['then'] = NULL;
$arguments1388['else'] = NULL;
$arguments1388['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1390 = array();
// Rendering Array
$array1391 = array();
$array1392 = array (
);$array1391['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.city.validator', $array1392);
$array1390['0'] = $array1391;
$array1390['1'] = ' != ';
// Rendering Array
$array1393 = array();
$array1393['0'] = 'Empty';
$array1390['2'] = $array1393;

$expression1394 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1388['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1394(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1390)
					),
					$renderingContext
				);
$arguments1388['__thenClosure'] = $renderChildrenClosure1389;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1388, $renderChildrenClosure1389, $renderingContext);

$output0 .= '
                    </div>

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1481 = function() use ($renderingContext, $self) {
$output1487 = '';

$output1487 .= '
                        <div class="row">
                            <div class="col-sm-12 column">
                                <div class="field">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1489 = function() use ($renderingContext, $self) {
$output1533 = '';

$output1533 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1535 = function() use ($renderingContext, $self) {
$output1536 = '';

$output1536 .= '
                                            <label for="shippingAddress-country" class="required">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1538 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1537 = array();
$arguments1537['key'] = NULL;
$arguments1537['id'] = NULL;
$arguments1537['default'] = NULL;
$arguments1537['arguments'] = NULL;
$arguments1537['extensionName'] = NULL;
$arguments1537['languageKey'] = NULL;
$arguments1537['alternativeLanguageKeys'] = NULL;
$arguments1537['key'] = 'tx_cart_domain_model_order_address.country';

$output1536 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1537, $renderChildrenClosure1538, $renderingContext)]);

$output1536 .= '
                                                <em>*</em>
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure1540 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1539 = array();
$arguments1539['additionalAttributes'] = NULL;
$arguments1539['data'] = NULL;
$arguments1539['aria'] = NULL;
$arguments1539['name'] = NULL;
$arguments1539['value'] = NULL;
$arguments1539['property'] = NULL;
$arguments1539['class'] = NULL;
$arguments1539['dir'] = NULL;
$arguments1539['id'] = NULL;
$arguments1539['lang'] = NULL;
$arguments1539['style'] = NULL;
$arguments1539['title'] = NULL;
$arguments1539['accesskey'] = NULL;
$arguments1539['tabindex'] = NULL;
$arguments1539['onclick'] = NULL;
$arguments1539['size'] = NULL;
$arguments1539['disabled'] = NULL;
$arguments1539['options'] = NULL;
$arguments1539['optionsAfterContent'] = false;
$arguments1539['optionValueField'] = NULL;
$arguments1539['optionLabelField'] = NULL;
$arguments1539['sortByOptionLabel'] = false;
$arguments1539['selectAllByDefault'] = false;
$arguments1539['errorClass'] = 'f3-form-error';
$arguments1539['prependOptionLabel'] = NULL;
$arguments1539['prependOptionValue'] = NULL;
$arguments1539['multiple'] = false;
$arguments1539['required'] = false;
$arguments1539['translationKey'] = NULL;
$arguments1539['id'] = 'shippingAddress-country';
$arguments1539['class'] = 'form-control';
$arguments1539['name'] = 'shippingAddress[country]';
$array1541 = array (
);$arguments1539['value'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingCountry', $array1541);
$array1542 = array (
);$arguments1539['options'] = $renderingContext->getVariableProvider()->getByPath('settings.allowedCountries', $array1542);
$arguments1539['translationKey'] = 'tx_cart.settings.allowed_countries';
// Rendering Boolean node
// Rendering Array
$array1543 = array();
$array1543['0'] = 'true';

$expression1544 = function($context) {return TRUE;};
$arguments1539['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1544(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1543)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1546 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1545 = array();
$arguments1545['then'] = NULL;
$arguments1545['else'] = NULL;
$arguments1545['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1547 = array();
$array1548 = array (
);$array1547['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1548);

$expression1549 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1545['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1549(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1547)
					),
					$renderingContext
				);
$arguments1545['then'] = 'true';
$arguments1539['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1545, $renderChildrenClosure1546, $renderingContext);
// Rendering Array
$array1550 = array();
$array1550['disable-shipping'] = 'true';
$arguments1539['data'] = $array1550;

$output1536 .= Extcode\Cart\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments1539, $renderChildrenClosure1540, $renderingContext);

$output1536 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1552 = function() use ($renderingContext, $self) {
$output1553 = '';

$output1553 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1555 = function() use ($renderingContext, $self) {
$output1559 = '';

$output1559 .= '
                                                        <div class="validation-error alert alert-danger">';
$array1560 = array (
);
$output1559 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.country.0.message', $array1560)]);

$output1559 .= '</div>
                                                    ';
return $output1559;
};
$arguments1554 = array();
$arguments1554['then'] = NULL;
$arguments1554['else'] = NULL;
$arguments1554['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1556 = array();
$array1557 = array (
);$array1556['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.country', $array1557);

$expression1558 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1554['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1558(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1556)
					),
					$renderingContext
				);
$arguments1554['__thenClosure'] = $renderChildrenClosure1555;

$output1553 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1554, $renderChildrenClosure1555, $renderingContext);

$output1553 .= '
                                                ';
return $output1553;
};
$arguments1551 = array();
$arguments1551['for'] = '';
$arguments1551['as'] = 'validationResults';
$arguments1551['for'] = 'shippingAddress';

$output1536 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1551, $renderChildrenClosure1552, $renderingContext);

$output1536 .= '
                                            </div>
                                        ';
return $output1536;
};
$arguments1534 = array();

$output1533 .= '';

$output1533 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1562 = function() use ($renderingContext, $self) {
$output1563 = '';

$output1563 .= '
                                            <label for="shippingAddress-country">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1565 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1564 = array();
$arguments1564['key'] = NULL;
$arguments1564['id'] = NULL;
$arguments1564['default'] = NULL;
$arguments1564['arguments'] = NULL;
$arguments1564['extensionName'] = NULL;
$arguments1564['languageKey'] = NULL;
$arguments1564['alternativeLanguageKeys'] = NULL;
$arguments1564['key'] = 'tx_cart_domain_model_order_address.country';

$output1563 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1564, $renderChildrenClosure1565, $renderingContext)]);

$output1563 .= '
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure1567 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1566 = array();
$arguments1566['additionalAttributes'] = NULL;
$arguments1566['data'] = NULL;
$arguments1566['aria'] = NULL;
$arguments1566['name'] = NULL;
$arguments1566['value'] = NULL;
$arguments1566['property'] = NULL;
$arguments1566['class'] = NULL;
$arguments1566['dir'] = NULL;
$arguments1566['id'] = NULL;
$arguments1566['lang'] = NULL;
$arguments1566['style'] = NULL;
$arguments1566['title'] = NULL;
$arguments1566['accesskey'] = NULL;
$arguments1566['tabindex'] = NULL;
$arguments1566['onclick'] = NULL;
$arguments1566['size'] = NULL;
$arguments1566['disabled'] = NULL;
$arguments1566['options'] = NULL;
$arguments1566['optionsAfterContent'] = false;
$arguments1566['optionValueField'] = NULL;
$arguments1566['optionLabelField'] = NULL;
$arguments1566['sortByOptionLabel'] = false;
$arguments1566['selectAllByDefault'] = false;
$arguments1566['errorClass'] = 'f3-form-error';
$arguments1566['prependOptionLabel'] = NULL;
$arguments1566['prependOptionValue'] = NULL;
$arguments1566['multiple'] = false;
$arguments1566['required'] = false;
$arguments1566['translationKey'] = NULL;
$arguments1566['id'] = 'shippingAddress-country';
$arguments1566['class'] = 'form-control';
$arguments1566['name'] = 'shippingAddress[country]';
$array1568 = array (
);$arguments1566['value'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingCountry', $array1568);
$array1569 = array (
);$arguments1566['options'] = $renderingContext->getVariableProvider()->getByPath('settings.allowedCountries', $array1569);
$arguments1566['translationKey'] = 'tx_cart.settings.allowed_countries';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1570 = array();
$arguments1570['then'] = NULL;
$arguments1570['else'] = NULL;
$arguments1570['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1572 = array();
$array1573 = array (
);$array1572['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1573);

$expression1574 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1570['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1574(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1572)
					),
					$renderingContext
				);
$arguments1570['then'] = 'true';
$arguments1566['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1570, $renderChildrenClosure1571, $renderingContext);
// Rendering Array
$array1575 = array();
$array1575['disable-shipping'] = 'true';
$arguments1566['data'] = $array1575;

$output1563 .= Extcode\Cart\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments1566, $renderChildrenClosure1567, $renderingContext);

$output1563 .= '
                                            </div>
                                        ';
return $output1563;
};
$arguments1561 = array();
$arguments1561['if'] = NULL;

$output1533 .= '';

$output1533 .= '
                                    ';
return $output1533;
};
$arguments1488 = array();
$arguments1488['then'] = NULL;
$arguments1488['else'] = NULL;
$arguments1488['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1528 = array();
// Rendering Array
$array1529 = array();
$array1530 = array (
);$array1529['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.country.validator', $array1530);
$array1528['0'] = $array1529;
$array1528['1'] = ' == ';
// Rendering Array
$array1531 = array();
$array1531['0'] = 'NotEmpty';
$array1528['2'] = $array1531;

$expression1532 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1488['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1532(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1528)
					),
					$renderingContext
				);
$arguments1488['__thenClosure'] = function() use ($renderingContext, $self) {
$output1490 = '';

$output1490 .= '
                                            <label for="shippingAddress-country" class="required">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1491 = array();
$arguments1491['key'] = NULL;
$arguments1491['id'] = NULL;
$arguments1491['default'] = NULL;
$arguments1491['arguments'] = NULL;
$arguments1491['extensionName'] = NULL;
$arguments1491['languageKey'] = NULL;
$arguments1491['alternativeLanguageKeys'] = NULL;
$arguments1491['key'] = 'tx_cart_domain_model_order_address.country';

$output1490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1491, $renderChildrenClosure1492, $renderingContext)]);

$output1490 .= '
                                                <em>*</em>
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure1494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1493 = array();
$arguments1493['additionalAttributes'] = NULL;
$arguments1493['data'] = NULL;
$arguments1493['aria'] = NULL;
$arguments1493['name'] = NULL;
$arguments1493['value'] = NULL;
$arguments1493['property'] = NULL;
$arguments1493['class'] = NULL;
$arguments1493['dir'] = NULL;
$arguments1493['id'] = NULL;
$arguments1493['lang'] = NULL;
$arguments1493['style'] = NULL;
$arguments1493['title'] = NULL;
$arguments1493['accesskey'] = NULL;
$arguments1493['tabindex'] = NULL;
$arguments1493['onclick'] = NULL;
$arguments1493['size'] = NULL;
$arguments1493['disabled'] = NULL;
$arguments1493['options'] = NULL;
$arguments1493['optionsAfterContent'] = false;
$arguments1493['optionValueField'] = NULL;
$arguments1493['optionLabelField'] = NULL;
$arguments1493['sortByOptionLabel'] = false;
$arguments1493['selectAllByDefault'] = false;
$arguments1493['errorClass'] = 'f3-form-error';
$arguments1493['prependOptionLabel'] = NULL;
$arguments1493['prependOptionValue'] = NULL;
$arguments1493['multiple'] = false;
$arguments1493['required'] = false;
$arguments1493['translationKey'] = NULL;
$arguments1493['id'] = 'shippingAddress-country';
$arguments1493['class'] = 'form-control';
$arguments1493['name'] = 'shippingAddress[country]';
$array1495 = array (
);$arguments1493['value'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingCountry', $array1495);
$array1496 = array (
);$arguments1493['options'] = $renderingContext->getVariableProvider()->getByPath('settings.allowedCountries', $array1496);
$arguments1493['translationKey'] = 'tx_cart.settings.allowed_countries';
// Rendering Boolean node
// Rendering Array
$array1497 = array();
$array1497['0'] = 'true';

$expression1498 = function($context) {return TRUE;};
$arguments1493['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1498(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1497)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1500 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1499 = array();
$arguments1499['then'] = NULL;
$arguments1499['else'] = NULL;
$arguments1499['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1501 = array();
$array1502 = array (
);$array1501['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1502);

$expression1503 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1499['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1503(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1501)
					),
					$renderingContext
				);
$arguments1499['then'] = 'true';
$arguments1493['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1499, $renderChildrenClosure1500, $renderingContext);
// Rendering Array
$array1504 = array();
$array1504['disable-shipping'] = 'true';
$arguments1493['data'] = $array1504;

$output1490 .= Extcode\Cart\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments1493, $renderChildrenClosure1494, $renderingContext);

$output1490 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1506 = function() use ($renderingContext, $self) {
$output1507 = '';

$output1507 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1509 = function() use ($renderingContext, $self) {
$output1513 = '';

$output1513 .= '
                                                        <div class="validation-error alert alert-danger">';
$array1514 = array (
);
$output1513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.country.0.message', $array1514)]);

$output1513 .= '</div>
                                                    ';
return $output1513;
};
$arguments1508 = array();
$arguments1508['then'] = NULL;
$arguments1508['else'] = NULL;
$arguments1508['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1510 = array();
$array1511 = array (
);$array1510['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.country', $array1511);

$expression1512 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1508['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1512(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1510)
					),
					$renderingContext
				);
$arguments1508['__thenClosure'] = $renderChildrenClosure1509;

$output1507 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1508, $renderChildrenClosure1509, $renderingContext);

$output1507 .= '
                                                ';
return $output1507;
};
$arguments1505 = array();
$arguments1505['for'] = '';
$arguments1505['as'] = 'validationResults';
$arguments1505['for'] = 'shippingAddress';

$output1490 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1505, $renderChildrenClosure1506, $renderingContext);

$output1490 .= '
                                            </div>
                                        ';
return $output1490;
};
$arguments1488['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1515 = '';

$output1515 .= '
                                            <label for="shippingAddress-country">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1517 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1516 = array();
$arguments1516['key'] = NULL;
$arguments1516['id'] = NULL;
$arguments1516['default'] = NULL;
$arguments1516['arguments'] = NULL;
$arguments1516['extensionName'] = NULL;
$arguments1516['languageKey'] = NULL;
$arguments1516['alternativeLanguageKeys'] = NULL;
$arguments1516['key'] = 'tx_cart_domain_model_order_address.country';

$output1515 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1516, $renderChildrenClosure1517, $renderingContext)]);

$output1515 .= '
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure1519 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1518 = array();
$arguments1518['additionalAttributes'] = NULL;
$arguments1518['data'] = NULL;
$arguments1518['aria'] = NULL;
$arguments1518['name'] = NULL;
$arguments1518['value'] = NULL;
$arguments1518['property'] = NULL;
$arguments1518['class'] = NULL;
$arguments1518['dir'] = NULL;
$arguments1518['id'] = NULL;
$arguments1518['lang'] = NULL;
$arguments1518['style'] = NULL;
$arguments1518['title'] = NULL;
$arguments1518['accesskey'] = NULL;
$arguments1518['tabindex'] = NULL;
$arguments1518['onclick'] = NULL;
$arguments1518['size'] = NULL;
$arguments1518['disabled'] = NULL;
$arguments1518['options'] = NULL;
$arguments1518['optionsAfterContent'] = false;
$arguments1518['optionValueField'] = NULL;
$arguments1518['optionLabelField'] = NULL;
$arguments1518['sortByOptionLabel'] = false;
$arguments1518['selectAllByDefault'] = false;
$arguments1518['errorClass'] = 'f3-form-error';
$arguments1518['prependOptionLabel'] = NULL;
$arguments1518['prependOptionValue'] = NULL;
$arguments1518['multiple'] = false;
$arguments1518['required'] = false;
$arguments1518['translationKey'] = NULL;
$arguments1518['id'] = 'shippingAddress-country';
$arguments1518['class'] = 'form-control';
$arguments1518['name'] = 'shippingAddress[country]';
$array1520 = array (
);$arguments1518['value'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingCountry', $array1520);
$array1521 = array (
);$arguments1518['options'] = $renderingContext->getVariableProvider()->getByPath('settings.allowedCountries', $array1521);
$arguments1518['translationKey'] = 'tx_cart.settings.allowed_countries';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1523 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1522 = array();
$arguments1522['then'] = NULL;
$arguments1522['else'] = NULL;
$arguments1522['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1524 = array();
$array1525 = array (
);$array1524['0'] = $renderingContext->getVariableProvider()->getByPath('cart.shippingSameAsBilling', $array1525);

$expression1526 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1522['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1526(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1524)
					),
					$renderingContext
				);
$arguments1522['then'] = 'true';
$arguments1518['disabled'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1522, $renderChildrenClosure1523, $renderingContext);
// Rendering Array
$array1527 = array();
$array1527['disable-shipping'] = 'true';
$arguments1518['data'] = $array1527;

$output1515 .= Extcode\Cart\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments1518, $renderChildrenClosure1519, $renderingContext);

$output1515 .= '
                                            </div>
                                        ';
return $output1515;
};

$output1487 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1488, $renderChildrenClosure1489, $renderingContext);

$output1487 .= '
                                </div>
                            </div>
                        </div>
                    ';
return $output1487;
};
$arguments1480 = array();
$arguments1480['then'] = NULL;
$arguments1480['else'] = NULL;
$arguments1480['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1482 = array();
// Rendering Array
$array1483 = array();
$array1484 = array (
);$array1483['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.shippingAddress.fields.country.validator', $array1484);
$array1482['0'] = $array1483;
$array1482['1'] = ' != ';
// Rendering Array
$array1485 = array();
$array1485['0'] = 'Empty';
$array1482['2'] = $array1485;

$expression1486 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1480['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1486(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1482)
					),
					$renderingContext
				);
$arguments1480['__thenClosure'] = $renderChildrenClosure1481;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1480, $renderChildrenClosure1481, $renderingContext);

$output0 .= '
                </div>
            </div>
        </fieldset>
    </div>
</div>

';

return $output0;
}


}
#