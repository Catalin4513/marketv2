<?php

class partial_Header_Header_b3d8cd69f60aaf3ba9be877ee7434c9050981d68 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output6 = '';

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
            <h1 class="';
$array80 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array80)]);

$output79 .= ' ';
$array81 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array81)]);

$output79 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '<span>';
$array86 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array86)]);

$output85 .= '</span>';
return $output85;
};
$arguments82 = array();
$arguments82['parameter'] = NULL;
$arguments82['target'] = '';
$arguments82['class'] = '';
$arguments82['title'] = '';
$arguments82['language'] = NULL;
$arguments82['additionalParams'] = '';
$arguments82['additionalAttributes'] = array (
);
$arguments82['useCacheHash'] = NULL;
$arguments82['addQueryString'] = false;
$arguments82['addQueryStringMethod'] = 'GET';
$arguments82['addQueryStringExclude'] = '';
$arguments82['absolute'] = false;
$arguments82['parts-as'] = 'typoLinkParts';
$array84 = array (
);$arguments82['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array84);

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output79 .= '
            </h1>
        ';
return $output79;
};
$arguments77 = array();
$arguments77['value'] = NULL;
$arguments77['value'] = 1;

$output76 .= '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
            <h2 class="';
$array90 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array90)]);

$output89 .= ' ';
$array91 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array91)]);

$output89 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '<span>';
$array96 = array (
);
$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array96)]);

$output95 .= '</span>';
return $output95;
};
$arguments92 = array();
$arguments92['parameter'] = NULL;
$arguments92['target'] = '';
$arguments92['class'] = '';
$arguments92['title'] = '';
$arguments92['language'] = NULL;
$arguments92['additionalParams'] = '';
$arguments92['additionalAttributes'] = array (
);
$arguments92['useCacheHash'] = NULL;
$arguments92['addQueryString'] = false;
$arguments92['addQueryStringMethod'] = 'GET';
$arguments92['addQueryStringExclude'] = '';
$arguments92['absolute'] = false;
$arguments92['parts-as'] = 'typoLinkParts';
$array94 = array (
);$arguments92['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array94);

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output89 .= '
            </h2>
        ';
return $output89;
};
$arguments87 = array();
$arguments87['value'] = NULL;
$arguments87['value'] = 2;

$output76 .= '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
            <h3 class="';
$array100 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array100)]);

$output99 .= ' ';
$array101 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array101)]);

$output99 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '<span>';
$array106 = array (
);
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array106)]);

$output105 .= '</span>';
return $output105;
};
$arguments102 = array();
$arguments102['parameter'] = NULL;
$arguments102['target'] = '';
$arguments102['class'] = '';
$arguments102['title'] = '';
$arguments102['language'] = NULL;
$arguments102['additionalParams'] = '';
$arguments102['additionalAttributes'] = array (
);
$arguments102['useCacheHash'] = NULL;
$arguments102['addQueryString'] = false;
$arguments102['addQueryStringMethod'] = 'GET';
$arguments102['addQueryStringExclude'] = '';
$arguments102['absolute'] = false;
$arguments102['parts-as'] = 'typoLinkParts';
$array104 = array (
);$arguments102['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array104);

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output99 .= '
            </h3>
        ';
return $output99;
};
$arguments97 = array();
$arguments97['value'] = NULL;
$arguments97['value'] = 3;

$output76 .= '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
            <h4 class="';
$array110 = array (
);
$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array110)]);

$output109 .= ' ';
$array111 = array (
);
$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array111)]);

$output109 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '<span>';
$array116 = array (
);
$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array116)]);

