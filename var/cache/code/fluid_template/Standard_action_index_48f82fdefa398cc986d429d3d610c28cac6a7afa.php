<?php

class Standard_action_index_48f82fdefa398cc986d429d3d610c28cac6a7afa extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section fieldRow
 */
public function section_98d2d4b6b7669016b2f2b086cbef3478c9ff911e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <tr>
        <th class="col-nowrap">';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldLabel', $array1)]);

$output0 .= '</th>
        <td>';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldValue', $array2)]);

$output0 .= '</td>
    </tr>
';

return $output0;
}
/**
 * section refLineRow
 */
public function section_bf6c41c48a38f988455b8309d12e9080996c546e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                <td class="col-icon"><a href="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array37)]);

$output36 .= '" title="id=';
$array38 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array38)]);

$output36 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array41 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array41);
};
$arguments39 = array();
$arguments39['value'] = NULL;

$output36 .= isset($arguments39['value']) ? $arguments39['value'] : $renderChildrenClosure40();

$output36 .= '</a></td>
                <td class="col-title"><a href="';
$array42 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array42)]);

$output36 .= '" title="[id=';
$array43 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array43)]);

$output36 .= '] ';
$array44 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array44)]);

$output36 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array48 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array48)]);
};
$arguments45 = array();
$arguments45['maxCharacters'] = NULL;
$arguments45['append'] = '&hellip;';
$arguments45['respectWordBoundaries'] = true;
$arguments45['respectHtml'] = true;
$array47 = array (
);$arguments45['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array47);

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output36 .= '</a></td>
                <td>';
$array49 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array49)]);

$output36 .= '</td>
                <td><span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$arguments50['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output36 .= ': ';
$array52 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array52)]);

$output36 .= ' (uid=';
$array53 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array53)]);

$output36 .= ')">
                        ';
$array54 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array54)]);

$output36 .= '
                    </span></td>
            ';
return $output36;
};
$arguments34 = array();

$output33 .= '';

$output33 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= ' (uid=';
$array60 = array (
);
$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array60)]);

$output57 .= '</td>
                <td>';
$array61 = array (
);
$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array61)]);

$output57 .= '</td>
                <td></td>
            ';
return $output57;
};
$arguments55 = array();
$arguments55['if'] = NULL;

$output33 .= '';

$output33 .= '
        ';
return $output33;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                <td class="col-icon"><a href="';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array7)]);

$output6 .= '" title="id=';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array8)]);

$output6 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$array11 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array11);
};
$arguments9 = array();
$arguments9['value'] = NULL;

$output6 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output6 .= '</a></td>
                <td class="col-title"><a href="';
$array12 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array12)]);

$output6 .= '" title="[id=';
$array13 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array13)]);

$output6 .= '] ';
$array14 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array14)]);

$output6 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array18 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array18)]);
};
$arguments15 = array();
$arguments15['maxCharacters'] = NULL;
$arguments15['append'] = '&hellip;';
$arguments15['respectWordBoundaries'] = true;
$arguments15['respectHtml'] = true;
$array17 = array (
);$arguments15['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array17);

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '</a></td>
                <td>';
$array19 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array19)]);

$output6 .= '</td>
                <td><span title="';
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
$arguments20['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output6 .= ': ';
$array22 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array22)]);

$output6 .= ' (uid=';
$array23 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array23)]);

$output6 .= ')">
                        ';
$array24 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array24)]);

$output6 .= '
                    </span></td>
            ';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['key'] = NULL;
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['languageKey'] = NULL;
$arguments26['alternativeLanguageKeys'] = NULL;
$arguments26['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output25 .= ' (uid=';
$array28 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array28)]);

$output25 .= '</td>
                <td>';
$array29 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array29)]);

$output25 .= '</td>
                <td></td>
            ';
return $output25;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        <td title="';
$array62 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array62)]);

$output3 .= '" class="col-responsive">';
$array63 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array63)]);

$output3 .= '</td>
        <td>';
$array64 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array64)]);

$output3 .= '</td>
        <td>';
$array65 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array65)]);

$output3 .= '</td>
        <td>';
$array66 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array66)]);

$output3 .= '</td>
        <td>';
$array67 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array67)]);

$output3 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['section'] = NULL;
$arguments68['partial'] = NULL;
$arguments68['delegate'] = NULL;
$arguments68['renderable'] = NULL;
$arguments68['arguments'] = array (
);
$arguments68['optional'] = false;
$arguments68['default'] = NULL;
$arguments68['contentAs'] = NULL;
$arguments68['debug'] = true;
$arguments68['section'] = 'action';
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array71);
$arguments68['arguments'] = $array70;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output3 .= '
        </td>
    </tr>
';

return $output3;
}
/**
 * section refFromLineRow
 */
public function section_259ffcb6cbf483b74437a8f396e954e06c115a04(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output72 = '';

$output72 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
                <td class="col-icon"><a href="';
$array102 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array102)]);

$output101 .= '" title="id=';
$array103 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array103)]);

$output101 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$array106 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array106);
};
$arguments104 = array();
$arguments104['value'] = NULL;

$output101 .= isset($arguments104['value']) ? $arguments104['value'] : $renderChildrenClosure105();

$output101 .= '</a></td>
                <td class="col-title"><a href="';
$array107 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array107)]);

$output101 .= '" title="[id=';
$array108 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array108)]);

$output101 .= '] ';
$array109 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array109)]);

$output101 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$array113 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array113)]);
};
$arguments110 = array();
$arguments110['maxCharacters'] = NULL;
$arguments110['append'] = '&hellip;';
$arguments110['respectWordBoundaries'] = true;
$arguments110['respectHtml'] = true;
$array112 = array (
);$arguments110['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array112);

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output101 .= '</a></td>
                <td>';
$array114 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array114)]);

$output101 .= '</td>
                <td>';
$array115 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array115)]);

$output101 .= '</td>
            ';
return $output101;
};
$arguments99 = array();

$output98 .= '';

$output98 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['key'] = NULL;
$arguments119['id'] = NULL;
$arguments119['default'] = NULL;
$arguments119['arguments'] = NULL;
$arguments119['extensionName'] = NULL;
$arguments119['languageKey'] = NULL;
$arguments119['alternativeLanguageKeys'] = NULL;
$arguments119['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output118 .= ' (uid=';
$array121 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array121)]);

$output118 .= '</td>
                <td>';
$array122 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array122)]);

$output118 .= '</td>
                <td></td>
            ';
return $output118;
};
$arguments116 = array();
$arguments116['if'] = NULL;

$output98 .= '';

$output98 .= '
        ';
return $output98;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                <td class="col-icon"><a href="';
$array76 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array76)]);

$output75 .= '" title="id=';
$array77 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array77)]);

$output75 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$array80 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array80);
};
$arguments78 = array();
$arguments78['value'] = NULL;

$output75 .= isset($arguments78['value']) ? $arguments78['value'] : $renderChildrenClosure79();

$output75 .= '</a></td>
                <td class="col-title"><a href="';
$array81 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array81)]);

$output75 .= '" title="[id=';
$array82 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array82)]);

$output75 .= '] ';
$array83 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array83)]);

$output75 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$array87 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array87)]);
};
$arguments84 = array();
$arguments84['maxCharacters'] = NULL;
$arguments84['append'] = '&hellip;';
$arguments84['respectWordBoundaries'] = true;
$arguments84['respectHtml'] = true;
$array86 = array (
);$arguments84['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array86);

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output75 .= '</a></td>
                <td>';
$array88 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array88)]);

$output75 .= '</td>
                <td>';
$array89 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array89)]);

$output75 .= '</td>
            ';
return $output75;
};
$arguments73['__elseClosures'][] = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['key'] = NULL;
$arguments91['id'] = NULL;
$arguments91['default'] = NULL;
$arguments91['arguments'] = NULL;
$arguments91['extensionName'] = NULL;
$arguments91['languageKey'] = NULL;
$arguments91['alternativeLanguageKeys'] = NULL;
$arguments91['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output90 .= ' (uid=';
$array93 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array93)]);

$output90 .= '</td>
                <td>';
$array94 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array94)]);

$output90 .= '</td>
                <td></td>
            ';
return $output90;
};

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
        <td title="';
$array123 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array123)]);

$output72 .= '" class="col-responsive">';
$array124 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array124)]);

$output72 .= '</td>
        <td>';
$array125 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array125)]);

$output72 .= '</td>
        <td>';
$array126 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array126)]);

$output72 .= '</td>
        <td>';
$array127 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array127)]);

$output72 .= '</td>
        <td>';
$array128 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array128)]);

$output72 .= '</td>
        <td>';
$array129 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_string', $array129)]);

$output72 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['section'] = NULL;
$arguments130['partial'] = NULL;
$arguments130['delegate'] = NULL;
$arguments130['renderable'] = NULL;
$arguments130['arguments'] = array (
);
$arguments130['optional'] = false;
$arguments130['default'] = NULL;
$arguments130['contentAs'] = NULL;
$arguments130['debug'] = true;
$arguments130['section'] = 'action';
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array133);
$arguments130['arguments'] = $array132;

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output72 .= '
        </td>
    </tr>
';

return $output72;
}
/**
 * section action
 */
public function section_34eb4c4ef005207e8b8f916b9f1fffacccd6945e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output134 = '';

$output134 .= '
    <div class="btn-group" role="group">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
            <a class="btn btn-default btn-sm" href="#" onclick="';
$array141 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.viewOnClick', $array141)]);

