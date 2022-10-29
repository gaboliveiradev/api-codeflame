<?php

namespace App\Controller;

class WelcomeController extends Controller {

    public static function welcome() {
        parent::render("welcome/welcome");
    }
}