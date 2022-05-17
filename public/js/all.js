function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

/**
 * @namespace
 * @desc Handles all confirmation boxes.
 */
var Confirmation = function () {
  var
  /**
   * @memberOf Confirmation
   * @access private
   * @desc Confirmation box
   * @constant {jQuery}
   */
  ConfirmationBox = $('#confirmation-box'),

  /**
   * @memberOf Confirmation
   * @access private
   * @desc Confirmation text
   * @constant {jQuery}
   */
  ConfirmationText = $('#confirmation-text'),

  /**
   * @memberOf Confirmation
   * @access private
   * @desc Acceptance button
   * @constant {jQuery}
   */
  AcceptanceButton = $('#yes-answer');
  /**
   * @memberOf Confirmation
   * @access public
   * @desc Confirm to delete an object.
   * @param {jQuery} deletionForm - Deletion form
   * @param {jQuery} searchForm - Search form
   */

  function confirmToDelete(deletionForm, searchForm) {
    AcceptanceButton.data('form-id', '#' + deletionForm.attr('id'));
    AcceptanceButton.data('callback-function', function (form, jqXHR) {
      switch (jqXHR.status) {
        case 422:
          Utility.displayErrorMessageBox(Object.values(jqXHR.responseJSON.errors).join('<br>'));
          break;

        case 200:
          if (jqXHR.hasOwnProperty('responseJSON')) {
            var result = jqXHR.responseJSON;

            if (result.success === true) {
              Utility.displaySuccessMessageBox(result.message);
              searchForm.submit();
            } else {
              Utility.displayErrorMessageBox(result.message);
            }
          } else {
            Utility.displayJsonResponseError(jqXHR, form.attr('action'));
          }

          break;

        default:
          Utility.displayUnknownError(jqXHR, form.attr('action'));
          break;
      }
    });
    ConfirmationText.html(deletionForm.data('deletion-confirmation-message') + deletionForm.data('info') + '?');
    ConfirmationBox.modal();
  }
  /**
   * @memberOf Confirmation
   * @access public
   * @desc Initialize Confirmation module.
   */


  function initialize() {
    AcceptanceButton.click(function (event) {
      event.preventDefault();
      ConfirmationBox.modal('toggle');
      Utility.submitForm($(AcceptanceButton.data('form-id')), AcceptanceButton.data('callback-function'));
    });
  }

  return {
    confirmToDelete: confirmToDelete,
    initialize: initialize
  };
}(jQuery);
/**
 * @namespace
 * @desc Handles form management.
 */


var Form = function () {
  var
  /**
   * @memberOf Form
   * @access private
   * @desc Submission form
   * @const {jQuery}
   */
  SubmissionForm = $('.submission-form'),

  /**
   * @memberOf Form
   * @access private
   * @desc reCAPTCHA form
   * @const {jQuery}
   */
  RecaptchaForm = $('.recaptcha-form'),

  /**
   * @memberOf Form
   * @access private
   * @desc Deletion confirmation selector
   * @const {string}
   */
  DeletionConfirmationSelector = '.deletion',

  /**
   * @memberOf FormSubmitElement
   * @access private
   * @desc Button to submit form
   * @constant {jQuery}
   */
  FormSubmitElement = $('.form-submit');
  /**
   * @memberOf Form
   * @access public
   * @desc Initialize Form module.
   */

  function initialize() {
    $('#join-form').click(function (event) {
      window.console.log('test'); //Utility.submitForm( $( this ).closest( "form" ) );
    });
    SubmissionForm.submit(function (event) {
      event.preventDefault();
      Utility.submitForm($(this));
    });
    RecaptchaForm.submit(function (event) {
      var _this = this;

      event.preventDefault();

      _submitEvent = function _submitEvent() {
        Utility.submitForm($(_this));
      };
    });
    FormSubmitElement.on('click', function (event) {
      event.preventDefault();
      $(this).closest('form').submit();
    });
    Search.SearchForm.submit(function (event) {
      event.preventDefault();
      window.console.log('submit');
      Search.submitForm($(this));
    });
    Search.ResultDiv.on('submit', DeletionConfirmationSelector, function (event) {
      event.preventDefault();
      Confirmation.confirmToDelete($(this), Search.SearchForm);
    });
    $('.deletion').submit(function (event) {
      event.preventDefault();
      Confirmation.confirmToDelete($(this), Search.SearchForm);
    });
  }

  return {
    initialize: initialize
  };
}(jQuery);
/**
 * @namespace
 * @desc Handles search form management.
 */


