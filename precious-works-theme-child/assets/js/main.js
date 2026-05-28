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

function setLottieHeight(height = 300) {
    document.querySelectorAll('figure.am-lottieplayer').forEach((el) => {
        el.style.height = height + 'px';
    });
    console.log('33'); 
}

setLottieHeight(300);

document.querySelectorAll(".trigger-icon-globe-block svg").forEach((svg) => {

    const paths = svg.querySelectorAll(".longitude path");
    const original = [];

    paths.forEach((p) => original.push(p.getAttribute("d")));

    gsap.timeline({
        scrollTrigger: {
            trigger: svg,
            start: "0 100%",
            end: "100% 0%",
            scrub: 1
        },
        defaults: {
            repeat: 4,
            ease: "none"
        }
    })
    .fromTo(paths[0], {
        attr: {
            d: "M40.5,0.5 C18.41,0.5 0.5,18.41 0.5,40.5 C0.5,62.59 18.41,80.5 40.5,80.5"
        }
    }, {
        attr: {
            d: "M40.5,0.5 C30.28,0.5 22,18.41 22,40.5 C22,62.59 30.28,80.5 40.5,80.5"
        }
    }, 0)
    .fromTo(paths[1], {
        attr: {
            d: "M40.5,0.5 C30.28,0.5 22,18.41 22,40.5 C22,62.59 30.28,80.5 40.5,80.5"
        }
    }, {
        attr: {
            d: "M41.3,0.9 C41.3,3.75 40.9,18.8 40.8,40.9 C40.8,63 41.3,78.25 41.3,80.5"
        }
    }, 0)
    .to(paths[2], { attr: { d: original[3] } }, 0)
    .to(paths[3], { attr: { d: original[4] } }, 0);

});