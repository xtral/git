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
class __TwigTemplate_b12052515c89271b97c69b7cf01ffb50bcb6cb96ed9183a95c674e60f9a0b89e extends \Twig\Template
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
\t\t<div class=\"col-sm-12\">
\t\t<div class=\"col-sm-4\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 31
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 32
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t</div>
      </div></div>
\t  
     
        <form  action=\"";
        // line 45
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-country\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  
                  <td class=\"col-sm-4 top\">";
        // line 51
        if ((($context["sort"] ?? null) == "name")) {
            // line 52
            echo "                    <a  class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">Delievery countries</a>
                    ";
        } else {
            // line 54
            echo "                    <a >";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    <";
        }
        // line 55
        echo "</td>
\t\t\t\t\t     <td class=\"col-sm-2 top\">";
        // line 56
        if ((($context["sort"] ?? null) == "fee")) {
            // line 57
            echo "                    <a  class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">Shipping fee</a>
                    ";
        } else {
            // line 59
            echo "                    <a >Shipping fee</a>
                    ";
        }
        // line 60
        echo "</td>
                  <td class=\"col-sm-2 top\">";
        // line 61
        if ((($context["sort"] ?? null) == "iso_code_2")) {
            // line 62
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_2"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_iso_code_2"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 64
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_2"] ?? null);
            echo "\">";
            echo ($context["column_iso_code_2"] ?? null);
            echo "</a>
                    ";
        }
        // line 65
        echo "</td>
                  <td class=\"col-sm-2 top\">";
        // line 66
        if ((($context["sort"] ?? null) == "iso_code_3")) {
            // line 67
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_3"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_iso_code_3"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 69
            echo "                    <a href=\"";
            echo ($context["sort_iso_code_3"] ?? null);
            echo "\">";
            echo ($context["column_iso_code_3"] ?? null);
            echo "</a>
                    ";
        }
        // line 70
        echo "</td>
                  <td class=\"col-sm-2 top\">";
        // line 71
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 75
        if (($context["countries"] ?? null)) {
            // line 76
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 77
                echo "                <tr>
                  
                  <td class=\"text-left\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 79);
                echo "</td>
\t\t\t\t    <td class=\"text-left\">";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["country"], "fee", [], "any", false, false, false, 80);
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
            // line 86
            echo "                ";
        } else {
            // line 87
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 88
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 91
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
        // line 168
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
        return array (  317 => 168,  238 => 91,  232 => 88,  229 => 87,  226 => 86,  214 => 80,  210 => 79,  206 => 77,  201 => 76,  199 => 75,  192 => 71,  189 => 70,  181 => 69,  171 => 67,  169 => 66,  166 => 65,  158 => 64,  148 => 62,  146 => 61,  143 => 60,  139 => 59,  133 => 57,  131 => 56,  128 => 55,  122 => 54,  116 => 52,  114 => 51,  105 => 45,  87 => 32,  83 => 31,  76 => 26,  68 => 22,  65 => 21,  57 => 17,  55 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/delievery.twig", "");
    }
}
