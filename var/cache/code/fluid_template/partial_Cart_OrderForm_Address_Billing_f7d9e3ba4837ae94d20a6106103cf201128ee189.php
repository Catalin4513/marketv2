<?php

class partial_Cart_OrderForm_Address_Billing_f7d9e3ba4837ae94d20a6106103cf201128ee189 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div id="checkout-step-billing-address" class="checkout-step bg-light-grey" data-ajax-country data-ajax-currency>
    <h5 class="checkout-step-title">
        <span class="checkout-step-number"></span>
        <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'tx_cart.controller.order.action.show_cart.block-header.billing_address';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</span>
    </h5>
    <div class="checkout-step-content">
        <fieldset>
            <div class="checkout-step-content-list">
                <div class="checkout-step-fields">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                        <div class="field salutation">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                                    <label for="billingAddress-salutation" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['key'] = NULL;
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['languageKey'] = NULL;
$arguments46['alternativeLanguageKeys'] = NULL;
$arguments46['key'] = 'tx_cart_domain_model_order_address.salutation';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output45 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['aria'] = NULL;
$arguments48['name'] = NULL;
$arguments48['value'] = NULL;
$arguments48['property'] = NULL;
$arguments48['autofocus'] = NULL;
$arguments48['disabled'] = NULL;
$arguments48['maxlength'] = NULL;
$arguments48['readonly'] = NULL;
$arguments48['size'] = NULL;
$arguments48['placeholder'] = NULL;
$arguments48['pattern'] = NULL;
$arguments48['errorClass'] = 'f3-form-error';
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['required'] = false;
$arguments48['type'] = 'text';
$arguments48['id'] = 'billingAddress-salutation';
$arguments48['class'] = 'form-control';
$arguments48['name'] = 'billingAddress[salutation]';
$array50 = array (
);$arguments48['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.salutation', $array50);
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array51['0'] = 'true';

$expression52 = function($context) {return TRUE;};
$arguments48['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output45 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
                                                <div class="validation-error alert alert-danger">';
$array62 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.salutation.0.message', $array62)]);

$output61 .= '</div>
                                            ';
return $output61;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.salutation', $array59);

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$arguments56['__thenClosure'] = $renderChildrenClosure57;

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                                        ';
return $output55;
};
$arguments53 = array();
$arguments53['for'] = '';
$arguments53['as'] = 'validationResults';
$arguments53['for'] = 'billingAddress';

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output45 .= '
                                    </div>
                                ';
return $output45;
};
$arguments43 = array();

$output42 .= '';

$output42 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                                    <label for="billingAddress-salutation">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['key'] = NULL;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['languageKey'] = NULL;
$arguments66['alternativeLanguageKeys'] = NULL;
$arguments66['key'] = 'tx_cart_domain_model_order_address.salutation';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output65 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['aria'] = NULL;
$arguments68['name'] = NULL;
$arguments68['value'] = NULL;
$arguments68['property'] = NULL;
$arguments68['autofocus'] = NULL;
$arguments68['disabled'] = NULL;
$arguments68['maxlength'] = NULL;
$arguments68['readonly'] = NULL;
$arguments68['size'] = NULL;
$arguments68['placeholder'] = NULL;
$arguments68['pattern'] = NULL;
$arguments68['errorClass'] = 'f3-form-error';
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['required'] = false;
$arguments68['type'] = 'text';
$arguments68['id'] = 'billingAddress-salutation';
$arguments68['class'] = 'form-control';
$arguments68['name'] = 'billingAddress[salutation]';
$array70 = array (
);$arguments68['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.salutation', $array70);

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output65 .= '
                                    </div>
                                ';
return $output65;
};
$arguments63 = array();
$arguments63['if'] = NULL;

$output42 .= '';

$output42 .= '
                            ';
return $output42;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.salutation.validator', $array39);
$array37['0'] = $array38;
$array37['1'] = ' == ';
// Rendering Array
$array40 = array();
$array40['0'] = 'NotEmpty';
$array37['2'] = $array40;

$expression41 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                                    <label for="billingAddress-salutation" class="required">
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
$arguments14['key'] = 'tx_cart_domain_model_order_address.salutation';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['aria'] = NULL;
$arguments16['name'] = NULL;
$arguments16['value'] = NULL;
$arguments16['property'] = NULL;
$arguments16['autofocus'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['maxlength'] = NULL;
$arguments16['readonly'] = NULL;
$arguments16['size'] = NULL;
$arguments16['placeholder'] = NULL;
$arguments16['pattern'] = NULL;
$arguments16['errorClass'] = 'f3-form-error';
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['required'] = false;
$arguments16['type'] = 'text';
$arguments16['id'] = 'billingAddress-salutation';
$arguments16['class'] = 'form-control';
$arguments16['name'] = 'billingAddress[salutation]';
$array18 = array (
);$arguments16['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.salutation', $array18);
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array19['0'] = 'true';

$expression20 = function($context) {return TRUE;};
$arguments16['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output13 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
                                                <div class="validation-error alert alert-danger">';
$array30 = array (
);
$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.salutation.0.message', $array30)]);

$output29 .= '</div>
                                            ';
return $output29;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.salutation', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                                        ';
return $output23;
};
$arguments21 = array();
$arguments21['for'] = '';
$arguments21['as'] = 'validationResults';
$arguments21['for'] = 'billingAddress';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output13 .= '
                                    </div>
                                ';
return $output13;
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                                    <label for="billingAddress-salutation">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['key'] = NULL;
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['languageKey'] = NULL;
$arguments32['alternativeLanguageKeys'] = NULL;
$arguments32['key'] = 'tx_cart_domain_model_order_address.salutation';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output31 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['aria'] = NULL;
$arguments34['name'] = NULL;
$arguments34['value'] = NULL;
$arguments34['property'] = NULL;
$arguments34['autofocus'] = NULL;
$arguments34['disabled'] = NULL;
$arguments34['maxlength'] = NULL;
$arguments34['readonly'] = NULL;
$arguments34['size'] = NULL;
$arguments34['placeholder'] = NULL;
$arguments34['pattern'] = NULL;
$arguments34['errorClass'] = 'f3-form-error';
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['required'] = false;
$arguments34['type'] = 'text';
$arguments34['id'] = 'billingAddress-salutation';
$arguments34['class'] = 'form-control';
$arguments34['name'] = 'billingAddress[salutation]';
$array36 = array (
);$arguments34['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.salutation', $array36);

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output31 .= '
                                    </div>
                                ';
return $output31;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
                        </div>
                    ';
return $output10;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.salutation.validator', $array7);
$array5['0'] = $array6;
$array5['1'] = ' != ';
// Rendering Array
$array8 = array();
$array8['0'] = 'Empty';
$array5['2'] = $array8;

$expression9 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
                        <div class="field title">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                                    <label for="billingAddress-title" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['languageKey'] = NULL;
$arguments114['alternativeLanguageKeys'] = NULL;
$arguments114['key'] = 'tx_cart_domain_model_order_address.title';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output113 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['aria'] = NULL;
$arguments116['name'] = NULL;
$arguments116['value'] = NULL;
$arguments116['property'] = NULL;
$arguments116['autofocus'] = NULL;
$arguments116['disabled'] = NULL;
$arguments116['maxlength'] = NULL;
$arguments116['readonly'] = NULL;
$arguments116['size'] = NULL;
$arguments116['placeholder'] = NULL;
$arguments116['pattern'] = NULL;
$arguments116['errorClass'] = 'f3-form-error';
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['required'] = false;
$arguments116['type'] = 'text';
$arguments116['id'] = 'billingAddress-title';
$arguments116['class'] = 'form-control';
$arguments116['name'] = 'billingAddress[title]';
$array118 = array (
);$arguments116['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.title', $array118);
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array119['0'] = 'true';

$expression120 = function($context) {return TRUE;};
$arguments116['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output113 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                                                <div class="validation-error alert alert-danger">';
$array130 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.title.0.message', $array130)]);

$output129 .= '</div>
                                            ';
return $output129;
};
$arguments124 = array();
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.title', $array127);

$expression128 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments124['__thenClosure'] = $renderChildrenClosure125;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
                                        ';
return $output123;
};
$arguments121 = array();
$arguments121['for'] = '';
$arguments121['as'] = 'validationResults';
$arguments121['for'] = 'billingAddress';

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output113 .= '
                                    </div>
                                ';
return $output113;
};
$arguments111 = array();

$output110 .= '';

$output110 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                                    <label for="billingAddress-title">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['key'] = NULL;
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['languageKey'] = NULL;
$arguments134['alternativeLanguageKeys'] = NULL;
$arguments134['key'] = 'tx_cart_domain_model_order_address.title';

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext)]);

$output133 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['additionalAttributes'] = NULL;
$arguments136['data'] = NULL;
$arguments136['aria'] = NULL;
$arguments136['name'] = NULL;
$arguments136['value'] = NULL;
$arguments136['property'] = NULL;
$arguments136['autofocus'] = NULL;
$arguments136['disabled'] = NULL;
$arguments136['maxlength'] = NULL;
$arguments136['readonly'] = NULL;
$arguments136['size'] = NULL;
$arguments136['placeholder'] = NULL;
$arguments136['pattern'] = NULL;
$arguments136['errorClass'] = 'f3-form-error';
$arguments136['class'] = NULL;
$arguments136['dir'] = NULL;
$arguments136['id'] = NULL;
$arguments136['lang'] = NULL;
$arguments136['style'] = NULL;
$arguments136['title'] = NULL;
$arguments136['accesskey'] = NULL;
$arguments136['tabindex'] = NULL;
$arguments136['onclick'] = NULL;
$arguments136['required'] = false;
$arguments136['type'] = 'text';
$arguments136['id'] = 'billingAddress-title';
$arguments136['class'] = 'form-control';
$arguments136['name'] = 'billingAddress[title]';
$array138 = array (
);$arguments136['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.title', $array138);

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output133 .= '
                                    </div>
                                ';
return $output133;
};
$arguments131 = array();
$arguments131['if'] = NULL;

$output110 .= '';

$output110 .= '
                            ';
return $output110;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.title.validator', $array107);
$array105['0'] = $array106;
$array105['1'] = ' == ';
// Rendering Array
$array108 = array();
$array108['0'] = 'NotEmpty';
$array105['2'] = $array108;

$expression109 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                                    <label for="billingAddress-title" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['languageKey'] = NULL;
$arguments82['alternativeLanguageKeys'] = NULL;
$arguments82['key'] = 'tx_cart_domain_model_order_address.title';

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output81 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['aria'] = NULL;
$arguments84['name'] = NULL;
$arguments84['value'] = NULL;
$arguments84['property'] = NULL;
$arguments84['autofocus'] = NULL;
$arguments84['disabled'] = NULL;
$arguments84['maxlength'] = NULL;
$arguments84['readonly'] = NULL;
$arguments84['size'] = NULL;
$arguments84['placeholder'] = NULL;
$arguments84['pattern'] = NULL;
$arguments84['errorClass'] = 'f3-form-error';
$arguments84['class'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['required'] = false;
$arguments84['type'] = 'text';
$arguments84['id'] = 'billingAddress-title';
$arguments84['class'] = 'form-control';
$arguments84['name'] = 'billingAddress[title]';
$array86 = array (
);$arguments84['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.title', $array86);
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array87['0'] = 'true';

$expression88 = function($context) {return TRUE;};
$arguments84['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output81 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
                                                <div class="validation-error alert alert-danger">';
$array98 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.title.0.message', $array98)]);

$output97 .= '</div>
                                            ';
return $output97;
};
$arguments92 = array();
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$arguments92['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.title', $array95);

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments92['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);
$arguments92['__thenClosure'] = $renderChildrenClosure93;

$output91 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
                                        ';
return $output91;
};
$arguments89 = array();
$arguments89['for'] = '';
$arguments89['as'] = 'validationResults';
$arguments89['for'] = 'billingAddress';

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output81 .= '
                                    </div>
                                ';
return $output81;
};
$arguments79['__elseClosures'][] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
                                    <label for="billingAddress-title">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['key'] = NULL;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['languageKey'] = NULL;
$arguments100['alternativeLanguageKeys'] = NULL;
$arguments100['key'] = 'tx_cart_domain_model_order_address.title';

$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output99 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['aria'] = NULL;
$arguments102['name'] = NULL;
$arguments102['value'] = NULL;
$arguments102['property'] = NULL;
$arguments102['autofocus'] = NULL;
$arguments102['disabled'] = NULL;
$arguments102['maxlength'] = NULL;
$arguments102['readonly'] = NULL;
$arguments102['size'] = NULL;
$arguments102['placeholder'] = NULL;
$arguments102['pattern'] = NULL;
$arguments102['errorClass'] = 'f3-form-error';
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['required'] = false;
$arguments102['type'] = 'text';
$arguments102['id'] = 'billingAddress-title';
$arguments102['class'] = 'form-control';
$arguments102['name'] = 'billingAddress[title]';
$array104 = array (
);$arguments102['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.title', $array104);

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output99 .= '
                                    </div>
                                ';
return $output99;
};

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
                        </div>
                    ';
return $output78;
};
$arguments71 = array();
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.title.validator', $array75);
$array73['0'] = $array74;
$array73['1'] = ' != ';
// Rendering Array
$array76 = array();
$array76['0'] = 'Empty';
$array73['2'] = $array76;

$expression77 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments71['__thenClosure'] = $renderChildrenClosure72;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output0 .= '

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
                        <div class="field first-name">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                                    <label for="billingAddress-firstName" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['languageKey'] = NULL;
$arguments182['alternativeLanguageKeys'] = NULL;
$arguments182['key'] = 'tx_cart_domain_model_order_address.first_name';

$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);

$output181 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['additionalAttributes'] = NULL;
$arguments184['data'] = NULL;
$arguments184['aria'] = NULL;
$arguments184['name'] = NULL;
$arguments184['value'] = NULL;
$arguments184['property'] = NULL;
$arguments184['autofocus'] = NULL;
$arguments184['disabled'] = NULL;
$arguments184['maxlength'] = NULL;
$arguments184['readonly'] = NULL;
$arguments184['size'] = NULL;
$arguments184['placeholder'] = NULL;
$arguments184['pattern'] = NULL;
$arguments184['errorClass'] = 'f3-form-error';
$arguments184['class'] = NULL;
$arguments184['dir'] = NULL;
$arguments184['id'] = NULL;
$arguments184['lang'] = NULL;
$arguments184['style'] = NULL;
$arguments184['title'] = NULL;
$arguments184['accesskey'] = NULL;
$arguments184['tabindex'] = NULL;
$arguments184['onclick'] = NULL;
$arguments184['required'] = false;
$arguments184['type'] = 'text';
$arguments184['id'] = 'billingAddress-firstName';
$arguments184['class'] = 'form-control';
$arguments184['name'] = 'billingAddress[firstName]';
$array186 = array (
);$arguments184['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.firstName', $array186);
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array187['0'] = 'true';

$expression188 = function($context) {return TRUE;};
$arguments184['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output181 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
                                                <div class="validation-error alert alert-danger">';
$array198 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.firstName.0.message', $array198)]);

$output197 .= '</div>
                                            ';
return $output197;
};
$arguments192 = array();
$arguments192['then'] = NULL;
$arguments192['else'] = NULL;
$arguments192['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array194 = array();
$array195 = array (
);$array194['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.firstName', $array195);

$expression196 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments192['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression196(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array194)
					),
					$renderingContext
				);
$arguments192['__thenClosure'] = $renderChildrenClosure193;

$output191 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
                                        ';
return $output191;
};
$arguments189 = array();
$arguments189['for'] = '';
$arguments189['as'] = 'validationResults';
$arguments189['for'] = 'billingAddress';

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output181 .= '
                                    </div>
                                ';
return $output181;
};
$arguments179 = array();

$output178 .= '';

$output178 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
                                    <label for="billingAddress-firstName">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['key'] = NULL;
$arguments202['id'] = NULL;
$arguments202['default'] = NULL;
$arguments202['arguments'] = NULL;
$arguments202['extensionName'] = NULL;
$arguments202['languageKey'] = NULL;
$arguments202['alternativeLanguageKeys'] = NULL;
$arguments202['key'] = 'tx_cart_domain_model_order_address.first_name';

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext)]);

$output201 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['additionalAttributes'] = NULL;
$arguments204['data'] = NULL;
$arguments204['aria'] = NULL;
$arguments204['name'] = NULL;
$arguments204['value'] = NULL;
$arguments204['property'] = NULL;
$arguments204['autofocus'] = NULL;
$arguments204['disabled'] = NULL;
$arguments204['maxlength'] = NULL;
$arguments204['readonly'] = NULL;
$arguments204['size'] = NULL;
$arguments204['placeholder'] = NULL;
$arguments204['pattern'] = NULL;
$arguments204['errorClass'] = 'f3-form-error';
$arguments204['class'] = NULL;
$arguments204['dir'] = NULL;
$arguments204['id'] = NULL;
$arguments204['lang'] = NULL;
$arguments204['style'] = NULL;
$arguments204['title'] = NULL;
$arguments204['accesskey'] = NULL;
$arguments204['tabindex'] = NULL;
$arguments204['onclick'] = NULL;
$arguments204['required'] = false;
$arguments204['type'] = 'text';
$arguments204['id'] = 'billingAddress-firstName';
$arguments204['class'] = 'form-control';
$arguments204['name'] = 'billingAddress[firstName]';
$array206 = array (
);$arguments204['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.firstName', $array206);

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output201 .= '
                                    </div>
                                ';
return $output201;
};
$arguments199 = array();
$arguments199['if'] = NULL;

$output178 .= '';

$output178 .= '
                            ';
return $output178;
};
$arguments147 = array();
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$arguments147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array173 = array();
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.firstName.validator', $array175);
$array173['0'] = $array174;
$array173['1'] = ' == ';
// Rendering Array
$array176 = array();
$array176['0'] = 'NotEmpty';
$array173['2'] = $array176;

$expression177 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)
					),
					$renderingContext
				);
$arguments147['__thenClosure'] = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                                    <label for="billingAddress-firstName" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['key'] = NULL;
$arguments150['id'] = NULL;
$arguments150['default'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['extensionName'] = NULL;
$arguments150['languageKey'] = NULL;
$arguments150['alternativeLanguageKeys'] = NULL;
$arguments150['key'] = 'tx_cart_domain_model_order_address.first_name';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext)]);

$output149 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['aria'] = NULL;
$arguments152['name'] = NULL;
$arguments152['value'] = NULL;
$arguments152['property'] = NULL;
$arguments152['autofocus'] = NULL;
$arguments152['disabled'] = NULL;
$arguments152['maxlength'] = NULL;
$arguments152['readonly'] = NULL;
$arguments152['size'] = NULL;
$arguments152['placeholder'] = NULL;
$arguments152['pattern'] = NULL;
$arguments152['errorClass'] = 'f3-form-error';
$arguments152['class'] = NULL;
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['title'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$arguments152['required'] = false;
$arguments152['type'] = 'text';
$arguments152['id'] = 'billingAddress-firstName';
$arguments152['class'] = 'form-control';
$arguments152['name'] = 'billingAddress[firstName]';
$array154 = array (
);$arguments152['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.firstName', $array154);
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array155['0'] = 'true';

$expression156 = function($context) {return TRUE;};
$arguments152['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output149 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
                                                <div class="validation-error alert alert-danger">';
$array166 = array (
);
$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.firstName.0.message', $array166)]);

$output165 .= '</div>
                                            ';
return $output165;
};
$arguments160 = array();
$arguments160['then'] = NULL;
$arguments160['else'] = NULL;
$arguments160['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.firstName', $array163);

$expression164 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments160['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array162)
					),
					$renderingContext
				);
$arguments160['__thenClosure'] = $renderChildrenClosure161;

$output159 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output159 .= '
                                        ';
return $output159;
};
$arguments157 = array();
$arguments157['for'] = '';
$arguments157['as'] = 'validationResults';
$arguments157['for'] = 'billingAddress';

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output149 .= '
                                    </div>
                                ';
return $output149;
};
$arguments147['__elseClosures'][] = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                                    <label for="billingAddress-firstName">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['key'] = NULL;
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['extensionName'] = NULL;
$arguments168['languageKey'] = NULL;
$arguments168['alternativeLanguageKeys'] = NULL;
$arguments168['key'] = 'tx_cart_domain_model_order_address.first_name';

$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext)]);

$output167 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['additionalAttributes'] = NULL;
$arguments170['data'] = NULL;
$arguments170['aria'] = NULL;
$arguments170['name'] = NULL;
$arguments170['value'] = NULL;
$arguments170['property'] = NULL;
$arguments170['autofocus'] = NULL;
$arguments170['disabled'] = NULL;
$arguments170['maxlength'] = NULL;
$arguments170['readonly'] = NULL;
$arguments170['size'] = NULL;
$arguments170['placeholder'] = NULL;
$arguments170['pattern'] = NULL;
$arguments170['errorClass'] = 'f3-form-error';
$arguments170['class'] = NULL;
$arguments170['dir'] = NULL;
$arguments170['id'] = NULL;
$arguments170['lang'] = NULL;
$arguments170['style'] = NULL;
$arguments170['title'] = NULL;
$arguments170['accesskey'] = NULL;
$arguments170['tabindex'] = NULL;
$arguments170['onclick'] = NULL;
$arguments170['required'] = false;
$arguments170['type'] = 'text';
$arguments170['id'] = 'billingAddress-firstName';
$arguments170['class'] = 'form-control';
$arguments170['name'] = 'billingAddress[firstName]';
$array172 = array (
);$arguments170['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.firstName', $array172);

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output167 .= '
                                    </div>
                                ';
return $output167;
};

$output146 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
                        </div>
                    ';
return $output146;
};
$arguments139 = array();
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$arguments139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.firstName.validator', $array143);
$array141['0'] = $array142;
$array141['1'] = ' != ';
// Rendering Array
$array144 = array();
$array144['0'] = 'Empty';
$array141['2'] = $array144;

$expression145 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['__thenClosure'] = $renderChildrenClosure140;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output0 .= '

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
                        <div class="field last-name">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
                                    <label for="billingAddress-lastName" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['key'] = NULL;
$arguments250['id'] = NULL;
$arguments250['default'] = NULL;
$arguments250['arguments'] = NULL;
$arguments250['extensionName'] = NULL;
$arguments250['languageKey'] = NULL;
$arguments250['alternativeLanguageKeys'] = NULL;
$arguments250['key'] = 'tx_cart_domain_model_order_address.last_name';

$output249 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext)]);

$output249 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['additionalAttributes'] = NULL;
$arguments252['data'] = NULL;
$arguments252['aria'] = NULL;
$arguments252['name'] = NULL;
$arguments252['value'] = NULL;
$arguments252['property'] = NULL;
$arguments252['autofocus'] = NULL;
$arguments252['disabled'] = NULL;
$arguments252['maxlength'] = NULL;
$arguments252['readonly'] = NULL;
$arguments252['size'] = NULL;
$arguments252['placeholder'] = NULL;
$arguments252['pattern'] = NULL;
$arguments252['errorClass'] = 'f3-form-error';
$arguments252['class'] = NULL;
$arguments252['dir'] = NULL;
$arguments252['id'] = NULL;
$arguments252['lang'] = NULL;
$arguments252['style'] = NULL;
$arguments252['title'] = NULL;
$arguments252['accesskey'] = NULL;
$arguments252['tabindex'] = NULL;
$arguments252['onclick'] = NULL;
$arguments252['required'] = false;
$arguments252['type'] = 'text';
$arguments252['id'] = 'billingAddress-lastName';
$arguments252['class'] = 'form-control';
$arguments252['name'] = 'billingAddress[lastName]';
$array254 = array (
);$arguments252['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.lastName', $array254);
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array255['0'] = 'true';

$expression256 = function($context) {return TRUE;};
$arguments252['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression256(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output249 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
                                                <div class="validation-error alert alert-danger">';
$array266 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.lastName.0.message', $array266)]);

$output265 .= '</div>
                                            ';
return $output265;
};
$arguments260 = array();
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$arguments260['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.lastName', $array263);

$expression264 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments260['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments260['__thenClosure'] = $renderChildrenClosure261;

$output259 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
                                        ';
return $output259;
};
$arguments257 = array();
$arguments257['for'] = '';
$arguments257['as'] = 'validationResults';
$arguments257['for'] = 'billingAddress';

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output249 .= '
                                    </div>
                                ';
