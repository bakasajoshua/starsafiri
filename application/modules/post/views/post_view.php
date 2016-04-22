<style type="text/css">
	.input-group{
		margin-top: 0.5em;
	}
	/*.user_name{
	    font-size:14px;
	    font-weight: bold;
	}
	.comments-list .media{
	    border-bottom: 1px dotted #ccc;
	}*/
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
    <div class="mt40">

		<section class="row">
			<?php echo $records;?>
        </section>
	</div>

	<!-- Advertisment section-->
	
</div>
<div class="col-md-3">
		<div class="top_strip" style="border-bottom:thin dotted #c7cdd0;">
                    <div class="top_stripA" style="text-indent:5px;">Star Safaris on twitter</div>
                    <!-- <div class="top_stripB"><center><img src="<?php// echo base_url() .'assets/icons/2_.png'?>" style="height:20px;"/></center></div> -->
                </div>

                <!--embeded twitter timelines -->
                <div class="mid_in_slideA">
                     <a class="twitter-timeline" href="https://twitter.com/starsafiri" data-widget-id="720952162025648128">Tweets by @starsafiri</a>Star Safaris</a>
                     <script src="<?php echo base_url() .'assets/js/social_media/twitter.js'?>"></script>
                    
                </div>
                <!-- End of embede twitter timelines -->
                <!-- Footer of the partnership column -->
                <div class="top_strip" style="border-top:thin dotted #c7cdd0;">
                    <div class="top_stripA" style="margin-top:0px; color:#FFF; text-indent:5px;"><a href="#">Recommended tours </a></div>
                    <!-- <div class="top_stripB"><center><img src="<?php //echo base_url() . 'assets/icons/2__.png'?>" style="height:20px;"/></center></div> -->
                </div>
	</div>
</div>
<!-- Default bootstrap modal example -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Comments</h4>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row" id="comments">
        		<!-- <div class="col-md-4">
        			<img src="<?php echo base_url();?>assets/uploads/images.jpg" style="margin-bottom: 0.5em;">
        			<br>
        			<a class="media-left" href="#">
                      <img src="http://lorempixel.com/40/40/people/3/">
                    </a>
                    <div class="media-body">
                        
                      <h4 class="media-heading user_name">Joshua Bakasa</h4>
                      Am just awesome.
                      
                    </div>
                    <br>
	        		<div class="form-group">
			            <label for="comment" class="control-label">Comment:</label>
			            <input type="text" class="form-control" name="comment" id="comment" placeholder="Write a comment...">
			         </div>
        		</div>
        		<div class="col-md-6">
	        		<div class="page-header">
	                	<h1><small class="pull-right">45 comments</small> Comments </h1>
	                </div> 
                   	<div class="comments-list">
	                   	<div class="media">
	                       	<p class="pull-right"><small>5 days ago</small></p>
	                        <a class="media-left" href="#">
	                          <img src="http://lorempixel.com/40/40/people/1/">
	                        </a>
	                        <div class="media-body">
	                            
	                          <h4 class="media-heading user_name">Baltej Singh</h4>
	                          Wow! this is really great.
	                          
	                        </div>
	                     </div>
                   	</div>
        		</div> -->
        	</div>
        </div>
      </div>
      
    </div>
  </div>
  <script type="text/javascript">
  	$(document).ready(function(){


		$('#comment_button').click(function(){
			comment = $('#comment').val();
			console.log(comment);
			
		});
  	});
  </script>
</div>

<!-- <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
 -->
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
        $("#myModal").on("show.bs.modal", function(e) {
		    var link = $(e.relatedTarget);
		    $(this).find(".modal-body").load(link.attr("href"));
		});

		// Attach a submit handler to the form
    $( ".comment_form" ).submit(function( event ) {
         
        // Stop form from submitting normally
        event.preventDefault();
        
        // Get some values from elements on the page:
        var $form = $( this ),
        em = $form.find( "input[name='comment']" ).val(),
        id = $form.find( "input[name='post_id']" ).val(),
        
        url = $form.attr( "action" );
     
        // Send the data using post
        var posting = $.post( url, { description: em, post_id: id } );
     
        // Put the results in a div
        posting.done(function( data ) {
          console.log(data);
        });
    });
    });
	
  function like_button_clicked(id)
  {
  	// e.preventDefault();
    $.get('<?php echo base_url();?>post/likes/'+id, function(data){
      obj =jQuery.parseJSON(data);
      $('#like_button'+id).empty().append('<i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3" >'+obj+'</div>');
    });
  // <i class="glyphicon glyphicon-thumbs-up" style="margin-right: 0.2em;"></i><span class="badge">'.$value['likes'].'</span>
  }

  function comment_button_clicked(id)
  {
  	// $('#comments').empty();
  	// $.get('<?php echo base_url();?>post/get_posts_details/'+id, function(data){
  	// 	$('#comments').append(data);
  	// });
  }
</script>

            
                
                  
                    
                    
                
            
