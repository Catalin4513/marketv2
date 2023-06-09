
jQuery.fn.femanagerValidation=function(e){function a(a){d=new m({numRequest:a.find("*[data-validation]").length,element:a}),a.find("*[data-validation]").each(function(){n(e(this),!0)})}function n(a,n){if(a.prop("disabled"))return void(n&&d.addCallbackToQueue(!0));var o=a.closest("form"),c=o.find("div:first").find('input[name="tx_femanager_pi1[user][__identity]"]').val(),p=o.find("div:first").find('input[name="tx_femanager_pi1[__referrer][@action]"]').val(),m=Femanager.getBaseUrl()+"?id="+e("#femanagerPid").val()+"&type=1548935210",g=s(a),v=a.val();"checkbox"==a.prop("type")&&0==a.prop("checked")&&(v="");var h="";if(l(g,"sameAs")){var _=l(g,"sameAs"),b=f(_),x=e('input[name="tx_femanager_pi1[user]['+b+']"]');h=x.val(),"checkbox"==x.prop("type")&&0==x.prop("checked")&&(h="")}e.ajax({url:m,data:{"tx_femanager_pi1[validation]":a.attr("data-validation"),"tx_femanager_pi1[value]":v,"tx_femanager_pi1[field]":r(a),"tx_femanager_pi1[user]":void 0!==c?c:"","tx_femanager_pi1[additionalValue]":h?h:"","tx_femanager_pi1[plugin]":o.data("femanager-plugin"),"tx_femanager_pi1[referrerAction]":p,storagePid:e("#femanagerStoragePid").val(),L:e("#femanagerLanguage").val(),id:e("#femanagerPid").val()},type:"POST",cache:!1,success:function(e){if(n&&d.addCallbackToQueue(!0),e)try{e.validate?i(a):t(a,e.message)}catch(r){a.before(data)}},error:function(){u()}})}function r(e){var a="",n=e.prop("name").split("[");return a=void 0!==n[2]?n[2].replace("]",""):n[1].replace("]","")}function t(a,n){i(a);var r=e(".femanager_validation_container").html().replace("###messages###",n);a.before(r),a.closest(".form-group").addClass("has-error"),a.addClass("error")}function i(e){e.closest(".form-group").removeClass("has-error"),e.siblings(".alert").remove(),e.removeClass("error")}function o(a){0==a.find(".error").length?(p=!0,a.trigger("submit")):e("html,body").animate({scrollTop:a.find(".error:first").offset().top})}function l(e,a){for(var n=0;n<e.length;n++)if(e[n].indexOf(a)!==-1)return e[n];return""}function s(e){return e.attr("data-validation").split(",")}function f(e){var a="";if(e.indexOf("(")!==-1){var n=e.split("(");a=n[1].substr(0,n[1].length-1)}return a}function u(){"object"==typeof console&&console.log("Error: The called url is not available - if you use TYPO3 in a subfolder, please use config.baseURL in TypoScript")}var d,c=e(this),p=!1;0==c.find("*[data-validation]").length&&(p=!0);var m=function(){var a,n,r;return function(t){t||(t={}),a=t.numRequest||0,n=t.requestsCompleted||0,c=t.element||0,r=[];var i=function(){e("body").css("cursor","default"),o(c);for(var a=0;a<r.length;a++)r[a]()};t.singleCallback&&r.push(t.singleCallback),this.addCallbackToQueue=function(e,t){e&&n++,t&&r.push(t),n==a&&i()},this.requestComplete=function(e){e&&n++,n==a&&i()},this.setCallback=function(e){r.push(callBack)}}}();e("*[data-validation]").on("blur",function(){n(e(this),!1)}),c.on("submit",function(n){e("body").css("cursor","wait"),p||(n.preventDefault(),a(e(this)))})};
function createUploader(e){if(0!=e("#femanager_field_fine-uploader").length){var a={imageNames:{},getImageNames:function(){return e.map(this.imageNames,function(e){return e}).join(",")},addImageName:function(a,t){this.imageNames[a]=t,e("#femanager_field_image").val(this.getImageNames())},deleteImageName:function(a){delete this.imageNames[a],e("#femanager_field_image").val(this.getImageNames())}};new qq.FineUploader({element:document.getElementById("femanager_field_fine-uploader"),request:{endpoint:Femanager.getBaseUrl()+"index.php?eID=femanagerFileUpload&id="+e("#femanagerPid").val(),customHeaders:{Accept:"application/json"}},multiple:!0,template:e(".image_container_template:first").html(),fileTemplate:'<li><div class="qq-progress-bar"></div><span class="qq-upload-spinner"></span><span class="qq-upload-finished"></span><span class="qq-upload-file"></span><span class="qq-upload-size"></span><a class="qq-upload-cancel" href="#">{cancelButtonText}</a><a class="qq-upload-retry" href="#">{retryButtonText}</a><a class="qq-upload-delete icon-trash" href="#">{deleteButtonText}</a><span class="qq-upload-status-text">{statusText}</span></li>',deleteFile:{enabled:!0,forceConfirm:!0,endpoint:Femanager.getBaseUrl()+"index.php?eID=femanagerFileDelete&id="+e("#femanagerPid").val()},classes:{success:"alert alert-success",fail:"alert alert-error"},validation:{allowedExtensions:getValueFromField("#uploadFileExtension","jpeg, jpg, gif, png, bmp","array"),sizeLimit:getValueFromField("#uploadSize",25e6,"int"),itemLimit:getValueFromField("#uploadAmount",1,"int")},callbacks:{onComplete:function(t,n,i){if(i.success){var l=e("<img />").addClass("fileupload_image").prop("src",e("#uploadFolder").val()+"/"+i.uploadName).prop("alt",i.uploadName);l.appendTo(this.getItemByFileId(t)),a.addImageName(t,i.uploadName)}},onDeleteComplete:function(e,t,n){a.deleteImageName(e)}}});return a}}function getValueFromField(e,a,t){var n=a;return $(e).length&&(n=$(e).val()),void 0!==t&&("int"===t?n=parseInt(n):"array"===t&&(n=n.toString(),n=n.replace(/[\s,]+/g,","),n=n.split(","))),n}jQuery(document).ready(function(e){function a(e){e+="";var a=e.charAt(0).toLowerCase();return a+e.substr(1)}var t;t=null!=document.querySelector(".tx-femanager[data-labels]")?JSON.parse(document.querySelector(".tx-femanager[data-labels]").dataset.labels):[],e(".feManagerValidation").femanagerValidation(e);var n=createUploader(e);e("#femanager_field_image").length>0&&e.each(e("#femanager_field_image").val().split(","),function(e,a){a.trim().length>0&&n.addImageName(a,a)}),e("#femanager_field_preview-image").find(".qq-upload-delete").click(function(a){a.preventDefault();var t=e(a.target).parent();n.deleteImageName(t.find(".qq-upload-file").text()),t.fadeOut("",function(){e(this).remove()})}),e("*[data-confirm]").click(function(a){var t=e(this).attr("data-confirm");confirm(t)||a.preventDefault()}),document.querySelectorAll("[data-data-endpoint]").forEach(function(n){var i=function(i){var l=n.dataset.dataEndpoint,o={"tx_femanager_pi1[action]":l,"tx_femanager_pi1[controller]":"Data"};arguments=JSON.parse(JSON.stringify(n.dataset));for(var r in arguments)if(arguments.hasOwnProperty(r)&&r.match("arguments")){var s=document.getElementById(arguments[r]);if(s){var d=a(r.substr(9));o["tx_femanager_pi1["+d+"]"]=s.value}}var p=Femanager.getBaseUrl()+"index.php?id="+e("#femanagerPid").val()+"&type=1594138042",m=n.dataset.selectedValue;e.ajax({url:p,data:o,type:"POST",cache:!1,beforeSend:function(){n.disabled=1,n.options.length=0,n.options[0]=new Option(t.loading_states)},success:function(e){n.disabled=1,n.options.length=0,""===m||e.hasOwnProperty(m)||(n.options[n.options.length]=new Option(t.please_choose));for(var a in e)if(e.hasOwnProperty(a)){var i=a===m;n.options[n.options.length]=new Option(e[a],a,i,i),n.disabled=0}},error:function(){console.log("Error: The called url is not available - if you use TYPO3 in a subfolder, please use config.baseURL in TypoScript")}})},l=n.dataset.triggerFields;void 0!==l?l.split(",").forEach(function(e){var a=document.getElementById(e);void 0!==a&&a.addEventListener("change",i)}):n.addEventListener("change",i),i()})}),window.Femanager={},window.Femanager.getBaseUrl=function(){var e;if(jQuery("base").length>0)e=jQuery("base").prop("href");else if(window.location.hostname.indexOf("localhost")!==-1)e="";else{var a="";window.location.port.length>0&&(a=":"+window.location.port),e="https:"!==window.location.protocol?"http://"+window.location.hostname+a+"/":"https://"+window.location.hostname+a+"/"}return e};
// global function
;(function (window, document, $, undefined) {
    'use strict';

    var W = $(window),
        U = typeof undefined,
        D = $(document),
        toTopEl = '#to-top',
        $navBar = $('.nav-bar');

    D.ready(function () {
        $('[data-add-to-cart="form"]').click(function (e) {
            e.preventDefault();
            $.get(
                $(this).attr('href'),
                function(data){
                    $('[data-add-to-cart="result"]').html(data);
                });
        });
    });

    D.ajaxComplete(function () {
        $('[data-add-to-cart-uri]').submit(function (e) {
            e.preventDefault();
            $('[data-add-to-cart-uri]').unbind( "submit" );

            var form = $(this);
            var url = form.attr('data-add-to-cart-uri');

            var data = new FormData( this );
            var submitButton = $("button[type='submit']", form);
            data.append($(submitButton).attr('name'), $(submitButton).attr('value'));

            $.ajax({
                type: "POST",
                url: url,
                data: data,
                processData: false,
                contentType: false,
                success: function(data)
                {
                    handleAddToCartSuccessResponse(form, data);
                }
            });

        });
    });

}(window, document, jQuery));

