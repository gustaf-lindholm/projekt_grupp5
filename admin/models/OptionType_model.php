<?php

class OptionType_model extends Base_model
{

    public function getOptions()
    {
        $this->sql = "SELECT * FROM option_type";

        $this->prepQuery($this->sql);

        $data = $this->getAll();

        return $data;

    }

    public function insertOption()
    {
        $value = $_POST['optiontype']['new'];
        $this->sql = "INSERT INTO option_type (option_name) VALUES (:option_name)";
        $paramBinds = [':option_name' => $value];

        $this->prepQuery($this->sql, $paramBinds) ? $_POST['optiontype']['status'] = 'true' : $_POST['optiontype']['status'] = 'false';

    }

}
