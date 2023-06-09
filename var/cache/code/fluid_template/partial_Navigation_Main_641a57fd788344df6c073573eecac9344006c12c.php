<?php

class partial_Navigation_Main_641a57fd788344df6c073573eecac9344006c12c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section MainNavigation
 */
public function section_199fd3cbc502fb014cf96b9d63b613e89d1ba161(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments168 = array();

$output167 .= '';

$output167 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['then'] = NULL;
$arguments173['else'] = NULL;
$arguments173['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array175 = array();
$array176 = array (
);$array175['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array176);

$expression177 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments173['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)
					),
					$renderingContext
				);
$arguments173['then'] = ' active';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['then'] = NULL;
$arguments178['else'] = NULL;
$arguments178['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array180 = array();
$array181 = array (
);$array180['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array181);

$expression182 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments178['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array180)
					),
					$renderingContext
				);
$arguments178['then'] = ' dropdown dropdown-hover';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output172 .= '">
                            <a href="';
$array183 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array183)]);

$output172 .= '" id="nav-item-';
$array184 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array184)]);

$output172 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$arguments185['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array188);

$expression189 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments185['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression189(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);
$arguments185['then'] = ' dropdown-toggle';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output172 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array192 = array();
$array193 = array (
);$array192['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array193);

$expression194 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments190['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression194(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);
$output195 = '';

$output195 .= ' target="';
$array196 = array (
);
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array196)]);

$output195 .= '"';
$arguments190['then'] = $output195;

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['then'] = NULL;
$arguments197['else'] = NULL;
$arguments197['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array200);
$array199['1'] = ' == "_blank"';

$expression201 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments197['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression201(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments197['then'] = ' rel="noopener noreferrer"';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output172 .= ' title="';
$array202 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array202)]);

$output172 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['then'] = NULL;
$arguments203['else'] = NULL;
$arguments203['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array205 = array();
$array206 = array (
);$array205['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array206);

$expression207 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments203['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression207(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array205)
					),
					$renderingContext
				);
$arguments203['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output172 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['icon'] = NULL;
$arguments215['height'] = NULL;
$arguments215['width'] = NULL;
$array217 = array (
);$arguments215['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array217);
$array218 = array (
);$arguments215['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array218);
$array219 = array (
);$arguments215['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array219);

$output214 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '
                                    </span>
                                ';
return $output214;
};
$arguments208 = array();
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array210 = array();
$array211 = array (
);$array210['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array211);
$array210['1'] = ' && ';
$array212 = array (
);$array210['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array212);

$expression213 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)
					),
					$renderingContext
				);
$arguments208['__thenClosure'] = $renderChildrenClosure209;

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output172 .= '
                                <span class="nav-link-text">';
$array220 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array220)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array224 = array (
);$array223['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array224);

$expression225 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);
$arguments221['__thenClosure'] = $renderChildrenClosure222;

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output172 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array232 = array (
);
$output231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array232)]);

$output231 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments281 = array();

$output280 .= '';

$output280 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
                                                <li>
                                                    <a href="';
$array286 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array286)]);

$output285 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['then'] = NULL;
$arguments287['else'] = NULL;
$arguments287['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array290);

$expression291 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments287['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression291(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments287['then'] = ' active';

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output285 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['then'] = NULL;
$arguments292['else'] = NULL;
$arguments292['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array295);

$expression296 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments292['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression296(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array294)
					),
					$renderingContext
				);
$output297 = '';

$output297 .= ' target="';
$array298 = array (
);
$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array298)]);

$output297 .= '"';
$arguments292['then'] = $output297;

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$arguments299['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array302);
$array301['1'] = ' == "_blank"';

$expression303 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments299['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression303(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
$arguments299['then'] = ' rel="noopener noreferrer"';

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output285 .= ' title="';
$array304 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array304)]);

$output285 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['icon'] = NULL;
$arguments312['height'] = NULL;
$arguments312['width'] = NULL;
$array314 = array (
);$arguments312['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array314);
$array315 = array (
);$arguments312['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array315);
$array316 = array (
);$arguments312['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array316);

$output311 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '
                                                            </span>
                                                        ';
return $output311;
};
$arguments305 = array();
$arguments305['then'] = NULL;
$arguments305['else'] = NULL;
$arguments305['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array307 = array();
$array308 = array (
);$array307['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array308);
$array307['1'] = ' && ';
$array309 = array (
);$array307['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array309);

$expression310 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments305['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression310(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array307)
					),
					$renderingContext
				);
$arguments305['__thenClosure'] = $renderChildrenClosure306;

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output285 .= '
                                                        <span class="dropdown-text">';
$array317 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array317)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments318 = array();
$arguments318['then'] = NULL;
$arguments318['else'] = NULL;
$arguments318['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array320 = array();
$array321 = array (
);$array320['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array321);

$expression322 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments318['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression322(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array320)
					),
					$renderingContext
				);
$arguments318['__thenClosure'] = $renderChildrenClosure319;

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output285 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output285;
};
$arguments283 = array();
$arguments283['if'] = NULL;

$output280 .= '';

$output280 .= '
                                        ';
return $output280;
};
$arguments237 = array();
$arguments237['then'] = NULL;
$arguments237['else'] = NULL;
$arguments237['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array278);

$expression279 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments237['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments237['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments237['__elseClosures'][] = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
                                                <li>
                                                    <a href="';
$array240 = array (
);
$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array240)]);

$output239 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['then'] = NULL;
$arguments241['else'] = NULL;
$arguments241['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array243 = array();
$array244 = array (
);$array243['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array244);

$expression245 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments241['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression245(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array243)
					),
					$renderingContext
				);
$arguments241['then'] = ' active';

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output239 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array249);

$expression250 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$output251 = '';

$output251 .= ' target="';
$array252 = array (
);
$output251 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array252)]);

$output251 .= '"';
$arguments246['then'] = $output251;

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array256);
$array255['1'] = ' == "_blank"';