return $output249;
};
$arguments247 = array();

$output246 .= '';

$output246 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
                                    <label for="billingAddress-lastName">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['key'] = NULL;
$arguments270['id'] = NULL;
$arguments270['default'] = NULL;
$arguments270['arguments'] = NULL;
$arguments270['extensionName'] = NULL;
$arguments270['languageKey'] = NULL;
$arguments270['alternativeLanguageKeys'] = NULL;
$arguments270['key'] = 'tx_cart_domain_model_order_address.last_name';

$output269 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);

$output269 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['additionalAttributes'] = NULL;
$arguments272['data'] = NULL;
$arguments272['aria'] = NULL;
$arguments272['name'] = NULL;
$arguments272['value'] = NULL;
$arguments272['property'] = NULL;
$arguments272['autofocus'] = NULL;
$arguments272['disabled'] = NULL;
$arguments272['maxlength'] = NULL;
$arguments272['readonly'] = NULL;
$arguments272['size'] = NULL;
$arguments272['placeholder'] = NULL;
$arguments272['pattern'] = NULL;
$arguments272['errorClass'] = 'f3-form-error';
$arguments272['class'] = NULL;
$arguments272['dir'] = NULL;
$arguments272['id'] = NULL;
$arguments272['lang'] = NULL;
$arguments272['style'] = NULL;
$arguments272['title'] = NULL;
$arguments272['accesskey'] = NULL;
$arguments272['tabindex'] = NULL;
$arguments272['onclick'] = NULL;
$arguments272['required'] = false;
$arguments272['type'] = 'text';
$arguments272['id'] = 'billingAddress-lastName';
$arguments272['class'] = 'form-control';
$arguments272['name'] = 'billingAddress[lastName]';
$array274 = array (
);$arguments272['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.lastName', $array274);

$output269 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output269 .= '
                                    </div>
                                ';
return $output269;
};
$arguments267 = array();
$arguments267['if'] = NULL;

$output246 .= '';

$output246 .= '
                            ';
return $output246;
};
$arguments215 = array();
$arguments215['then'] = NULL;
$arguments215['else'] = NULL;
$arguments215['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array241 = array();
// Rendering Array
$array242 = array();
$array243 = array (
);$array242['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.lastName.validator', $array243);
$array241['0'] = $array242;
$array241['1'] = ' == ';
// Rendering Array
$array244 = array();
$array244['0'] = 'NotEmpty';
$array241['2'] = $array244;

$expression245 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments215['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression245(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array241)
					),
					$renderingContext
				);
$arguments215['__thenClosure'] = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
                                    <label for="billingAddress-lastName" class="required">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['key'] = NULL;
$arguments218['id'] = NULL;
$arguments218['default'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['extensionName'] = NULL;
$arguments218['languageKey'] = NULL;
$arguments218['alternativeLanguageKeys'] = NULL;
$arguments218['key'] = 'tx_cart_domain_model_order_address.last_name';

$output217 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext)]);

$output217 .= '
                                        <em>*</em>
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['additionalAttributes'] = NULL;
$arguments220['data'] = NULL;
$arguments220['aria'] = NULL;
$arguments220['name'] = NULL;
$arguments220['value'] = NULL;
$arguments220['property'] = NULL;
$arguments220['autofocus'] = NULL;
$arguments220['disabled'] = NULL;
$arguments220['maxlength'] = NULL;
$arguments220['readonly'] = NULL;
$arguments220['size'] = NULL;
$arguments220['placeholder'] = NULL;
$arguments220['pattern'] = NULL;
$arguments220['errorClass'] = 'f3-form-error';
$arguments220['class'] = NULL;
$arguments220['dir'] = NULL;
$arguments220['id'] = NULL;
$arguments220['lang'] = NULL;
$arguments220['style'] = NULL;
$arguments220['title'] = NULL;
$arguments220['accesskey'] = NULL;
$arguments220['tabindex'] = NULL;
$arguments220['onclick'] = NULL;
$arguments220['required'] = false;
$arguments220['type'] = 'text';
$arguments220['id'] = 'billingAddress-lastName';
$arguments220['class'] = 'form-control';
$arguments220['name'] = 'billingAddress[lastName]';
$array222 = array (
);$arguments220['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.lastName', $array222);
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array223['0'] = 'true';

$expression224 = function($context) {return TRUE;};
$arguments220['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output217 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
                                                <div class="validation-error alert alert-danger">';
$array234 = array (
);
$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.lastName.0.message', $array234)]);

$output233 .= '</div>
                                            ';
return $output233;
};
$arguments228 = array();
$arguments228['then'] = NULL;
$arguments228['else'] = NULL;
$arguments228['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array230 = array();
$array231 = array (
);$array230['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.lastName', $array231);

$expression232 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments228['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression232(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array230)
					),
					$renderingContext
				);
$arguments228['__thenClosure'] = $renderChildrenClosure229;

$output227 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
                                        ';
return $output227;
};
$arguments225 = array();
$arguments225['for'] = '';
$arguments225['as'] = 'validationResults';
$arguments225['for'] = 'billingAddress';

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output217 .= '
                                    </div>
                                ';
return $output217;
};
$arguments215['__elseClosures'][] = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
                                    <label for="billingAddress-lastName">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['key'] = NULL;
$arguments236['id'] = NULL;
$arguments236['default'] = NULL;
$arguments236['arguments'] = NULL;
$arguments236['extensionName'] = NULL;
$arguments236['languageKey'] = NULL;
$arguments236['alternativeLanguageKeys'] = NULL;
$arguments236['key'] = 'tx_cart_domain_model_order_address.last_name';

$output235 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext)]);

$output235 .= '
                                    </label>
                                    <div class="input-box">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['additionalAttributes'] = NULL;
$arguments238['data'] = NULL;
$arguments238['aria'] = NULL;
$arguments238['name'] = NULL;
$arguments238['value'] = NULL;
$arguments238['property'] = NULL;
$arguments238['autofocus'] = NULL;
$arguments238['disabled'] = NULL;
$arguments238['maxlength'] = NULL;
$arguments238['readonly'] = NULL;
$arguments238['size'] = NULL;
$arguments238['placeholder'] = NULL;
$arguments238['pattern'] = NULL;
$arguments238['errorClass'] = 'f3-form-error';
$arguments238['class'] = NULL;
$arguments238['dir'] = NULL;
$arguments238['id'] = NULL;
$arguments238['lang'] = NULL;
$arguments238['style'] = NULL;
$arguments238['title'] = NULL;
$arguments238['accesskey'] = NULL;
$arguments238['tabindex'] = NULL;
$arguments238['onclick'] = NULL;
$arguments238['required'] = false;
$arguments238['type'] = 'text';
$arguments238['id'] = 'billingAddress-lastName';
$arguments238['class'] = 'form-control';
$arguments238['name'] = 'billingAddress[lastName]';
$array240 = array (
);$arguments238['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.lastName', $array240);

$output235 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output235 .= '
                                    </div>
                                ';
return $output235;
};

$output214 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '
                        </div>
                    ';
return $output214;
};
$arguments207 = array();
$arguments207['then'] = NULL;
$arguments207['else'] = NULL;
$arguments207['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array209 = array();
// Rendering Array
$array210 = array();
$array211 = array (
);$array210['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.lastName.validator', $array211);
$array209['0'] = $array210;
$array209['1'] = ' != ';
// Rendering Array
$array212 = array();
$array212['0'] = 'Empty';
$array209['2'] = $array212;

$expression213 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments207['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array209)
					),
					$renderingContext
				);
$arguments207['__thenClosure'] = $renderChildrenClosure208;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output0 .= '
                </div>

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
                    <div class="field">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
                                <label for="billingAddress-email" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['key'] = NULL;
$arguments318['id'] = NULL;
$arguments318['default'] = NULL;
$arguments318['arguments'] = NULL;
$arguments318['extensionName'] = NULL;
$arguments318['languageKey'] = NULL;
$arguments318['alternativeLanguageKeys'] = NULL;
$arguments318['key'] = 'tx_cart_domain_model_order_address.email';

$output317 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext)]);

$output317 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['additionalAttributes'] = NULL;
$arguments320['data'] = NULL;
$arguments320['aria'] = NULL;
$arguments320['name'] = NULL;
$arguments320['value'] = NULL;
$arguments320['property'] = NULL;
$arguments320['autofocus'] = NULL;
$arguments320['disabled'] = NULL;
$arguments320['maxlength'] = NULL;
$arguments320['readonly'] = NULL;
$arguments320['size'] = NULL;
$arguments320['placeholder'] = NULL;
$arguments320['pattern'] = NULL;
$arguments320['errorClass'] = 'f3-form-error';
$arguments320['class'] = NULL;
$arguments320['dir'] = NULL;
$arguments320['id'] = NULL;
$arguments320['lang'] = NULL;
$arguments320['style'] = NULL;
$arguments320['title'] = NULL;
$arguments320['accesskey'] = NULL;
$arguments320['tabindex'] = NULL;
$arguments320['onclick'] = NULL;
$arguments320['required'] = false;
$arguments320['type'] = 'text';
$arguments320['id'] = 'billingAddress-email';
$arguments320['class'] = 'form-control';
$arguments320['name'] = 'billingAddress[email]';
$array322 = array (
);$arguments320['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.email', $array322);
$arguments320['type'] = 'email';
// Rendering Boolean node
// Rendering Array
$array323 = array();
$array323['0'] = 'true';

$expression324 = function($context) {return TRUE;};
$arguments320['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression324(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array323)
					),
					$renderingContext
				);

$output317 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output317 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
                                            <div class="validation-error alert alert-danger">';
$array334 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.email.0.message', $array334)]);

$output333 .= '</div>
                                        ';
return $output333;
};
$arguments328 = array();
$arguments328['then'] = NULL;
$arguments328['else'] = NULL;
$arguments328['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.email', $array331);

$expression332 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments328['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression332(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments328['__thenClosure'] = $renderChildrenClosure329;

$output327 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= '
                                    ';
return $output327;
};
$arguments325 = array();
$arguments325['for'] = '';
$arguments325['as'] = 'validationResults';
$arguments325['for'] = 'billingAddress';

$output317 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output317 .= '
                                </div>
                            ';
return $output317;
};
$arguments315 = array();

$output314 .= '';

$output314 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
                                <label for="billingAddress-email">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['key'] = NULL;
$arguments338['id'] = NULL;
$arguments338['default'] = NULL;
$arguments338['arguments'] = NULL;
$arguments338['extensionName'] = NULL;
$arguments338['languageKey'] = NULL;
$arguments338['alternativeLanguageKeys'] = NULL;
$arguments338['key'] = 'tx_cart_domain_model_order_address.email';

$output337 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext)]);

$output337 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments340 = array();
$arguments340['additionalAttributes'] = NULL;
$arguments340['data'] = NULL;
$arguments340['aria'] = NULL;
$arguments340['name'] = NULL;
$arguments340['value'] = NULL;
$arguments340['property'] = NULL;
$arguments340['autofocus'] = NULL;
$arguments340['disabled'] = NULL;
$arguments340['maxlength'] = NULL;
$arguments340['readonly'] = NULL;
$arguments340['size'] = NULL;
$arguments340['placeholder'] = NULL;
$arguments340['pattern'] = NULL;
$arguments340['errorClass'] = 'f3-form-error';
$arguments340['class'] = NULL;
$arguments340['dir'] = NULL;
$arguments340['id'] = NULL;
$arguments340['lang'] = NULL;
$arguments340['style'] = NULL;
$arguments340['title'] = NULL;
$arguments340['accesskey'] = NULL;
$arguments340['tabindex'] = NULL;
$arguments340['onclick'] = NULL;
$arguments340['required'] = false;
$arguments340['type'] = 'text';
$arguments340['id'] = 'billingAddress-email';
$arguments340['class'] = 'form-control';
$arguments340['name'] = 'billingAddress[email]';
$array342 = array (
);$arguments340['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.email', $array342);
$arguments340['type'] = 'email';

$output337 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output337 .= '
                                </div>
                            ';
return $output337;
};
$arguments335 = array();
$arguments335['if'] = NULL;

$output314 .= '';

$output314 .= '
                        ';
return $output314;
};
$arguments283 = array();
$arguments283['then'] = NULL;
$arguments283['else'] = NULL;
$arguments283['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array309 = array();
// Rendering Array
$array310 = array();
$array311 = array (
);$array310['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.email.validator', $array311);
$array309['0'] = $array310;
$array309['1'] = ' == ';
// Rendering Array
$array312 = array();
$array312['0'] = 'NotEmpty';
$array309['2'] = $array312;

$expression313 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments283['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression313(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array309)
					),
					$renderingContext
				);
$arguments283['__thenClosure'] = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
                                <label for="billingAddress-email" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['key'] = NULL;
$arguments286['id'] = NULL;
$arguments286['default'] = NULL;
$arguments286['arguments'] = NULL;
$arguments286['extensionName'] = NULL;
$arguments286['languageKey'] = NULL;
$arguments286['alternativeLanguageKeys'] = NULL;
$arguments286['key'] = 'tx_cart_domain_model_order_address.email';

$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext)]);

$output285 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['additionalAttributes'] = NULL;
$arguments288['data'] = NULL;
$arguments288['aria'] = NULL;
$arguments288['name'] = NULL;
$arguments288['value'] = NULL;
$arguments288['property'] = NULL;
$arguments288['autofocus'] = NULL;
$arguments288['disabled'] = NULL;
$arguments288['maxlength'] = NULL;
$arguments288['readonly'] = NULL;
$arguments288['size'] = NULL;
$arguments288['placeholder'] = NULL;
$arguments288['pattern'] = NULL;
$arguments288['errorClass'] = 'f3-form-error';
$arguments288['class'] = NULL;
$arguments288['dir'] = NULL;
$arguments288['id'] = NULL;
$arguments288['lang'] = NULL;
$arguments288['style'] = NULL;
$arguments288['title'] = NULL;
$arguments288['accesskey'] = NULL;
$arguments288['tabindex'] = NULL;
$arguments288['onclick'] = NULL;
$arguments288['required'] = false;
$arguments288['type'] = 'text';
$arguments288['id'] = 'billingAddress-email';
$arguments288['class'] = 'form-control';
$arguments288['name'] = 'billingAddress[email]';
$array290 = array (
);$arguments288['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.email', $array290);
$arguments288['type'] = 'email';
// Rendering Boolean node
// Rendering Array
$array291 = array();
$array291['0'] = 'true';

$expression292 = function($context) {return TRUE;};
$arguments288['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array291)
					),
					$renderingContext
				);

$output285 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output285 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
                                            <div class="validation-error alert alert-danger">';
$array302 = array (
);
$output301 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.email.0.message', $array302)]);

$output301 .= '</div>
                                        ';
return $output301;
};
$arguments296 = array();
$arguments296['then'] = NULL;
$arguments296['else'] = NULL;
$arguments296['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array298 = array();
$array299 = array (
);$array298['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.email', $array299);

$expression300 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments296['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression300(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array298)
					),
					$renderingContext
				);
$arguments296['__thenClosure'] = $renderChildrenClosure297;

$output295 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output295 .= '
                                    ';
return $output295;
};
$arguments293 = array();
$arguments293['for'] = '';
$arguments293['as'] = 'validationResults';
$arguments293['for'] = 'billingAddress';

$output285 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output285 .= '
                                </div>
                            ';
return $output285;
};
$arguments283['__elseClosures'][] = function() use ($renderingContext, $self) {
$output303 = '';

$output303 .= '
                                <label for="billingAddress-email">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['key'] = NULL;
$arguments304['id'] = NULL;
$arguments304['default'] = NULL;
$arguments304['arguments'] = NULL;
$arguments304['extensionName'] = NULL;
$arguments304['languageKey'] = NULL;
$arguments304['alternativeLanguageKeys'] = NULL;
$arguments304['key'] = 'tx_cart_domain_model_order_address.email';

$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);

$output303 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['additionalAttributes'] = NULL;
$arguments306['data'] = NULL;
$arguments306['aria'] = NULL;
$arguments306['name'] = NULL;
$arguments306['value'] = NULL;
$arguments306['property'] = NULL;
$arguments306['autofocus'] = NULL;
$arguments306['disabled'] = NULL;
$arguments306['maxlength'] = NULL;
$arguments306['readonly'] = NULL;
$arguments306['size'] = NULL;
$arguments306['placeholder'] = NULL;
$arguments306['pattern'] = NULL;
$arguments306['errorClass'] = 'f3-form-error';
$arguments306['class'] = NULL;
$arguments306['dir'] = NULL;
$arguments306['id'] = NULL;
$arguments306['lang'] = NULL;
$arguments306['style'] = NULL;
$arguments306['title'] = NULL;
$arguments306['accesskey'] = NULL;
$arguments306['tabindex'] = NULL;
$arguments306['onclick'] = NULL;
$arguments306['required'] = false;
$arguments306['type'] = 'text';
$arguments306['id'] = 'billingAddress-email';
$arguments306['class'] = 'form-control';
$arguments306['name'] = 'billingAddress[email]';
$array308 = array (
);$arguments306['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.email', $array308);
$arguments306['type'] = 'email';

$output303 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output303 .= '
                                </div>
                            ';
return $output303;
};

$output282 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output282 .= '
                    </div>
                ';
return $output282;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
// Rendering Array
$array278 = array();
$array279 = array (
);$array278['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.email.validator', $array279);
$array277['0'] = $array278;
$array277['1'] = ' != ';
// Rendering Array
$array280 = array();
$array280['0'] = 'Empty';
$array277['2'] = $array280;

$expression281 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression281(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments275['__thenClosure'] = $renderChildrenClosure276;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output0 .= '

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
                    <div class="field">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$output382 = '';

$output382 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$output385 = '';

$output385 .= '
                                <label for="billingAddress-phone" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments386 = array();
$arguments386['key'] = NULL;
$arguments386['id'] = NULL;
$arguments386['default'] = NULL;
$arguments386['arguments'] = NULL;
$arguments386['extensionName'] = NULL;
$arguments386['languageKey'] = NULL;
$arguments386['alternativeLanguageKeys'] = NULL;
$arguments386['key'] = 'tx_cart_domain_model_order_address.phone';

$output385 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext)]);

$output385 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments388 = array();
$arguments388['additionalAttributes'] = NULL;
$arguments388['data'] = NULL;
$arguments388['aria'] = NULL;
$arguments388['name'] = NULL;
$arguments388['value'] = NULL;
$arguments388['property'] = NULL;
$arguments388['autofocus'] = NULL;
$arguments388['disabled'] = NULL;
$arguments388['maxlength'] = NULL;
$arguments388['readonly'] = NULL;
$arguments388['size'] = NULL;
$arguments388['placeholder'] = NULL;
$arguments388['pattern'] = NULL;
$arguments388['errorClass'] = 'f3-form-error';
$arguments388['class'] = NULL;
$arguments388['dir'] = NULL;
$arguments388['id'] = NULL;
$arguments388['lang'] = NULL;
$arguments388['style'] = NULL;
$arguments388['title'] = NULL;
$arguments388['accesskey'] = NULL;
$arguments388['tabindex'] = NULL;
$arguments388['onclick'] = NULL;
$arguments388['required'] = false;
$arguments388['type'] = 'text';
$arguments388['id'] = 'billingAddress-phone';
$arguments388['class'] = 'form-control';
$arguments388['name'] = 'billingAddress[phone]';
$array390 = array (
);$arguments388['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.phone', $array390);
$arguments388['type'] = 'phone';
// Rendering Boolean node
// Rendering Array
$array391 = array();
$array391['0'] = 'true';

$expression392 = function($context) {return TRUE;};
$arguments388['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression392(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array391)
					),
					$renderingContext
				);

$output385 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output385 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
                                            <div class="validation-error alert alert-danger">';
$array402 = array (
);
$output401 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.phone.0.message', $array402)]);

$output401 .= '</div>
                                        ';
return $output401;
};
$arguments396 = array();
$arguments396['then'] = NULL;
$arguments396['else'] = NULL;
$arguments396['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array398 = array();
$array399 = array (
);$array398['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.phone', $array399);

$expression400 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments396['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression400(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array398)
					),
					$renderingContext
				);
$arguments396['__thenClosure'] = $renderChildrenClosure397;

$output395 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
                                    ';
return $output395;
};
$arguments393 = array();
$arguments393['for'] = '';
$arguments393['as'] = 'validationResults';
$arguments393['for'] = 'billingAddress';

$output385 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);

$output385 .= '
                                </div>
                            ';
return $output385;
};
$arguments383 = array();

$output382 .= '';

$output382 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
                                <label for="billingAddress-phone">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments406 = array();
$arguments406['key'] = NULL;
$arguments406['id'] = NULL;
$arguments406['default'] = NULL;
$arguments406['arguments'] = NULL;
$arguments406['extensionName'] = NULL;
$arguments406['languageKey'] = NULL;
$arguments406['alternativeLanguageKeys'] = NULL;
$arguments406['key'] = 'tx_cart_domain_model_order_address.phone';

$output405 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext)]);

$output405 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['additionalAttributes'] = NULL;
$arguments408['data'] = NULL;
$arguments408['aria'] = NULL;
$arguments408['name'] = NULL;
$arguments408['value'] = NULL;
$arguments408['property'] = NULL;
$arguments408['autofocus'] = NULL;
$arguments408['disabled'] = NULL;
$arguments408['maxlength'] = NULL;
$arguments408['readonly'] = NULL;
$arguments408['size'] = NULL;
$arguments408['placeholder'] = NULL;
$arguments408['pattern'] = NULL;
$arguments408['errorClass'] = 'f3-form-error';
$arguments408['class'] = NULL;
$arguments408['dir'] = NULL;
$arguments408['id'] = NULL;
$arguments408['lang'] = NULL;
$arguments408['style'] = NULL;
$arguments408['title'] = NULL;
$arguments408['accesskey'] = NULL;
$arguments408['tabindex'] = NULL;
$arguments408['onclick'] = NULL;
$arguments408['required'] = false;
$arguments408['type'] = 'text';
$arguments408['id'] = 'billingAddress-phone';
$arguments408['class'] = 'form-control';
$arguments408['name'] = 'billingAddress[phone]';
$array410 = array (
);$arguments408['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.phone', $array410);
$arguments408['type'] = 'phone';

$output405 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output405 .= '
                                </div>
                            ';
return $output405;
};
$arguments403 = array();
$arguments403['if'] = NULL;

$output382 .= '';

$output382 .= '
                        ';
return $output382;
};
$arguments351 = array();
$arguments351['then'] = NULL;
$arguments351['else'] = NULL;
$arguments351['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array377 = array();
// Rendering Array
$array378 = array();
$array379 = array (
);$array378['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.phone.validator', $array379);
$array377['0'] = $array378;
$array377['1'] = ' == ';
// Rendering Array
$array380 = array();
$array380['0'] = 'NotEmpty';
$array377['2'] = $array380;

$expression381 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments351['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression381(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array377)
					),
					$renderingContext
				);
$arguments351['__thenClosure'] = function() use ($renderingContext, $self) {
$output353 = '';

$output353 .= '
                                <label for="billingAddress-phone" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments354 = array();
$arguments354['key'] = NULL;
$arguments354['id'] = NULL;
$arguments354['default'] = NULL;
$arguments354['arguments'] = NULL;
$arguments354['extensionName'] = NULL;
$arguments354['languageKey'] = NULL;
$arguments354['alternativeLanguageKeys'] = NULL;
$arguments354['key'] = 'tx_cart_domain_model_order_address.phone';

$output353 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext)]);

