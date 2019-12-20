<!DOCTYPE html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CDNs 	 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!--Animation css CDNs 	 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
  <style>
	  .popup{
	  animation-delay: 3s;
	  margin-top: 15%;
		}
  </style>
<body>
  <!-- The Modal -->
<div id="p" class="popup animated bounceIn">
    <div class="modal-dialog">
      <div class="modal-content">  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">AutoPopup Heading</h4>
          <button class="close btn1">&times;</button>
        </div>     
        <!-- Modal body -->
        <div class="modal-body">
         Hi I'm Auto Popup After 3seconds.
        </div>        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger btn2">Close</button>
        </div>
      </div>
    </div>
 </div>
<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("#p").hide(); //we can use remove() instead of hide
  });
  $(".btn2").click(function(){
    $("#p").hide();	//we can use remove() instead of hide
  });
});
</script>
</body>
</html>
