// Generated by CoffeeScript 1.7.1
(function() {
  $(function() {
    $('#launcher1').click(function() {
      var iteration;
      iteration = $(this).data('iteration') || 1;
      switch (iteration) {
        case 1:
          $('.select').addClass('activo');
          break;
        case 2:
          $('.select').removeClass('activo');
          break;
      }
      iteration++;
      if (iteration > 2) {
        iteration = 1;
      }
      return $(this).data('iteration', iteration);
    });
    return $('.select li p').click(function() {
      var nuevocont;
      nuevocont = $(this).text();
      $('#launcher1').data('iteration', 1);
      $('.select').removeClass('activo');
      return $('#princ').text(nuevocont);
    });
  });

}).call(this);
