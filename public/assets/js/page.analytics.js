!function(t){var e={};function r(n){if(e[n])return e[n].exports;var o=e[n]={i:n,l:!1,exports:{}};return t[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=t,r.c=e,r.d=function(t,e,n){r.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(t,e){if(1&e&&(t=r(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)r.d(n,o,function(e){return t[e]}.bind(null,o));return n},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="/",r(r.s=49)}({49:function(t,e,r){t.exports=r(50)},50:function(t,e){function r(t,e){var r;if("undefined"==typeof Symbol||null==t[Symbol.iterator]){if(Array.isArray(t)||(r=function(t,e){if(!t)return;if("string"==typeof t)return n(t,e);var r=Object.prototype.toString.call(t).slice(8,-1);"Object"===r&&t.constructor&&(r=t.constructor.name);if("Map"===r||"Set"===r)return Array.from(t);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return n(t,e)}(t))||e&&t&&"number"==typeof t.length){r&&(t=r);var o=0,a=function(){};return{s:a,n:function(){return o>=t.length?{done:!0}:{done:!1,value:t[o++]}},e:function(t){throw t},f:a}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var i,l=!0,u=!1;return{s:function(){r=t[Symbol.iterator]()},n:function(){var t=r.next();return l=t.done,t},e:function(t){u=!0,i=t},f:function(){try{l||null==r.return||r.return()}finally{if(u)throw i}}}}function n(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,n=new Array(e);r<e;r++)n[r]=t[r];return n}!function(){"use strict";window["moment-range"].extendMoment(moment),Charts.init();!function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"line",n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};n=Chart.helpers.merge({elements:{line:{fill:"start",backgroundColor:settings.charts.colors.area,tension:0,borderWidth:1},point:{pointStyle:"circle",radius:5,hoverRadius:5,backgroundColor:settings.colors.white,borderColor:settings.colors.primary[700],borderWidth:2}},scales:{xAxes:[{gridLines:{display:!1},type:"time",time:{unit:"day"}}]},tooltips:{callbacks:{label:function(t,e){var r=e.datasets[t.datasetIndex].label||"",n=t.yLabel,o="";return 1<e.datasets.length&&(o+='<span class="popover-body-label mr-auto">'+r+"</span>"),o+'<span class="popover-body-value">'+n+" views</span>"}}}},n);var o,a=[],i=moment().subtract(7,"days").format("YYYY-MM-DD"),l=moment().format("YYYY-MM-DD"),u=moment.range(i,l),s=r(u.by("days"));try{for(s.s();!(o=s.n()).done;){var c=o.value;a.push({y:Math.floor(300*Math.random())+10,x:c.toDate()})}}catch(t){s.e(t)}finally{s.f()}a={datasets:[{label:"All Views",data:a}]};Charts.create(t,e,n,a)}("#viewsChart")}()}});