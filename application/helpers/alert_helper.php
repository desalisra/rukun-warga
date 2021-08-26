<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function alert($color,$message) {
  return "<div class='alert alert-block alert-$color'>
            <button type='button' class='close' data-dismiss='alert'>
              <i class='ace-icon fa fa-times'></i>
            </button>
            $message
          </div>";
}   