$output353 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['additionalAttributes'] = NULL;
$arguments356['data'] = NULL;
$arguments356['aria'] = NULL;
$arguments356['name'] = NULL;
$arguments356['value'] = NULL;
$arguments356['property'] = NULL;
$arguments356['autofocus'] = NULL;
$arguments356['disabled'] = NULL;
$arguments356['maxlength'] = NULL;
$arguments356['readonly'] = NULL;
$arguments356['size'] = NULL;
$arguments356['placeholder'] = NULL;
$arguments356['pattern'] = NULL;
$arguments356['errorClass'] = 'f3-form-error';
$arguments356['class'] = NULL;
$arguments356['dir'] = NULL;
$arguments356['id'] = NULL;
$arguments356['lang'] = NULL;
$arguments356['style'] = NULL;
$arguments356['title'] = NULL;
$arguments356['accesskey'] = NULL;
$arguments356['tabindex'] = NULL;
$arguments356['onclick'] = NULL;
$arguments356['required'] = false;
$arguments356['type'] = 'text';
$arguments356['id'] = 'billingAddress-phone';
$arguments356['class'] = 'form-control';
$arguments356['name'] = 'billingAddress[phone]';
$array358 = array (
);$arguments356['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.phone', $array358);
$arguments356['type'] = 'phone';
// Rendering Boolean node
// Rendering Array
$array359 = array();
$array359['0'] = 'true';

$expression360 = function($context) {return TRUE;};
$arguments356['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression360(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array359)
					),
					$renderingContext
				);

$output353 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output353 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
                                            <div class="validation-error alert alert-danger">';
$array370 = array (
);
$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.phone.0.message', $array370)]);

$output369 .= '</div>
                                        ';
return $output369;
};
$arguments364 = array();
$arguments364['then'] = NULL;
$arguments364['else'] = NULL;
$arguments364['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array366 = array();
$array367 = array (
);$array366['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.phone', $array367);

$expression368 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments364['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression368(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array366)
					),
					$renderingContext
				);
$arguments364['__thenClosure'] = $renderChildrenClosure365;

$output363 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);

$output363 .= '
                                    ';
return $output363;
};
$arguments361 = array();
$arguments361['for'] = '';
$arguments361['as'] = 'validationResults';
$arguments361['for'] = 'billingAddress';

$output353 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output353 .= '
                                </div>
                            ';
return $output353;
};
$arguments351['__elseClosures'][] = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '
                                <label for="billingAddress-phone">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments372 = array();
$arguments372['key'] = NULL;
$arguments372['id'] = NULL;
$arguments372['default'] = NULL;
$arguments372['arguments'] = NULL;
$arguments372['extensionName'] = NULL;
$arguments372['languageKey'] = NULL;
$arguments372['alternativeLanguageKeys'] = NULL;
$arguments372['key'] = 'tx_cart_domain_model_order_address.phone';

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext)]);

$output371 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments374 = array();
$arguments374['additionalAttributes'] = NULL;
$arguments374['data'] = NULL;
$arguments374['aria'] = NULL;
$arguments374['name'] = NULL;
$arguments374['value'] = NULL;
$arguments374['property'] = NULL;
$arguments374['autofocus'] = NULL;
$arguments374['disabled'] = NULL;
$arguments374['maxlength'] = NULL;
$arguments374['readonly'] = NULL;
$arguments374['size'] = NULL;
$arguments374['placeholder'] = NULL;
$arguments374['pattern'] = NULL;
$arguments374['errorClass'] = 'f3-form-error';
$arguments374['class'] = NULL;
$arguments374['dir'] = NULL;
$arguments374['id'] = NULL;
$arguments374['lang'] = NULL;
$arguments374['style'] = NULL;
$arguments374['title'] = NULL;
$arguments374['accesskey'] = NULL;
$arguments374['tabindex'] = NULL;
$arguments374['onclick'] = NULL;
$arguments374['required'] = false;
$arguments374['type'] = 'text';
$arguments374['id'] = 'billingAddress-phone';
$arguments374['class'] = 'form-control';
$arguments374['name'] = 'billingAddress[phone]';
$array376 = array (
);$arguments374['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.phone', $array376);
$arguments374['type'] = 'phone';

$output371 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext);

$output371 .= '
                                </div>
                            ';
return $output371;
};

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output350 .= '
                    </div>
                ';
return $output350;
};
$arguments343 = array();
$arguments343['then'] = NULL;
$arguments343['else'] = NULL;
$arguments343['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array345 = array();
// Rendering Array
$array346 = array();
$array347 = array (
);$array346['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.phone.validator', $array347);
$array345['0'] = $array346;
$array345['1'] = ' != ';
// Rendering Array
$array348 = array();
$array348['0'] = 'Empty';
$array345['2'] = $array348;

$expression349 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments343['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression349(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array345)
					),
					$renderingContext
				);
$arguments343['__thenClosure'] = $renderChildrenClosure344;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output0 .= '

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
$output418 = '';

$output418 .= '
                    <div class="field">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$output450 = '';

$output450 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
                                <label for="billingAddress-fax" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments454 = array();
$arguments454['key'] = NULL;
$arguments454['id'] = NULL;
$arguments454['default'] = NULL;
$arguments454['arguments'] = NULL;
$arguments454['extensionName'] = NULL;
$arguments454['languageKey'] = NULL;
$arguments454['alternativeLanguageKeys'] = NULL;
$arguments454['key'] = 'tx_cart_domain_model_order_address.fax';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext)]);

$output453 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['additionalAttributes'] = NULL;
$arguments456['data'] = NULL;
$arguments456['aria'] = NULL;
$arguments456['name'] = NULL;
$arguments456['value'] = NULL;
$arguments456['property'] = NULL;
$arguments456['autofocus'] = NULL;
$arguments456['disabled'] = NULL;
$arguments456['maxlength'] = NULL;
$arguments456['readonly'] = NULL;
$arguments456['size'] = NULL;
$arguments456['placeholder'] = NULL;
$arguments456['pattern'] = NULL;
$arguments456['errorClass'] = 'f3-form-error';
$arguments456['class'] = NULL;
$arguments456['dir'] = NULL;
$arguments456['id'] = NULL;
$arguments456['lang'] = NULL;
$arguments456['style'] = NULL;
$arguments456['title'] = NULL;
$arguments456['accesskey'] = NULL;
$arguments456['tabindex'] = NULL;
$arguments456['onclick'] = NULL;
$arguments456['required'] = false;
$arguments456['type'] = 'text';
$arguments456['id'] = 'billingAddress-fax';
$arguments456['class'] = 'form-control';
$arguments456['name'] = 'billingAddress[fax]';
$array458 = array (
);$arguments456['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.fax', $array458);
$arguments456['type'] = 'fax';
// Rendering Boolean node
// Rendering Array
$array459 = array();
$array459['0'] = 'true';

$expression460 = function($context) {return TRUE;};
$arguments456['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression460(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array459)
					),
					$renderingContext
				);

$output453 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output453 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
$output463 = '';

$output463 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
                                            <div class="validation-error alert alert-danger">';
$array470 = array (
);
$output469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.fax.0.message', $array470)]);

$output469 .= '</div>
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
);$array466['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.fax', $array467);

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
return $output463;
};
$arguments461 = array();
$arguments461['for'] = '';
$arguments461['as'] = 'validationResults';
$arguments461['for'] = 'billingAddress';

$output453 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext);

$output453 .= '
                                </div>
                            ';
return $output453;
};
$arguments451 = array();

$output450 .= '';

$output450 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
$output473 = '';

$output473 .= '
                                <label for="billingAddress-fax">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments474 = array();
$arguments474['key'] = NULL;
$arguments474['id'] = NULL;
$arguments474['default'] = NULL;
$arguments474['arguments'] = NULL;
$arguments474['extensionName'] = NULL;
$arguments474['languageKey'] = NULL;
$arguments474['alternativeLanguageKeys'] = NULL;
$arguments474['key'] = 'tx_cart_domain_model_order_address.fax';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext)]);

$output473 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments476 = array();
$arguments476['additionalAttributes'] = NULL;
$arguments476['data'] = NULL;
$arguments476['aria'] = NULL;
$arguments476['name'] = NULL;
$arguments476['value'] = NULL;
$arguments476['property'] = NULL;
$arguments476['autofocus'] = NULL;
$arguments476['disabled'] = NULL;
$arguments476['maxlength'] = NULL;
$arguments476['readonly'] = NULL;
$arguments476['size'] = NULL;
$arguments476['placeholder'] = NULL;
$arguments476['pattern'] = NULL;
$arguments476['errorClass'] = 'f3-form-error';
$arguments476['class'] = NULL;
$arguments476['dir'] = NULL;
$arguments476['id'] = NULL;
$arguments476['lang'] = NULL;
$arguments476['style'] = NULL;
$arguments476['title'] = NULL;
$arguments476['accesskey'] = NULL;
$arguments476['tabindex'] = NULL;
$arguments476['onclick'] = NULL;
$arguments476['required'] = false;
$arguments476['type'] = 'text';
$arguments476['id'] = 'billingAddress-fax';
$arguments476['class'] = 'form-control';
$arguments476['name'] = 'billingAddress[fax]';
$array478 = array (
);$arguments476['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.fax', $array478);
$arguments476['type'] = 'fax';

$output473 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output473 .= '
                                </div>
                            ';
return $output473;
};
$arguments471 = array();
$arguments471['if'] = NULL;

$output450 .= '';

$output450 .= '
                        ';
return $output450;
};
$arguments419 = array();
$arguments419['then'] = NULL;
$arguments419['else'] = NULL;
$arguments419['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array445 = array();
// Rendering Array
$array446 = array();
$array447 = array (
);$array446['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.fax.validator', $array447);
$array445['0'] = $array446;
$array445['1'] = ' == ';
// Rendering Array
$array448 = array();
$array448['0'] = 'NotEmpty';
$array445['2'] = $array448;

$expression449 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments419['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression449(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array445)
					),
					$renderingContext
				);
$arguments419['__thenClosure'] = function() use ($renderingContext, $self) {
$output421 = '';

$output421 .= '
                                <label for="billingAddress-fax" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments422 = array();
$arguments422['key'] = NULL;
$arguments422['id'] = NULL;
$arguments422['default'] = NULL;
$arguments422['arguments'] = NULL;
$arguments422['extensionName'] = NULL;
$arguments422['languageKey'] = NULL;
$arguments422['alternativeLanguageKeys'] = NULL;
$arguments422['key'] = 'tx_cart_domain_model_order_address.fax';

$output421 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext)]);

$output421 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments424 = array();
$arguments424['additionalAttributes'] = NULL;
$arguments424['data'] = NULL;
$arguments424['aria'] = NULL;
$arguments424['name'] = NULL;
$arguments424['value'] = NULL;
$arguments424['property'] = NULL;
$arguments424['autofocus'] = NULL;
$arguments424['disabled'] = NULL;
$arguments424['maxlength'] = NULL;
$arguments424['readonly'] = NULL;
$arguments424['size'] = NULL;
$arguments424['placeholder'] = NULL;
$arguments424['pattern'] = NULL;
$arguments424['errorClass'] = 'f3-form-error';
$arguments424['class'] = NULL;
$arguments424['dir'] = NULL;
$arguments424['id'] = NULL;
$arguments424['lang'] = NULL;
$arguments424['style'] = NULL;
$arguments424['title'] = NULL;
$arguments424['accesskey'] = NULL;
$arguments424['tabindex'] = NULL;
$arguments424['onclick'] = NULL;
$arguments424['required'] = false;
$arguments424['type'] = 'text';
$arguments424['id'] = 'billingAddress-fax';
$arguments424['class'] = 'form-control';
$arguments424['name'] = 'billingAddress[fax]';
$array426 = array (
);$arguments424['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.fax', $array426);
$arguments424['type'] = 'fax';
// Rendering Boolean node
// Rendering Array
$array427 = array();
$array427['0'] = 'true';

$expression428 = function($context) {return TRUE;};
$arguments424['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression428(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array427)
					),
					$renderingContext
				);

$output421 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output421 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
$output431 = '';

$output431 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$output437 = '';

$output437 .= '
                                            <div class="validation-error alert alert-danger">';
$array438 = array (
);
$output437 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.fax.0.message', $array438)]);

$output437 .= '</div>
                                        ';
return $output437;
};
$arguments432 = array();
$arguments432['then'] = NULL;
$arguments432['else'] = NULL;
$arguments432['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array434 = array();
$array435 = array (
);$array434['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.fax', $array435);

$expression436 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments432['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression436(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array434)
					),
					$renderingContext
				);
$arguments432['__thenClosure'] = $renderChildrenClosure433;

$output431 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output431 .= '
                                    ';
return $output431;
};
$arguments429 = array();
$arguments429['for'] = '';
$arguments429['as'] = 'validationResults';
$arguments429['for'] = 'billingAddress';

$output421 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output421 .= '
                                </div>
                            ';
return $output421;
};
$arguments419['__elseClosures'][] = function() use ($renderingContext, $self) {
$output439 = '';

$output439 .= '
                                <label for="billingAddress-fax">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments440 = array();
$arguments440['key'] = NULL;
$arguments440['id'] = NULL;
$arguments440['default'] = NULL;
$arguments440['arguments'] = NULL;
$arguments440['extensionName'] = NULL;
$arguments440['languageKey'] = NULL;
$arguments440['alternativeLanguageKeys'] = NULL;
$arguments440['key'] = 'tx_cart_domain_model_order_address.fax';

$output439 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext)]);

$output439 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments442 = array();
$arguments442['additionalAttributes'] = NULL;
$arguments442['data'] = NULL;
$arguments442['aria'] = NULL;
$arguments442['name'] = NULL;
$arguments442['value'] = NULL;
$arguments442['property'] = NULL;
$arguments442['autofocus'] = NULL;
$arguments442['disabled'] = NULL;
$arguments442['maxlength'] = NULL;
$arguments442['readonly'] = NULL;
$arguments442['size'] = NULL;
$arguments442['placeholder'] = NULL;
$arguments442['pattern'] = NULL;
$arguments442['errorClass'] = 'f3-form-error';
$arguments442['class'] = NULL;
$arguments442['dir'] = NULL;
$arguments442['id'] = NULL;
$arguments442['lang'] = NULL;
$arguments442['style'] = NULL;
$arguments442['title'] = NULL;
$arguments442['accesskey'] = NULL;
$arguments442['tabindex'] = NULL;
$arguments442['onclick'] = NULL;
$arguments442['required'] = false;
$arguments442['type'] = 'text';
$arguments442['id'] = 'billingAddress-fax';
$arguments442['class'] = 'form-control';
$arguments442['name'] = 'billingAddress[fax]';
$array444 = array (
);$arguments442['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.fax', $array444);
$arguments442['type'] = 'fax';

$output439 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output439 .= '
                                </div>
                            ';
return $output439;
};

$output418 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output418 .= '
                    </div>
                ';
return $output418;
};
$arguments411 = array();
$arguments411['then'] = NULL;
$arguments411['else'] = NULL;
$arguments411['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array413 = array();
// Rendering Array
$array414 = array();
$array415 = array (
);$array414['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.fax.validator', $array415);
$array413['0'] = $array414;
$array413['1'] = ' != ';
// Rendering Array
$array416 = array();
$array416['0'] = 'Empty';
$array413['2'] = $array416;

$expression417 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments411['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression417(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array413)
					),
					$renderingContext
				);
$arguments411['__thenClosure'] = $renderChildrenClosure412;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext);

$output0 .= '

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
$output486 = '';

$output486 .= '
                    <div class="field">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$output518 = '';

$output518 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
$output521 = '';

$output521 .= '
                                <label for="billingAddress-company" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments522 = array();
$arguments522['key'] = NULL;
$arguments522['id'] = NULL;
$arguments522['default'] = NULL;
$arguments522['arguments'] = NULL;
$arguments522['extensionName'] = NULL;
$arguments522['languageKey'] = NULL;
$arguments522['alternativeLanguageKeys'] = NULL;
$arguments522['key'] = 'tx_cart_domain_model_order_address.company';

$output521 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext)]);

$output521 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments524 = array();
$arguments524['additionalAttributes'] = NULL;
$arguments524['data'] = NULL;
$arguments524['aria'] = NULL;
$arguments524['name'] = NULL;
$arguments524['value'] = NULL;
$arguments524['property'] = NULL;
$arguments524['autofocus'] = NULL;
$arguments524['disabled'] = NULL;
$arguments524['maxlength'] = NULL;
$arguments524['readonly'] = NULL;
$arguments524['size'] = NULL;
$arguments524['placeholder'] = NULL;
$arguments524['pattern'] = NULL;
$arguments524['errorClass'] = 'f3-form-error';
$arguments524['class'] = NULL;
$arguments524['dir'] = NULL;
$arguments524['id'] = NULL;
$arguments524['lang'] = NULL;
$arguments524['style'] = NULL;
$arguments524['title'] = NULL;
$arguments524['accesskey'] = NULL;
$arguments524['tabindex'] = NULL;
$arguments524['onclick'] = NULL;
$arguments524['required'] = false;
$arguments524['type'] = 'text';
$arguments524['id'] = 'billingAddress-company';
$arguments524['class'] = 'form-control';
$arguments524['name'] = 'billingAddress[company]';
$array526 = array (
);$arguments524['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.company', $array526);
// Rendering Boolean node
// Rendering Array
$array527 = array();
$array527['0'] = 'true';

$expression528 = function($context) {return TRUE;};
$arguments524['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression528(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array527)
					),
					$renderingContext
				);

$output521 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output521 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
$output531 = '';

$output531 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
$output537 = '';

$output537 .= '
                                            <div class="validation-error alert alert-danger">';
$array538 = array (
);
$output537 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.company.0.message', $array538)]);

$output537 .= '</div>
                                        ';
return $output537;
};
$arguments532 = array();
$arguments532['then'] = NULL;
$arguments532['else'] = NULL;
$arguments532['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array534 = array();
$array535 = array (
);$array534['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.company', $array535);

$expression536 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments532['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression536(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array534)
					),
					$renderingContext
				);
$arguments532['__thenClosure'] = $renderChildrenClosure533;

$output531 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output531 .= '
                                    ';
return $output531;
};
$arguments529 = array();
$arguments529['for'] = '';
$arguments529['as'] = 'validationResults';
$arguments529['for'] = 'billingAddress';

$output521 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output521 .= '
                                </div>
                            ';
return $output521;
};
$arguments519 = array();

$output518 .= '';

$output518 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$output541 = '';

$output541 .= '
                                <label for="billingAddress-company">
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
$arguments542['key'] = 'tx_cart_domain_model_order_address.company';

$output541 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext)]);

$output541 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['additionalAttributes'] = NULL;
$arguments544['data'] = NULL;
$arguments544['aria'] = NULL;
$arguments544['name'] = NULL;
$arguments544['value'] = NULL;
$arguments544['property'] = NULL;
$arguments544['autofocus'] = NULL;
$arguments544['disabled'] = NULL;
$arguments544['maxlength'] = NULL;
$arguments544['readonly'] = NULL;
$arguments544['size'] = NULL;
$arguments544['placeholder'] = NULL;
$arguments544['pattern'] = NULL;
$arguments544['errorClass'] = 'f3-form-error';
$arguments544['class'] = NULL;
$arguments544['dir'] = NULL;
$arguments544['id'] = NULL;
$arguments544['lang'] = NULL;
$arguments544['style'] = NULL;
$arguments544['title'] = NULL;
$arguments544['accesskey'] = NULL;
$arguments544['tabindex'] = NULL;
$arguments544['onclick'] = NULL;
$arguments544['required'] = false;
$arguments544['type'] = 'text';
$arguments544['id'] = 'billingAddress-company';
$arguments544['class'] = 'form-control';
$arguments544['name'] = 'billingAddress[company]';
$array546 = array (
);$arguments544['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.company', $array546);

$output541 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);

$output541 .= '
                                </div>
                            ';
return $output541;
};
$arguments539 = array();
$arguments539['if'] = NULL;

$output518 .= '';

$output518 .= '
                        ';
return $output518;
};
$arguments487 = array();
$arguments487['then'] = NULL;
$arguments487['else'] = NULL;
$arguments487['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array513 = array();
// Rendering Array
$array514 = array();
$array515 = array (
);$array514['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.company.validator', $array515);
$array513['0'] = $array514;
$array513['1'] = ' == ';
// Rendering Array
$array516 = array();
$array516['0'] = 'NotEmpty';
$array513['2'] = $array516;

$expression517 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments487['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression517(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array513)
					),
					$renderingContext
				);
$arguments487['__thenClosure'] = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
                                <label for="billingAddress-company" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['key'] = NULL;
$arguments490['id'] = NULL;
$arguments490['default'] = NULL;
$arguments490['arguments'] = NULL;
$arguments490['extensionName'] = NULL;
$arguments490['languageKey'] = NULL;
$arguments490['alternativeLanguageKeys'] = NULL;
$arguments490['key'] = 'tx_cart_domain_model_order_address.company';

$output489 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext)]);

$output489 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments492 = array();
$arguments492['additionalAttributes'] = NULL;
$arguments492['data'] = NULL;
$arguments492['aria'] = NULL;
$arguments492['name'] = NULL;
$arguments492['value'] = NULL;
$arguments492['property'] = NULL;
$arguments492['autofocus'] = NULL;
$arguments492['disabled'] = NULL;
$arguments492['maxlength'] = NULL;
$arguments492['readonly'] = NULL;
$arguments492['size'] = NULL;
$arguments492['placeholder'] = NULL;
$arguments492['pattern'] = NULL;
$arguments492['errorClass'] = 'f3-form-error';
$arguments492['class'] = NULL;
$arguments492['dir'] = NULL;
$arguments492['id'] = NULL;
$arguments492['lang'] = NULL;
$arguments492['style'] = NULL;
$arguments492['title'] = NULL;
$arguments492['accesskey'] = NULL;
$arguments492['tabindex'] = NULL;
$arguments492['onclick'] = NULL;
$arguments492['required'] = false;
$arguments492['type'] = 'text';
$arguments492['id'] = 'billingAddress-company';
$arguments492['class'] = 'form-control';
$arguments492['name'] = 'billingAddress[company]';
$array494 = array (
);$arguments492['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.company', $array494);
// Rendering Boolean node
// Rendering Array
$array495 = array();
$array495['0'] = 'true';

$expression496 = function($context) {return TRUE;};
$arguments492['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression496(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array495)
					),
					$renderingContext
				);

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output489 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
$output499 = '';

$output499 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$output505 = '';

$output505 .= '
                                            <div class="validation-error alert alert-danger">';
$array506 = array (
);
$output505 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.company.0.message', $array506)]);

$output505 .= '</div>
                                        ';
return $output505;
};
$arguments500 = array();
$arguments500['then'] = NULL;
$arguments500['else'] = NULL;
$arguments500['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array502 = array();
$array503 = array (
);$array502['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.company', $array503);

$expression504 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments500['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression504(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array502)
					),
					$renderingContext
				);
$arguments500['__thenClosure'] = $renderChildrenClosure501;

$output499 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output499 .= '
                                    ';
return $output499;
};
$arguments497 = array();
$arguments497['for'] = '';
$arguments497['as'] = 'validationResults';
$arguments497['for'] = 'billingAddress';

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext);

$output489 .= '
                                </div>
                            ';
return $output489;
};
$arguments487['__elseClosures'][] = function() use ($renderingContext, $self) {
$output507 = '';

$output507 .= '
                                <label for="billingAddress-company">
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
$arguments508['key'] = 'tx_cart_domain_model_order_address.company';

$output507 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext)]);

$output507 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments510 = array();
$arguments510['additionalAttributes'] = NULL;
$arguments510['data'] = NULL;
$arguments510['aria'] = NULL;
$arguments510['name'] = NULL;
$arguments510['value'] = NULL;
$arguments510['property'] = NULL;
$arguments510['autofocus'] = NULL;
$arguments510['disabled'] = NULL;
$arguments510['maxlength'] = NULL;
$arguments510['readonly'] = NULL;
$arguments510['size'] = NULL;
$arguments510['placeholder'] = NULL;
$arguments510['pattern'] = NULL;
$arguments510['errorClass'] = 'f3-form-error';
$arguments510['class'] = NULL;
$arguments510['dir'] = NULL;
$arguments510['id'] = NULL;
$arguments510['lang'] = NULL;
$arguments510['style'] = NULL;
$arguments510['title'] = NULL;
$arguments510['accesskey'] = NULL;
$arguments510['tabindex'] = NULL;
$arguments510['onclick'] = NULL;
$arguments510['required'] = false;
$arguments510['type'] = 'text';
$arguments510['id'] = 'billingAddress-company';
$arguments510['class'] = 'form-control';
$arguments510['name'] = 'billingAddress[company]';
$array512 = array (
);$arguments510['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.company', $array512);

