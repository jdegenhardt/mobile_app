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

    <!-- paragraph border Settings -->
    <style type="text/css">
        p {
            padding-bottom: 8px;
            padding-left: 8px;
            padding-right: 8px;
            padding-top: 8px;
            border-width: 3px;
            border-style: dotted;
            border-color: lightblue;
            margin-bottom: 0px;
            margin-top: 0px;
        }
    </style>
    <!-- /paragraph border Settings -->

    <!-- Tabelle tr trennlinie Settings -->
    <style type="text/css">
        .tabellenlinie:first-child {
            border-top-width: 1px;
            border-top-style: solid;
            border-top-color: lightskyblue;
        }
    </style>
    <!-- /Tabelle tr trennlinie Settings -->

</head>
<body>

<!-- landtag- Pages -->
<!-- landtag_social- Pages -->
<!-- landtag_social- Page -->
<div data-role="page" id="landtag_social" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Social Media</h1>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social" class="ui-btn-active ui-state-persist">Social Media</a></li>
                <li><a href="#landtag_berichte">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/social.inc"); ?>
    <!-- /content -->
</div>

<!-- /landtag_social- Page -->
<!-- landtag_social_facebook- Page -->
<div data-role="page" id="landtag_social_facebook" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Facebook</h1>
        <a href="#landtag_social" data-icon="arrow-l">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social" class="ui-btn-active ui-state-persist">Social Media</a></li>
                <li><a href="#landtag_berichte">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/social/facebook.inc"); ?>
    <!-- /content -->
</div>
<!-- /page -->
<!-- landtag_social_twitter- Page -->
<div data-role="page" id="landtag_social_twitter" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Twitternews</h1>
        <a href="#landtag_social" data-icon="arrow-l">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social" class="ui-btn-active ui-state-persist">Social Media</a></li>
                <li><a href="#landtag_berichte">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/social/twitter.inc"); ?>
    <!-- /content -->
</div>
<!-- /page -->
<!-- /landtag_social- Pages -->
<!-- landtag_homepage- Page -->
<div data-role="page" id="landtag_homepage" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Aktuelles</h1>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage" class="ui-btn-active ui-state-persist">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/homepage.inc"); ?>
    <!-- /content -->
</div>
<!-- /page -->
<!-- landtag_berichte- Pages -->
<!-- landtag_berichte- Page -->
<div data-role="page" id="landtag_berichte" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Berichte</h1>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte.inc"); ?>
    <!-- /content -->
</div>
<!-- /page -->
<!-- landtag_berichte_map- Page -->
<div data-role="page" id="landtag_berichte_map" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Trendprognose</h1>
        <a href="#landtag_berichte" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/map.inc"); ?>
    <!-- /content -->
</div>
<!-- /page -->
<!-- landtag_berichte_map_trends- Page -->
<div data-role="page" id="landtag_berichte_map_trends" data-add-back-btn="false">
<!-- header -->
<div data-role="header" data-position="fixed">
    <h1>Trendprognose f&uuml;r Oberfranken</h1>
    <a href="#landtag_berichte_map" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
    <!-- navbar -->
    <div data-role="navbar">
        <ul>
            <li><a href="#landtag_homepage">Aktuelles</a></li>
            <li><a href="#landtag_social">Social Media</a></li>
            <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
        </ul>
    </div>
    <!-- /navbar -->
</div>
<!-- /header -->
<!-- content -->
<?php readfile("includes/landtag/berichte/map/trends.inc"); ?>
<!-- /content -->
</div>
<!-- /Page -->
<!-- landtag_berichte_kita- Page -->
<div data-role="page" id="landtag_berichte_kita" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>KiTapl&auml;tze</h1>
        <a href="#landtag_berichte" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/kita.inc"); ?>
    <!-- /content -->
</div>
<!-- /page -->
<!-- landtag_berichte_kantine- Page -->
<div data-role="page" id="landtag_berichte_kantine" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Kantinenessen</h1>
        <a href="#landtag_berichte" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/kantine.inc"); ?>
    <!-- /content -->
</div>
<!-- /page -->
<!-- landtag_berichte_bezirke- Pages -->
<!-- landtag_berichte_bezirke- Page -->
<div data-role="page" id="landtag_berichte_bezirke" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Regierungsbezirke</h1>
        <a href="#landtag_berichte" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/bezirke.inc"); ?>
    <!-- /content -->
</div>
<!-- /Page -->
<!-- landtag_berichte_bezirke_unterfranken- Page -->
<div data-role="page" id="landtag_berichte_bezirke_unterfranken" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Unterfranken</h1>
        <a href="#landtag_berichte_bezirke" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/bezirke/unterfranken.inc"); ?>
    <!-- /content -->
</div>
<!-- /Page -->
<!-- landtag_berichte_bezirke_oberpfalz- Page -->
<div data-role="page" id="landtag_berichte_bezirke_oberpfalz" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Oberpfalz</h1>
        <a href="#landtag_berichte_bezirke" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/bezirke/oberpfalz.inc"); ?>
    <!-- /content -->
</div>
<!-- /Page -->
<!-- landtag_berichte_bezirke_oberbayern- Page -->
<div data-role="page" id="landtag_berichte_bezirke_oberbayern" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Oberbayern</h1>
        <a href="#landtag_berichte_bezirke" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/bezirke/oberbayern.inc"); ?>
    <!-- /content -->
</div>
<!-- /Page -->
<!-- landtag_berichte_bezirke_niederbayern- Page -->
<div data-role="page" id="landtag_berichte_bezirke_niederbayern" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Niederbayern</h1>
        <a href="#landtag_berichte_bezirke" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/bezirke/niederbayern.inc"); ?>
    <!-- /content -->
</div>
<!-- /Page -->
<!-- landtag_berichte_bezirke_mittelfranken- Page -->
<div data-role="page" id="landtag_berichte_bezirke_mittelfranken" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Mittelfranken</h1>
        <a href="#landtag_berichte_bezirke" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/bezirke/mittelfranken.inc"); ?>
    <!-- /content -->
</div>
<!-- /Page -->
<!-- landtag_berichte_bezirke_schwaben- Page -->
<div data-role="page" id="landtag_berichte_bezirke_schwaben" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Schwaben</h1>
        <a href="#landtag_berichte_bezirke" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/bezirke/schwaben.inc"); ?>
    <!-- /content -->
</div>
<!-- /Page -->
<!-- landtag_berichte_bezirke_oberfranken- Page -->
<div data-role="page" id="landtag_berichte_bezirke_oberfranken" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Oberfranken</h1>
        <a href="#landtag_berichte_bezirke" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/bezirke/oberfranken.inc"); ?>
    <!-- /content -->
</div>
<!-- /Page -->
<!-- /landtag_berichte_bezirke- Pages -->
<!-- security- Page -->
<div data-role="page" id="landtag_berichte_security" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>&Uuml;berwachungskamera</h1>
        <a href="#landtag_berichte" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#landtag_homepage">Aktuelles</a></li>
                <li><a href="#landtag_social">Social Media</a></li>
                <li><a href="#landtag_berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/landtag/berichte/security.inc"); ?>
    <!-- /content -->
</div>
<!-- /Page -->
<!-- /landtag_berichte- Pages -->
<!-- /landtag- Pages -->

</body>
</html>