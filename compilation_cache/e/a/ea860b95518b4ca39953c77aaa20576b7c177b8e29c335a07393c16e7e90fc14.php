<?php

/* base.twig */
class __TwigTemplate_ea860b95518b4ca39953c77aaa20576b7c177b8e29c335a07393c16e7e90fc14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>JohnCale.ru</title>
    <link rel=\"stylesheet\" href=\"static/css/foundation.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"static/css/fonts/font.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"static/css/app.css\">
    ";
        // line 11
        echo "    <script src=\"js/vendor/modernizr.js\"></script>


</head>
<body>

<!-- Google Tag Manager -->
<noscript>
    <iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-WGXVX9\"
            height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WGXVX9');</script>
<!-- End Google Tag Manager -->


<div id=\"content\">
    ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "</div>



<script src=\"static/js/vendor/jquery.js\"></script>
<script src=\"static/js/foundation.min.js\"></script>
<script src=\"static/js/vendor/theia-sticky-sidebar.js\"></script>
<script src=\"static/js/vendor/jquery.hypher.js\"></script>
<script src=\"static/js/vendor/ru.js\"></script>

<script>

    \$(document).ready(function () {
        \$('.row .sticky').theiaStickySidebar();
    });

    jQuery(function (\$) {
        \$('p').hyphenate('ru');
    });

</script>

</body>
</html>
";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 39,  90 => 38,  62 => 40,  60 => 38,  31 => 11,  20 => 1,);
    }
}
