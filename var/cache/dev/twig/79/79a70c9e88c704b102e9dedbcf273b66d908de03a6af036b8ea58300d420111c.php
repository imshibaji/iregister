<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6312efe0d28a43931bb5c8fe4966f929bcb3cf92424b9d7adc9b9afceb7699f1 extends Twig_Template
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
        $__internal_c09f049aebfcc93ab5d5a50d2ddb512321e7d0d2b0604f3cab37caba8d8feca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09f049aebfcc93ab5d5a50d2ddb512321e7d0d2b0604f3cab37caba8d8feca1->enter($__internal_c09f049aebfcc93ab5d5a50d2ddb512321e7d0d2b0604f3cab37caba8d8feca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f48099c7f2f2da0a16e178a5d6d7406c84f4bd9accd9496e4fcdcbd721b80207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48099c7f2f2da0a16e178a5d6d7406c84f4bd9accd9496e4fcdcbd721b80207->enter($__internal_f48099c7f2f2da0a16e178a5d6d7406c84f4bd9accd9496e4fcdcbd721b80207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c09f049aebfcc93ab5d5a50d2ddb512321e7d0d2b0604f3cab37caba8d8feca1->leave($__internal_c09f049aebfcc93ab5d5a50d2ddb512321e7d0d2b0604f3cab37caba8d8feca1_prof);

        
        $__internal_f48099c7f2f2da0a16e178a5d6d7406c84f4bd9accd9496e4fcdcbd721b80207->leave($__internal_f48099c7f2f2da0a16e178a5d6d7406c84f4bd9accd9496e4fcdcbd721b80207_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
