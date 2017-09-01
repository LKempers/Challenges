function CookieCutter() {

this.size;
this.hasChocolateChips;

this.addChocolateChips = function addChocolateChips(){
	this.hasChocolateChips = true;
}
this.removeChocolateChips = function removeChocolateChips(){
tthis.hasChocolateChips = false;

}
}

cookie1.removeChocolateChips();
cookie2.addChocolateChips();
  


var cookie1 = new CookieCutter(); 
cookie1.size = ' medium ';
cookie1.hasChocolateChips = 'true';

var cookie2 = new CookieCutter(); 
cookie2.size = ' large ';
cookie2.hasChocolateChips = 'false';




document.getElementById("cookie1").innerHTML = 
"cookie 1 is" + cookie1.size + "and hasChocolateChips is " + cookie1.hasChocolateChips;
document.getElementById("cookie2").innerHTML = 
"cookie 2 is" + cookie2.size + "and hasChocolateChips is " + cookie2.hasChocolateChips;


