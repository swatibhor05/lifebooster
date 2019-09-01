<?php

namespace App\Http\Controllers;

class FrontendController extends Controller {
	public function career() {
		return view('application.views.career');
	}

	public function login() {
		return view('application.views.login');
	}

	public function register() {
		return view('application.views.register');
	}

	public function children() {
		return view('application.views.children');
	}

	public function health() {
		return view('application.views.health');
	}
	public function relationship() {
		return view('application.views.relationship');
	}
	public function innerjoy() {
		return view('application.views.innerjoy');
	}
	public function home() {
		return view('application.views.home');
	}

}