$expression257 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);
$arguments253['then'] = ' rel="noopener noreferrer"';

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output239 .= ' title="';
$array258 = array (
);
$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array258)]);

$output239 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['icon'] = NULL;
$arguments266['height'] = NULL;
$arguments266['width'] = NULL;
$array268 = array (
);$arguments266['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array268);
$array269 = array (
);$arguments266['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array269);
$array270 = array (
);$arguments266['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array270);

$output265 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output265 .= '
                                                            </span>
                                                        ';
return $output265;
};
$arguments259 = array();
$arguments259['then'] = NULL;
$arguments259['else'] = NULL;
$arguments259['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array262);
$array261['1'] = ' && ';
$array263 = array (
);$array261['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array263);

$expression264 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments259['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments259['__thenClosure'] = $renderChildrenClosure260;

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output239 .= '
                                                        <span class="dropdown-text">';
$array271 = array (
);
$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array271)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments272 = array();
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$arguments272['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array275);

$expression276 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments272['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$arguments272['__thenClosure'] = $renderChildrenClosure273;

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output239 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output239;
};

$output236 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '
                                    ';
return $output236;
};
$arguments233 = array();
$arguments233['each'] = NULL;
$arguments233['as'] = NULL;
$arguments233['key'] = NULL;
$arguments233['reverse'] = false;
$arguments233['iteration'] = NULL;
$array235 = array (
);$arguments233['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array235);
$arguments233['as'] = 'child';

$output231 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output231 .= '
                                </ul>
                            ';
return $output231;
};
$arguments226 = array();
$arguments226['then'] = NULL;
$arguments226['else'] = NULL;
$arguments226['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array228 = array();
$array229 = array (
);$array228['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array229);

$expression230 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments226['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression230(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);
$arguments226['__thenClosure'] = $renderChildrenClosure227;

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output172 .= '
                        </li>
                    ';
return $output172;
};
$arguments170 = array();
$arguments170['if'] = NULL;

$output167 .= '';

$output167 .= '
                ';
return $output167;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array165);

$expression166 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = ' active';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['then'] = ' dropdown dropdown-hover';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '">
                            <a href="';
$array24 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array24)]);

$output13 .= '" id="nav-item-';
$array25 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array25)]);

$output13 .= '" class="nav-link';
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
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = ' dropdown-toggle';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$output36 = '';

$output36 .= ' target="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array37)]);

$output36 .= '"';
$arguments31['then'] = $output36;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array41);
$array40['1'] = ' == "_blank"';

$expression42 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments38['then'] = ' rel="noopener noreferrer"';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output13 .= ' title="';
$array43 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array43)]);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array47);

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output13 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['icon'] = NULL;
$arguments56['height'] = NULL;
$arguments56['width'] = NULL;
$array58 = array (
);$arguments56['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array58);
$array59 = array (
);$arguments56['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array59);
$array60 = array (
);$arguments56['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array60);

$output55 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                                    </span>
                                ';
return $output55;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array52);
$array51['1'] = ' && ';
$array53 = array (
);$array51['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array53);

$expression54 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['__thenClosure'] = $renderChildrenClosure50;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output13 .= '
                                <span class="nav-link-text">';
$array61 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array61)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output13 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array73 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array73)]);

$output72 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments122 = array();

$output121 .= '';

$output121 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                                                <li>
                                                    <a href="';
$array127 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array127)]);

$output126 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$arguments128['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array131);

$expression132 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments128['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);
$arguments128['then'] = ' active';

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output126 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$arguments133['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array136);

$expression137 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments133['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
$output138 = '';

$output138 .= ' target="';
$array139 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array139)]);

$output138 .= '"';
$arguments133['then'] = $output138;

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
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
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array143);
$array142['1'] = ' == "_blank"';

$expression144 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['then'] = ' rel="noopener noreferrer"';

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output126 .= ' title="';
$array145 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array145)]);

$output126 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['icon'] = NULL;
$arguments153['height'] = NULL;
$arguments153['width'] = NULL;
$array155 = array (
);$arguments153['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array155);
$array156 = array (
);$arguments153['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array156);
$array157 = array (
);$arguments153['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array157);

$output152 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                                                            </span>
                                                        ';
return $output152;
};
$arguments146 = array();
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$arguments146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array149 = array (
);$array148['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array149);
$array148['1'] = ' && ';
$array150 = array (
);$array148['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array150);

$expression151 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)
					),
					$renderingContext
				);
$arguments146['__thenClosure'] = $renderChildrenClosure147;

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output126 .= '
                                                        <span class="dropdown-text">';
$array158 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array158)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments159 = array();
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array162);

$expression163 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments159['__thenClosure'] = $renderChildrenClosure160;

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output126 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output126;
};
$arguments124 = array();
$arguments124['if'] = NULL;

$output121 .= '';

$output121 .= '
                                        ';
return $output121;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments78['__elseClosures'][] = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
                                                <li>
                                                    <a href="';
$array81 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array81)]);

$output80 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['then'] = ' active';

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output80 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array90);

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$output92 = '';

$output92 .= ' target="';
$array93 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array93)]);

$output92 .= '"';
$arguments87['then'] = $output92;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
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
);$array96['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array97);
$array96['1'] = ' == "_blank"';

$expression98 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
$arguments94['then'] = ' rel="noopener noreferrer"';

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output80 .= ' title="';
$array99 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array99)]);

$output80 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['icon'] = NULL;
$arguments107['height'] = NULL;
$arguments107['width'] = NULL;
$array109 = array (
);$arguments107['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array109);
$array110 = array (
);$arguments107['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array110);
$array111 = array (
);$arguments107['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array111);

$output106 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                                                            </span>
                                                        ';
return $output106;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array103);
$array102['1'] = ' && ';
$array104 = array (
);$array102['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array104);

$expression105 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments100['__thenClosure'] = $renderChildrenClosure101;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output80 .= '
                                                        <span class="dropdown-text">';
$array112 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array112)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments113 = array();
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array116);

$expression117 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments113['__thenClosure'] = $renderChildrenClosure114;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output80 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output80;
};

$output77 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
                                    ';