$output507 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output507 .= '
                                </div>
                            ';
return $output507;
};

$output486 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output486 .= '
                    </div>
                ';
return $output486;
};
$arguments479 = array();
$arguments479['then'] = NULL;
$arguments479['else'] = NULL;
$arguments479['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array481 = array();
// Rendering Array
$array482 = array();
$array483 = array (
);$array482['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.company.validator', $array483);
$array481['0'] = $array482;
$array481['1'] = ' != ';
// Rendering Array
$array484 = array();
$array484['0'] = 'Empty';
$array481['2'] = $array484;

$expression485 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments479['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression485(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array481)
					),
					$renderingContext
				);
$arguments479['__thenClosure'] = $renderChildrenClosure480;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext);

$output0 .= '

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
$output554 = '';

$output554 .= '
                    <div class="field">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
$output589 = '';

$output589 .= '
                                <label for="billingAddress-taxIdentificationNumber" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments590 = array();
$arguments590['key'] = NULL;
$arguments590['id'] = NULL;
$arguments590['default'] = NULL;
$arguments590['arguments'] = NULL;
$arguments590['extensionName'] = NULL;
$arguments590['languageKey'] = NULL;
$arguments590['alternativeLanguageKeys'] = NULL;
$arguments590['key'] = 'tx_cart_domain_model_order_address.tax_identification_number';

$output589 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext)]);

$output589 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['additionalAttributes'] = NULL;
$arguments592['data'] = NULL;
$arguments592['aria'] = NULL;
$arguments592['name'] = NULL;
$arguments592['value'] = NULL;
$arguments592['property'] = NULL;
$arguments592['autofocus'] = NULL;
$arguments592['disabled'] = NULL;
$arguments592['maxlength'] = NULL;
$arguments592['readonly'] = NULL;
$arguments592['size'] = NULL;
$arguments592['placeholder'] = NULL;
$arguments592['pattern'] = NULL;
$arguments592['errorClass'] = 'f3-form-error';
$arguments592['class'] = NULL;
$arguments592['dir'] = NULL;
$arguments592['id'] = NULL;
$arguments592['lang'] = NULL;
$arguments592['style'] = NULL;
$arguments592['title'] = NULL;
$arguments592['accesskey'] = NULL;
$arguments592['tabindex'] = NULL;
$arguments592['onclick'] = NULL;
$arguments592['required'] = false;
$arguments592['type'] = 'text';
$arguments592['id'] = 'billingAddress-taxIdentificationNumber';
$arguments592['class'] = 'form-control';
$arguments592['name'] = 'billingAddress[taxIdentificationNumber]';
$array594 = array (
);$arguments592['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.taxIdentificationNumber', $array594);
// Rendering Boolean node
// Rendering Array
$array595 = array();
$array595['0'] = 'true';

$expression596 = function($context) {return TRUE;};
$arguments592['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression596(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array595)
					),
					$renderingContext
				);

$output589 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output589 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
$output599 = '';

$output599 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
$output605 = '';

$output605 .= '
                                            <div class="validation-error alert alert-danger">';
$array606 = array (
);
$output605 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.taxIdentificationNumber.0.message', $array606)]);

$output605 .= '</div>
                                        ';
return $output605;
};
$arguments600 = array();
$arguments600['then'] = NULL;
$arguments600['else'] = NULL;
$arguments600['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array602 = array();
$array603 = array (
);$array602['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.taxIdentificationNumber', $array603);

$expression604 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments600['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression604(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array602)
					),
					$renderingContext
				);
$arguments600['__thenClosure'] = $renderChildrenClosure601;

$output599 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext);

$output599 .= '
                                    ';
return $output599;
};
$arguments597 = array();
$arguments597['for'] = '';
$arguments597['as'] = 'validationResults';
$arguments597['for'] = 'billingAddress';

$output589 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext);

$output589 .= '
                                </div>
                            ';
return $output589;
};
$arguments587 = array();

$output586 .= '';

$output586 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure608 = function() use ($renderingContext, $self) {
$output609 = '';

$output609 .= '
                                <label for="billingAddress-taxIdentificationNumber">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments610 = array();
$arguments610['key'] = NULL;
$arguments610['id'] = NULL;
$arguments610['default'] = NULL;
$arguments610['arguments'] = NULL;
$arguments610['extensionName'] = NULL;
$arguments610['languageKey'] = NULL;
$arguments610['alternativeLanguageKeys'] = NULL;
$arguments610['key'] = 'tx_cart_domain_model_order_address.tax_identification_number';

$output609 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments610, $renderChildrenClosure611, $renderingContext)]);

$output609 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments612 = array();
$arguments612['additionalAttributes'] = NULL;
$arguments612['data'] = NULL;
$arguments612['aria'] = NULL;
$arguments612['name'] = NULL;
$arguments612['value'] = NULL;
$arguments612['property'] = NULL;
$arguments612['autofocus'] = NULL;
$arguments612['disabled'] = NULL;
$arguments612['maxlength'] = NULL;
$arguments612['readonly'] = NULL;
$arguments612['size'] = NULL;
$arguments612['placeholder'] = NULL;
$arguments612['pattern'] = NULL;
$arguments612['errorClass'] = 'f3-form-error';
$arguments612['class'] = NULL;
$arguments612['dir'] = NULL;
$arguments612['id'] = NULL;
$arguments612['lang'] = NULL;
$arguments612['style'] = NULL;
$arguments612['title'] = NULL;
$arguments612['accesskey'] = NULL;
$arguments612['tabindex'] = NULL;
$arguments612['onclick'] = NULL;
$arguments612['required'] = false;
$arguments612['type'] = 'text';
$arguments612['id'] = 'billingAddress-taxIdentificationNumber';
$arguments612['class'] = 'form-control';
$arguments612['name'] = 'billingAddress[taxIdentificationNumber]';
$array614 = array (
);$arguments612['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.taxIdentificationNumber', $array614);

$output609 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments612, $renderChildrenClosure613, $renderingContext);

$output609 .= '
                                </div>
                            ';
return $output609;
};
$arguments607 = array();
$arguments607['if'] = NULL;

$output586 .= '';

$output586 .= '
                        ';
return $output586;
};
$arguments555 = array();
$arguments555['then'] = NULL;
$arguments555['else'] = NULL;
$arguments555['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array581 = array();
// Rendering Array
$array582 = array();
$array583 = array (
);$array582['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.taxIdentificationNumber.validator', $array583);
$array581['0'] = $array582;
$array581['1'] = ' == ';
// Rendering Array
$array584 = array();
$array584['0'] = 'NotEmpty';
$array581['2'] = $array584;

$expression585 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments555['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression585(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array581)
					),
					$renderingContext
				);
$arguments555['__thenClosure'] = function() use ($renderingContext, $self) {
$output557 = '';

$output557 .= '
                                <label for="billingAddress-taxIdentificationNumber" class="required">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments558 = array();
$arguments558['key'] = NULL;
$arguments558['id'] = NULL;
$arguments558['default'] = NULL;
$arguments558['arguments'] = NULL;
$arguments558['extensionName'] = NULL;
$arguments558['languageKey'] = NULL;
$arguments558['alternativeLanguageKeys'] = NULL;
$arguments558['key'] = 'tx_cart_domain_model_order_address.tax_identification_number';

$output557 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext)]);

$output557 .= '
                                    <em>*</em>
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments560 = array();
$arguments560['additionalAttributes'] = NULL;
$arguments560['data'] = NULL;
$arguments560['aria'] = NULL;
$arguments560['name'] = NULL;
$arguments560['value'] = NULL;
$arguments560['property'] = NULL;
$arguments560['autofocus'] = NULL;
$arguments560['disabled'] = NULL;
$arguments560['maxlength'] = NULL;
$arguments560['readonly'] = NULL;
$arguments560['size'] = NULL;
$arguments560['placeholder'] = NULL;
$arguments560['pattern'] = NULL;
$arguments560['errorClass'] = 'f3-form-error';
$arguments560['class'] = NULL;
$arguments560['dir'] = NULL;
$arguments560['id'] = NULL;
$arguments560['lang'] = NULL;
$arguments560['style'] = NULL;
$arguments560['title'] = NULL;
$arguments560['accesskey'] = NULL;
$arguments560['tabindex'] = NULL;
$arguments560['onclick'] = NULL;
$arguments560['required'] = false;
$arguments560['type'] = 'text';
$arguments560['id'] = 'billingAddress-taxIdentificationNumber';
$arguments560['class'] = 'form-control';
$arguments560['name'] = 'billingAddress[taxIdentificationNumber]';
$array562 = array (
);$arguments560['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.taxIdentificationNumber', $array562);
// Rendering Boolean node
// Rendering Array
$array563 = array();
$array563['0'] = 'true';

$expression564 = function($context) {return TRUE;};
$arguments560['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression564(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array563)
					),
					$renderingContext
				);

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments560, $renderChildrenClosure561, $renderingContext);

$output557 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
$output567 = '';

$output567 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
$output573 = '';

$output573 .= '
                                            <div class="validation-error alert alert-danger">';
$array574 = array (
);
$output573 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.taxIdentificationNumber.0.message', $array574)]);

$output573 .= '</div>
                                        ';
return $output573;
};
$arguments568 = array();
$arguments568['then'] = NULL;
$arguments568['else'] = NULL;
$arguments568['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array570 = array();
$array571 = array (
);$array570['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.taxIdentificationNumber', $array571);

$expression572 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments568['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression572(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array570)
					),
					$renderingContext
				);
$arguments568['__thenClosure'] = $renderChildrenClosure569;

$output567 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments568, $renderChildrenClosure569, $renderingContext);

$output567 .= '
                                    ';
return $output567;
};
$arguments565 = array();
$arguments565['for'] = '';
$arguments565['as'] = 'validationResults';
$arguments565['for'] = 'billingAddress';

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output557 .= '
                                </div>
                            ';
return $output557;
};
$arguments555['__elseClosures'][] = function() use ($renderingContext, $self) {
$output575 = '';

$output575 .= '
                                <label for="billingAddress-taxIdentificationNumber">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure577 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments576 = array();
$arguments576['key'] = NULL;
$arguments576['id'] = NULL;
$arguments576['default'] = NULL;
$arguments576['arguments'] = NULL;
$arguments576['extensionName'] = NULL;
$arguments576['languageKey'] = NULL;
$arguments576['alternativeLanguageKeys'] = NULL;
$arguments576['key'] = 'tx_cart_domain_model_order_address.tax_identification_number';

$output575 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments576, $renderChildrenClosure577, $renderingContext)]);

$output575 .= '
                                </label>
                                <div class="input-box">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments578 = array();
$arguments578['additionalAttributes'] = NULL;
$arguments578['data'] = NULL;
$arguments578['aria'] = NULL;
$arguments578['name'] = NULL;
$arguments578['value'] = NULL;
$arguments578['property'] = NULL;
$arguments578['autofocus'] = NULL;
$arguments578['disabled'] = NULL;
$arguments578['maxlength'] = NULL;
$arguments578['readonly'] = NULL;
$arguments578['size'] = NULL;
$arguments578['placeholder'] = NULL;
$arguments578['pattern'] = NULL;
$arguments578['errorClass'] = 'f3-form-error';
$arguments578['class'] = NULL;
$arguments578['dir'] = NULL;
$arguments578['id'] = NULL;
$arguments578['lang'] = NULL;
$arguments578['style'] = NULL;
$arguments578['title'] = NULL;
$arguments578['accesskey'] = NULL;
$arguments578['tabindex'] = NULL;
$arguments578['onclick'] = NULL;
$arguments578['required'] = false;
$arguments578['type'] = 'text';
$arguments578['id'] = 'billingAddress-taxIdentificationNumber';
$arguments578['class'] = 'form-control';
$arguments578['name'] = 'billingAddress[taxIdentificationNumber]';
$array580 = array (
);$arguments578['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.taxIdentificationNumber', $array580);

$output575 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext);

$output575 .= '
                                </div>
                            ';
return $output575;
};

$output554 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext);

$output554 .= '
                    </div>
                ';
return $output554;
};
$arguments547 = array();
$arguments547['then'] = NULL;
$arguments547['else'] = NULL;
$arguments547['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array549 = array();
// Rendering Array
$array550 = array();
$array551 = array (
);$array550['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.taxIdentificationNumber.validator', $array551);
$array549['0'] = $array550;
$array549['1'] = ' != ';
// Rendering Array
$array552 = array();
$array552['0'] = 'Empty';
$array549['2'] = $array552;

$expression553 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments547['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression553(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array549)
					),
					$renderingContext
				);
$arguments547['__thenClosure'] = $renderChildrenClosure548;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);

$output0 .= '

                <div class="field">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
$output820 = '';

$output820 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure822 = function() use ($renderingContext, $self) {
$output823 = '';

$output823 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure825 = function() use ($renderingContext, $self) {
$output831 = '';

$output831 .= '
                                <div class="row">
                                    <div class="col-sm-8 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure833 = function() use ($renderingContext, $self) {
$output863 = '';

$output863 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure865 = function() use ($renderingContext, $self) {
$output866 = '';

$output866 .= '
                                                <label for="billingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure868 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments867 = array();
$arguments867['key'] = NULL;
$arguments867['id'] = NULL;
$arguments867['default'] = NULL;
$arguments867['arguments'] = NULL;
$arguments867['extensionName'] = NULL;
$arguments867['languageKey'] = NULL;
$arguments867['alternativeLanguageKeys'] = NULL;
$arguments867['key'] = 'tx_cart_domain_model_order_address.street';

$output866 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments867, $renderChildrenClosure868, $renderingContext)]);

$output866 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure870 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments869 = array();
$arguments869['additionalAttributes'] = NULL;
$arguments869['data'] = NULL;
$arguments869['aria'] = NULL;
$arguments869['name'] = NULL;
$arguments869['value'] = NULL;
$arguments869['property'] = NULL;
$arguments869['autofocus'] = NULL;
$arguments869['disabled'] = NULL;
$arguments869['maxlength'] = NULL;
$arguments869['readonly'] = NULL;
$arguments869['size'] = NULL;
$arguments869['placeholder'] = NULL;
$arguments869['pattern'] = NULL;
$arguments869['errorClass'] = 'f3-form-error';
$arguments869['class'] = NULL;
$arguments869['dir'] = NULL;
$arguments869['id'] = NULL;
$arguments869['lang'] = NULL;
$arguments869['style'] = NULL;
$arguments869['title'] = NULL;
$arguments869['accesskey'] = NULL;
$arguments869['tabindex'] = NULL;
$arguments869['onclick'] = NULL;
$arguments869['required'] = false;
$arguments869['type'] = 'text';
$arguments869['id'] = 'billingAddress-street';
$arguments869['class'] = 'form-control';
$arguments869['name'] = 'billingAddress[street]';
$array871 = array (
);$arguments869['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array871);
// Rendering Boolean node
// Rendering Array
$array872 = array();
$array872['0'] = 'true';

$expression873 = function($context) {return TRUE;};
$arguments869['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression873(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array872)
					),
					$renderingContext
				);

$output866 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments869, $renderChildrenClosure870, $renderingContext);

$output866 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure875 = function() use ($renderingContext, $self) {
$output876 = '';

$output876 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure878 = function() use ($renderingContext, $self) {
$output882 = '';

$output882 .= '
                                                            <div class="validation-error alert alert-danger">';
$array883 = array (
);
$output882 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array883)]);

$output882 .= '</div>
                                                        ';
return $output882;
};
$arguments877 = array();
$arguments877['then'] = NULL;
$arguments877['else'] = NULL;
$arguments877['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array879 = array();
$array880 = array (
);$array879['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array880);

$expression881 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments877['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression881(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array879)
					),
					$renderingContext
				);
$arguments877['__thenClosure'] = $renderChildrenClosure878;

$output876 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments877, $renderChildrenClosure878, $renderingContext);

$output876 .= '
                                                    ';
return $output876;
};
$arguments874 = array();
$arguments874['for'] = '';
$arguments874['as'] = 'validationResults';
$arguments874['for'] = 'billingAddress';

$output866 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments874, $renderChildrenClosure875, $renderingContext);

$output866 .= '
                                                </div>
                                            ';
return $output866;
};
$arguments864 = array();

$output863 .= '';

$output863 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure885 = function() use ($renderingContext, $self) {
$output886 = '';

$output886 .= '
                                                <label for="billingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments887 = array();
$arguments887['key'] = NULL;
$arguments887['id'] = NULL;
$arguments887['default'] = NULL;
$arguments887['arguments'] = NULL;
$arguments887['extensionName'] = NULL;
$arguments887['languageKey'] = NULL;
$arguments887['alternativeLanguageKeys'] = NULL;
$arguments887['key'] = 'tx_cart_domain_model_order_address.street';

$output886 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments887, $renderChildrenClosure888, $renderingContext)]);

$output886 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure890 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments889 = array();
$arguments889['additionalAttributes'] = NULL;
$arguments889['data'] = NULL;
$arguments889['aria'] = NULL;
$arguments889['name'] = NULL;
$arguments889['value'] = NULL;
$arguments889['property'] = NULL;
$arguments889['autofocus'] = NULL;
$arguments889['disabled'] = NULL;
$arguments889['maxlength'] = NULL;
$arguments889['readonly'] = NULL;
$arguments889['size'] = NULL;
$arguments889['placeholder'] = NULL;
$arguments889['pattern'] = NULL;
$arguments889['errorClass'] = 'f3-form-error';
$arguments889['class'] = NULL;
$arguments889['dir'] = NULL;
$arguments889['id'] = NULL;
$arguments889['lang'] = NULL;
$arguments889['style'] = NULL;
$arguments889['title'] = NULL;
$arguments889['accesskey'] = NULL;
$arguments889['tabindex'] = NULL;
$arguments889['onclick'] = NULL;
$arguments889['required'] = false;
$arguments889['type'] = 'text';
$arguments889['id'] = 'billingAddress-street';
$arguments889['class'] = 'form-control';
$arguments889['name'] = 'billingAddress[street]';
$array891 = array (
);$arguments889['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array891);

$output886 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments889, $renderChildrenClosure890, $renderingContext);

$output886 .= '
                                                </div>
                                            ';
return $output886;
};
$arguments884 = array();
$arguments884['if'] = NULL;

$output863 .= '';

$output863 .= '
                                        ';
return $output863;
};
$arguments832 = array();
$arguments832['then'] = NULL;
$arguments832['else'] = NULL;
$arguments832['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array858 = array();
// Rendering Array
$array859 = array();
$array860 = array (
);$array859['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.street.validator', $array860);
$array858['0'] = $array859;
$array858['1'] = ' == ';
// Rendering Array
$array861 = array();
$array861['0'] = 'NotEmpty';
$array858['2'] = $array861;

$expression862 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments832['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression862(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array858)
					),
					$renderingContext
				);
$arguments832['__thenClosure'] = function() use ($renderingContext, $self) {
$output834 = '';

$output834 .= '
                                                <label for="billingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure836 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments835 = array();
$arguments835['key'] = NULL;
$arguments835['id'] = NULL;
$arguments835['default'] = NULL;
$arguments835['arguments'] = NULL;
$arguments835['extensionName'] = NULL;
$arguments835['languageKey'] = NULL;
$arguments835['alternativeLanguageKeys'] = NULL;
$arguments835['key'] = 'tx_cart_domain_model_order_address.street';

$output834 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments835, $renderChildrenClosure836, $renderingContext)]);

$output834 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure838 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments837 = array();
$arguments837['additionalAttributes'] = NULL;
$arguments837['data'] = NULL;
$arguments837['aria'] = NULL;
$arguments837['name'] = NULL;
$arguments837['value'] = NULL;
$arguments837['property'] = NULL;
$arguments837['autofocus'] = NULL;
$arguments837['disabled'] = NULL;
$arguments837['maxlength'] = NULL;
$arguments837['readonly'] = NULL;
$arguments837['size'] = NULL;
$arguments837['placeholder'] = NULL;
$arguments837['pattern'] = NULL;
$arguments837['errorClass'] = 'f3-form-error';
$arguments837['class'] = NULL;
$arguments837['dir'] = NULL;
$arguments837['id'] = NULL;
$arguments837['lang'] = NULL;
$arguments837['style'] = NULL;
$arguments837['title'] = NULL;
$arguments837['accesskey'] = NULL;
$arguments837['tabindex'] = NULL;
$arguments837['onclick'] = NULL;
$arguments837['required'] = false;
$arguments837['type'] = 'text';
$arguments837['id'] = 'billingAddress-street';
$arguments837['class'] = 'form-control';
$arguments837['name'] = 'billingAddress[street]';
$array839 = array (
);$arguments837['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array839);
// Rendering Boolean node
// Rendering Array
$array840 = array();
$array840['0'] = 'true';

$expression841 = function($context) {return TRUE;};
$arguments837['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression841(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array840)
					),
					$renderingContext
				);

$output834 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments837, $renderChildrenClosure838, $renderingContext);

$output834 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure843 = function() use ($renderingContext, $self) {
$output844 = '';

$output844 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
$output850 = '';

$output850 .= '
                                                            <div class="validation-error alert alert-danger">';
$array851 = array (
);
$output850 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array851)]);

$output850 .= '</div>
                                                        ';
return $output850;
};
$arguments845 = array();
$arguments845['then'] = NULL;
$arguments845['else'] = NULL;
$arguments845['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array847 = array();
$array848 = array (
);$array847['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array848);

$expression849 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments845['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression849(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array847)
					),
					$renderingContext
				);
$arguments845['__thenClosure'] = $renderChildrenClosure846;

$output844 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext);

$output844 .= '
                                                    ';
return $output844;
};
$arguments842 = array();
$arguments842['for'] = '';
$arguments842['as'] = 'validationResults';
$arguments842['for'] = 'billingAddress';

$output834 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments842, $renderChildrenClosure843, $renderingContext);

$output834 .= '
                                                </div>
                                            ';
return $output834;
};
$arguments832['__elseClosures'][] = function() use ($renderingContext, $self) {
$output852 = '';

$output852 .= '
                                                <label for="billingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure854 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments853 = array();
$arguments853['key'] = NULL;
$arguments853['id'] = NULL;
$arguments853['default'] = NULL;
$arguments853['arguments'] = NULL;
$arguments853['extensionName'] = NULL;
$arguments853['languageKey'] = NULL;
$arguments853['alternativeLanguageKeys'] = NULL;
$arguments853['key'] = 'tx_cart_domain_model_order_address.street';

$output852 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments853, $renderChildrenClosure854, $renderingContext)]);

$output852 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure856 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments855 = array();
$arguments855['additionalAttributes'] = NULL;
$arguments855['data'] = NULL;
$arguments855['aria'] = NULL;
$arguments855['name'] = NULL;
$arguments855['value'] = NULL;
$arguments855['property'] = NULL;
$arguments855['autofocus'] = NULL;
$arguments855['disabled'] = NULL;
$arguments855['maxlength'] = NULL;
$arguments855['readonly'] = NULL;
$arguments855['size'] = NULL;
$arguments855['placeholder'] = NULL;
$arguments855['pattern'] = NULL;
$arguments855['errorClass'] = 'f3-form-error';
$arguments855['class'] = NULL;
$arguments855['dir'] = NULL;
$arguments855['id'] = NULL;
$arguments855['lang'] = NULL;
$arguments855['style'] = NULL;
$arguments855['title'] = NULL;
$arguments855['accesskey'] = NULL;
$arguments855['tabindex'] = NULL;
$arguments855['onclick'] = NULL;
$arguments855['required'] = false;
$arguments855['type'] = 'text';
$arguments855['id'] = 'billingAddress-street';
$arguments855['class'] = 'form-control';
$arguments855['name'] = 'billingAddress[street]';
$array857 = array (
);$arguments855['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array857);

$output852 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments855, $renderChildrenClosure856, $renderingContext);

$output852 .= '
                                                </div>
                                            ';
return $output852;
};

$output831 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments832, $renderChildrenClosure833, $renderingContext);

$output831 .= '
                                    </div>
                                    <div class="col-sm-4 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure893 = function() use ($renderingContext, $self) {
$output923 = '';

