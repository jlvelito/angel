$ ->
	$('.launcher1').click ->
		iteration = $(this).data('iteration') or 1
		switch iteration
			when 1
				$(this).parent().children('.select').addClass 'activo'
				break
				
				
			when 2
				$(this).parent().children('.select').removeClass 'activo'
				break
		iteration++
		if iteration>2
			iteration=1
		$(this).data 'iteration',iteration
	$('.select li p').click ->
		nuevocont = $(this).text()
		$(this).parent().parent().parent().children('.launcher1').data 'iteration',1
		$(this).parent().parent().removeClass 'activo'
		$(this).parent().parent().find('.princ').text nuevocont
	$('.tabs li').click ->
		$('.tabs li').removeClass 'activo'
		$(this).addClass 'activo'