return $output77;
};
$arguments74 = array();
$arguments74['each'] = NULL;
$arguments74['as'] = NULL;
$arguments74['key'] = NULL;
$arguments74['reverse'] = false;
$arguments74['iteration'] = NULL;
$array76 = array (
);$arguments74['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array76);
$arguments74['as'] = 'child';

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output72 .= '
                                </ul>
                            ';
return $output72;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = $renderChildrenClosure68;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output13 .= '
                        </li>
                    ';
return $output13;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array9);
$arguments7['as'] = 'item';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        </ul>
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array4);

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
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output323 = '';

$output323 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= 'bp-page-header navbar navbar-mainnavigation navbar-';
$array327 = array (
);
$output326 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.style', $array327);
return $output326;
};
$arguments324 = array();
$arguments324['value'] = NULL;
$arguments324['name'] = NULL;
$arguments324['name'] = 'headerClass';
$renderChildrenClosure325 = ($arguments324['value'] !== null) ? function() use ($arguments324) { return $arguments324['value']; } : $renderChildrenClosure325;
$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext)]);

$output323 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$output330 = '';
$array331 = array (
);
$output330 .= $renderingContext->getVariableProvider()->getByPath('headerClass', $array331);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['then'] = NULL;
$arguments332['else'] = NULL;
$arguments332['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array334 = array();
$array335 = array (
);$array334['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array335);

$expression336 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments332['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array334)
					),
					$renderingContext
				);
$arguments332['then'] = ' navbar-has-image';

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);
return $output330;
};
$arguments328 = array();
$arguments328['value'] = NULL;
$arguments328['name'] = NULL;
$arguments328['name'] = 'headerClass';
$renderChildrenClosure329 = ($arguments328['value'] !== null) ? function() use ($arguments328) { return $arguments328['value']; } : $renderChildrenClosure329;
$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext)]);

$output323 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$output339 = '';
$array340 = array (
);
$output339 .= $renderingContext->getVariableProvider()->getByPath('headerClass', $array340);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['then'] = NULL;
$arguments341['else'] = NULL;
$arguments341['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array343 = array();
$array344 = array (
);$array343['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array344);

$expression345 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments341['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression345(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array343)
					),
					$renderingContext
				);
$arguments341['else'] = ' navbar-top';
$output346 = '';

$output346 .= ' navbar-';
$array347 = array (
);
$output346 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array347);

$output346 .= ' navbar-fixed-';
$array348 = array (
);
$output346 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array348);
$arguments341['then'] = $output346;

$output339 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);
return $output339;
};
$arguments337 = array();
$arguments337['value'] = NULL;
$arguments337['name'] = NULL;
$arguments337['name'] = 'headerClass';
$renderChildrenClosure338 = ($arguments337['value'] !== null) ? function() use ($arguments337) { return $arguments337['value']; } : $renderChildrenClosure338;
$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext)]);

$output323 .= '
<header id="page-header" class="';
$array349 = array (
);
$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headerClass', $array349)]);

$output323 .= '">
    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$output390 = '';

$output390 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments391 = array();
$arguments391['src'] = '';
$arguments391['treatIdAsReference'] = false;
$arguments391['image'] = NULL;
$arguments391['crop'] = NULL;
$arguments391['cropVariant'] = 'default';
$arguments391['fileExtension'] = NULL;
$arguments391['width'] = NULL;
$arguments391['height'] = NULL;
$arguments391['minWidth'] = NULL;
$arguments391['minHeight'] = NULL;
$arguments391['maxWidth'] = NULL;
$arguments391['maxHeight'] = NULL;
$arguments391['absolute'] = false;
$array393 = array (
);$arguments391['image'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array393);

$output390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext)]);

$output390 .= '" alt="';
$array394 = array (
);
$output390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array394)]);

$output390 .= '" height="';
$array395 = array (
);
$output390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array395)]);

$output390 .= '" width="';
$array396 = array (
);
$output390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array396)]);

$output390 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$output402 = '';

$output402 .= '
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['src'] = '';
$arguments403['treatIdAsReference'] = false;
$arguments403['image'] = NULL;
$arguments403['crop'] = NULL;
$arguments403['cropVariant'] = 'default';
$arguments403['fileExtension'] = NULL;
$arguments403['width'] = NULL;
$arguments403['height'] = NULL;
$arguments403['minWidth'] = NULL;
$arguments403['minHeight'] = NULL;
$arguments403['maxWidth'] = NULL;
$arguments403['maxHeight'] = NULL;
$arguments403['absolute'] = false;
$array405 = array (
);$arguments403['image'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array405);

$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext)]);

$output402 .= '" alt="';
$array406 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array406)]);

$output402 .= '" height="';
$array407 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array407)]);

$output402 .= '" width="';
$array408 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array408)]);

$output402 .= '">
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
);$array399['0'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array400);

$expression401 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments397['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression401(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array399)
					),
					$renderingContext
				);
$arguments397['__thenClosure'] = $renderChildrenClosure398;

$output390 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output390 .= '
                ';
return $output390;
};
$arguments388 = array();

$output387 .= '';

$output387 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
                    <span>';
$array412 = array (
);
$output411 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array412)]);

$output411 .= '</span>
                ';
return $output411;
};
$arguments409 = array();
$arguments409['if'] = NULL;

$output387 .= '';

$output387 .= '
            ';
return $output387;
};
$arguments361 = array();
$arguments361['then'] = NULL;
$arguments361['else'] = NULL;
$arguments361['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array384 = array();
$array385 = array (
);$array384['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array385);

$expression386 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments361['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression386(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array384)
					),
					$renderingContext
				);
$arguments361['__thenClosure'] = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['src'] = '';
$arguments364['treatIdAsReference'] = false;
$arguments364['image'] = NULL;
$arguments364['crop'] = NULL;
$arguments364['cropVariant'] = 'default';
$arguments364['fileExtension'] = NULL;
$arguments364['width'] = NULL;
$arguments364['height'] = NULL;
$arguments364['minWidth'] = NULL;
$arguments364['minHeight'] = NULL;
$arguments364['maxWidth'] = NULL;
$arguments364['maxHeight'] = NULL;
$arguments364['absolute'] = false;
$array366 = array (
);$arguments364['image'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array366);

$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext)]);

