window.innerWidth>1023&&document.querySelectorAll(".image").forEach((e=>{const t=Array.from(e.querySelectorAll("img"));new hoverEffect({parent:e,intensity:.2,speedIn:1.6,speedOut:1.6,hover:!0,image1:t[0].getAttribute("src"),image2:t[1].getAttribute("src"),displacementImage:"img/pattern.png"})}));