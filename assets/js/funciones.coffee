$ ->
	$('#launcher1').click ->
		iteration = $(this).data('iteration') or 1
		switch iteration
			when 1
				$('.select').addClass 'activo'
				break
				
				
			when 2
				$('.select').removeClass 'activo'
				break
		iteration++
		if iteration>2
			iteration=1
		$(this).data 'iteration',iteration
	$('.select li p').click ->
		nuevocont = $(this).text()
		$('#launcher1').data 'iteration',1
		$('.select').removeClass 'activo'
		$('#princ').text nuevocont