var Search = function () {
  var
  /**
   * @memberOf Search
   * @access public
   * @desc div element to display a search result
   * @constant {jQuery}
   */
  ResultDiv = $('#search-result'),

  /**
   * @memberOf Search
   * @access public
   * @desc div element to display a search result
   * @constant {jQuery}
   */
  GiveResultDiv = $('#give-result-box'),

  /**
   * @memberOf Search
   * @access public
   * @desc div element to display a search result
   * @constant {jQuery}
   */
  ReceiveResultDiv = $('#receive-result-box'),

  /**
   * @memberOf Search
   * @access public
   * @desc Search form
   * @const {jQuery}
   */
  SearchForm = $('#search-form'),

  /**
   * @memberOf Search
   * @access public
   * @desc Search form
   * @const {jQuery}
   */
  SearchDetailForm = $('#search-form-detail');
  /**
   * @memberOf Search
   * @access public
   * @desc Submit a search form.
   * @param {jQuery} form - Search form
   */

  function submitForm(form) {
    ResultDiv.removeClass('alert');
    Utility.submitForm(form, function (form, jqXHR) {
      Utility.clearErrors();

      switch (jqXHR.status) {
        case 422:
          Utility.displayInvalidInputs(jqXHR.responseJSON);
          ResultDiv.html('');
          break;

        case 200:
          $('#content-list-box').empty();
          $('#content-list-box').html(jqXHR.responseJSON.data);
          $('.gif-loader').hide();
          $('input[name=search]').empty();
          break;

        default:
          var message = jqXHR.statusText;

          if (jqXHR.hasOwnProperty('responseJSON') && jqXHR.responseJSON.hasOwnProperty('message')) {
            message = jqXHR.responseJSON.message;
          }

          ResultDiv.html(Translator.translate('error') + ' ' + message).addClass('alert');
          break;
      }
    });
  }
  /**
   * @memberOf Search
   * @access private
   * @desc Bind pagination.
   */


  function bindPagination() {
    ResultDiv.on('click', '.pagination a', function (event) {
      event.preventDefault();
      var form = document.createElement('form');
      form.setAttribute('method', 'GET');
      form.setAttribute('action', $(this).attr('href'));
      submitForm($(form));
    });
  }
  /**
   * @memberOf Search
   * @access public
   * @desc Initialize search module.
   */


  function initialize() {
    bindPagination();
  }

  return {
    ResultDiv: ResultDiv,
    SearchForm: SearchForm,
    initialize: initialize,
    submitForm: submitForm
  };
}(jQuery);
/**
 * @namespace
 * @desc Handles all utility functions.
 */


