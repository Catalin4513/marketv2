<?php

class Login_action_login_91c3f273e2a3fba2a4b573e2ef70df2c7952bd3a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <fieldset>
        <legend>
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
$arguments1['key'] = 'login';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
        </legend>
        <div>
            <label>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'username';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['aria'] = NULL;
$arguments5['name'] = NULL;
$arguments5['value'] = NULL;
$arguments5['property'] = NULL;
$arguments5['autofocus'] = NULL;
$arguments5['disabled'] = NULL;
$arguments5['maxlength'] = NULL;
$arguments5['readonly'] = NULL;
$arguments5['size'] = NULL;
$arguments5['placeholder'] = NULL;
$arguments5['pattern'] = NULL;
$arguments5['errorClass'] = 'f3-form-error';
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['required'] = false;
$arguments5['type'] = 'text';
$arguments5['name'] = 'user';
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array7['0'] = 'true';

$expression8 = function($context) {return TRUE;};
$arguments5['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
// Rendering Array
$array9 = array();
$array9['autocomplete'] = 'username';
$arguments5['additionalAttributes'] = $array9;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
            </label>
        </div>
        <div>
            <label>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['key'] = NULL;
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['languageKey'] = NULL;
$arguments10['alternativeLanguageKeys'] = NULL;
$arguments10['key'] = 'password';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output0 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
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
$arguments12['disabled'] = NULL;
$arguments12['maxlength'] = NULL;
$arguments12['placeholder'] = NULL;
$arguments12['readonly'] = NULL;
$arguments12['size'] = NULL;
$arguments12['errorClass'] = 'f3-form-error';
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['name'] = 'pass';
// Rendering Array
$array14 = array();
$array14['rsa-encryption'] = '';
$arguments12['data'] = $array14;
// Rendering Array
$array15 = array();
$array15['required'] = 'required';
$array15['autocomplete'] = 'current-password';
$arguments12['additionalAttributes'] = $array15;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
            </label>
        </div>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
            <div>
                <label>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['key'] = NULL;
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['languageKey'] = NULL;
$arguments22['alternativeLanguageKeys'] = NULL;
$arguments22['id'] = 'permalogin';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output21 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['aria'] = NULL;
$arguments46['name'] = NULL;
$arguments46['value'] = NULL;
$arguments46['property'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['name'] = 'permalogin';
$arguments46['value'] = 0;
// Rendering Array
$array48 = array();
$array48['disabled'] = 'disabled';
$arguments46['additionalAttributes'] = $array48;

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['aria'] = NULL;
$arguments49['name'] = NULL;
$arguments49['value'] = NULL;
$arguments49['property'] = NULL;
$arguments49['disabled'] = NULL;
$arguments49['errorClass'] = 'f3-form-error';
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['checked'] = NULL;
$arguments49['multiple'] = false;
$arguments49['name'] = 'permalogin';
$arguments49['id'] = 'permalogin';
$arguments49['value'] = 1;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array51['0'] = 'checked';

$expression52 = function($context) {return "checked";};
$arguments49['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output45 .= '
                        ';
return $output45;
};
$arguments43 = array();

$output42 .= '';

$output42 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['aria'] = NULL;
$arguments56['name'] = NULL;
$arguments56['value'] = NULL;
$arguments56['property'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['name'] = 'permalogin';
$arguments56['value'] = 0;

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['aria'] = NULL;
$arguments58['name'] = NULL;
$arguments58['value'] = NULL;
$arguments58['property'] = NULL;
$arguments58['disabled'] = NULL;
$arguments58['errorClass'] = 'f3-form-error';
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['checked'] = NULL;
$arguments58['multiple'] = false;
$arguments58['name'] = 'permalogin';
$arguments58['id'] = 'permalogin';
$arguments58['value'] = 1;

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output55 .= '
                        ';
return $output55;
};
$arguments53 = array();
$arguments53['if'] = NULL;

$output42 .= '';

$output42 .= '
                    ';
return $output42;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('permaloginStatus', $array40);
$array39['1'] = ' == 1';

$expression41 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['aria'] = NULL;
$arguments27['name'] = NULL;
$arguments27['value'] = NULL;
$arguments27['property'] = NULL;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['name'] = 'permalogin';
$arguments27['value'] = 0;
// Rendering Array
$array29 = array();
$array29['disabled'] = 'disabled';
$arguments27['additionalAttributes'] = $array29;

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['additionalAttributes'] = NULL;
$arguments30['data'] = NULL;
$arguments30['aria'] = NULL;
$arguments30['name'] = NULL;
$arguments30['value'] = NULL;
$arguments30['property'] = NULL;
$arguments30['disabled'] = NULL;
$arguments30['errorClass'] = 'f3-form-error';
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['id'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['title'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$arguments30['checked'] = NULL;
$arguments30['multiple'] = false;
$arguments30['name'] = 'permalogin';
$arguments30['id'] = 'permalogin';
$arguments30['value'] = 1;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array32['0'] = 'checked';

$expression33 = function($context) {return "checked";};
$arguments30['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output26 .= '
                        ';
return $output26;
};
$arguments24['__elseClosures'][] = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['aria'] = NULL;
$arguments35['name'] = NULL;
$arguments35['value'] = NULL;
$arguments35['property'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['name'] = 'permalogin';
$arguments35['value'] = 0;

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['aria'] = NULL;
$arguments37['name'] = NULL;
$arguments37['value'] = NULL;
$arguments37['property'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['errorClass'] = 'f3-form-error';
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['checked'] = NULL;
$arguments37['multiple'] = false;
$arguments37['name'] = 'permalogin';
$arguments37['id'] = 'permalogin';
$arguments37['value'] = 1;

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output34 .= '
                        ';
return $output34;
};

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output21 .= '
                </label>
            </div>
        ';
return $output21;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('permaloginStatus', $array19);
$array18['1'] = ' > -1';

$expression20 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > -1);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['__thenClosure'] = $renderChildrenClosure17;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '

        <div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['aria'] = NULL;
$arguments60['name'] = NULL;
$arguments60['value'] = NULL;
$arguments60['property'] = NULL;
$arguments60['disabled'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['languageKey'] = NULL;
$arguments62['alternativeLanguageKeys'] = NULL;
$arguments62['key'] = 'login';
$arguments60['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
$arguments60['name'] = 'submit';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output0 .= '
        </div>

        <div class="felogin-hidden">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['aria'] = NULL;
$arguments64['name'] = NULL;
$arguments64['value'] = NULL;
$arguments64['property'] = NULL;
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['name'] = 'logintype';
$arguments64['value'] = 'login';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['aria'] = NULL;
$arguments66['name'] = NULL;
$arguments66['value'] = NULL;
$arguments66['property'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['name'] = 'pid';
$array68 = array (
);$arguments66['value'] = $renderingContext->getVariableProvider()->getByPath('storagePid', $array68);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['aria'] = NULL;
$arguments75['name'] = NULL;
$arguments75['value'] = NULL;
$arguments75['property'] = NULL;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['name'] = 'redirect_url';
$array77 = array (
);$arguments75['value'] = $renderingContext->getVariableProvider()->getByPath('redirectURL', $array77);

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
            ';
return $output74;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('redirectURL', $array72);
$array71['1'] = '!=\'\'';

$expression73 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = $renderChildrenClosure70;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
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
$arguments84['class'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['name'] = 'referer';
$array86 = array (
);$arguments84['value'] = $renderingContext->getVariableProvider()->getByPath('referer', $array86);

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
            ';
return $output83;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['0'] = $renderingContext->getVariableProvider()->getByPath('referer', $array81);
$array80['1'] = '!=\'\'';

$expression82 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = $renderChildrenClosure79;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['aria'] = NULL;
$arguments93['name'] = NULL;
$arguments93['value'] = NULL;
$arguments93['property'] = NULL;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$arguments93['name'] = 'redirectReferrer';
$arguments93['value'] = 'off';

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
            ';
return $output92;
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('redirectReferrer', $array90);
$array89['1'] = '!=\'\'';

$expression91 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments87['__thenClosure'] = $renderChildrenClosure88;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['additionalAttributes'] = NULL;
$arguments101['data'] = NULL;
$arguments101['aria'] = NULL;
$arguments101['name'] = NULL;
$arguments101['value'] = NULL;
$arguments101['property'] = NULL;
$arguments101['class'] = NULL;
$arguments101['dir'] = NULL;
$arguments101['id'] = NULL;
$arguments101['lang'] = NULL;
$arguments101['style'] = NULL;
$arguments101['title'] = NULL;
$arguments101['accesskey'] = NULL;
$arguments101['tabindex'] = NULL;
$arguments101['onclick'] = NULL;
$arguments101['name'] = 'noredirect';
$arguments101['value'] = 1;

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
            ';
return $output100;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('noRedirect', $array98);
$array97['1'] = '!=\'\'';

$expression99 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = $renderChildrenClosure96;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output0 .= '

            ';
$array103 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraHidden', $array103)]);

$output0 .= '
        </div>
    </fieldset>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output104 = '';

$output104 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['queueIdentifier'] = NULL;
$arguments105['as'] = NULL;

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['section'] = NULL;
$arguments113['partial'] = NULL;
$arguments113['delegate'] = NULL;
$arguments113['renderable'] = NULL;
$arguments113['arguments'] = array (
);
$arguments113['optional'] = false;
$arguments113['default'] = NULL;
$arguments113['contentAs'] = NULL;
$arguments113['debug'] = true;
$arguments113['partial'] = 'CookieWarning';

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
';
return $output112;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('cookieWarning', $array110);

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments107['__thenClosure'] = $renderChildrenClosure108;

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output104 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
    <h3>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['section'] = NULL;
$arguments121['partial'] = NULL;
$arguments121['delegate'] = NULL;
$arguments121['renderable'] = NULL;
$arguments121['arguments'] = array (
);
$arguments121['optional'] = false;
$arguments121['default'] = NULL;
$arguments121['contentAs'] = NULL;
$arguments121['debug'] = true;
$arguments121['partial'] = 'RenderLabelOrMessage';
// Rendering Array
$array123 = array();
$output124 = '';
$array125 = array (
);
$output124 .= $renderingContext->getVariableProvider()->getByPath('messageKey', $array125);

$output124 .= '_header';
$array123['key'] = $output124;
$arguments121['arguments'] = $array123;

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
    </h3>
    <p>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['section'] = NULL;
$arguments126['partial'] = NULL;
$arguments126['delegate'] = NULL;
$arguments126['renderable'] = NULL;
$arguments126['arguments'] = array (
);
$arguments126['optional'] = false;
$arguments126['default'] = NULL;
$arguments126['contentAs'] = NULL;
$arguments126['debug'] = true;
$arguments126['partial'] = 'RenderLabelOrMessage';
// Rendering Array
$array128 = array();
$output129 = '';
$array130 = array (
);
$output129 .= $renderingContext->getVariableProvider()->getByPath('messageKey', $array130);

$output129 .= '_message';
$array128['key'] = $output129;
$arguments126['arguments'] = $array128;

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output120 .= '
    </p>
';
return $output120;
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('messageKey', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$arguments115['__thenClosure'] = $renderChildrenClosure116;

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output104 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['section'] = NULL;
$arguments159['partial'] = NULL;
$arguments159['delegate'] = NULL;
$arguments159['renderable'] = NULL;
$arguments159['arguments'] = array (
);
$arguments159['optional'] = false;
$arguments159['default'] = NULL;
$arguments159['contentAs'] = NULL;
$arguments159['debug'] = true;
$arguments159['section'] = 'content';
$arguments159['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
        ';
return $output158;
};
$arguments155 = array();
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['aria'] = NULL;
$arguments155['action'] = NULL;
$arguments155['arguments'] = array (
);
$arguments155['controller'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['pluginName'] = NULL;
$arguments155['pageUid'] = NULL;
$arguments155['object'] = NULL;
$arguments155['pageType'] = 0;
$arguments155['noCache'] = false;
$arguments155['noCacheHash'] = NULL;
$arguments155['section'] = '';
$arguments155['format'] = '';
$arguments155['additionalParams'] = array (
);
$arguments155['absolute'] = false;
$arguments155['addQueryString'] = false;
$arguments155['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments155['addQueryStringMethod'] = 'GET';
$arguments155['fieldNamePrefix'] = NULL;
$arguments155['actionUri'] = NULL;
$arguments155['objectName'] = NULL;
$arguments155['hiddenFieldClassName'] = NULL;
$arguments155['enctype'] = NULL;
$arguments155['method'] = NULL;
$arguments155['name'] = NULL;
$arguments155['onreset'] = NULL;
$arguments155['onsubmit'] = NULL;
$arguments155['target'] = NULL;
$arguments155['novalidate'] = NULL;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$arguments155['target'] = '_top';
$arguments155['fieldNamePrefix'] = '';
$arguments155['action'] = 'login';
$array157 = array (
);$arguments155['onsubmit'] = $renderingContext->getVariableProvider()->getByPath('onSubmit', $array157);

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '
    ';
return $output154;
};
$arguments152 = array();

$output151 .= '';

$output151 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['section'] = NULL;
$arguments168['partial'] = NULL;
$arguments168['delegate'] = NULL;
$arguments168['renderable'] = NULL;
$arguments168['arguments'] = array (
);
$arguments168['optional'] = false;
$arguments168['default'] = NULL;
$arguments168['contentAs'] = NULL;
$arguments168['debug'] = true;
$arguments168['section'] = 'content';
$arguments168['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
        ';
return $output167;
};
$arguments165 = array();
$arguments165['additionalAttributes'] = NULL;
$arguments165['data'] = NULL;
$arguments165['aria'] = NULL;
$arguments165['action'] = NULL;
$arguments165['arguments'] = array (
);
$arguments165['controller'] = NULL;
$arguments165['extensionName'] = NULL;
$arguments165['pluginName'] = NULL;
$arguments165['pageUid'] = NULL;
$arguments165['object'] = NULL;
$arguments165['pageType'] = 0;
$arguments165['noCache'] = false;
$arguments165['noCacheHash'] = NULL;
$arguments165['section'] = '';
$arguments165['format'] = '';
$arguments165['additionalParams'] = array (
);
$arguments165['absolute'] = false;
$arguments165['addQueryString'] = false;
$arguments165['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments165['addQueryStringMethod'] = 'GET';
$arguments165['fieldNamePrefix'] = NULL;
$arguments165['actionUri'] = NULL;
$arguments165['objectName'] = NULL;
$arguments165['hiddenFieldClassName'] = NULL;
$arguments165['enctype'] = NULL;
$arguments165['method'] = NULL;
$arguments165['name'] = NULL;
$arguments165['onreset'] = NULL;
$arguments165['onsubmit'] = NULL;
$arguments165['target'] = NULL;
$arguments165['novalidate'] = NULL;
$arguments165['class'] = NULL;
$arguments165['dir'] = NULL;
$arguments165['id'] = NULL;
$arguments165['lang'] = NULL;
$arguments165['style'] = NULL;
$arguments165['title'] = NULL;
$arguments165['accesskey'] = NULL;
$arguments165['tabindex'] = NULL;
$arguments165['onclick'] = NULL;
$arguments165['target'] = '_top';
$arguments165['fieldNamePrefix'] = '';
$arguments165['action'] = 'login';

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= '
    ';
return $output164;
};
$arguments162 = array();
$arguments162['if'] = NULL;

$output151 .= '';

$output151 .= '
';
return $output151;
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array149 = array (
);$array148['0'] = $renderingContext->getVariableProvider()->getByPath('onSubmit', $array149);

$expression150 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['section'] = NULL;
$arguments138['partial'] = NULL;
$arguments138['delegate'] = NULL;
$arguments138['renderable'] = NULL;
$arguments138['arguments'] = array (
);
$arguments138['optional'] = false;
$arguments138['default'] = NULL;
$arguments138['contentAs'] = NULL;
$arguments138['debug'] = true;
$arguments138['section'] = 'content';
$arguments138['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
        ';
return $output137;
};
$arguments134 = array();
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['aria'] = NULL;
$arguments134['action'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['controller'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['pluginName'] = NULL;
$arguments134['pageUid'] = NULL;
$arguments134['object'] = NULL;
$arguments134['pageType'] = 0;
$arguments134['noCache'] = false;
$arguments134['noCacheHash'] = NULL;
$arguments134['section'] = '';
$arguments134['format'] = '';
$arguments134['additionalParams'] = array (
);
$arguments134['absolute'] = false;
$arguments134['addQueryString'] = false;
$arguments134['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments134['addQueryStringMethod'] = 'GET';
$arguments134['fieldNamePrefix'] = NULL;
$arguments134['actionUri'] = NULL;
$arguments134['objectName'] = NULL;
$arguments134['hiddenFieldClassName'] = NULL;
$arguments134['enctype'] = NULL;
$arguments134['method'] = NULL;
$arguments134['name'] = NULL;
$arguments134['onreset'] = NULL;
$arguments134['onsubmit'] = NULL;
$arguments134['target'] = NULL;
$arguments134['novalidate'] = NULL;
$arguments134['class'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$arguments134['target'] = '_top';
$arguments134['fieldNamePrefix'] = '';
$arguments134['action'] = 'login';
$array136 = array (
);$arguments134['onsubmit'] = $renderingContext->getVariableProvider()->getByPath('onSubmit', $array136);

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
    ';
return $output133;
};
$arguments131['__elseClosures'][] = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['section'] = NULL;
$arguments145['partial'] = NULL;
$arguments145['delegate'] = NULL;
$arguments145['renderable'] = NULL;
$arguments145['arguments'] = array (
);
$arguments145['optional'] = false;
$arguments145['default'] = NULL;
$arguments145['contentAs'] = NULL;
$arguments145['debug'] = true;
$arguments145['section'] = 'content';
$arguments145['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output144 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
        ';
return $output144;
};
$arguments142 = array();
$arguments142['additionalAttributes'] = NULL;
$arguments142['data'] = NULL;
$arguments142['aria'] = NULL;
$arguments142['action'] = NULL;
$arguments142['arguments'] = array (
);
$arguments142['controller'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['pluginName'] = NULL;
$arguments142['pageUid'] = NULL;
$arguments142['object'] = NULL;
$arguments142['pageType'] = 0;
$arguments142['noCache'] = false;
$arguments142['noCacheHash'] = NULL;
$arguments142['section'] = '';
$arguments142['format'] = '';
$arguments142['additionalParams'] = array (
);
$arguments142['absolute'] = false;
$arguments142['addQueryString'] = false;
$arguments142['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments142['addQueryStringMethod'] = 'GET';
$arguments142['fieldNamePrefix'] = NULL;
$arguments142['actionUri'] = NULL;
$arguments142['objectName'] = NULL;
$arguments142['hiddenFieldClassName'] = NULL;
$arguments142['enctype'] = NULL;
$arguments142['method'] = NULL;
$arguments142['name'] = NULL;
$arguments142['onreset'] = NULL;
$arguments142['onsubmit'] = NULL;
$arguments142['target'] = NULL;
$arguments142['novalidate'] = NULL;
$arguments142['class'] = NULL;
$arguments142['dir'] = NULL;
$arguments142['id'] = NULL;
$arguments142['lang'] = NULL;
$arguments142['style'] = NULL;
$arguments142['title'] = NULL;
$arguments142['accesskey'] = NULL;
$arguments142['tabindex'] = NULL;
$arguments142['onclick'] = NULL;
$arguments142['target'] = '_top';
$arguments142['fieldNamePrefix'] = '';
$arguments142['action'] = 'login';

$output141 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
    ';
return $output141;
};

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output104 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['section'] = NULL;
$arguments180['partial'] = NULL;
$arguments180['delegate'] = NULL;
$arguments180['renderable'] = NULL;
$arguments180['arguments'] = array (
);
$arguments180['optional'] = false;
$arguments180['default'] = NULL;
$arguments180['contentAs'] = NULL;
$arguments180['debug'] = true;
$arguments180['partial'] = 'RenderLabelOrMessage';
// Rendering Array
$array182 = array();
$array182['key'] = 'forgot_header';
$arguments180['arguments'] = $array182;

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
    ';
return $output179;
};
$arguments177 = array();
$arguments177['additionalAttributes'] = NULL;
$arguments177['data'] = NULL;
$arguments177['aria'] = NULL;
$arguments177['class'] = NULL;
$arguments177['dir'] = NULL;
$arguments177['id'] = NULL;
$arguments177['lang'] = NULL;
$arguments177['style'] = NULL;
$arguments177['title'] = NULL;
$arguments177['accesskey'] = NULL;
$arguments177['tabindex'] = NULL;
$arguments177['onclick'] = NULL;
$arguments177['name'] = NULL;
$arguments177['rel'] = NULL;
$arguments177['rev'] = NULL;
$arguments177['target'] = NULL;
$arguments177['action'] = NULL;
$arguments177['controller'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['pluginName'] = NULL;
$arguments177['pageUid'] = NULL;
$arguments177['pageType'] = NULL;
$arguments177['noCache'] = NULL;
$arguments177['noCacheHash'] = NULL;
$arguments177['section'] = NULL;
$arguments177['format'] = NULL;
$arguments177['linkAccessRestrictedPages'] = NULL;
$arguments177['additionalParams'] = NULL;
$arguments177['absolute'] = NULL;
$arguments177['addQueryString'] = NULL;
$arguments177['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments177['addQueryStringMethod'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['action'] = 'recovery';
$arguments177['controller'] = 'PasswordRecovery';

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '
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
);$array173['0'] = $renderingContext->getVariableProvider()->getByPath('settings.showForgotPassword', $array174);

$expression175 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments171['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)
					),
					$renderingContext
				);
$arguments171['__thenClosure'] = $renderChildrenClosure172;

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output104 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
    <fieldset>
        <legend>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['languageKey'] = NULL;
$arguments186['alternativeLanguageKeys'] = NULL;
$arguments186['key'] = 'login';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext)]);

$output185 .= '
        </legend>
        <div>
            <label>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['key'] = NULL;
$arguments188['id'] = NULL;
$arguments188['default'] = NULL;
$arguments188['arguments'] = NULL;
$arguments188['extensionName'] = NULL;
$arguments188['languageKey'] = NULL;
$arguments188['alternativeLanguageKeys'] = NULL;
$arguments188['key'] = 'username';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext)]);

$output185 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['additionalAttributes'] = NULL;
$arguments190['data'] = NULL;
$arguments190['aria'] = NULL;
$arguments190['name'] = NULL;
$arguments190['value'] = NULL;
$arguments190['property'] = NULL;
$arguments190['autofocus'] = NULL;
$arguments190['disabled'] = NULL;
$arguments190['maxlength'] = NULL;
$arguments190['readonly'] = NULL;
$arguments190['size'] = NULL;
$arguments190['placeholder'] = NULL;
$arguments190['pattern'] = NULL;
$arguments190['errorClass'] = 'f3-form-error';
$arguments190['class'] = NULL;
$arguments190['dir'] = NULL;
$arguments190['id'] = NULL;
$arguments190['lang'] = NULL;
$arguments190['style'] = NULL;
$arguments190['title'] = NULL;
$arguments190['accesskey'] = NULL;
$arguments190['tabindex'] = NULL;
$arguments190['onclick'] = NULL;
$arguments190['required'] = false;
$arguments190['type'] = 'text';
$arguments190['name'] = 'user';
// Rendering Boolean node
// Rendering Array
$array192 = array();
$array192['0'] = 'true';

$expression193 = function($context) {return TRUE;};
$arguments190['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);
// Rendering Array
$array194 = array();
$array194['autocomplete'] = 'username';
$arguments190['additionalAttributes'] = $array194;

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output185 .= '
            </label>
        </div>
        <div>
            <label>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['key'] = NULL;
$arguments195['id'] = NULL;
$arguments195['default'] = NULL;
$arguments195['arguments'] = NULL;
$arguments195['extensionName'] = NULL;
$arguments195['languageKey'] = NULL;
$arguments195['alternativeLanguageKeys'] = NULL;
$arguments195['key'] = 'password';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext)]);

$output185 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['additionalAttributes'] = NULL;
$arguments197['data'] = NULL;
$arguments197['aria'] = NULL;
$arguments197['name'] = NULL;
$arguments197['value'] = NULL;
$arguments197['property'] = NULL;
$arguments197['disabled'] = NULL;
$arguments197['maxlength'] = NULL;
$arguments197['placeholder'] = NULL;
$arguments197['readonly'] = NULL;
$arguments197['size'] = NULL;
$arguments197['errorClass'] = 'f3-form-error';
$arguments197['class'] = NULL;
$arguments197['dir'] = NULL;
$arguments197['id'] = NULL;
$arguments197['lang'] = NULL;
$arguments197['style'] = NULL;
$arguments197['title'] = NULL;
$arguments197['accesskey'] = NULL;
$arguments197['tabindex'] = NULL;
$arguments197['onclick'] = NULL;
$arguments197['name'] = 'pass';
// Rendering Array
$array199 = array();
$array199['rsa-encryption'] = '';
$arguments197['data'] = $array199;
// Rendering Array
$array200 = array();
$array200['required'] = 'required';
$array200['autocomplete'] = 'current-password';
$arguments197['additionalAttributes'] = $array200;

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output185 .= '
            </label>
        </div>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
            <div>
                <label>
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
$arguments207['id'] = 'permalogin';

$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output206 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['additionalAttributes'] = NULL;
$arguments231['data'] = NULL;
$arguments231['aria'] = NULL;
$arguments231['name'] = NULL;
$arguments231['value'] = NULL;
$arguments231['property'] = NULL;
$arguments231['class'] = NULL;
$arguments231['dir'] = NULL;
$arguments231['id'] = NULL;
$arguments231['lang'] = NULL;
$arguments231['style'] = NULL;
$arguments231['title'] = NULL;
$arguments231['accesskey'] = NULL;
$arguments231['tabindex'] = NULL;
$arguments231['onclick'] = NULL;
$arguments231['name'] = 'permalogin';
$arguments231['value'] = 0;
// Rendering Array
$array233 = array();
$array233['disabled'] = 'disabled';
$arguments231['additionalAttributes'] = $array233;

$output230 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['additionalAttributes'] = NULL;
$arguments234['data'] = NULL;
$arguments234['aria'] = NULL;
$arguments234['name'] = NULL;
$arguments234['value'] = NULL;
$arguments234['property'] = NULL;
$arguments234['disabled'] = NULL;
$arguments234['errorClass'] = 'f3-form-error';
$arguments234['class'] = NULL;
$arguments234['dir'] = NULL;
$arguments234['id'] = NULL;
$arguments234['lang'] = NULL;
$arguments234['style'] = NULL;
$arguments234['title'] = NULL;
$arguments234['accesskey'] = NULL;
$arguments234['tabindex'] = NULL;
$arguments234['onclick'] = NULL;
$arguments234['checked'] = NULL;
$arguments234['multiple'] = false;
$arguments234['name'] = 'permalogin';
$arguments234['id'] = 'permalogin';
$arguments234['value'] = 1;
// Rendering Boolean node
// Rendering Array
$array236 = array();
$array236['0'] = 'checked';

$expression237 = function($context) {return "checked";};
$arguments234['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array236)
					),
					$renderingContext
				);

$output230 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output230 .= '
                        ';
return $output230;
};
$arguments228 = array();

$output227 .= '';

$output227 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['additionalAttributes'] = NULL;
$arguments241['data'] = NULL;
$arguments241['aria'] = NULL;
$arguments241['name'] = NULL;
$arguments241['value'] = NULL;
$arguments241['property'] = NULL;
$arguments241['class'] = NULL;
$arguments241['dir'] = NULL;
$arguments241['id'] = NULL;
$arguments241['lang'] = NULL;
$arguments241['style'] = NULL;
$arguments241['title'] = NULL;
$arguments241['accesskey'] = NULL;
$arguments241['tabindex'] = NULL;
$arguments241['onclick'] = NULL;
$arguments241['name'] = 'permalogin';
$arguments241['value'] = 0;

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['additionalAttributes'] = NULL;
$arguments243['data'] = NULL;
$arguments243['aria'] = NULL;
$arguments243['name'] = NULL;
$arguments243['value'] = NULL;
$arguments243['property'] = NULL;
$arguments243['disabled'] = NULL;
$arguments243['errorClass'] = 'f3-form-error';
$arguments243['class'] = NULL;
$arguments243['dir'] = NULL;
$arguments243['id'] = NULL;
$arguments243['lang'] = NULL;
$arguments243['style'] = NULL;
$arguments243['title'] = NULL;
$arguments243['accesskey'] = NULL;
$arguments243['tabindex'] = NULL;
$arguments243['onclick'] = NULL;
$arguments243['checked'] = NULL;
$arguments243['multiple'] = false;
$arguments243['name'] = 'permalogin';
$arguments243['id'] = 'permalogin';
$arguments243['value'] = 1;

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output240 .= '
                        ';
return $output240;
};
$arguments238 = array();
$arguments238['if'] = NULL;

$output227 .= '';

$output227 .= '
                    ';
return $output227;
};
$arguments209 = array();
$arguments209['then'] = NULL;
$arguments209['else'] = NULL;
$arguments209['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array224 = array();
$array225 = array (
);$array224['0'] = $renderingContext->getVariableProvider()->getByPath('permaloginStatus', $array225);
$array224['1'] = ' == 1';

$expression226 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments209['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression226(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array224)
					),
					$renderingContext
				);
$arguments209['__thenClosure'] = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['additionalAttributes'] = NULL;
$arguments212['data'] = NULL;
$arguments212['aria'] = NULL;
$arguments212['name'] = NULL;
$arguments212['value'] = NULL;
$arguments212['property'] = NULL;
$arguments212['class'] = NULL;
$arguments212['dir'] = NULL;
$arguments212['id'] = NULL;
$arguments212['lang'] = NULL;
$arguments212['style'] = NULL;
$arguments212['title'] = NULL;
$arguments212['accesskey'] = NULL;
$arguments212['tabindex'] = NULL;
$arguments212['onclick'] = NULL;
$arguments212['name'] = 'permalogin';
$arguments212['value'] = 0;
// Rendering Array
$array214 = array();
$array214['disabled'] = 'disabled';
$arguments212['additionalAttributes'] = $array214;

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['additionalAttributes'] = NULL;
$arguments215['data'] = NULL;
$arguments215['aria'] = NULL;
$arguments215['name'] = NULL;
$arguments215['value'] = NULL;
$arguments215['property'] = NULL;
$arguments215['disabled'] = NULL;
$arguments215['errorClass'] = 'f3-form-error';
$arguments215['class'] = NULL;
$arguments215['dir'] = NULL;
$arguments215['id'] = NULL;
$arguments215['lang'] = NULL;
$arguments215['style'] = NULL;
$arguments215['title'] = NULL;
$arguments215['accesskey'] = NULL;
$arguments215['tabindex'] = NULL;
$arguments215['onclick'] = NULL;
$arguments215['checked'] = NULL;
$arguments215['multiple'] = false;
$arguments215['name'] = 'permalogin';
$arguments215['id'] = 'permalogin';
$arguments215['value'] = 1;
// Rendering Boolean node
// Rendering Array
$array217 = array();
$array217['0'] = 'checked';

$expression218 = function($context) {return "checked";};
$arguments215['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array217)
					),
					$renderingContext
				);

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output211 .= '
                        ';
