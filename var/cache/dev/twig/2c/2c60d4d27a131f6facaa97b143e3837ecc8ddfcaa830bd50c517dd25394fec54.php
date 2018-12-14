<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8d69225e608c3a4942f757e32fe3c5a576ef6323acccf3b80f83bbca338a6bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3516f6c7b1e0be757ad3b0503f883ec1650072bbcbdc60e3e9205733d9d2b6d9 = $this->env->getExtension("native_profiler");
        $__internal_3516f6c7b1e0be757ad3b0503f883ec1650072bbcbdc60e3e9205733d9d2b6d9->enter($__internal_3516f6c7b1e0be757ad3b0503f883ec1650072bbcbdc60e3e9205733d9d2b6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3516f6c7b1e0be757ad3b0503f883ec1650072bbcbdc60e3e9205733d9d2b6d9->leave($__internal_3516f6c7b1e0be757ad3b0503f883ec1650072bbcbdc60e3e9205733d9d2b6d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2577000399a193a3d1b55cc48a443d3e31e9f2907431376ed63de94209f38337 = $this->env->getExtension("native_profiler");
        $__internal_2577000399a193a3d1b55cc48a443d3e31e9f2907431376ed63de94209f38337->enter($__internal_2577000399a193a3d1b55cc48a443d3e31e9f2907431376ed63de94209f38337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2577000399a193a3d1b55cc48a443d3e31e9f2907431376ed63de94209f38337->leave($__internal_2577000399a193a3d1b55cc48a443d3e31e9f2907431376ed63de94209f38337_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7a9fed8f9a684938fa5ad3d265052f9b14c60c48001f6a833aceb8b768cd165 = $this->env->getExtension("native_profiler");
        $__internal_e7a9fed8f9a684938fa5ad3d265052f9b14c60c48001f6a833aceb8b768cd165->enter($__internal_e7a9fed8f9a684938fa5ad3d265052f9b14c60c48001f6a833aceb8b768cd165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7a9fed8f9a684938fa5ad3d265052f9b14c60c48001f6a833aceb8b768cd165->leave($__internal_e7a9fed8f9a684938fa5ad3d265052f9b14c60c48001f6a833aceb8b768cd165_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f1518d4df71668a37271e0ad727486f44a3691bb7580a9252944da9033c4d7a = $this->env->getExtension("native_profiler");
        $__internal_2f1518d4df71668a37271e0ad727486f44a3691bb7580a9252944da9033c4d7a->enter($__internal_2f1518d4df71668a37271e0ad727486f44a3691bb7580a9252944da9033c4d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2f1518d4df71668a37271e0ad727486f44a3691bb7580a9252944da9033c4d7a->leave($__internal_2f1518d4df71668a37271e0ad727486f44a3691bb7580a9252944da9033c4d7a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
