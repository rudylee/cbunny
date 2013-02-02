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

  $('#user-typeahead').typeahead({
    source: function (query, process) {
      return $.ajax({
        url: CbunnyObj.APP_PATH + 'users/typeahead_search',
        type: 'get',
        data: {q: query},
        dataType: 'json',
        success: function (json) {
          return process(json);
        }
      });
    }
  });

});