// Generated by CoffeeScript 1.7.1
(function() {
  $(function() {
    var audio = $('#quintet')[0];
    $('.checkar').click(function(){
        var iteration2;
        iteration2 = $(this).data('iteration') || 1;
        switch (iteration2) {
          case 1:
            $(this).addClass('activo');
            audio.play();
            break;
          case 2:
            $(this).removeClass('activo');
            audio.play();
            break;
        }
        iteration2++;
        if (iteration2 > 2) {
          iteration2 = 1;
        }
        return $(this).data('iteration', iteration2);
    });
    $('.launcher1').click(function() {
      var iteration;
      iteration = $(this).data('iteration') || 1;
      switch (iteration) {
        case 1:
          $(this).parent().children('.select').addClass('activo');
          audio.play();
          break;
        case 2:
          $(this).parent().children('.select').removeClass('activo');
          audio.play();
          break;
      }
      iteration++;
      if (iteration > 2) {
        iteration = 1;
      }
      return $(this).data('iteration', iteration);
    });
    $('.select li p').click(function() {
      var nuevocont;
      nuevocont = $(this).text();
      audio.play();
      $(this).parent().parent().parent().children('.launcher1').data('iteration', 1);
      $(this).parent().parent().removeClass('activo');
      return $(this).parent().parent().find('.princ').text(nuevocont);
    });
    
    $('.tabs li').click(function() {
      $('.tabs li').removeClass('activo');
      $(this).addClass('activo');
      var aprece = $(this).attr('rel');
      $('.tabular_data').css('display','none');
      $('#'+aprece+'').css('display','block');
      audio.play();
    });


    
  });

}).call(this);