$output363 .= '" alt="';
$array367 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array367)]);

$output363 .= '" height="';
$array368 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array368)]);

$output363 .= '" width="';
$array369 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array369)]);

$output363 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['src'] = '';
$arguments376['treatIdAsReference'] = false;
$arguments376['image'] = NULL;
$arguments376['crop'] = NULL;
$arguments376['cropVariant'] = 'default';
$arguments376['fileExtension'] = NULL;
$arguments376['width'] = NULL;
$arguments376['height'] = NULL;
$arguments376['minWidth'] = NULL;
$arguments376['minHeight'] = NULL;
$arguments376['maxWidth'] = NULL;
$arguments376['maxHeight'] = NULL;
$arguments376['absolute'] = false;
$array378 = array (
);$arguments376['image'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array378);

$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext)]);

$output375 .= '" alt="';
$array379 = array (
);
$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array379)]);

$output375 .= '" height="';
$array380 = array (
);
$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array380)]);

$output375 .= '" width="';
$array381 = array (
);
$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array381)]);

$output375 .= '">
                    ';
return $output375;
};
$arguments370 = array();
$arguments370['then'] = NULL;
$arguments370['else'] = NULL;
$arguments370['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array372 = array();
$array373 = array (
);$array372['0'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array373);

$expression374 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments370['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression374(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array372)
					),
					$renderingContext
				);
$arguments370['__thenClosure'] = $renderChildrenClosure371;

$output363 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output363 .= '
                ';
return $output363;
};
$arguments361['__elseClosures'][] = function() use ($renderingContext, $self) {
$output382 = '';

$output382 .= '
                    <span>';
$array383 = array (
);
$output382 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array383)]);

$output382 .= '</span>
                ';
return $output382;
};

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output360 .= '
        ';
return $output360;
};
$arguments350 = array();
$arguments350['additionalAttributes'] = NULL;
$arguments350['data'] = NULL;
$arguments350['aria'] = NULL;
$arguments350['class'] = NULL;
$arguments350['dir'] = NULL;
$arguments350['id'] = NULL;
$arguments350['lang'] = NULL;
$arguments350['style'] = NULL;
$arguments350['title'] = NULL;
$arguments350['accesskey'] = NULL;
$arguments350['tabindex'] = NULL;
$arguments350['onclick'] = NULL;
$arguments350['target'] = NULL;
$arguments350['rel'] = NULL;
$arguments350['pageUid'] = NULL;
$arguments350['pageType'] = NULL;
$arguments350['noCache'] = NULL;
$arguments350['language'] = NULL;
$arguments350['noCacheHash'] = NULL;
$arguments350['section'] = NULL;
$arguments350['linkAccessRestrictedPages'] = NULL;
$arguments350['additionalParams'] = NULL;
$arguments350['absolute'] = NULL;
$arguments350['addQueryString'] = NULL;
$arguments350['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments350['addQueryStringMethod'] = NULL;
$array352 = array (
);$arguments350['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array352);
$output353 = '';

$output353 .= 'navbar-brand navbar-brand-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments354 = array();
$arguments354['then'] = NULL;
$arguments354['else'] = NULL;
$arguments354['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array356 = array();
$array357 = array (
);$array356['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array357);

$expression358 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments354['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression358(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array356)
					),
					$renderingContext
				);
$arguments354['then'] = 'image';
$arguments354['else'] = 'text';

$output353 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);
$arguments350['class'] = $output353;
$array359 = array (
);$arguments350['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array359);

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output323 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output418 = '';

$output418 .= '
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#mainnavigation" data-bs-target="#mainnavigation" aria-controls="mainnavigation" aria-expanded="false" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments419 = array();
$arguments419['key'] = NULL;
$arguments419['id'] = NULL;
$arguments419['default'] = NULL;
$arguments419['arguments'] = NULL;
$arguments419['extensionName'] = NULL;
$arguments419['languageKey'] = NULL;
$arguments419['alternativeLanguageKeys'] = NULL;
$arguments419['key'] = 'togglenavigation';
$arguments419['extensionName'] = 'bootstrap_package';

$output418 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext)]);

$output418 .= '">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="mainnavigation" class="collapse navbar-collapse">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments421 = array();
$arguments421['section'] = NULL;
$arguments421['partial'] = NULL;
$arguments421['delegate'] = NULL;
$arguments421['renderable'] = NULL;
$arguments421['arguments'] = array (
);
$arguments421['optional'] = false;
$arguments421['default'] = NULL;
$arguments421['contentAs'] = NULL;
$arguments421['debug'] = true;
$arguments421['partial'] = 'DropIn/Navigation/MainBefore';
$arguments421['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output418 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext);

$output418 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments424 = array();
$arguments424['section'] = NULL;
$arguments424['partial'] = NULL;
$arguments424['delegate'] = NULL;
$arguments424['renderable'] = NULL;
$arguments424['arguments'] = array (
);
$arguments424['optional'] = false;
$arguments424['default'] = NULL;
$arguments424['contentAs'] = NULL;
$arguments424['debug'] = true;
$arguments424['section'] = 'MainNavigation';
// Rendering Array
$array426 = array();
$array427 = array (
);$array426['menu'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array427);
$array428 = array (
);$array426['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array428);
$arguments424['arguments'] = $array426;

$output418 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output418 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments429 = array();
$arguments429['section'] = NULL;
$arguments429['partial'] = NULL;
$arguments429['delegate'] = NULL;
$arguments429['renderable'] = NULL;
$arguments429['arguments'] = array (
);
$arguments429['optional'] = false;
$arguments429['default'] = NULL;
$arguments429['contentAs'] = NULL;
$arguments429['debug'] = true;
$arguments429['partial'] = 'DropIn/Navigation/MainAfter';
$arguments429['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output418 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output418 .= '
            </nav>
        ';
return $output418;
};
$arguments413 = array();
$arguments413['then'] = NULL;
$arguments413['else'] = NULL;
$arguments413['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array415 = array();
$array416 = array (
);$array415['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array416);

$expression417 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments413['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression417(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array415)
					),
					$renderingContext
				);
$arguments413['__thenClosure'] = $renderChildrenClosure414;

$output323 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output323 .= '
    </div>
</header>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$output434 = '';

$output434 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$output440 = '';

$output440 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$output601 = '';

$output601 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments602 = array();

$output601 .= '';

$output601 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
$output606 = '';

$output606 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure608 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments607 = array();
$arguments607['then'] = NULL;
$arguments607['else'] = NULL;
$arguments607['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array609 = array();
$array610 = array (
);$array609['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array610);

$expression611 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments607['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression611(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array609)
					),
					$renderingContext
				);
$arguments607['then'] = ' active';

$output606 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments607, $renderChildrenClosure608, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments612 = array();
$arguments612['then'] = NULL;
$arguments612['else'] = NULL;
$arguments612['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array614 = array();
$array615 = array (
);$array614['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array615);

$expression616 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments612['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression616(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array614)
					),
					$renderingContext
				);
$arguments612['then'] = ' dropdown dropdown-hover';

$output606 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments612, $renderChildrenClosure613, $renderingContext);

$output606 .= '">
                            <a href="';
$array617 = array (
);
$output606 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array617)]);

$output606 .= '" id="nav-item-';
$array618 = array (
);
$output606 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array618)]);

