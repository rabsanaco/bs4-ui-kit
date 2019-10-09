<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 16:10
 */

namespace Rabsanaco\BS4UiKit\Widgets;


use Illuminate\Support\Facades\App;
use Rabsanaco\Contracts\UI\Widgets\Content;
use Rabsanaco\Contracts\UI\Widgets\Footer;
use Rabsanaco\Contracts\UI\Widgets\Graphic;
use Rabsanaco\Contracts\UI\Widgets\Header;
use Rabsanaco\Contracts\UI\Widgets\Navigation;
use Rabsanaco\Contracts\UI\Widgets\Page as AbstractPage;

class Page extends AbstractPage
{
    protected $header;

    protected $navigation;

    protected $content;

    protected $footer;



    public function setHeader(Header $header)
    {
        $this->header = $header;
    }

    public function hasHeader()
    {
        return !empty($this->header);
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function setContent(Content $content)
    {
        $this->content = $content;
    }

    public function hasContent()
    {
        return !empty($this->content);
    }

    public function getContent(){
        return $this->content;
    }

    public function setFooter(Footer $footer)
    {
        $this->footer = $footer;
    }

    public function hasFooter()
    {
        return !empty($this->footer);
    }

    public function getFooter(){
        return $this->footer;
    }

    public function setNavigation(Navigation $navigation)
    {
        $this->navigation = $navigation;
    }

    public function hasNavigation()
    {
        return !empty($this->navigation);
    }

    public function getNavigation(){
        return $this->navigation;
    }

    public function draw()
    {
        $drawer = $this;

        return view('rabsanaco-bs4-ui-kit::page', compact('drawer'));
    }


}