var Utility = function () {
  var
  /**
   * @memberOf Utility
   * @access public
   * @desc Result box
   * @constant {jQuery}
   */
  ResultBoxSelector = $('#result-box'),

  /**
   * @memberOf Utility
   * @access private
   * @desc Result title
   * @constant {jQuery}
   */
  ResultTitleSelector = $('#result-title'),

  /**
   * @memberOf Utility
   * @access private
   * @desc Result text
   * @constant {jQuery}
   */
  ResultTextSelector = $('#result-text');
  /**
   * @memberOf Utility
   * @access private
   * @desc Display a result message box.
   * @param {String} message - Result message
   * @param {Boolean} isError - Error flag ( true = error, false = not error )
   */

  function displayMessageBox(message, isError) {
    clearErrors();
    ResultTextSelector.html(message);

    if (ResultTextSelector.hasClass('alert')) {
      if (!isError) {
        ResultTitleSelector.html(Translator.translate('utility.result.success'));
        ResultTextSelector.removeClass('alert');
      }
    } else {
      if (isError) {
        ResultTitleSelector.html(Translator.translate('utility.result.error'));
        ResultTextSelector.addClass('alert');
      }
    }

    ResultBoxSelector.modal();
  }
  /**
   * @memberOf Utility
   * @access public
   * @desc Display a success message box.
   * @param {String} successMessage - Success message
   */


  function displaySuccessMessageBox(successMessage) {
    displayMessageBox(successMessage, false);
  }
  /**
   * @memberOf Utility
   * @access public
   * @desc Display an error message box.
   * @param {String} errorMessage - Error message
   */


  function displayErrorMessageBox(errorMessage) {
    displayMessageBox(errorMessage, true);
  }
  /**
   * @memberOf Utility
   * @access public
   * @desc Clear all errors.
   */


  function clearErrors() {
    $(':input').removeClass('error');
    $('.alert.help-text').addClass('d-none');
  }
  /**
   * @memberOf Utility
   * @access public
   * @desc Display invalid inputs.
   * @param {JSON} error - Input error list
   */


  function displayInvalidInputs(error) {
    clearErrors();

    if (error.hasOwnProperty('errors')) {
      var i = 0;

      for (var name in error['errors']) {
        var errorMessage = error['errors'][name],
            id = /^[^.]+\.\d+$/.test(name) ? name.replace('.', '') : $('[name="' + name + '"]').attr('id'),
            errorText = _typeof(errorMessage) === 'object' ? errorMessage[0] : errorMessage;

        if (id) {
          $('#' + id).addClass('error');
          $('#' + id + '-help-text').text(errorText).removeClass('d-none');

          if (name === 'budget_type' || name === 'milerate_subtype' || name === 'taxi_subtype' || name === 'biketaxi_subtype') {
            $('#' + name).addClass('error');
            $('#' + name + '-help-text').text(errorText).removeClass('d-none');
          }

          if ($('#toggle-error-message').length) {
            if (i === 0) {
              if (name === 'milerate_subtype' || name === 'taxi_subtype' || name === 'biketaxi_subtype') {
                $('html, body').animate({
                  scrollTop: $('#' + name + '-help-text').offset().top
                }, 1000);
              } else {
                $('html, body').animate({
                  scrollTop: $('#' + id).offset().top
                }, 1000);
              }
            }
          }
        } else {
          var parentId = $('[name="' + name + '[]"]').parents('.checkbox-group').attr('id');
          $('#' + parentId + '-help-text').text(errorText).removeClass('d-none');
        }

        i++;
      }
    }
  }
  /**
   * @memberOf Utility
   * @access public
   * @desc Display an unknown error.
   * @param {XMLHttpRequest} jqXHR - jQuery XMLHttpRequest object
   * @param {String} url - The URL that occurs the error
   */


  function displayUnknownError(jqXHR, url) {
    clearErrors();
    var errorText = '<h5>' + Translator.translate('utility.calling_system_administrator') + '</h5>';
    errorText += '<strong>' + Translator.translate('utility.error_url') + '</strong> ' + url + '<br>';
    errorText += '<strong>' + Translator.translate('utility.error_status_code') + '</strong> ' + jqXHR.status + '<br>';
    errorText += '<strong>' + Translator.translate('utility.error_status_text') + '</strong> ' + jqXHR.statusText + '<br>';
    displayErrorMessageBox(errorText);
  }
  /**
   * @memberOf Utility
   * @access public
   * @desc Display an error message box when the data type is not JSON.
   * @param {XMLHttpRequest} jqXHR - jQuery XMLHttpRequest object
   * @param {String} url - The URL that occurs the error
   */


  function displayJsonResponseError(jqXHR, url) {
    jqXHR.statusText = Translator.translate('utility.json_response_error');
    displayUnknownError(jqXHR, url);
  }
  /**
   * @memberOf Utility
   * @access public
   * @desc Take a submitting action which only accepts json data type.
   * @param {jQuery} form - Form
   * @param {XMLHttpRequest} jqXHR - jQuery XMLHttpRequest object
   * > If jqXHR.status is not 422 or 429 then the jqXHR.responseJSON format must have the following keys below.
   *
   * Key | Explanation
   * - | -
   * **success** {Boolean} | It is a success status which it can be true or false.
   * **message** {String} | It is a response message which it can be an error message or a success message. *This is an optional key for a success case.*
   * **redirectedUrl** {String} | It is a redirected URL which the browser will be redirected to if success status is true. *This is an optional key.*
   *
   * **Note:** jqXHR.status is HTTP status code.
   */


  function takeSubmitAction(form, jqXHR) {
    switch (jqXHR.status) {
      case 422:
      case 429:
        displayInvalidInputs(jqXHR.responseJSON);
        break;

      case 200:
        if (jqXHR.hasOwnProperty('responseJSON')) {
          var result = jqXHR.responseJSON;

          if (result.success === true) {
            if (result.hasOwnProperty('message')) {
              ResultBoxSelector.on('hidden.bs.modal', function () {
                if (result.redirectedUrl) {
                  location.href = result.redirectedUrl;
                } else {
                  form.trigger('reset');
                }
              });
              displaySuccessMessageBox(result.message);
            } else if (result.redirectedUrl) {
              location.href = result.redirectedUrl;
            }
          } else {
            displayErrorMessageBox(result.message);
          }
        } else {
          displayJsonResponseError(jqXHR, form.attr('action'));
        }

        break;

      default:
        if (jqXHR.hasOwnProperty('responseJSON') && jqXHR.responseJSON.hasOwnProperty('message')) {
          displayErrorMessageBox(jqXHR.responseJSON.message);
        } else {
          displayUnknownError(jqXHR, form.attr('action'));
        }

        break;
    }
  }
  /**
   * @memberOf Utility
   * @access private
   * @desc Run a callback function.
   * @param {jQuery} form - Form
   * @param {XMLHttpRequest} jqXHR - jQuery XMLHttpRequest object
   * @param {function} [callbackFunction] - Callback function
   */


  function runCallbackFunction(form, jqXHR, callbackFunction) {
    if (typeof callbackFunction === 'function') {
      callbackFunction.apply(this, [form, jqXHR]);
    } else {
      takeSubmitAction(form, jqXHR);
    }
  }
  /**
   * @memberOf Utility
   * @access private
   * @desc Get form data.
   * @param {jQuery} form - Form
   * @return {Array|Object} Form data
   */


  function getFormData(form) {
    return form.attr('method') === 'GET' ? form.serialize() : new FormData(form.get(0));
  }
  /**
   * @memberOf Utility
   * @access public
   * @desc Submit a form and take an action.
   * @param {jQuery} form - Form
   * @param {function} [callbackFunction] - Callback function
   */


  function submitForm(form, callbackFunction) {
    $.ajax({
      url: form.attr('action'),
      method: form.attr('method'),
      data: getFormData(form),
      cache: false,
      contentType: false,
      processData: false,
      success: function success(result, statusText, jqXHR) {
        runCallbackFunction(form, jqXHR, callbackFunction);
      },
      error: function error(jqXHR) {
        runCallbackFunction(form, jqXHR, callbackFunction);
      }
    });
  }

  return {
    submitForm: submitForm,
    displaySuccessMessageBox: displaySuccessMessageBox,
    displayErrorMessageBox: displayErrorMessageBox,
    displayInvalidInputs: displayInvalidInputs,
    displayUnknownError: displayUnknownError,
    displayJsonResponseError: displayJsonResponseError,
    clearErrors: clearErrors,
    ResultBoxSelector: ResultBoxSelector,
    takeSubmitAction: takeSubmitAction,
    runCallbackFunction: runCallbackFunction,
    getFormData: getFormData
  };
}(jQuery);
/**
 * @namespace
 * @desc Handles Lazyload management.
 */