$output115 .= '</span>';
return $output115;
};
$arguments112 = array();
$arguments112['parameter'] = NULL;
$arguments112['target'] = '';
$arguments112['class'] = '';
$arguments112['title'] = '';
$arguments112['language'] = NULL;
$arguments112['additionalParams'] = '';
$arguments112['additionalAttributes'] = array (
);
$arguments112['useCacheHash'] = NULL;
$arguments112['addQueryString'] = false;
$arguments112['addQueryStringMethod'] = 'GET';
$arguments112['addQueryStringExclude'] = '';
$arguments112['absolute'] = false;
$arguments112['parts-as'] = 'typoLinkParts';
$array114 = array (
);$arguments112['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array114);

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output109 .= '
            </h4>
        ';
return $output109;
};
$arguments107 = array();
$arguments107['value'] = NULL;
$arguments107['value'] = 4;

$output76 .= '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
            <h5 class="';
$array120 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array120)]);

$output119 .= ' ';
$array121 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array121)]);

$output119 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '<span>';
$array126 = array (
);
$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array126)]);

$output125 .= '</span>';
return $output125;
};
$arguments122 = array();
$arguments122['parameter'] = NULL;
$arguments122['target'] = '';
$arguments122['class'] = '';
$arguments122['title'] = '';
$arguments122['language'] = NULL;
$arguments122['additionalParams'] = '';
$arguments122['additionalAttributes'] = array (
);
$arguments122['useCacheHash'] = NULL;
$arguments122['addQueryString'] = false;
$arguments122['addQueryStringMethod'] = 'GET';
$arguments122['addQueryStringExclude'] = '';
$arguments122['absolute'] = false;
$arguments122['parts-as'] = 'typoLinkParts';
$array124 = array (
);$arguments122['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array124);

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output119 .= '
            </h5>
        ';
return $output119;
};
$arguments117 = array();
$arguments117['value'] = NULL;
$arguments117['value'] = 5;

$output76 .= '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
            <h6 class="';
$array130 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array130)]);

$output129 .= ' ';
$array131 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array131)]);

$output129 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '<span>';
$array136 = array (
);
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array136)]);

$output135 .= '</span>';
return $output135;
};
$arguments132 = array();
$arguments132['parameter'] = NULL;
$arguments132['target'] = '';
$arguments132['class'] = '';
$arguments132['title'] = '';
$arguments132['language'] = NULL;
$arguments132['additionalParams'] = '';
$arguments132['additionalAttributes'] = array (
);
$arguments132['useCacheHash'] = NULL;
$arguments132['addQueryString'] = false;
$arguments132['addQueryStringMethod'] = 'GET';
$arguments132['addQueryStringExclude'] = '';
$arguments132['absolute'] = false;
$arguments132['parts-as'] = 'typoLinkParts';
$array134 = array (
);$arguments132['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array134);

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output129 .= '
            </h6>
        ';
return $output129;
};
$arguments127 = array();
$arguments127['value'] = NULL;
$arguments127['value'] = 6;

$output76 .= '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return ' -- do not show header -- ';
};
$arguments140 = array();

$output139 .= '';

$output139 .= '
        ';
return $output139;
};
$arguments137 = array();
$arguments137['value'] = NULL;
$arguments137['value'] = 100;

$output76 .= '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['section'] = NULL;
$arguments151['partial'] = NULL;
$arguments151['delegate'] = NULL;
$arguments151['renderable'] = NULL;
$arguments151['arguments'] = array (
);
$arguments151['optional'] = false;
$arguments151['default'] = NULL;
$arguments151['contentAs'] = NULL;
$arguments151['debug'] = true;
$arguments151['partial'] = 'Header/Header';
// Rendering Array
$array153 = array();
$array154 = array (
);$array153['header'] = $renderingContext->getVariableProvider()->getByPath('header', $array154);
$array155 = array (
);$array153['layout'] = $renderingContext->getVariableProvider()->getByPath('default', $array155);
$array156 = array (
);$array153['class'] = $renderingContext->getVariableProvider()->getByPath('class', $array156);
$array157 = array (
);$array153['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array157);
$array158 = array (
);$array153['link'] = $renderingContext->getVariableProvider()->getByPath('link', $array158);
$arguments151['arguments'] = $array153;

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
            ';
return $output150;
};
$arguments145 = array();
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$arguments145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array148);

