<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:43
 */
namespace Rabsanaco\BS4UiKit\Widgets;
use Rabsanaco\Contracts\UI\Widgets\Form as BaseForm;

class ExchangeForm extends BaseForm
{
    protected $form;

    protected $products;

    protected $gateways;

    protected $defaultBuyProduct;

    protected $defaultSellProduct;

    protected $user;

    /**
     * ExchangeForm constructor.
     */
    public function __construct($action)
    {
        parent::setAction($action);


    }

    public function view(){
        return 'rabsanaco-bs4-ui-kit::exchange-'.$this->getForm();
    }

    /**
     * @return mixed
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * @param mixed $form
     */
    public function setForm($form): void
    {
        $this->form = $form;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     */
    public function setProducts($products): void
    {
        $this->products = $products;
    }

    /**
     * @return mixed
     */
    public function getGateways()
    {
        return $this->gateways;
    }

    /**
     * @param mixed $gateways
     */
    public function setGateways($gateways): void
    {
        $this->gateways = $gateways;
    }

    /**
     * @return mixed
     */
    public function getDefaultBuyProduct()
    {
        return $this->defaultBuyProduct;
    }

    /**
     * @param mixed $defaultBuyProduct
     */
    public function setDefaultBuyProduct($defaultBuyProduct): void
    {
        $this->defaultBuyProduct = $defaultBuyProduct;
    }

    /**
     * @return mixed
     */
    public function getDefaultSellProduct()
    {
        return $this->defaultSellProduct;
    }

    /**
     * @param mixed $defaultSellProduct
     */
    public function setDefaultSellProduct($defaultSellProduct): void
    {
        $this->defaultSellProduct = $defaultSellProduct;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }


}
