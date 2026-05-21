console.log('HELLO JS HELLO JS'); 

const accordionBtns = document.querySelectorAll(".accordion");

document.addEventListener("DOMContentLoaded", () => {
  console.log('PARENT'); 
  const accordions = document.querySelectorAll(".accordion");
  console.log(accordions); 

  // click handler
  accordions.forEach((accordion) => {
    accordion.addEventListener("click", function (e) {
      e.preventDefault(); 
      console.log(this); 
      const targetId = this.getAttribute("data-accordion-id");
      console.log(targetId); 
      toggleAccordion(targetId);
      console.targetId; 
    });
  });
});

// function to open/close by id
// function to open/close by id
function toggleAccordion(id) {
  const content = document.getElementById(id);
  const button = document.querySelector(`[data-accordion-id="${id}"]`);

  if (!content || !button) return;

  const isOpen = button.classList.contains("is-open");

  if (isOpen) {
    // Closing
    button.classList.remove("is-open");
    button.classList.add("is-closed");

    content.style.maxHeight = content.scrollHeight + "px"; // set to current height
    requestAnimationFrame(() => {
      content.style.maxHeight = null; // let CSS transition it down
    });
  } else {
    // Opening
    button.classList.remove("is-closed");
    button.classList.add("is-open");

    content.style.maxHeight = content.scrollHeight + "px";
  }
}

document.addEventListener("scroll", function () {
  const header = document.querySelector("header.site-header"); // adjust selector if needed
  if (!header) return;

  if (window.scrollY > 0) {
    header.classList.add("is-scrolling");
  } else {
    header.classList.remove("is-scrolling");
  }
});
