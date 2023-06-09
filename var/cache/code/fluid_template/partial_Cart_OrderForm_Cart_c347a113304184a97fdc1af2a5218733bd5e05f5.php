<?php

class partial_Cart_OrderForm_Cart_c347a113304184a97fdc1af2a5218733bd5e05f5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div id="checkout-step-review" class="checkout-step bg-light-grey">
    <h5 class="checkout-step-title">
        <span class="checkout-step-number"></span>
        ';
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
$arguments1['key'] = 'tx_cart.controller.order.action.show_cart.block-header.order_overview';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    </h5>
    <div class="checkout-step-content">
        <div class="row">
            <div class="col-sm-12 column">
                <div class="checkout-step-content-list">
                    <fieldset>
                        <div class="checkout-step-fields">
                            <div class="field accept-terms">
                                <label for="orderItem-acceptTermsAndConditions">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['aria'] = NULL;
$arguments11['name'] = NULL;
$arguments11['value'] = NULL;
$arguments11['property'] = NULL;
$arguments11['disabled'] = NULL;
$arguments11['errorClass'] = 'f3-form-error';
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['checked'] = NULL;
$arguments11['multiple'] = false;
$arguments11['id'] = 'orderItem-acceptTermsAndConditions';
$arguments11['property'] = 'acceptTermsAndConditions';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'tx_cart_domain_model_order_item.accept_terms_and_conditions';
$arguments11['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
$arguments11['value'] = 1;

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
                                        <span>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['languageKey'] = NULL;
$arguments38['alternativeLanguageKeys'] = NULL;
$arguments38['key'] = 'tx_cart_domain_model_order_item.accept_terms_and_conditions_with_link';
// Rendering Array
$array40 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['pageUid'] = NULL;
$arguments41['additionalParams'] = array (
);
$arguments41['pageType'] = 0;
$arguments41['noCache'] = false;
$arguments41['language'] = NULL;
$arguments41['noCacheHash'] = NULL;
$arguments41['section'] = '';
$arguments41['linkAccessRestrictedPages'] = false;
$arguments41['absolute'] = false;
$arguments41['addQueryString'] = false;
$arguments41['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments41['addQueryStringMethod'] = NULL;
$array43 = array (
);$arguments41['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.cart.acceptTermsAndConditions.pid', $array43);
$array40['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
$array40['1'] = '_blank';
$arguments38['arguments'] = $array40;
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);
};
$arguments36 = array();
$arguments36['value'] = NULL;

$output35 .= isset($arguments36['value']) ? $arguments36['value'] : $renderChildrenClosure37();

$output35 .= '
                                                ';
return $output35;
};
$arguments33 = array();

$output32 .= '';

$output32 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['key'] = NULL;
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['languageKey'] = NULL;
$arguments47['alternativeLanguageKeys'] = NULL;
$arguments47['key'] = 'tx_cart_domain_model_order_item.accept_terms_and_conditions';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output46 .= '
                                                ';
return $output46;
};
$arguments44 = array();
$arguments44['if'] = NULL;

$output32 .= '';

$output32 .= '
                                            ';
return $output32;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('settings.cart.acceptTermsAndConditions.pid', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['languageKey'] = NULL;
$arguments20['alternativeLanguageKeys'] = NULL;
$arguments20['key'] = 'tx_cart_domain_model_order_item.accept_terms_and_conditions_with_link';
// Rendering Array
$array22 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['pageUid'] = NULL;
$arguments23['additionalParams'] = array (
);
$arguments23['pageType'] = 0;
$arguments23['noCache'] = false;
$arguments23['language'] = NULL;
$arguments23['noCacheHash'] = NULL;
$arguments23['section'] = '';
$arguments23['linkAccessRestrictedPages'] = false;
$arguments23['absolute'] = false;
$arguments23['addQueryString'] = false;
$arguments23['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments23['addQueryStringMethod'] = NULL;
$array25 = array (
);$arguments23['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.cart.acceptTermsAndConditions.pid', $array25);
$array22['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);
$array22['1'] = '_blank';
$arguments20['arguments'] = $array22;
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);
};
$arguments18 = array();
$arguments18['value'] = NULL;

$output17 .= isset($arguments18['value']) ? $arguments18['value'] : $renderChildrenClosure19();

$output17 .= '
                                                ';
return $output17;
};
$arguments15['__elseClosures'][] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['languageKey'] = NULL;
$arguments27['alternativeLanguageKeys'] = NULL;
$arguments27['key'] = 'tx_cart_domain_model_order_item.accept_terms_and_conditions';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output26 .= '
                                                ';
