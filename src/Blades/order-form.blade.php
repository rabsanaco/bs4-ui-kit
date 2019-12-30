<div class="row">
  <div class="col-xl-8 mb-3 mb-md-5" id="create-order-form-container"></div>
</div>
<script type="text/babel">
    class OrderForm extends React.Component{
        constructor(props){
            super(props);
            this.state = {
                volume: 0.01,
            };
        }
        render() {
            return (
                <div className="card d-print-none">
                    <div className="row">
                        <div className="col-md-6 border-right">
                            <div className="py-3 py-md-4 px-2 mb-3 mb-md-5 mb-xl-0 ml-xl-3">
                                <ul className="nav nav-pills nav-justified nav-pills-v2 font-weight-semi-bold mb-3"
                                    id="buySell-tab" role="tablist">
                                    <li className="nav-item">
                                        <a className="nav-link active"
                                           id="buySell-buy-tab"
                                           data-toggle="pill"
                                           href="#buySell-buy" role="tab"
                                           aria-controls="buySell-buy"
                                           aria-selected="true">{{__('messages.buy')}}</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link"
                                           id="buySell-sell-tab"
                                           data-toggle="pill"
                                           href="#buySell-sell" role="tab"
                                           aria-controls="buySell-sell"
                                           aria-selected="false">{{__('messages.sell')}}</a>
                                    </li>
                                </ul>
                                <div className="tab-content pt-2" id="pills-tabContent">
                                    <div className="tab-pane fade show active"
                                         id="buySell-buy" role="tabpanel"
                                         aria-labelledby="buySell-buy-tab">
                                        <form>
                                            <small className="d-block mb-1">{{__('messages.crypto_currency')}}</small>
                                            <div className="d-flex flex-wrap mb-3">
                                                <select className="js-custom-select"
                                                        data-placeholder="Select coin"
                                                >
                                                  @foreach($drawer->getProducts()->buy()->get() as $product)
                                                    <option value="{{ $product->id }}"
                                                            selected
                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{ $product->imageUrl('image') }}" alt="{{ $product->title }}" width="24" /><span>{{ $product->title }}</span></span>'>{{ $product->title }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                            </div>



                                            <small className="d-block mb-1">{{__('messages.count')}}</small>

                                            <div className="input-group input-group-merge mb-3 mb-md-4">
                                                <input className="form-control form-control-append-icon"
                                                       value={ this.state.volume }
                                                       onChange={(e) => this.setState({volume: e.target.value})}
                                                       type="text"/>
                                                <div className="input-group-append-merge text-muted">ETH</div>
                                            </div>

                                            <div className="row align-items-center justify-content-between mb-1">
                                                <div className="col">
                                                    <small>{{__('messages.payment_method')}}
                                                    </small>
                                                </div>

                                                <div className="col text-{{Loc::isRtl() ? 'left' : 'right'}} small text-muted">
                                                    <a className="link-muted"
                                                       href="#">{{__('messages.view_limits')}}</a>
                                                </div>
                                            </div>

                                            <div className="d-flex flex-wrap mb-3 mb-md-4">
                                                <select className="js-custom-select"
                                                        data-placeholder="Select wallet"
                                                >
                                                    <option value=" درگاه بانکی"
                                                            selected
                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/svg/companies-logos/maestro.svg')}}" alt="Image description" width="24" /><span> درگاه بانکی</span></span>'>
                                                        درگاه بانکی
                                                    </option>
                                                    <option value="پرداخت از کیف پول(موجودی: 12,430,000 تومان)"

                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/img/icons/visa.png')}}" alt="Image description" width="24" /><span> پرداخت از کیف پول(موجودی: 12,430,000 تومان)</span></span>'>
                                                        پرداخت از کیف پول(موجودی: 12,430,000 تومان)
                                                    </option>

                                                    <option value="واریز به حساب(کارت به کارت)"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/img/icons/visa.png')}}" alt="Image description" width="24" /><span>واریز به حساب(کارت به کارت)</span></span>'>
                                                        واریز به حساب(کارت به کارت)
                                                    </option>
                                                </select>
                                            </div>



                                            <button className="btn btn-lg btn-block btn-success"
                                                    type="button">خرید اتریوم - 4,980,000 تومان
                                            </button>
                                        </form>
                                    </div>
                                    <div className="tab-pane fade" id="buySell-sell"
                                         role="tabpanel"
                                         aria-labelledby="buySell-sell-tab">
                                        <form>
                                            <small className="d-block mb-1">{{__('messages.crypto_currency')}}</small>
                                            <div className="d-flex flex-wrap mb-3">
                                                <select className="js-custom-select"
                                                        data-placeholder="Select coin"
                                                >
                                                    <option value="Ethereum"
                                                            selected
                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/svg/crypto/bitcoin.svg')}}" alt="Image description" width="24" /><span>Bitcoin</span></span>'>Bitcoin
                                                    </option>
                                                    <option value="Cardano"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/img/icons/optitoken.png')}}" alt="Image description" width="24" /><span>Cardano</span></span>'>Cardano
                                                    </option>
                                                    <option value="Litecoin"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/svg/crypto/litecoin.svg')}}" alt="Image description" width="24" /><span>Litecoin</span></span>'>Litecoin
                                                    </option>
                                                    <option value="Bitcoin"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/svg/crypto/ethereum.svg')}}" alt="Image description" width="24" /><span>Ethereum</span></span>'>Ethereum
                                                    </option>
                                                </select>
                                            </div>

                                            <div className="row align-items-center justify-content-between mb-1">
                                                <div className="col">
                                                    <small>{{__('messages.payment_method')}}
                                                    </small>
                                                </div>

                                                <div className="col text-{{Loc::isRtl() ? 'left' : 'right'}} small text-muted">
                                                    <a className="link-muted"
                                                       href="#">{{__('messages.view_limits')}}</a>
                                                </div>
                                            </div>
                                            <div className="d-flex flex-wrap mb-3 mb-md-4">
                                                <select className="js-custom-select"
                                                        data-placeholder="Select wallet"
                                                >
                                                    <option value="Bank of New York Mellon"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/img/icons/visa.png')}}" alt="Image description" width="24" /><span>Bank of New York Mellon</span></span>'>Bank
                                                        of New
                                                        York
                                                        Mellon
                                                    </option>
                                                    <option value="Brooklyn Bank"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/svg/companies-logos/maestro.svg')}}" alt="Image description" width="24" /><span>Brooklyn Bank</span></span>'>Brooklyn
                                                        Bank
                                                    </option>
                                                    <option value="General Bank of Germany"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/img/icons/visa.png')}}" alt="Image description" width="24" /><span>General Bank of Germany</span></span>'>General
                                                        Bank of
                                                        Germany
                                                    </option>
                                                    <option value="KLMSB"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/svg/companies-logos/maestro.svg')}}" alt="Image description" width="24" /><span>KLMSB</span></span>'>KLMSB
                                                    </option>
                                                </select>
                                            </div>

                                            <small className="d-block mb-1">Amount</small>
                                            <div className="input-group input-group-merge">
                                                <div className="input-group-append-merge text-muted">₿</div>
                                                <input className="form-control form-control-append-icon"
                                                       value="0.95739"
                                                       type="text"/>
                                            </div>

                                            <div className="text-center changer py-2">
                                                <i className="changer-elem nova-arrow-down"></i>
                                                <i className="changer-elem nova-arrow-up"></i>
                                            </div>

                                            <div className="input-group input-group-merge mb-3 mb-md-4">
                                                <div className="input-group-append-merge text-muted">USD</div>
                                                <input className="form-control form-control-append-icon"
                                                       value="2.25"
                                                       type="text"/>
                                            </div>

                                            <button className="btn btn-lg btn-block btn-success"
                                                    type="button"
                                                    onClick={() => alert('Hello ReactJS')}>Buy
                                                Ether Now - $8
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="col-md-6">
                            <div className="py-3 py-md-4 px-2 mb-md-5 mb-xl-0 mr-xl-3">
                                <h5 className="h6 text-uppercase font-weight-semi-bold mb-4">{{__('messages.you_are_buy_from', ['website' => env('APP_NAME')])}}</h5>

                                <div className="pb-3 pb-md-4">
                                    <h5 className="h2 mb-0">{this.state.volume}  اتریوم</h5>
                                    <small className="text-muted">@ هر اتریوم : 4,381,000 تومان
                                    </small>
                                </div>

                                <div className="d-flex align-items-center border-top py-3">
                                    <div className="icon bg-soft-primary rounded-circle text-center m{{Loc::isRtl() ? 'l' : 'r'}}-2 m{{Loc::isRtl() ? 'l' : 'r'}}-md-3">
                                        <i className="nova-shopping-cart-full icon-text d-inline-block text-primary"></i>
                                    </div>

                                    <div className="flex-fill">
                                        <small className="text-muted">{{__('messages.payment_method')}}
                                        </small>
                                        <h6 className="mb-0">بانک ملت
                                            *******4478</h6>
                                    </div>
                                </div>

                                <div className="d-flex align-items-center border-top py-3">
                                    <div className="icon bg-soft-primary rounded-circle text-center m{{Loc::isRtl() ? 'l' : 'r'}}-2 m{{Loc::isRtl() ? 'l' : 'r'}}-md-3">
                                        <i className="nova-check icon-text d-inline-block text-primary"></i>
                                    </div>

                                    <div className="flex-fill">
                                        <small className="text-muted">{{__('messages.process_time')}}</small>
                                        <h6 className="mb-0">فوری</h6>
                                    </div>
                                </div>

                                <div className="d-flex align-items-center border-top border-bottom py-3 mb-2">
                                    <div className="icon bg-soft-primary rounded-circle text-center m{{Loc::isRtl() ? 'l' : 'r'}}-2 m{{Loc::isRtl() ? 'l' : 'r'}}-md-3">
                                        <i className="nova-wallet icon-text d-inline-block text-primary"></i>
                                    </div>

                                    <div className="flex-fill">
                                        <small className="text-muted">{{__('messages.receive_method')}}
                                        </small>
                                        <h6 className="mb-0">{{__('messages.wallet')}}</h6>
                                    </div>
                                </div>

                                <div className="row align-items-center justify-content-between py-2">
                                    <div className="col text-muted">
                                        {{__('messages.order_price')}}
                                    </div>

                                    <div className="col text-{{Loc::isRtl() ? 'left' : 'right'}}">
                                        1,450,000 تومان
                                    </div>
                                </div>

                                <div className="row align-items-center justify-content-between py-2">
                                    <div className="col text-muted">
                                        {{__('messages.website_commission')}}
                                    </div>

                                    <div className="col text-{{Loc::isRtl() ? 'left' : 'right'}}">
                                        14,200 تومان
                                    </div>
                                </div>

                                <div className="row align-items-center justify-content-between py-2 font-weight-bold">
                                    <div className="col text-muted">
                                        {{__('messages.total_price')}}
                                    </div>

                                    <div className="col text-{{Loc::isRtl() ? 'left' : 'right'}}">
                                        1,464,200 تومان
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            );
        }
    }

    const e = React.createElement;
    const domContainer = document.querySelector('#create-order-form-container');
    ReactDOM.render(e(OrderForm), domContainer);
</script>
