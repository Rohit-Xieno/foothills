

const mobileMenuIcon = document.getElementById('mobileMenuIcon');
const mainMenu = document.getElementById('mainMenu');
const menuIcon = document.getElementById('menuIcon');
const closeIcon = document.getElementById('closeIcon');

// menuIcon.addEventListener('click', function(){
//   mainMenu.style.display = "flex";
//   menuIcon.style.display = "none";
//   closeIcon.style.display = "block";
// })
// closeIcon.addEventListener('click', function(){
//   mainMenu.style.display = "none";
//   menuIcon.style.display = "block";
//   closeIcon.style.display = "none";
// })

mobileMenuIcon.addEventListener('click', function(){
  // mainMenu.style.display = "flex";
  mainMenu.classList.toggle('active');
  mobileMenuIcon.classList.toggle('active');
  // menuIcon.style.display = "none";
  // closeIcon.style.display = "block";
})
// closeIcon.addEventListener('click', function(){
//   mainMenu.style.display = "none";
//   menuIcon.style.display = "block";
//   closeIcon.style.display = "none";
// })

// jQuery(document).on('click', '.menu-item-has-children', function(e){
//   e.stopPropagation();
//   jQuery(this).toggleClass('active');
// });


window.addEventListener("load", function() {
	// store tabs variable
	let myTabs = document.querySelectorAll("ul.nav-tabs > li");
  function myTabClicks(tabClickEvent) {
		for (let i = 0; i < myTabs.length; i++) {
			myTabs[i].classList.remove("active");
		}
		let clickedTab = tabClickEvent.currentTarget;
		clickedTab.classList.add("active");
		tabClickEvent.preventDefault();
		let myContentPanes = document.querySelectorAll(".tab-pane");
		for (i = 0; i < myContentPanes.length; i++) {
			myContentPanes[i].classList.remove("active");
		}
		let anchorReference = tabClickEvent.target;
		let activePaneId = anchorReference.getAttribute("href");
		let activePane = document.querySelector(activePaneId);
		activePane.classList.add("active");
	}
	for (i = 0; i < myTabs.length; i++) {
		myTabs[i].addEventListener("click", myTabClicks)
	}
});


// Select all elements with the class 'menu-item-has-children'
let menuItem = document.querySelectorAll('.menu-item-has-children');

// Iterate over each 'menu-item-has-children' element
menuItem.forEach(element => {
    // Attach a click event listener to each 'menu-item-has-children' element
    element.addEventListener('click', () => {
        // Toggle the 'active-menu' class on the child '.sub-menu' element
        let submenu = element.querySelector('.sub-menu');
        if (submenu) {
            submenu.classList.toggle('active-menu');
            // Display an alert (this can be customized)
            // alert('Sub-menu clicked!');
        }
    });
});




(function($)
 {
    "use strict";
    $(document).ready(function() {
			$('.js-example-basic-single').select2({
				placeholder: 'Select One'
			});

    });
})(this.jQuery);


