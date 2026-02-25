jQuery(document).ready(function() {
  // Construct URL object using current browser URL
  var url = new URL(document.location);

  // Get query parameters object
  var params = url.searchParams;

  // Get value of paper
  var paper = params.get("send_to");
  console.log(paper);

  // Set it as the dropdown value
  $("#input_6_1").val(paper);
});