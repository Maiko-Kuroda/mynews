(function($, window) {
  $(function() {
    // この中に処理を書きます
    
      $('h2').remove();
      $('#index1').text('<b>jQueryのtextメソッドで書き換え</b>');
      $('#index2').html('<b>jQueryのhtmlメソッドで書き換え</b>');
  　　$('#index1').append('<li>メソッド</li>');
  });
})(jQuery, window);

//