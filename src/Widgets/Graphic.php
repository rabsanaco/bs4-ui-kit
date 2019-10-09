<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;

class Graphic extends \Rabsanaco\Contracts\UI\Widgets\Graphic
{
    public function draw()
    {
        $drawer = $this;

        return view('rabsanaco-bs4-ui-kit::graphic', compact('drawer'));
    }
}