return $output26;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output10 .= '
                                        </span>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                                                <div class="validation-error alert alert-danger">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$array62 = array (
);return $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.acceptTermsAndConditions.0.code', $array62);
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$output60 = '';

$output60 .= 'tx_cart_domain_model_order_item.accept_terms_and_conditions.error.';
$array61 = array (
);
$output60 .= $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.acceptTermsAndConditions.0.code', $array61);
$arguments58['key'] = $output60;

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= '
                                                </div>
                                            ';
return $output57;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.acceptTermsAndConditions', $array55);

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments52['__thenClosure'] = $renderChildrenClosure53;

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                                        ';
return $output51;
};
$arguments49 = array();
$arguments49['for'] = '';
$arguments49['as'] = 'validationResults';
$arguments49['for'] = 'orderItem';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output10 .= '
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
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.orderItem.fields.acceptTermsAndConditions.validator', $array7);
$array5['0'] = $array6;
$array5['1'] = ' == ';
// Rendering Array
$array8 = array();
$array8['0'] = 'Boolean';
$array5['2'] = $array8;

$expression9 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
                                </label>
                            </div>
                            <div class="field accept-terms">
                                <label for="orderItem-acceptRevocationInstruction">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['aria'] = NULL;
$arguments71['name'] = NULL;
$arguments71['value'] = NULL;
$arguments71['property'] = NULL;
$arguments71['disabled'] = NULL;
$arguments71['errorClass'] = 'f3-form-error';
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['checked'] = NULL;
$arguments71['multiple'] = false;
$arguments71['id'] = 'orderItem-acceptRevocationInstruction';
$arguments71['property'] = 'acceptRevocationInstruction';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['key'] = NULL;
$arguments73['id'] = NULL;
$arguments73['default'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['languageKey'] = NULL;
$arguments73['alternativeLanguageKeys'] = NULL;
$arguments73['key'] = 'tx_cart_domain_model_order_item.accept_revocation_instruction';
$arguments71['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);
$arguments71['value'] = 1;

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
                                        <span>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['key'] = NULL;
$arguments98['id'] = NULL;
$arguments98['default'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['extensionName'] = NULL;
$arguments98['languageKey'] = NULL;
$arguments98['alternativeLanguageKeys'] = NULL;
$arguments98['key'] = 'tx_cart_domain_model_order_item.accept_revocation_instruction_with_link';
// Rendering Array
$array100 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['pageUid'] = NULL;
$arguments101['additionalParams'] = array (
);
$arguments101['pageType'] = 0;
$arguments101['noCache'] = false;
$arguments101['language'] = NULL;
$arguments101['noCacheHash'] = NULL;
$arguments101['section'] = '';
$arguments101['linkAccessRestrictedPages'] = false;
$arguments101['absolute'] = false;
$arguments101['addQueryString'] = false;
$arguments101['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments101['addQueryStringMethod'] = NULL;
$array103 = array (
);$arguments101['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.cart.acceptRevocationInstruction.pid', $array103);
$array100['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);
$array100['1'] = '_blank';
$arguments98['arguments'] = $array100;
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);
};
$arguments96 = array();
$arguments96['value'] = NULL;

$output95 .= isset($arguments96['value']) ? $arguments96['value'] : $renderChildrenClosure97();

$output95 .= '
                                                ';
return $output95;
};
$arguments93 = array();

$output92 .= '';

$output92 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
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
$arguments107['key'] = 'tx_cart_domain_model_order_item.accept_revocation_instruction';

$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output106 .= '
                                                ';
return $output106;
};
$arguments104 = array();
$arguments104['if'] = NULL;

$output92 .= '';

$output92 .= '
                                            ';
return $output92;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('settings.cart.acceptRevocationInstruction.pid', $array90);

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['key'] = NULL;
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['languageKey'] = NULL;
$arguments80['alternativeLanguageKeys'] = NULL;
$arguments80['key'] = 'tx_cart_domain_model_order_item.accept_revocation_instruction_with_link';
// Rendering Array
$array82 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['pageUid'] = NULL;
$arguments83['additionalParams'] = array (
);
$arguments83['pageType'] = 0;
$arguments83['noCache'] = false;
$arguments83['language'] = NULL;
$arguments83['noCacheHash'] = NULL;
$arguments83['section'] = '';
$arguments83['linkAccessRestrictedPages'] = false;
$arguments83['absolute'] = false;
$arguments83['addQueryString'] = false;
$arguments83['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments83['addQueryStringMethod'] = NULL;
$array85 = array (
);$arguments83['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.cart.acceptRevocationInstruction.pid', $array85);
$array82['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);
$array82['1'] = '_blank';
$arguments80['arguments'] = $array82;
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);
};
$arguments78 = array();
$arguments78['value'] = NULL;

$output77 .= isset($arguments78['value']) ? $arguments78['value'] : $renderChildrenClosure79();

$output77 .= '
                                                ';
return $output77;
};
$arguments75['__elseClosures'][] = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$arguments87['key'] = 'tx_cart_domain_model_order_item.accept_revocation_instruction';

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output86 .= '
                                                ';