return $output211;
};
$arguments209['__elseClosures'][] = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
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
$arguments220['class'] = NULL;
$arguments220['dir'] = NULL;
$arguments220['id'] = NULL;
$arguments220['lang'] = NULL;
$arguments220['style'] = NULL;
$arguments220['title'] = NULL;
$arguments220['accesskey'] = NULL;
$arguments220['tabindex'] = NULL;
$arguments220['onclick'] = NULL;
$arguments220['name'] = 'permalogin';
$arguments220['value'] = 0;

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['additionalAttributes'] = NULL;
$arguments222['data'] = NULL;
$arguments222['aria'] = NULL;
$arguments222['name'] = NULL;
$arguments222['value'] = NULL;
$arguments222['property'] = NULL;
$arguments222['disabled'] = NULL;
$arguments222['errorClass'] = 'f3-form-error';
$arguments222['class'] = NULL;
$arguments222['dir'] = NULL;
$arguments222['id'] = NULL;
$arguments222['lang'] = NULL;
$arguments222['style'] = NULL;
$arguments222['title'] = NULL;
$arguments222['accesskey'] = NULL;
$arguments222['tabindex'] = NULL;
$arguments222['onclick'] = NULL;
$arguments222['checked'] = NULL;
$arguments222['multiple'] = false;
$arguments222['name'] = 'permalogin';
$arguments222['id'] = 'permalogin';
$arguments222['value'] = 1;

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output219 .= '
                        ';
