<style type="text/css">
	.input-group{
		margin-top: 0.5em;
	}
</style>
<div class="row">
	<div class="col-md-9 col-sm-12">
		<!-- Posting section -->
		<div class="row">
			<div class="panel panel-default">
			  	<div class="panel-body">
				    <form method="post" action="<?php echo base_url();?>post/submit" enctype="multipart/form-data">
				    	<input id="file-0a" class="file" name="cover" type="file" multiple data-min-file-count="1">
				    	
				    	<div class="input-group">
				    		<textarea class="form-control" name="post" id="post" placeholder="Write a post..." cols="50" required></textarea>
				    	</div>
				    	<div class="input-group">
				    		<input class="form-control" type="text" name="location" id="location" placeholder="Location" required>
				    	</div>
				    </form>
				</div>
				<hr>
			</div>
		</div>
		<!-- End of Posting section -->

	<!-- Advertisment section-->
	<div class="col-md-3">
		
	</div>
</div>

<script type="text/javascript">

	$('#file-fr').fileinput({
        language: 'fr',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
	});
    /*
    $(".file").on('fileselect', function(event, n, l) {
        alert('File Selected. Name: ' + l + ', Num: ' + n);
    });
    */
	$("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
	$("#file-4").fileinput({
		uploadExtraData: {kvId: '10'}
	});
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });    
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    /*
    $('#file-4').on('fileselectnone', function() {
        alert('Huh! You selected no files.');
    });
    $('#file-4').on('filebrowse', function() {
        alert('File browse clicked for #file-4');
    });
    */
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
        });
        */
    });
	
  function like_button_clicked(id)
  {
    $.get('<?php echo base_url();?>post/likes/'+id, function(data){
      obj =jQuery.parseJSON(data);
      $('#like_button'+id).html('<i class="glyphicon glyphicon-thumbs-up" style="margin-right: 0.2em;"></i><span class="badge">'+obj+'</span>');
    });
  // <i class="glyphicon glyphicon-thumbs-up" style="margin-right: 0.2em;"></i><span class="badge">'.$value['likes'].'</span>
  }
</script>