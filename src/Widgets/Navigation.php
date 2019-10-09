<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 17:02
 */

namespace Rabsanaco\BS4UiKit\Widgets;


use Rabsanaco\Contracts\UI\Widgets\Graphic;

class Navigation extends \Rabsanaco\Contracts\UI\Widgets\Navigation
{
    public function draw()
    {
        $drawer = $this;

        return view('rabsanaco-bs4-ui-kit::navigation', compact('drawer'));
    }
}
