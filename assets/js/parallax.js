const hero=document.querySelector(".hero"),services=document.querySelector(".services"),servicesInner=document.querySelector(".services__inner");if(ScrollTrigger.defaults({scroller:document.querySelector(".wrapper")}),services){const e=gsap.timeline({scrollTrigger:{trigger:services,start:"top center"}});e.fromTo(".services__right p",{opacity:0},{duration:1,opacity:1}),e.fromTo(".services__point",{opacity:0},{duration:1,opacity:1},"=-0.5"),e.fromTo(".services__circle",{scale:0,xPercent:-100},{ease:Power3.easeOut,duration:1.5,scale:1,xPercent:0},"=-1.3"),window.innerWidth<1023?e.fromTo(".services__image ",{width:0,opacity:0},{ease:Power3.easeOut,duration:.6,width:"276px",opacity:1,stagger:.1,overflow:"visible"},"=-1.2"):e.fromTo(".services__image canvas",{width:0,opacity:0},{ease:Power3.easeOut,duration:.8,width:"276px",opacity:1,stagger:.1,overflow:"visible"},"=-1.2"),e.fromTo(".services__item span",{opacity:0},{ease:Power3.easeOut,duration:.8,opacity:1,stagger:.1},"=-1.5"),e.fromTo(".services__title",{opacity:0},{ease:Power3.easeOut,duration:.8,opacity:1,stagger:.1},"=-1.2"),e.fromTo(".services__btns",{opacity:0},{ease:Power3.easeOut,duration:.8,opacity:1,stagger:.1},"=-1.2")}servicesInner&&gsap.timeline({scrollTrigger:{trigger:servicesInner,scrub:!0,pinSpacing:!1,start:"30% 100%",end:"100% 100%"}}).to(".round__wrap",{height:0}).from(servicesInner,{ease:"power1.out",y:-300},"-=0.5").to(".mission__overlay",{ease:"power1.out",opacity:0},"-=0.5");