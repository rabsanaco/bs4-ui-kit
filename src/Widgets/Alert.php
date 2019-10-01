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

    public function add(\Rabsanaco\Contracts\UI\Widgets\Graphic $widget)
    {
        // TODO: Implement add() method.
    }

    public function remove(\Rabsanaco\Contracts\UI\Widgets\Graphic $widget)
    {
        // TODO: Implement remove() method.
    }

    public function draw()
    {
        return view('rabsanaco-bs4-ui-kit::alert');
    }
}
