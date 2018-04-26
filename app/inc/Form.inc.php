<?php

class Form
{
    private $output = [];

    public function textInput($name, $pholder="", $label, $inputClass = "form-control", $value="")
    {
        $labelTag = "<label for='$name'>$label</label>";
        $input = "<input class='$inputClass' type='text' name='$name' value='$value' placeholder='$pholder'>";
        $element = $labelTag . $input;
        $this->output[] = $element;
    }

    public function textAreaInput($name, $pholder="", $label, $inputClass = "form-control")
    {
        $labelTag = "<label for='$name'>$label</label>";
        $input = "<textarea class='$inputClass' name='$name' placeholder='$pholder'></textarea>";
        $element = $labelTag . $input;
        $this->output[] = $element;
    }

    /*  valueindex is the associative array index names that you want to apply in the html tag
    /*  valueindex[0] is the value of the option (id or name)
    /*  valueindex[1] is the value you want to print out in the select options
    /*  example in admin OptionType view
    **/ 
    public function select($name, $label, $form, $data, $valueindex = [], $inputclass = 'form-control')
    {
        $labelTag = "<label for='$name'>$label</label>";
        $select = "<select class='$inputclass' name='$name' form='$form'>";
        $element = $labelTag . $select;
        
        foreach ($data as $key => $value) {
            $element .= "<option value=". $value[$valueindex[0]] .'>'. $value[$valueindex[1]]."</option>";
            
        }       
        $this->output[] = $element.'</select>';
    }
    
    public function numInput($name, $pholder="", $label, $inputClass = "form-control", $value="")
    {
        $labelTag = "<label for='$name'>$label</label>";
        $input = "<input class='$inputClass' type='number' name='$name' placeholder='$pholder'>";
        $element = $labelTag . $input;
        $this->output[] = $element;
    }

    public function emailInput($name, $pholder="", $label)
    {
        $labelTag = "<label for='$name'>$label</label>";
        $input = "<input type='email' name='$name' placeholder='$pholder'>";
        $element = $labelTag . $input;
        $this->output[] = $element;
    }

    public function button($value, $type ="submit", $class="btn btn-primary")
    {
        $element = "<button type='$type' class='$class'>$value</button>";
        $this->output[] = $element;
    }

    // method to render all the elements in $this->output
    public function render($action,  $legend, $class, $id = "", $method = 'POST')
    {
        echo "<form class='$class' id='$id' action='$action' method='$method'>";
        echo "<legend>$legend</legend>";
        // loop to add each input element between div with bootstrap form-group class
        // skips button elements
        foreach ($this->output as $key => $value) {
            

            // mindfuck: ologiskt att den skippar button-elementet när substr_compare gäller
            // http://php.net/manual/en/function.substr-compare.php
            if(substr_compare($value, '<button', 0, 6)){
            $this->output[$key] = '<div class="form-group">'.$value.'</div>';
            }

        }
        // create a string with html
        $this->output = implode("", $this->output);

        echo $this->output;
        echo "</form>";
    }
}