$output140 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['languageKey'] = NULL;
$arguments142['alternativeLanguageKeys'] = NULL;
$arguments142['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showPage';

$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext)]);

$output140 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['identifier'] = NULL;
$arguments144['size'] = 'small';
$arguments144['overlay'] = NULL;
$arguments144['state'] = 'default';
$arguments144['alternativeMarkupIdentifier'] = NULL;
$arguments144['identifier'] = 'actions-document-view';
$arguments144['size'] = 'small';

$output140 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output140 .= '
            </a>
        ';
return $output140;
};
$arguments135 = array();
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$arguments135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array137 = array();
$array138 = array (
);$array137['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array138);

$expression139 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression139(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)
					),
					$renderingContext
				);
$arguments135['__thenClosure'] = $renderChildrenClosure136;

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
        <a class="btn btn-default btn-sm" href="';
$array146 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordEditUrl', $array146)]);

$output134 .= '" title="';
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
$arguments147['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.edit';

$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext)]);

$output134 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['identifier'] = NULL;
$arguments149['size'] = 'small';
$arguments149['overlay'] = NULL;
$arguments149['state'] = 'default';
$arguments149['alternativeMarkupIdentifier'] = NULL;
$arguments149['identifier'] = 'actions-open';
$arguments149['size'] = 'small';

$output134 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output134 .= '
        </a>
    </div>
    <div class="btn-group" role="group">
        <a class="btn btn-default btn-sm" href="';
$array151 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordHistoryUrl', $array151)]);

$output134 .= '" title="';
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
$arguments152['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.history';

$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext)]);

$output134 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['identifier'] = NULL;
$arguments154['size'] = 'small';
$arguments154['overlay'] = NULL;
$arguments154['state'] = 'default';
$arguments154['alternativeMarkupIdentifier'] = NULL;
$arguments154['identifier'] = 'actions-document-history-open';
$arguments154['size'] = 'small';

$output134 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output134 .= '
        </a>
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
        <div class="btn-group" role="group">
            <a class="btn btn-default btn-sm" href="';
$array162 = array (
);
$output161 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array162)]);

$output161 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['key'] = NULL;
$arguments163['id'] = NULL;
$arguments163['default'] = NULL;
$arguments163['arguments'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['languageKey'] = NULL;
$arguments163['alternativeLanguageKeys'] = NULL;
$arguments163['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showList';

$output161 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext)]);

$output161 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['identifier'] = NULL;
$arguments165['size'] = 'small';
$arguments165['overlay'] = NULL;
$arguments165['state'] = 'default';
$arguments165['alternativeMarkupIdentifier'] = NULL;
$arguments165['identifier'] = 'actions-system-list-open';
$arguments165['size'] = 'small';

$output161 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output161 .= '
            </a>
        </div>
    ';
return $output161;
};
$arguments156 = array();
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$arguments156['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array158 = array();
$array159 = array (
);$array158['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array159);

$expression160 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments156['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array158)
					),
					$renderingContext
				);
$arguments156['__thenClosure'] = $renderChildrenClosure157;

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output134 .= '
';

return $output134;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output167 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
        <div class="card-container">
            <div class="card">

                <div class="card-header">
                    <div class="card-icon">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$array363 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array363);
};
$arguments361 = array();
$arguments361['value'] = NULL;

$output360 .= isset($arguments361['value']) ? $arguments361['value'] : $renderChildrenClosure362();

$output360 .= '
                    </div>

                    <div class="card-header-body">
                        <h1 class="card-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$array367 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array367)]);
};
$arguments364 = array();
$arguments364['maxCharacters'] = NULL;
$arguments364['append'] = '&hellip;';
$arguments364['respectWordBoundaries'] = true;
$arguments364['respectHtml'] = true;
$array366 = array (
);$arguments364['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array366);

$output360 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output373 = '';

$output373 .= '[';
$array374 = array (
);
$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.uid.fieldLabel', $array374)]);

$output373 .= ': ';
$array375 = array (
);
$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.uid.value', $array375)]);

$output373 .= ']';
return $output373;
};
$arguments368 = array();
$arguments368['then'] = NULL;
$arguments368['else'] = NULL;
$arguments368['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array370 = array();
$array371 = array (
);$array370['0'] = $renderingContext->getVariableProvider()->getByPath('extraFields.uid.value', $array371);

$expression372 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments368['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression372(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array370)
					),
					$renderingContext
				);
$arguments368['__thenClosure'] = $renderChildrenClosure369;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output360 .= '</h1>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
                            <span class="card-subtitle">';
$array382 = array (
);
$output381 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('table', $array382)]);

$output381 .= '</span>
                        ';
return $output381;
};
$arguments376 = array();
$arguments376['then'] = NULL;
$arguments376['else'] = NULL;
$arguments376['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array378 = array();
$array379 = array (
);$array378['0'] = $renderingContext->getVariableProvider()->getByPath('table', $array379);

$expression380 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments376['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression380(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array378)
					),
					$renderingContext
				);
$arguments376['__thenClosure'] = $renderChildrenClosure377;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output360 .= '
                    </div>
                </div>

                <div class="card-content">
                    <div class="row">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$output392 = '';

$output392 .= '
                                <div class="col-md-6">
                                    <strong>';
$array393 = array (
);
$output392 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraField.fieldLabel', $array393)]);

$output392 .= '</strong><br>
                                    ';
$array394 = array (
);
$output392 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraField.value', $array394)]);

$output392 .= '
                                </div>
                            ';
return $output392;
};
$arguments387 = array();
$arguments387['then'] = NULL;
$arguments387['else'] = NULL;
$arguments387['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array389 = array();
$array390 = array (
);$array389['0'] = $renderingContext->getVariableProvider()->getByPath('extraField.isDatetime', $array390);

$expression391 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments387['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression391(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array389)
					),
					$renderingContext
				);
$arguments387['__thenClosure'] = $renderChildrenClosure388;

$output386 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext);

$output386 .= '
                        ';
return $output386;
};
$arguments383 = array();
$arguments383['each'] = NULL;
$arguments383['as'] = NULL;
$arguments383['key'] = NULL;
$arguments383['reverse'] = false;
$arguments383['iteration'] = NULL;
$array385 = array (
);$arguments383['each'] = $renderingContext->getVariableProvider()->getByPath('extraFields', $array385);
$arguments383['as'] = 'extraField';

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output360 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
$output400 = '';

$output400 .= '
                        <div class="row">
                            <div class="col-md-12">
                                <div class="media">
                                    <div class="media-left">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$array403 = array (
);return $renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.icon', $array403);
};
$arguments401 = array();
$arguments401['value'] = NULL;

$output400 .= isset($arguments401['value']) ? $arguments401['value'] : $renderChildrenClosure402();

$output400 .= '
                                    </div>
                                    <div class="media-body">
                                        <strong>';
$array404 = array (
);
$output400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.username', $array404)]);

$output400 .= '</strong><br>
                                        ';
$array405 = array (
);
$output400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.realName', $array405)]);

$output400 .= '
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
return $output400;
};
$arguments395 = array();
$arguments395['then'] = NULL;
$arguments395['else'] = NULL;
$arguments395['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array397 = array();
$array398 = array (
);$array397['0'] = $renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord', $array398);

$expression399 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments395['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression399(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array397)
					),
					$renderingContext
				);
$arguments395['__thenClosure'] = $renderChildrenClosure396;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);

$output360 .= '
                </div>
            </div>
        </div>


        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$array416 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('missingFile', $array416)]);
};
$arguments412 = array();
$arguments412['message'] = NULL;
$arguments412['title'] = NULL;
$arguments412['state'] = -2;
$arguments412['iconName'] = NULL;
$arguments412['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments414 = array();
$arguments414['key'] = NULL;
$arguments414['id'] = NULL;
$arguments414['default'] = NULL;
$arguments414['arguments'] = NULL;
$arguments414['extensionName'] = NULL;
$arguments414['languageKey'] = NULL;
$arguments414['alternativeLanguageKeys'] = NULL;
$arguments414['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:warning.file_missing';
$arguments412['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);
$arguments412['state'] = 1;
$renderChildrenClosure413 = ($arguments412['message'] !== null) ? function() use ($arguments412) { return $arguments412['message']; } : $renderChildrenClosure413;
$output411 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output411 .= '
        ';
return $output411;
};
$arguments406 = array();
$arguments406['then'] = NULL;
$arguments406['else'] = NULL;
$arguments406['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array408 = array();
$array409 = array (
);$array408['0'] = $renderingContext->getVariableProvider()->getByPath('missingFile', $array409);

$expression410 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments406['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression410(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array408)
					),
					$renderingContext
				);
$arguments406['__thenClosure'] = $renderChildrenClosure407;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output360 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
$output422 = '';

$output422 .= '
            <p>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$array425 = array (
);return $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array425);
};
$arguments423 = array();
$arguments423['value'] = NULL;

$output422 .= isset($arguments423['value']) ? $arguments423['value'] : $renderChildrenClosure424();

$output422 .= '
            </p>
        ';
return $output422;
};
$arguments417 = array();
$arguments417['then'] = NULL;
$arguments417['else'] = NULL;
$arguments417['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array419 = array();
$array420 = array (
);$array419['0'] = $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array420);

$expression421 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments417['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression421(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array419)
					),
					$renderingContext
				);
$arguments417['__thenClosure'] = $renderChildrenClosure418;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output360 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$output431 = '';

$output431 .= '
            <p>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['additionalAttributes'] = NULL;
