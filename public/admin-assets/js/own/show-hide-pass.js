var showPass = $(".showPass");

showPass.click(function() {
  var $this = $(this);

  if ($this.text().toLowerCase() === "show") {
    $this.text("Hide");
    $this
  	.prev("input")
  	.prop("type", "text");
  } else {
    $this.text("Show");
    $this
  	.prev("input")
  	.prop("type", "password");
  }
});
