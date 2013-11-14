<div class="abouts form">
<?php echo $this->Form->create('About'); ?>
	<fieldset>
		<legend><?php echo __('Edit About'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo',array('class'=>'form-control'));
		echo $this->Form->input('contenido',array('class'=>'form-control wysiwyg'));
	?>
	</fieldset>
	<script>	
		$(function(){
			tinymce.init({
		      relative_urls: false,
		      selector: "textarea.wysiwyg",
		      plugins: [
		                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
		                "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
		                "table contextmenu directionality emoticons paste textcolor filemanager"
		            ],
		            image_advtab: true,
		      toolbar: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | image | preview code",
		      height : 300,
		      resize : false
		  });
		});
	</script>
<?php echo $this->Form->end(array('label'=>__('Guardar'),'class'=>'btn btn-success')); ?>
</div>
