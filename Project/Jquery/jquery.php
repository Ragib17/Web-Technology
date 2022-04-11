<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
</script>
</head>
<body>
<div class = "jColor">

<h2><p>Our staff members are our pride</p></h2>
</div>
<div class = "jjColor">
<button id="hide">Hide</button>
<button id="show">Show</button>
</div>

</body>
</html>