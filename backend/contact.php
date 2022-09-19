<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

  <link rel="stylesheet" href="../css/contact.css">
  <meta name="robots" content="noindex, follow">
  <script
    nonce="c93b550f-0d14-4b62-890c-9e51cfc9d3ff">(function (w, d) { !function (a, e, t, r) { a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = { deferred: [] }, a.zaraz.q = [], a.zaraz._f = function (e) { return function () { var t = Array.prototype.slice.call(arguments); a.zaraz.q.push({ m: e, a: t }) } }; for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e); a.addEventListener("DOMContentLoaded", (() => { var t = e.getElementsByTagName(r)[0], z = e.createElement(r), n = e.getElementsByTagName("title")[0]; for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.x = Math.random(), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.zarazData.q = []; a.zaraz.q.length;) { const e = a.zaraz.q.shift(); a.zarazData.q.push(e) } z.defer = !0; for (const e of [localStorage, sessionStorage]) Object.keys(e).filter((a => a.startsWith("_zaraz_"))).forEach((t => a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t)))); z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t) })) }(w, d, 0, "script"); })(window, document);</script>
</head>

<body>
    <?php include("./header.html"); ?>
    
  <div class="wrapper">
    <div class="inner">
      <form action="../contact/datasender.php" method="POST">
        <h3>Contact Us</h3>
        <p>All type Interier work service provided. As " False ceiling, PVC Ceiling, Tharamacol ceiling, Sira wood, Carpainter, Paint, Marbale Fitting, Tailes Fitting, Pattern Partitions Design,Modular Kitchen etc". We are provice Best and top Quality work.</p>
        <label class="form-group">
          <input type="text" class="form-control" name= "name" required>
          <span>Your Name</span>
          <span class="border"></span>
        </label>
        <label class="form-group">
          <input type="text" class="form-control" name= "mobile" required>
          <span for="">Your Mobile Number</span>
          <span class="border"></span>
        </label>
        <label class="form-group">
          <input type="text" class="form-control" name= "city" required>
          <span for="">Your City</span>
          <span class="border"></span>
        </label>
        <label class="form-group">
          <textarea type="text" id="commentmsg" class="form-control" name ="comment" required></textarea>
          <span for="">Your Requirement</span>
          <span class="border"></span>
        </label>
        <!--<input type ="submit" value="Submit" class="submitbtn" >-->
          <button>Submit</button>
      </form>
    </div>
  </div>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
    integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
    data-cf-beacon='{"rayId":"709c54d0aa4f31e1","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
    crossorigin="anonymous"></script>
    
</body>

</html>