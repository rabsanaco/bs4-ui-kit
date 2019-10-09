<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;

class NavigationItem extends \Rabsanaco\Contracts\UI\Widgets\NavigationItem
{
    public function draw()
    {
        $drawer = $this;

        return view('rabsanaco-bs4-ui-kit::navigation-item', compact('drawer'));
    }
}