$output606 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure620 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments619 = array();
$arguments619['then'] = NULL;
$arguments619['else'] = NULL;
$arguments619['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array621 = array();
$array622 = array (
);$array621['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array622);

$expression623 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments619['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression623(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array621)
					),
					$renderingContext
				);
$arguments619['then'] = ' dropdown-toggle';

$output606 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments619, $renderChildrenClosure620, $renderingContext);

$output606 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments624 = array();
$arguments624['then'] = NULL;
$arguments624['else'] = NULL;
$arguments624['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array626 = array();
$array627 = array (
);$array626['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array627);

$expression628 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments624['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression628(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array626)
					),
					$renderingContext
				);
$output629 = '';

$output629 .= ' target="';
$array630 = array (
);
$output629 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array630)]);

$output629 .= '"';
$arguments624['then'] = $output629;

$output606 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure632 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments631 = array();
$arguments631['then'] = NULL;
$arguments631['else'] = NULL;
$arguments631['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array633 = array();
$array634 = array (
);$array633['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array634);
$array633['1'] = ' == "_blank"';

$expression635 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments631['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression635(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array633)
					),
					$renderingContext
				);
$arguments631['then'] = ' rel="noopener noreferrer"';

$output606 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments631, $renderChildrenClosure632, $renderingContext);

$output606 .= ' title="';
$array636 = array (
);
$output606 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array636)]);

$output606 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments637 = array();
$arguments637['then'] = NULL;
$arguments637['else'] = NULL;
$arguments637['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array639 = array();
$array640 = array (
);$array639['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array640);

$expression641 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments637['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression641(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array639)
					),
					$renderingContext
				);
$arguments637['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output606 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments637, $renderChildrenClosure638, $renderingContext);

$output606 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
$output648 = '';

$output648 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments649 = array();
$arguments649['icon'] = NULL;
$arguments649['height'] = NULL;
$arguments649['width'] = NULL;
$array651 = array (
);$arguments649['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array651);
$array652 = array (
);$arguments649['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array652);
$array653 = array (
);$arguments649['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array653);

$output648 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext);

$output648 .= '
                                    </span>
                                ';
return $output648;
};
$arguments642 = array();
$arguments642['then'] = NULL;
$arguments642['else'] = NULL;
$arguments642['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array644 = array();
$array645 = array (
);$array644['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array645);
$array644['1'] = ' && ';
$array646 = array (
);$array644['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array646);

$expression647 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments642['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression647(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array644)
					),
					$renderingContext
				);
$arguments642['__thenClosure'] = $renderChildrenClosure643;

$output606 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext);

$output606 .= '
                                <span class="nav-link-text">';
$array654 = array (
);
$output606 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array654)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure656 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments655 = array();
$arguments655['then'] = NULL;
$arguments655['else'] = NULL;
$arguments655['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array657 = array();
$array658 = array (
);$array657['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array658);

$expression659 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments655['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression659(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array657)
					),
					$renderingContext
				);
$arguments655['__thenClosure'] = $renderChildrenClosure656;

$output606 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments655, $renderChildrenClosure656, $renderingContext);

$output606 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
$output665 = '';

$output665 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array666 = array (
);
$output665 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array666)]);

$output665 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure668 = function() use ($renderingContext, $self) {
$output670 = '';

$output670 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
$output714 = '';

$output714 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure716 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments715 = array();

$output714 .= '';

$output714 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure718 = function() use ($renderingContext, $self) {
$output719 = '';

$output719 .= '
                                                <li>
                                                    <a href="';
$array720 = array (
);
$output719 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array720)]);

$output719 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure722 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments721 = array();
$arguments721['then'] = NULL;
$arguments721['else'] = NULL;
$arguments721['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array723 = array();
$array724 = array (
);$array723['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array724);

$expression725 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments721['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression725(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array723)
					),
					$renderingContext
				);
$arguments721['then'] = ' active';

$output719 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments721, $renderChildrenClosure722, $renderingContext);

$output719 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments726 = array();
$arguments726['then'] = NULL;
$arguments726['else'] = NULL;
$arguments726['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array728 = array();
$array729 = array (
);$array728['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array729);

$expression730 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments726['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression730(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array728)
					),
					$renderingContext
				);
$output731 = '';

$output731 .= ' target="';
$array732 = array (
);
$output731 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array732)]);

$output731 .= '"';
$arguments726['then'] = $output731;

