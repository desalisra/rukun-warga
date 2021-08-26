<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function is_login($page,$is_login) {
  if($page == "LOGIN"){
    if ($is_login) {redirect('admin');}
  }else{
    if (!$is_login) {redirect('auth');}
  }
}