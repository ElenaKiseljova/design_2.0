const anchorLinks=document.querySelectorAll("a[href^=\\#]:not([href$=\\#])");anchorLinks.forEach((e=>{let r=e.getAttribute("href"),t=document.querySelector(r);e.addEventListener("click",(e=>{e.preventDefault(),locoScroll.scrollTo(t)}))}));