$output719 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure734 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments733 = array();
$arguments733['then'] = NULL;
$arguments733['else'] = NULL;
$arguments733['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array735 = array();
$array736 = array (
);$array735['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array736);
$array735['1'] = ' == "_blank"';

$expression737 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments733['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression737(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array735)
					),
					$renderingContext
				);
$arguments733['then'] = ' rel="noopener noreferrer"';

$output719 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments733, $renderChildrenClosure734, $renderingContext);

$output719 .= ' title="';
$array738 = array (
);
$output719 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array738)]);

$output719 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure740 = function() use ($renderingContext, $self) {
$output745 = '';

$output745 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments746 = array();
$arguments746['icon'] = NULL;
$arguments746['height'] = NULL;
$arguments746['width'] = NULL;
$array748 = array (
);$arguments746['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array748);
$array749 = array (
);$arguments746['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array749);
$array750 = array (
);$arguments746['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array750);

$output745 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments746, $renderChildrenClosure747, $renderingContext);

$output745 .= '
                                                            </span>
                                                        ';
return $output745;
};
$arguments739 = array();
$arguments739['then'] = NULL;
$arguments739['else'] = NULL;
$arguments739['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array741 = array();
$array742 = array (
);$array741['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array742);
$array741['1'] = ' && ';
$array743 = array (
);$array741['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array743);

$expression744 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments739['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression744(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array741)
					),
					$renderingContext
				);
$arguments739['__thenClosure'] = $renderChildrenClosure740;

$output719 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments739, $renderChildrenClosure740, $renderingContext);

$output719 .= '
                                                        <span class="dropdown-text">';
$array751 = array (
);
$output719 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array751)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure753 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments752 = array();
$arguments752['then'] = NULL;
$arguments752['else'] = NULL;
$arguments752['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array754 = array();
$array755 = array (
);$array754['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array755);

$expression756 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments752['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression756(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array754)
					),
					$renderingContext
				);
$arguments752['__thenClosure'] = $renderChildrenClosure753;

$output719 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments752, $renderChildrenClosure753, $renderingContext);

$output719 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output719;
};
$arguments717 = array();
$arguments717['if'] = NULL;

$output714 .= '';

$output714 .= '
                                        ';
return $output714;
};
$arguments671 = array();
$arguments671['then'] = NULL;
$arguments671['else'] = NULL;
$arguments671['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array711 = array();
$array712 = array (
);$array711['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array712);

$expression713 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments671['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression713(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array711)
					),
					$renderingContext
				);
$arguments671['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments671['__elseClosures'][] = function() use ($renderingContext, $self) {
$output673 = '';

$output673 .= '
                                                <li>
                                                    <a href="';
$array674 = array (
);
$output673 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array674)]);

$output673 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure676 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments675 = array();
$arguments675['then'] = NULL;
$arguments675['else'] = NULL;
$arguments675['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array677 = array();
$array678 = array (
);$array677['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array678);

$expression679 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments675['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression679(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array677)
					),
					$renderingContext
				);
$arguments675['then'] = ' active';

$output673 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments675, $renderChildrenClosure676, $renderingContext);

$output673 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments680 = array();
$arguments680['then'] = NULL;
$arguments680['else'] = NULL;
$arguments680['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array682 = array();
$array683 = array (
);$array682['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array683);

$expression684 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments680['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression684(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array682)
					),
					$renderingContext
				);
$output685 = '';

$output685 .= ' target="';
$array686 = array (
);
$output685 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array686)]);

$output685 .= '"';
$arguments680['then'] = $output685;

$output673 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments687 = array();
$arguments687['then'] = NULL;
$arguments687['else'] = NULL;
$arguments687['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array689 = array();
$array690 = array (
);$array689['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array690);
$array689['1'] = ' == "_blank"';

$expression691 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments687['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression691(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array689)
					),
					$renderingContext
				);
$arguments687['then'] = ' rel="noopener noreferrer"';

$output673 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments687, $renderChildrenClosure688, $renderingContext);

$output673 .= ' title="';
$array692 = array (
);
$output673 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array692)]);

$output673 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure694 = function() use ($renderingContext, $self) {
$output699 = '';

$output699 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments700 = array();
$arguments700['icon'] = NULL;
$arguments700['height'] = NULL;
$arguments700['width'] = NULL;
$array702 = array (
);$arguments700['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array702);
$array703 = array (
);$arguments700['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array703);
$array704 = array (
);$arguments700['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array704);

$output699 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext);

$output699 .= '
                                                            </span>
                                                        ';
return $output699;
};
$arguments693 = array();
$arguments693['then'] = NULL;
$arguments693['else'] = NULL;
$arguments693['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array695 = array();
$array696 = array (
);$array695['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array696);
$array695['1'] = ' && ';
$array697 = array (
);$array695['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array697);

$expression698 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments693['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression698(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array695)
					),
					$renderingContext
				);
$arguments693['__thenClosure'] = $renderChildrenClosure694;

$output673 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments693, $renderChildrenClosure694, $renderingContext);

$output673 .= '
                                                        <span class="dropdown-text">';
$array705 = array (
);
$output673 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array705)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure707 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments706 = array();
$arguments706['then'] = NULL;
$arguments706['else'] = NULL;
$arguments706['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array708 = array();
$array709 = array (
);$array708['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array709);

$expression710 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments706['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression710(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array708)
					),
					$renderingContext
				);
$arguments706['__thenClosure'] = $renderChildrenClosure707;

$output673 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments706, $renderChildrenClosure707, $renderingContext);

$output673 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output673;
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
);$arguments667['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array669);
$arguments667['as'] = 'child';

$output665 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments667, $renderChildrenClosure668, $renderingContext);

$output665 .= '
                                </ul>
                            ';
return $output665;
};
$arguments660 = array();
$arguments660['then'] = NULL;
$arguments660['else'] = NULL;
$arguments660['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array662 = array();
$array663 = array (
);$array662['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array663);

$expression664 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments660['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression664(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array662)
					),
					$renderingContext
				);
$arguments660['__thenClosure'] = $renderChildrenClosure661;

$output606 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$output606 .= '
                        </li>
                    ';
return $output606;
};
$arguments604 = array();
$arguments604['if'] = NULL;

