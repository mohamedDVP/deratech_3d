<?php

class FormContact{

    public function text($name, $label){
        return "<label class=\"form-label\" for=\"form4Example1\" style=\"margin-left: 0px;\" required>Nom</label>
                    <input type=\"text\" id=\"form4Example1\" class=\"form-control\" name=\"nom\" value=\"\">
                    <div class=\"form-notch\">
                        <div class=\"form-notch-leading\" style=\"width: 9px;\">
                        </div>
                        <div class=\"form-notch-middle\" style=\"width: 42.4px;\">
                        </div>
                        <div class=\"form-notch-trailing\">
                        </div>
                    </div>";
    }
}