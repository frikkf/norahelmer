<!--<div class="tnp tnp-subscription">
    <form method="post" action="http://www.norahelmer.no/?na=s" onsubmit="return newsletter_check(this)">
        <div class="tnp-field tnp-field-email"><label style="display:none; color:#A6A6A6;">Email</label><input class="tnp-email" type="email" placeholder="nora@helmer.no" name="ne" required></div>
        <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Få de nyeste Norastripene">
        </div>
    </form>
</div>-->

<script type="text/javascript">
//<![CDATA[
if (typeof newsletter_check !== "function") {
window.newsletter_check = function (f) {
    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
    if (!re.test(f.elements["ne"].value)) {
        alert("Denne eposten er det noe galt med.");
        return false;
    }
    for (var i=1; i<20; i++) {
    if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
        alert("");
        return false;
    }
    }
    if (f.elements["ny"] && !f.elements["ny"].checked) {
        alert("Du må akseptere personvernserklæringen");
        return false;
    }
    return true;
}
}
//]]>
</script>

<div class="tnp tnp-subscription">
<form method="post" action="http://www.norahelmer.no/?na=s" onsubmit="return newsletter_check(this)">

<div class="nyhetsbrev">
                    <form method="post" action="http://www.norahelmer.no/?na=s" onsubmit="return newsletter_check(this)">
                        <!--<label for="email"><b>Email</b></label>-->
                        <input type="text" placeholder="yummy@mummy.bliss" name="email" required>
                        <input type="checkbox" name="ny" required>&nbsp;<a target="_blank" href="www.norahelmer.no/gdpr">Jeg ønsker å motta nyhetsbrev fra norahelmer.no</a>
                        <input class="tnp-submit" type="submit" value="Få de nyeste Norastripene rett i mailboksen"/>
                    </form>
                </div>
</form>
</div>