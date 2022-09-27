$(document).ready(function() {

	$(".modifier").click(function(){
		var id = $(this).attr("data-id");
		var image = $(this).attr("data-image");
		var artcle = $(this).attr("data-article");
		var prx = $(this).attr("data-prix");
		$("#id").val(id);
		$("#image").val(image);
		$("#article").val(artcle);
		$("#prix").val(prx);
	})

})
 