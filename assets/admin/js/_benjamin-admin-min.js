!function n(t,e,i){function a(s,l){if(!e[s]){if(!t[s]){var o="function"==typeof require&&require;if(!l&&o)return o(s,!0);if(r)return r(s,!0);var u=new Error("Cannot find module '"+s+"'");throw u.code="MODULE_NOT_FOUND",u}var c=e[s]={exports:{}};t[s][0].call(c.exports,function(n){var e=t[s][1][n];return a(e?e:n)},c,c.exports,n,t,e,i)}return e[s].exports}for(var r="function"==typeof require&&require,s=0;s<i.length;s++)a(i[s]);return a}({1:[function(n,t,e){n("./modules/install-franklin"),jQuery(document).ready(function(n){n("body.widgets-php")&&n(".benjamin-widget-area-options").appendTo(".widgets-sortables")}),window.$=jQuery},{"./modules/install-franklin":2}],2:[function(n,t,e){window.franklinPlugin={success:function(n){var t=document.querySelector(".js--install-activate-franklin");n.activateUrl&&setTimeout(function(){t.setAttribute("href",n.activateUrl),t.classList.remove("disabled"),t.innerText=wp.updates.l10n.activatePlugin},2e3)},error:function(n){var t=document.querySelector(".js--install-activate-franklin");t.classList.remove("disabled"),t.innerText=wp.updates.l10n.installNow},installButtonEvent:function(){var n=document.querySelector(".js--install-activate-franklin");n&&n.addEventListener("click",function(n){var t=n.target.getAttribute("href"),e=n.target.innerText;if(this.classList.contains("disabled"))return void n.preventDefault();if(e.indexOf("Install")>-1&&t.indexOf("action=install-plugin")>-1){var i={slug:"franklin",success:franklinPlugin.success};n.preventDefault(),this.classList.add("disabled"),this.innerText=wp.updates.l10n.installing,wp.updates.ajax("install-plugin",i)}else e.indexOf("Activate")>-1&&t.indexOf("action=activate")>-1&&console.log("activate plugin",n.originalEvent,"bom")})},saveDismissValue:function(){var n={action:"benjamin_dismiss_franklin_notice"};jQuery.ajax({type:"POST",url:ajaxurl,data:n})},dismissButtonEvent:function(){var n=document.querySelectorAll(".js--dismiss-franklin-notice");return n.length<=0?!1:void n.forEach(function(n,t){n.addEventListener("click",function(n){n.preventDefault();var t=this.closest(".franklin-notice");this.closest(".franklin-notice").parentNode.removeChild(t),franklinPlugin.saveDismissValue()})})},init:function(){}},franklinPlugin.installButtonEvent(),franklinPlugin.dismissButtonEvent()},{}]},{},[1]);