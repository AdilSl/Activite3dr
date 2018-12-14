<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e02ab955bdba068f91ce56f8af6be82f596bae9dbbf9179dab2f6ccc70dfcb12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c150a7521dbd525e9caaa016dc765fd00c5fec79a9b5836b5daa7f6a72a74c9 = $this->env->getExtension("native_profiler");
        $__internal_8c150a7521dbd525e9caaa016dc765fd00c5fec79a9b5836b5daa7f6a72a74c9->enter($__internal_8c150a7521dbd525e9caaa016dc765fd00c5fec79a9b5836b5daa7f6a72a74c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c150a7521dbd525e9caaa016dc765fd00c5fec79a9b5836b5daa7f6a72a74c9->leave($__internal_8c150a7521dbd525e9caaa016dc765fd00c5fec79a9b5836b5daa7f6a72a74c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ca1dd2d0c502b4cd2118f60452b4c27600cf498be45c8494e22b883a5aed3c7 = $this->env->getExtension("native_profiler");
        $__internal_4ca1dd2d0c502b4cd2118f60452b4c27600cf498be45c8494e22b883a5aed3c7->enter($__internal_4ca1dd2d0c502b4cd2118f60452b4c27600cf498be45c8494e22b883a5aed3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ca1dd2d0c502b4cd2118f60452b4c27600cf498be45c8494e22b883a5aed3c7->leave($__internal_4ca1dd2d0c502b4cd2118f60452b4c27600cf498be45c8494e22b883a5aed3c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d99bf6e8dac93ddfdb7bff5770f7ac4a76ef08dc18202eb071b205161d5112e = $this->env->getExtension("native_profiler");
        $__internal_9d99bf6e8dac93ddfdb7bff5770f7ac4a76ef08dc18202eb071b205161d5112e->enter($__internal_9d99bf6e8dac93ddfdb7bff5770f7ac4a76ef08dc18202eb071b205161d5112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d99bf6e8dac93ddfdb7bff5770f7ac4a76ef08dc18202eb071b205161d5112e->leave($__internal_9d99bf6e8dac93ddfdb7bff5770f7ac4a76ef08dc18202eb071b205161d5112e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b5e2b1c078ecd43594b1fdb5239f3057cc27fe1f0739f06825ed366167c9426 = $this->env->getExtension("native_profiler");
        $__internal_3b5e2b1c078ecd43594b1fdb5239f3057cc27fe1f0739f06825ed366167c9426->enter($__internal_3b5e2b1c078ecd43594b1fdb5239f3057cc27fe1f0739f06825ed366167c9426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b5e2b1c078ecd43594b1fdb5239f3057cc27fe1f0739f06825ed366167c9426->leave($__internal_3b5e2b1c078ecd43594b1fdb5239f3057cc27fe1f0739f06825ed366167c9426_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
