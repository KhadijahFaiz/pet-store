(()=>{"use strict";var e={428:e=>{e.exports=window.jQuery}},t={};function i(n){var r=t[n];if(void 0!==r)return r.exports;var s=t[n]={exports:{}};return e[n](s,s.exports,i),s.exports}i.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return i.d(t,{a:t}),t},i.d=(e,t)=>{for(var n in t)i.o(t,n)&&!i.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},i.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t);var n=i(428);i.n(n)()((function(e){const t=window.jetpackSocialClassicEditorInitialState??{},i=e("#publicize-form");if(!t||t.sharesRemaining>t.numberOfConnections)return;const n=e("#publicize-form").find('input[type="checkbox"]');0!==t.sharesRemaining?i.click((function(r){const s=e(r.target);if(!s.is("input")||s.is(":disabled"))return;const a=i.find('input[type="checkbox"]:checked').length>=t.sharesRemaining;n.each((function(){this.id!==s.attr("id")&&(this.checked||(e(this).parent().toggleClass("wpas-disabled",a),e(this).prop("disabled",a)))}))})):n.each((function(){e(this).parent().addClass("wpas-disabled"),e(this).prop("disabled",!0)}))}))})();