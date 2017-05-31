<?php
/////////////////////
//INTERNAL BOX
/////////////////////
function showads() {
    return '<div class="responsive-top"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- October Test - Responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3241871860118891"
     data-ad-slot="2692668960"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>';
}

add_shortcode('adsense-responsive', 'showads');


/////////////////////
//INTERNAL BOX
/////////////////////
function showadbox() {
    return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- October Test Internal -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3241871860118891"
     data-ad-slot="6254264165"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
}

add_shortcode('adsense-box', 'showadbox');


/////////////////////
//INTERNAL BOX
/////////////////////
function showadbox300x200() {
    return '<div class="right_pull_box"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- October Test Internal box 300x200 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-3241871860118891"
     data-ad-slot="4637930163"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>';
}

add_shortcode('adsense-box300x200', 'showadbox300x200');

/////////////////////
//INTERNAL BOX
/////////////////////
/*
function showadbox() {
    return '<div style="padding:0 0px 0px 0; float:left"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- October Test - Box -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-3241871860118891"
     data-ad-slot="3331797362"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>';
}

add_shortcode('adsense-box', 'showadbox');
*/


/*
/////////////////////
// BOTTOM SPLASH LEADERBOARD
/////////////////////
function bottom_adv() {
    return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SetHomepage-leader-home-bottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9429537003457574"
     data-ad-slot="2858512666"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
}

add_shortcode('adsense_bottom_home', 'bottom_adv');

/////////////////////
// Splash ADV
/////////////////////
function splash_adv() {
    return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SetHomepage-leaderboard -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9429537003457574"
     data-ad-slot="1521380263"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
}

add_shortcode('adsense_splash', 'splash_adv');

/////////////////////
// Splash ADV
/////////////////////
function internal_splash_adv_old() {
    return '<div class="hidden-print"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SetHomepage-Internal-Banner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9429537003457574"
     data-ad-slot="1893454665"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>';
}

/////////////////////
// Splash ADV
/////////////////////
function internal_splash_adv() {
    return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SetHomepage-Top text Links -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-9429537003457574"
     data-ad-slot="5951579862"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
';
}

add_shortcode('adsense_internal_splash', 'internal_splash_adv');

*/