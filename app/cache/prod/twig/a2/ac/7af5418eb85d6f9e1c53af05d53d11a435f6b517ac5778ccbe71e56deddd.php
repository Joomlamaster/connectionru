<?php

/* ConnectionUserBundle:Profile/Part/View:gallery.html.twig */
class __TwigTemplate_a2ac7af5418eb85d6f9e1c53af05d53d11a435f6b517ac5778ccbe71e56deddd extends Twig_Template
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
        if ((array_key_exists("userPhotos", $context) && (!twig_test_empty((isset($context["userPhotos"]) ? $context["userPhotos"] : null))))) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userPhotos"]) ? $context["userPhotos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
                // line 3
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["gallery"]);
                foreach ($context['_seq'] as $context["galleryName"] => $context["images"]) {
                    // line 4
                    echo "            <div class=\"row profile-gallery\">
                ";
                    // line 5
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($context["images"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 6
                        echo "                    <div class=\"user-profile-image-box\">
                        <img src=\"";
                        // line 7
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                        echo "\" data-image_id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                        echo "\">
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 10
                    echo "            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['galleryName'], $context['images'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile/Part/View:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  52 => 10,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