return $output86;
};

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output70 .= '
                                        </span>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
                                                <div class="validation-error alert alert-danger">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$array122 = array (
);return $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.acceptRevocationInstruction.0.code', $array122);
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['languageKey'] = NULL;
$arguments118['alternativeLanguageKeys'] = NULL;
$output120 = '';

$output120 .= 'tx_cart_domain_model_order_item.accept_revocation_instruction.error.';
$array121 = array (
);
$output120 .= $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.acceptRevocationInstruction.0.code', $array121);
$arguments118['key'] = $output120;

$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext)]);

$output117 .= '
                                                </div>
                                            ';
return $output117;
};
$arguments112 = array();
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$arguments112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.acceptRevocationInstruction', $array115);

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments112['__thenClosure'] = $renderChildrenClosure113;

$output111 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
                                        ';
return $output111;
};
$arguments109 = array();
$arguments109['for'] = '';
$arguments109['as'] = 'validationResults';
$arguments109['for'] = 'orderItem';

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output70 .= '
                                    ';
return $output70;
};
$arguments63 = array();
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
// Rendering Array
$array66 = array();
$array67 = array (
);$array66['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.orderItem.fields.acceptRevocationInstruction.validator', $array67);
$array65['0'] = $array66;
$array65['1'] = ' == ';
// Rendering Array
$array68 = array();
$array68['0'] = 'Boolean';
$array65['2'] = $array68;

$expression69 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments63['__thenClosure'] = $renderChildrenClosure64;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output0 .= '
                                </label>
                            </div>
                            <div class="field accept-terms">
                                <label for="orderItem-acceptPrivacyPolicy">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['additionalAttributes'] = NULL;
