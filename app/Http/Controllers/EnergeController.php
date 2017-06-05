<?php
/**
 * Created by PhpStorm.
 * User: supercjh
 * Date: 2017/5/30
 * Time: 15:38
 */

namespace App\Http\Controllers;


class EnergeController extends Controller
{
    public function index()
    {
        return view('energe.index');
    }

    public function module()
    {
        return view('energe.module');
    }
}