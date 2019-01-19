
$(function() {
  /** Sorting of posts without form submission(on select change) */
  $('#sort-submit').hide();
  $('#sort').change(function() {
  $(this).parent('form').submit();
  });
});
