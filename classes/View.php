<?php

class View
{
    /**
     * @var array
     * хранит имена и их данные для передачи в шаблон
     */
    protected $data = [];

    /**
     * @param $name
     * @param $value
     * сохраняет данные $value, передаваемые в шаблон по заданному имени $name
     */
    public function assign($name, $value) {
        $this->data[$name] = $value;
    }

    /**
     * @param $template
     * отображает указанный шаблон $template с заранее сохраненными данными
     */
    public function display($template) {
        include $template;
    }

    /**
     * @param $template
     * @return false|string
     * возвращает шаблон с данными
     */
    public function render($template) {
        ob_start();
        include $template;
        $out = ob_get_contents();
        ob_end_clean();

        return $out;
    }

}