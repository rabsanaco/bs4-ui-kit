<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:35
 */

namespace Rabsanaco\BS4UiKit;


use Rabsanaco\BS4UiKit\Widgets\Alert;
use Rabsanaco\BS4UiKit\Widgets\Badge;
use Rabsanaco\BS4UiKit\Widgets\Br;
use Rabsanaco\BS4UiKit\Widgets\Breadcrumb;
use Rabsanaco\BS4UiKit\Widgets\Button;
use Rabsanaco\BS4UiKit\Widgets\Card;
use Rabsanaco\BS4UiKit\Widgets\Content;
use Rabsanaco\BS4UiKit\Widgets\File;
use Rabsanaco\BS4UiKit\Widgets\Footer;
use Rabsanaco\BS4UiKit\Widgets\Form;
use Rabsanaco\BS4UiKit\Widgets\Graphic;
use Rabsanaco\BS4UiKit\Widgets\Header;
use Rabsanaco\BS4UiKit\Widgets\Input;
use Rabsanaco\BS4UiKit\Widgets\Link;
use Rabsanaco\BS4UiKit\Widgets\Navigation;
use Rabsanaco\BS4UiKit\Widgets\NavigationItem;
use Rabsanaco\BS4UiKit\Widgets\Option;
use Rabsanaco\BS4UiKit\Widgets\Page;
use Rabsanaco\BS4UiKit\Widgets\Pagination;
use Rabsanaco\BS4UiKit\Widgets\Select;
use Rabsanaco\BS4UiKit\Widgets\Table;
use Rabsanaco\BS4UiKit\Widgets\TableData;
use Rabsanaco\BS4UiKit\Widgets\TableRow;
use Rabsanaco\BS4UiKit\Widgets\Text;
use Rabsanaco\BS4UiKit\Widgets\Textarea;
use Rabsanaco\Contracts\UI\Kit;

class BS4Kit implements Kit
{

    public function createHeader()
    {
        return new Header();

    }

    public function createContent()
    {
        return new Content();
    }

    public function createPage()
    {
        return new Page();
    }

    public function createFooter()
    {
        return new Footer();
    }

    public function createNavigation()
    {
        return new Navigation();
    }

    public function createButton($text, $type = 'primary')
    {
        return new Button($text, $type);
    }

    public function createInput($name, $label = '', $title = '', $type = 'text')
    {
        return new Input($name, $label, $title, $type);
    }

    public function createTextarea($name, $label = '', $title = '')
    {
        return new Textarea($name, $label, $title);
    }

    public function createSelect($name, $label, $placeholder, $options = [])
    {
        return new Select($name, $label, $placeholder, $options);
    }

    public function createFile($name, $label)
    {
        return new File($name, $label);
    }


    public function createLink($content, $href, $btnType = null)
    {
        return new Link($content, $href, $btnType);
    }

    public function createBr()
    {
        return new Br();
    }

    public function createOption($title, $href, $icon, $type = 'primary')
    {
        return new Option($title, $href, $icon, $type);
    }

    public function createBadge($content, $type)
    {
        return new Badge($content, $type);
    }

    public function createAlert()
    {
        return new Alert();
    }

    public function createText($content)
    {
        return new Text($content);
    }

    public function createTable($data, $head = [])
    {
        return new Table($data, $head);
    }

    public function createTableRow()
    {
        return new TableRow();
    }

    public function createPagination($paginator){
        return new Pagination($paginator);
    }

    public function createBreadcrumb()
    {
        return new Breadcrumb();
    }


    public function createTableData()
    {
        return new TableData();
    }

    public function createForm($action)
    {
        return new Form($action);
    }

    public function createCard()
    {
        return new Card();
    }

    public function createNavigationItem($title, $link, $icon){
        return new NavigationItem($title, $link, $icon);
    }

    public function createGraphic()
    {
        return new Graphic();
    }


}
