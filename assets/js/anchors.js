let hash = false;

if (window.location.hash) {
  // console.log(window.location.hash);
  hash = window.location.hash.split('#')[1];

  window.location.hash = '';
}

/* Плавный скролл к элементам */
const scrollSmooth = (container = document) => {
  const hrefAttributes = container.querySelectorAll("a[href*='#']");

  const scrollToHash = (hash = false, offset = 0) => {
    let scrollTarget;

    if (hash) {
      scrollTarget = document.getElementById(hash);
    }

    locoScroll.scrollTo(scrollTarget);
  };

  if (hash) {
    scrollToHash(hash);
  }

  if (hrefAttributes.length > 0) {

    hrefAttributes.forEach((item, i) => {
      const href = item.href.split('#');

      const CURRENT_URL = window.location.origin + window.location.pathname;

      if (href[0] === CURRENT_URL) {
        item.addEventListener('click', (e) => {
          e.preventDefault();

          scrollToHash(href[1]);
        });
      }
    });
  }
};

// create custom events
const preloaderHided = new CustomEvent('preloaderhided', {
  detail: {
    name: 'Preloader Hided'
  }
});

window.addEventListener('preloaderhided', (e) => {
  // console.log(e.detail.name);

  scrollSmooth();
});
