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
class __TwigTemplate_8af4c713cbe901c7a7b61f510873e9b273be1042de17944f8c642e0fc2f88b4b extends \Twig\Template
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
        <div class=\"form-group\" id=\"wow\">
\t\t<div id=\"ser\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t<div id=\"rblock\"><i id=\"ricon\" class=\"fa fa-search\"></i></div>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 32
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" /> </div>
\t\t\t  <p id=\"shipdet\">Type your country to get shipping details</p>
\t\t\t 
            </div>
      </div>
\t  
     
        <form  action=\"";
        // line 39
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-country\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  
                  <td class=\"col-sm-4 top\">";
        // line 45
        if ((($context["sort"] ?? null) == "name")) {
            // line 46
            echo "                    <a  class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">Delievery countries</a>
                    ";
        } else {
            // line 48
            echo "                    <a >";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    <";
        }
        // line 49
        echo "</td>
\t\t\t\t\t     <td class=\"col-sm-2 top\">";
        // line 50
        if ((($context["sort"] ?? null) == "fee")) {
            // line 51
            echo "                    <a  class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">Shipping fee</a>
                    ";
        } else {
            // line 53
            echo "                    <a >Shipping fee</a>
                    ";
        }
        // line 54
        echo "</td>
                  <td class=\"col-sm-2 top\">";
        // line 55
        if ((($context["sort"] ?? null) == "iso_code_2")) {
            // line 56
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_2"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_iso_code_2"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 58
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_2"] ?? null);
            echo "\">";
            echo ($context["column_iso_code_2"] ?? null);
            echo "</a>
                    ";
        }
        // line 59
        echo "</td>
                  <td class=\"col-sm-2 top\">";
        // line 60
        if ((($context["sort"] ?? null) == "iso_code_3")) {
            // line 61
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_3"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_iso_code_3"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 63
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_3"] ?? null);
            echo "\">";
            echo ($context["column_iso_code_3"] ?? null);
            echo "</a>
                    ";
        }
        // line 64
        echo "</td>
                  <td class=\"col-sm-2 top\">";
        // line 65
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 69
        if (($context["countries"] ?? null)) {
            // line 70
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 71
                echo "                <tr>
                  
                  <td class=\"text-left\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 73);
                echo "</td>
\t\t\t\t    <td class=\"text-left\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["country"], "fee", [], "any", false, false, false, 74);
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
            // line 80
            echo "                ";
        } else {
            // line 81
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 82
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 85
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
        // line 162
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
        return array (  311 => 162,  232 => 85,  226 => 82,  223 => 81,  220 => 80,  208 => 74,  204 => 73,  200 => 71,  195 => 70,  193 => 69,  186 => 65,  183 => 64,  175 => 63,  165 => 61,  163 => 60,  160 => 59,  152 => 58,  142 => 56,  140 => 55,  137 => 54,  133 => 53,  127 => 51,  125 => 50,  122 => 49,  116 => 48,  110 => 46,  108 => 45,  99 => 39,  87 => 32,  82 => 30,  76 => 26,  68 => 22,  65 => 21,  57 => 17,  55 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/delievery.twig", "");
    }
}