$expression149 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression149(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
$arguments145['__thenClosure'] = $renderChildrenClosure146;

$output144 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
        ';
return $output144;
};
$arguments142 = array();

$output76 .= '';

$output76 .= '
    ';
return $output76;
};
$arguments7 = array();
$arguments7['expression'] = NULL;
$array75 = array (
);$arguments7['expression'] = $renderingContext->getVariableProvider()->getByPath('layout', $array75);

$output6 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 1;
}): return call_user_func(function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
            <h1 class="';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array10)]);

$output9 .= ' ';
$array11 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array11)]);

$output9 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '<span>';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array16)]);

$output15 .= '</span>';
return $output15;
};
$arguments12 = array();
$arguments12['parameter'] = NULL;
$arguments12['target'] = '';
$arguments12['class'] = '';
$arguments12['title'] = '';
$arguments12['language'] = NULL;
$arguments12['additionalParams'] = '';
$arguments12['additionalAttributes'] = array (
);
$arguments12['useCacheHash'] = NULL;
$arguments12['addQueryString'] = false;
$arguments12['addQueryStringMethod'] = 'GET';
$arguments12['addQueryStringExclude'] = '';
$arguments12['absolute'] = false;
$arguments12['parts-as'] = 'typoLinkParts';
$array14 = array (
);$arguments12['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array14);

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output9 .= '
            </h1>
        ';
return $output9;
});
case call_user_func(function() use ($renderingContext, $self) {

return 2;
}): return call_user_func(function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
            <h2 class="';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array18)]);

$output17 .= ' ';
$array19 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array19)]);

$output17 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '<span>';
$array24 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array24)]);

$output23 .= '</span>';
return $output23;
};
$arguments20 = array();
$arguments20['parameter'] = NULL;
$arguments20['target'] = '';
$arguments20['class'] = '';
$arguments20['title'] = '';
$arguments20['language'] = NULL;
$arguments20['additionalParams'] = '';
$arguments20['additionalAttributes'] = array (
);
$arguments20['useCacheHash'] = NULL;
$arguments20['addQueryString'] = false;
$arguments20['addQueryStringMethod'] = 'GET';
$arguments20['addQueryStringExclude'] = '';
$arguments20['absolute'] = false;
$arguments20['parts-as'] = 'typoLinkParts';
$array22 = array (
);$arguments20['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array22);

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '
            </h2>
        ';
return $output17;
});
case call_user_func(function() use ($renderingContext, $self) {

return 3;
}): return call_user_func(function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
            <h3 class="';
$array26 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array26)]);

$output25 .= ' ';
$array27 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array27)]);

$output25 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '<span>';
$array32 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array32)]);

$output31 .= '</span>';
return $output31;
};
$arguments28 = array();
$arguments28['parameter'] = NULL;
$arguments28['target'] = '';
$arguments28['class'] = '';
$arguments28['title'] = '';
$arguments28['language'] = NULL;
$arguments28['additionalParams'] = '';
$arguments28['additionalAttributes'] = array (
);
$arguments28['useCacheHash'] = NULL;
$arguments28['addQueryString'] = false;
$arguments28['addQueryStringMethod'] = 'GET';
$arguments28['addQueryStringExclude'] = '';
$arguments28['absolute'] = false;
$arguments28['parts-as'] = 'typoLinkParts';
$array30 = array (
);$arguments28['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array30);

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output25 .= '
            </h3>
        ';
return $output25;
});
case call_user_func(function() use ($renderingContext, $self) {

return 4;
}): return call_user_func(function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            <h4 class="';
$array34 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array34)]);

$output33 .= ' ';
$array35 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array35)]);

$output33 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '<span>';
$array40 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array40)]);

