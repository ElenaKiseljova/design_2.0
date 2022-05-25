const loader = document.querySelector("#loader");
const heroSection = document.querySelector(".hero");
const tl = gsap.timeline();
if (loader) {
  loader.classList.add("load");
  if (window.innerWidth < 1023) {
    tl.set("body", {
      overflow: "hidden",
    });
  }
  if (heroSection) {
    tl.set(".hero__btn", {
      xPercent: -100,
    });
    tl.set(".hero__circle", {
      scale: 0,
    });
    tl.set(".hero__bottom", {
      height: 0,
      overflow: "hidden",
    });
    tl.set(".hero__text", {
      opacity: 0,
    });

    tl.set(".hero__image img", {
      opacity: 0,
      y: -200,
    });
    tl.set(".header", {
      opacity: 0,
    });
  }
  tl.set(".loading-screen", {
    top: "0",
  });

  tl.set(".loading-words .home-active-last", {
    display: "block",
    opacity: 0,
  });

  tl.set(".loading-words .home-active-first", {
    opacity: 1,
  });

  if (window.innerWidth > 540) {
    tl.set(".loading-screen .rounded-div-wrap.bottom", {
      height: "10vh",
    });
  } else {
    tl.set(".loading-screen .rounded-div-wrap.bottom", {
      height: "5vh",
    });
  }

  tl.set("html", {
    cursor: "none",
  });

  tl.call(function () {
    locoScroll.stop();
  });

  tl.to(".loading-words", {
    duration: 0.8,
    opacity: 1,
    /* y: -50, */
    ease: "Power4.easeOut",
    delay: 0.5,
  });

  tl.to(".loading-words .home-active-last", {
    duration: 0.01,
    opacity: 1,
    delay: 0.15,
  });
}
window.onload = function () {
  setTimeout(() => {
    tl.to(".loading-screen", {
      duration: 0.8,
      top: "-100%",
      ease: "Power4.easeInOut",

      delay: 2.2,
    });

    tl.to(
      ".loading-screen .rounded-div-wrap.bottom",
      {
        duration: 1,
        height: "0vh",
        ease: "Power4.easeInOut",
      },
      "=-.8"
    );

    tl.to(
      ".loading-words",
      {
        duration: 0.3,
        opacity: 0,
        ease: "linear",
      },
      "=-.8"
    );

    tl.set(".loading-container", {
      top: "calc(-100%)",
    });

    tl.set(".loading-screen .rounded-div-wrap.bottom", {
      height: "0vh",
    });

    if (heroSection) {
      tl.to(
        ".hero__circle",
        {
          scale: 1,
          duration: 1.7,
          ease: Power3.easeOut,
        },
        "=-1.3"
      );
      tl.to(
        ".hero__image img",
        {
          opacity: 1,
          duration: 0.5,
          ease: Power3.easeOut,
        },
        "=-1.5"
      );
      tl.to(
        ".hero__image img",
        {
          y: 0,

          duration: 1,
          ease: Power3.easeOut,
        },
        "=-1.2"
      );
      tl.to(".hero__bottom", {
        height: 220,
        duration: 0.5,
        ease: Power1.easeOut,
      });
      tl.to(
        ".hero__text",
        {
          opacity: 1,
          duration: 0.5,
          ease: Power1.easeOut,
        },
        "=-0.4"
      );
      tl.to(
        ".hero__btn",
        {
          xPercent: 0,
          ease: Power1.easeOut,
        },
        "=-0.4"
      );
      tl.to(
        ".header",
        {
          opacity: 1,
          duration: 0.5,
          ease: Power1.easeOut,
        },
        "=-0.2"
      );
    }

    tl.set(
      "html",
      {
        cursor: "auto",
      },
      "=-1.2"
    );
    if (window.innerWidth < 1023) {
      tl.set("body", {
        overflow: "visible",
      });
    }
    tl.call(function () {
      locoScroll.start();

      window.dispatchEvent(preloaderHided);
    });
  }, 1000);
};
