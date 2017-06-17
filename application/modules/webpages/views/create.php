<h1 class="page-header"><?= $headline ?></h1>
<?= validation_errors('<p class="alert alert-danger">') ?>

<?php
if(isset($flash)){
	echo $flash;
}
?>
<p>
	<a href="<?= base_url() ?>webpages/manage">
		<button type="button" class="btn btn-default">Previous Page</button>
	</a>
</p>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Page Details</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<?php $form_location = base_url()."webpages/create/".$update_id;?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
			  <fieldset>
				<div class="control-group">				
				  <label class="control-label" for="typeahead">Page Title </label>
				  <div class="controls">
					<input type="text" class="span6" name="page_title" value="<?= $page_title ?>">
				  </div>
				</div>  

				<div class="control-group hidden-phone">
				  <label class="control-label">Page Keywords</label>
				  <div class="controls">
					<textarea row="3" class="span6" name="page_keywords" style="resize:none;"><?php echo $page_keywords; ?></textarea>
				  </div>
				</div>

				<div class="control-group hidden-phone">
				  <label class="control-label">Page Description</label>
				  <div class="controls">
					<textarea row="3" class="span6" name="page_description" style="resize:none;"><?php echo $page_description; ?></textarea>
				  </div>
				</div>  

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Page Content</label>
				  <div class="controls">
					<textarea class="cleditor" id="textarea2" rows="3" name="page_content" ><?php echo $page_content; ?></textarea>
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary" name="submit" value="Submit">Save changes</button>
				  <button type="submit" class="btn" name="submit" value="Cancel">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->

<?php if(is_numeric($update_id)){ ?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Additional Options</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		<?php if ($update_id > 2) { ?>
			<a href="<?= base_url() ?>webpages/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete Page</button></a>
		<?php } ?>
			<a href="<?= base_url().$page_url ?>" target="_blank"><button type="button" class="btn btn-default">View Page</button></a>
		</div>
	</div><!--/span-->
</div><!--/row-->
<?php } ?>