$(document).ready(function() {
	$(".button-collapse").sideNav({
		  menuWidth: 400, // Default is 240
      	  edge: 'right'
	});
	
	var mc = new Hammer($('body'));
		
	$(".new-comment").click(function() {
		$('#new-comment-modal').openModal();
	});
	
	$('select').material_select();
	
	$("code").wrap("<pre></pre>");
	Prism.highlightAll();
});