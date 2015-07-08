<?php

/* articles.twig */
class __TwigTemplate_be6fb06ec0f1d864d7beb2ad8e1beb564232661b9d80b7f3194cf11d6f8e488e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "articles.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Серия романов о Гарри Поттере";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("01.html", "articles.twig", 7)->display($context);
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("02.html", "articles.twig", 9)->display($context);
        // line 10
        echo "

    ";
        // line 12
        $this->loadTemplate("03.html", "articles.twig", 12)->display($context);
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("04.html", "articles.twig", 14)->display($context);
        // line 15
        echo "
    ";
        // line 16
        $this->loadTemplate("05.html", "articles.twig", 16)->display($context);
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("06.html", "articles.twig", 18)->display($context);
        // line 19
        echo "
    ";
        // line 20
        $this->loadTemplate("07.html", "articles.twig", 20)->display($context);
        // line 21
        echo "
    ";
        // line 22
        $this->loadTemplate("08.html", "articles.twig", 22)->display($context);
        // line 23
        echo "
    ";
        // line 24
        $this->loadTemplate("09.html", "articles.twig", 24)->display($context);
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "articles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  82 => 24,  79 => 23,  77 => 22,  74 => 21,  72 => 20,  69 => 19,  67 => 18,  64 => 17,  62 => 16,  59 => 15,  57 => 14,  54 => 13,  52 => 12,  48 => 10,  46 => 9,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
