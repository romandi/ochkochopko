<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Без регистрации и смс!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/js/main.js?<?= time() ?>"></script>
    <link rel="stylesheet" href="/css/css.css?<?= time() ?>">
</head>
<body>

<div class="counter">
    <p>Натыкано вами в очко: <span id="counter-personal">0</span></p>
    <p>Натыкано за всю жизнь: <span id="counter-global">0</span> </p>
    <p>Дебаг: <span id="debug"></span> </p>
</div>

<div class="copy">
    <a href="/creators">&copy;</a>
</div>

<div class="outer">
    <div class="inner">( <span class="ochko">*</span> )</div>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (d, w, c) {
    (w[c] = w[c] || []).push(function () {
        try {
            w.yaCounter45438648 = new Ya.Metrika({
                id: 45438648,
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true
            });
        } catch (e) {
        }
    });
    var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
        n.parentNode.insertBefore(s, n);
    };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/watch.js";
    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else {
        f();
    }
})(document, window, "yandex_metrika_callbacks"); </script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/45438648" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>