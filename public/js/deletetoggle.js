$('.deletetoggle').click(function(){
	$(this).next().toggle();
	$(this).next().next().toggle();
});

$('.hidetoggle').click(function(){
	$(this).toggle();
	$(this).prev().toggle();
});