$arguments432['data'] = NULL;
$arguments432['aria'] = NULL;
$arguments432['class'] = NULL;
$arguments432['dir'] = NULL;
$arguments432['id'] = NULL;
$arguments432['lang'] = NULL;
$arguments432['style'] = NULL;
$arguments432['title'] = NULL;
$arguments432['accesskey'] = NULL;
$arguments432['tabindex'] = NULL;
$arguments432['onclick'] = NULL;
$arguments432['alt'] = NULL;
$arguments432['file'] = NULL;
$arguments432['additionalConfig'] = array (
);
$arguments432['width'] = NULL;
$arguments432['height'] = NULL;
$arguments432['cropVariant'] = 'default';
$arguments432['fileExtension'] = NULL;
$arguments432['loading'] = NULL;
$array434 = array (
);$arguments432['file'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array434);
$array435 = array (
);$arguments432['width'] = $renderingContext->getVariableProvider()->getByPath('width', $array435);
$array436 = array (
);$arguments432['height'] = $renderingContext->getVariableProvider()->getByPath('height', $array436);

$output431 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output431 .= '
            </p>
        ';
return $output431;
};
$arguments426 = array();
$arguments426['then'] = NULL;
$arguments426['else'] = NULL;
$arguments426['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array428 = array();
$array429 = array (
);$array428['0'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array429);

$expression430 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments426['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression430(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array428)
					),
					$renderingContext
				);
$arguments426['__thenClosure'] = $renderChildrenClosure427;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output360 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
$output442 = '';

$output442 .= '
            <p>
                <a class="btn btn-default" href="';
$array443 = array (
);
$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array443)]);

$output442 .= '" target="_blank" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments444 = array();
$arguments444['key'] = NULL;
$arguments444['id'] = NULL;
$arguments444['default'] = NULL;
$arguments444['arguments'] = NULL;
$arguments444['extensionName'] = NULL;
$arguments444['languageKey'] = NULL;
$arguments444['alternativeLanguageKeys'] = NULL;
$arguments444['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show';

$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext)]);

$output442 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments446 = array();
$arguments446['identifier'] = NULL;
$arguments446['size'] = 'small';
$arguments446['overlay'] = NULL;
$arguments446['state'] = 'default';
$arguments446['alternativeMarkupIdentifier'] = NULL;
$arguments446['identifier'] = 'actions-document-view';
$arguments446['size'] = 'small';
$arguments446['alternativeMarkupIdentifier'] = 'inline';

$output442 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output442 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['key'] = NULL;
$arguments448['id'] = NULL;
$arguments448['default'] = NULL;
$arguments448['arguments'] = NULL;
$arguments448['extensionName'] = NULL;
$arguments448['languageKey'] = NULL;
$arguments448['alternativeLanguageKeys'] = NULL;
$arguments448['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show';

$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext)]);

$output442 .= '
                </a>
            </p>
        ';
return $output442;
};
$arguments437 = array();
$arguments437['then'] = NULL;
$arguments437['else'] = NULL;
$arguments437['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array439 = array();
$array440 = array (
);$array439['0'] = $renderingContext->getVariableProvider()->getByPath('url', $array440);

$expression441 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments437['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression441(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array439)
					),
					$renderingContext
				);
$arguments437['__thenClosure'] = $renderChildrenClosure438;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);

$output360 .= '
        <div class="table-fit table-fit-wrap">
            <table class="table table-striped table-hover">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments454 = array();
$arguments454['section'] = NULL;
$arguments454['partial'] = NULL;
$arguments454['delegate'] = NULL;
$arguments454['renderable'] = NULL;
$arguments454['arguments'] = array (
);
$arguments454['optional'] = false;
$arguments454['default'] = NULL;
$arguments454['contentAs'] = NULL;
$arguments454['debug'] = true;
$arguments454['section'] = 'fieldRow';
// Rendering Array
$array456 = array();
$array457 = array (
);$array456['row'] = $renderingContext->getVariableProvider()->getByPath('field', $array457);
$arguments454['arguments'] = $array456;

$output453 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext);

$output453 .= '
                ';
return $output453;
};
$arguments450 = array();
$arguments450['each'] = NULL;
$arguments450['as'] = NULL;
$arguments450['key'] = NULL;
$arguments450['reverse'] = false;
$arguments450['iteration'] = NULL;
$array452 = array (
);$arguments450['each'] = $renderingContext->getVariableProvider()->getByPath('fields', $array452);
$arguments450['as'] = 'field';

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output360 .= '
            </table>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
$output463 = '';

$output463 .= '
            <a class="btn btn-primary" href="';
$array464 = array (
);
$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('returnUrl', $array464)]);

$output463 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['key'] = NULL;
$arguments465['id'] = NULL;
$arguments465['default'] = NULL;
$arguments465['arguments'] = NULL;
$arguments465['extensionName'] = NULL;
$arguments465['languageKey'] = NULL;
$arguments465['alternativeLanguageKeys'] = NULL;
$arguments465['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back';

$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext)]);

$output463 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments467 = array();
$arguments467['identifier'] = NULL;
$arguments467['size'] = 'small';
$arguments467['overlay'] = NULL;
$arguments467['state'] = 'default';
$arguments467['alternativeMarkupIdentifier'] = NULL;
$arguments467['identifier'] = 'actions-view-go-back';
$arguments467['size'] = 'small';

$output463 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments467, $renderChildrenClosure468, $renderingContext);

$output463 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments469 = array();
$arguments469['key'] = NULL;
$arguments469['id'] = NULL;
$arguments469['default'] = NULL;
$arguments469['arguments'] = NULL;
$arguments469['extensionName'] = NULL;
$arguments469['languageKey'] = NULL;
$arguments469['alternativeLanguageKeys'] = NULL;
$arguments469['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back';

$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext)]);

$output463 .= '
            </a>
        ';
return $output463;
};
$arguments458 = array();
$arguments458['then'] = NULL;
$arguments458['else'] = NULL;
$arguments458['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array460 = array();
$array461 = array (
);$array460['0'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array461);

$expression462 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments458['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression462(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array460)
					),
					$renderingContext
				);
$arguments458['__thenClosure'] = $renderChildrenClosure459;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);

$output360 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
$output476 = '';

$output476 .= '
            <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments477 = array();
$arguments477['key'] = NULL;
$arguments477['id'] = NULL;
$arguments477['default'] = NULL;
$arguments477['arguments'] = NULL;
$arguments477['extensionName'] = NULL;
$arguments477['languageKey'] = NULL;
$arguments477['alternativeLanguageKeys'] = NULL;
$arguments477['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesToThisItem';

$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext)]);

