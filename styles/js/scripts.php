<!-- the sitewide javascript assests -->
<script type="text/javascript">
// auto removes the values in text field if they have value of text
$(document).ready(function(){
	swapValues = [];
	    $(".text").each(function(i){
	        swapValues[i] = $(this).val();
	        $(this).focus(function(){
	            if ($(this).val() == swapValues[i]) {
	                $(this).val("");
	            }
	        }).blur(function(){
	            if ($.trim($(this).val()) == "") {
	                $(this).val(swapValues[i]);
	            }
	        });
	    });
});
</script>