$output923 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure925 = function() use ($renderingContext, $self) {
$output926 = '';

$output926 .= '
                                                <label for="billingAddress-streetNumber" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure928 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments927 = array();
$arguments927['key'] = NULL;
$arguments927['id'] = NULL;
$arguments927['default'] = NULL;
$arguments927['arguments'] = NULL;
$arguments927['extensionName'] = NULL;
$arguments927['languageKey'] = NULL;
$arguments927['alternativeLanguageKeys'] = NULL;
$arguments927['key'] = 'tx_cart_domain_model_order_address.street_number';

$output926 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments927, $renderChildrenClosure928, $renderingContext)]);

$output926 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure930 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments929 = array();
$arguments929['additionalAttributes'] = NULL;
$arguments929['data'] = NULL;
$arguments929['aria'] = NULL;
$arguments929['name'] = NULL;
$arguments929['value'] = NULL;
$arguments929['property'] = NULL;
$arguments929['autofocus'] = NULL;
$arguments929['disabled'] = NULL;
$arguments929['maxlength'] = NULL;
$arguments929['readonly'] = NULL;
$arguments929['size'] = NULL;
$arguments929['placeholder'] = NULL;
$arguments929['pattern'] = NULL;
$arguments929['errorClass'] = 'f3-form-error';
$arguments929['class'] = NULL;
$arguments929['dir'] = NULL;
$arguments929['id'] = NULL;
$arguments929['lang'] = NULL;
$arguments929['style'] = NULL;
$arguments929['title'] = NULL;
$arguments929['accesskey'] = NULL;
$arguments929['tabindex'] = NULL;
$arguments929['onclick'] = NULL;
$arguments929['required'] = false;
$arguments929['type'] = 'text';
$arguments929['id'] = 'billingAddress-streetNumber';
$arguments929['class'] = 'form-control';
$arguments929['name'] = 'billingAddress[streetNumber]';
$array931 = array (
);$arguments929['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.streetNumber', $array931);
// Rendering Boolean node
// Rendering Array
$array932 = array();
$array932['0'] = 'true';

$expression933 = function($context) {return TRUE;};
$arguments929['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression933(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array932)
					),
					$renderingContext
				);

$output926 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments929, $renderChildrenClosure930, $renderingContext);

$output926 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure935 = function() use ($renderingContext, $self) {
$output936 = '';

$output936 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure938 = function() use ($renderingContext, $self) {
$output942 = '';

$output942 .= '
                                                            <div class="validation-error alert alert-danger">';
$array943 = array (
);
$output942 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber.0.message', $array943)]);

$output942 .= '</div>
                                                        ';
return $output942;
};
$arguments937 = array();
$arguments937['then'] = NULL;
$arguments937['else'] = NULL;
$arguments937['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array939 = array();
$array940 = array (
);$array939['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber', $array940);

$expression941 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments937['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression941(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array939)
					),
					$renderingContext
				);
$arguments937['__thenClosure'] = $renderChildrenClosure938;

$output936 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments937, $renderChildrenClosure938, $renderingContext);

$output936 .= '
                                                    ';
return $output936;
};
$arguments934 = array();
$arguments934['for'] = '';
$arguments934['as'] = 'validationResults';
$arguments934['for'] = 'billingAddress';

$output926 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments934, $renderChildrenClosure935, $renderingContext);

$output926 .= '
                                                </div>
                                            ';
return $output926;
};
$arguments924 = array();

$output923 .= '';

$output923 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure945 = function() use ($renderingContext, $self) {
$output946 = '';

$output946 .= '
                                                <label for="billingAddress-streetNumber">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure948 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments947 = array();
$arguments947['key'] = NULL;
$arguments947['id'] = NULL;
$arguments947['default'] = NULL;
$arguments947['arguments'] = NULL;
$arguments947['extensionName'] = NULL;
$arguments947['languageKey'] = NULL;
$arguments947['alternativeLanguageKeys'] = NULL;
$arguments947['key'] = 'tx_cart_domain_model_order_address.street_number';

$output946 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments947, $renderChildrenClosure948, $renderingContext)]);

$output946 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure950 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments949 = array();
$arguments949['additionalAttributes'] = NULL;
$arguments949['data'] = NULL;
$arguments949['aria'] = NULL;
$arguments949['name'] = NULL;
$arguments949['value'] = NULL;
$arguments949['property'] = NULL;
$arguments949['autofocus'] = NULL;
$arguments949['disabled'] = NULL;
$arguments949['maxlength'] = NULL;
$arguments949['readonly'] = NULL;
$arguments949['size'] = NULL;
$arguments949['placeholder'] = NULL;
$arguments949['pattern'] = NULL;
$arguments949['errorClass'] = 'f3-form-error';
$arguments949['class'] = NULL;
$arguments949['dir'] = NULL;
$arguments949['id'] = NULL;
$arguments949['lang'] = NULL;
$arguments949['style'] = NULL;
$arguments949['title'] = NULL;
$arguments949['accesskey'] = NULL;
$arguments949['tabindex'] = NULL;
$arguments949['onclick'] = NULL;
$arguments949['required'] = false;
$arguments949['type'] = 'text';
$arguments949['id'] = 'billingAddress-streetNumber';
$arguments949['class'] = 'form-control';
$arguments949['name'] = 'billingAddress[streetNumber]';
$array951 = array (
);$arguments949['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.streetNumber', $array951);

$output946 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments949, $renderChildrenClosure950, $renderingContext);

$output946 .= '
                                                </div>
                                            ';
return $output946;
};
$arguments944 = array();
$arguments944['if'] = NULL;

$output923 .= '';

$output923 .= '
                                        ';
return $output923;
};
$arguments892 = array();
$arguments892['then'] = NULL;
$arguments892['else'] = NULL;
$arguments892['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array918 = array();
// Rendering Array
$array919 = array();
$array920 = array (
);$array919['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.streetNumber.validator', $array920);
$array918['0'] = $array919;
$array918['1'] = ' == ';
// Rendering Array
$array921 = array();
$array921['0'] = 'NotEmpty';
$array918['2'] = $array921;

$expression922 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments892['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression922(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array918)
					),
					$renderingContext
				);
$arguments892['__thenClosure'] = function() use ($renderingContext, $self) {
$output894 = '';

$output894 .= '
                                                <label for="billingAddress-streetNumber" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure896 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments895 = array();
$arguments895['key'] = NULL;
$arguments895['id'] = NULL;
$arguments895['default'] = NULL;
$arguments895['arguments'] = NULL;
$arguments895['extensionName'] = NULL;
$arguments895['languageKey'] = NULL;
$arguments895['alternativeLanguageKeys'] = NULL;
$arguments895['key'] = 'tx_cart_domain_model_order_address.street_number';

$output894 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments895, $renderChildrenClosure896, $renderingContext)]);

$output894 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure898 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments897 = array();
$arguments897['additionalAttributes'] = NULL;
$arguments897['data'] = NULL;
$arguments897['aria'] = NULL;
$arguments897['name'] = NULL;
$arguments897['value'] = NULL;
$arguments897['property'] = NULL;
$arguments897['autofocus'] = NULL;
$arguments897['disabled'] = NULL;
$arguments897['maxlength'] = NULL;
$arguments897['readonly'] = NULL;
$arguments897['size'] = NULL;
$arguments897['placeholder'] = NULL;
$arguments897['pattern'] = NULL;
$arguments897['errorClass'] = 'f3-form-error';
$arguments897['class'] = NULL;
$arguments897['dir'] = NULL;
$arguments897['id'] = NULL;
$arguments897['lang'] = NULL;
$arguments897['style'] = NULL;
$arguments897['title'] = NULL;
$arguments897['accesskey'] = NULL;
$arguments897['tabindex'] = NULL;
$arguments897['onclick'] = NULL;
$arguments897['required'] = false;
$arguments897['type'] = 'text';
$arguments897['id'] = 'billingAddress-streetNumber';
$arguments897['class'] = 'form-control';
$arguments897['name'] = 'billingAddress[streetNumber]';
$array899 = array (
);$arguments897['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.streetNumber', $array899);
// Rendering Boolean node
// Rendering Array
$array900 = array();
$array900['0'] = 'true';

$expression901 = function($context) {return TRUE;};
$arguments897['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression901(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array900)
					),
					$renderingContext
				);

$output894 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments897, $renderChildrenClosure898, $renderingContext);

$output894 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure903 = function() use ($renderingContext, $self) {
$output904 = '';

$output904 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure906 = function() use ($renderingContext, $self) {
$output910 = '';

$output910 .= '
                                                            <div class="validation-error alert alert-danger">';
$array911 = array (
);
$output910 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber.0.message', $array911)]);

$output910 .= '</div>
                                                        ';
return $output910;
};
$arguments905 = array();
$arguments905['then'] = NULL;
$arguments905['else'] = NULL;
$arguments905['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array907 = array();
$array908 = array (
);$array907['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber', $array908);

$expression909 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments905['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression909(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array907)
					),
					$renderingContext
				);
$arguments905['__thenClosure'] = $renderChildrenClosure906;

$output904 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments905, $renderChildrenClosure906, $renderingContext);

$output904 .= '
                                                    ';
return $output904;
};
$arguments902 = array();
$arguments902['for'] = '';
$arguments902['as'] = 'validationResults';
$arguments902['for'] = 'billingAddress';

$output894 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments902, $renderChildrenClosure903, $renderingContext);

$output894 .= '
                                                </div>
                                            ';
return $output894;
};
$arguments892['__elseClosures'][] = function() use ($renderingContext, $self) {
$output912 = '';

$output912 .= '
                                                <label for="billingAddress-streetNumber">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure914 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments913 = array();
$arguments913['key'] = NULL;
$arguments913['id'] = NULL;
$arguments913['default'] = NULL;
$arguments913['arguments'] = NULL;
$arguments913['extensionName'] = NULL;
$arguments913['languageKey'] = NULL;
$arguments913['alternativeLanguageKeys'] = NULL;
$arguments913['key'] = 'tx_cart_domain_model_order_address.street_number';

$output912 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments913, $renderChildrenClosure914, $renderingContext)]);

$output912 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure916 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments915 = array();
$arguments915['additionalAttributes'] = NULL;
$arguments915['data'] = NULL;
$arguments915['aria'] = NULL;
$arguments915['name'] = NULL;
$arguments915['value'] = NULL;
$arguments915['property'] = NULL;
$arguments915['autofocus'] = NULL;
$arguments915['disabled'] = NULL;
$arguments915['maxlength'] = NULL;
$arguments915['readonly'] = NULL;
$arguments915['size'] = NULL;
$arguments915['placeholder'] = NULL;
$arguments915['pattern'] = NULL;
$arguments915['errorClass'] = 'f3-form-error';
$arguments915['class'] = NULL;
$arguments915['dir'] = NULL;
$arguments915['id'] = NULL;
$arguments915['lang'] = NULL;
$arguments915['style'] = NULL;
$arguments915['title'] = NULL;
$arguments915['accesskey'] = NULL;
$arguments915['tabindex'] = NULL;
$arguments915['onclick'] = NULL;
$arguments915['required'] = false;
$arguments915['type'] = 'text';
$arguments915['id'] = 'billingAddress-streetNumber';
$arguments915['class'] = 'form-control';
$arguments915['name'] = 'billingAddress[streetNumber]';
$array917 = array (
);$arguments915['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.streetNumber', $array917);

$output912 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments915, $renderChildrenClosure916, $renderingContext);

$output912 .= '
                                                </div>
                                            ';
return $output912;
};

$output831 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments892, $renderChildrenClosure893, $renderingContext);

$output831 .= '
                                    </div>
                                </div>
                            ';
return $output831;
};
$arguments824 = array();
$arguments824['then'] = NULL;
$arguments824['else'] = NULL;
$arguments824['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array826 = array();
// Rendering Array
$array827 = array();
$array828 = array (
);$array827['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.street.validator', $array828);
$array826['0'] = $array827;
$array826['1'] = ' != ';
// Rendering Array
$array829 = array();
$array829['0'] = 'Empty';
$array826['2'] = $array829;

$expression830 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments824['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression830(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array826)
					),
					$renderingContext
				);
$arguments824['__thenClosure'] = $renderChildrenClosure825;

$output823 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments824, $renderChildrenClosure825, $renderingContext);

$output823 .= '
                        ';
return $output823;
};
$arguments821 = array();

$output820 .= '';

$output820 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure953 = function() use ($renderingContext, $self) {
$output954 = '';

$output954 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure956 = function() use ($renderingContext, $self) {
$output962 = '';

$output962 .= '
                                <div class="row">
                                    <div class="col-sm-12 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure964 = function() use ($renderingContext, $self) {
$output994 = '';

$output994 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure996 = function() use ($renderingContext, $self) {
$output997 = '';

$output997 .= '
                                                <label for="billingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure999 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments998 = array();
$arguments998['key'] = NULL;
$arguments998['id'] = NULL;
$arguments998['default'] = NULL;
$arguments998['arguments'] = NULL;
$arguments998['extensionName'] = NULL;
$arguments998['languageKey'] = NULL;
$arguments998['alternativeLanguageKeys'] = NULL;
$arguments998['key'] = 'tx_cart_domain_model_order_address.street';

$output997 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments998, $renderChildrenClosure999, $renderingContext)]);

$output997 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1001 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1000 = array();
$arguments1000['additionalAttributes'] = NULL;
$arguments1000['data'] = NULL;
$arguments1000['aria'] = NULL;
$arguments1000['name'] = NULL;
$arguments1000['value'] = NULL;
$arguments1000['property'] = NULL;
$arguments1000['autofocus'] = NULL;
$arguments1000['disabled'] = NULL;
$arguments1000['maxlength'] = NULL;
$arguments1000['readonly'] = NULL;
$arguments1000['size'] = NULL;
$arguments1000['placeholder'] = NULL;
$arguments1000['pattern'] = NULL;
$arguments1000['errorClass'] = 'f3-form-error';
$arguments1000['class'] = NULL;
$arguments1000['dir'] = NULL;
$arguments1000['id'] = NULL;
$arguments1000['lang'] = NULL;
$arguments1000['style'] = NULL;
$arguments1000['title'] = NULL;
$arguments1000['accesskey'] = NULL;
$arguments1000['tabindex'] = NULL;
$arguments1000['onclick'] = NULL;
$arguments1000['required'] = false;
$arguments1000['type'] = 'text';
$arguments1000['id'] = 'billingAddress-street';
$arguments1000['class'] = 'form-control';
$arguments1000['name'] = 'billingAddress[street]';
$array1002 = array (
);$arguments1000['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array1002);
// Rendering Boolean node
// Rendering Array
$array1003 = array();
$array1003['0'] = 'true';

$expression1004 = function($context) {return TRUE;};
$arguments1000['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1004(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1003)
					),
					$renderingContext
				);

$output997 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1000, $renderChildrenClosure1001, $renderingContext);

$output997 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1006 = function() use ($renderingContext, $self) {
$output1007 = '';

$output1007 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1009 = function() use ($renderingContext, $self) {
$output1013 = '';

$output1013 .= '
                                                            <div class="validation-error alert alert-danger">';
$array1014 = array (
);
$output1013 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array1014)]);

$output1013 .= '</div>
                                                        ';
return $output1013;
};
$arguments1008 = array();
$arguments1008['then'] = NULL;
$arguments1008['else'] = NULL;
$arguments1008['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1010 = array();
$array1011 = array (
);$array1010['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array1011);

$expression1012 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1008['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1012(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1010)
					),
					$renderingContext
				);
$arguments1008['__thenClosure'] = $renderChildrenClosure1009;

$output1007 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1008, $renderChildrenClosure1009, $renderingContext);

$output1007 .= '
                                                    ';
return $output1007;
};
$arguments1005 = array();
$arguments1005['for'] = '';
$arguments1005['as'] = 'validationResults';
$arguments1005['for'] = 'billingAddress';

$output997 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1005, $renderChildrenClosure1006, $renderingContext);

$output997 .= '
                                                </div>
                                            ';
return $output997;
};
$arguments995 = array();

$output994 .= '';

$output994 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1016 = function() use ($renderingContext, $self) {
$output1017 = '';

$output1017 .= '
                                                <label for="billingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1019 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1018 = array();
$arguments1018['key'] = NULL;
$arguments1018['id'] = NULL;
$arguments1018['default'] = NULL;
$arguments1018['arguments'] = NULL;
$arguments1018['extensionName'] = NULL;
$arguments1018['languageKey'] = NULL;
$arguments1018['alternativeLanguageKeys'] = NULL;
$arguments1018['key'] = 'tx_cart_domain_model_order_address.street';

$output1017 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1018, $renderChildrenClosure1019, $renderingContext)]);

$output1017 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1021 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1020 = array();
$arguments1020['additionalAttributes'] = NULL;
$arguments1020['data'] = NULL;
$arguments1020['aria'] = NULL;
$arguments1020['name'] = NULL;
$arguments1020['value'] = NULL;
$arguments1020['property'] = NULL;
$arguments1020['autofocus'] = NULL;
$arguments1020['disabled'] = NULL;
$arguments1020['maxlength'] = NULL;
$arguments1020['readonly'] = NULL;
$arguments1020['size'] = NULL;
$arguments1020['placeholder'] = NULL;
$arguments1020['pattern'] = NULL;
$arguments1020['errorClass'] = 'f3-form-error';
$arguments1020['class'] = NULL;
$arguments1020['dir'] = NULL;
$arguments1020['id'] = NULL;
$arguments1020['lang'] = NULL;
$arguments1020['style'] = NULL;
$arguments1020['title'] = NULL;
$arguments1020['accesskey'] = NULL;
$arguments1020['tabindex'] = NULL;
$arguments1020['onclick'] = NULL;
$arguments1020['required'] = false;
$arguments1020['type'] = 'text';
$arguments1020['id'] = 'billingAddress-street';
$arguments1020['class'] = 'form-control';
$arguments1020['name'] = 'billingAddress[street]';
$array1022 = array (
);$arguments1020['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array1022);

$output1017 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1020, $renderChildrenClosure1021, $renderingContext);

$output1017 .= '
                                                </div>
                                            ';
return $output1017;
};
$arguments1015 = array();
$arguments1015['if'] = NULL;

$output994 .= '';

$output994 .= '
                                        ';
return $output994;
};
$arguments963 = array();
$arguments963['then'] = NULL;
$arguments963['else'] = NULL;
$arguments963['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array989 = array();
// Rendering Array
$array990 = array();
$array991 = array (
);$array990['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.street.validator', $array991);
$array989['0'] = $array990;
$array989['1'] = ' == ';
// Rendering Array
$array992 = array();
$array992['0'] = 'NotEmpty';
$array989['2'] = $array992;

$expression993 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments963['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression993(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array989)
					),
					$renderingContext
				);
$arguments963['__thenClosure'] = function() use ($renderingContext, $self) {
$output965 = '';

$output965 .= '
                                                <label for="billingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure967 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments966 = array();
$arguments966['key'] = NULL;
$arguments966['id'] = NULL;
$arguments966['default'] = NULL;
$arguments966['arguments'] = NULL;
$arguments966['extensionName'] = NULL;
$arguments966['languageKey'] = NULL;
$arguments966['alternativeLanguageKeys'] = NULL;
$arguments966['key'] = 'tx_cart_domain_model_order_address.street';

$output965 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments966, $renderChildrenClosure967, $renderingContext)]);

$output965 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure969 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments968 = array();
$arguments968['additionalAttributes'] = NULL;
$arguments968['data'] = NULL;
$arguments968['aria'] = NULL;
$arguments968['name'] = NULL;
$arguments968['value'] = NULL;
$arguments968['property'] = NULL;
$arguments968['autofocus'] = NULL;
$arguments968['disabled'] = NULL;
$arguments968['maxlength'] = NULL;
$arguments968['readonly'] = NULL;
$arguments968['size'] = NULL;
$arguments968['placeholder'] = NULL;
$arguments968['pattern'] = NULL;
$arguments968['errorClass'] = 'f3-form-error';
$arguments968['class'] = NULL;
$arguments968['dir'] = NULL;
$arguments968['id'] = NULL;
$arguments968['lang'] = NULL;
$arguments968['style'] = NULL;
$arguments968['title'] = NULL;
$arguments968['accesskey'] = NULL;
$arguments968['tabindex'] = NULL;
$arguments968['onclick'] = NULL;
$arguments968['required'] = false;
$arguments968['type'] = 'text';
$arguments968['id'] = 'billingAddress-street';
$arguments968['class'] = 'form-control';
$arguments968['name'] = 'billingAddress[street]';
$array970 = array (
);$arguments968['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array970);
// Rendering Boolean node
// Rendering Array
$array971 = array();
$array971['0'] = 'true';

$expression972 = function($context) {return TRUE;};
$arguments968['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression972(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array971)
					),
					$renderingContext
				);

$output965 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments968, $renderChildrenClosure969, $renderingContext);

$output965 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure974 = function() use ($renderingContext, $self) {
$output975 = '';

$output975 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure977 = function() use ($renderingContext, $self) {
$output981 = '';

$output981 .= '
                                                            <div class="validation-error alert alert-danger">';
$array982 = array (
);
$output981 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array982)]);

$output981 .= '</div>
                                                        ';
return $output981;
};
$arguments976 = array();
$arguments976['then'] = NULL;
$arguments976['else'] = NULL;
$arguments976['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array978 = array();
$array979 = array (
);$array978['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array979);

$expression980 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments976['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression980(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array978)
					),
					$renderingContext
				);
$arguments976['__thenClosure'] = $renderChildrenClosure977;

$output975 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments976, $renderChildrenClosure977, $renderingContext);

$output975 .= '
                                                    ';
return $output975;
};
$arguments973 = array();
$arguments973['for'] = '';
$arguments973['as'] = 'validationResults';
$arguments973['for'] = 'billingAddress';

$output965 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments973, $renderChildrenClosure974, $renderingContext);

$output965 .= '
                                                </div>
                                            ';
return $output965;
};
$arguments963['__elseClosures'][] = function() use ($renderingContext, $self) {
$output983 = '';

$output983 .= '
                                                <label for="billingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure985 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments984 = array();
$arguments984['key'] = NULL;
$arguments984['id'] = NULL;
$arguments984['default'] = NULL;
$arguments984['arguments'] = NULL;
$arguments984['extensionName'] = NULL;
$arguments984['languageKey'] = NULL;
$arguments984['alternativeLanguageKeys'] = NULL;
$arguments984['key'] = 'tx_cart_domain_model_order_address.street';

$output983 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments984, $renderChildrenClosure985, $renderingContext)]);

$output983 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments986 = array();
$arguments986['additionalAttributes'] = NULL;
$arguments986['data'] = NULL;
$arguments986['aria'] = NULL;
$arguments986['name'] = NULL;
$arguments986['value'] = NULL;
$arguments986['property'] = NULL;
$arguments986['autofocus'] = NULL;
$arguments986['disabled'] = NULL;
$arguments986['maxlength'] = NULL;
$arguments986['readonly'] = NULL;
$arguments986['size'] = NULL;
$arguments986['placeholder'] = NULL;
$arguments986['pattern'] = NULL;
$arguments986['errorClass'] = 'f3-form-error';
$arguments986['class'] = NULL;
$arguments986['dir'] = NULL;
$arguments986['id'] = NULL;
$arguments986['lang'] = NULL;
$arguments986['style'] = NULL;
$arguments986['title'] = NULL;
$arguments986['accesskey'] = NULL;
$arguments986['tabindex'] = NULL;
$arguments986['onclick'] = NULL;
$arguments986['required'] = false;
$arguments986['type'] = 'text';
$arguments986['id'] = 'billingAddress-street';
$arguments986['class'] = 'form-control';
$arguments986['name'] = 'billingAddress[street]';
$array988 = array (
);$arguments986['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array988);

$output983 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments986, $renderChildrenClosure987, $renderingContext);

$output983 .= '
                                                </div>
                                            ';
return $output983;
};

$output962 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments963, $renderChildrenClosure964, $renderingContext);

$output962 .= '
                                    </div>
                                </div>
                            ';
