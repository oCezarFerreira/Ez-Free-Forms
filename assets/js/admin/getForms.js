jQuery(document).ready(function ($) {
  $('.ezff').click(function () {
    $.get(ez_free_forms.ajax_url,
      {
        action: 'ezff_get_forms',
      },
      function (data) {
        $('.ezff-new-data').html(data.test);
      });
  });
});