$output601 .= '';

$output601 .= '
                ';
return $output601;
};
$arguments445 = array();
$arguments445['then'] = NULL;
$arguments445['else'] = NULL;
$arguments445['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array598 = array();
$array599 = array (
);$array598['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array599);

$expression600 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments445['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression600(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array598)
					),
					$renderingContext
				);
$arguments445['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments445['__elseClosures'][] = function() use ($renderingContext, $self) {
$output447 = '';

$output447 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['then'] = NULL;
$arguments448['else'] = NULL;
$arguments448['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array450 = array();
$array451 = array (
);$array450['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array451);

$expression452 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments448['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression452(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array450)
					),
					$renderingContext
				);
$arguments448['then'] = ' active';

$output447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['then'] = NULL;
$arguments453['else'] = NULL;
$arguments453['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array455 = array();
$array456 = array (
);$array455['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array456);

$expression457 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments453['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression457(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array455)
					),
					$renderingContext
				);
$arguments453['then'] = ' dropdown dropdown-hover';

$output447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output447 .= '">
                            <a href="';
$array458 = array (
);
$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array458)]);

$output447 .= '" id="nav-item-';
$array459 = array (
);
$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array459)]);

$output447 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['then'] = NULL;
$arguments460['else'] = NULL;
$arguments460['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array462 = array();
$array463 = array (
);$array462['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array463);

$expression464 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments460['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression464(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array462)
					),
					$renderingContext
				);
$arguments460['then'] = ' dropdown-toggle';

$output447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);

$output447 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['then'] = NULL;
$arguments465['else'] = NULL;
$arguments465['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array467 = array();
$array468 = array (
);$array467['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array468);

$expression469 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments465['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression469(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array467)
					),
					$renderingContext
				);
$output470 = '';

$output470 .= ' target="';
$array471 = array (
);
$output470 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array471)]);

$output470 .= '"';
$arguments465['then'] = $output470;

$output447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments472 = array();
$arguments472['then'] = NULL;
$arguments472['else'] = NULL;
$arguments472['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array474 = array();
$array475 = array (
);$array474['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array475);
$array474['1'] = ' == "_blank"';

$expression476 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments472['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression476(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array474)
					),
					$renderingContext
				);
$arguments472['then'] = ' rel="noopener noreferrer"';

$output447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output447 .= ' title="';
$array477 = array (
);
$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array477)]);

$output447 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['then'] = NULL;
$arguments478['else'] = NULL;
$arguments478['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array480 = array();
$array481 = array (
);$array480['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array481);

$expression482 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments478['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression482(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array480)
					),
					$renderingContext
				);
$arguments478['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output447 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['icon'] = NULL;
$arguments490['height'] = NULL;
$arguments490['width'] = NULL;
$array492 = array (
);$arguments490['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array492);
$array493 = array (
);$arguments490['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array493);
$array494 = array (
);$arguments490['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array494);

$output489 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '
                                    </span>
                                ';
return $output489;
};
$arguments483 = array();
$arguments483['then'] = NULL;
$arguments483['else'] = NULL;
$arguments483['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array485 = array();
$array486 = array (
);$array485['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array486);
$array485['1'] = ' && ';
$array487 = array (
);$array485['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array487);

$expression488 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments483['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression488(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array485)
					),
					$renderingContext
				);
$arguments483['__thenClosure'] = $renderChildrenClosure484;

$output447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);

$output447 .= '
                                <span class="nav-link-text">';
$array495 = array (
);
$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array495)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments496 = array();
$arguments496['then'] = NULL;
$arguments496['else'] = NULL;
$arguments496['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array498 = array();
$array499 = array (
);$array498['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array499);

$expression500 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments496['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression500(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array498)
					),
					$renderingContext
				);
$arguments496['__thenClosure'] = $renderChildrenClosure497;

$output447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output447 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
$output506 = '';

$output506 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array507 = array (
);
$output506 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array507)]);

$output506 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output511 = '';

$output511 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
$output555 = '';

$output555 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments556 = array();

$output555 .= '';

$output555 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
$output560 = '';

$output560 .= '
                                                <li>
                                                    <a href="';
$array561 = array (
);
$output560 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array561)]);

$output560 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments562 = array();
$arguments562['then'] = NULL;
$arguments562['else'] = NULL;
$arguments562['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array564 = array();
$array565 = array (
);$array564['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array565);

$expression566 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments562['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression566(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array564)
					),
					$renderingContext
				);
$arguments562['then'] = ' active';

$output560 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output560 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments567 = array();
$arguments567['then'] = NULL;
$arguments567['else'] = NULL;
$arguments567['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array569 = array();
$array570 = array (
);$array569['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array570);

$expression571 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments567['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression571(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array569)
					),
					$renderingContext
				);
$output572 = '';

$output572 .= ' target="';
$array573 = array (
);
$output572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array573)]);

$output572 .= '"';
$arguments567['then'] = $output572;

$output560 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments567, $renderChildrenClosure568, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments574 = array();
$arguments574['then'] = NULL;
$arguments574['else'] = NULL;
$arguments574['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array576 = array();
$array577 = array (
);$array576['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array577);
$array576['1'] = ' == "_blank"';

$expression578 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments574['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression578(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array576)
					),
					$renderingContext
				);
$arguments574['then'] = ' rel="noopener noreferrer"';

$output560 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext);

$output560 .= ' title="';
$array579 = array (
);
$output560 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array579)]);

