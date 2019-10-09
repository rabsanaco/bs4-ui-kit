<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;

class Alert extends \Rabsanaco\Contracts\UI\Widgets\Alert
{
    public function draw()
    {
        return view('rabsanaco-bs4-ui-kit::alert');
    }
}