return $output962;
};
$arguments955 = array();
$arguments955['then'] = NULL;
$arguments955['else'] = NULL;
$arguments955['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array957 = array();
// Rendering Array
$array958 = array();
$array959 = array (
);$array958['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.street.validator', $array959);
$array957['0'] = $array958;
$array957['1'] = ' != ';
// Rendering Array
$array960 = array();
$array960['0'] = 'Empty';
$array957['2'] = $array960;

$expression961 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments955['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression961(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array957)
					),
					$renderingContext
				);
$arguments955['__thenClosure'] = $renderChildrenClosure956;

$output954 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments955, $renderChildrenClosure956, $renderingContext);

$output954 .= '
                        ';
return $output954;
};
$arguments952 = array();
$arguments952['if'] = NULL;

$output820 .= '';

$output820 .= '
                    ';
return $output820;
};
$arguments615 = array();
$arguments615['then'] = NULL;
$arguments615['else'] = NULL;
$arguments615['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array815 = array();
// Rendering Array
$array816 = array();
$array817 = array (
);$array816['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.streetNumber.validator', $array817);
$array815['0'] = $array816;
$array815['1'] = ' != ';
// Rendering Array
$array818 = array();
$array818['0'] = 'Empty';
$array815['2'] = $array818;

$expression819 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments615['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression819(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array815)
					),
					$renderingContext
				);
$arguments615['__thenClosure'] = function() use ($renderingContext, $self) {
$output617 = '';

$output617 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
$output625 = '';

$output625 .= '
                                <div class="row">
                                    <div class="col-sm-8 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
$output657 = '';

$output657 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
$output660 = '';

$output660 .= '
                                                <label for="billingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure662 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments661 = array();
$arguments661['key'] = NULL;
$arguments661['id'] = NULL;
$arguments661['default'] = NULL;
$arguments661['arguments'] = NULL;
$arguments661['extensionName'] = NULL;
$arguments661['languageKey'] = NULL;
$arguments661['alternativeLanguageKeys'] = NULL;
$arguments661['key'] = 'tx_cart_domain_model_order_address.street';

$output660 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments661, $renderChildrenClosure662, $renderingContext)]);

$output660 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure664 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments663 = array();
$arguments663['additionalAttributes'] = NULL;
$arguments663['data'] = NULL;
$arguments663['aria'] = NULL;
$arguments663['name'] = NULL;
$arguments663['value'] = NULL;
$arguments663['property'] = NULL;
$arguments663['autofocus'] = NULL;
$arguments663['disabled'] = NULL;
$arguments663['maxlength'] = NULL;
$arguments663['readonly'] = NULL;
$arguments663['size'] = NULL;
$arguments663['placeholder'] = NULL;
$arguments663['pattern'] = NULL;
$arguments663['errorClass'] = 'f3-form-error';
$arguments663['class'] = NULL;
$arguments663['dir'] = NULL;
$arguments663['id'] = NULL;
$arguments663['lang'] = NULL;
$arguments663['style'] = NULL;
$arguments663['title'] = NULL;
$arguments663['accesskey'] = NULL;
$arguments663['tabindex'] = NULL;
$arguments663['onclick'] = NULL;
$arguments663['required'] = false;
$arguments663['type'] = 'text';
$arguments663['id'] = 'billingAddress-street';
$arguments663['class'] = 'form-control';
$arguments663['name'] = 'billingAddress[street]';
$array665 = array (
);$arguments663['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array665);
// Rendering Boolean node
// Rendering Array
$array666 = array();
$array666['0'] = 'true';

$expression667 = function($context) {return TRUE;};
$arguments663['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression667(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array666)
					),
					$renderingContext
				);

$output660 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments663, $renderChildrenClosure664, $renderingContext);

$output660 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
$output670 = '';

$output670 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
$output676 = '';

$output676 .= '
                                                            <div class="validation-error alert alert-danger">';
$array677 = array (
);
$output676 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array677)]);

$output676 .= '</div>
                                                        ';
return $output676;
};
$arguments671 = array();
$arguments671['then'] = NULL;
$arguments671['else'] = NULL;
$arguments671['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array673 = array();
$array674 = array (
);$array673['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array674);

$expression675 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments671['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression675(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array673)
					),
					$renderingContext
				);
$arguments671['__thenClosure'] = $renderChildrenClosure672;

$output670 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext);

$output670 .= '
                                                    ';
return $output670;
};
$arguments668 = array();
$arguments668['for'] = '';
$arguments668['as'] = 'validationResults';
$arguments668['for'] = 'billingAddress';

$output660 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments668, $renderChildrenClosure669, $renderingContext);

$output660 .= '
                                                </div>
                                            ';
return $output660;
};
$arguments658 = array();

$output657 .= '';

$output657 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure679 = function() use ($renderingContext, $self) {
$output680 = '';

$output680 .= '
                                                <label for="billingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments681 = array();
$arguments681['key'] = NULL;
$arguments681['id'] = NULL;
$arguments681['default'] = NULL;
$arguments681['arguments'] = NULL;
$arguments681['extensionName'] = NULL;
$arguments681['languageKey'] = NULL;
$arguments681['alternativeLanguageKeys'] = NULL;
$arguments681['key'] = 'tx_cart_domain_model_order_address.street';

$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments681, $renderChildrenClosure682, $renderingContext)]);

$output680 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments683 = array();
$arguments683['additionalAttributes'] = NULL;
$arguments683['data'] = NULL;
$arguments683['aria'] = NULL;
$arguments683['name'] = NULL;
$arguments683['value'] = NULL;
$arguments683['property'] = NULL;
$arguments683['autofocus'] = NULL;
$arguments683['disabled'] = NULL;
$arguments683['maxlength'] = NULL;
$arguments683['readonly'] = NULL;
$arguments683['size'] = NULL;
$arguments683['placeholder'] = NULL;
$arguments683['pattern'] = NULL;
$arguments683['errorClass'] = 'f3-form-error';
$arguments683['class'] = NULL;
$arguments683['dir'] = NULL;
$arguments683['id'] = NULL;
$arguments683['lang'] = NULL;
$arguments683['style'] = NULL;
$arguments683['title'] = NULL;
$arguments683['accesskey'] = NULL;
$arguments683['tabindex'] = NULL;
$arguments683['onclick'] = NULL;
$arguments683['required'] = false;
$arguments683['type'] = 'text';
$arguments683['id'] = 'billingAddress-street';
$arguments683['class'] = 'form-control';
$arguments683['name'] = 'billingAddress[street]';
$array685 = array (
);$arguments683['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array685);

$output680 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments683, $renderChildrenClosure684, $renderingContext);

$output680 .= '
                                                </div>
                                            ';
return $output680;
};
$arguments678 = array();
$arguments678['if'] = NULL;

$output657 .= '';

$output657 .= '
                                        ';
return $output657;
};
$arguments626 = array();
$arguments626['then'] = NULL;
$arguments626['else'] = NULL;
$arguments626['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array652 = array();
// Rendering Array
$array653 = array();
$array654 = array (
);$array653['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.street.validator', $array654);
$array652['0'] = $array653;
$array652['1'] = ' == ';
// Rendering Array
$array655 = array();
$array655['0'] = 'NotEmpty';
$array652['2'] = $array655;

$expression656 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments626['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression656(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array652)
					),
					$renderingContext
				);
$arguments626['__thenClosure'] = function() use ($renderingContext, $self) {
$output628 = '';

$output628 .= '
                                                <label for="billingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments629 = array();
$arguments629['key'] = NULL;
$arguments629['id'] = NULL;
$arguments629['default'] = NULL;
$arguments629['arguments'] = NULL;
$arguments629['extensionName'] = NULL;
$arguments629['languageKey'] = NULL;
$arguments629['alternativeLanguageKeys'] = NULL;
$arguments629['key'] = 'tx_cart_domain_model_order_address.street';

$output628 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext)]);

$output628 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure632 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments631 = array();
$arguments631['additionalAttributes'] = NULL;
$arguments631['data'] = NULL;
$arguments631['aria'] = NULL;
$arguments631['name'] = NULL;
$arguments631['value'] = NULL;
$arguments631['property'] = NULL;
$arguments631['autofocus'] = NULL;
$arguments631['disabled'] = NULL;
$arguments631['maxlength'] = NULL;
$arguments631['readonly'] = NULL;
$arguments631['size'] = NULL;
$arguments631['placeholder'] = NULL;
$arguments631['pattern'] = NULL;
$arguments631['errorClass'] = 'f3-form-error';
$arguments631['class'] = NULL;
$arguments631['dir'] = NULL;
$arguments631['id'] = NULL;
$arguments631['lang'] = NULL;
$arguments631['style'] = NULL;
$arguments631['title'] = NULL;
$arguments631['accesskey'] = NULL;
$arguments631['tabindex'] = NULL;
$arguments631['onclick'] = NULL;
$arguments631['required'] = false;
$arguments631['type'] = 'text';
$arguments631['id'] = 'billingAddress-street';
$arguments631['class'] = 'form-control';
$arguments631['name'] = 'billingAddress[street]';
$array633 = array (
);$arguments631['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array633);
// Rendering Boolean node
// Rendering Array
$array634 = array();
$array634['0'] = 'true';

$expression635 = function($context) {return TRUE;};
$arguments631['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression635(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array634)
					),
					$renderingContext
				);

$output628 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments631, $renderChildrenClosure632, $renderingContext);

$output628 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$output638 = '';

$output638 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
$output644 = '';

$output644 .= '
                                                            <div class="validation-error alert alert-danger">';
$array645 = array (
);
$output644 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array645)]);

$output644 .= '</div>
                                                        ';
return $output644;
};
$arguments639 = array();
$arguments639['then'] = NULL;
$arguments639['else'] = NULL;
$arguments639['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array641 = array();
$array642 = array (
);$array641['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array642);

$expression643 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments639['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression643(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array641)
					),
					$renderingContext
				);
$arguments639['__thenClosure'] = $renderChildrenClosure640;

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext);

$output638 .= '
                                                    ';
return $output638;
};
$arguments636 = array();
$arguments636['for'] = '';
$arguments636['as'] = 'validationResults';
$arguments636['for'] = 'billingAddress';

$output628 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments636, $renderChildrenClosure637, $renderingContext);

$output628 .= '
                                                </div>
                                            ';
return $output628;
};
$arguments626['__elseClosures'][] = function() use ($renderingContext, $self) {
$output646 = '';

$output646 .= '
                                                <label for="billingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments647 = array();
$arguments647['key'] = NULL;
$arguments647['id'] = NULL;
$arguments647['default'] = NULL;
$arguments647['arguments'] = NULL;
$arguments647['extensionName'] = NULL;
$arguments647['languageKey'] = NULL;
$arguments647['alternativeLanguageKeys'] = NULL;
$arguments647['key'] = 'tx_cart_domain_model_order_address.street';

$output646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments647, $renderChildrenClosure648, $renderingContext)]);

$output646 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments649 = array();
$arguments649['additionalAttributes'] = NULL;
$arguments649['data'] = NULL;
$arguments649['aria'] = NULL;
$arguments649['name'] = NULL;
$arguments649['value'] = NULL;
$arguments649['property'] = NULL;
$arguments649['autofocus'] = NULL;
$arguments649['disabled'] = NULL;
$arguments649['maxlength'] = NULL;
$arguments649['readonly'] = NULL;
$arguments649['size'] = NULL;
$arguments649['placeholder'] = NULL;
$arguments649['pattern'] = NULL;
$arguments649['errorClass'] = 'f3-form-error';
$arguments649['class'] = NULL;
$arguments649['dir'] = NULL;
$arguments649['id'] = NULL;
$arguments649['lang'] = NULL;
$arguments649['style'] = NULL;
$arguments649['title'] = NULL;
$arguments649['accesskey'] = NULL;
$arguments649['tabindex'] = NULL;
$arguments649['onclick'] = NULL;
$arguments649['required'] = false;
$arguments649['type'] = 'text';
$arguments649['id'] = 'billingAddress-street';
$arguments649['class'] = 'form-control';
$arguments649['name'] = 'billingAddress[street]';
$array651 = array (
);$arguments649['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array651);

$output646 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext);

$output646 .= '
                                                </div>
                                            ';
return $output646;
};

$output625 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments626, $renderChildrenClosure627, $renderingContext);

$output625 .= '
                                    </div>
                                    <div class="col-sm-4 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
$output717 = '';

$output717 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
$output720 = '';

$output720 .= '
                                                <label for="billingAddress-streetNumber" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure722 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments721 = array();
$arguments721['key'] = NULL;
$arguments721['id'] = NULL;
$arguments721['default'] = NULL;
$arguments721['arguments'] = NULL;
$arguments721['extensionName'] = NULL;
$arguments721['languageKey'] = NULL;
$arguments721['alternativeLanguageKeys'] = NULL;
$arguments721['key'] = 'tx_cart_domain_model_order_address.street_number';

$output720 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments721, $renderChildrenClosure722, $renderingContext)]);

$output720 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure724 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments723 = array();
$arguments723['additionalAttributes'] = NULL;
$arguments723['data'] = NULL;
$arguments723['aria'] = NULL;
$arguments723['name'] = NULL;
$arguments723['value'] = NULL;
$arguments723['property'] = NULL;
$arguments723['autofocus'] = NULL;
$arguments723['disabled'] = NULL;
$arguments723['maxlength'] = NULL;
$arguments723['readonly'] = NULL;
$arguments723['size'] = NULL;
$arguments723['placeholder'] = NULL;
$arguments723['pattern'] = NULL;
$arguments723['errorClass'] = 'f3-form-error';
$arguments723['class'] = NULL;
$arguments723['dir'] = NULL;
$arguments723['id'] = NULL;
$arguments723['lang'] = NULL;
$arguments723['style'] = NULL;
$arguments723['title'] = NULL;
$arguments723['accesskey'] = NULL;
$arguments723['tabindex'] = NULL;
$arguments723['onclick'] = NULL;
$arguments723['required'] = false;
$arguments723['type'] = 'text';
$arguments723['id'] = 'billingAddress-streetNumber';
$arguments723['class'] = 'form-control';
$arguments723['name'] = 'billingAddress[streetNumber]';
$array725 = array (
);$arguments723['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.streetNumber', $array725);
// Rendering Boolean node
// Rendering Array
$array726 = array();
$array726['0'] = 'true';

$expression727 = function($context) {return TRUE;};
$arguments723['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression727(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array726)
					),
					$renderingContext
				);

$output720 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments723, $renderChildrenClosure724, $renderingContext);

$output720 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
$output730 = '';

$output730 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure732 = function() use ($renderingContext, $self) {
$output736 = '';

$output736 .= '
                                                            <div class="validation-error alert alert-danger">';
$array737 = array (
);
$output736 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber.0.message', $array737)]);

$output736 .= '</div>
                                                        ';
return $output736;
};
$arguments731 = array();
$arguments731['then'] = NULL;
$arguments731['else'] = NULL;
$arguments731['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array733 = array();
$array734 = array (
);$array733['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber', $array734);

$expression735 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments731['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression735(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array733)
					),
					$renderingContext
				);
$arguments731['__thenClosure'] = $renderChildrenClosure732;

$output730 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments731, $renderChildrenClosure732, $renderingContext);

$output730 .= '
                                                    ';
return $output730;
};
$arguments728 = array();
$arguments728['for'] = '';
$arguments728['as'] = 'validationResults';
$arguments728['for'] = 'billingAddress';

$output720 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext);

$output720 .= '
                                                </div>
                                            ';
return $output720;
};
$arguments718 = array();

$output717 .= '';

$output717 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
$output740 = '';

$output740 .= '
                                                <label for="billingAddress-streetNumber">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure742 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments741 = array();
$arguments741['key'] = NULL;
$arguments741['id'] = NULL;
$arguments741['default'] = NULL;
$arguments741['arguments'] = NULL;
$arguments741['extensionName'] = NULL;
$arguments741['languageKey'] = NULL;
$arguments741['alternativeLanguageKeys'] = NULL;
$arguments741['key'] = 'tx_cart_domain_model_order_address.street_number';

$output740 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments741, $renderChildrenClosure742, $renderingContext)]);

$output740 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments743 = array();
$arguments743['additionalAttributes'] = NULL;
$arguments743['data'] = NULL;
$arguments743['aria'] = NULL;
$arguments743['name'] = NULL;
$arguments743['value'] = NULL;
$arguments743['property'] = NULL;
$arguments743['autofocus'] = NULL;
$arguments743['disabled'] = NULL;
$arguments743['maxlength'] = NULL;
$arguments743['readonly'] = NULL;
$arguments743['size'] = NULL;
$arguments743['placeholder'] = NULL;
$arguments743['pattern'] = NULL;
$arguments743['errorClass'] = 'f3-form-error';
$arguments743['class'] = NULL;
$arguments743['dir'] = NULL;
$arguments743['id'] = NULL;
$arguments743['lang'] = NULL;
$arguments743['style'] = NULL;
$arguments743['title'] = NULL;
$arguments743['accesskey'] = NULL;
$arguments743['tabindex'] = NULL;
$arguments743['onclick'] = NULL;
$arguments743['required'] = false;
$arguments743['type'] = 'text';
$arguments743['id'] = 'billingAddress-streetNumber';
$arguments743['class'] = 'form-control';
$arguments743['name'] = 'billingAddress[streetNumber]';
$array745 = array (
);$arguments743['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.streetNumber', $array745);

$output740 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments743, $renderChildrenClosure744, $renderingContext);

$output740 .= '
                                                </div>
                                            ';
return $output740;
};
$arguments738 = array();
$arguments738['if'] = NULL;

$output717 .= '';

$output717 .= '
                                        ';
return $output717;
};
$arguments686 = array();
$arguments686['then'] = NULL;
$arguments686['else'] = NULL;
$arguments686['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array712 = array();
// Rendering Array
$array713 = array();
$array714 = array (
);$array713['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.streetNumber.validator', $array714);
$array712['0'] = $array713;
$array712['1'] = ' == ';
// Rendering Array
$array715 = array();
$array715['0'] = 'NotEmpty';
$array712['2'] = $array715;

$expression716 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments686['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression716(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array712)
					),
					$renderingContext
				);
$arguments686['__thenClosure'] = function() use ($renderingContext, $self) {
$output688 = '';

$output688 .= '
                                                <label for="billingAddress-streetNumber" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments689 = array();
$arguments689['key'] = NULL;
$arguments689['id'] = NULL;
$arguments689['default'] = NULL;
$arguments689['arguments'] = NULL;
$arguments689['extensionName'] = NULL;
$arguments689['languageKey'] = NULL;
$arguments689['alternativeLanguageKeys'] = NULL;
$arguments689['key'] = 'tx_cart_domain_model_order_address.street_number';

$output688 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext)]);

$output688 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure692 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments691 = array();
$arguments691['additionalAttributes'] = NULL;
$arguments691['data'] = NULL;
$arguments691['aria'] = NULL;
$arguments691['name'] = NULL;
$arguments691['value'] = NULL;
$arguments691['property'] = NULL;
$arguments691['autofocus'] = NULL;
$arguments691['disabled'] = NULL;
$arguments691['maxlength'] = NULL;
$arguments691['readonly'] = NULL;
$arguments691['size'] = NULL;
$arguments691['placeholder'] = NULL;
$arguments691['pattern'] = NULL;
$arguments691['errorClass'] = 'f3-form-error';
$arguments691['class'] = NULL;
$arguments691['dir'] = NULL;
$arguments691['id'] = NULL;
$arguments691['lang'] = NULL;
$arguments691['style'] = NULL;
$arguments691['title'] = NULL;
$arguments691['accesskey'] = NULL;
$arguments691['tabindex'] = NULL;
$arguments691['onclick'] = NULL;
$arguments691['required'] = false;
$arguments691['type'] = 'text';
$arguments691['id'] = 'billingAddress-streetNumber';
$arguments691['class'] = 'form-control';
$arguments691['name'] = 'billingAddress[streetNumber]';
$array693 = array (
);$arguments691['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.streetNumber', $array693);
// Rendering Boolean node
// Rendering Array
$array694 = array();
$array694['0'] = 'true';

$expression695 = function($context) {return TRUE;};
$arguments691['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression695(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array694)
					),
					$renderingContext
				);

$output688 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments691, $renderChildrenClosure692, $renderingContext);

$output688 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure697 = function() use ($renderingContext, $self) {
$output698 = '';

$output698 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure700 = function() use ($renderingContext, $self) {
$output704 = '';

$output704 .= '
                                                            <div class="validation-error alert alert-danger">';
$array705 = array (
);
$output704 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber.0.message', $array705)]);

$output704 .= '</div>
                                                        ';
return $output704;
};
$arguments699 = array();
$arguments699['then'] = NULL;
$arguments699['else'] = NULL;
$arguments699['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array701 = array();
$array702 = array (
);$array701['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.streetNumber', $array702);

$expression703 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments699['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression703(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array701)
					),
					$renderingContext
				);
$arguments699['__thenClosure'] = $renderChildrenClosure700;

$output698 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments699, $renderChildrenClosure700, $renderingContext);

$output698 .= '
                                                    ';
return $output698;
};
$arguments696 = array();
$arguments696['for'] = '';
$arguments696['as'] = 'validationResults';
$arguments696['for'] = 'billingAddress';

$output688 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments696, $renderChildrenClosure697, $renderingContext);

$output688 .= '
                                                </div>
                                            ';
return $output688;
};
$arguments686['__elseClosures'][] = function() use ($renderingContext, $self) {
$output706 = '';

$output706 .= '
                                                <label for="billingAddress-streetNumber">
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
$arguments707['key'] = 'tx_cart_domain_model_order_address.street_number';

$output706 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments707, $renderChildrenClosure708, $renderingContext)]);

$output706 .= '
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
$arguments709['id'] = 'billingAddress-streetNumber';
$arguments709['class'] = 'form-control';
$arguments709['name'] = 'billingAddress[streetNumber]';
$array711 = array (
);$arguments709['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.streetNumber', $array711);

$output706 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments709, $renderChildrenClosure710, $renderingContext);

$output706 .= '
                                                </div>
                                            ';
return $output706;
};

$output625 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext);

$output625 .= '
                                    </div>
                                </div>
                            ';
return $output625;
};
$arguments618 = array();
$arguments618['then'] = NULL;
$arguments618['else'] = NULL;
$arguments618['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array620 = array();
// Rendering Array
$array621 = array();
$array622 = array (
);$array621['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.street.validator', $array622);
$array620['0'] = $array621;
$array620['1'] = ' != ';
// Rendering Array
$array623 = array();
$array623['0'] = 'Empty';
$array620['2'] = $array623;

$expression624 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments618['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression624(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array620)
					),
					$renderingContext
				);
$arguments618['__thenClosure'] = $renderChildrenClosure619;

$output617 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments618, $renderChildrenClosure619, $renderingContext);

$output617 .= '
                        ';
return $output617;
};
$arguments615['__elseClosures'][] = function() use ($renderingContext, $self) {
$output746 = '';

$output746 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure748 = function() use ($renderingContext, $self) {
$output754 = '';

$output754 .= '
                                <div class="row">
                                    <div class="col-sm-12 column">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure756 = function() use ($renderingContext, $self) {
$output786 = '';

$output786 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure788 = function() use ($renderingContext, $self) {
$output789 = '';

$output789 .= '
                                                <label for="billingAddress-street" class="required">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure791 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments790 = array();
$arguments790['key'] = NULL;
$arguments790['id'] = NULL;
$arguments790['default'] = NULL;
$arguments790['arguments'] = NULL;
$arguments790['extensionName'] = NULL;
$arguments790['languageKey'] = NULL;
$arguments790['alternativeLanguageKeys'] = NULL;
$arguments790['key'] = 'tx_cart_domain_model_order_address.street';

$output789 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments790, $renderChildrenClosure791, $renderingContext)]);

$output789 .= '
                                                    <em>*</em>
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure793 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments792 = array();
$arguments792['additionalAttributes'] = NULL;
$arguments792['data'] = NULL;
$arguments792['aria'] = NULL;
$arguments792['name'] = NULL;
$arguments792['value'] = NULL;
$arguments792['property'] = NULL;
$arguments792['autofocus'] = NULL;
$arguments792['disabled'] = NULL;
$arguments792['maxlength'] = NULL;
$arguments792['readonly'] = NULL;
$arguments792['size'] = NULL;
$arguments792['placeholder'] = NULL;
$arguments792['pattern'] = NULL;
$arguments792['errorClass'] = 'f3-form-error';
$arguments792['class'] = NULL;
$arguments792['dir'] = NULL;
$arguments792['id'] = NULL;
$arguments792['lang'] = NULL;
$arguments792['style'] = NULL;
$arguments792['title'] = NULL;
$arguments792['accesskey'] = NULL;
$arguments792['tabindex'] = NULL;
$arguments792['onclick'] = NULL;
$arguments792['required'] = false;
$arguments792['type'] = 'text';
$arguments792['id'] = 'billingAddress-street';
$arguments792['class'] = 'form-control';
$arguments792['name'] = 'billingAddress[street]';
$array794 = array (
);$arguments792['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array794);
// Rendering Boolean node
// Rendering Array
$array795 = array();
$array795['0'] = 'true';

$expression796 = function($context) {return TRUE;};
$arguments792['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression796(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array795)
					),
					$renderingContext
				);

$output789 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments792, $renderChildrenClosure793, $renderingContext);

