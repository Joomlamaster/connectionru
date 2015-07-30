<?php

/* ConnectionUserBundle:Profile/Part/Edit:gallery.html.twig */
class __TwigTemplate_7ee52f5781c96e11f03f7c087f2d74e03d1701c0e832c3ab29aae1b2e070bd69 extends Twig_Template
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
        if ((array_key_exists("userPhotos", $context) && (!twig_test_empty((isset($context["userPhotos"]) ? $context["userPhotos"] : $this->getContext($context, "userPhotos")))))) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userPhotos"]) ? $context["userPhotos"] : $this->getContext($context, "userPhotos")));
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
                        echo "                    <div class=\"profile-image-box\">
                        <img src=\"";
                        // line 7
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                        echo "\" data-image_id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                        echo "\">
                        <a data-href=\"";
                        // line 8
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_profile_image", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-danger profile-image-remove\" data-toggle=\"confirmation\">Remove</a>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 11
                    echo "                <div class=\"add-image dz-upload-image\">
                    <img src=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/img/add_user.png"), "html", null, true);
                    echo "\">
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['galleryName'], $context['images'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 18
            echo "    <div class=\"row profile-gallery\">
        <div class=\"add-image dz-upload-image\">
            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/connectionweb/img/add_user.png"), "html", null, true);
            echo "\">
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "ConnectionUserBundle:Profile/Part/Edit:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  76 => 18,  69 => 16,  59 => 12,  56 => 11,  47 => 8,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
