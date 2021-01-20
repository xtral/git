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
class __TwigTemplate_177ebc32833a6965d953c4b3f3b161c5e00161ab962c3e86419eed54435c3ea5 extends \Twig\Template
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
              <input type=\"text\" name=\"fee\"  placeholder=\"15\$\" id=\"input-fee\" class=\"form-control\" />
          
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-iso-code-2\">";
        // line 45
        echo ($context["entry_iso_code_2"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"iso_code_2\" value=\"";
        // line 47
        echo ($context["iso_code_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_iso_code_2"] ?? null);
        echo "\" id=\"input-iso-code-2\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-iso-code-3\">";
        // line 51
        echo ($context["entry_iso_code_3"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"iso_code_3\" value=\"";
        // line 53
        echo ($context["iso_code_3"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_iso_code_3"] ?? null);
        echo "\" id=\"input-iso-code-3\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-address-format\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["help_address_format"] ?? null), "html");
        echo "\">";
        echo ($context["entry_address_format"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <textarea name=\"address_format\" rows=\"5\" placeholder=\"";
        // line 59
        echo ($context["entry_address_format"] ?? null);
        echo "\" id=\"input-address-format\" class=\"form-control\">";
        echo ($context["address_format"] ?? null);
        echo "</textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 63
        echo ($context["entry_postcode_required"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 66
        if (($context["postcode_required"] ?? null)) {
            // line 67
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"1\" checked=\"checked\" />
                ";
            // line 68
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 70
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"1\" />
                ";
            // line 71
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 73
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 75
        if ( !($context["postcode_required"] ?? null)) {
            // line 76
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"0\" checked=\"checked\" />
                ";
            // line 77
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 79
            echo "                <input type=\"radio\" name=\"postcode_required\" value=\"0\" />
                ";
            // line 80
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 82
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 86
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 89
        if (($context["status"] ?? null)) {
            // line 90
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 91
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 93
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 94
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 96
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 104
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
        return array (  272 => 104,  262 => 96,  257 => 94,  252 => 93,  247 => 91,  242 => 90,  240 => 89,  234 => 86,  228 => 82,  223 => 80,  220 => 79,  215 => 77,  212 => 76,  210 => 75,  206 => 73,  201 => 71,  198 => 70,  193 => 68,  190 => 67,  188 => 66,  182 => 63,  173 => 59,  166 => 57,  157 => 53,  152 => 51,  143 => 47,  138 => 45,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "localisation/country_form.twig", "");
    }
}