var LoadMore = function () {
  /**
   * @memberOf LoadMore
   * @access public
   * @desc Initialize LoadMore module.
   */
  function initialize() {
    var page = 1;
    $(document).on('click', '#loadMore', function () {
      Utility.clearErrors();
      page = parseInt(page + 1);
      var url = $(this).attr('data-url') + '?page=' + page;
      console.log(['loadmore', url, page]);
      $.ajax({
        url: url,
        method: 'GET',
        cache: false,
        contentType: false,
        processData: false,
        success: function success(result) {
          if (result.data) {
            $('#content-list-box').append(result.data);
          } else {
            $('#loadMore').hide();
            $('#loadmoreBox').css('display', 'none');
          }
        }
      });
    });
  }

  return {
    initialize: initialize
  };
}(jQuery);
/**
 * @namespace
 * @desc Password toggle.
 */


var PasswordToggle = function () {
  /**
   * @memberOf Footer
   * @desc Initialize Footer module.
   * @access public
   * @return {void}
   */
  function initialize() {
    $("#password-field").click(function () {
      if ($('.fa-eye').length) {
        $('#password-field').html('');
        $('#password-field').html('<i class="fa fa-eye-slash"></i>');
        $('#password').attr('type', 'text');
      } else {
        $('#password-field').html('');
        $('#password-field').html('<i class="fa fa-eye"></i>');
        $('#password').attr('type', 'password');
      }
    });
  }

  return {
    initialize: initialize
  };
}(jQuery);
/**
 * @namespace
 * @desc Handles menu management.
 */


var SearchBox = function () {
  function initialize() {
    $('#projectSelect').on('change', function () {
      searchOption();
    });
    $('#propertySelect').on('change', function () {
      searchOption();
    });
    $('#priceSelect').on('change', function () {
      searchOption();
    });
    $('#unitSelect').on('change', function () {
      searchOption();
    });
    $('#locationSelect').on('change', function () {
      searchOption();
    });

    function searchOption() {
      var project = $('#projectSelect').val(),
          propertyType = $('#propertySelect').val(),
          price = $('#priceSelect').val(),
          unitType = $('#unitSelect').val(),
          location = $('#locationSelect').val();
      console.log(['search', project, propertyType, price, unitType, location]);
      $.ajax({
        url: 'search',
        method: 'POST',
        data: 'project=' + project,
        headers: {
          'X-CSRF-TOKEN': $('input[name="csrf-token"]').attr('content')
        },
        success: function success(result, status, xhr) {
          console.log(result);
        }
      });
    }
  }

  return {
    initialize: initialize
  };
}(jQuery);

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$(document).ready(function () {
  /** Initialize all JavaScript modules. */
  LoadMore.initialize();
  Search.initialize();
  Confirmation.initialize();
  Form.initialize();
  PasswordToggle.initialize();
  SearchBox.initialize();
});