$output476 .= '</h3>
            <div class="table-fit">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="col-icon"></th>
                        <th class="col-title">';
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
$arguments479['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext)]);

$output476 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments481 = array();
$arguments481['key'] = NULL;
$arguments481['id'] = NULL;
$arguments481['default'] = NULL;
$arguments481['arguments'] = NULL;
$arguments481['extensionName'] = NULL;
$arguments481['languageKey'] = NULL;
$arguments481['alternativeLanguageKeys'] = NULL;
$arguments481['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext)]);

$output476 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments483 = array();
$arguments483['key'] = NULL;
$arguments483['id'] = NULL;
$arguments483['default'] = NULL;
$arguments483['arguments'] = NULL;
$arguments483['extensionName'] = NULL;
$arguments483['languageKey'] = NULL;
$arguments483['alternativeLanguageKeys'] = NULL;
$arguments483['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext)]);

$output476 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['key'] = NULL;
$arguments485['id'] = NULL;
$arguments485['default'] = NULL;
$arguments485['arguments'] = NULL;
$arguments485['extensionName'] = NULL;
$arguments485['languageKey'] = NULL;
$arguments485['alternativeLanguageKeys'] = NULL;
$arguments485['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext)]);

$output476 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments487 = array();
$arguments487['key'] = NULL;
$arguments487['id'] = NULL;
$arguments487['default'] = NULL;
$arguments487['arguments'] = NULL;
$arguments487['extensionName'] = NULL;
$arguments487['languageKey'] = NULL;
$arguments487['alternativeLanguageKeys'] = NULL;
$arguments487['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext)]);

$output476 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments489 = array();
$arguments489['key'] = NULL;
$arguments489['id'] = NULL;
$arguments489['default'] = NULL;
$arguments489['arguments'] = NULL;
$arguments489['extensionName'] = NULL;
$arguments489['languageKey'] = NULL;
$arguments489['alternativeLanguageKeys'] = NULL;
$arguments489['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext)]);

$output476 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['key'] = NULL;
$arguments491['id'] = NULL;
$arguments491['default'] = NULL;
$arguments491['arguments'] = NULL;
$arguments491['extensionName'] = NULL;
$arguments491['languageKey'] = NULL;
$arguments491['alternativeLanguageKeys'] = NULL;
$arguments491['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext)]);

$output476 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments493 = array();
$arguments493['key'] = NULL;
$arguments493['id'] = NULL;
$arguments493['default'] = NULL;
$arguments493['arguments'] = NULL;
$arguments493['extensionName'] = NULL;
$arguments493['languageKey'] = NULL;
$arguments493['alternativeLanguageKeys'] = NULL;
$arguments493['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext)]);

$output476 .= '</th>
                        <th class="col-control"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
$output498 = '';

$output498 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments499 = array();
$arguments499['section'] = NULL;
$arguments499['partial'] = NULL;
$arguments499['delegate'] = NULL;
$arguments499['renderable'] = NULL;
$arguments499['arguments'] = array (
);
$arguments499['optional'] = false;
$arguments499['default'] = NULL;
$arguments499['contentAs'] = NULL;
$arguments499['debug'] = true;
$arguments499['section'] = 'refLineRow';
// Rendering Array
$array501 = array();
$array502 = array (
);$array501['line'] = $renderingContext->getVariableProvider()->getByPath('refLine', $array502);
$array503 = array (
);$array501['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array503);
$arguments499['arguments'] = $array501;

$output498 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments499, $renderChildrenClosure500, $renderingContext);

$output498 .= '
                    ';
return $output498;
};
$arguments495 = array();
$arguments495['each'] = NULL;
$arguments495['as'] = NULL;
$arguments495['key'] = NULL;
$arguments495['reverse'] = false;
$arguments495['iteration'] = NULL;
$array497 = array (
);$arguments495['each'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array497);
$arguments495['as'] = 'refLine';

$output476 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext);

$output476 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output476;
};
$arguments471 = array();
$arguments471['then'] = NULL;
$arguments471['else'] = NULL;
$arguments471['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array473 = array();
$array474 = array (
);$array473['0'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array474);

$expression475 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments471['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression475(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array473)
					),
					$renderingContext
				);
$arguments471['__thenClosure'] = $renderChildrenClosure472;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext);

$output360 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
$output509 = '';

$output509 .= '
            <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments510 = array();
$arguments510['key'] = NULL;
$arguments510['id'] = NULL;
$arguments510['default'] = NULL;
$arguments510['arguments'] = NULL;
$arguments510['extensionName'] = NULL;
$arguments510['languageKey'] = NULL;
$arguments510['alternativeLanguageKeys'] = NULL;
$arguments510['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesFromThisItem';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext)]);

$output509 .= '</h3>
            <div class="table-fit">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="col-icon"></th>
                        <th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments512 = array();
$arguments512['key'] = NULL;
$arguments512['id'] = NULL;
$arguments512['default'] = NULL;
$arguments512['arguments'] = NULL;
$arguments512['extensionName'] = NULL;
$arguments512['languageKey'] = NULL;
$arguments512['alternativeLanguageKeys'] = NULL;
$arguments512['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext)]);

$output509 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments514 = array();
$arguments514['key'] = NULL;
$arguments514['id'] = NULL;
$arguments514['default'] = NULL;
$arguments514['arguments'] = NULL;
$arguments514['extensionName'] = NULL;
$arguments514['languageKey'] = NULL;
$arguments514['alternativeLanguageKeys'] = NULL;
$arguments514['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext)]);

$output509 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments516 = array();
$arguments516['key'] = NULL;
$arguments516['id'] = NULL;
$arguments516['default'] = NULL;
$arguments516['arguments'] = NULL;
$arguments516['extensionName'] = NULL;
$arguments516['languageKey'] = NULL;
$arguments516['alternativeLanguageKeys'] = NULL;
$arguments516['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext)]);

$output509 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments518 = array();
$arguments518['key'] = NULL;
$arguments518['id'] = NULL;
$arguments518['default'] = NULL;
$arguments518['arguments'] = NULL;
$arguments518['extensionName'] = NULL;
$arguments518['languageKey'] = NULL;
$arguments518['alternativeLanguageKeys'] = NULL;
$arguments518['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext)]);

$output509 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['key'] = NULL;
$arguments520['id'] = NULL;
$arguments520['default'] = NULL;
$arguments520['arguments'] = NULL;
$arguments520['extensionName'] = NULL;
$arguments520['languageKey'] = NULL;
$arguments520['alternativeLanguageKeys'] = NULL;
$arguments520['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext)]);

$output509 .= '</th>
                        <th>';
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
$arguments522['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext)]);

$output509 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments524 = array();
$arguments524['key'] = NULL;
$arguments524['id'] = NULL;
$arguments524['default'] = NULL;
$arguments524['arguments'] = NULL;
$arguments524['extensionName'] = NULL;
$arguments524['languageKey'] = NULL;
$arguments524['alternativeLanguageKeys'] = NULL;
$arguments524['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext)]);

$output509 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments526 = array();
$arguments526['key'] = NULL;
$arguments526['id'] = NULL;
$arguments526['default'] = NULL;
$arguments526['arguments'] = NULL;
$arguments526['extensionName'] = NULL;
$arguments526['languageKey'] = NULL;
$arguments526['alternativeLanguageKeys'] = NULL;
$arguments526['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext)]);

$output509 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments528 = array();
$arguments528['key'] = NULL;
$arguments528['id'] = NULL;
$arguments528['default'] = NULL;
$arguments528['arguments'] = NULL;
$arguments528['extensionName'] = NULL;
$arguments528['languageKey'] = NULL;
$arguments528['alternativeLanguageKeys'] = NULL;
$arguments528['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.refString';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext)]);

$output509 .= '</th>
                        <th class="col-control"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
$output533 = '';

$output533 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments534 = array();
$arguments534['section'] = NULL;
$arguments534['partial'] = NULL;
$arguments534['delegate'] = NULL;
$arguments534['renderable'] = NULL;
$arguments534['arguments'] = array (
);
$arguments534['optional'] = false;
$arguments534['default'] = NULL;
$arguments534['contentAs'] = NULL;
$arguments534['debug'] = true;
$arguments534['section'] = 'refFromLineRow';
// Rendering Array
$array536 = array();
$array537 = array (
);$array536['line'] = $renderingContext->getVariableProvider()->getByPath('refFromLine', $array537);
$array538 = array (
);$array536['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array538);
$arguments534['arguments'] = $array536;

$output533 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output533 .= '
                    ';
return $output533;
};
$arguments530 = array();
$arguments530['each'] = NULL;
$arguments530['as'] = NULL;
$arguments530['key'] = NULL;
$arguments530['reverse'] = false;
$arguments530['iteration'] = NULL;
$array532 = array (
);$arguments530['each'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array532);
$arguments530['as'] = 'refFromLine';

$output509 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);

$output509 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output509;
};
$arguments504 = array();
$arguments504['then'] = NULL;
$arguments504['else'] = NULL;
$arguments504['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array506 = array();
$array507 = array (
);$array506['0'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array507);

$expression508 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments504['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression508(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array506)
					),
					$renderingContext
				);
$arguments504['__thenClosure'] = $renderChildrenClosure505;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);

$output360 .= '
    ';
return $output360;
};
$arguments358 = array();

$output357 .= '';

$output357 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$output541 = '';

$output541 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['key'] = NULL;
$arguments544['id'] = NULL;
$arguments544['default'] = NULL;
$arguments544['arguments'] = NULL;
$arguments544['extensionName'] = NULL;
$arguments544['languageKey'] = NULL;
$arguments544['alternativeLanguageKeys'] = NULL;
$arguments544['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.noEditPermission';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext)]);
};
$arguments542 = array();
$arguments542['message'] = NULL;
$arguments542['title'] = NULL;
$arguments542['state'] = -2;
$arguments542['iconName'] = NULL;
$arguments542['disableIcon'] = false;
$arguments542['state'] = 2;
$renderChildrenClosure543 = ($arguments542['message'] !== null) ? function() use ($arguments542) { return $arguments542['message']; } : $renderChildrenClosure543;
$output541 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext);

$output541 .= '
    ';
return $output541;
};
$arguments539 = array();
$arguments539['if'] = NULL;

$output357 .= '';

$output357 .= '
';
return $output357;
};
$arguments168 = array();
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$arguments168['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array354 = array();
$array355 = array (
);$array354['0'] = $renderingContext->getVariableProvider()->getByPath('accessAllowed', $array355);

$expression356 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments168['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression356(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array354)
					),
					$renderingContext
				);
$arguments168['__thenClosure'] = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
        <div class="card-container">
            <div class="card">

                <div class="card-header">
                    <div class="card-icon">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$array173 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array173);
};
$arguments171 = array();
$arguments171['value'] = NULL;

$output170 .= isset($arguments171['value']) ? $arguments171['value'] : $renderChildrenClosure172();

$output170 .= '
                    </div>

                    <div class="card-header-body">
                        <h1 class="card-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$array177 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array177)]);
};
$arguments174 = array();
$arguments174['maxCharacters'] = NULL;
$arguments174['append'] = '&hellip;';
$arguments174['respectWordBoundaries'] = true;
$arguments174['respectHtml'] = true;
$array176 = array (
);$arguments174['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array176);

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '[';
$array184 = array (
);
$output183 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.uid.fieldLabel', $array184)]);

$output183 .= ': ';
$array185 = array (
);
$output183 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.uid.value', $array185)]);

$output183 .= ']';
return $output183;
};
$arguments178 = array();
$arguments178['then'] = NULL;
$arguments178['else'] = NULL;
$arguments178['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array180 = array();
$array181 = array (
);$array180['0'] = $renderingContext->getVariableProvider()->getByPath('extraFields.uid.value', $array181);

$expression182 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments178['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array180)
					),
					$renderingContext
				);
$arguments178['__thenClosure'] = $renderChildrenClosure179;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output170 .= '</h1>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
                            <span class="card-subtitle">';
$array192 = array (
);
$output191 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('table', $array192)]);

$output191 .= '</span>
                        ';
return $output191;
};
$arguments186 = array();
$arguments186['then'] = NULL;
$arguments186['else'] = NULL;
$arguments186['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array188 = array();
$array189 = array (
);$array188['0'] = $renderingContext->getVariableProvider()->getByPath('table', $array189);

$expression190 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments186['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression190(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array188)
					),
					$renderingContext
				);
