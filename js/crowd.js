



$(function () {
    var d = new Date();
    var h = parseInt(d.getHours());
    var itIsNight = false;
    if (h <= 7 || h >= 22) {
        document.body.classList.add("black");
        itIsNight = true;
    }



    var z = 0;
    setInterval(function () {
        z++;
        if(z>100) z = 0;
        $('div[intl='+z+'] span').html('&middot;');
        setTimeout(function() {
            $('div[intl='+z+'] span').html('*');
        }, 500);
    }, 300);








});