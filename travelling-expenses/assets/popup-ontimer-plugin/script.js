
(function(){document.addEventListener("DOMContentLoaded",function(){document.querySelector("html").classList.contains("is-builder")||document.querySelectorAll(".mbr-popup[data-on-timer-delay]").forEach(function(b){var c=b.getAttribute("data-on-timer-delay"),a;"undefined"!==typeof bootstrap?("undefined"!==typeof bootstrap.Modal.getInstance&&(a=bootstrap.Modal.getInstance(b)),a||(a=new bootstrap.Modal(b),{keyboard:!1}),setTimeout(function(){a.show()},1E3*c)):"undefined"!==typeof jQuery&&setTimeout(function(){$(b).modal({keyboard:!1})},
1E3*c);setTimeout(function(){a.show()},1E3*c)})})})();
