<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;
use Rabsanaco\Contracts\UI\Widgets\Decorator as BaseDecorator;
use Rabsanaco\UIManager\Events\PushScript;

class CkEditor extends BaseDecorator
{
    public function draw()
    {

        $componentId = $this->getComponent()->getId();

        event(new PushScript(view('rabsanaco-bs4-ui-kit::ckeditor', compact('componentId'))));


        return $this->getComponent()->draw();
    }

    public function view(){}
}
