<?php

//$this->add_plugin($name,$close,$compile,$st_arg);
$this->add_plugin('echo', 0, 0, 0);
$this->add_plugin('foreach', 1, 1, 1);
$this->add_plugin('for', 1, 1, 1);
$this->add_plugin('cache', 1, 1, 1);
$this->add_plugin('php', 1, 0, 0);
$this->add_plugin('set', 0, 0, 0);
$this->add_plugin('if', 1, 1, 0);
$this->add_plugin('else', 0, 0, 0);
$this->add_plugin('navigation', 0, 0, 1);
$this->add_plugin('nowarp', 1, 1, 0);
$this->add_plugin('save', 1, 0, 0);

$this->add_plugin('include', 0, 0, 0);
$this->add_plugin('include_control', 0, 0, 0);
$this->add_plugin('input', 0, 0, 1);

$this->add_plugin('box', 1, 1, 0);
$this->add_plugin('block', 0, 0, 0);
$this->add_plugin('execute', 0, 0, 1);
$this->add_plugin('control', 0, 0, 0);

$this->add_plugin('comment', 0, 0, 0);

$this->add_plugin('url', 0, 0, 1);

$this->add_plugin('switch', 1, 1, 0);
$this->add_plugin('case', 0, 0, 0);
