/*global $, document, CbunnyObj */
$(document).ready(function () {

  $('#user-select2').select2({
    placeholder: "Search user auto complete",
    minimumInputLength: 1,
    ajax: {
      url: CbunnyObj.APP_PATH + 'users/search',
      dataType: 'json',
      data: function (term, page) {
        return {
          q: term
        };
      },
      results: function (data, page) {
        return { results: data };
      }
    }
  });

});