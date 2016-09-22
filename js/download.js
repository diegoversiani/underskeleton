/**
 * File download.js.
 *
 * Show thanks page when download form is submited.
 */
( function() {
  var $form = document.querySelector('.download-form__form');
  var $form_section = document.querySelector('#download-form');
  var $thanks_section = document.querySelector('#thanks');

  function download_submit() {
    $form_section.style.display = 'none';
    $thanks_section.style.display = 'block';
  }

  if($form.addEventListener){
      $form.addEventListener("submit", download_submit, false);
  }else if($form.attachEvent){
      $form.attachEvent('onsubmit', download_submit);
  }

})();