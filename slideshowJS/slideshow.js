function loadXMLDoc() {
  var xhttps = new XMLHttpRequest();
  xhttps.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttps.open("GET", "http://test.competa.com/js-movies-test/data/movies-json.php", true);
  xhttps.send();
}

 var imgs = ["http://test.competa.com/js-movies-test/data/images/box_descendants.png",
 			 "http://test.competa.com/js-movies-test/data/images/box_avatar.png",
 			];

 			//loop vast om de fotos te importeren.

