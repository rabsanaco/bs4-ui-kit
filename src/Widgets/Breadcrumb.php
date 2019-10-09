<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;

class Breadcrumb extends \Rabsanaco\Contracts\UI\Widgets\Breadcrumb
{
    public function draw()
    {
        $drawer = $this;

        return view('rabsanaco-bs4-ui-kit::breadcrumb', compact('drawer'));
    }
}
