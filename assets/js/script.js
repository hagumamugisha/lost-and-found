$(document).ready(function(){
	$("#btn-img").click(function(){
		$("#item-img").click();
	});

	$("#item-img").change(function(e){
		$("#item-img-name").html(e.target.files[0].name);
	});

	$("#item-type").change(function(e) {
		var nama = e.target.value;
		$(".shown").removeClass("shown").addClass("hidden");
		$("div[data-option="+ nama + "]").addClass("shown").removeClass("hidden");

		if(nama == "uang"){
			$("label[for=item-subtype]").html("Nominal<span>*</span>");
		}else{
			$("label[for=item-subtype]").html("Subkategori<span>*</span>");
		}
	});
})