$output39 .= '</span>';
return $output39;
};
$arguments36 = array();
$arguments36['parameter'] = NULL;
$arguments36['target'] = '';
$arguments36['class'] = '';
$arguments36['title'] = '';
$arguments36['language'] = NULL;
$arguments36['additionalParams'] = '';
$arguments36['additionalAttributes'] = array (
);
$arguments36['useCacheHash'] = NULL;
$arguments36['addQueryString'] = false;
$arguments36['addQueryStringMethod'] = 'GET';
$arguments36['addQueryStringExclude'] = '';
$arguments36['absolute'] = false;
$arguments36['parts-as'] = 'typoLinkParts';
$array38 = array (
);$arguments36['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array38);

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output33 .= '
            </h4>
        ';
return $output33;
});
case call_user_func(function() use ($renderingContext, $self) {

return 5;
}): return call_user_func(function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
            <h5 class="';
$array42 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array42)]);

$output41 .= ' ';
$array43 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array43)]);

$output41 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '<span>';
$array48 = array (
);
$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array48)]);

$output47 .= '</span>';
return $output47;
};
$arguments44 = array();
$arguments44['parameter'] = NULL;
$arguments44['target'] = '';
$arguments44['class'] = '';
$arguments44['title'] = '';
$arguments44['language'] = NULL;
$arguments44['additionalParams'] = '';
$arguments44['additionalAttributes'] = array (
);
$arguments44['useCacheHash'] = NULL;
$arguments44['addQueryString'] = false;
$arguments44['addQueryStringMethod'] = 'GET';
$arguments44['addQueryStringExclude'] = '';
$arguments44['absolute'] = false;
$arguments44['parts-as'] = 'typoLinkParts';
$array46 = array (
);$arguments44['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array46);

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output41 .= '
            </h5>
        ';
return $output41;
});
case call_user_func(function() use ($renderingContext, $self) {

return 6;
}): return call_user_func(function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
            <h6 class="';
$array50 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array50)]);

$output49 .= ' ';
$array51 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array51)]);

$output49 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '<span>';
$array56 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array56)]);

$output55 .= '</span>';
return $output55;
};
$arguments52 = array();
$arguments52['parameter'] = NULL;
$arguments52['target'] = '';
$arguments52['class'] = '';
$arguments52['title'] = '';
$arguments52['language'] = NULL;
$arguments52['additionalParams'] = '';
$arguments52['additionalAttributes'] = array (
);
$arguments52['useCacheHash'] = NULL;
$arguments52['addQueryString'] = false;
$arguments52['addQueryStringMethod'] = 'GET';
$arguments52['addQueryStringExclude'] = '';
$arguments52['absolute'] = false;
$arguments52['parts-as'] = 'typoLinkParts';
$array54 = array (
);$arguments52['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array54);

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output49 .= '
            </h6>
        ';
return $output49;
});
case call_user_func(function() use ($renderingContext, $self) {

return 100;
}): return call_user_func(function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return ' -- do not show header -- ';
};
$arguments58 = array();

$output57 .= '';

$output57 .= '
        ';
return $output57;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['section'] = NULL;
$arguments67['partial'] = NULL;
$arguments67['delegate'] = NULL;
$arguments67['renderable'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['optional'] = false;
$arguments67['default'] = NULL;
$arguments67['contentAs'] = NULL;
$arguments67['debug'] = true;
$arguments67['partial'] = 'Header/Header';
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['header'] = $renderingContext->getVariableProvider()->getByPath('header', $array70);
$array71 = array (
);$array69['layout'] = $renderingContext->getVariableProvider()->getByPath('default', $array71);
$array72 = array (
);$array69['class'] = $renderingContext->getVariableProvider()->getByPath('class', $array72);
$array73 = array (
);$array69['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array73);
$array74 = array (
);$array69['link'] = $renderingContext->getVariableProvider()->getByPath('link', $array74);
$arguments67['arguments'] = $array69;

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
            ';
return $output66;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array64);

$expression65 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = $renderChildrenClosure62;

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
        ';
return $output60;
});
}
}, array($arguments7));

$output6 .= '
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('header', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
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