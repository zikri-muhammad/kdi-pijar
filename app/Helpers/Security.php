<?php

namespace App\Helpers;

use Session;
use Http;
use GuzzleHttp\Client;

/**
 * Security Helper
 *
 * @package     PIJAR Web App
 * @subpackage  Helpers
 * @category    KDigital's
 * @author      Mohamad Febrian Mosii <febrianaries@gmail.com>
 * 
 * !! Every function must be written in english     !!
 * !! Please read coding standards references below !!
 * @link https://www.laravelbestpractices.com/
 * @link https://codeigniter.com/userguide3/general/styleguide.html
 * !! End !!
 */


class Security
{
    /**
     * Class Constructor
     */

    public function __construct()
    {
    }

    /**
     * Encodes string for use in XML
     *
     * @param       string  $str    Input string
     * @return      string
     */

    public static function validateRole($role) {
        $user = Session::get('users');

        dd($user);

    }
}
