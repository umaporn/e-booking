function _typeof(t){return _typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},_typeof(t)}var Confirmation=function(){var t=$("#confirmation-box"),e=$("#confirmation-text"),r=$("#yes-answer");return{confirmToDelete:function(a,o){r.data("form-id","#"+a.attr("id")),r.data("callback-function",(function(t,e){switch(e.status){case 422:Utility.displayErrorMessageBox(Object.values(e.responseJSON.errors).join("<br>"));break;case 200:if(e.hasOwnProperty("responseJSON")){var r=e.responseJSON;!0===r.success?(Utility.displaySuccessMessageBox(r.message),o.submit()):Utility.displayErrorMessageBox(r.message)}else Utility.displayJsonResponseError(e,t.attr("action"));break;default:Utility.displayUnknownError(e,t.attr("action"))}})),e.html(a.data("deletion-confirmation-message")+a.data("info")+"?"),t.modal()},initialize:function(){r.click((function(e){e.preventDefault(),t.modal("toggle"),Utility.submitForm($(r.data("form-id")),r.data("callback-function"))}))}}}(jQuery),Form=function(){var t=$(".submission-form"),e=$(".recaptcha-form"),r=$(".form-submit");return{initialize:function(){$("#join-form").click((function(t){window.console.log("test")})),t.submit((function(t){t.preventDefault(),Utility.submitForm($(this))})),e.submit((function(t){var e=this;t.preventDefault(),_submitEvent=function(){Utility.submitForm($(e))}})),r.on("click",(function(t){t.preventDefault(),$(this).closest("form").submit()})),Search.SearchForm.submit((function(t){t.preventDefault(),window.console.log("submit"),Search.submitForm($(this))})),Search.ResultDiv.on("submit",".deletion",(function(t){t.preventDefault(),Confirmation.confirmToDelete($(this),Search.SearchForm)})),$(".deletion").submit((function(t){t.preventDefault(),Confirmation.confirmToDelete($(this),Search.SearchForm)}))}}}(jQuery),Search=function(){var t=$("#search-result"),e=($("#give-result-box"),$("#receive-result-box"),$("#search-form"));$("#search-form-detail");function r(e){t.removeClass("alert"),Utility.submitForm(e,(function(e,r){switch(Utility.clearErrors(),r.status){case 422:Utility.displayInvalidInputs(r.responseJSON),t.html("");break;case 200:$("#content-list-box").empty(),$("#content-list-box").html(r.responseJSON.data),$(".gif-loader").hide(),$("input[name=search]").empty();break;default:var a=r.statusText;r.hasOwnProperty("responseJSON")&&r.responseJSON.hasOwnProperty("message")&&(a=r.responseJSON.message),t.html(Translator.translate("error")+" "+a).addClass("alert")}}))}return{ResultDiv:t,SearchForm:e,initialize:function(){t.on("click",".pagination a",(function(t){t.preventDefault();var e=document.createElement("form");e.setAttribute("method","GET"),e.setAttribute("action",$(this).attr("href")),r($(e))}))},submitForm:r}}(jQuery),Utility=function(){var t=$("#result-box"),e=$("#result-title"),r=$("#result-text");function a(a,o){n(),r.html(a),r.hasClass("alert")?o||(e.html(Translator.translate("utility.result.success")),r.removeClass("alert")):o&&(e.html(Translator.translate("utility.result.error")),r.addClass("alert")),t.modal()}function o(t){a(t,!1)}function s(t){a(t,!0)}function n(){$(":input").removeClass("error"),$(".alert.help-text").addClass("d-none")}function i(t){if(n(),t.hasOwnProperty("errors")){var e=0;for(var r in t.errors){var a=t.errors[r],o=/^[^.]+\.\d+$/.test(r)?r.replace(".",""):$('[name="'+r+'"]').attr("id"),s="object"===_typeof(a)?a[0]:a;if(o)$("#"+o).addClass("error"),$("#"+o+"-help-text").text(s).removeClass("d-none"),"budget_type"!==r&&"milerate_subtype"!==r&&"taxi_subtype"!==r&&"biketaxi_subtype"!==r||($("#"+r).addClass("error"),$("#"+r+"-help-text").text(s).removeClass("d-none")),$("#toggle-error-message").length&&0===e&&("milerate_subtype"===r||"taxi_subtype"===r||"biketaxi_subtype"===r?$("html, body").animate({scrollTop:$("#"+r+"-help-text").offset().top},1e3):$("html, body").animate({scrollTop:$("#"+o).offset().top},1e3));else{var i=$('[name="'+r+'[]"]').parents(".checkbox-group").attr("id");$("#"+i+"-help-text").text(s).removeClass("d-none")}e++}}}function l(t,e){n();var r="<h5>"+Translator.translate("utility.calling_system_administrator")+"</h5>";r+="<strong>"+Translator.translate("utility.error_url")+"</strong> "+e+"<br>",r+="<strong>"+Translator.translate("utility.error_status_code")+"</strong> "+t.status+"<br>",s(r+="<strong>"+Translator.translate("utility.error_status_text")+"</strong> "+t.statusText+"<br>")}function c(t,e){t.statusText=Translator.translate("utility.json_response_error"),l(t,e)}function u(e,r){switch(r.status){case 422:case 429:i(r.responseJSON);break;case 200:if(r.hasOwnProperty("responseJSON")){var a=r.responseJSON;!0===a.success?a.hasOwnProperty("message")?(t.on("hidden.bs.modal",(function(){a.redirectedUrl?location.href=a.redirectedUrl:e.trigger("reset")})),o(a.message)):a.redirectedUrl&&(location.href=a.redirectedUrl):s(a.message)}else c(r,e.attr("action"));break;default:r.hasOwnProperty("responseJSON")&&r.responseJSON.hasOwnProperty("message")?s(r.responseJSON.message):l(r,e.attr("action"))}}function m(t,e,r){"function"==typeof r?r.apply(this,[t,e]):u(t,e)}function f(t){return"GET"===t.attr("method")?t.serialize():new FormData(t.get(0))}return{submitForm:function(t,e){$.ajax({url:t.attr("action"),method:t.attr("method"),data:f(t),cache:!1,contentType:!1,processData:!1,success:function(r,a,o){m(t,o,e)},error:function(r){m(t,r,e)}})},displaySuccessMessageBox:o,displayErrorMessageBox:s,displayInvalidInputs:i,displayUnknownError:l,displayJsonResponseError:c,clearErrors:n,ResultBoxSelector:t,takeSubmitAction:u,runCallbackFunction:m,getFormData:f}}(jQuery),LoadMore=(jQuery,{initialize:function(){var t=1;$(document).on("click","#loadMore",(function(){Utility.clearErrors(),t=parseInt(t+1);var e=$(this).attr("data-url")+"?page="+t;console.log(["loadmore",e,t]),$.ajax({url:e,method:"GET",cache:!1,contentType:!1,processData:!1,success:function(t){t.data?$("#content-list-box").append(t.data):($("#loadMore").hide(),$("#loadmoreBox").css("display","none"))}})}))}}),PasswordToggle=(jQuery,{initialize:function(){$("#password-field").click((function(){$(".fa-eye").length?($("#password-field").html(""),$("#password-field").html('<i class="fa fa-eye-slash"></i>'),$("#password").attr("type","text")):($("#password-field").html(""),$("#password-field").html('<i class="fa fa-eye"></i>'),$("#password").attr("type","password"))}))}});$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$(document).ready((function(){LoadMore.initialize(),Search.initialize(),Confirmation.initialize(),Form.initialize(),PasswordToggle.initialize()}));
