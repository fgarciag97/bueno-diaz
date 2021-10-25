<link href="//cdn.shopify.com/s/files/1/0097/0578/3351/t/2/assets/custom.scss.css?v=7998933894833450129" rel="stylesheet" type="text/css" media="all" />
<script src="//cdn.shopify.com/s/files/1/0097/0578/3351/t/2/assets/shop.js?v=9341116926638368655" defer="defer"></script>
<script src="//cdn.shopify.com/s/files/1/0097/0578/3351/t/2/assets/cookie.js?v=1493580728690501788" defer="defer"></script>

<link href="../../fonts/ionicons.css" rel="stylesheet">

<section class="bg-5 h-500x main-slider pos-relative"  style="background-image: url(../../img/detalles.jpg);">
    <div class="triangle-up pos-bottom"></div>
    <div class="container h-100">
        <div class="dplay-tbl">
            <div class="dplay-tbl-cell center-text color-white pt-90">
                    <h2 class="mt-30 mb-15" style="font-family: initial;">Product Details</h2>

                    <?php if(@$this->request->session()->read("Auth.User.cedula") == ''){ ?>
                        <h5>
                            <a href="#" data-toggle='modal' data-target='#login' class="btn-primaryc plr-25">
                                <b>LOGIN</b>
                            </a>
                        </h5>
                    <?php } ?>
            </div>
        </div>
    </div>
</section>


<body class="template-product">
    <div class="whole-content" style="font-size: 14px; font-family: Poppins; color: #000; font-weight: 400; line-height: 1.5; letter-spacing: 0.5px;">
      <div class="page-container" id="PageContainer" style="transition: all 0.45s cubic-bezier(0.29, 0.63, 0.44, 1); position: relative; overflow: hidden; padding-top: 30px;">
        <main class="main-content" id="MainContent" role="main" style="display: block; overflow: hidden; min-height: 400px;">
          <div class="page-width collection_templete" style="padding-left: 15px; padding-right: 15px; max-width: 1440px; margin: 0 auto;">
            <div class="row" style="margin-left: -15px;">
              <div class="page-width" style="padding-left: 15px; padding-right: 15px; max-width: 1440px; margin: 0 auto;">
                <div class="row" style="    margin-right: -15px;">
    
                  <div class="col-md-3 col-sm-12 col-xs-12 normal-sidebar sidebar_content">
                    <div id="shopify-section-Ishi_sidebar" class="shopify-section">
                      <div data-section-id="Ishi_sidebar" data-section-type="sidebar-section">
      

                        <div class="left-column collection-left" style="display: block; border: 1px solid #e9e9e9; margin-bottom: 30px; background: #fff;">          
                            <div class="view-all" style="display: block; overflow: hidden;">
                              <a href="../Menu" class="view-all-btn btn" style="    background: transparent; color: #7a7a7a; text-transform: capitalize; position: relative; float: right; padding: 10px 31px 15px 0; border: none; letter-spacing: 0em; margin: 0;">
                                View All Products
                              </a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-9 normal_main_content">
                    <div id="shopify-section-product-template" class="shopify-section">
                      <div class="product-template__container" itemscope itemtype="http://schema.org/Product" id="ProductSection-product-template" data-section-id="product-template" data-section-type="product" data-enable-history-state="true">
  
                        <div class="row product-single" style="color: #777777; font-weight: 400; margin-left: -15px; margin-right: -15px;">
                          <div class="col-lg-6 col-sm-6 product-single__photos product-single-left">
                            <div class="single-left">
                              <div class="product-single__photo-wrapper js">
                                <div id="FeaturedImageZoom-product-template-5701957582903" class="product-single__photo js-zoom-enabled product-single__photo--has-thumbnails" data-image-id="5701957582903" data-zoom="//cdn.shopify.com/s/files/1/0097/0578/3351/products/17_b24a4bd9-530d-48e3-b2f0-efb59ce0e0d8_1024x1024@2x.png?v=1564634492">
                                  <?= $this->Html->image('../productos/productos/photo/'.$ver["photo_dir"].'/'.$ver["photo"], ['class' => "feature-row__image product-featured-img lazyload"]) ?>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 product-single-right">
                          <div class="product-single__meta">

                            <h1 itemprop="name" class="product-single__title hidden-sm-down" style="color: #000000; font-weight: 500; text-transform: capitalize; padding-bottom: 0px;font-size: 30px; border-bottom: 0; margin-bottom: 12px; padding-top: 10px; font-family: Poppins; line-height: 1.1;letter-spacing: 0.1px;"><?= $ver['denominacion'] ?></h1>
                            <div class="price-product" style="margin-bottom: 17px;">
                              <div class="product-single__price product-single__price-product-template" style="color: #000000; font-weight: 500; font-size: 24px; margin-bottom: 0px; padding-left: 0; line-height: 23px; display: inline-block; vertical-align: middle;"> 
                                  <span class="product-price__price product-price__sale">
                                    <s class="product-price__price is-bold" id="ProductPrice-product-template" style="text-decoration: none;"><?= '$' . $ver['precio'] ?></s> 
                                  </span>
                              </div>
                            </div>

                            <p itemprop="brand" class="product-single__vendor">Description: <span><?= $ver['descripcion'] ?></span></p>
                            <p itemprop="brand" class="product-single__vendor">Product Type: <span><?= $ver['grupo'] ?></span></p>
          
          
                            <div class="wishlist-chart" style="margin-bottom: 22px; margin-top: 15px;">
                              <div class="add-to-wishlist" style="display: inline-block; vertical-align: middle; line-height: 20px; margin-left: 0px;"></div>

                              <div itemprop="offers" itemscope class="product-selection-bottom">
         
                                <div class="product-selection ">
                                  <?= $this->Form->create(@$carrito, ['url' => ['action' => 'detalle']], ['class' => "product-form cart-product-page product-form-product-template"]) ?>

                                    <input type="text" name="id" value="<?= $id ?>" hidden>

                                    <div class="quantity-cart">
                                      <div class="product-form__item product-form__item--quantity selector-wrapper">
                                          <label>Units</label>
                                          <input type="number" name="cantidad" class="form-control" value="1">
                                      </div>
              
                                      <div class="product-info product-sale">
                                        <div class="item_info">
                                          <div class="product-form__item product-form__item--submit">
                                            <button type="submit" id="AddToCart-product-template" class="btn btn-info" >
                                              <span id="AddToCartText-product-template">
                                                Add To Cart
                                              </span>
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  <?= $this->Form->end() ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
  </body>