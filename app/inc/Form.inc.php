<?php

class Form
{
    private $output;

    public function textInput($name, $pholder="", $lable, $inputClass = "form-control", $value="")
    {
        $label = "<lable for='$name'>$lable</lable>";
        $input = "<input class='$inputClass' type='text' name='$name' value='$value' placeholder='$pholder'>";
        $element = $label . $input;
        $this->output .= $element;
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
        $button = "<button type='$type' class='$class'>$value</button>";
        $this->output .= $button;
    }

    public function render($action, $method)
    {
        echo "<form action='$action' method='$method'>";
        echo $this->output;
        echo "</form>";
    }
}