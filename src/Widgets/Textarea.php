<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;
use Rabsanaco\Contracts\UI\Widgets\Textarea as BaseTextarea;

class Textarea extends BaseTextarea
{
    public function draw()
    {
        $drawer = $this;

        return view('rabsanaco-bs4-ui-kit::textarea', compact('drawer'));
    }
}
