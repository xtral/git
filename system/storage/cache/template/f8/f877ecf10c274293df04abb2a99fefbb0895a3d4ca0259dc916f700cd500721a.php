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

/* localisation/country_form.twig */
class __TwigTemplate_988167fc156262be91ce07f25df79a7319661523b292654b992af5a44cece8d1 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-country\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-country\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
\t\t <div class=\"form-group \">
            <label class=\"col-sm-2 control-label\" for=\"input-fee\">Shipping fee</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"fee\" value=\"";
        // line 40
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"15\$\" id=\"input-fee\" class=\"form-control\" />
              ";
        // line 41
        if (($context["error_name"] ?? null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo ($context["error_fee"] ?? null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-iso-code-2\">";
        // line 47
        echo ($context["entry_iso_code_2"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"iso_code_2\" value=\"";
        // line 49
        echo ($context["iso_code_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_iso_code_2"] ?? null);
        echo "\" id=\"input-iso-code-2\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-iso-code-3\">";
        // line 53
        echo ($context["entry_iso_code_3"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"iso_code_3\" value=\"";
        // line 55
        echo ($context["iso_code_3"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_iso_code_3"] ?? null);
        echo "\" id=\"input-iso-code-3\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-address-format\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["help_address_format"] ?? null), "html");
        echo "\">";
        echo ($context["entry_address_format"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <textarea name=\"address_format\" rows=\"5\" placeholder=\"";
        // line 61
        echo ($context["entry_address_format"] ?? null);
        echo "\" id=\"input-address-format\" class=\"form-control\">";
        echo ($context["address_format"] ?? null);
        echo "</textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 65
        echo ($context["entry_postcode_required"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 68
        if (($context["postcode_required"] ?? null)) {
            // line 69
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"1\" checked=\"checked\" />
                ";
            // line 70
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 72
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"1\" />
                ";
            // line 73
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 75
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 77
        if ( !($context["postcode_required"] ?? null)) {
            // line 78
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"0\" checked=\"checked\" />
                ";
            // line 79
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 81
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"0\" />
                ";
            // line 82
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 84
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 88
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 91
        if (($context["status"] ?? null)) {
            // line 92
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 93
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 95
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 96
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 98
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 106
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "localisation/country_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 106,  274 => 98,  269 => 96,  264 => 95,  259 => 93,  254 => 92,  252 => 91,  246 => 88,  240 => 84,  235 => 82,  232 => 81,  227 => 79,  224 => 78,  222 => 77,  218 => 75,  213 => 73,  210 => 72,  205 => 70,  202 => 69,  200 => 68,  194 => 65,  185 => 61,  178 => 59,  169 => 55,  164 => 53,  155 => 49,  150 => 47,  145 => 44,  139 => 42,  137 => 41,  133 => 40,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "localisation/country_form.twig", "");
    }
}
