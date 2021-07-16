<a id="myTrigger" >Click Me For A Modal, hit ESCAPE to close</a>
<div id="myModal" class="full reveal" data-reveal></div>
<script>
$("#myTrigger").on("click",function(e) {
  e.preventDefault();
// cross domain ajax call will fail, need more work to set up CORS
//  $.get("http://textmechanic.com", function(data) {
//    $("#myModal").html(data).foundation("open");
//  });

  $("#myModal")
    .html('<object width="100%" height="100%" type="text/html" data="http://textmechanic.com" ></object>')
    .foundation("open");

});
</script>