$output789 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure798 = function() use ($renderingContext, $self) {
$output799 = '';

$output799 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure801 = function() use ($renderingContext, $self) {
$output805 = '';

$output805 .= '
                                                            <div class="validation-error alert alert-danger">';
$array806 = array (
);
$output805 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array806)]);

$output805 .= '</div>
                                                        ';
return $output805;
};
$arguments800 = array();
$arguments800['then'] = NULL;
$arguments800['else'] = NULL;
$arguments800['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array802 = array();
$array803 = array (
);$array802['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array803);

$expression804 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments800['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression804(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array802)
					),
					$renderingContext
				);
$arguments800['__thenClosure'] = $renderChildrenClosure801;

$output799 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments800, $renderChildrenClosure801, $renderingContext);

$output799 .= '
                                                    ';
return $output799;
};
$arguments797 = array();
$arguments797['for'] = '';
$arguments797['as'] = 'validationResults';
$arguments797['for'] = 'billingAddress';

$output789 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments797, $renderChildrenClosure798, $renderingContext);

$output789 .= '
                                                </div>
                                            ';
return $output789;
};
$arguments787 = array();

$output786 .= '';

$output786 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure808 = function() use ($renderingContext, $self) {
$output809 = '';

$output809 .= '
                                                <label for="billingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments810 = array();
$arguments810['key'] = NULL;
$arguments810['id'] = NULL;
$arguments810['default'] = NULL;
$arguments810['arguments'] = NULL;
$arguments810['extensionName'] = NULL;
$arguments810['languageKey'] = NULL;
$arguments810['alternativeLanguageKeys'] = NULL;
$arguments810['key'] = 'tx_cart_domain_model_order_address.street';

$output809 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments810, $renderChildrenClosure811, $renderingContext)]);

$output809 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure813 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments812 = array();
$arguments812['additionalAttributes'] = NULL;
$arguments812['data'] = NULL;
$arguments812['aria'] = NULL;
$arguments812['name'] = NULL;
$arguments812['value'] = NULL;
$arguments812['property'] = NULL;
$arguments812['autofocus'] = NULL;
$arguments812['disabled'] = NULL;
$arguments812['maxlength'] = NULL;
$arguments812['readonly'] = NULL;
$arguments812['size'] = NULL;
$arguments812['placeholder'] = NULL;
$arguments812['pattern'] = NULL;
$arguments812['errorClass'] = 'f3-form-error';
$arguments812['class'] = NULL;
$arguments812['dir'] = NULL;
$arguments812['id'] = NULL;
$arguments812['lang'] = NULL;
$arguments812['style'] = NULL;
$arguments812['title'] = NULL;
$arguments812['accesskey'] = NULL;
$arguments812['tabindex'] = NULL;
$arguments812['onclick'] = NULL;
$arguments812['required'] = false;
$arguments812['type'] = 'text';
$arguments812['id'] = 'billingAddress-street';
$arguments812['class'] = 'form-control';
$arguments812['name'] = 'billingAddress[street]';
$array814 = array (
);$arguments812['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array814);

$output809 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments812, $renderChildrenClosure813, $renderingContext);

$output809 .= '
                                                </div>
                                            ';
return $output809;
};
$arguments807 = array();
$arguments807['if'] = NULL;

$output786 .= '';

$output786 .= '
                                        ';
return $output786;
};
$arguments755 = array();
$arguments755['then'] = NULL;
$arguments755['else'] = NULL;
$arguments755['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array781 = array();
// Rendering Array
$array782 = array();
$array783 = array (
);$array782['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.street.validator', $array783);
$array781['0'] = $array782;
$array781['1'] = ' == ';
// Rendering Array
$array784 = array();
$array784['0'] = 'NotEmpty';
$array781['2'] = $array784;

$expression785 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments755['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression785(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array781)
					),
					$renderingContext
				);
$arguments755['__thenClosure'] = function() use ($renderingContext, $self) {
$output757 = '';

$output757 .= '
                                                <label for="billingAddress-street" class="required">
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
$arguments760['id'] = 'billingAddress-street';
$arguments760['class'] = 'form-control';
$arguments760['name'] = 'billingAddress[street]';
$array762 = array (
);$arguments760['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array762);
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

$output757 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments760, $renderChildrenClosure761, $renderingContext);

$output757 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure766 = function() use ($renderingContext, $self) {
$output767 = '';

$output767 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure769 = function() use ($renderingContext, $self) {
$output773 = '';

$output773 .= '
                                                            <div class="validation-error alert alert-danger">';
$array774 = array (
);
$output773 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street.0.message', $array774)]);

$output773 .= '</div>
                                                        ';
return $output773;
};
$arguments768 = array();
$arguments768['then'] = NULL;
$arguments768['else'] = NULL;
$arguments768['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array770 = array();
$array771 = array (
);$array770['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.street', $array771);

$expression772 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments768['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression772(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array770)
					),
					$renderingContext
				);
$arguments768['__thenClosure'] = $renderChildrenClosure769;

$output767 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments768, $renderChildrenClosure769, $renderingContext);

$output767 .= '
                                                    ';
return $output767;
};
$arguments765 = array();
$arguments765['for'] = '';
$arguments765['as'] = 'validationResults';
$arguments765['for'] = 'billingAddress';

$output757 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments765, $renderChildrenClosure766, $renderingContext);

$output757 .= '
                                                </div>
                                            ';
return $output757;
};
$arguments755['__elseClosures'][] = function() use ($renderingContext, $self) {
$output775 = '';

$output775 .= '
                                                <label for="billingAddress-street">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure777 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments776 = array();
$arguments776['key'] = NULL;
$arguments776['id'] = NULL;
$arguments776['default'] = NULL;
$arguments776['arguments'] = NULL;
$arguments776['extensionName'] = NULL;
$arguments776['languageKey'] = NULL;
$arguments776['alternativeLanguageKeys'] = NULL;
$arguments776['key'] = 'tx_cart_domain_model_order_address.street';

$output775 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments776, $renderChildrenClosure777, $renderingContext)]);

$output775 .= '
                                                </label>
                                                <div class="input-box">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure779 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments778 = array();
$arguments778['additionalAttributes'] = NULL;
$arguments778['data'] = NULL;
$arguments778['aria'] = NULL;
$arguments778['name'] = NULL;
$arguments778['value'] = NULL;
$arguments778['property'] = NULL;
$arguments778['autofocus'] = NULL;
$arguments778['disabled'] = NULL;
$arguments778['maxlength'] = NULL;
$arguments778['readonly'] = NULL;
$arguments778['size'] = NULL;
$arguments778['placeholder'] = NULL;
$arguments778['pattern'] = NULL;
$arguments778['errorClass'] = 'f3-form-error';
$arguments778['class'] = NULL;
$arguments778['dir'] = NULL;
$arguments778['id'] = NULL;
$arguments778['lang'] = NULL;
$arguments778['style'] = NULL;
$arguments778['title'] = NULL;
$arguments778['accesskey'] = NULL;
$arguments778['tabindex'] = NULL;
$arguments778['onclick'] = NULL;
$arguments778['required'] = false;
$arguments778['type'] = 'text';
$arguments778['id'] = 'billingAddress-street';
$arguments778['class'] = 'form-control';
$arguments778['name'] = 'billingAddress[street]';
$array780 = array (
);$arguments778['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.street', $array780);

$output775 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments778, $renderChildrenClosure779, $renderingContext);

$output775 .= '
                                                </div>
                                            ';
return $output775;
};

$output754 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments755, $renderChildrenClosure756, $renderingContext);

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
);$array750['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.street.validator', $array751);
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

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext);

$output0 .= '

                    <div class="row">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1024 = function() use ($renderingContext, $self) {
$output1030 = '';

$output1030 .= '
                            <div class="col-sm-4 column">
                                <div class="field">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1032 = function() use ($renderingContext, $self) {
$output1062 = '';

$output1062 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1064 = function() use ($renderingContext, $self) {
$output1065 = '';

$output1065 .= '
                                            <label for="billingAddress-zip" class="required">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1067 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1066 = array();
$arguments1066['key'] = NULL;
$arguments1066['id'] = NULL;
$arguments1066['default'] = NULL;
$arguments1066['arguments'] = NULL;
$arguments1066['extensionName'] = NULL;
$arguments1066['languageKey'] = NULL;
$arguments1066['alternativeLanguageKeys'] = NULL;
$arguments1066['key'] = 'tx_cart_domain_model_order_address.zip';

$output1065 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1066, $renderChildrenClosure1067, $renderingContext)]);

$output1065 .= '
                                                <em>*</em>
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1069 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1068 = array();
$arguments1068['additionalAttributes'] = NULL;
$arguments1068['data'] = NULL;
$arguments1068['aria'] = NULL;
$arguments1068['name'] = NULL;
$arguments1068['value'] = NULL;
$arguments1068['property'] = NULL;
$arguments1068['autofocus'] = NULL;
$arguments1068['disabled'] = NULL;
$arguments1068['maxlength'] = NULL;
$arguments1068['readonly'] = NULL;
$arguments1068['size'] = NULL;
$arguments1068['placeholder'] = NULL;
$arguments1068['pattern'] = NULL;
$arguments1068['errorClass'] = 'f3-form-error';
$arguments1068['class'] = NULL;
$arguments1068['dir'] = NULL;
$arguments1068['id'] = NULL;
$arguments1068['lang'] = NULL;
$arguments1068['style'] = NULL;
$arguments1068['title'] = NULL;
$arguments1068['accesskey'] = NULL;
$arguments1068['tabindex'] = NULL;
$arguments1068['onclick'] = NULL;
$arguments1068['required'] = false;
$arguments1068['type'] = 'text';
$arguments1068['id'] = 'billingAddress-zip';
$arguments1068['class'] = 'form-control';
$arguments1068['name'] = 'billingAddress[zip]';
$array1070 = array (
);$arguments1068['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.zip', $array1070);
// Rendering Boolean node
// Rendering Array
$array1071 = array();
$array1071['0'] = 'true';

$expression1072 = function($context) {return TRUE;};
$arguments1068['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1072(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1071)
					),
					$renderingContext
				);

$output1065 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1068, $renderChildrenClosure1069, $renderingContext);

$output1065 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1074 = function() use ($renderingContext, $self) {
$output1075 = '';

$output1075 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1077 = function() use ($renderingContext, $self) {
$output1081 = '';

$output1081 .= '
                                                        <div class="validation-error alert alert-danger">';
$array1082 = array (
);
$output1081 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.zip.0.message', $array1082)]);

$output1081 .= '</div>
                                                    ';
return $output1081;
};
$arguments1076 = array();
$arguments1076['then'] = NULL;
$arguments1076['else'] = NULL;
$arguments1076['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1078 = array();
$array1079 = array (
);$array1078['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.zip', $array1079);

$expression1080 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1076['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1080(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1078)
					),
					$renderingContext
				);
$arguments1076['__thenClosure'] = $renderChildrenClosure1077;

$output1075 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1076, $renderChildrenClosure1077, $renderingContext);

$output1075 .= '
                                                ';
return $output1075;
};
$arguments1073 = array();
$arguments1073['for'] = '';
$arguments1073['as'] = 'validationResults';
$arguments1073['for'] = 'billingAddress';

$output1065 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1073, $renderChildrenClosure1074, $renderingContext);

$output1065 .= '
                                            </div>
                                        ';
return $output1065;
};
$arguments1063 = array();

$output1062 .= '';

$output1062 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1084 = function() use ($renderingContext, $self) {
$output1085 = '';

$output1085 .= '
                                            <label for="billingAddress-zip">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1087 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1086 = array();
$arguments1086['key'] = NULL;
$arguments1086['id'] = NULL;
$arguments1086['default'] = NULL;
$arguments1086['arguments'] = NULL;
$arguments1086['extensionName'] = NULL;
$arguments1086['languageKey'] = NULL;
$arguments1086['alternativeLanguageKeys'] = NULL;
$arguments1086['key'] = 'tx_cart_domain_model_order_address.zip';

$output1085 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1086, $renderChildrenClosure1087, $renderingContext)]);

$output1085 .= '
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1089 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1088 = array();
$arguments1088['additionalAttributes'] = NULL;
$arguments1088['data'] = NULL;
$arguments1088['aria'] = NULL;
$arguments1088['name'] = NULL;
$arguments1088['value'] = NULL;
$arguments1088['property'] = NULL;
$arguments1088['autofocus'] = NULL;
$arguments1088['disabled'] = NULL;
$arguments1088['maxlength'] = NULL;
$arguments1088['readonly'] = NULL;
$arguments1088['size'] = NULL;
$arguments1088['placeholder'] = NULL;
$arguments1088['pattern'] = NULL;
$arguments1088['errorClass'] = 'f3-form-error';
$arguments1088['class'] = NULL;
$arguments1088['dir'] = NULL;
$arguments1088['id'] = NULL;
$arguments1088['lang'] = NULL;
$arguments1088['style'] = NULL;
$arguments1088['title'] = NULL;
$arguments1088['accesskey'] = NULL;
$arguments1088['tabindex'] = NULL;
$arguments1088['onclick'] = NULL;
$arguments1088['required'] = false;
$arguments1088['type'] = 'text';
$arguments1088['id'] = 'billingAddress-zip';
$arguments1088['class'] = 'form-control';
$arguments1088['name'] = 'billingAddress[zip]';
$array1090 = array (
);$arguments1088['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.zip', $array1090);

$output1085 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1088, $renderChildrenClosure1089, $renderingContext);

$output1085 .= '
                                            </div>
                                        ';
return $output1085;
};
$arguments1083 = array();
$arguments1083['if'] = NULL;

$output1062 .= '';

$output1062 .= '
                                    ';
return $output1062;
};
$arguments1031 = array();
$arguments1031['then'] = NULL;
$arguments1031['else'] = NULL;
$arguments1031['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1057 = array();
// Rendering Array
$array1058 = array();
$array1059 = array (
);$array1058['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.zip.validator', $array1059);
$array1057['0'] = $array1058;
$array1057['1'] = ' == ';
// Rendering Array
$array1060 = array();
$array1060['0'] = 'NotEmpty';
$array1057['2'] = $array1060;

$expression1061 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1031['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1061(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1057)
					),
					$renderingContext
				);
$arguments1031['__thenClosure'] = function() use ($renderingContext, $self) {
$output1033 = '';

$output1033 .= '
                                            <label for="billingAddress-zip" class="required">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1035 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1034 = array();
$arguments1034['key'] = NULL;
$arguments1034['id'] = NULL;
$arguments1034['default'] = NULL;
$arguments1034['arguments'] = NULL;
$arguments1034['extensionName'] = NULL;
$arguments1034['languageKey'] = NULL;
$arguments1034['alternativeLanguageKeys'] = NULL;
$arguments1034['key'] = 'tx_cart_domain_model_order_address.zip';

$output1033 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1034, $renderChildrenClosure1035, $renderingContext)]);

$output1033 .= '
                                                <em>*</em>
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1036 = array();
$arguments1036['additionalAttributes'] = NULL;
$arguments1036['data'] = NULL;
$arguments1036['aria'] = NULL;
$arguments1036['name'] = NULL;
$arguments1036['value'] = NULL;
$arguments1036['property'] = NULL;
$arguments1036['autofocus'] = NULL;
$arguments1036['disabled'] = NULL;
$arguments1036['maxlength'] = NULL;
$arguments1036['readonly'] = NULL;
$arguments1036['size'] = NULL;
$arguments1036['placeholder'] = NULL;
$arguments1036['pattern'] = NULL;
$arguments1036['errorClass'] = 'f3-form-error';
$arguments1036['class'] = NULL;
$arguments1036['dir'] = NULL;
$arguments1036['id'] = NULL;
$arguments1036['lang'] = NULL;
$arguments1036['style'] = NULL;
$arguments1036['title'] = NULL;
$arguments1036['accesskey'] = NULL;
$arguments1036['tabindex'] = NULL;
$arguments1036['onclick'] = NULL;
$arguments1036['required'] = false;
$arguments1036['type'] = 'text';
$arguments1036['id'] = 'billingAddress-zip';
$arguments1036['class'] = 'form-control';
$arguments1036['name'] = 'billingAddress[zip]';
$array1038 = array (
);$arguments1036['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.zip', $array1038);
// Rendering Boolean node
// Rendering Array
$array1039 = array();
$array1039['0'] = 'true';

$expression1040 = function($context) {return TRUE;};
$arguments1036['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1040(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1039)
					),
					$renderingContext
				);

$output1033 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1036, $renderChildrenClosure1037, $renderingContext);

$output1033 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1042 = function() use ($renderingContext, $self) {
$output1043 = '';

$output1043 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1045 = function() use ($renderingContext, $self) {
$output1049 = '';

$output1049 .= '
                                                        <div class="validation-error alert alert-danger">';
$array1050 = array (
);
$output1049 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.zip.0.message', $array1050)]);

$output1049 .= '</div>
                                                    ';
return $output1049;
};
$arguments1044 = array();
$arguments1044['then'] = NULL;
$arguments1044['else'] = NULL;
$arguments1044['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1046 = array();
$array1047 = array (
);$array1046['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.zip', $array1047);

$expression1048 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1044['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1048(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1046)
					),
					$renderingContext
				);
$arguments1044['__thenClosure'] = $renderChildrenClosure1045;

$output1043 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1044, $renderChildrenClosure1045, $renderingContext);

$output1043 .= '
                                                ';
return $output1043;
};
$arguments1041 = array();
$arguments1041['for'] = '';
$arguments1041['as'] = 'validationResults';
$arguments1041['for'] = 'billingAddress';

$output1033 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1041, $renderChildrenClosure1042, $renderingContext);

$output1033 .= '
                                            </div>
                                        ';
return $output1033;
};
$arguments1031['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1051 = '';

$output1051 .= '
                                            <label for="billingAddress-zip">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1053 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1052 = array();
$arguments1052['key'] = NULL;
$arguments1052['id'] = NULL;
$arguments1052['default'] = NULL;
$arguments1052['arguments'] = NULL;
$arguments1052['extensionName'] = NULL;
$arguments1052['languageKey'] = NULL;
$arguments1052['alternativeLanguageKeys'] = NULL;
$arguments1052['key'] = 'tx_cart_domain_model_order_address.zip';

$output1051 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1052, $renderChildrenClosure1053, $renderingContext)]);

$output1051 .= '
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1055 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1054 = array();
$arguments1054['additionalAttributes'] = NULL;
$arguments1054['data'] = NULL;
$arguments1054['aria'] = NULL;
$arguments1054['name'] = NULL;
$arguments1054['value'] = NULL;
$arguments1054['property'] = NULL;
$arguments1054['autofocus'] = NULL;
$arguments1054['disabled'] = NULL;
$arguments1054['maxlength'] = NULL;
$arguments1054['readonly'] = NULL;
$arguments1054['size'] = NULL;
$arguments1054['placeholder'] = NULL;
$arguments1054['pattern'] = NULL;
$arguments1054['errorClass'] = 'f3-form-error';
$arguments1054['class'] = NULL;
$arguments1054['dir'] = NULL;
$arguments1054['id'] = NULL;
$arguments1054['lang'] = NULL;
$arguments1054['style'] = NULL;
$arguments1054['title'] = NULL;
$arguments1054['accesskey'] = NULL;
$arguments1054['tabindex'] = NULL;
$arguments1054['onclick'] = NULL;
$arguments1054['required'] = false;
$arguments1054['type'] = 'text';
$arguments1054['id'] = 'billingAddress-zip';
$arguments1054['class'] = 'form-control';
$arguments1054['name'] = 'billingAddress[zip]';
$array1056 = array (
);$arguments1054['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.zip', $array1056);

$output1051 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1054, $renderChildrenClosure1055, $renderingContext);

$output1051 .= '
                                            </div>
                                        ';
return $output1051;
};

$output1030 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1031, $renderChildrenClosure1032, $renderingContext);

$output1030 .= '
                                </div>
                            </div>
                        ';
return $output1030;
};
$arguments1023 = array();
$arguments1023['then'] = NULL;
$arguments1023['else'] = NULL;
$arguments1023['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1025 = array();
// Rendering Array
$array1026 = array();
$array1027 = array (
);$array1026['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.zip.validator', $array1027);
$array1025['0'] = $array1026;
$array1025['1'] = ' != ';
// Rendering Array
$array1028 = array();
$array1028['0'] = 'Empty';
$array1025['2'] = $array1028;

$expression1029 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1023['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1029(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1025)
					),
					$renderingContext
				);
$arguments1023['__thenClosure'] = $renderChildrenClosure1024;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1023, $renderChildrenClosure1024, $renderingContext);

$output0 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1092 = function() use ($renderingContext, $self) {
$output1098 = '';

$output1098 .= '
                            <div class="col-sm-8 column">
                                <div class="field">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1100 = function() use ($renderingContext, $self) {
$output1130 = '';

$output1130 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1132 = function() use ($renderingContext, $self) {
$output1133 = '';

$output1133 .= '
                                            <label for="billingAddress-city" class="required">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1134 = array();
$arguments1134['key'] = NULL;
$arguments1134['id'] = NULL;
$arguments1134['default'] = NULL;
$arguments1134['arguments'] = NULL;
$arguments1134['extensionName'] = NULL;
$arguments1134['languageKey'] = NULL;
$arguments1134['alternativeLanguageKeys'] = NULL;
$arguments1134['key'] = 'tx_cart_domain_model_order_address.city';

$output1133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1134, $renderChildrenClosure1135, $renderingContext)]);

$output1133 .= '
                                                <em>*</em>
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1136 = array();
$arguments1136['additionalAttributes'] = NULL;
$arguments1136['data'] = NULL;
$arguments1136['aria'] = NULL;
$arguments1136['name'] = NULL;
$arguments1136['value'] = NULL;
$arguments1136['property'] = NULL;
$arguments1136['autofocus'] = NULL;
$arguments1136['disabled'] = NULL;
$arguments1136['maxlength'] = NULL;
$arguments1136['readonly'] = NULL;
$arguments1136['size'] = NULL;
$arguments1136['placeholder'] = NULL;
$arguments1136['pattern'] = NULL;
$arguments1136['errorClass'] = 'f3-form-error';
$arguments1136['class'] = NULL;
$arguments1136['dir'] = NULL;
$arguments1136['id'] = NULL;
$arguments1136['lang'] = NULL;
$arguments1136['style'] = NULL;
$arguments1136['title'] = NULL;
$arguments1136['accesskey'] = NULL;
$arguments1136['tabindex'] = NULL;
$arguments1136['onclick'] = NULL;
$arguments1136['required'] = false;
$arguments1136['type'] = 'text';
$arguments1136['id'] = 'billingAddress-city';
$arguments1136['class'] = 'form-control';
$arguments1136['name'] = 'billingAddress[city]';
$array1138 = array (
);$arguments1136['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.city', $array1138);
// Rendering Boolean node
// Rendering Array
$array1139 = array();
$array1139['0'] = 'true';

$expression1140 = function($context) {return TRUE;};
$arguments1136['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1139)
					),
					$renderingContext
				);

$output1133 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1136, $renderChildrenClosure1137, $renderingContext);

