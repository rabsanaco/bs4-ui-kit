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

class AuthPage extends Page
{
    protected $header;

    protected $navigation;

    protected $content;

    protected $footer;

    public function __construct()
    {
        $this->setBodyClasses('');
        $this->setMainClasses('d-flex flex-column u-hero u-hero--end min-vh-100');

        $authContent = new AuthContent();
        $this->setContent($authContent);
        $this->addGraphic($authContent);
    }


    public function setHeader(Header $header)
    {
        $this->header = null;
    }

    public function hasHeader()
    {
        return false;
    }

    public function getHeader()
    {
        return null;
    }

    public function setContent(Content $content)
    {
        $this->content = $content;
    }

    public function hasContent()
    {
        return !empty($this->getContent());
    }

    public function getContent(){
        return $this->content;
    }

    public function setFooter(Footer $footer)
    {
        $footer->setTransparent(true);
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
        $this->navigation = null;
    }

    public function hasNavigation()
    {
        return false;
    }

    public function getNavigation(){
        return null;
    }

    public function draw()
    {
        $this->addGraphic($this->footer);

        return parent::draw();
    }
}
