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

/* customer/custom_field_form.twig */
class __TwigTemplate_465af99b63676f9fdcc82569ba4f46756b4f010a9958195e063127184fce2548 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-custom-field\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\"> ";
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-custom-field\" class=\"form-horizontal\">
                      <fieldset>
              <legend>";
        // line 28
        echo ($context["text_custom_field"] ?? null);
        echo "</legend>
          
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 31
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 33
            echo "              <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 33);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 33);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 33);
            echo "\" /></span>
                <input type=\"text\" name=\"custom_field_description[";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["custom_field_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["custom_field_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34)] ?? null) : null), "name", [], "any", false, false, false, 34)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />
              </div>
              ";
            // line 36
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36)] ?? null) : null)) {
                // line 37
                echo "              <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 37)] ?? null) : null);
                echo "</div>
              ";
            }
            // line 39
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 43
        echo ($context["entry_location"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"location\" id=\"input-location\" class=\"form-control\">
                
                

                ";
        // line 49
        if ((($context["location"] ?? null) == "account")) {
            // line 50
            echo "
                
                
                <option value=\"account\" selected=\"selected\">";
            // line 53
            echo ($context["text_account"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 58
            echo "
                
                
                <option value=\"account\">";
            // line 61
            echo ($context["text_account"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 66
        echo "                ";
        if ((($context["location"] ?? null) == "address")) {
            // line 67
            echo "
                
                
                <option value=\"address\" selected=\"selected\">";
            // line 70
            echo ($context["text_address"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 75
            echo "
                
                
                <option value=\"address\">";
            // line 78
            echo ($context["text_address"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 83
        echo "

                ";
        // line 85
        if ((($context["location"] ?? null) == "affiliate")) {
            // line 86
            echo "
                
                
                <option value=\"affiliate\" selected=\"selected\">";
            // line 89
            echo ($context["text_affiliate"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 94
            echo "
                
                
                <option value=\"affiliate\">";
            // line 97
            echo ($context["text_affiliate"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 102
        echo "

              
              
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 110
        echo ($context["entry_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"type\" id=\"input-type\" class=\"form-control\">
                <optgroup label=\"";
        // line 113
        echo ($context["text_choose"] ?? null);
        echo "\">
                ";
        // line 114
        if ((($context["type"] ?? null) == "select")) {
            // line 115
            echo "
                
                
                <option value=\"select\" selected=\"selected\">";
            // line 118
            echo ($context["text_select"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 123
            echo "
                
                
                <option value=\"select\">";
            // line 126
            echo ($context["text_select"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 131
        echo "                ";
        if ((($context["type"] ?? null) == "radio")) {
            // line 132
            echo "
                
                
                <option value=\"radio\" selected=\"selected\">";
            // line 135
            echo ($context["text_radio"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 140
            echo "
                
                
                <option value=\"radio\">";
            // line 143
            echo ($context["text_radio"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 148
        echo "                ";
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 149
            echo "
                
                
                <option value=\"checkbox\" selected=\"selected\">";
            // line 152
            echo ($context["text_checkbox"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 157
            echo "
                
                
                <option value=\"checkbox\">";
            // line 160
            echo ($context["text_checkbox"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 165
        echo "                </optgroup>
                <optgroup label=\"";
        // line 166
        echo ($context["text_input"] ?? null);
        echo "\">
                ";
        // line 167
        if ((($context["type"] ?? null) == "text")) {
            // line 168
            echo "
                
                
                <option value=\"text\" selected=\"selected\">";
            // line 171
            echo ($context["text_text"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 176
            echo "
                
                
                <option value=\"text\">";
            // line 179
            echo ($context["text_text"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 184
        echo "                ";
        if ((($context["type"] ?? null) == "textarea")) {
            // line 185
            echo "
                
                
                <option value=\"textarea\" selected=\"selected\">";
            // line 188
            echo ($context["text_textarea"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 193
            echo "
                
                
                <option value=\"textarea\">";
            // line 196
            echo ($context["text_textarea"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 201
        echo "                </optgroup>
                <optgroup label=\"";
        // line 202
        echo ($context["text_file"] ?? null);
        echo "\">
                ";
        // line 203
        if ((($context["type"] ?? null) == "file")) {
            // line 204
            echo "
                
                
                <option value=\"file\" selected=\"selected\">";
            // line 207
            echo ($context["text_file"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 212
            echo "
                
                
                <option value=\"file\">";
            // line 215
            echo ($context["text_file"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 220
        echo "                </optgroup>
                <optgroup label=\"";
        // line 221
        echo ($context["text_date"] ?? null);
        echo "\">
                ";
        // line 222
        if ((($context["type"] ?? null) == "date")) {
            // line 223
            echo "
                
                
                <option value=\"date\" selected=\"selected\">";
            // line 226
            echo ($context["text_date"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 231
            echo "
                
                
                <option value=\"date\">";
            // line 234
            echo ($context["text_date"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 239
        echo "                ";
        if ((($context["type"] ?? null) == "time")) {
            // line 240
            echo "
                
                
                <option value=\"time\" selected=\"selected\">";
            // line 243
            echo ($context["text_time"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 248
            echo "
                
                
                <option value=\"time\">";
            // line 251
            echo ($context["text_time"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 256
        echo "                ";
        if ((($context["type"] ?? null) == "datetime")) {
            // line 257
            echo "
                
                
                <option value=\"datetime\" selected=\"selected\">";
            // line 260
            echo ($context["text_datetime"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 265
            echo "
                
                
                <option value=\"datetime\">";
            // line 268
            echo ($context["text_datetime"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 273
        echo "                </optgroup>
              </select>
            </div>
          </div>
          <div class=\"form-group\" id=\"display-value\">
            <label class=\"col-sm-2 control-label\" for=\"input-value\">";
        // line 278
        echo ($context["entry_value"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"";
        // line 280
        echo ($context["value"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\" id=\"display-validation\">
            <label class=\"col-sm-2 control-label\" for=\"input-validation\"><span data-toggle=\"tooltip\" title=\"";
        // line 284
        echo ($context["help_regex"] ?? null);
        echo "\">";
        echo ($context["entry_validation"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"validation\" id=\"input-validation\" value=\"";
        // line 286
        echo ($context["validation"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_regex"] ?? null);
        echo "\"  class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 290
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 291
        $context["customer_group_row"] = 0;
        // line 292
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 293
            echo "              <div class=\"checkbox\">
                <label> ";
            // line 294
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 294), ($context["custom_field_customer_group"] ?? null))) {
                // line 295
                echo "                  <input type=\"checkbox\" name=\"custom_field_customer_group[";
                echo ($context["customer_group_row"] ?? null);
                echo "][customer_group_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 295);
                echo "\" checked=\"checked\" />
                  ";
                // line 296
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 296);
                echo "
                  ";
            } else {
                // line 298
                echo "                  <input type=\"checkbox\" name=\"custom_field_customer_group[";
                echo ($context["customer_group_row"] ?? null);
                echo "][customer_group_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 298);
                echo "\" />
                  ";
                // line 299
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 299);
                echo "
                  ";
            }
            // line 300
            echo " </label>
              </div>
              ";
            // line 302
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 303
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 306
        echo ($context["entry_required"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 307
        $context["customer_group_row"] = 0;
        // line 308
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 309
            echo "              <div class=\"checkbox\">
                <label> ";
            // line 310
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 310), ($context["custom_field_required"] ?? null))) {
                // line 311
                echo "                  <input type=\"checkbox\" name=\"custom_field_customer_group[";
                echo ($context["customer_group_row"] ?? null);
                echo "][required]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 311);
                echo "\" checked=\"checked\" />
                  ";
                // line 312
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 312);
                echo "
                  ";
            } else {
                // line 314
                echo "                  <input type=\"checkbox\" name=\"custom_field_customer_group[";
                echo ($context["customer_group_row"] ?? null);
                echo "][required]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 314);
                echo "\" />
                  ";
                // line 315
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 315);
                echo "
                  ";
            }
            // line 316
            echo "</label>
              </div>
              ";
            // line 318
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 319
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 322
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                
                

                ";
        // line 328
        if (($context["status"] ?? null)) {
            // line 329
            echo "
                
                
                <option value=\"1\" selected=\"selected\">";
            // line 332
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 333
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                

                ";
        } else {
            // line 338
            echo "
                
                
                <option value=\"1\">";
            // line 341
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 342
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                

                ";
        }
        // line 347
        echo "
              
              
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\"><span data-toggle=\"tooltip\" title=\"";
        // line 354
        echo ($context["help_sort_order"] ?? null);
        echo "\">";
        echo ($context["entry_sort_order"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"";
        // line 356
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
          </fieldset>
          <br />
          <div id=\"custom-field-value\">
            <fieldset>
              <legend>";
        // line 363
        echo ($context["text_value"] ?? null);
        echo "</legend>
              <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-left required\">";
        // line 367
        echo ($context["entry_custom_value"] ?? null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 368
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 374
        $context["custom_field_value_row"] = 0;
        // line 375
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_field_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 376
            echo "                <tr id=\"custom-field-value-row";
            echo ($context["custom_field_value_row"] ?? null);
            echo "\">
                  <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[";
            // line 377
            echo ($context["custom_field_value_row"] ?? null);
            echo "][custom_field_value_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 377);
            echo "\" />
                    ";
            // line 378
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 379
                echo "                    <div class=\"input-group\"> <span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 379);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 379);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 379);
                echo "\" /></span>
                      <input type=\"text\" name=\"custom_field_value[";
                // line 380
                echo ($context["custom_field_value_row"] ?? null);
                echo "][custom_field_value_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 380);
                echo "][name]\" value=\"";
                echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_description", [], "any", false, false, false, 380)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 380)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_description", [], "any", false, false, false, 380)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 380)] ?? null) : null), "name", [], "any", false, false, false, 380)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_custom_value"] ?? null);
                echo "\" class=\"form-control\" />
                    </div>
                    ";
                // line 382
                if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field_value"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["custom_field_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 382)] ?? null) : null)) {
                    // line 383
                    echo "                    <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_custom_field_value"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["custom_field_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 383)] ?? null) : null);
                    echo "</div>
                    ";
                }
                // line 385
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                  <td class=\"text-right\"><input type=\"text\" name=\"custom_field_value[";
            // line 386
            echo ($context["custom_field_value_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "sort_order", [], "any", false, false, false, 386);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button onclick=\"\$('#custom-field-value-row";
            // line 387
            echo ($context["custom_field_value_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 389
            $context["custom_field_value_row"] = (($context["custom_field_value_row"] ?? null) + 1);
            // line 390
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 391
        echo "                  </tbody>
                
                <tfoot>
                  <tr>
                    <td colspan=\"2\"></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"addCustomFieldValue();\" data-toggle=\"tooltip\" title=\"";
        // line 396
        echo ($context["button_custom_field_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                  </tr>
                </tfoot>
              </table>
            </fieldset>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'type\\']').on('change', function() {
\tif (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox') {
\t\t\$('#custom-field-value').show();
\t\t\$('#display-value, #display-validation').hide();
\t} else {
\t\t\$('#custom-field-value').hide();
\t\t\$('#display-value, #display-validation').show();
\t}

\tif (this.value == 'date') {
\t\t\$('#display-value > div').html('<div class=\"input-group date\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 417
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
\t} else if (this.value == 'time') {
\t\t\$('#display-value > div').html('<div class=\"input-group time\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 419
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
\t} else if (this.value == 'datetime') {
\t\t\$('#display-value > div').html('<div class=\"input-group datetime\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 421
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
\t} else if (this.value == 'textarea') {
\t\t\$('#display-value > div').html('<textarea name=\"value\" placeholder=\"";
        // line 423
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\">' + \$('#input-value').val() + '</textarea>');
\t} else {
\t\t\$('#display-value > div').html('<input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 425
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\" />');
\t}

\t\$('.date').datetimepicker({
\t\tlanguage: '";
        // line 429
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickTime: false
\t});

\t\$('.time').datetimepicker({
\t\tlanguage: '";
        // line 434
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: false
\t});

\t\$('.datetime').datetimepicker({
\t\tlanguage: '";
        // line 439
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: true,
\t\tpickTime: true
\t});
});

\$('select[name=\\'type\\']').trigger('change');

var custom_field_value_row = ";
        // line 447
        echo ($context["custom_field_value_row"] ?? null);
        echo ";

function addCustomFieldValue() {
\thtml  = '<tr id=\"custom-field-value-row' + custom_field_value_row + '\">';
    html += '  <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_id]\" value=\"\" />';
\t";
        // line 452
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 453
            echo "\thtml += '    <div class=\"input-group\">';
\thtml += '      <span class=\"input-group-addon\"><img src=\"language/";
            // line 454
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 454);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 454);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 454);
            echo "\" /></span><input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 454);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_custom_value"] ?? null);
            echo "\" class=\"form-control\" />';
    html += '    </div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 457
        echo "\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 458
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#custom-field-value-row' + custom_field_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 459
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#custom-field-value tbody').append(html);

\tcustom_field_value_row++;
}
//--></script></div>
";
        // line 467
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "customer/custom_field_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1011 => 467,  1000 => 459,  996 => 458,  993 => 457,  976 => 454,  973 => 453,  969 => 452,  961 => 447,  950 => 439,  942 => 434,  934 => 429,  927 => 425,  922 => 423,  917 => 421,  912 => 419,  907 => 417,  883 => 396,  876 => 391,  870 => 390,  868 => 389,  861 => 387,  853 => 386,  845 => 385,  839 => 383,  837 => 382,  826 => 380,  817 => 379,  813 => 378,  807 => 377,  802 => 376,  797 => 375,  795 => 374,  786 => 368,  782 => 367,  775 => 363,  763 => 356,  756 => 354,  747 => 347,  739 => 342,  735 => 341,  730 => 338,  722 => 333,  718 => 332,  713 => 329,  711 => 328,  702 => 322,  692 => 319,  690 => 318,  686 => 316,  681 => 315,  674 => 314,  669 => 312,  662 => 311,  660 => 310,  657 => 309,  652 => 308,  650 => 307,  646 => 306,  636 => 303,  634 => 302,  630 => 300,  625 => 299,  618 => 298,  613 => 296,  606 => 295,  604 => 294,  601 => 293,  596 => 292,  594 => 291,  590 => 290,  581 => 286,  574 => 284,  565 => 280,  560 => 278,  553 => 273,  545 => 268,  540 => 265,  532 => 260,  527 => 257,  524 => 256,  516 => 251,  511 => 248,  503 => 243,  498 => 240,  495 => 239,  487 => 234,  482 => 231,  474 => 226,  469 => 223,  467 => 222,  463 => 221,  460 => 220,  452 => 215,  447 => 212,  439 => 207,  434 => 204,  432 => 203,  428 => 202,  425 => 201,  417 => 196,  412 => 193,  404 => 188,  399 => 185,  396 => 184,  388 => 179,  383 => 176,  375 => 171,  370 => 168,  368 => 167,  364 => 166,  361 => 165,  353 => 160,  348 => 157,  340 => 152,  335 => 149,  332 => 148,  324 => 143,  319 => 140,  311 => 135,  306 => 132,  303 => 131,  295 => 126,  290 => 123,  282 => 118,  277 => 115,  275 => 114,  271 => 113,  265 => 110,  255 => 102,  247 => 97,  242 => 94,  234 => 89,  229 => 86,  227 => 85,  223 => 83,  215 => 78,  210 => 75,  202 => 70,  197 => 67,  194 => 66,  186 => 61,  181 => 58,  173 => 53,  168 => 50,  166 => 49,  157 => 43,  152 => 40,  146 => 39,  140 => 37,  138 => 36,  129 => 34,  120 => 33,  116 => 32,  112 => 31,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/custom_field_form.twig", "");
    }
}