return $output219;
};

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output206 .= '
                </label>
            </div>
        ';
return $output206;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('permaloginStatus', $array204);
$array203['1'] = ' > -1';

$expression205 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > -1);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = $renderChildrenClosure202;

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output185 .= '

        <div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['additionalAttributes'] = NULL;
$arguments245['data'] = NULL;
$arguments245['aria'] = NULL;
$arguments245['name'] = NULL;
$arguments245['value'] = NULL;
$arguments245['property'] = NULL;
$arguments245['disabled'] = NULL;
$arguments245['class'] = NULL;
$arguments245['dir'] = NULL;
$arguments245['id'] = NULL;
$arguments245['lang'] = NULL;
$arguments245['style'] = NULL;
$arguments245['title'] = NULL;
$arguments245['accesskey'] = NULL;
$arguments245['tabindex'] = NULL;
$arguments245['onclick'] = NULL;
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
$arguments247['key'] = 'login';
$arguments245['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);
$arguments245['name'] = 'submit';

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output185 .= '
        </div>

        <div class="felogin-hidden">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
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
$arguments249['class'] = NULL;
$arguments249['dir'] = NULL;
$arguments249['id'] = NULL;
$arguments249['lang'] = NULL;
$arguments249['style'] = NULL;
$arguments249['title'] = NULL;
$arguments249['accesskey'] = NULL;
$arguments249['tabindex'] = NULL;
$arguments249['onclick'] = NULL;
$arguments249['name'] = 'logintype';
$arguments249['value'] = 'login';

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output185 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['additionalAttributes'] = NULL;
$arguments251['data'] = NULL;
$arguments251['aria'] = NULL;
$arguments251['name'] = NULL;
$arguments251['value'] = NULL;
$arguments251['property'] = NULL;
$arguments251['class'] = NULL;
$arguments251['dir'] = NULL;
$arguments251['id'] = NULL;
$arguments251['lang'] = NULL;
$arguments251['style'] = NULL;
$arguments251['title'] = NULL;
$arguments251['accesskey'] = NULL;
$arguments251['tabindex'] = NULL;
$arguments251['onclick'] = NULL;
$arguments251['name'] = 'pid';
$array253 = array (
);$arguments251['value'] = $renderingContext->getVariableProvider()->getByPath('storagePid', $array253);

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output185 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['additionalAttributes'] = NULL;
$arguments260['data'] = NULL;
$arguments260['aria'] = NULL;
$arguments260['name'] = NULL;
$arguments260['value'] = NULL;
$arguments260['property'] = NULL;
$arguments260['class'] = NULL;
$arguments260['dir'] = NULL;
$arguments260['id'] = NULL;
$arguments260['lang'] = NULL;
$arguments260['style'] = NULL;
$arguments260['title'] = NULL;
$arguments260['accesskey'] = NULL;
$arguments260['tabindex'] = NULL;
$arguments260['onclick'] = NULL;
$arguments260['name'] = 'redirect_url';
$array262 = array (
);$arguments260['value'] = $renderingContext->getVariableProvider()->getByPath('redirectURL', $array262);

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
            ';
return $output259;
};
$arguments254 = array();
$arguments254['then'] = NULL;
$arguments254['else'] = NULL;
$arguments254['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array256 = array();
$array257 = array (
);$array256['0'] = $renderingContext->getVariableProvider()->getByPath('redirectURL', $array257);
$array256['1'] = '!=\'\'';

$expression258 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments254['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression258(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array256)
					),
					$renderingContext
				);
