<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>css demo</title>
  <style>
  p {
    color: blue;
    width: 200px;
    font-size: 14px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
  <p>Just roll the mouse over me.</p>
 
  <p>Or me to see a color change.</p>
 
<script>
$(function(){
console.log("tt");
$( "p" ).on( "mouseover", function() {
	  $( this ).css( "color", "red" );
});
});

</script>
 
</body>
</html>