$arguments186['__thenClosure'] = $renderChildrenClosure187;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output170 .= '
                    </div>
                </div>

                <div class="card-content">
                    <div class="row">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
                                <div class="col-md-6">
                                    <strong>';
$array203 = array (
);
$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraField.fieldLabel', $array203)]);

$output202 .= '</strong><br>
                                    ';
$array204 = array (
);
$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraField.value', $array204)]);

$output202 .= '
                                </div>
                            ';
return $output202;
};
$arguments197 = array();
$arguments197['then'] = NULL;
$arguments197['else'] = NULL;
$arguments197['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['0'] = $renderingContext->getVariableProvider()->getByPath('extraField.isDatetime', $array200);

$expression201 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments197['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression201(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments197['__thenClosure'] = $renderChildrenClosure198;

$output196 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output196 .= '
                        ';
return $output196;
};
$arguments193 = array();
$arguments193['each'] = NULL;
$arguments193['as'] = NULL;
$arguments193['key'] = NULL;
$arguments193['reverse'] = false;
$arguments193['iteration'] = NULL;
$array195 = array (
);$arguments193['each'] = $renderingContext->getVariableProvider()->getByPath('extraFields', $array195);
$arguments193['as'] = 'extraField';

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output170 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
                        <div class="row">
                            <div class="col-md-12">
                                <div class="media">
                                    <div class="media-left">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$array213 = array (
);return $renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.icon', $array213);
};
$arguments211 = array();
$arguments211['value'] = NULL;

$output210 .= isset($arguments211['value']) ? $arguments211['value'] : $renderChildrenClosure212();

$output210 .= '
                                    </div>
                                    <div class="media-body">
                                        <strong>';
$array214 = array (
);
$output210 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.username', $array214)]);

$output210 .= '</strong><br>
                                        ';
$array215 = array (
);
$output210 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.realName', $array215)]);

$output210 .= '
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
return $output210;
};
$arguments205 = array();
$arguments205['then'] = NULL;
$arguments205['else'] = NULL;
$arguments205['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array207 = array();
$array208 = array (
);$array207['0'] = $renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord', $array208);

$expression209 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments205['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression209(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array207)
					),
					$renderingContext
				);
$arguments205['__thenClosure'] = $renderChildrenClosure206;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output170 .= '
                </div>
            </div>
        </div>


        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$array226 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('missingFile', $array226)]);
};
$arguments222 = array();
$arguments222['message'] = NULL;
$arguments222['title'] = NULL;
$arguments222['state'] = -2;
$arguments222['iconName'] = NULL;
$arguments222['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['key'] = NULL;
$arguments224['id'] = NULL;
$arguments224['default'] = NULL;
$arguments224['arguments'] = NULL;
$arguments224['extensionName'] = NULL;
$arguments224['languageKey'] = NULL;
$arguments224['alternativeLanguageKeys'] = NULL;
$arguments224['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:warning.file_missing';
$arguments222['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);
$arguments222['state'] = 1;
$renderChildrenClosure223 = ($arguments222['message'] !== null) ? function() use ($arguments222) { return $arguments222['message']; } : $renderChildrenClosure223;
$output221 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output221 .= '
        ';
return $output221;
};
$arguments216 = array();
$arguments216['then'] = NULL;
$arguments216['else'] = NULL;
$arguments216['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array218 = array();
$array219 = array (
);$array218['0'] = $renderingContext->getVariableProvider()->getByPath('missingFile', $array219);

$expression220 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments216['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression220(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array218)
					),
					$renderingContext
				);
$arguments216['__thenClosure'] = $renderChildrenClosure217;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output170 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
            <p>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$array235 = array (
);return $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array235);
};
$arguments233 = array();
$arguments233['value'] = NULL;

$output232 .= isset($arguments233['value']) ? $arguments233['value'] : $renderChildrenClosure234();

$output232 .= '
            </p>
        ';
return $output232;
};
$arguments227 = array();
$arguments227['then'] = NULL;
$arguments227['else'] = NULL;
$arguments227['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array230 = array (
);$array229['0'] = $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array230);

$expression231 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments227['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);
$arguments227['__thenClosure'] = $renderChildrenClosure228;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output170 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
            <p>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['additionalAttributes'] = NULL;
$arguments242['data'] = NULL;
$arguments242['aria'] = NULL;
$arguments242['class'] = NULL;
$arguments242['dir'] = NULL;
$arguments242['id'] = NULL;
$arguments242['lang'] = NULL;
$arguments242['style'] = NULL;
$arguments242['title'] = NULL;
$arguments242['accesskey'] = NULL;
$arguments242['tabindex'] = NULL;
$arguments242['onclick'] = NULL;
$arguments242['alt'] = NULL;
$arguments242['file'] = NULL;
$arguments242['additionalConfig'] = array (
);
$arguments242['width'] = NULL;
$arguments242['height'] = NULL;
$arguments242['cropVariant'] = 'default';
$arguments242['fileExtension'] = NULL;
$arguments242['loading'] = NULL;
$array244 = array (
);$arguments242['file'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array244);
$array245 = array (
);$arguments242['width'] = $renderingContext->getVariableProvider()->getByPath('width', $array245);
$array246 = array (
);$arguments242['height'] = $renderingContext->getVariableProvider()->getByPath('height', $array246);

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output241 .= '
            </p>
        ';
return $output241;
};
$arguments236 = array();
$arguments236['then'] = NULL;
$arguments236['else'] = NULL;
$arguments236['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array238 = array();
$array239 = array (
);$array238['0'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array239);

$expression240 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments236['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression240(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array238)
					),
					$renderingContext
				);
$arguments236['__thenClosure'] = $renderChildrenClosure237;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output170 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
            <p>
                <a class="btn btn-default" href="';
$array253 = array (
);
$output252 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array253)]);

$output252 .= '" target="_blank" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['key'] = NULL;
$arguments254['id'] = NULL;
$arguments254['default'] = NULL;
$arguments254['arguments'] = NULL;
$arguments254['extensionName'] = NULL;
$arguments254['languageKey'] = NULL;
$arguments254['alternativeLanguageKeys'] = NULL;
$arguments254['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show';

$output252 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext)]);

$output252 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['identifier'] = NULL;
$arguments256['size'] = 'small';
$arguments256['overlay'] = NULL;
$arguments256['state'] = 'default';
$arguments256['alternativeMarkupIdentifier'] = NULL;
$arguments256['identifier'] = 'actions-document-view';
$arguments256['size'] = 'small';
$arguments256['alternativeMarkupIdentifier'] = 'inline';

$output252 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output252 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['languageKey'] = NULL;
$arguments258['alternativeLanguageKeys'] = NULL;
$arguments258['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show';

$output252 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output252 .= '
                </a>
            </p>
        ';
return $output252;
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['0'] = $renderingContext->getVariableProvider()->getByPath('url', $array250);

$expression251 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);
$arguments247['__thenClosure'] = $renderChildrenClosure248;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output170 .= '
        <div class="table-fit table-fit-wrap">
            <table class="table table-striped table-hover">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['section'] = NULL;
$arguments264['partial'] = NULL;
$arguments264['delegate'] = NULL;
$arguments264['renderable'] = NULL;
$arguments264['arguments'] = array (
);
$arguments264['optional'] = false;
$arguments264['default'] = NULL;
$arguments264['contentAs'] = NULL;
$arguments264['debug'] = true;
$arguments264['section'] = 'fieldRow';
// Rendering Array
$array266 = array();
$array267 = array (
);$array266['row'] = $renderingContext->getVariableProvider()->getByPath('field', $array267);
$arguments264['arguments'] = $array266;

$output263 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output263 .= '
                ';
return $output263;
};
$arguments260 = array();
$arguments260['each'] = NULL;
$arguments260['as'] = NULL;
$arguments260['key'] = NULL;
$arguments260['reverse'] = false;
$arguments260['iteration'] = NULL;
$array262 = array (
);$arguments260['each'] = $renderingContext->getVariableProvider()->getByPath('fields', $array262);
$arguments260['as'] = 'field';

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output170 .= '
            </table>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output273 = '';

$output273 .= '
            <a class="btn btn-primary" href="';
$array274 = array (
);
$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('returnUrl', $array274)]);

$output273 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['key'] = NULL;
$arguments275['id'] = NULL;
$arguments275['default'] = NULL;
$arguments275['arguments'] = NULL;
$arguments275['extensionName'] = NULL;
$arguments275['languageKey'] = NULL;
$arguments275['alternativeLanguageKeys'] = NULL;
$arguments275['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back';

$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext)]);

$output273 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['identifier'] = NULL;
$arguments277['size'] = 'small';
$arguments277['overlay'] = NULL;
$arguments277['state'] = 'default';
$arguments277['alternativeMarkupIdentifier'] = NULL;
$arguments277['identifier'] = 'actions-view-go-back';
$arguments277['size'] = 'small';

$output273 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output273 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['key'] = NULL;
$arguments279['id'] = NULL;
$arguments279['default'] = NULL;
$arguments279['arguments'] = NULL;
$arguments279['extensionName'] = NULL;
$arguments279['languageKey'] = NULL;
$arguments279['alternativeLanguageKeys'] = NULL;
$arguments279['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back';

$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext)]);

$output273 .= '
            </a>
        ';
