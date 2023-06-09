<?php

class partial_Product_List_Table_2eafcb70dd0bb1879189e984c9a49227d1ad6d78 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th class="col-md-2">
            &nbsp;
        </th>
        <th class="col-md-6">
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
$arguments1['key'] = 'tx_cartproducts_domain_model_product_product.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
        </th>
        <th class="col-md-4">
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
$arguments3['key'] = 'tx_cartproducts_domain_model_product_product.price';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
        </th>
    </tr>
    </thead>
    <tbody>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
        <tr>
            <td>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
                    ';
// Rendering ViewHelper Extcode\CartProducts\ViewHelpers\Link\ProductViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['aria'] = NULL;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['alt'] = NULL;
$arguments20['ismap'] = NULL;
$arguments20['longdesc'] = NULL;
$arguments20['usemap'] = NULL;
$arguments20['loading'] = NULL;
$arguments20['src'] = '';
$arguments20['treatIdAsReference'] = false;
$arguments20['image'] = NULL;
$arguments20['crop'] = NULL;
$arguments20['cropVariant'] = 'default';
$arguments20['fileExtension'] = NULL;
$arguments20['width'] = NULL;
$arguments20['height'] = NULL;
$arguments20['minWidth'] = NULL;
$arguments20['minHeight'] = NULL;
$arguments20['maxWidth'] = NULL;
$arguments20['maxHeight'] = NULL;
$arguments20['absolute'] = false;
$array22 = array (
);$arguments20['src'] = $renderingContext->getVariableProvider()->getByPath('product.firstImage.originalResource.originalFile.uid', $array22);
$array23 = array (
);$arguments20['title'] = $renderingContext->getVariableProvider()->getByPath('product.firstImage.originalResource.title', $array23);
$array24 = array (
);$arguments20['alt'] = $renderingContext->getVariableProvider()->getByPath('product.firstImage.originalResource.title', $array24);
$array25 = array (
);$arguments20['width'] = $renderingContext->getVariableProvider()->getByPath('settings.listAction.media.image.size.small.maxWidth', $array25);
$array26 = array (
);$arguments20['height'] = $renderingContext->getVariableProvider()->getByPath('settings.listAction.media.image.size.small.maxHeight', $array26);

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                    ';
return $output19;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['aria'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['name'] = NULL;
$arguments15['rel'] = NULL;
$arguments15['rev'] = NULL;
$arguments15['target'] = NULL;
$arguments15['action'] = NULL;
$arguments15['controller'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['pluginName'] = NULL;
$arguments15['pageUid'] = NULL;
$arguments15['pageType'] = NULL;
$arguments15['noCache'] = NULL;
$arguments15['noCacheHash'] = NULL;
$arguments15['section'] = NULL;
$arguments15['format'] = NULL;
$arguments15['linkAccessRestrictedPages'] = NULL;
$arguments15['additionalParams'] = NULL;
$arguments15['absolute'] = NULL;
$arguments15['addQueryString'] = NULL;
$arguments15['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments15['addQueryStringMethod'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['product'] = NULL;
$arguments15['settings'] = NULL;
$array17 = array (
);$arguments15['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array17);
$array18 = array (
);$arguments15['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array18);

$output14 .= Extcode\CartProducts\ViewHelpers\Link\ProductViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
                ';
return $output14;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('product.images', $array12);

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = $renderChildrenClosure10;

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
            </td>
            <td>
                ';
// Rendering ViewHelper Extcode\CartProducts\ViewHelpers\Link\ProductViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                    ';
$array32 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('product.title', $array32)]);

$output31 .= '
                ';
return $output31;
};
$arguments27 = array();
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['aria'] = NULL;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['name'] = NULL;
$arguments27['rel'] = NULL;
$arguments27['rev'] = NULL;
$arguments27['target'] = NULL;
$arguments27['action'] = NULL;
$arguments27['controller'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['pluginName'] = NULL;
$arguments27['pageUid'] = NULL;
$arguments27['pageType'] = NULL;
$arguments27['noCache'] = NULL;
$arguments27['noCacheHash'] = NULL;
$arguments27['section'] = NULL;
$arguments27['format'] = NULL;
$arguments27['linkAccessRestrictedPages'] = NULL;
$arguments27['additionalParams'] = NULL;
$arguments27['absolute'] = NULL;
$arguments27['addQueryString'] = NULL;
$arguments27['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments27['addQueryStringMethod'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['product'] = NULL;
$arguments27['settings'] = NULL;
$array29 = array (
);$arguments27['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array29);
$array30 = array (
);$arguments27['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array30);

$output8 .= Extcode\CartProducts\ViewHelpers\Link\ProductViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output8 .= '
            </td>
            <td>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['renderable'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['debug'] = true;
$arguments33['partial'] = 'Product/Price';
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['product'] = $renderingContext->getVariableProvider()->getByPath('product', $array36);
$array37 = array (
);$array35['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array37);
$array38 = array (
);$array35['currencyTranslationData'] = $renderingContext->getVariableProvider()->getByPath('currencyTranslationData', $array38);
$arguments33['arguments'] = $array35;

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output8 .= '
            </td>

            <td><form data-ajax="1" data-type="slot" data-id="" method="post" class="add-to-cart-form" id="product-1" action="/cart?tx_cart_cart%5Bcontroller%5D=Cart%5CProduct&amp;type=2278001&amp;cHash=8c39ff8c3d6de946b87a96a4960b7e48">
                <div>
                <input type="hidden" name="tx_cart_cart[__referrer][@extension]" value="CartProducts">
                <input type="hidden" name="tx_cart_cart[__referrer][@controller]" value="Product">
                <input type="hidden" name="tx_cart_cart[__referrer][@action]" value="showForm">
                <input type="hidden" name="tx_cart_cart[__referrer][arguments]" value="YTowOnt933622ab51b548594dc2c623cb02427a9de0ccf70">
                <input type="hidden" name="tx_cart_cart[__referrer][@request]" value="{&quot;@extension&quot;:&quot;CartProducts&quot;,&quot;@controller&quot;:&quot;Product&quot;,&quot;@action&quot;:&quot;showForm&quot;}39323f104991117432085840be3992cc8aa97fa9">
                <input type="hidden" name="tx_cart_cart[__trustedProperties]" value="[]7ab086de68173c7f2c005d56edcc6c5be1aaee06">
                </div>
                
                        <input type="hidden" name="tx_cart_cart[productType]" value="CartProducts">
                        <input type="hidden" name="tx_cart_cart[product]" value="1">
                
                        <input class="form-control" type="text" value="1" name="tx_cart_cart[quantity]">
                        
                        
                        <input type="submit" class="btn btn-default form-control" value="Add to cart">
                
                        <div class="form-message" data-ajax-message-timeout="3000">
                            <div class="form-success" style="display: none;" data-ajax-success-block="">
                                <div class="alert alert-success" data-ajax-success-message="">Item was added to cart.</div>
                            </div>
                            <div class="form-error" style="display: none;" data-ajax-error-block="">
                                <div class="alert alert-warning" data-ajax-error-message=""></div>
                            </div>
                        </div>
                    </form></td>
        </tr>
    ';
return $output8;
};
$arguments5 = array();
$arguments5['each'] = NULL;
$arguments5['as'] = NULL;
$arguments5['key'] = NULL;
$arguments5['reverse'] = false;
$arguments5['iteration'] = NULL;
$array7 = array (
);$arguments5['each'] = $renderingContext->getVariableProvider()->getByPath('products', $array7);
$arguments5['as'] = 'product';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
    </tbody>
   
</table>
';

return $output0;
}


}
#