$arguments254['__thenClosure'] = $renderChildrenClosure255;

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output185 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['additionalAttributes'] = NULL;
$arguments269['data'] = NULL;
$arguments269['aria'] = NULL;
$arguments269['name'] = NULL;
$arguments269['value'] = NULL;
$arguments269['property'] = NULL;
$arguments269['class'] = NULL;
$arguments269['dir'] = NULL;
$arguments269['id'] = NULL;
$arguments269['lang'] = NULL;
$arguments269['style'] = NULL;
$arguments269['title'] = NULL;
$arguments269['accesskey'] = NULL;
$arguments269['tabindex'] = NULL;
$arguments269['onclick'] = NULL;
$arguments269['name'] = 'referer';
$array271 = array (
);$arguments269['value'] = $renderingContext->getVariableProvider()->getByPath('referer', $array271);

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '
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
);$array265['0'] = $renderingContext->getVariableProvider()->getByPath('referer', $array266);
$array265['1'] = '!=\'\'';

$expression267 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array265)
					),
					$renderingContext
				);
$arguments263['__thenClosure'] = $renderChildrenClosure264;

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output185 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['additionalAttributes'] = NULL;
$arguments278['data'] = NULL;
$arguments278['aria'] = NULL;
$arguments278['name'] = NULL;
$arguments278['value'] = NULL;
$arguments278['property'] = NULL;
$arguments278['class'] = NULL;
$arguments278['dir'] = NULL;
$arguments278['id'] = NULL;
$arguments278['lang'] = NULL;
$arguments278['style'] = NULL;
$arguments278['title'] = NULL;
$arguments278['accesskey'] = NULL;
$arguments278['tabindex'] = NULL;
$arguments278['onclick'] = NULL;
$arguments278['name'] = 'redirectReferrer';
$arguments278['value'] = 'off';

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '
            ';
