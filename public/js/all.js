function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}var Confirmation=function(){var t=$("#confirmation-box"),e=$("#confirmation-text"),r=$("#yes-answer");return{confirmToDelete:function(s,o){r.data("form-id","#"+s.attr("id")),r.data("callback-function",(function(t,e){switch(e.status){case 422:Utility.displayErrorMessageBox(Object.values(e.responseJSON.errors).join("<br>"));break;case 200:if(e.hasOwnProperty("responseJSON")){var r=e.responseJSON;!0===r.success?(Utility.displaySuccessMessageBox(r.message),o.submit()):Utility.displayErrorMessageBox(r.message)}else Utility.displayJsonResponseError(e,t.attr("action"));break;default:Utility.displayUnknownError(e,t.attr("action"))}})),e.html(s.data("deletion-confirmation-message")+s.data("info")+"?"),t.modal()},initialize:function(){r.click((function(e){e.preventDefault(),t.modal("toggle"),Utility.submitForm($(r.data("form-id")),r.data("callback-function"))}))}}}(jQuery),Form=function(){var t=$(".submission-form"),e=$(".recaptcha-form"),r=$(".form-submit");return{initialize:function(){$("#join-form").click((function(t){window.console.log("test")})),t.submit((function(t){t.preventDefault(),Utility.submitForm($(this))})),e.submit((function(t){var e=this;t.preventDefault(),_submitEvent=function(){Utility.submitForm($(e))}})),r.on("click",(function(t){t.preventDefault(),$(this).closest("form").submit()})),Search.SearchForm.submit((function(t){t.preventDefault(),window.console.log("submit"),Search.submitForm($(this))})),Search.ResultDiv.on("submit",".deletion",(function(t){t.preventDefault(),Confirmation.confirmToDelete($(this),Search.SearchForm)})),$(".deletion").submit((function(t){t.preventDefault(),Confirmation.confirmToDelete($(this),Search.SearchForm)}))}}}(jQuery),Search=function(){var t=$("#search-result"),e=($("#give-result-box"),$("#receive-result-box"),$("#search-form"));$("#search-form-detail");function r(e){t.removeClass("alert"),Utility.submitForm(e,(function(e,r){switch(Utility.clearErrors(),r.status){case 422:Utility.displayInvalidInputs(r.responseJSON),t.html("");break;case 200:$("#content-list-box").empty(),$("#content-list-box").html(r.responseJSON.data),$(".gif-loader").hide(),$("input[name=search]").empty();break;default:var s=r.statusText;r.hasOwnProperty("responseJSON")&&r.responseJSON.hasOwnProperty("message")&&(s=r.responseJSON.message),t.html(Translator.translate("error")+" "+s).addClass("alert")}}))}return{ResultDiv:t,SearchForm:e,initialize:function(){t.on("click",".pagination a",(function(t){t.preventDefault();var e=document.createElement("form");e.setAttribute("method","GET"),e.setAttribute("action",$(this).attr("href")),r($(e))}))},submitForm:r}}(jQuery),Utility=function(){var t=$("#result-box"),e=$("#result-title"),r=$("#result-text");function s(s,o){i(),r.html(s),r.hasClass("alert")?o||(e.html(Translator.translate("utility.result.success")),r.removeClass("alert")):o&&(e.html(Translator.translate("utility.result.error")),r.addClass("alert")),t.modal()}function o(t){s(t,!1)}function a(t){s(t,!0)}function i(){$(":input").removeClass("error"),$(".alert.help-text").addClass("d-none")}function n(t){if(i(),t.hasOwnProperty("errors")){var e=0;for(var r in t.errors){var s=t.errors[r],o=/^[^.]+\.\d+$/.test(r)?r.replace(".",""):$('[name="'+r+'"]').attr("id"),a="object"===_typeof(s)?s[0]:s;if(o)$("#"+o).addClass("error"),$("#"+o+"-help-text").text(a).removeClass("d-none"),"budget_type"!==r&&"milerate_subtype"!==r&&"taxi_subtype"!==r&&"biketaxi_subtype"!==r||($("#"+r).addClass("error"),$("#"+r+"-help-text").text(a).removeClass("d-none")),$("#toggle-error-message").length&&0===e&&("milerate_subtype"===r||"taxi_subtype"===r||"biketaxi_subtype"===r?$("html, body").animate({scrollTop:$("#"+r+"-help-text").offset().top},1e3):$("html, body").animate({scrollTop:$("#"+o).offset().top},1e3));else{var n=$('[name="'+r+'[]"]').parents(".checkbox-group").attr("id");$("#"+n+"-help-text").text(a).removeClass("d-none")}e++}}}function l(t,e){i();var r="<h5>"+Translator.translate("utility.calling_system_administrator")+"</h5>";r+="<strong>"+Translator.translate("utility.error_url")+"</strong> "+e+"<br>",r+="<strong>"+Translator.translate("utility.error_status_code")+"</strong> "+t.status+"<br>",a(r+="<strong>"+Translator.translate("utility.error_status_text")+"</strong> "+t.statusText+"<br>")}function u(t,e){t.statusText=Translator.translate("utility.json_response_error"),l(t,e)}function c(e,r){switch(r.status){case 422:case 429:n(r.responseJSON);break;case 200:if(r.hasOwnProperty("responseJSON")){var s=r.responseJSON;!0===s.success?s.hasOwnProperty("message")?(t.on("hidden.bs.modal",(function(){s.redirectedUrl?location.href=s.redirectedUrl:e.trigger("reset")})),o(s.message)):s.redirectedUrl&&(location.href=s.redirectedUrl):a(s.message)}else u(r,e.attr("action"));break;default:r.hasOwnProperty("responseJSON")&&r.responseJSON.hasOwnProperty("message")?a(r.responseJSON.message):l(r,e.attr("action"))}}function m(t,e,r){"function"==typeof r?r.apply(this,[t,e]):c(t,e)}function f(t){return"GET"===t.attr("method")?t.serialize():new FormData(t.get(0))}return{submitForm:function(t,e){$.ajax({url:t.attr("action"),method:t.attr("method"),data:f(t),cache:!1,contentType:!1,processData:!1,success:function(r,s,o){m(t,o,e)},error:function(r){m(t,r,e)}})},displaySuccessMessageBox:o,displayErrorMessageBox:a,displayInvalidInputs:n,displayUnknownError:l,displayJsonResponseError:u,clearErrors:i,ResultBoxSelector:t,takeSubmitAction:c,runCallbackFunction:m,getFormData:f}}(jQuery),PasswordToggle=(jQuery,{initialize:function(){$("#password-field").click((function(){$(".fa-eye").length?($("#password-field").html(""),$("#password-field").html('<i class="fa fa-eye-slash"></i>'),$("#password").attr("type","text")):($("#password-field").html(""),$("#password-field").html('<i class="fa fa-eye"></i>'),$("#password").attr("type","password"))}))}});window._=require("lodash");try{window.Popper=require("popper.js").default,window.$=window.jQuery=require("jquery"),window.SimpleLightbox=require("simplelightbox/dist/simple-lightbox.js"),require("bootstrap")}catch(t){}window.axios=require("axios"),window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest",$(document).ajaxStart((function(){SpinnerSelector.show()})).ajaxComplete((function(){SpinnerSelector.hide()})).ready((function(){Menu.initialize(),Search.initialize(),Confirmation.initialize(),Form.initialize(),PasswordToggle.initialize()}));
