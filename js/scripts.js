
jQuery(document).ready(function($) {
  // Site Preloader 
  $(window).load(function(){
    $('#preloader').fadeOut('slow',function(){
      $(this).remove();});
  });

});

/*============================================================================
  Front Page Modal (Lightbox) ---This is working fine
==============================================================================*/

class Modal {
  constructor(overlay) {
    this.overlay = overlay;
    const closeButton = overlay.querySelector('.button-close')
    closeButton.addEventListener('click', this.close.bind(this));
  }
  open() {
    this.overlay.classList.remove('is-hidden');
  }

  close() {
    this.overlay.classList.add('is-hidden');
  }
}
const modal = new Modal(document.querySelector('.modal-overlay'));
window.openModal = modal.open.bind(modal);
// window.openModal();

/*============================================================================
  Adding Front Page Images to Modal 
==============================================================================*/

// Gather Images and Get them inside the Modal
let insideModal = document.querySelector('.photos');
let images = Array.from(document.querySelectorAll('img'));
let markup = `
<ul id="imageList">
	${images.map(images => `<li class="currentPhoto">${images.outerHTML}</li>`).join('')}
</ul>
`;
insideModal.innerHTML = markup;

// This function get's the Next Button to work
function nextImage() {
	let imageList = document.querySelector('#imageList');
	let leftVal = imageList.style.left;
    console.log(imageList);
	imageList.style.left = (leftVal - 100) + "%";
	console.log(leftVal); 
}
// This function get's the Prev Button to work
function prevImage() {
	let imageList = document.querySelector('#imageList');
	let leftVal = imageList.style.left;
    console.log(imageList);
	imageList.style.left = (leftVal + 100) + "%";
	console.log(leftVal); 
}






/*
====================================
Example Red Box
====================================
*/
// This is the code that is making the red box move up and down 
// And this is the example I found on JS Fiddle to set up my Modal Navigation
// http://jsfiddle.net/jfriend00/pt46X/
function moveDown() {
    var obj = document.getElementById("box");
    var topVal = parseInt(obj.style.top, 10);
    obj.style.top = (topVal + 20) + "%";    
}

function moveUp() {
    var obj = document.getElementById("box");
    var topVal = parseInt(obj.style.top, 10);
    obj.style.top = (topVal - 20) + "%";    
}






