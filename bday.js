$(document).ready(
	function(event) {
		
//	$("#audiotag1").play();

	$("nav li")
		.each(
			function(i) {
				$(this).unbind("click");
				$(this)
					.bind("click",
						function(event) {
							$(".mainTabs").hide();
							$("#"+$(this).attr("tabs")+"").show();
						}
					);
			}
		);
		
		$("#content-2 input").unbind("click");
		$("#content-2 input")
			.bind("click",
				function(event) {
					alert(1);
				}
			);
			
		$("#content-3 input:eq(0)").unbind("click");
		$("#content-3 input:eq(0)")
			.bind("click",
				function(event) {
					alert(1);				
				}
			);

		$("#content-3 input:eq(1)").unbind("click");
		$("#content-3 input:eq(1)")
			.bind("click",
				function(event) {
					alert(2);				
				}
			);

		$("#content-4 input").unbind("click");
		$("#content-4 input")
			.bind("click",
				function(event) {
					alert(1);				
				}
			);

		$("#content-5 input").unbind("click");
		$("#content-5 input")
			.bind("click",
				function(event) {
					alert(1);				
				}
			);
})