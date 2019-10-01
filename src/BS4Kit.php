<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:35
 */

namespace Rabsanaco\BS4UiKit;


use Rabsanaco\BS4UiKit\Widgets\Alert;
use Rabsanaco\BS4UiKit\Widgets\Page;
use Rabsanaco\Contracts\UI\Kit;

class BS4Kit implements Kit
{

    public function createHeader()
    {
        // TODO: Implement createHeader() method.

    }

    public function createContent()
    {
        // TODO: Implement createContent() method.
    }

    public function createPage()
    {
        return new Page();
    }

    public function createFooter()
    {
        // TODO: Implement createFooter() method.
    }

    public function createSidebar()
    {
        // TODO: Implement createSidebar() method.
    }

    public function createButton()
    {
        // TODO: Implement createButton() method.
    }

    public function createLink()
    {
        // TODO: Implement createLink() method.
    }

    public function createAlert()
    {
        return new Alert();
    }

    public function createTable()
    {
        // TODO: Implement createTable() method.
    }

    public function createForm()
    {
        // TODO: Implement createForm() method.
    }
}