return $output273;
};
$arguments268 = array();
$arguments268['then'] = NULL;
$arguments268['else'] = NULL;
$arguments268['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array270 = array();
$array271 = array (
);$array270['0'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array271);

$expression272 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments268['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression272(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array270)
					),
					$renderingContext
				);
$arguments268['__thenClosure'] = $renderChildrenClosure269;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output170 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$output286 = '';

$output286 .= '
            <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['key'] = NULL;
$arguments287['id'] = NULL;
$arguments287['default'] = NULL;
$arguments287['arguments'] = NULL;
$arguments287['extensionName'] = NULL;
$arguments287['languageKey'] = NULL;
$arguments287['alternativeLanguageKeys'] = NULL;
$arguments287['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesToThisItem';

$output286 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext)]);

$output286 .= '</h3>
            <div class="table-fit">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="col-icon"></th>
                        <th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['key'] = NULL;
$arguments289['id'] = NULL;
$arguments289['default'] = NULL;
$arguments289['arguments'] = NULL;
$arguments289['extensionName'] = NULL;
$arguments289['languageKey'] = NULL;
$arguments289['alternativeLanguageKeys'] = NULL;
$arguments289['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output286 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext)]);

$output286 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments291 = array();
$arguments291['key'] = NULL;
$arguments291['id'] = NULL;
$arguments291['default'] = NULL;
$arguments291['arguments'] = NULL;
$arguments291['extensionName'] = NULL;
$arguments291['languageKey'] = NULL;
$arguments291['alternativeLanguageKeys'] = NULL;
$arguments291['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output286 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext)]);

$output286 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['key'] = NULL;
$arguments293['id'] = NULL;
$arguments293['default'] = NULL;
$arguments293['arguments'] = NULL;
$arguments293['extensionName'] = NULL;
$arguments293['languageKey'] = NULL;
$arguments293['alternativeLanguageKeys'] = NULL;
$arguments293['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output286 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext)]);

$output286 .= '</th>
                        <th>';
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
$arguments295['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output286 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext)]);

$output286 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['key'] = NULL;
$arguments297['id'] = NULL;
$arguments297['default'] = NULL;
$arguments297['arguments'] = NULL;
$arguments297['extensionName'] = NULL;
$arguments297['languageKey'] = NULL;
$arguments297['alternativeLanguageKeys'] = NULL;
$arguments297['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output286 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext)]);

$output286 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['key'] = NULL;
$arguments299['id'] = NULL;
$arguments299['default'] = NULL;
$arguments299['arguments'] = NULL;
$arguments299['extensionName'] = NULL;
$arguments299['languageKey'] = NULL;
$arguments299['alternativeLanguageKeys'] = NULL;
$arguments299['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output286 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext)]);

$output286 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['key'] = NULL;
$arguments301['id'] = NULL;
$arguments301['default'] = NULL;
$arguments301['arguments'] = NULL;
$arguments301['extensionName'] = NULL;
$arguments301['languageKey'] = NULL;
$arguments301['alternativeLanguageKeys'] = NULL;
$arguments301['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output286 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext)]);

$output286 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['key'] = NULL;
$arguments303['id'] = NULL;
$arguments303['default'] = NULL;
$arguments303['arguments'] = NULL;
$arguments303['extensionName'] = NULL;
$arguments303['languageKey'] = NULL;
$arguments303['alternativeLanguageKeys'] = NULL;
$arguments303['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output286 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext)]);

$output286 .= '</th>
                        <th class="col-control"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments309 = array();
$arguments309['section'] = NULL;
$arguments309['partial'] = NULL;
$arguments309['delegate'] = NULL;
$arguments309['renderable'] = NULL;
$arguments309['arguments'] = array (
);
$arguments309['optional'] = false;
$arguments309['default'] = NULL;
$arguments309['contentAs'] = NULL;
$arguments309['debug'] = true;
$arguments309['section'] = 'refLineRow';
// Rendering Array
$array311 = array();
$array312 = array (
);$array311['line'] = $renderingContext->getVariableProvider()->getByPath('refLine', $array312);
$array313 = array (
);$array311['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array313);
$arguments309['arguments'] = $array311;

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '
                    ';
return $output308;
};
$arguments305 = array();
$arguments305['each'] = NULL;
$arguments305['as'] = NULL;
$arguments305['key'] = NULL;
$arguments305['reverse'] = false;
$arguments305['iteration'] = NULL;
$array307 = array (
);$arguments305['each'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array307);
$arguments305['as'] = 'refLine';

$output286 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output286 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output286;
};
$arguments281 = array();
$arguments281['then'] = NULL;
$arguments281['else'] = NULL;
$arguments281['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['0'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array284);

$expression285 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments281['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression285(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array283)
					),
					$renderingContext
				);
$arguments281['__thenClosure'] = $renderChildrenClosure282;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output170 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
            <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['key'] = NULL;
$arguments320['id'] = NULL;
$arguments320['default'] = NULL;
$arguments320['arguments'] = NULL;
$arguments320['extensionName'] = NULL;
$arguments320['languageKey'] = NULL;
$arguments320['alternativeLanguageKeys'] = NULL;
$arguments320['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesFromThisItem';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext)]);

$output319 .= '</h3>
            <div class="table-fit">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="col-icon"></th>
                        <th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments322 = array();
$arguments322['key'] = NULL;
$arguments322['id'] = NULL;
$arguments322['default'] = NULL;
$arguments322['arguments'] = NULL;
$arguments322['extensionName'] = NULL;
$arguments322['languageKey'] = NULL;
$arguments322['alternativeLanguageKeys'] = NULL;
$arguments322['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext)]);

$output319 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['key'] = NULL;
$arguments324['id'] = NULL;
$arguments324['default'] = NULL;
$arguments324['arguments'] = NULL;
$arguments324['extensionName'] = NULL;
$arguments324['languageKey'] = NULL;
$arguments324['alternativeLanguageKeys'] = NULL;
$arguments324['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext)]);

$output319 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['key'] = NULL;
$arguments326['id'] = NULL;
$arguments326['default'] = NULL;
$arguments326['arguments'] = NULL;
$arguments326['extensionName'] = NULL;
$arguments326['languageKey'] = NULL;
$arguments326['alternativeLanguageKeys'] = NULL;
$arguments326['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext)]);

$output319 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['key'] = NULL;
$arguments328['id'] = NULL;
$arguments328['default'] = NULL;
$arguments328['arguments'] = NULL;
$arguments328['extensionName'] = NULL;
$arguments328['languageKey'] = NULL;
$arguments328['alternativeLanguageKeys'] = NULL;
$arguments328['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext)]);

$output319 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments330 = array();
$arguments330['key'] = NULL;
$arguments330['id'] = NULL;
$arguments330['default'] = NULL;
$arguments330['arguments'] = NULL;
$arguments330['extensionName'] = NULL;
$arguments330['languageKey'] = NULL;
$arguments330['alternativeLanguageKeys'] = NULL;
$arguments330['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext)]);

$output319 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['key'] = NULL;
$arguments332['id'] = NULL;
$arguments332['default'] = NULL;
$arguments332['arguments'] = NULL;
$arguments332['extensionName'] = NULL;
$arguments332['languageKey'] = NULL;
$arguments332['alternativeLanguageKeys'] = NULL;
$arguments332['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext)]);

$output319 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['key'] = NULL;
$arguments334['id'] = NULL;
$arguments334['default'] = NULL;
$arguments334['arguments'] = NULL;
$arguments334['extensionName'] = NULL;
$arguments334['languageKey'] = NULL;
$arguments334['alternativeLanguageKeys'] = NULL;
$arguments334['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext)]);

$output319 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments336 = array();
$arguments336['key'] = NULL;
$arguments336['id'] = NULL;
$arguments336['default'] = NULL;
$arguments336['arguments'] = NULL;
$arguments336['extensionName'] = NULL;
$arguments336['languageKey'] = NULL;
$arguments336['alternativeLanguageKeys'] = NULL;
$arguments336['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext)]);

$output319 .= '</th>
                        <th>';
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
$arguments338['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.refString';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext)]);

$output319 .= '</th>
                        <th class="col-control"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments344 = array();
$arguments344['section'] = NULL;
$arguments344['partial'] = NULL;
$arguments344['delegate'] = NULL;
$arguments344['renderable'] = NULL;
$arguments344['arguments'] = array (
);
$arguments344['optional'] = false;
$arguments344['default'] = NULL;
$arguments344['contentAs'] = NULL;
$arguments344['debug'] = true;
$arguments344['section'] = 'refFromLineRow';
// Rendering Array
$array346 = array();
$array347 = array (
);$array346['line'] = $renderingContext->getVariableProvider()->getByPath('refFromLine', $array347);
$array348 = array (
);$array346['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array348);
$arguments344['arguments'] = $array346;

$output343 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output343 .= '
                    ';
return $output343;
};
$arguments340 = array();
$arguments340['each'] = NULL;
$arguments340['as'] = NULL;
$arguments340['key'] = NULL;
$arguments340['reverse'] = false;
$arguments340['iteration'] = NULL;
$array342 = array (
);$arguments340['each'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array342);
$arguments340['as'] = 'refFromLine';

$output319 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output319 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output319;
};
$arguments314 = array();
$arguments314['then'] = NULL;
$arguments314['else'] = NULL;
$arguments314['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array316 = array();
$array317 = array (
);$array316['0'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array317);

$expression318 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments314['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression318(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array316)
					),
					$renderingContext
				);
$arguments314['__thenClosure'] = $renderChildrenClosure315;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output170 .= '
    ';
return $output170;
};
$arguments168['__elseClosures'][] = function() use ($renderingContext, $self) {
$output349 = '';

$output349 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments352 = array();
$arguments352['key'] = NULL;
$arguments352['id'] = NULL;
$arguments352['default'] = NULL;
$arguments352['arguments'] = NULL;
$arguments352['extensionName'] = NULL;
$arguments352['languageKey'] = NULL;
$arguments352['alternativeLanguageKeys'] = NULL;
$arguments352['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.noEditPermission';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext)]);
};
$arguments350 = array();
$arguments350['message'] = NULL;
$arguments350['title'] = NULL;
$arguments350['state'] = -2;
$arguments350['iconName'] = NULL;
$arguments350['disableIcon'] = false;
$arguments350['state'] = 2;
$renderChildrenClosure351 = ($arguments350['message'] !== null) ? function() use ($arguments350) { return $arguments350['message']; } : $renderChildrenClosure351;
$output349 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output349 .= '
    ';
return $output349;
};

$output167 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output548 = '';

$output548 .= '
    <tr>
        <th class="col-nowrap">';
$array549 = array (
);
$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldLabel', $array549)]);

$output548 .= '</th>
        <td>';
$array550 = array (
);
$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldValue', $array550)]);

$output548 .= '</td>
    </tr>
';
return $output548;
};
$arguments546 = array();
$arguments546['name'] = NULL;
$arguments546['name'] = 'fieldRow';

$output167 .= '';

$output167 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
$output553 = '';

$output553 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
$output583 = '';

$output583 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
                <td class="col-icon"><a href="';
$array587 = array (
);
$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array587)]);

$output586 .= '" title="id=';
$array588 = array (
);
$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array588)]);

