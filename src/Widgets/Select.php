<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;
use Rabsanaco\Contracts\UI\Widgets\Select as BaseInput;

class Select extends BaseInput
{
    public function draw()
    {
        $drawer = $this;

        return view('rabsanaco-bs4-ui-kit::select', compact('drawer'));
    }
}