$arguments131['data'] = NULL;
$arguments131['aria'] = NULL;
$arguments131['name'] = NULL;
$arguments131['value'] = NULL;
$arguments131['property'] = NULL;
$arguments131['disabled'] = NULL;
$arguments131['errorClass'] = 'f3-form-error';
$arguments131['class'] = NULL;
$arguments131['dir'] = NULL;
$arguments131['id'] = NULL;
$arguments131['lang'] = NULL;
$arguments131['style'] = NULL;
$arguments131['title'] = NULL;
$arguments131['accesskey'] = NULL;
$arguments131['tabindex'] = NULL;
$arguments131['onclick'] = NULL;
$arguments131['checked'] = NULL;
$arguments131['multiple'] = false;
$arguments131['id'] = 'orderItem-acceptPrivacyPolicy';
$arguments131['property'] = 'acceptPrivacyPolicy';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['key'] = NULL;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['languageKey'] = NULL;
$arguments133['alternativeLanguageKeys'] = NULL;
$arguments133['key'] = 'tx_cart_domain_model_order_item.accept_privacy_policy';
$arguments131['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
$arguments131['value'] = 1;

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output130 .= '
                                        <span>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$arguments158['key'] = 'tx_cart_domain_model_order_item.accept_privacy_policy_with_link';
// Rendering Array
$array160 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['pageUid'] = NULL;
$arguments161['additionalParams'] = array (
);
$arguments161['pageType'] = 0;
$arguments161['noCache'] = false;
$arguments161['language'] = NULL;
$arguments161['noCacheHash'] = NULL;
$arguments161['section'] = '';
$arguments161['linkAccessRestrictedPages'] = false;
$arguments161['absolute'] = false;
$arguments161['addQueryString'] = false;
$arguments161['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments161['addQueryStringMethod'] = NULL;
$array163 = array (
);$arguments161['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.cart.acceptPrivacyPolicy.pid', $array163);
$array160['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);
$array160['1'] = '_blank';
$arguments158['arguments'] = $array160;
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);
};
$arguments156 = array();
$arguments156['value'] = NULL;

$output155 .= isset($arguments156['value']) ? $arguments156['value'] : $renderChildrenClosure157();

$output155 .= '
                                                ';
return $output155;
};
$arguments153 = array();

$output152 .= '';

$output152 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['key'] = NULL;
$arguments167['id'] = NULL;
$arguments167['default'] = NULL;
$arguments167['arguments'] = NULL;
$arguments167['extensionName'] = NULL;
$arguments167['languageKey'] = NULL;
$arguments167['alternativeLanguageKeys'] = NULL;
$arguments167['key'] = 'tx_cart_domain_model_order_item.accept_privacy_policy';

$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);

$output166 .= '
                                                ';
return $output166;
};
$arguments164 = array();
$arguments164['if'] = NULL;

$output152 .= '';

$output152 .= '
                                            ';
return $output152;
};
$arguments135 = array();
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$arguments135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('settings.cart.acceptPrivacyPolicy.pid', $array150);

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments135['__thenClosure'] = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['key'] = NULL;
$arguments140['id'] = NULL;
$arguments140['default'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['extensionName'] = NULL;
$arguments140['languageKey'] = NULL;
$arguments140['alternativeLanguageKeys'] = NULL;
$arguments140['key'] = 'tx_cart_domain_model_order_item.accept_privacy_policy_with_link';
// Rendering Array
$array142 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['pageUid'] = NULL;
$arguments143['additionalParams'] = array (
);
$arguments143['pageType'] = 0;
$arguments143['noCache'] = false;
$arguments143['language'] = NULL;
$arguments143['noCacheHash'] = NULL;
$arguments143['section'] = '';
$arguments143['linkAccessRestrictedPages'] = false;
$arguments143['absolute'] = false;
$arguments143['addQueryString'] = false;
$arguments143['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments143['addQueryStringMethod'] = NULL;
$array145 = array (
);$arguments143['pageUid'] = $renderingContext->getVariableProvider()->getByPath('settings.cart.acceptPrivacyPolicy.pid', $array145);
$array142['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);
$array142['1'] = '_blank';
$arguments140['arguments'] = $array142;
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);
};
$arguments138 = array();
$arguments138['value'] = NULL;

$output137 .= isset($arguments138['value']) ? $arguments138['value'] : $renderChildrenClosure139();

$output137 .= '
                                                ';
return $output137;
};
$arguments135['__elseClosures'][] = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['key'] = NULL;
$arguments147['id'] = NULL;
$arguments147['default'] = NULL;
$arguments147['arguments'] = NULL;
$arguments147['extensionName'] = NULL;
$arguments147['languageKey'] = NULL;
$arguments147['alternativeLanguageKeys'] = NULL;
$arguments147['key'] = 'tx_cart_domain_model_order_item.accept_privacy_policy';

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext)]);

