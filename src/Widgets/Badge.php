<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;

class Badge extends \Rabsanaco\Contracts\UI\Widgets\Badge
{
    public function draw()
    {
        $drawer = $this;

        return view('rabsanaco-bs4-ui-kit::badge', compact('drawer'));
    }
}
