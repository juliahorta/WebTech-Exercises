
var images = new Array("img1.JPG", "img2.JPG", "img3.JPG");

var img = document.getElementById("gallery");
var j = 0;

function next(){
  if (j<(images.length -1)){
    j++;
  }
  img.src=images[j];
}


function prev(){
  if (j > 0){
    j--;
  }
  img.src=images[j];
}