$output146 .= '
                                                ';
return $output146;
};

$output130 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output130 .= '
                                        </span>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
                                                <div class="validation-error alert alert-danger">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$array182 = array (
);return $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.acceptPrivacyPolicy.0.code', $array182);
};
$arguments178 = array();
$arguments178['key'] = NULL;
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$arguments178['languageKey'] = NULL;
$arguments178['alternativeLanguageKeys'] = NULL;
$output180 = '';

$output180 .= 'tx_cart_domain_model_order_item.accept_privacy_policy.error.';
$array181 = array (
);
$output180 .= $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.acceptPrivacyPolicy.0.code', $array181);
$arguments178['key'] = $output180;

$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext)]);

$output177 .= '
                                                </div>
                                            ';
return $output177;
};
$arguments172 = array();
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$arguments172['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors.acceptPrivacyPolicy', $array175);

$expression176 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments172['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments172['__thenClosure'] = $renderChildrenClosure173;

$output171 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
                                        ';
return $output171;
};
$arguments169 = array();
$arguments169['for'] = '';
$arguments169['as'] = 'validationResults';
$arguments169['for'] = 'orderItem';

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output130 .= '
                                    ';
return $output130;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.orderItem.fields.acceptPrivacyPolicy.validator', $array127);
$array125['0'] = $array126;
$array125['1'] = ' == ';
// Rendering Array
$array128 = array();
$array128['0'] = 'Boolean';
$array125['2'] = $array128;

$expression129 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = $renderChildrenClosure124;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output0 .= '
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <label>
                                <span>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['key'] = NULL;
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['languageKey'] = NULL;
$arguments183['alternativeLanguageKeys'] = NULL;
$arguments183['key'] = 'tx_cart_domain_model_order_item.comment';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);

$output0 .= '
                                </span>
                            </label>

                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['additionalAttributes'] = NULL;
$arguments185['data'] = NULL;
$arguments185['aria'] = NULL;
$arguments185['name'] = NULL;
$arguments185['value'] = NULL;
$arguments185['property'] = NULL;
$arguments185['autofocus'] = NULL;
$arguments185['rows'] = NULL;
$arguments185['cols'] = NULL;
$arguments185['disabled'] = NULL;
$arguments185['placeholder'] = NULL;
$arguments185['errorClass'] = 'f3-form-error';
$arguments185['readonly'] = NULL;
$arguments185['required'] = false;
$arguments185['class'] = NULL;
$arguments185['dir'] = NULL;
$arguments185['id'] = NULL;
$arguments185['lang'] = NULL;
$arguments185['style'] = NULL;
$arguments185['title'] = NULL;
$arguments185['accesskey'] = NULL;
$arguments185['tabindex'] = NULL;
$arguments185['onclick'] = NULL;
$arguments185['id'] = 'orderItem-comment';
$arguments185['class'] = 'form-control';
$arguments185['name'] = 'orderItem[comment]';
$array187 = array (
);$arguments185['value'] = $renderingContext->getVariableProvider()->getByPath('orderItem.comment', $array187);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output0 .= '
                        </div>
                    </fieldset>

                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['section'] = NULL;
$arguments188['partial'] = NULL;
$arguments188['delegate'] = NULL;
$arguments188['renderable'] = NULL;
$arguments188['arguments'] = array (
);
$arguments188['optional'] = false;
$arguments188['default'] = NULL;
$arguments188['contentAs'] = NULL;
$arguments188['debug'] = true;
$arguments188['partial'] = 'Cart/OrderForm/Summary';
// Rendering Array
$array190 = array();
$array191 = array (
);$array190['cart'] = $renderingContext->getVariableProvider()->getByPath('cart', $array191);
$arguments188['arguments'] = $array190;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>
    </div>
</div>

';

return $output0;
}


}
#