function updateCountry(billingCountry, shippingCountry) {
    var postParams = {
        "tx_cart_cart[shipping_same_as_billing]": $("#shipping-same-as-billing").is(":checked"),
        "tx_cart_cart[billing_country]": billingCountry,
        "tx_cart_cart[shipping_country]": shippingCountry
    };

    $.ajax({
        async: "true",
        url: update_country,
        type: "POST",

        data: postParams,

        success: function(data)
        {
            $("#form-cart").html($(data).filter("#form-cart").html());
            $("#checkout-step-shipping-method").html($(data).filter("#checkout-step-shipping-method").html());
            $("#checkout-step-payment-method").html($(data).filter("#checkout-step-payment-method").html());
            $("#checkout-step-summary").html($(data).filter("#checkout-step-summary").html());
        }
    });
}

function updateCurrency(currencyCode, action) {
    var postParams = {
        "tx_cart_cart[currencyCode]": currencyCode
    };

    $.ajax({
        async: "true",
        url: action,
        type: "POST",

        data: postParams,

        success: function(data)
        {
            $("#form-cart").html($(data).filter("#form-cart").html());
            $("#checkout-step-shipping-method").html($(data).filter("#checkout-step-shipping-method").html());
            $("#checkout-step-payment-method").html($(data).filter("#checkout-step-payment-method").html());
            $("#checkout-step-coupon").html($(data).filter("#checkout-step-coupon").html());
            $("#checkout-step-summary").html($(data).filter("#checkout-step-summary").html());
        }
    });
}

