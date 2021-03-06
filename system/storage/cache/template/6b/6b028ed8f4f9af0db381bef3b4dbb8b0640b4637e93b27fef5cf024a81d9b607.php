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
class __TwigTemplate_848440739cbde01b5607cf2feabfa7feb835f6694e525a19754f6071ae6da4b5 extends \Twig\Template
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
      <div class=\"panel-body\">
        <form action=\"";
        // line 22
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-country\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
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
                  <td class=\"text-center\">";
                // line 55
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 55), ($context["selected"] ?? null))) {
                    // line 56
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 56);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 58
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 58);
                    echo "\" />
                    ";
                }
                // line 59
                echo "</td>
                  <td class=\"text-left\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 60);
                echo "</td>
\t\t\t\t    <td class=\"text-left\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["country"], "fee", [], "any", false, false, false, 61);
                echo "</td>
                  <td class=\"text-left\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["country"], "iso_code_2", [], "any", false, false, false, 62);
                echo "</td>
                  <td class=\"text-left\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["country"], "iso_code_3", [], "any", false, false, false, 63);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["country"], "edit", [], "any", false, false, false, 64);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                ";
        } else {
            // line 68
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 69
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 72
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 77
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 78
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>

";
        // line 84
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
        return array (  265 => 84,  256 => 78,  252 => 77,  245 => 72,  239 => 69,  236 => 68,  233 => 67,  222 => 64,  218 => 63,  214 => 62,  210 => 61,  206 => 60,  203 => 59,  197 => 58,  191 => 56,  189 => 55,  186 => 54,  181 => 53,  179 => 52,  172 => 48,  169 => 47,  161 => 46,  151 => 44,  149 => 43,  146 => 42,  138 => 41,  128 => 39,  126 => 38,  123 => 37,  117 => 36,  109 => 34,  107 => 33,  104 => 32,  96 => 31,  88 => 29,  86 => 28,  77 => 22,  71 => 19,  67 => 17,  59 => 13,  56 => 12,  48 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/delievery.twig", "");
    }
}
