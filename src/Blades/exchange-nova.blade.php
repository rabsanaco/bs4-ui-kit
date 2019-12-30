<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
@if(env('APP_ENV') == 'local')
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
@elseif(env('APP_ENV') == 'production')
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
@endif
<div class="row">
  <div class="col-xl-8 mb-3 mb-md-5" id="exchange-app-{{ $drawer->getId() }}">
    <div class="card d-print-none">
      <div class="row">
        <div class="col-md-6 border-right">
          <div class="py-3 py-md-4 px-2 mb-3 mb-md-5 mb-xl-0 ml-xl-3">
            <ul class="nav nav-pills nav-justified nav-pills-v2 font-weight-semi-bold mb-3"
                id="buySell-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active"
                   @click="setDirection('buy')"
                   id="buySell-buy-tab"
                   data-toggle="pill"
                   href="#buySell-buy" role="tab"
                   aria-controls="buySell-buy"
                   aria-selected="true">{{__('messages.buy')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                   @click="setDirection('sell')"
                   id="buySell-sell-tab"
                   data-toggle="pill"
                   href="#buySell-sell" role="tab"
                   aria-controls="buySell-sell"
                   aria-selected="false">{{__('messages.sell')}}</a>
              </li>
            </ul>
            <div class="tab-content pt-2" id="pills-tabContent">
              <div class="tab-pane fade "
                   id="buySell-buy" role="tabpanel"
                   :class="direction === 'buy' ? 'show active' : ''"
                   aria-labelledby="buySell-buy-tab">
                <form>
                  <small class="d-block mb-1">{{__('messages.crypto_currency')}}</small>
                  <div class="d-flex flex-wrap mb-3">
                    <select class="js-custom-select"
                            data-placeholder="Select coin"
                            onchange="domChangeProductHandler(event)"
                    >
                      <option v-for="product in products" v-if="product.status == 'active' || product.status == 'buy_active'" :index="product.id" :value="product.id"
                              :selected="product.id == defaultBuyProduct.id"
                              :data-option-template="'<span class=\'d-flex align-items-center\'><img class=\'m{{Loc::isRtl() ? 'l' : 'r'}}-2\' src=\'/storage/'+product.image+'\' alt='+product.title+' width=\'24\' /><span>'+product.title+'</span></span>'">@{{ product.title }}
                      </option>
                    </select>
                  </div>



                  <small class="d-block mb-1">{{__('messages.count')}}</small>

                  <div class="input-group input-group-merge mb-3 mb-md-4">
                    <input class="form-control form-control-append-icon"
                           v-model="buyInvoice.amount"
                    type="number"/>
                    <div class="input-group-append-merge text-muted">@{{ buyInvoice.product.productable.abbr }}</div>
                  </div>

                  <div class="row align-items-center justify-content-between mb-1">
                    <div class="col">
                      <small>{{__('messages.select_payment_method')}}
                      </small>
                    </div>

                    <div class="col text-{{Loc::isRtl() ? 'left' : 'right'}} small text-muted">
                      <a class="link-muted"
                         data-toggle="tooltip"
                         title="{{__('messages.how_to_select_payment_method')}}"
                         href="{{ env('APP_URL') . '/wiki/payment-methods' }}"
                         target="_blank"
                      ><i class="fas fa-question-circle"></i> </a>
                    </div>
                  </div>

                  <div class="d-flex flex-wrap mb-3 mb-md-4">
                    <select class="js-custom-select"
                            data-placeholder="{{ __('messages.select_payment_method') }}"
                            v-model="invoice.payment_method"
                            onchange="domChangePaymentMethodHandler(event)"
                    >
                      <option value="ebank"
                              selected
                              data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/svg/companies-logos/maestro.svg')}}" alt="Image description" width="24" /><span> درگاه بانکی</span></span>'>
                      {{__('messages.bank_gateway')}}
                      </option>
                      <option value="wallet"
                              data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/img/icons/visa.png')}}" alt="Image description" width="24" /><span> {{__('messages.wallet')}}</span></span>'>
                         {{__('messages.wallet')}}
                      </option>

                      <option value="transfer"
                              data-option-template='<span class="d-flex align-items-center"><img class="m{{Loc::isRtl() ? 'l' : 'r'}}-2" src="{{asset( config('rabsanaco-bs4-ui-kit.assets_path') . '/img/icons/visa.png')}}" alt="Image description" width="24" /><span>{{__('messages.wire_transfer')}}</span></span>'>
                        {{__('messages.wire_transfer')}}
                      </option>
                    </select>
                    <p class="{{ $drawer->getUser()->defaultWallet()->balance <= 0 ? 'text-danger' : '' }}" v-if="invoice.payment_method == 'wallet'">
                      ({{__('messages.balance')}}: {{ $drawer->getUser()->defaultWallet()->balance > 0 ? number_format($drawer->getUser()->defaultWallet()->balance) : __('messages.zero') }} {{app()->make('default_currency')->title}})
                      <a href="{{route('deposits.create', ['wallet' => $drawer->getUser()->defaultWallet()->id])}}" target="_blank" class="btn btn-link">&nbsp;{{__('messages.raise_balance')}}</a>
                    </p>
                  </div>

                  <template v-if="invoice.payment_method == 'ebank' || invoice.payment_method == 'transfer'">
                    <div class="row align-items-center justify-content-between mb-1">
                      <div class="col">
                        <small>{{__('messages.bank_account')}}
                          <a data-toggle="tooltip" title="{{__('messages.register_new_bank_account')}}" class="btn btn-link text-success" href="{{ route('accounts.create', ['wallet' => $drawer->getUser()->defaultWallet()->id]) }}" target="_blank"><i class="fas fa-plus-circle"></i></a>
                        </small>
                      </div>

                      <div class="col text-{{Loc::isRtl() ? 'left' : 'right'}} small text-muted">
                        <a class="link-muted"
                           data-toggle="tooltip"
                           title="{{__('messages.why_i_should_register_bank_account')}}"
                           href="{{ env('APP_URL') . '/wiki/bank-accounts'  }}"
                           target="_blank"
                        ><i class="fas fa-question-circle"></i> </a>
                      </div>
                    </div>

                    <div class="d-flex flex-wrap mb-3 mb-md-4">
                      <select class="js-custom-select"
                              data-placeholder="{{ __('messages.select_bank_account') }}"
                              onchange="domChangeAccountHandler(event)"

                      >
                        @foreach($drawer->getUser()->defaultWallet()->accounts as $account)
                          <option class="ltr text-left" value="{{ $account->id }}">{{ $account->bank }} - {{ $account->mask('card_number') }}</option>
                        @endforeach
                      </select>
                      @if($drawer->getUser()->defaultWallet()->accounts()->count() == 0)
                      <p class="text-danger">{{__('messages.you_have_to_add_bank_account_first')}}</p>
                      @endif
                    </div>
                  </template>



                  <button class="btn btn-lg btn-block btn-success {{ Browser::isMobile() ? 'small' : '' }} "
                          type="button">{{__('messages.buy')}} @{{ invoice.product.productable.title }} - @{{ $numeral(totalPrice).format('0,0') }} {{app()->make('default_currency')->title}}
                  </button>
                </form>
              </div>
              <div class="tab-pane fade" id="buySell-sell"
                   role="tabpanel"
                   :class="direction === 'sell' ? 'show active' : ''"
                   aria-labelledby="buySell-sell-tab">
                <form>
                  <small class="d-block mb-1">{{__('messages.crypto_currency')}}</small>
                  <div class="d-flex flex-wrap mb-3">
                    <select class="js-custom-select"
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

                  <div class="row align-items-center justify-content-between mb-1">
                    <div class="col">
                      <small>{{__('messages.payment_method')}}
                      </small>
                    </div>

                    <div class="col text-{{Loc::isRtl() ? 'left' : 'right'}} small text-muted">
                      <a class="link-muted"
                         href="#">{{__('messages.view_limits')}}</a>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap mb-3 mb-md-4">
                    <select class="js-custom-select"
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

                  <small class="d-block mb-1">Amount</small>
                  <div class="input-group input-group-merge">
                    <div class="input-group-append-merge text-muted">₿</div>
                    <input class="form-control form-control-append-icon"
                           value="0.95739"
                           type="text"/>
                  </div>

                  <div class="text-center changer py-2">
                    <i class="changer-elem nova-arrow-down"></i>
                    <i class="changer-elem nova-arrow-up"></i>
                  </div>

                  <div class="input-group input-group-merge mb-3 mb-md-4">
                    <div class="input-group-append-merge text-muted">USD</div>
                    <input class="form-control form-control-append-icon"
                           value="2.25"
                           type="text"/>
                  </div>

                  <button class="btn btn-lg btn-block btn-success"
                          type="button">Buy
                  Ether Now - $8
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @if(!Browser::isMobile())
        <div class="col-md-6">
          <div class="py-3 py-md-4 px-2 mb-md-5 mb-xl-0 mr-xl-3">

            <h5 v-if="direction === 'buy'" class="h6 text-uppercase font-weight-semi-bold mb-4">{{__('messages.you_are_buy_from', ['website' => setting('general.title')])}}</h5>
            <h5 v-else-if="direction === 'sell'" class="h6 text-uppercase font-weight-semi-bold mb-4">{{__('messages.your_are_sell_to', ['website' => setting('general.title')])}}</h5>

            <div class="pb-3 pb-md-4">
              <h5 class="h2 mb-0">@{{$numeral(invoice.amount).format('0,0.00[000000]')}}  @{{ invoice.product.productable.title }}</h5>
              <small class="text-muted">@ {{__('messages.each')}} @{{ invoice.product.productable.title }} : @{{ direction === 'buy' ? $numeral(invoice.product.buy_price).format('0,0') : $numeral(invoice.product.sell_price).format('0,0') }} {{app()->make('default_currency')->title}}
              </small>
            </div>

            <div class="d-flex align-items-center border-top py-3">
              <div class="icon bg-soft-primary rounded-circle text-center m{{Loc::isRtl() ? 'l' : 'r'}}-2 m{{Loc::isRtl() ? 'l' : 'r'}}-md-3">
                <i class="nova-shopping-cart-full icon-text d-inline-block text-primary"></i>
              </div>

              <div class="flex-fill">
                <small class="text-muted">{{__('messages.payment_method')}}
                </small>
                <h6 class="mb-0" v-if="direction == 'buy'">
                  @{{invoice.account.bank}}
                  @{{invoice.account.masked_card_number}}</h6>
                <h6 v-else-if="direction == 'sell'" class="mb-0">
                  والت بیت کوین 1s4d3212fdsf0asdf213123d
                </h6>
              </div>
            </div>

            <div class="d-flex align-items-center border-top py-3">
              <div class="icon bg-soft-primary rounded-circle text-center m{{Loc::isRtl() ? 'l' : 'r'}}-2 m{{Loc::isRtl() ? 'l' : 'r'}}-md-3">
                <i class="nova-check icon-text d-inline-block text-primary"></i>
              </div>

              <div class="flex-fill">
                <small class="text-muted">{{__('messages.process_time')}}</small>
                <h6 class="mb-0">فوری</h6>
              </div>
            </div>

            <div class="d-flex align-items-center border-top border-bottom py-3 mb-2">
              <div class="icon bg-soft-primary rounded-circle text-center m{{Loc::isRtl() ? 'l' : 'r'}}-2 m{{Loc::isRtl() ? 'l' : 'r'}}-md-3">
                <i class="nova-wallet icon-text d-inline-block text-primary"></i>
              </div>

              <div class="flex-fill">
                <small class="text-muted">{{__('messages.receive_method')}}
                </small>
                <h6 class="mb-0">{{__('messages.wallet')}}</h6>
              </div>
            </div>

            <div class="row align-items-center justify-content-between py-2">
              <div class="col text-muted">
                {{__('messages.order_price')}}
              </div>

              <div class="col text-{{Loc::isRtl() ? 'left' : 'right'}}">
                1,450,000 تومان
              </div>
            </div>

            <div class="row align-items-center justify-content-between py-2">
              <div class="col text-muted">
                {{__('messages.website_commission')}}
              </div>

              <div class="col text-{{Loc::isRtl() ? 'left' : 'right'}}">
                14,200 تومان
              </div>
            </div>

            <div class="row align-items-center justify-content-between py-2 font-weight-bold">
              <div class="col text-muted">
                {{__('messages.total_price')}}
              </div>

              <div class="col text-{{Loc::isRtl() ? 'left' : 'right'}}">
                @{{$numeral(totalPrice).format('0,0')}} {{app()->make('default_currency')->title}}
              </div>
            </div>
          </div>
        </div>
          @endif
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  Vue.prototype.$numeral = window.numeral;
    const app = new Vue({
        el: '#exchange-app-{{ $drawer->getId() }}',
        data: {
            direction: 'buy',
            defaultBuyProduct: {!! $drawer->getDefaultBuyProduct() !!},
            defaultSellProduct: {!! $drawer->getDefaultSellProduct() !!},
            accounts: {!! $drawer->getUser()->defaultWallet()->accounts !!},
            buyInvoice: {
                amount: {{ $drawer->getDefaultBuyProduct()->minimum_buy_limit }},
                direction: 'buy',
                account: {!! $drawer->getUser()->defaultWallet()->accounts()->first() !!},
                product: {!! $drawer->getDefaultBuyProduct() !!},
                payment_method: 'ebank',
            },
            sellInvoice: {
                amount: {{ $drawer->getDefaultSellProduct()->minimum_sell_limit }},
                direction: 'sell',
                account:{!! $drawer->getUser()->defaultWallet()->accounts()->first() !!},
                product: {!! $drawer->getDefaultSellProduct() !!},
                payment_method: 'ebank',
            }

        },
        computed: {
            products: function(){
                try {
                    return {!! $drawer->getProducts()->toJson(JSON_PRETTY_PRINT) !!};
                }
                catch( err ) {
                    //console.error( err );
                }
            },
            invoice: function(){
                if(this.direction === 'buy'){
                    return this.buyInvoice;
                }else if(this.direction === 'sell'){
                    return this.sellInvoice;
                }else{
                    return {};
                }
            },
            totalPrice: function () {
                let big = Number(this.invoice.amount);
              if(this.direction == 'buy'){
                  return big * Number(this.invoice.product.buy_price);
              }else if(this.direction == 'sell'){
                  return big * Number(this.invoice.product.sell_price);
              }
              return NaN;
            }
        },
        methods: {
            changePaymentMethodHandler(newValue){
                this.invoice.payment_method = newValue;
            },
            setDirection(newValue){
                this.direction = newValue;
            },
            setProduct(newProductId){
                if(this.direction === 'buy'){
                    this.buyInvoice.product = this.findProduct(newProductId);
                }else if(this.direction === 'sell'){
                    this.sellInvoice.product = this.findProduct(newProductId);
                }
            },
            findProduct(value, key='id'){
                let foundProduct = _.find(this.products, function(obj){
                    return obj[key] == value;
                });

                if(typeof foundProduct === 'object'){
                    return foundProduct;
                }else if(Array.isArray(foundProduct) && foundProduct.length > 0){
                    return foundProduct[0];
                }else{
                    if(this.direction === 'buy'){
                        return this.defaultBuyProduct;
                    }else if(this.direction === 'sell'){
                        return this.defaultSellProduct;
                    }
                }
            },
            setAccount(newValue){
                if(this.direction === 'buy'){
                    this.buyInvoice.account = this.findAccount(newValue);
                }else if(this.direction === 'sell'){
                    this.sellInvoice.account = this.findProduct(newValue);
                }
            },
            findAccount(value, key='id'){
                let foundAccount = _.find(this.accounts, function(obj){
                    return obj[key] == value;
                });

                if(typeof foundAccount === 'object'){
                    return foundAccount;
                }else if(Array.isArray(foundAccount) && foundAccount.length > 0){
                    return foundAccount[0];
                }else{

                }
            },
        }
    });

    function domChangePaymentMethodHandler(e){
        app.changePaymentMethodHandler(e.target.value);
        setTimeout(function(){
            $.HSCore.components.HSSelect2.init('.js-custom-select');
        }, 0);
    }
    function domChangeProductHandler(e) {
        app.setProduct(e.target.value);
    }
    function domChangeAccountHandler(e) {
        app.setAccount(e.target.value);
    }
</script>
