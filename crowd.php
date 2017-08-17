<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Без регистрации и смс!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/js/crowd.js?<?= time() ?>"></script>
    <link rel="stylesheet" href="/css/css.css?<?= time() ?>">
</head>
<body>


<div class="copy">
    <a href="/creators">&copy;</a>
</div>

<div style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;text-align: center;overflow:hidden;">

    <div style="width: 110%; height: 110%; margin-left: -5%; margin-top: -2%;"><?php for ($i = 0; $i < 300; $i++) { ?>
            <div intl="<?= mt_rand(0, 100) ?>" class="inner"
                 style="display: inline-block;width: 120px;text-align: center; cursor: default;">( <span class="ochko">*</span> )
            </div>
        <?php } ?></div>
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