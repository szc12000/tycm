<?php
/**
 * @Author: Marte
 * @Date:   2016-12-24 14:59:20
 * @Last Modified by:   Marte
 * @Last Modified time: 2016-12-24 15:03:55
 */
class Ceshi {
    private $name = 'ceshi3';
    public function __construct($name) {
        if (empty($name)) {
            echo '不能用空值初始化ceshi类';
            exit;
        }
        $this->name = $name;
    }

    public function say() {
        echo 'this name is ',$this->name;
    }
}
