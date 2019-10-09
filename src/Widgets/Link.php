<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;

class Link extends \Rabsanaco\Contracts\UI\Widgets\Link
{
    public function draw()
    {
        $drawer = $this;

        return view('rabsanaco-bs4-ui-kit::link', compact('drawer'));
    }
}
