<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8f11978d90dde495737f4c8fc618f0909d953a0bf26faf5c8d2d373e59e749da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