$output1133 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1142 = function() use ($renderingContext, $self) {
$output1143 = '';

$output1143 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1145 = function() use ($renderingContext, $self) {
$output1149 = '';

$output1149 .= '
                                                        <div class="validation-error alert alert-danger">';
$array1150 = array (
);
$output1149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.city.0.message', $array1150)]);

$output1149 .= '</div>
                                                    ';
return $output1149;
};
$arguments1144 = array();
$arguments1144['then'] = NULL;
$arguments1144['else'] = NULL;
$arguments1144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1146 = array();
$array1147 = array (
);$array1146['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.city', $array1147);

$expression1148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1146)
					),
					$renderingContext
				);
$arguments1144['__thenClosure'] = $renderChildrenClosure1145;

$output1143 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1144, $renderChildrenClosure1145, $renderingContext);

$output1143 .= '
                                                ';
return $output1143;
};
$arguments1141 = array();
$arguments1141['for'] = '';
$arguments1141['as'] = 'validationResults';
$arguments1141['for'] = 'billingAddress';

$output1133 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1141, $renderChildrenClosure1142, $renderingContext);

$output1133 .= '
                                            </div>
                                        ';
return $output1133;
};
$arguments1131 = array();

$output1130 .= '';

$output1130 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1152 = function() use ($renderingContext, $self) {
$output1153 = '';

$output1153 .= '
                                            <label for="billingAddress-city">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1154 = array();
$arguments1154['key'] = NULL;
$arguments1154['id'] = NULL;
$arguments1154['default'] = NULL;
$arguments1154['arguments'] = NULL;
$arguments1154['extensionName'] = NULL;
$arguments1154['languageKey'] = NULL;
$arguments1154['alternativeLanguageKeys'] = NULL;
$arguments1154['key'] = 'tx_cart_domain_model_order_address.city';

$output1153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1154, $renderChildrenClosure1155, $renderingContext)]);

$output1153 .= '
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1156 = array();
$arguments1156['additionalAttributes'] = NULL;
$arguments1156['data'] = NULL;
$arguments1156['aria'] = NULL;
$arguments1156['name'] = NULL;
$arguments1156['value'] = NULL;
$arguments1156['property'] = NULL;
$arguments1156['autofocus'] = NULL;
$arguments1156['disabled'] = NULL;
$arguments1156['maxlength'] = NULL;
$arguments1156['readonly'] = NULL;
$arguments1156['size'] = NULL;
$arguments1156['placeholder'] = NULL;
$arguments1156['pattern'] = NULL;
$arguments1156['errorClass'] = 'f3-form-error';
$arguments1156['class'] = NULL;
$arguments1156['dir'] = NULL;
$arguments1156['id'] = NULL;
$arguments1156['lang'] = NULL;
$arguments1156['style'] = NULL;
$arguments1156['title'] = NULL;
$arguments1156['accesskey'] = NULL;
$arguments1156['tabindex'] = NULL;
$arguments1156['onclick'] = NULL;
$arguments1156['required'] = false;
$arguments1156['type'] = 'text';
$arguments1156['id'] = 'billingAddress-city';
$arguments1156['class'] = 'form-control';
$arguments1156['name'] = 'billingAddress[city]';
$array1158 = array (
);$arguments1156['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.city', $array1158);

$output1153 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1156, $renderChildrenClosure1157, $renderingContext);

$output1153 .= '
                                            </div>
                                        ';
return $output1153;
};
$arguments1151 = array();
$arguments1151['if'] = NULL;

$output1130 .= '';

$output1130 .= '
                                    ';
return $output1130;
};
$arguments1099 = array();
$arguments1099['then'] = NULL;
$arguments1099['else'] = NULL;
$arguments1099['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1125 = array();
// Rendering Array
$array1126 = array();
$array1127 = array (
);$array1126['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.city.validator', $array1127);
$array1125['0'] = $array1126;
$array1125['1'] = ' == ';
// Rendering Array
$array1128 = array();
$array1128['0'] = 'NotEmpty';
$array1125['2'] = $array1128;

$expression1129 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1099['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1125)
					),
					$renderingContext
				);
$arguments1099['__thenClosure'] = function() use ($renderingContext, $self) {
$output1101 = '';

$output1101 .= '
                                            <label for="billingAddress-city" class="required">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1102 = array();
$arguments1102['key'] = NULL;
$arguments1102['id'] = NULL;
$arguments1102['default'] = NULL;
$arguments1102['arguments'] = NULL;
$arguments1102['extensionName'] = NULL;
$arguments1102['languageKey'] = NULL;
$arguments1102['alternativeLanguageKeys'] = NULL;
$arguments1102['key'] = 'tx_cart_domain_model_order_address.city';

$output1101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1102, $renderChildrenClosure1103, $renderingContext)]);

$output1101 .= '
                                                <em>*</em>
                                            </label>
                                            <div class="input-box">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1104 = array();
$arguments1104['additionalAttributes'] = NULL;
$arguments1104['data'] = NULL;
$arguments1104['aria'] = NULL;
$arguments1104['name'] = NULL;
$arguments1104['value'] = NULL;
$arguments1104['property'] = NULL;
$arguments1104['autofocus'] = NULL;
$arguments1104['disabled'] = NULL;
$arguments1104['maxlength'] = NULL;
$arguments1104['readonly'] = NULL;
$arguments1104['size'] = NULL;
$arguments1104['placeholder'] = NULL;
$arguments1104['pattern'] = NULL;
$arguments1104['errorClass'] = 'f3-form-error';
$arguments1104['class'] = NULL;
$arguments1104['dir'] = NULL;
$arguments1104['id'] = NULL;
$arguments1104['lang'] = NULL;
$arguments1104['style'] = NULL;
$arguments1104['title'] = NULL;
$arguments1104['accesskey'] = NULL;
$arguments1104['tabindex'] = NULL;
$arguments1104['onclick'] = NULL;
$arguments1104['required'] = false;
$arguments1104['type'] = 'text';
$arguments1104['id'] = 'billingAddress-city';
$arguments1104['class'] = 'form-control';
$arguments1104['name'] = 'billingAddress[city]';
$array1106 = array (
);$arguments1104['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.city', $array1106);
// Rendering Boolean node
// Rendering Array
$array1107 = array();
$array1107['0'] = 'true';

$expression1108 = function($context) {return TRUE;};
$arguments1104['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1107)
					),
					$renderingContext
				);

$output1101 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1104, $renderChildrenClosure1105, $renderingContext);

$output1101 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1110 = function() use ($renderingContext, $self) {
$output1111 = '';

$output1111 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1113 = function() use ($renderingContext, $self) {
$output1117 = '';

$output1117 .= '
                                                        <div class="validation-error alert alert-danger">';
$array1118 = array (
);
$output1117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.city.0.message', $array1118)]);

$output1117 .= '</div>
                                                    ';
return $output1117;
};
$arguments1112 = array();
$arguments1112['then'] = NULL;
$arguments1112['else'] = NULL;
$arguments1112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1114 = array();
$array1115 = array (
);$array1114['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.city', $array1115);

$expression1116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1114)
					),
					$renderingContext
				);
$arguments1112['__thenClosure'] = $renderChildrenClosure1113;

$output1111 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1112, $renderChildrenClosure1113, $renderingContext);

$output1111 .= '
                                                ';
return $output1111;
};
$arguments1109 = array();
$arguments1109['for'] = '';
$arguments1109['as'] = 'validationResults';
$arguments1109['for'] = 'billingAddress';

$output1101 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1109, $renderChildrenClosure1110, $renderingContext);

$output1101 .= '
                                            </div>
                                        ';
return $output1101;
};
$arguments1099['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1119 = '';

$output1119 .= '
                                            <label for="billingAddress-city">
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
$arguments1120['key'] = 'tx_cart_domain_model_order_address.city';

$output1119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1120, $renderChildrenClosure1121, $renderingContext)]);

$output1119 .= '
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
$arguments1122['id'] = 'billingAddress-city';
$arguments1122['class'] = 'form-control';
$arguments1122['name'] = 'billingAddress[city]';
$array1124 = array (
);$arguments1122['value'] = $renderingContext->getVariableProvider()->getByPath('billingAddress.city', $array1124);

$output1119 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1122, $renderChildrenClosure1123, $renderingContext);

$output1119 .= '
                                            </div>
                                        ';
return $output1119;
};

$output1098 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1099, $renderChildrenClosure1100, $renderingContext);

$output1098 .= '
                                </div>
                            </div>
                        ';
return $output1098;
};
$arguments1091 = array();
$arguments1091['then'] = NULL;
$arguments1091['else'] = NULL;
$arguments1091['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1093 = array();
// Rendering Array
$array1094 = array();
$array1095 = array (
);$array1094['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.city.validator', $array1095);
$array1093['0'] = $array1094;
$array1093['1'] = ' != ';
// Rendering Array
$array1096 = array();
$array1096['0'] = 'Empty';
$array1093['2'] = $array1096;

$expression1097 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1091['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1097(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1093)
					),
					$renderingContext
				);
$arguments1091['__thenClosure'] = $renderChildrenClosure1092;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1091, $renderChildrenClosure1092, $renderingContext);

$output0 .= '
                    </div>

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1160 = function() use ($renderingContext, $self) {
$output1166 = '';

$output1166 .= '
                        <div class="row">
                            <div class="col-sm-12 column">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1168 = function() use ($renderingContext, $self) {
$output1200 = '';

$output1200 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1202 = function() use ($renderingContext, $self) {
$output1203 = '';

$output1203 .= '
                                        <label for="billingAddress-country" class="required">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1204 = array();
$arguments1204['key'] = NULL;
$arguments1204['id'] = NULL;
$arguments1204['default'] = NULL;
$arguments1204['arguments'] = NULL;
$arguments1204['extensionName'] = NULL;
$arguments1204['languageKey'] = NULL;
$arguments1204['alternativeLanguageKeys'] = NULL;
$arguments1204['key'] = 'tx_cart_domain_model_order_address.country';

$output1203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1204, $renderChildrenClosure1205, $renderingContext)]);

$output1203 .= '
                                            <em>*</em>
                                        </label>
                                        <div class="input-box">
                                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure1207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1206 = array();
$arguments1206['additionalAttributes'] = NULL;
$arguments1206['data'] = NULL;
$arguments1206['aria'] = NULL;
$arguments1206['name'] = NULL;
$arguments1206['value'] = NULL;
$arguments1206['property'] = NULL;
$arguments1206['class'] = NULL;
$arguments1206['dir'] = NULL;
$arguments1206['id'] = NULL;
$arguments1206['lang'] = NULL;
$arguments1206['style'] = NULL;
$arguments1206['title'] = NULL;
$arguments1206['accesskey'] = NULL;
$arguments1206['tabindex'] = NULL;
$arguments1206['onclick'] = NULL;
$arguments1206['size'] = NULL;
$arguments1206['disabled'] = NULL;
$arguments1206['options'] = NULL;
$arguments1206['optionsAfterContent'] = false;
$arguments1206['optionValueField'] = NULL;
$arguments1206['optionLabelField'] = NULL;
$arguments1206['sortByOptionLabel'] = false;
$arguments1206['selectAllByDefault'] = false;
$arguments1206['errorClass'] = 'f3-form-error';
$arguments1206['prependOptionLabel'] = NULL;
$arguments1206['prependOptionValue'] = NULL;
$arguments1206['multiple'] = false;
$arguments1206['required'] = false;
$arguments1206['translationKey'] = NULL;
$arguments1206['id'] = 'billingAddress-country';
$arguments1206['class'] = 'form-control';
$arguments1206['name'] = 'billingAddress[country]';
$array1208 = array (
);$arguments1206['value'] = $renderingContext->getVariableProvider()->getByPath('cart.billingCountry', $array1208);
$array1209 = array (
);$arguments1206['options'] = $renderingContext->getVariableProvider()->getByPath('settings.allowedCountries', $array1209);
$arguments1206['translationKey'] = 'tx_cart.settings.allowed_countries';
// Rendering Boolean node
// Rendering Array
$array1210 = array();
$array1210['0'] = 'true';

$expression1211 = function($context) {return TRUE;};
$arguments1206['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1211(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1210)
					),
					$renderingContext
				);

$output1203 .= Extcode\Cart\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments1206, $renderChildrenClosure1207, $renderingContext);

$output1203 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1213 = function() use ($renderingContext, $self) {
$output1214 = '';

$output1214 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1216 = function() use ($renderingContext, $self) {
$output1220 = '';

$output1220 .= '
                                                    <div class="validation-error alert alert-danger">';
$array1221 = array (
);
$output1220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.country.0.message', $array1221)]);

$output1220 .= '</div>
                                                ';
return $output1220;
};
$arguments1215 = array();
$arguments1215['then'] = NULL;
$arguments1215['else'] = NULL;
$arguments1215['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1217 = array();
$array1218 = array (
);$array1217['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.country', $array1218);

$expression1219 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1215['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1219(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1217)
					),
					$renderingContext
				);
$arguments1215['__thenClosure'] = $renderChildrenClosure1216;

$output1214 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1215, $renderChildrenClosure1216, $renderingContext);

$output1214 .= '
                                            ';
return $output1214;
};
$arguments1212 = array();
$arguments1212['for'] = '';
$arguments1212['as'] = 'validationResults';
$arguments1212['for'] = 'billingAddress';

$output1203 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1212, $renderChildrenClosure1213, $renderingContext);

$output1203 .= '
                                        </div>
                                    ';
return $output1203;
};
$arguments1201 = array();

$output1200 .= '';

$output1200 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1223 = function() use ($renderingContext, $self) {
$output1224 = '';

$output1224 .= '
                                        <label for="billingAddress-country">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1225 = array();
$arguments1225['key'] = NULL;
$arguments1225['id'] = NULL;
$arguments1225['default'] = NULL;
$arguments1225['arguments'] = NULL;
$arguments1225['extensionName'] = NULL;
$arguments1225['languageKey'] = NULL;
$arguments1225['alternativeLanguageKeys'] = NULL;
$arguments1225['key'] = 'tx_cart_domain_model_order_address.country';

$output1224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1225, $renderChildrenClosure1226, $renderingContext)]);

$output1224 .= '
                                        </label>
                                        <div class="input-box">
                                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure1228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1227 = array();
$arguments1227['additionalAttributes'] = NULL;
$arguments1227['data'] = NULL;
$arguments1227['aria'] = NULL;
$arguments1227['name'] = NULL;
$arguments1227['value'] = NULL;
$arguments1227['property'] = NULL;
$arguments1227['class'] = NULL;
$arguments1227['dir'] = NULL;
$arguments1227['id'] = NULL;
$arguments1227['lang'] = NULL;
$arguments1227['style'] = NULL;
$arguments1227['title'] = NULL;
$arguments1227['accesskey'] = NULL;
$arguments1227['tabindex'] = NULL;
$arguments1227['onclick'] = NULL;
$arguments1227['size'] = NULL;
$arguments1227['disabled'] = NULL;
$arguments1227['options'] = NULL;
$arguments1227['optionsAfterContent'] = false;
$arguments1227['optionValueField'] = NULL;
$arguments1227['optionLabelField'] = NULL;
$arguments1227['sortByOptionLabel'] = false;
$arguments1227['selectAllByDefault'] = false;
$arguments1227['errorClass'] = 'f3-form-error';
$arguments1227['prependOptionLabel'] = NULL;
$arguments1227['prependOptionValue'] = NULL;
$arguments1227['multiple'] = false;
$arguments1227['required'] = false;
$arguments1227['translationKey'] = NULL;
$arguments1227['id'] = 'billingAddress-country';
$arguments1227['class'] = 'form-control';
$arguments1227['name'] = 'billingAddress[country]';
$array1229 = array (
);$arguments1227['value'] = $renderingContext->getVariableProvider()->getByPath('cart.billingCountry', $array1229);
$array1230 = array (
);$arguments1227['options'] = $renderingContext->getVariableProvider()->getByPath('settings.allowedCountries', $array1230);
$arguments1227['translationKey'] = 'tx_cart.settings.allowed_countries';

$output1224 .= Extcode\Cart\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments1227, $renderChildrenClosure1228, $renderingContext);

$output1224 .= '
                                        </div>
                                    ';
return $output1224;
};
$arguments1222 = array();
$arguments1222['if'] = NULL;

$output1200 .= '';

$output1200 .= '
                                ';
return $output1200;
};
$arguments1167 = array();
$arguments1167['then'] = NULL;
$arguments1167['else'] = NULL;
$arguments1167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1195 = array();
// Rendering Array
$array1196 = array();
$array1197 = array (
);$array1196['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.country.validator', $array1197);
$array1195['0'] = $array1196;
$array1195['1'] = ' == ';
// Rendering Array
$array1198 = array();
$array1198['0'] = 'NotEmpty';
$array1195['2'] = $array1198;

$expression1199 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1195)
					),
					$renderingContext
				);
$arguments1167['__thenClosure'] = function() use ($renderingContext, $self) {
$output1169 = '';

$output1169 .= '
                                        <label for="billingAddress-country" class="required">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1170 = array();
$arguments1170['key'] = NULL;
$arguments1170['id'] = NULL;
$arguments1170['default'] = NULL;
$arguments1170['arguments'] = NULL;
$arguments1170['extensionName'] = NULL;
$arguments1170['languageKey'] = NULL;
$arguments1170['alternativeLanguageKeys'] = NULL;
$arguments1170['key'] = 'tx_cart_domain_model_order_address.country';

$output1169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1170, $renderChildrenClosure1171, $renderingContext)]);

$output1169 .= '
                                            <em>*</em>
                                        </label>
                                        <div class="input-box">
                                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure1173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1172 = array();
$arguments1172['additionalAttributes'] = NULL;
$arguments1172['data'] = NULL;
$arguments1172['aria'] = NULL;
$arguments1172['name'] = NULL;
$arguments1172['value'] = NULL;
$arguments1172['property'] = NULL;
$arguments1172['class'] = NULL;
$arguments1172['dir'] = NULL;
$arguments1172['id'] = NULL;
$arguments1172['lang'] = NULL;
$arguments1172['style'] = NULL;
$arguments1172['title'] = NULL;
$arguments1172['accesskey'] = NULL;
$arguments1172['tabindex'] = NULL;
$arguments1172['onclick'] = NULL;
$arguments1172['size'] = NULL;
$arguments1172['disabled'] = NULL;
$arguments1172['options'] = NULL;
$arguments1172['optionsAfterContent'] = false;
$arguments1172['optionValueField'] = NULL;
$arguments1172['optionLabelField'] = NULL;
$arguments1172['sortByOptionLabel'] = false;
$arguments1172['selectAllByDefault'] = false;
$arguments1172['errorClass'] = 'f3-form-error';
$arguments1172['prependOptionLabel'] = NULL;
$arguments1172['prependOptionValue'] = NULL;
$arguments1172['multiple'] = false;
$arguments1172['required'] = false;
$arguments1172['translationKey'] = NULL;
$arguments1172['id'] = 'billingAddress-country';
$arguments1172['class'] = 'form-control';
$arguments1172['name'] = 'billingAddress[country]';
$array1174 = array (
);$arguments1172['value'] = $renderingContext->getVariableProvider()->getByPath('cart.billingCountry', $array1174);
$array1175 = array (
);$arguments1172['options'] = $renderingContext->getVariableProvider()->getByPath('settings.allowedCountries', $array1175);
$arguments1172['translationKey'] = 'tx_cart.settings.allowed_countries';
// Rendering Boolean node
// Rendering Array
$array1176 = array();
$array1176['0'] = 'true';

$expression1177 = function($context) {return TRUE;};
$arguments1172['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1176)
					),
					$renderingContext
				);

$output1169 .= Extcode\Cart\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments1172, $renderChildrenClosure1173, $renderingContext);

$output1169 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure1179 = function() use ($renderingContext, $self) {
$output1180 = '';

$output1180 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1182 = function() use ($renderingContext, $self) {
$output1186 = '';

$output1186 .= '
                                                    <div class="validation-error alert alert-danger">';
$array1187 = array (
);
$output1186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.country.0.message', $array1187)]);

$output1186 .= '</div>
                                                ';
return $output1186;
};
$arguments1181 = array();
$arguments1181['then'] = NULL;
$arguments1181['else'] = NULL;
$arguments1181['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1183 = array();
$array1184 = array (
);$array1183['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.country', $array1184);

$expression1185 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1181['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1183)
					),
					$renderingContext
				);
$arguments1181['__thenClosure'] = $renderChildrenClosure1182;

$output1180 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1181, $renderChildrenClosure1182, $renderingContext);

$output1180 .= '
                                            ';
return $output1180;
};
$arguments1178 = array();
$arguments1178['for'] = '';
$arguments1178['as'] = 'validationResults';
$arguments1178['for'] = 'billingAddress';

$output1169 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1178, $renderChildrenClosure1179, $renderingContext);

$output1169 .= '
                                        </div>
                                    ';
return $output1169;
};
$arguments1167['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1188 = '';

$output1188 .= '
                                        <label for="billingAddress-country">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1189 = array();
$arguments1189['key'] = NULL;
$arguments1189['id'] = NULL;
$arguments1189['default'] = NULL;
$arguments1189['arguments'] = NULL;
$arguments1189['extensionName'] = NULL;
$arguments1189['languageKey'] = NULL;
$arguments1189['alternativeLanguageKeys'] = NULL;
$arguments1189['key'] = 'tx_cart_domain_model_order_address.country';

$output1188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1189, $renderChildrenClosure1190, $renderingContext)]);

$output1188 .= '
                                        </label>
                                        <div class="input-box">
                                            ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure1192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1191 = array();
$arguments1191['additionalAttributes'] = NULL;
$arguments1191['data'] = NULL;
$arguments1191['aria'] = NULL;
$arguments1191['name'] = NULL;
$arguments1191['value'] = NULL;
$arguments1191['property'] = NULL;
$arguments1191['class'] = NULL;
$arguments1191['dir'] = NULL;
$arguments1191['id'] = NULL;
$arguments1191['lang'] = NULL;
$arguments1191['style'] = NULL;
$arguments1191['title'] = NULL;
$arguments1191['accesskey'] = NULL;
$arguments1191['tabindex'] = NULL;
$arguments1191['onclick'] = NULL;
$arguments1191['size'] = NULL;
$arguments1191['disabled'] = NULL;
$arguments1191['options'] = NULL;
$arguments1191['optionsAfterContent'] = false;
$arguments1191['optionValueField'] = NULL;
$arguments1191['optionLabelField'] = NULL;
$arguments1191['sortByOptionLabel'] = false;
$arguments1191['selectAllByDefault'] = false;
$arguments1191['errorClass'] = 'f3-form-error';
$arguments1191['prependOptionLabel'] = NULL;
$arguments1191['prependOptionValue'] = NULL;
$arguments1191['multiple'] = false;
$arguments1191['required'] = false;
$arguments1191['translationKey'] = NULL;
$arguments1191['id'] = 'billingAddress-country';
$arguments1191['class'] = 'form-control';
$arguments1191['name'] = 'billingAddress[country]';
$array1193 = array (
);$arguments1191['value'] = $renderingContext->getVariableProvider()->getByPath('cart.billingCountry', $array1193);
$array1194 = array (
);$arguments1191['options'] = $renderingContext->getVariableProvider()->getByPath('settings.allowedCountries', $array1194);
$arguments1191['translationKey'] = 'tx_cart.settings.allowed_countries';

$output1188 .= Extcode\Cart\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments1191, $renderChildrenClosure1192, $renderingContext);

$output1188 .= '
                                        </div>
                                    ';
return $output1188;
};

$output1166 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1167, $renderChildrenClosure1168, $renderingContext);

$output1166 .= '
                            </div>
                        </div>
                    ';
return $output1166;
};
$arguments1159 = array();
$arguments1159['then'] = NULL;
$arguments1159['else'] = NULL;
$arguments1159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1161 = array();
// Rendering Array
$array1162 = array();
$array1163 = array (
);$array1162['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.billingAddress.fields.country.validator', $array1163);
$array1161['0'] = $array1162;
$array1161['1'] = ' != ';
// Rendering Array
$array1164 = array();
$array1164['0'] = 'Empty';
$array1161['2'] = $array1164;

$expression1165 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1161)
					),
					$renderingContext
				);
$arguments1159['__thenClosure'] = $renderChildrenClosure1160;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1159, $renderChildrenClosure1160, $renderingContext);

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