<!DOCTYPE html>
<html>
<head>
    <title>BI WebApp</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="scripts/jQuery_mobile/jquery.mobile-1.1.0.css"/>
    <script src="scripts/jQuery/jquery-1.7.2.js"></script>
    <script src="scripts/jQuery_mobile/jquery.mobile-1.1.0.js"></script>

    <!-- iframe Settings -->
    <style type="text/css">
        html, body { margin: 0; padding: 0; height: 100%; }
        iframe {
            position: absolute;
            left: 0; width: 100%; height: 100%;
            border: none; padding-top: 0px;
            box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box;
        }
    </style>
    <!-- /iframe Settings -->

</head>
<body>
<!--  main- Page -->
<div data-role="page" id="main" data-add-back-btn="true">
    <!-- header -->
    <div data-role="header">
        <h1>Wilkommen!</h1>
    </div>
    <!-- /header -->
    <!-- content -->
    <div data-role="content">
        <ul data-role="listview" data-inset="true" data-filter="true">
            <!-- <li><a href="#GENERIC" data-transition="slide">GENERIC</a></li>
            <li><a href="#report" data-transition="flip">Report</a></li>
            <li><a href="#twitter" data-transition="pop">Twitter</a></li>
            <li><a href="#google" data-transition="slidedown">Google</a></li> -->
            <li><a href="#map" data-transition="fade">Map</a></li>
            <li><a href="#landtag_homepage" data-transition="flip">Bayrischer Landtag</a></li>
        </ul>
    </div>
    <!-- /content -->
</div>
<!-- /page -->


<!-- GENERIC- Page -->
<div data-role="page" id="GENERIC" data-add-back-btn="true">
    <!-- header -->
    <div data-role="header">
        <h1>Header content</h1>
    </div>
    <!-- /header -->
    <!-- content -->
    <div data-role="content">content</div>
    <!-- /content -->
    <!-- footer -->
    <div data-role="footer">
        <h4>Footer content</h4>
    </div>
    <!-- /footer -->
</div>
<!-- /page -->

<!-- report- Page -->
<div data-role="page" id="report" data-add-back-btn="true">
    <!-- header -->
    <div data-role="header">
        <h1>Le Report</h1>
    </div>
    <!-- /header -->
    <!-- content -->
    <div data-role="content">content</div>
    <!-- /content -->
    <!-- footer -->
    <div data-role="footer">
        <h4>Footer content</h4>
    </div>
    <!-- /footer -->
</div>
<!-- /page -->

<!-- map- Page -->
<div data-role="page" id="map" data-add-back-btn="true">
    <!-- header -->
    <div data-role="header">
        <h1>Le Map</h1>
    </div>
    <!-- /header -->
    <!-- content -->
    <div data-role="content">
        <img src="imgs/map.png" width="100%">
    </div>
    <!-- /content -->
</div>
<!-- /page -->

<!-- google- Page -->
<div data-role="page" id="google" data-add-back-btn="true">
    <!-- header -->
    <div data-role="header">
        <h1>Google</h1>
    </div>
    <!-- /header -->
    <!-- content -->
    <div data-role="content">
        <img
                src="http://fs02.androidpit.info/userfiles/30778/image/google.jpg">
    </div>
    <!-- /content -->
</div>
<!-- /page -->

<!-- landtag- Pages -->
<!-- landtag_homepage- Page -->
<div data-role="page" id="landtag_homepage" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header">
        <h1>Aktuelles</h1>
        <a href="#main" data-icon="arrow-l">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage" class="ui-btn-active ui-state-persist">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag_homepage.inc"); ?>
    <!-- /content -->
</div>
<!-- /page -->
<!-- landtag_social- Pages -->
<!-- landtag_social- Page -->

<div data-role="page" id="landtag_social" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header">
        <h1>Social Media</h1>
        <a href="#main" data-icon="arrow-l">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social" class="ui-btn-active ui-state-persist">Social Media</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag_social.inc"); ?>
    <!-- /content -->
</div>

<!-- /landtag_social- Page -->
<!-- landtag_social_facebook- Page -->
<div data-role="page" id="landtag_social_facebook" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header">
        <h1>Facebook</h1>
        <a href="#landtag_social" data-icon="arrow-l">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social_facebook" class="ui-btn-active ui-state-persist">Social Media</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag_social_facebook.inc"); ?>
    <!-- /content -->
</div>
<!-- /page -->
<!-- landtag_social_twitter- Page -->
<div data-role="page" id="landtag_social_twitter" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header">
        <h1>Twitternews</h1>
        <a href="#landtag_social" data-icon="arrow-l">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social_facebook" class="ui-btn-active ui-state-persist">Social Media</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag_social_twitter.inc"); ?>
    <!-- /content -->
</div>
<!-- /page -->
<!-- /landtag_social- Pages -->
<!-- /landtag-pages -->

</body>
</html>