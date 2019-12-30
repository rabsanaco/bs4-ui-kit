<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;
use Rabsanaco\Contracts\UI\Widgets\Select as BaseInput;
use Rabsanaco\UIManager\Events\PushScript;

class Select extends BaseInput
{
    public function draw()
    {
        // Options are remote
        if(is_string($this->getOptions())){
            $id = $this->getId();
            $url = $this->getOptions();
            event(new PushScript(view('rabsanaco-bs4-ui-kit::select2', compact('id', 'url'))));
        }

        return parent::draw();
    }

    public function view(){
        return 'rabsanaco-bs4-ui-kit::select';
    }
}
