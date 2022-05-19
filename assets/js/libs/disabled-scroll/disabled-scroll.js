!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.scrollLock=t():e.scrollLock=t()}(this,(function(){return function(e){var t={};function l(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,l),o.l=!0,o.exports}return l.m=e,l.c=t,l.d=function(e,t,r){l.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},l.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},l.t=function(e,t){if(1&t&&(e=l(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(l.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)l.d(r,o,function(t){return e[t]}.bind(null,o));return r},l.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return l.d(t,"a",t),t},l.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},l.p="",l(l.s=0)}([function(e,t,l){"use strict";l.r(t);var r=function(e){return Array.isArray(e)?e:[e]},o=function(e){return e instanceof Node},n=function(e,t){if(e&&t){e=e instanceof NodeList?e:[e];for(var l=0;l<e.length&&!0!==t(e[l],l,e.length);l++);}},c=function(e){return console.error("[scroll-lock] ".concat(e))},a=function(e){if(Array.isArray(e))return e.join(", ")},i=function(e){var t=[];return n(e,(function(e){return t.push(e)})),t},u=function(e,t){var l=!(2<arguments.length&&void 0!==arguments[2])||arguments[2],r=3<arguments.length&&void 0!==arguments[3]?arguments[3]:document;if(l&&-1!==i(r.querySelectorAll(t)).indexOf(e))return e;for(;(e=e.parentElement)&&-1===i(r.querySelectorAll(t)).indexOf(e););return e},d=function(e,t){var l=2<arguments.length&&void 0!==arguments[2]?arguments[2]:document;return-1!==i(l.querySelectorAll(t)).indexOf(e)},s=function(e){if(e)return"hidden"===getComputedStyle(e).overflow},f=function(e){if(e)return!!s(e)||e.scrollTop<=0},p=function(e){if(e){if(s(e))return!0;var t=e.scrollTop;return e.scrollHeight<=t+e.offsetHeight}},g=function(e){if(e)return!!s(e)||e.scrollLeft<=0},b=function(e){if(e){if(s(e))return!0;var t=e.scrollLeft;return e.scrollWidth<=t+e.offsetWidth}};l.d(t,"disablePageScroll",(function(){return m})),l.d(t,"enablePageScroll",(function(){return S})),l.d(t,"getScrollState",(function(){return y})),l.d(t,"clearQueueScrollLocks",(function(){return k})),l.d(t,"getTargetScrollBarWidth",(function(){return w})),l.d(t,"getCurrentTargetScrollBarWidth",(function(){return A})),l.d(t,"getPageScrollBarWidth",(function(){return G})),l.d(t,"getCurrentPageScrollBarWidth",(function(){return T})),l.d(t,"addScrollableTarget",(function(){return L})),l.d(t,"removeScrollableTarget",(function(){return W})),l.d(t,"addScrollableSelector",(function(){return x})),l.d(t,"removeScrollableSelector",(function(){return F})),l.d(t,"addLockableTarget",(function(){return Y})),l.d(t,"addLockableSelector",(function(){return E})),l.d(t,"setFillGapMethod",(function(){return O})),l.d(t,"addFillGapTarget",(function(){return P})),l.d(t,"removeFillGapTarget",(function(){return j})),l.d(t,"addFillGapSelector",(function(){return q})),l.d(t,"removeFillGapSelector",(function(){return M})),l.d(t,"refillGaps",(function(){return N}));var h=["padding","margin","width","max-width","none"],v={scroll:!0,queue:0,scrollableSelectors:["[data-scroll-lock-scrollable]"],lockableSelectors:["body","[data-scroll-lock-lockable]"],fillGapSelectors:["body","[data-scroll-lock-fill-gap]","[data-scroll-lock-lockable]"],fillGapMethod:h[0],startTouchY:0,startTouchX:0},m=function(e){v.queue<=0&&(v.scroll=!1,B(),X()),L(e),v.queue++},S=function(e){0<v.queue&&v.queue--,v.queue<=0&&(v.scroll=!0,C(),Q()),W(e)},y=function(){return v.scroll},k=function(){v.queue=0},w=function(e){var t=1<arguments.length&&void 0!==arguments[1]&&arguments[1];if(o(e)){var l=e.style.overflowY;t?y()||(e.style.overflowY=e.getAttribute("data-scroll-lock-saved-overflow-y-property")):e.style.overflowY="scroll";var r=A(e);return e.style.overflowY=l,r}return 0},A=function(e){if(o(e)){if(e===document.body){var t=document.documentElement.clientWidth;return window.innerWidth-t}var l=e.style.borderLeftWidth,r=e.style.borderRightWidth;e.style.borderLeftWidth="0px",e.style.borderRightWidth="0px";var n=e.offsetWidth-e.clientWidth;return e.style.borderLeftWidth=l,e.style.borderRightWidth=r,n}return 0},G=function(){var e=0<arguments.length&&void 0!==arguments[0]&&arguments[0];return w(document.body,e)},T=function(){return A(document.body)},L=function(e){e&&r(e).map((function(e){n(e,(function(e){o(e)?e.setAttribute("data-scroll-lock-scrollable",""):c('"'.concat(e,'" is not a Element.'))}))}))},W=function(e){e&&r(e).map((function(e){n(e,(function(e){o(e)?e.removeAttribute("data-scroll-lock-scrollable"):c('"'.concat(e,'" is not a Element.'))}))}))},x=function(e){e&&r(e).map((function(e){v.scrollableSelectors.push(e)}))},F=function(e){e&&r(e).map((function(e){v.scrollableSelectors=v.scrollableSelectors.filter((function(t){return t!==e}))}))},Y=function(e){e&&(r(e).map((function(e){n(e,(function(e){o(e)?e.setAttribute("data-scroll-lock-lockable",""):c('"'.concat(e,'" is not a Element.'))}))})),y()||B())},E=function(e){e&&(r(e).map((function(e){v.lockableSelectors.push(e)})),y()||B(),q(e))},O=function(e){if(e)if(-1!==h.indexOf(e))v.fillGapMethod=e,N();else{var t=h.join(", ");c('"'.concat(e,'" method is not available!\nAvailable fill gap methods: ').concat(t,"."))}},P=function(e){e&&r(e).map((function(e){n(e,(function(e){o(e)?(e.setAttribute("data-scroll-lock-fill-gap",""),v.scroll||H(e)):c('"'.concat(e,'" is not a Element.'))}))}))},j=function(e){e&&r(e).map((function(e){n(e,(function(e){o(e)?(e.removeAttribute("data-scroll-lock-fill-gap"),v.scroll||I(e)):c('"'.concat(e,'" is not a Element.'))}))}))},q=function(e){e&&r(e).map((function(e){-1===v.fillGapSelectors.indexOf(e)&&(v.fillGapSelectors.push(e),v.scroll||D(e))}))},M=function(e){e&&r(e).map((function(e){v.fillGapSelectors=v.fillGapSelectors.filter((function(t){return t!==e})),v.scroll||z(e)}))},N=function(){v.scroll||X()},B=function(){var e=a(v.lockableSelectors);K(e)},C=function(){var e=a(v.lockableSelectors);R(e)},K=function(e){var t=document.querySelectorAll(e);n(t,(function(e){U(e)}))},R=function(e){var t=document.querySelectorAll(e);n(t,(function(e){_(e)}))},U=function(e){if(o(e)&&"true"!==e.getAttribute("data-scroll-lock-locked")){var t=window.getComputedStyle(e);e.setAttribute("data-scroll-lock-saved-overflow-y-property",t.overflowY),e.setAttribute("data-scroll-lock-saved-inline-overflow-property",e.style.overflow),e.setAttribute("data-scroll-lock-saved-inline-overflow-y-property",e.style.overflowY),e.style.overflow="hidden",e.setAttribute("data-scroll-lock-locked","true")}},_=function(e){o(e)&&"true"===e.getAttribute("data-scroll-lock-locked")&&(e.style.overflow=e.getAttribute("data-scroll-lock-saved-inline-overflow-property"),e.style.overflowY=e.getAttribute("data-scroll-lock-saved-inline-overflow-y-property"),e.removeAttribute("data-scroll-lock-saved-overflow-property"),e.removeAttribute("data-scroll-lock-saved-inline-overflow-property"),e.removeAttribute("data-scroll-lock-saved-inline-overflow-y-property"),e.removeAttribute("data-scroll-lock-locked"))},X=function(){v.fillGapSelectors.map((function(e){D(e)}))},Q=function(){v.fillGapSelectors.map((function(e){z(e)}))},D=function(e){var t=document.querySelectorAll(e),l=-1!==v.lockableSelectors.indexOf(e);n(t,(function(e){H(e,l)}))},H=function(e){var t=1<arguments.length&&void 0!==arguments[1]&&arguments[1];if(o(e)){var l;if(""===e.getAttribute("data-scroll-lock-lockable")||t)l=w(e,!0);else{var r=u(e,a(v.lockableSelectors));l=w(r,!0)}"true"===e.getAttribute("data-scroll-lock-filled-gap")&&I(e);var n=window.getComputedStyle(e);if(e.setAttribute("data-scroll-lock-filled-gap","true"),e.setAttribute("data-scroll-lock-current-fill-gap-method",v.fillGapMethod),"margin"===v.fillGapMethod){var c=parseFloat(n.marginRight);e.style.marginRight="".concat(c+l,"px")}else if("width"===v.fillGapMethod)e.style.width="calc(100% - ".concat(l,"px)");else if("max-width"===v.fillGapMethod)e.style.maxWidth="calc(100% - ".concat(l,"px)");else if("padding"===v.fillGapMethod){var i=parseFloat(n.paddingRight);e.style.paddingRight="".concat(i+l,"px")}}},z=function(e){var t=document.querySelectorAll(e);n(t,(function(e){I(e)}))},I=function(e){if(o(e)&&"true"===e.getAttribute("data-scroll-lock-filled-gap")){var t=e.getAttribute("data-scroll-lock-current-fill-gap-method");e.removeAttribute("data-scroll-lock-filled-gap"),e.removeAttribute("data-scroll-lock-current-fill-gap-method"),"margin"===t?e.style.marginRight="":"width"===t?e.style.width="":"max-width"===t?e.style.maxWidth="":"padding"===t&&(e.style.paddingRight="")}};"undefined"!=typeof window&&window.addEventListener("resize",(function(e){N()})),"undefined"!=typeof document&&(document.addEventListener("touchstart",(function(e){v.scroll||(v.startTouchY=e.touches[0].clientY,v.startTouchX=e.touches[0].clientX)})),document.addEventListener("touchmove",(function(e){if(!v.scroll){var t=v.startTouchY,l=v.startTouchX,r=e.touches[0].clientY,o=e.touches[0].clientX;if(e.touches.length<2){var n=a(v.scrollableSelectors),c=t<r,i=r<t,s=l<o,h=o<l,m=t+3<r,S=r<t-3,y=l+3<o,k=o<l-3;!function t(l){var r=1<arguments.length&&void 0!==arguments[1]&&arguments[1];if(l){var o=u(l,n,!1);if(d(l,'input[type="range"]'))return!1;if(r||d(l,'textarea, [contenteditable="true"]')&&u(l,n)||d(l,n)){var a=!1;g(l)&&b(l)?(c&&f(l)||i&&p(l))&&(a=!0):f(l)&&p(l)?(s&&g(l)||h&&b(l))&&(a=!0):(m&&f(l)||S&&p(l)||y&&g(l)||k&&b(l))&&(a=!0),a&&(o?t(o,!0):e.cancelable&&e.preventDefault())}else t(o)}else e.cancelable&&e.preventDefault()}(e.target)}}}),{passive:!1}),document.addEventListener("touchend",(function(e){v.scroll||(v.startTouchY=0,v.startTouchX=0)})));var J={hide:function(e){c('"hide" is deprecated! Use "disablePageScroll" instead. \n https://github.com/FL3NKEY/scroll-lock#disablepagescrollscrollabletarget'),m(e)},show:function(e){c('"show" is deprecated! Use "enablePageScroll" instead. \n https://github.com/FL3NKEY/scroll-lock#enablepagescrollscrollabletarget'),S(e)},toggle:function(e){c('"toggle" is deprecated! Do not use it.'),y()?m():S(e)},getState:function(){return c('"getState" is deprecated! Use "getScrollState" instead. \n https://github.com/FL3NKEY/scroll-lock#getscrollstate'),y()},getWidth:function(){return c('"getWidth" is deprecated! Use "getPageScrollBarWidth" instead. \n https://github.com/FL3NKEY/scroll-lock#getpagescrollbarwidth'),G()},getCurrentWidth:function(){return c('"getCurrentWidth" is deprecated! Use "getCurrentPageScrollBarWidth" instead. \n https://github.com/FL3NKEY/scroll-lock#getcurrentpagescrollbarwidth'),T()},setScrollableTargets:function(e){c('"setScrollableTargets" is deprecated! Use "addScrollableTarget" instead. \n https://github.com/FL3NKEY/scroll-lock#addscrollabletargetscrollabletarget'),L(e)},setFillGapSelectors:function(e){c('"setFillGapSelectors" is deprecated! Use "addFillGapSelector" instead. \n https://github.com/FL3NKEY/scroll-lock#addfillgapselectorfillgapselector'),q(e)},setFillGapTargets:function(e){c('"setFillGapTargets" is deprecated! Use "addFillGapTarget" instead. \n https://github.com/FL3NKEY/scroll-lock#addfillgaptargetfillgaptarget'),P(e)},clearQueue:function(){c('"clearQueue" is deprecated! Use "clearQueueScrollLocks" instead. \n https://github.com/FL3NKEY/scroll-lock#clearqueuescrolllocks'),k()}},V=function(e){for(var t=1;t<arguments.length;t++){var l=null!=arguments[t]?arguments[t]:{},r=Object.keys(l);"function"==typeof Object.getOwnPropertySymbols&&(r=r.concat(Object.getOwnPropertySymbols(l).filter((function(e){return Object.getOwnPropertyDescriptor(l,e).enumerable})))),r.forEach((function(t){var r,o,n;r=e,n=l[o=t],o in r?Object.defineProperty(r,o,{value:n,enumerable:!0,configurable:!0,writable:!0}):r[o]=n}))}return e}({disablePageScroll:m,enablePageScroll:S,getScrollState:y,clearQueueScrollLocks:k,getTargetScrollBarWidth:w,getCurrentTargetScrollBarWidth:A,getPageScrollBarWidth:G,getCurrentPageScrollBarWidth:T,addScrollableSelector:x,removeScrollableSelector:F,addScrollableTarget:L,removeScrollableTarget:W,addLockableSelector:E,addLockableTarget:Y,addFillGapSelector:q,removeFillGapSelector:M,addFillGapTarget:P,removeFillGapTarget:j,setFillGapMethod:O,refillGaps:N,_state:v},J);t.default=V}]).default}));