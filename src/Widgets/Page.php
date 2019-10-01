<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 16:10
 */

namespace Rabsanaco\BS4UiKit\Widgets;


use Rabsanaco\Contracts\UI\Widgets\Content;
use Rabsanaco\Contracts\UI\Widgets\Footer;
use Rabsanaco\Contracts\UI\Widgets\Graphic;
use Rabsanaco\Contracts\UI\Widgets\Header;
use Rabsanaco\Contracts\UI\Widgets\Sidebar;

class Page extends \Rabsanaco\Contracts\UI\Widgets\Page
{
    protected $header;

    protected $sidebar;

    protected $content;

    protected $footer;

    public function add(Graphic $graphic){

    }

    public function addHeader(Header $header)
    {
        $this->header = $header;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function addContent(Content $content)
    {
        $this->content = $content;
    }

    public function getContent(){
        return $this->content;
    }

    public function addFooter(Footer $footer)
    {
        // TODO: Implement addFooter() method.
    }

    public function getFooter(){
        return $this->footer;
    }

    public function addSidebar(Sidebar $sidebar)
    {
        // TODO: Implement addSidebar() method.
    }

    public function getSidebar(){
        return $this->sidebar;
    }

    public function remove(Graphic $widget)
    {
        // TODO: Implement remove() method.
    }

    public function draw()
    {
        $drawer = $this;

        return view('rabsanaco-bs4-ui-kit::page', compact('drawer'));
    }
}