$output586 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
$array591 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array591);
};
$arguments589 = array();
$arguments589['value'] = NULL;

$output586 .= isset($arguments589['value']) ? $arguments589['value'] : $renderChildrenClosure590();

$output586 .= '</a></td>
                <td class="col-title"><a href="';
$array592 = array (
);
$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array592)]);

$output586 .= '" title="[id=';
$array593 = array (
);
$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array593)]);

$output586 .= '] ';
$array594 = array (
);
$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array594)]);

$output586 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure596 = function() use ($renderingContext, $self) {
$array598 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array598)]);
};
$arguments595 = array();
$arguments595['maxCharacters'] = NULL;
$arguments595['append'] = '&hellip;';
$arguments595['respectWordBoundaries'] = true;
$arguments595['respectHtml'] = true;
$array597 = array (
);$arguments595['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array597);

$output586 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments595, $renderChildrenClosure596, $renderingContext);

$output586 .= '</a></td>
                <td>';
$array599 = array (
);
$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array599)]);

$output586 .= '</td>
                <td><span title="';
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
$arguments600['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext)]);

$output586 .= ': ';
$array602 = array (
);
$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array602)]);

$output586 .= ' (uid=';
$array603 = array (
);
$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array603)]);

$output586 .= ')">
                        ';
$array604 = array (
);
$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array604)]);

$output586 .= '
                    </span></td>
            ';
return $output586;
};
$arguments584 = array();

$output583 .= '';

$output583 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
$output607 = '';

$output607 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
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
$arguments608['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext)]);

$output607 .= ' (uid=';
$array610 = array (
);
$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array610)]);

$output607 .= '</td>
                <td>';
$array611 = array (
);
$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array611)]);

$output607 .= '</td>
                <td></td>
            ';
return $output607;
};
$arguments605 = array();
$arguments605['if'] = NULL;

$output583 .= '';

$output583 .= '
        ';
return $output583;
};
$arguments554 = array();
$arguments554['then'] = NULL;
$arguments554['else'] = NULL;
$arguments554['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array580 = array();
$array581 = array (
);$array580['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array581);

$expression582 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments554['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression582(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array580)
					),
					$renderingContext
				);
$arguments554['__thenClosure'] = function() use ($renderingContext, $self) {
$output556 = '';

$output556 .= '
                <td class="col-icon"><a href="';
$array557 = array (
);
$output556 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array557)]);

$output556 .= '" title="id=';
$array558 = array (
);
$output556 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array558)]);

$output556 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
$array561 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array561);
};
$arguments559 = array();
$arguments559['value'] = NULL;

$output556 .= isset($arguments559['value']) ? $arguments559['value'] : $renderChildrenClosure560();

$output556 .= '</a></td>
                <td class="col-title"><a href="';
$array562 = array (
);
$output556 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array562)]);

$output556 .= '" title="[id=';
$array563 = array (
);
$output556 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array563)]);

$output556 .= '] ';
$array564 = array (
);
$output556 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array564)]);

$output556 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
$array568 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array568)]);
};
$arguments565 = array();
$arguments565['maxCharacters'] = NULL;
$arguments565['append'] = '&hellip;';
$arguments565['respectWordBoundaries'] = true;
$arguments565['respectHtml'] = true;
$array567 = array (
);$arguments565['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array567);

$output556 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output556 .= '</a></td>
                <td>';
$array569 = array (
);
$output556 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array569)]);

$output556 .= '</td>
                <td><span title="';
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
$arguments570['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output556 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext)]);

$output556 .= ': ';
$array572 = array (
);
$output556 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array572)]);

$output556 .= ' (uid=';
$array573 = array (
);
$output556 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array573)]);

$output556 .= ')">
                        ';
$array574 = array (
);
$output556 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array574)]);

$output556 .= '
                    </span></td>
            ';
return $output556;
};
$arguments554['__elseClosures'][] = function() use ($renderingContext, $self) {
$output575 = '';

$output575 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
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
$arguments576['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output575 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments576, $renderChildrenClosure577, $renderingContext)]);

$output575 .= ' (uid=';
$array578 = array (
);
$output575 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array578)]);

$output575 .= '</td>
                <td>';
$array579 = array (
);
$output575 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array579)]);

$output575 .= '</td>
                <td></td>
            ';
return $output575;
};

$output553 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext);

$output553 .= '
        <td title="';
$array612 = array (
);
$output553 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array612)]);

$output553 .= '" class="col-responsive">';
$array613 = array (
);
$output553 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array613)]);

$output553 .= '</td>
        <td>';
$array614 = array (
);
$output553 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array614)]);

$output553 .= '</td>
        <td>';
$array615 = array (
);
$output553 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array615)]);

$output553 .= '</td>
        <td>';
$array616 = array (
);
$output553 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array616)]);

$output553 .= '</td>
        <td>';
$array617 = array (
);
$output553 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array617)]);

$output553 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments618 = array();
$arguments618['section'] = NULL;
$arguments618['partial'] = NULL;
$arguments618['delegate'] = NULL;
$arguments618['renderable'] = NULL;
$arguments618['arguments'] = array (
);
$arguments618['optional'] = false;
$arguments618['default'] = NULL;
$arguments618['contentAs'] = NULL;
$arguments618['debug'] = true;
$arguments618['section'] = 'action';
// Rendering Array
$array620 = array();
$array621 = array (
);$array620['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array621);
$arguments618['arguments'] = $array620;

$output553 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments618, $renderChildrenClosure619, $renderingContext);

$output553 .= '
        </td>
    </tr>
';
return $output553;
};
$arguments551 = array();
$arguments551['name'] = NULL;
$arguments551['name'] = 'refLineRow';

$output167 .= '';

$output167 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
$output624 = '';

$output624 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
$output650 = '';

$output650 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
$output653 = '';

$output653 .= '
                <td class="col-icon"><a href="';
$array654 = array (
);
$output653 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array654)]);

$output653 .= '" title="id=';
$array655 = array (
);
$output653 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array655)]);

$output653 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure657 = function() use ($renderingContext, $self) {
$array658 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array658);
};
$arguments656 = array();
$arguments656['value'] = NULL;

$output653 .= isset($arguments656['value']) ? $arguments656['value'] : $renderChildrenClosure657();

$output653 .= '</a></td>
                <td class="col-title"><a href="';
$array659 = array (
);
$output653 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array659)]);

$output653 .= '" title="[id=';
$array660 = array (
);
$output653 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array660)]);

$output653 .= '] ';
$array661 = array (
);
$output653 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array661)]);

$output653 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$array665 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array665)]);
};
$arguments662 = array();
$arguments662['maxCharacters'] = NULL;
$arguments662['append'] = '&hellip;';
$arguments662['respectWordBoundaries'] = true;
$arguments662['respectHtml'] = true;
$array664 = array (
);$arguments662['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array664);

$output653 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments662, $renderChildrenClosure663, $renderingContext);

$output653 .= '</a></td>
                <td>';
$array666 = array (
);
$output653 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array666)]);

$output653 .= '</td>
                <td>';
$array667 = array (
);
$output653 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array667)]);

$output653 .= '</td>
            ';
return $output653;
};
$arguments651 = array();

$output650 .= '';

$output650 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
$output670 = '';

$output670 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments671 = array();
$arguments671['key'] = NULL;
$arguments671['id'] = NULL;
$arguments671['default'] = NULL;
$arguments671['arguments'] = NULL;
$arguments671['extensionName'] = NULL;
$arguments671['languageKey'] = NULL;
$arguments671['alternativeLanguageKeys'] = NULL;
$arguments671['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output670 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext)]);

$output670 .= ' (uid=';
$array673 = array (
);
$output670 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array673)]);

$output670 .= '</td>
                <td>';
$array674 = array (
);
$output670 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array674)]);

