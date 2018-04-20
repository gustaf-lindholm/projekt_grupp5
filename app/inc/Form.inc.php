<?php

class Form
{
    private $output = [];

    public function textInput($name, $pholder="", $lable, $inputClass = "form-control", $value="")
    {
        $label = "<lable for='$name'>$lable</lable>";
        $input = "<input class='$inputClass' type='text' name='$name' value='$value' placeholder='$pholder'>";
        $element = $label . $input;
        $this->output[] = $element;
    }

    public function textAreaInput($name, $pholder="", $lable, $inputClass = "form-control", $value="")
    {
        $label = "<lable for='$name'>$lable</lable>";
        $input = "<textarea class='$inputClass' name='$name' value='$value'>$pholder</textarea>";
        $element = $label . $input;
        $this->output[] = $element;
    }
    
    public function numInput($name, $pholder="", $lable)
    {
        $label = "<lable for='$name'>$lable</lable>";
        $input = "<input type='number' name='$name' placeholder='$pholder'>";
        $element = $label . $input;
        $this->output .= $element;
    }

    public function emailInput($name, $pholder="", $lable)
    {
        $label = "<lable for='$name'>$lable</lable>";
        $input = "<input type='email' name='$name' placeholder='$pholder'>";
        $element = $label . $input;
        $this->output .= $element;
    }

    public function button($value, $type ="submit", $class="btn btn-primary")
    {
        $element = "<button type='$type' class='$class'>$value</button>";
        $this->output[] = $element;
    }

    // method to render all the elements in $this->output
    public function render($action, $method = 'POST')
    {
        echo "<form action='$action' method='$method'>";

        // loop to add each input element between div with bootstrap form-group class
        // skips button elements
        foreach ($this->output as $key => $value) {
            
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