return $output277;
};
$arguments272 = array();
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$arguments272['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['0'] = $renderingContext->getVariableProvider()->getByPath('redirectReferrer', $array275);
$array274['1'] = '!=\'\'';

$expression276 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments272['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$arguments272['__thenClosure'] = $renderChildrenClosure273;

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output185 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['additionalAttributes'] = NULL;
$arguments286['data'] = NULL;
$arguments286['aria'] = NULL;
$arguments286['name'] = NULL;
$arguments286['value'] = NULL;
$arguments286['property'] = NULL;
$arguments286['class'] = NULL;
$arguments286['dir'] = NULL;
$arguments286['id'] = NULL;
$arguments286['lang'] = NULL;
$arguments286['style'] = NULL;
$arguments286['title'] = NULL;
$arguments286['accesskey'] = NULL;
$arguments286['tabindex'] = NULL;
$arguments286['onclick'] = NULL;
$arguments286['name'] = 'noredirect';
$arguments286['value'] = 1;

$output285 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output285 .= '
            ';
return $output285;
};
$arguments280 = array();
$arguments280['then'] = NULL;
$arguments280['else'] = NULL;
$arguments280['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array282 = array();
$array283 = array (
);$array282['0'] = $renderingContext->getVariableProvider()->getByPath('noRedirect', $array283);
$array282['1'] = '!=\'\'';

$expression284 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments280['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression284(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array282)
					),
					$renderingContext
				);
$arguments280['__thenClosure'] = $renderChildrenClosure281;

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output185 .= '

            ';
$array288 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraHidden', $array288)]);

$output185 .= '
        </div>
    </fieldset>
';
return $output185;
};
$arguments183 = array();
$arguments183['name'] = NULL;
$arguments183['name'] = 'content';

$output104 .= '';

$output104 .= '

';

return $output104;
}


}
#