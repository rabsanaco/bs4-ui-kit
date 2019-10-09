<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;

class Text extends \Rabsanaco\Contracts\UI\Widgets\Text{
    public function draw()
    {
        $drawer = $this;
        return view('rabsanaco-bs4-ui-kit::text', compact('drawer'));
    }
}
