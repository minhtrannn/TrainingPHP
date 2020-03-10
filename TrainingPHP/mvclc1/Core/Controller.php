<?php
    namespace MVC\Core;
    class Controller
    {
        var $vars = [];
        var $layout = "default";

        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);
        }

        function render($filename)
        {
            extract($this->vars);
            ob_start();
            require(ROOT . "Views/Tasks/" . $filename . '.php');
            $content_for_layout = ob_get_clean();

            if ($this->layout == false)
            {
                $content_for_layout;
            }
            else
            {
                require("../Views/Layouts/default.php");
            }
        }

        // private function secure_input($data)
        // {
        //     $data = trim($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        // }

        // protected function secure_form($form)
        // {
        //     print_r($form);
        //     foreach ($form as $key => $value)
        //     {
        //         $form[$key] = $this->secure_input($value);
        //     }
        // }

    }
?>