$("#billingAddress-country").change(function () {
    var billingCountry = $(this).val();
    var shippingCountry = "";

    if(!$("#shipping-same-as-billing").is(":checked")) {
        shippingCountry = $("#shippingAddress-country").val();
    }

    updateCountry(billingCountry, shippingCountry);
});

$("#shippingAddress-country").change(function () {
    var billingCountry = $("#billingAddress-country").val();
    var shippingCountry = $(this).val();

    updateCountry(billingCountry, shippingCountry);
});

$("#shipping-same-as-billing").change(function() {
    $("#checkout-step-shipping-address").toggle(!this.checked);

    var billingCountry = $("#billingAddress-country").val();
    var shippingCountry = $("#shippingAddress-country").val();

    if(!$("#shipping-same-as-billing").is(":checked")) {
        $("#checkout-step-shipping-address input, #checkout-step-shipping-address select").each(function() {
            if($(this).data("disable-shipping")) {
                $(this).prop("disabled", false);
            }
        });
    } else {
        $("#checkout-step-shipping-address input, #checkout-step-shipping-address select").each(function() {
            if($(this).data("disable-shipping")) {
                $(this).prop("disabled", true);
            }
        });
    }

    updateCountry(billingCountry, shippingCountry);
});

$(".cart-currency-selector").change(function () {
    updateCurrency($(this).val(), $(this).closest("form").attr("action"));
});