$output670 .= '</td>
                <td></td>
            ';
return $output670;
};
$arguments668 = array();
$arguments668['if'] = NULL;

$output650 .= '';

$output650 .= '
        ';
return $output650;
};
$arguments625 = array();
$arguments625['then'] = NULL;
$arguments625['else'] = NULL;
$arguments625['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array647 = array();
$array648 = array (
);$array647['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array648);

$expression649 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments625['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression649(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array647)
					),
					$renderingContext
				);
$arguments625['__thenClosure'] = function() use ($renderingContext, $self) {
$output627 = '';

$output627 .= '
                <td class="col-icon"><a href="';
$array628 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array628)]);

$output627 .= '" title="id=';
$array629 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array629)]);

$output627 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
$array632 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array632);
};
$arguments630 = array();
$arguments630['value'] = NULL;

$output627 .= isset($arguments630['value']) ? $arguments630['value'] : $renderChildrenClosure631();

$output627 .= '</a></td>
                <td class="col-title"><a href="';
$array633 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array633)]);

$output627 .= '" title="[id=';
$array634 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array634)]);

$output627 .= '] ';
$array635 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array635)]);

$output627 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$array639 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array639)]);
};
$arguments636 = array();
$arguments636['maxCharacters'] = NULL;
$arguments636['append'] = '&hellip;';
$arguments636['respectWordBoundaries'] = true;
$arguments636['respectHtml'] = true;
$array638 = array (
);$arguments636['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array638);

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments636, $renderChildrenClosure637, $renderingContext);

$output627 .= '</a></td>
                <td>';
$array640 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array640)]);

$output627 .= '</td>
                <td>';
$array641 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array641)]);

$output627 .= '</td>
            ';
return $output627;
};
$arguments625['__elseClosures'][] = function() use ($renderingContext, $self) {
$output642 = '';

$output642 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['key'] = NULL;
$arguments643['id'] = NULL;
$arguments643['default'] = NULL;
$arguments643['arguments'] = NULL;
$arguments643['extensionName'] = NULL;
$arguments643['languageKey'] = NULL;
$arguments643['alternativeLanguageKeys'] = NULL;
$arguments643['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output642 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext)]);

$output642 .= ' (uid=';
$array645 = array (
);
$output642 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array645)]);

$output642 .= '</td>
                <td>';
$array646 = array (
);
$output642 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array646)]);

$output642 .= '</td>
                <td></td>
            ';
return $output642;
};

$output624 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments625, $renderChildrenClosure626, $renderingContext);

$output624 .= '
        <td title="';
$array675 = array (
);
$output624 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array675)]);

$output624 .= '" class="col-responsive">';
$array676 = array (
);
$output624 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array676)]);

$output624 .= '</td>
        <td>';
$array677 = array (
);
$output624 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array677)]);

$output624 .= '</td>
        <td>';
$array678 = array (
);
$output624 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array678)]);

$output624 .= '</td>
        <td>';
$array679 = array (
);
$output624 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array679)]);

$output624 .= '</td>
        <td>';
$array680 = array (
);
$output624 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array680)]);

$output624 .= '</td>
        <td>';
$array681 = array (
);
$output624 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_string', $array681)]);

$output624 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments682 = array();
$arguments682['section'] = NULL;
$arguments682['partial'] = NULL;
$arguments682['delegate'] = NULL;
$arguments682['renderable'] = NULL;
$arguments682['arguments'] = array (
);
$arguments682['optional'] = false;
$arguments682['default'] = NULL;
$arguments682['contentAs'] = NULL;
$arguments682['debug'] = true;
$arguments682['section'] = 'action';
// Rendering Array
$array684 = array();
$array685 = array (
);$array684['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array685);
$arguments682['arguments'] = $array684;

$output624 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments682, $renderChildrenClosure683, $renderingContext);

$output624 .= '
        </td>
    </tr>
';
return $output624;
};
$arguments622 = array();
$arguments622['name'] = NULL;
$arguments622['name'] = 'refFromLineRow';

$output167 .= '';

$output167 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
$output688 = '';

$output688 .= '
    <div class="btn-group" role="group">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
$output694 = '';

$output694 .= '
            <a class="btn btn-default btn-sm" href="#" onclick="';
$array695 = array (
);
$output694 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.viewOnClick', $array695)]);

$output694 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure697 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments696 = array();
$arguments696['key'] = NULL;
$arguments696['id'] = NULL;
$arguments696['default'] = NULL;
$arguments696['arguments'] = NULL;
$arguments696['extensionName'] = NULL;
$arguments696['languageKey'] = NULL;
$arguments696['alternativeLanguageKeys'] = NULL;
$arguments696['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showPage';

$output694 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments696, $renderChildrenClosure697, $renderingContext)]);

$output694 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure699 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments698 = array();
$arguments698['identifier'] = NULL;
$arguments698['size'] = 'small';
$arguments698['overlay'] = NULL;
$arguments698['state'] = 'default';
$arguments698['alternativeMarkupIdentifier'] = NULL;
$arguments698['identifier'] = 'actions-document-view';
$arguments698['size'] = 'small';

$output694 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments698, $renderChildrenClosure699, $renderingContext);

$output694 .= '
            </a>
        ';
return $output694;
};
$arguments689 = array();
$arguments689['then'] = NULL;
$arguments689['else'] = NULL;
$arguments689['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array691 = array();
$array692 = array (
);$array691['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array692);

$expression693 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments689['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression693(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array691)
					),
					$renderingContext
				);
$arguments689['__thenClosure'] = $renderChildrenClosure690;

$output688 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext);

$output688 .= '
        <a class="btn btn-default btn-sm" href="';
$array700 = array (
);
$output688 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordEditUrl', $array700)]);

$output688 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments701 = array();
$arguments701['key'] = NULL;
$arguments701['id'] = NULL;
$arguments701['default'] = NULL;
$arguments701['arguments'] = NULL;
$arguments701['extensionName'] = NULL;
$arguments701['languageKey'] = NULL;
$arguments701['alternativeLanguageKeys'] = NULL;
$arguments701['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.edit';

$output688 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments701, $renderChildrenClosure702, $renderingContext)]);

$output688 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure704 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments703 = array();
$arguments703['identifier'] = NULL;
$arguments703['size'] = 'small';
$arguments703['overlay'] = NULL;
$arguments703['state'] = 'default';
$arguments703['alternativeMarkupIdentifier'] = NULL;
$arguments703['identifier'] = 'actions-open';
$arguments703['size'] = 'small';

$output688 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments703, $renderChildrenClosure704, $renderingContext);

$output688 .= '
        </a>
    </div>
    <div class="btn-group" role="group">
        <a class="btn btn-default btn-sm" href="';
$array705 = array (
);
$output688 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordHistoryUrl', $array705)]);

$output688 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure707 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments706 = array();
$arguments706['key'] = NULL;
$arguments706['id'] = NULL;
$arguments706['default'] = NULL;
$arguments706['arguments'] = NULL;
$arguments706['extensionName'] = NULL;
$arguments706['languageKey'] = NULL;
$arguments706['alternativeLanguageKeys'] = NULL;
$arguments706['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.history';

$output688 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments706, $renderChildrenClosure707, $renderingContext)]);

$output688 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments708 = array();
$arguments708['identifier'] = NULL;
$arguments708['size'] = 'small';
$arguments708['overlay'] = NULL;
$arguments708['state'] = 'default';
$arguments708['alternativeMarkupIdentifier'] = NULL;
$arguments708['identifier'] = 'actions-document-history-open';
$arguments708['size'] = 'small';

$output688 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments708, $renderChildrenClosure709, $renderingContext);

$output688 .= '
        </a>
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure711 = function() use ($renderingContext, $self) {
$output715 = '';

$output715 .= '
        <div class="btn-group" role="group">
            <a class="btn btn-default btn-sm" href="';
$array716 = array (
);
$output715 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array716)]);

$output715 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure718 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments717 = array();
$arguments717['key'] = NULL;
$arguments717['id'] = NULL;
$arguments717['default'] = NULL;
$arguments717['arguments'] = NULL;
$arguments717['extensionName'] = NULL;
$arguments717['languageKey'] = NULL;
$arguments717['alternativeLanguageKeys'] = NULL;
$arguments717['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showList';

$output715 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments717, $renderChildrenClosure718, $renderingContext)]);

$output715 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure720 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments719 = array();
$arguments719['identifier'] = NULL;
$arguments719['size'] = 'small';
$arguments719['overlay'] = NULL;
$arguments719['state'] = 'default';
$arguments719['alternativeMarkupIdentifier'] = NULL;
$arguments719['identifier'] = 'actions-system-list-open';
$arguments719['size'] = 'small';

$output715 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments719, $renderChildrenClosure720, $renderingContext);

$output715 .= '
            </a>
        </div>
    ';
return $output715;
};
$arguments710 = array();
$arguments710['then'] = NULL;
$arguments710['else'] = NULL;
$arguments710['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array712 = array();
$array713 = array (
);$array712['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array713);

$expression714 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments710['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression714(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array712)
					),
					$renderingContext
				);
$arguments710['__thenClosure'] = $renderChildrenClosure711;

$output688 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments710, $renderChildrenClosure711, $renderingContext);

$output688 .= '
';
return $output688;
};
$arguments686 = array();
$arguments686['name'] = NULL;
$arguments686['name'] = 'action';

$output167 .= '';

$output167 .= '
';

return $output167;
}


}
#