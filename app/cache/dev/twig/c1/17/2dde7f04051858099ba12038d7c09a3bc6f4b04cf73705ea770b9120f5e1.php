<?php

/* ConnectionWebBundle:Frontend:privacy.html.twig */
class __TwigTemplate_c1172dde7f04051858099ba12038d7c09a3bc6f4b04cf73705ea770b9120f5e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConnectionWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'theme' => array($this, 'block_theme'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConnectionWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_theme($context, array $blocks = array())
    {
        echo "content-page";
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container breadcrumbs\">
        <ul>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("connection_homepage");
        echo "\">Main page</a></li>
            <li>Privacy</li>
        </ul>
    </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h4>Privacy</h4>
            <h5>General Provisions</h5>
            <p>Singles \"ConnectionRu.com\" with the responsibility belongs to the user's right to privacy seriously and is committed to using the site as comfortable as possible for the community of users of the Site \"ConnectionRu.com\"  This Privacy Policy applies to information directly related to the personality of the user (hereinafter \"Personal Data\") that may be collected on this site. We hope that the information set out below privacy policy will help you to make informed decisions regarding personal information provided.<br/> This Privacy Policy applies only to singles \"ConnectionRu.com\"  and on information collected by this website. It does not apply to any other sites, and does not apply to websites of third parties, which may be made with reference to the singles \"ConnectionRu.com\"</p>
            <h5>What information we collect</h5>
            <p>The information we collect is divided into two categories: personal data (PD) and non-personal data (NAP). PD - is any information that can be used to identify you as a person, while the NAP contains data that does not reveal your identity. The following sections describe how we collect PD and the NAP and how we use that information.</p>
            <h5>Personal Data (PD)</h5>
            <p>The site collects personal information that the user provides voluntarily when registering on the Website. The term \"personal data\" in this case includes information that identifies you as a specific individual, such as your name or email address. Since the content of the Site can be viewed only after registration, you will need to register to use the services of the Site \"ConnectionRu.com\"</p>
            <h5>These non-personal (NAP)</h5>
            <p>Poster \"ConnectionRu.com\"  can collect information about users, not related to personal data. Examples of this kind of information can serve as your IP-address, type of web browser used, the operating system type, Internet Service Provider (ISP), date and time, and number of clicks. Information that gets control of the site, \"ConnectionRu.com\", can be used to facilitate the users to use the Site, including: Site organization most user-friendly way; providing the opportunity to subscribe to the mailing list for special offers and topics, if you wish to receive such notice; trend analysis of user behavior on the Site; Administration of the Site; fraud prevention; to track the movement of visitors in the aggregate; gather demographic information.</p>
            <h5>How is information gathered</h5>
            <p>While viewing the Site \"\"ConnectionRu.com\"  user defined information can be stored on your computer. For example, \"cookies\" allow personalize your website, groups and situations based on your profile and personal preferences. However, all this information is not linked to the user as an individual. \"Cookies\" do not record e-mail address and any personal information about the user. To learn more about these functions to read the instructions for your browser. When you register or subscribe to any of our services, we collect information about you. For example, our service for psychological testing, you give us the answers to your own questions, and we, in turn, use your answers to build your psychological portrait and selecting users for you based on your answers to the questionnaires, as well as, respectively, other users. Answers to your questions about your personality in our questionnaire are strictly confidential information, while others nap about yourself (eg name, occupation, gender, age, etc.) will be used to create your public profile \"About Me . \" So you can enjoy the benefits of the Website \"ConnectionRu.com\" if you give your consent that your psychological profile public (show it to everyone or specific users), we will show this information about you to other members of the community. Finally, for interactive content Site \"ConnectionRu.com\", such as situations or Groups, where you will have a public status, we will display information about you (your profile) other members of the community. For your convenience and your choice you can upload to server \"Forever\" your pictures and giving us such materials, you agree that they will be available to other members of the community Site \"ConnectionRu.com\"</p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ConnectionWebBundle:Frontend:privacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  52 => 13,  43 => 8,  39 => 6,  36 => 5,  30 => 3,);
    }
}
