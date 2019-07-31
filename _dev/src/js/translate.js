const Cookies = require('js-cookie');

const googleTranslateConfig = {
    lang: "en"
};

window.TranslateInit = function() {
    let code = TranslateGetCode();
    if (code == googleTranslateConfig.lang) {
        TranslateCookieHandler(null, googleTranslateConfig.domain);
    }

    new google.translate.TranslateElement({
        pageLanguage: googleTranslateConfig.lang,
    });

    TranslateEventHandler('click', '[data-google-lang]', function (e, el) {
        e.preventDefault();

        if (el.getAttribute("data-google-lang") !== 'en') {
            TranslateCookieHandler("/" + googleTranslateConfig.lang + "/" + el.getAttribute("data-google-lang"), googleTranslateConfig.domain);
        } else {
            Cookies.set('googtrans', null);
        }

        window.location.reload();
    });
}

function TranslateGetCode() {
    let lang = (Cookies.get('googtrans') != undefined && Cookies.get('googtrans') != "null") ? Cookies.get('googtrans') : googleTranslateConfig.lang;
    return lang.substr(-2);
} 

function TranslateCookieHandler(val, domain) {
    Cookies.set('googtrans', val);
    Cookies.set("googtrans", val, {
        domain: "." + document.domain,
    });

    if (domain == "undefined") return;
    Cookies.set("googtrans", val, {
        domain: domain,
    });

    Cookies.set("googtrans", val, {
        domain: "." + domain,
    });
}

function TranslateEventHandler(event, el, handler) {
    let translateLinks = document.querySelectorAll('[data-google-lang]');

    translateLinks.forEach(function(link) {
        link.addEventListener('click', (e) => {
            handler(e, link);
        });
    })
}