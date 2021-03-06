<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/information/delievery.twig */
class __TwigTemplate_d2cdcaec50f7a0307171485de8e20e274ae4f167912867e1f11e0f677b255866 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
 <div class=\"container\">

\t

 
    ";
        // line 7
        if (($context["error_warning"] ?? null)) {
            // line 8
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 12
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 13
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 17
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 19
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
     
        <form  method=\"post\" enctype=\"multipart/form-data\" id=\"form-country\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  
                  <td class=\"col-sm-4\">";
        // line 28
        if ((($context["sort"] ?? null) == "name")) {
            // line 29
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">Delievery countries</a>
                    ";
        } else {
            // line 31
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    <";
        }
        // line 32
        echo "</td>
\t\t\t\t\t     <td class=\"col-sm-2\">";
        // line 33
        if ((($context["sort"] ?? null) == "fee")) {
            // line 34
            echo "                    <a href=\"";
            echo ($context["sort_fee"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">Shipping fee</a>
                    ";
        } else {
            // line 36
            echo "                    <a href=\"";
            echo ($context["sort_fee"] ?? null);
            echo "\">Shipping fee</a>
                    ";
        }
        // line 37
        echo "</td>
                  <td class=\"col-sm-2\">";
        // line 38
        if ((($context["sort"] ?? null) == "iso_code_2")) {
            // line 39
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_2"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_iso_code_2"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 41
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_2"] ?? null);
            echo "\">";
            echo ($context["column_iso_code_2"] ?? null);
            echo "</a>
                    ";
        }
        // line 42
        echo "</td>
                  <td class=\"col-sm-2\">";
        // line 43
        if ((($context["sort"] ?? null) == "iso_code_3")) {
            // line 44
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_3"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_iso_code_3"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 46
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_3"] ?? null);
            echo "\">";
            echo ($context["column_iso_code_3"] ?? null);
            echo "</a>
                    ";
        }
        // line 47
        echo "</td>
                  <td class=\"col-sm-2\">";
        // line 48
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 52
        if (($context["countries"] ?? null)) {
            // line 53
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 54
                echo "                <tr>
                  
                  <td class=\"text-left\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 56);
                echo "</td>
\t\t\t\t    <td class=\"text-left\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["country"], "fee", [], "any", false, false, false, 57);
                echo "</td>
                  <td class=\"text-left\"></td>
                  <td class=\"text-left\"></td>
                  <td class=\"text-right\"></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                ";
        } else {
            // line 64
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 65
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 68
        echo "              </tbody>
            </table>
          </div>
        </form>
  
    </div>
  </div>

";
        // line 76
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/delievery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 76,  215 => 68,  209 => 65,  206 => 64,  203 => 63,  191 => 57,  187 => 56,  183 => 54,  178 => 53,  176 => 52,  169 => 48,  166 => 47,  158 => 46,  148 => 44,  146 => 43,  143 => 42,  135 => 41,  125 => 39,  123 => 38,  120 => 37,  114 => 36,  106 => 34,  104 => 33,  101 => 32,  93 => 31,  85 => 29,  83 => 28,  71 => 19,  67 => 17,  59 => 13,  56 => 12,  48 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/delievery.twig", "");
    }
}