$(".currency-selector").change(function () {

    var postParams = {
        "tx_cart_currency[currencyCode]": $(this).val()
    };

    $.ajax({
        async: "true",
        url: $(this).closest("form").attr("action"),
        type: "POST",

        data: postParams,

        success: function(data)
        {
            location.reload();
        }
    });
});

$("#checkout-step-payment-method").on("click", ".set-payment", function(e) {
    var url = $(this).attr("href");

    $.get( url, function( data ) {
        $("#checkout-step-shipping-method").html($(data).filter("#checkout-step-shipping-method").html());
        $("#checkout-step-payment-method").html($(data).filter("#checkout-step-payment-method").html());
        $("#checkout-step-summary").html($(data).filter("#checkout-step-summary").html());
    });

    e.preventDefault();
});

$("#checkout-step-shipping-method").on("click", ".set-shipping", function(e) {
    var url = $(this).attr("href");

    $.get( url, function( data ) {
        $("#checkout-step-shipping-method").html($(data).filter("#checkout-step-shipping-method").html());
        $("#checkout-step-payment-method").html($(data).filter("#checkout-step-payment-method").html());
        $("#checkout-step-summary").html($(data).filter("#checkout-step-summary").html());
    });

    e.preventDefault();
});

$("#be-variants-select").change(function () {
    var special_price = $(this).children().filter(":selected").data("special-price");
    var regular_price = $(this).children().filter(":selected").data("regular-price");
    var special_price_percentage_discount = $(this).children().filter(":selected").data("special-price-percentage-discount");

    $("#product-price .special_price .price").html(special_price);
    $("#product-price .regular_price .price").html(regular_price);
    $("#product-price .special_price_percentage_discount .price").html(special_price_percentage_discount);
});

$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || "");
        } else {
            o[this.name] = this.value || "";
        }
    });
    return o;
};

function handleAddToCartSuccessResponse(form, data) {
    var messageBlock;
    var messageTimeout = form.find('[data-ajax-message-timeout]').data('ajax-message-timeout');

    if (!messageTimeout) {
        messageTimeout = 3000;
    }

    var response = JSON.parse(data);
    if (response.status === "200") {
        $("#cart-preview .cart-preview-count").html(response.count);
        $("#cart-preview .net").html(response.net);
        $("#cart-preview .gross").html(response.gross);

        if (response.count > 0) {
            $("#cart-preview .checkout-link").show();
        }else {
            $("#cart-preview .checkout-link").hide();
        }

        $(document).trigger("status.cartWasChanged", [true]);

        form.each(function () {
            this.reset();
        });

        form.find('[data-ajax-success-message]').html(response.messageBody);
        form.find('[data-ajax-success-block]').show().delay(messageTimeout).fadeOut("slow");
    } else {
        form.find('[data-ajax-error-message]').html(response.messageBody);
        form.find('[data-ajax-error-block]').show().delay(messageTimeout).fadeOut("slow");
    }
}

$("[data-ajax='1']").submit(function(e) {
    var form = $(this);
    var serializedObject = form.serializeObject();

    $.ajax({
        async: "true",
        url: form.attr("action"),
        type: "POST",

        data: serializedObject,

        success: function(data)
        {
            handleAddToCartSuccessResponse(form, data);
        }
    });

    e.preventDefault();
});

$("#form-cart").submit(function() {
    $("input:submit").attr("disabled", true);
});
$("#form-order").submit(function() {
    $("input:submit").attr("disabled", true);
});
$("#form-coupon").submit(function() {
    $("input:submit").attr("disabled", true);
});

/*!
 * market v1.0.0 (https://www.web7.md/)
 * Copyright 2017-2023 catalin
 * Licensed under the GPL-2.0-or-later license
 */
console.log("WE LOVE TYPO3");
