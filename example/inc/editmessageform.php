
<form id="message-form" method="post" role="form" style="display: block;">
<div class="form-group">
	<?php print_r($vars);?>
	<textarea class="form-control" rows="5" id="message" name="message" value="<?php echo $vars['message'];?>"></textarea>
</div>
<div class="form-group">
	<input type="hidden" name="parent_id" id="parent_id" tabindex="1" class="form-control"  value="<?php echo $vars;?>">
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<input type="button" name="message-submit" id="message-submit" tabindex="4" class="form-control btn btn-register" value="Submit Message">
		</div>
	</div>
</div>
</form>
<script type="text/javascript">
	$(function() {
		$("#message-submit").click(function(){
				
					$.ajax({
					  method: "POST",
					  url: "<?=saveMessage?>",
					  data: { message: $("#message").val(), parent_id: $("#parent_id").val() }
					}).done(function( msg ) {

						if($("#parent_id").val() > 0){
							location.replace("<?php echo baseURL;?>/example/messages.php");
						}else{
							alert(msg);
						}
						
					});

		});
	});
</script>



