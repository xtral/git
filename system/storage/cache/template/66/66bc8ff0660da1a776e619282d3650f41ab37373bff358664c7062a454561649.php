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
class __TwigTemplate_e1f0f236b6bde606c6bd67215f4356c9f9bbc1b47f2440730d8175b04ac1e9a6 extends \Twig\Template
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
 <style>
   @font-face {
    font-family: FiraSansExtraCondensed; 
    src: url(font/FiraSansExtraCondensed.ttf); 
   }
   body {
    font-family: FiraSansExtraCondensed;
   }
  </style>
 <div class=\"container\">

\t

 
    ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 30
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
      </div>
\t  
     
        <form  action=\"";
        // line 35
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-country\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  
                  <td class=\"col-sm-4 top\">";
        // line 41
        if ((($context["sort"] ?? null) == "name")) {
            // line 42
            echo "                    <a  class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">Delievery countries</a>
                    ";
        } else {
            // line 44
            echo "                    <a >";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    <";
        }
        // line 45
        echo "</td>
\t\t\t\t\t     <td class=\"col-sm-2 top\">";
        // line 46
        if ((($context["sort"] ?? null) == "fee")) {
            // line 47
            echo "                    <a  class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">Shipping fee</a>
                    ";
        } else {
            // line 49
            echo "                    <a >Shipping fee</a>
                    ";
        }
        // line 50
        echo "</td>
                  <td class=\"col-sm-2 top\">";
        // line 51
        if ((($context["sort"] ?? null) == "iso_code_2")) {
            // line 52
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_2"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_iso_code_2"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 54
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_2"] ?? null);
            echo "\">";
            echo ($context["column_iso_code_2"] ?? null);
            echo "</a>
                    ";
        }
        // line 55
        echo "</td>
                  <td class=\"col-sm-2 top\">";
        // line 56
        if ((($context["sort"] ?? null) == "iso_code_3")) {
            // line 57
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_3"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_iso_code_3"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 59
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_3"] ?? null);
            echo "\">";
            echo ($context["column_iso_code_3"] ?? null);
            echo "</a>
                    ";
        }
        // line 60
        echo "</td>
                  <td class=\"col-sm-2 top\">";
        // line 61
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 65
        if (($context["countries"] ?? null)) {
            // line 66
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 67
                echo "                <tr>
                  
                  <td class=\"text-left\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 69);
                echo "</td>
\t\t\t\t    <td class=\"text-left\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["country"], "fee", [], "any", false, false, false, 70);
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
            // line 76
            echo "                ";
        } else {
            // line 77
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 78
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 81
        echo "              </tbody>
            </table>
          </div>
        </form>
  
    </div>
  </div>
 <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}


\tlocation = 'index.php?route=information/delievery' + url;
});

\$(document).ready(function() {
  \$('input').keydown(function(e) {
 if(e.keyCode === 13) {
 var url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}


\tlocation = 'index.php?route=information/delievery' + url;
 }
  });
});

//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=information/delievery/autocomplete&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['fee']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t\tvar url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}


\tlocation = 'index.php?route=information/delievery' + url;
\t}
});


//--></script></div>
";
        // line 158
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
        return array (  307 => 158,  228 => 81,  222 => 78,  219 => 77,  216 => 76,  204 => 70,  200 => 69,  196 => 67,  191 => 66,  189 => 65,  182 => 61,  179 => 60,  171 => 59,  161 => 57,  159 => 56,  156 => 55,  148 => 54,  138 => 52,  136 => 51,  133 => 50,  129 => 49,  123 => 47,  121 => 46,  118 => 45,  112 => 44,  106 => 42,  104 => 41,  95 => 35,  85 => 30,  81 => 29,  76 => 26,  68 => 22,  65 => 21,  57 => 17,  55 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/delievery.twig", "");
    }
}