$output560 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments587 = array();
$arguments587['icon'] = NULL;
$arguments587['height'] = NULL;
$arguments587['width'] = NULL;
$array589 = array (
);$arguments587['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array589);
$array590 = array (
);$arguments587['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array590);
$array591 = array (
);$arguments587['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array591);

$output586 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output586 .= '
                                                            </span>
                                                        ';
return $output586;
};
$arguments580 = array();
$arguments580['then'] = NULL;
$arguments580['else'] = NULL;
$arguments580['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array582 = array();
$array583 = array (
);$array582['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array583);
$array582['1'] = ' && ';
$array584 = array (
);$array582['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array584);

$expression585 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments580['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression585(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array582)
					),
					$renderingContext
				);
$arguments580['__thenClosure'] = $renderChildrenClosure581;

$output560 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments580, $renderChildrenClosure581, $renderingContext);

$output560 .= '
                                                        <span class="dropdown-text">';
$array592 = array (
);
$output560 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array592)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments593 = array();
$arguments593['then'] = NULL;
$arguments593['else'] = NULL;
$arguments593['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array595 = array();
$array596 = array (
);$array595['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array596);

$expression597 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments593['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression597(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array595)
					),
					$renderingContext
				);
$arguments593['__thenClosure'] = $renderChildrenClosure594;

$output560 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext);

$output560 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output560;
};
$arguments558 = array();
$arguments558['if'] = NULL;

$output555 .= '';

$output555 .= '
                                        ';
return $output555;
};
$arguments512 = array();
$arguments512['then'] = NULL;
$arguments512['else'] = NULL;
$arguments512['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array552 = array();
$array553 = array (
);$array552['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array553);

$expression554 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments512['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression554(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array552)
					),
					$renderingContext
				);
$arguments512['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments512['__elseClosures'][] = function() use ($renderingContext, $self) {
$output514 = '';

$output514 .= '
                                                <li>
                                                    <a href="';
$array515 = array (
);
$output514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array515)]);

$output514 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments516 = array();
$arguments516['then'] = NULL;
$arguments516['else'] = NULL;
$arguments516['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array518 = array();
$array519 = array (
);$array518['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array519);

$expression520 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments516['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression520(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array518)
					),
					$renderingContext
				);
$arguments516['then'] = ' active';

$output514 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext);

$output514 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments521 = array();
$arguments521['then'] = NULL;
$arguments521['else'] = NULL;
$arguments521['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array523 = array();
$array524 = array (
);$array523['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array524);

$expression525 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments521['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression525(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array523)
					),
					$renderingContext
				);
$output526 = '';

$output526 .= ' target="';
$array527 = array (
);
$output526 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array527)]);

$output526 .= '"';
$arguments521['then'] = $output526;

$output514 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments528 = array();
$arguments528['then'] = NULL;
$arguments528['else'] = NULL;
$arguments528['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array530 = array();
$array531 = array (
);$array530['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array531);
$array530['1'] = ' == "_blank"';

$expression532 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments528['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression532(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array530)
					),
					$renderingContext
				);
$arguments528['then'] = ' rel="noopener noreferrer"';

$output514 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);

$output514 .= ' title="';
$array533 = array (
);
$output514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array533)]);

$output514 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
$output540 = '';

$output540 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments541 = array();
$arguments541['icon'] = NULL;
$arguments541['height'] = NULL;
$arguments541['width'] = NULL;
$array543 = array (
);$arguments541['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array543);
$array544 = array (
);$arguments541['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array544);
$array545 = array (
);$arguments541['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array545);

$output540 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext);

$output540 .= '
                                                            </span>
                                                        ';
return $output540;
};
$arguments534 = array();
$arguments534['then'] = NULL;
$arguments534['else'] = NULL;
$arguments534['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array536 = array();
$array537 = array (
);$array536['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array537);
$array536['1'] = ' && ';
$array538 = array (
);$array536['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array538);

$expression539 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments534['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression539(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array536)
					),
					$renderingContext
				);
$arguments534['__thenClosure'] = $renderChildrenClosure535;

$output514 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output514 .= '
                                                        <span class="dropdown-text">';
$array546 = array (
);
$output514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array546)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments547 = array();
$arguments547['then'] = NULL;
$arguments547['else'] = NULL;
$arguments547['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array549 = array();
$array550 = array (
);$array549['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array550);

$expression551 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments547['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression551(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array549)
					),
					$renderingContext
				);
$arguments547['__thenClosure'] = $renderChildrenClosure548;

$output514 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);

$output514 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output514;
};

$output511 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output511 .= '
                                    ';
return $output511;
};
$arguments508 = array();
$arguments508['each'] = NULL;
$arguments508['as'] = NULL;
$arguments508['key'] = NULL;
$arguments508['reverse'] = false;
$arguments508['iteration'] = NULL;
$array510 = array (
);$arguments508['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array510);
$arguments508['as'] = 'child';

$output506 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output506 .= '
                                </ul>
                            ';
return $output506;
};
$arguments501 = array();
$arguments501['then'] = NULL;
$arguments501['else'] = NULL;
$arguments501['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array503 = array();
$array504 = array (
);$array503['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array504);

$expression505 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments501['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression505(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array503)
					),
					$renderingContext
				);
$arguments501['__thenClosure'] = $renderChildrenClosure502;

$output447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);

$output447 .= '
                        </li>
                    ';
return $output447;
};

$output444 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output444 .= '
            ';
return $output444;
};
$arguments441 = array();
$arguments441['each'] = NULL;
$arguments441['as'] = NULL;
$arguments441['key'] = NULL;
$arguments441['reverse'] = false;
$arguments441['iteration'] = NULL;
$array443 = array (
);$arguments441['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array443);
$arguments441['as'] = 'item';

$output440 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext);

$output440 .= '
        </ul>
    ';
return $output440;
};
$arguments435 = array();
$arguments435['then'] = NULL;
$arguments435['else'] = NULL;
$arguments435['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array437 = array();
$array438 = array (
);$array437['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array438);

$expression439 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments435['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression439(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array437)
					),
					$renderingContext
				);
$arguments435['__thenClosure'] = $renderChildrenClosure436;

$output434 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output434 .= '
';
return $output434;
};
$arguments432 = array();
$arguments432['name'] = NULL;
$arguments432['name'] = 'MainNavigation';

$output323 .= '';

$output323 .= '

';

return $output323;
}


}
#