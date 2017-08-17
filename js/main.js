$(function () {
    var d = new Date();
    var h = parseInt(d.getHours());
    var itIsNight = false;
    if (h <= 7 || h >= 22) {
        document.body.classList.add("black");
        itIsNight = true;
    }

    $('.inner').click(function () {
        $('.ochko').html('&middot;');
        poke();

        setTimeout(function () {
            $('.ochko').html('*');
        }, 150);
    });


    var count = localStorage.getItem("ochko-poked");
    var signature = localStorage.getItem("ochko-poked-signature");
    if (count != parseInt(count)) {
        count = 0;
    }
    $('#counter-personal').html(count);

    $.get('poke.php', function (data) {
        $('#counter-global').html(data);
    });

    var r = 0, g = 0, b = 0;
    var cooldownFrameLen = 300;
    var timer = 7 * cooldownFrameLen;

    function poke() {
        count++;
        localStorage.setItem("ochko-poked", count);
        $('#counter-personal').html(count);
        $('#debug').html('пригорание');

        $.post('poke.php', {clientPokes: count, signature: signature}, function (data) {
            // $('#debug').html(data.test+'<br>'+data.signature);
            $('#counter-global').html(data.globalPokes);
            localStorage.setItem("ochko-poked-signature", data.signature);
            signature = data.signature;
        }, "json");

        r += 5;
        if (r > 255) {
            r = 255;
        }

        timer = 7 * cooldownFrameLen;
        $('.ochko').css('color', 'rgba(' + r + ',0,0,100)');
    }


    //cooldown
    setInterval(function () {
        timer -= cooldownFrameLen;
        if (timer <= 0) {
            $('#debug').html('охлаждение');

            r -= 5;
            if (r <= 0) {
                r = 0;
            }
            $('.ochko').css('color', 'rgba(' + r + ',0,0,100)');
        }
    }, cooldownFrameLen);


});