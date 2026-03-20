<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/assets/php/bootstrap.php';


$pageSlug = detectPageSlug(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?php echo getLang('locale_lang') ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <?php generateMetaTags($pageSlug); ?>
        <?php generateHreflangTags(); ?>
        <?php generateJsonLd($pageSlug); ?>
    <link rel="preload" href="/assets/css/410e96814442bb88.css" as="style">
    <link rel="stylesheet" href="/assets/css/410e96814442bb88.css" data-n-g="">
    <link rel="preload" href="/assets/css/4407646a1c92f410.css" as="style">
    <link rel="stylesheet" href="/assets/css/4407646a1c92f410.css" data-n-p="">
    <link rel="preload" href="/assets/css/styles.css" as="style">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/language.css">
</head>

<body>
<input type="hidden" id="country_setup" value='<?php echo getLangFromFolder() ?>'>

<div id="__next">
    <main role="main">
        <section class="hero">
            <section class="content">
                <header class="header_header__g6vIN"><img src="/assets/images/logoAzul.c6609791.webp"
                                                          class="header_logo__2HQOR" alt="<?php echo getLang('logo_alt') ?>"><img
                            src="/assets/images/menu.cb4522b9.webp" class="header_menu__VIL4o" alt="<?php echo getLang('menu_alt') ?>">
                    <nav class="header_align__lnMJs">
                        <ul>
                            <li style="display: flex; align-items: center; justify-content: center;">
                                <div id="lang-select" class="lang-select menu-call" data-open="false">
                                        <?php generateLanguageSelector() ?>
                                    </div>
                            </li>
                            <li>
                                <a href="<?php echo getHref('#cotacao') ?>"><?php echo getLang('cotacao') ?></a>
                            </li>
                            <li>
                                <a href="<?php echo getHref('#plataforma') ?>"><?php echo getLang('plataforma') ?></a>
                            </li>
                            <li>
                                <a href="<?php echo getHref('#servicos') ?>"><?php echo getLang('servicos') ?></a>
                            </li>
                            <li>
                                <a href="<?php echo getHref('#contato') ?>"><?php echo getLang('contato') ?></a>
                            </li>
                        </ul>
                        <button class="header_signup__dhKKS">
                            <a href="<?php echo getHref('#Send-Us-Message') ?>"><?php echo getLang('abrir_conta') ?></a>
                        </button>
                    </nav>
                </header>
                <div class="header_menu_mobile__1xlJN" style="display: none;">
                    <button class="header_close_btn__ymcBI"><?php echo getLang('close_button') ?></button>
                    <nav class="header_align_mobile__i_v6n">
                        <ul>
                            <li>
                                <a href="<?php echo getHref('#cotacao') ?>"><?php echo getLang('cotacao') ?></a>
                            </li>
                            <li>
                                <a href="<?php echo getHref('#plataforma') ?>"><?php echo getLang('plataforma') ?></a>
                            </li>
                            <li>
                                <a href="<?php echo getHref('#servicos') ?>"><?php echo getLang('servicos') ?></a>
                            </li>
                            <li>
                                <a href="<?php echo getHref('#contato') ?>"><?php echo getLang('contato') ?></a>
                            </li>
                        </ul>
                        <a href="<?php echo getHref('#Send-Us-Message') ?>">
                            <button class="header_menu_btn__59xWt"><?php echo getLang('abrir_conta') ?></button>
                        </a>

                        <div id="lang-select" class="lang-select menu-call" data-open="false">
                                        <?php generateLanguageSelector() ?>
                                    </div>
                    </nav>
                </div>
                <section class="hero_flex__k290e">
                    <section class="hero_CTA__EreJF">
                        <div class="hero_flex__k290e hero_taxaZero__DRi_f"><img alt="<?php echo getLang('aplicativo_alt') ?>"
                                                                                src="/assets/images/bluecircle.svg"
                                                                                width="25" height="25">
                            <p><?php echo getLang('taxa_zero_desc') ?></p></div>
                        <h1 class="hero_heroTitle__ctZJI"><?php echo getLang('hero_title') ?></h1>
                        <p class="hero_textHero__BzNO_"><?php echo getLang('hero_subtitle') ?></p>
                        <p class="hero_italicCTA__uEx2j"><?php echo getLang('hero_cta') ?></p>
                        <div class="hero_inputCTA__VMWhB" id="Send-Us-Message">
                            <?php
                                    $country = $clientCountryCode;
                                    $phonecode = $clientCountryCode;
                                    $submit = '';
                                    $language = getLang('language_iso');
                                    $offer = getLang('brand_name_api');
                                    include rtrim($_SERVER['DOCUMENT_ROOT'], '/') . "/form_crypto_hyper/form_js_thanks.php"; ?>
                        </div>
                    </section>
                    <section class="hero_image__ZYopM"><span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 165.619% 0px 0px;"></span><img
                                    alt="<?php echo getLang('aplicativo_alt') ?>"
                                    src="/assets/images/celular.29856aef.webp?imwidth=3840"
                                    decoding="async" data-nimg="responsive" sizes="100vw"
                                    srcset="/assets/images/celular.29856aef.webp?imwidth=640 640w, /assets/images/celular.29856aef.webp?imwidth=750 750w, /assets/images/celular.29856aef.webp?imwidth=828 828w, /assets/images/celular.29856aef.webp?imwidth=1080 1080w, /assets/images/celular.29856aef.webp?imwidth=1200 1200w, /assets/images/celular.29856aef.webp?imwidth=1920 1920w, /assets/images/celular.29856aef.webp?imwidth=2048 2048w, /assets/images/celular.29856aef.webp?imwidth=3840 3840w"
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                    </section>
                </section>
            </section>
        </section>
        <section class="content cotacao">
            <section class="blackCard_blackCard__btQkd">
                <div class="cotacao_flex__WixSq">
                    <p class="cotacao_explanation__EB96n"><?php echo getLang('quanto_vale') ?></p>

                    <select name="money" id="money" class="cotacao_selectValueOrCripto__PRVDu">
                        <option value="10"><?php echo getLang('valor_10') ?></option>
                        <option value="50"><?php echo getLang('valor_50') ?></option>
                        <option value="100" selected><?php echo getLang('valor_100') ?></option>
                        <option value="200"><?php echo getLang('valor_200') ?></option>
                        <option value="300"><?php echo getLang('valor_300') ?></option>
                        <option value="400"><?php echo getLang('valor_400') ?></option>
                        <option value="500"><?php echo getLang('valor_500') ?></option>
                        <option value="1000"><?php echo getLang('valor_1000') ?></option>
                    </select>

                    <p class="cotacao_explanation__EB96n"><?php echo getLang('em') ?></p>

                    <select name="cripto" id="cripto" class="cotacao_selectValueOrCripto__PRVDu">
                        <option value="ripple"><?php echo getLang('cripto_ripple') ?></option>
                        <option value="tether"><?php echo getLang('cripto_tether') ?></option>
                        <option value="cardano"><?php echo getLang('cripto_cardano') ?></option>
                        <option value="tron"><?php echo getLang('cripto_tron') ?></option>
                        <option value="binancecoin"><?php echo getLang('cripto_binancecoin') ?></option>
                        <option value="chainlink"><?php echo getLang('cripto_chainlink') ?></option>
                        <option value="ethereum"><?php echo getLang('cripto_ethereum') ?></option>
                        <option value="polkadot"><?php echo getLang('cripto_polkadot') ?></option>
                        <option value="shiba-inu"><?php echo getLang('cripto_shiba') ?></option>
                        <option value="dogecoin"><?php echo getLang('cripto_dogecoin') ?></option>
                        <option value="bitcoin"><?php echo getLang('cripto_bitcoin') ?></option>
                        <option value="litecoin"><?php echo getLang('cripto_litecoin') ?></option>
                        <option value="solana"><?php echo getLang('cripto_solana') ?></option>
                        <option value="usd-coin"><?php echo getLang('cripto_usdcoin') ?></option>
                    </select>

                    <p class="cotacao_explanation__EB96n" id="result"><?php echo getLang('calculando') ?></p>
                </div>
            </section>
        </section>
        <section id="cotacao" class="content criptomoedas"><h2 class="title"><?php echo getLang('cotacao_de') ?><span class="secondary"> <?php echo getLang('criptomoedas') ?></span>
            </h2>
            <div class="slick-slider slick-initialized" dir="ltr">
                <button type="button" data-role="none" class="slick-arrow slick-prev" style="display: block;">
                    <?php echo getLang('previous') ?>
                </button>
                <div class="slick-list">
                    <div class="slick-track" style="opacity: 1;">
                        <div class="slick-slide slick-active" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_bitcoin') ?>" src="/assets/images/valute-logos/bitcoin-btc-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_bitcoin') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide slick-active" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_ethereum') ?>" src="/assets/images/valute-logos/ethereum-eth-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_ethereum') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide slick-active" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_binancecoin') ?>" src="/assets/images/valute-logos/bnb-bnb-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_binancecoin') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide slick-active" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_solana') ?>" src="/assets/images/valute-logos/solana-sol-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_solana') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide slick-active" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_ripple') ?>" src="/assets/images/valute-logos/xrp-xrp-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_ripple') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_dogecoin') ?>" src="/assets/images/valute-logos/dogecoin-doge-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_dogecoin') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_cardano') ?>" src="/assets/images/valute-logos/cardano-ada-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_cardano') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_tether') ?>"
                                                 src="/assets/images/valute-logos/tether-usdt-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_tether') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_usdcoin') ?>" src="/assets/images/valute-logos/usd-coin-usdc-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_usdcoin') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_chainlink') ?>"
                                                 src="/assets/images/valute-logos/chainlink-link-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_chainlink') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_polkadot') ?>"
                                                 src="/assets/images/valute-logos/polkadot-new-dot-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_polkadot') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_litecoin') ?>" src="/assets/images/valute-logos/litecoin-ltc-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_litecoin') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_shiba') ?>"
                                                 src="/assets/images/valute-logos/shiba-inu-shib-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_shiba') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_tron') ?>" src="/assets/images/valute-logos/tron-trx-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_tron') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slide" style="width: 236px;">
                            <div>
                                <div style="width: 100%; display: inline-block;">
                                    <section class="card_cardCripto__ZqxAq">
                                        <div class="card_cardCriptoContainer__oPdlr">
                                            <img alt="<?php echo getLang('cripto_avalanche') ?>"
                                                 src="/assets/images/valute-logos/avalanche-avax-logo.webp"
                                                 class="card_cardCriptoImage__fSCJH">
                                        </div>
                                        <h3 class="card_cardCriptoName__P3HXj"><?php echo getLang('cripto_avalanche') ?></h3>
                                        <p class="card_cardCriptoValue__Tno1s"><?php echo getLang('carregando') ?></p>
                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button type="button" data-role="none" class="slick-arrow slick-next" style="display: block;"> <?php echo getLang('next') ?>
                </button>
            </div>
        </section>
        <section class="plataforma" id="plataforma"><h2 class="title"><?php echo getLang('plataforma_para') ?> <span class="secondary"><?php echo getLang('traders_avancados') ?></span>
            </h2>
            <p class="subtitle"><?php echo getLang('plataforma_desc') ?></p>
            <div class="center"><img class="mac" src="/assets/images/mac.webp" alt="<?php echo getLang('plataforma_pro_alt') ?>"></div>
            <button class="btn-cta"><a href="<?php echo getHref('#Send-Us-Message') ?>"><?php echo getLang('abrir_conta') ?></a></button>
        </section>
        <section class="content tabs" id="servicos">
            <div class="desktop">
                <section class="tabs_tabBody__H5Oex">
                    <section class="tabs_content__bQ9qo">
                        <div class="tabs_tabContent__rzR0z"><h3><?php echo getLang('exchange_title') ?></h3>
                            <p><?php echo getLang('exchange_desc') ?></p></div>
                        <div class="tabs_ilustration_container1__PQL2S ">
                            <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                <img
                                        alt="<?php echo getLang('ilustracao_mineracao_alt') ?>"
                                        src="/assets/images/ilustra1.7db13327.webp?imwidth=1920"
                                        decoding="async" data-nimg="fill" class="tabs_ilustration__fJPkP"
                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                        </div>
                    </section>
                </section>
            </div>
        </section>
        <section class="content">
            <section class="section_section__x4uYh">
                <div class="section_picture__ydUol">
                    <div class="section_woman_container__vYfUE">
                        <span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                    alt="<?php echo getLang('mulher_trading_alt') ?>"
                                    src="/assets/images/woman-trading.0e4dde37.webp?imwidth=1920"
                                    decoding="async" data-nimg="fill" class="section_woman__FnALR"
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>
                    </div>
                    <h3 class="section_title_white__4cqo2"><?php echo getLang('comece_investir_facil') ?></h3></div>
                <div class="section_flex__XGygw"><h3 class="section_title__PQo7C"><?php echo getLang('comece_investir') ?> <span><?php echo getLang('facil') ?></span>
                    </h3>
                    <p class="section_description__70Nu7"><?php echo getLang('inovações_desde_2010') ?></p>
                    <div class="section_steps__ipAFl">
                        <div class="section_row__up5dR">
                            <div class="section_circle__7OlyH"><p>1</p></div>
                            <p class="section_step__SucjF"><?php echo getLang('passo_1') ?></p></div>
                        <div class="section_hr__ySpkr"></div>
                        <div class="section_row__up5dR">
                            <div class="section_circle__7OlyH"><p>2</p></div>
                            <p class="section_step__SucjF"><?php echo getLang('passo_2') ?></p></div>
                        <div class="section_hr__ySpkr"></div>
                        <div class="section_row__up5dR">
                            <div class="section_circle__7OlyH"><p>3</p></div>
                            <p class="section_step__SucjF"><?php echo getLang('passo_3') ?></p></div>
                    </div>
                    <button><a href="<?php echo getHref('#Send-Us-Message') ?>"><?php echo getLang('abrir_conta') ?></a></button>
                </div>
            </section>
            <div class="section_flexRow__eIMxk"><p class="section_achievements__4GMBX"><span class="secondary">+</span><?php echo getLang('clientes') ?></p>
                <p class="section_achievements__4GMBX"><span class="secondary">+</span><?php echo getLang('negociados') ?></p>
                <p class="section_achievements__4GMBX"><span class="secondary">+</span><?php echo getLang('anos_mercado') ?></p></div>
        </section>
        <section class="blackSection_blackSection__IQ1hf">
            <div class="blackSection_content__D0HT0"><p><span class="blackSection_blueSide__Swe50"><?php echo getLang('beneficios') ?> // &nbsp;</span>
                </p><span class="blackSection_whiteSide____Mlu"><div class="Typewriter"
                                                                     data-testid="typewriter-wrapper"><span
                                class="Typewriter__wrapper"><?php echo getLang('typewriter_text') ?></span><span class="Typewriter__cursor">|</span></div></span>
            </div>
        </section>
        <h2 class="title"><?php echo getLang('bitcointoyou_na') ?> <span class="secondary"><?php echo getLang('midia') ?></span></h2>
        <section class="content">
            <section class="mediaSection_mediaSection___fML8">
                <div class="mediaSection_mediaLinks__d7YO_">
                    <div>
                        <a href="javascript:void(0)"><img
                                    class="mediaSection_mediaLinksItem__E_L8V" src="/assets/images/tech-tudo-logo.webp"
                                    alt="<?php echo getLang('techtudo_alt') ?>"></a></div>
                    <div>
                        <a href="javascript:void(0)"><img
                                    class="mediaSection_mediaLinksItem__E_L8V" src="/assets/images/G1-logo.webp"
                                    alt="<?php echo getLang('g1_alt') ?>"></a></div>
                    <div>
                        <a href="javascript:void(0)"><img
                                    class="mediaSection_mediaLinksItem__E_L8V"
                                    src="/assets/images/valor-economico-logo.webp"
                                    alt="<?php echo getLang('valor_economico_alt') ?>"></a></div>
                    <div>
                        <a href="javascript:void(0)"><img
                                    class="mediaSection_mediaLinksItem__E_L8V" src="/assets/images/info-money-logo.webp"
                                    alt="<?php echo getLang('infomoney_alt') ?>"></a></div>
                    <div>
                        <a href="javascript:void(0)"><img
                                    class="mediaSection_mediaLinksItem__E_L8V" src="/assets/images/estadao-logo.webp"
                                    alt="<?php echo getLang('estadao_alt') ?>"></a></div>
                    <div>
                        <a href="javascript:void(0)"><img
                                    class="mediaSection_mediaLinksItem__E_L8V" src="/assets/images/investing.webp"
                                    alt="<?php echo getLang('investing_alt') ?>"></a></div>
                </div>
            </section>
        </section>
        <section class="startCTA content">
            <section class="blackCard_blackCard__btQkd"><h2 class="titleCTA"><?php echo getLang('nao_deixe_para_amanha') ?> <span
                            class="secondary"><?php echo getLang('comece_agora') ?></span> <?php echo getLang('com_b2u') ?>!</h2>
                <button id="ctab" class="btn-cta"><a href="<?php echo getHref('#Send-Us-Message') ?>"><?php echo getLang('abrir_conta') ?></a>
                </button>
            </section>
        </section>
        <div class="desktop">
            <section class="footerHero">
                <section class="content">
                    <section class="footerHero_flex__uSlz3">
                        <section class="footerHero_image__jQD0E"><span
                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 165.619% 0px 0px;"></span><img
                                        alt="<?php echo getLang('aplicativo_alt') ?>"
                                        src="/assets/images/celular.29856aef.webp?imwidth=3840"
                                        decoding="async" data-nimg="responsive" sizes="100vw"
                                        srcset="/assets/images/celular.29856aef.webp?imwidth=640 640w, /assets/images/celular.29856aef.webp?imwidth=750 750w, /assets/images/celular.29856aef.webp?imwidth=828 828w, /assets/images/celular.29856aef.webp?imwidth=1080 1080w, /assets/images/celular.29856aef.webp?imwidth=1200 1200w, /assets/images/celular.29856aef.webp?imwidth=1920 1920w, /assets/images/celular.29856aef.webp?imwidth=2048 2048w, /assets/images/celular.29856aef.webp?imwidth=3840 3840w"
                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                        </section>
                        <section class="footerHero_CTA__Rmksu">
                            <h2 class="footerHero_heroTitle__Vmp61"><?php echo getLang('baixe_nosso_app') ?></h2>
                            <p class="footerHero_textHero__mx_EN"><?php echo getLang('app_desc') ?></p>
                        </section>
                    </section>
                </section>
            </section>
        </div>
        <div class="mobile">
            <section class="footerHeroMobile">
                <div class="image"><img class="footercelular" src="/assets/images/half-celular.webp" alt="<?php echo getLang('half_celular_alt') ?>"></div>
                <section class="content">
                    <section class="footerHero_flex__uSlz3">
                        <section class="footerHero_image__jQD0E"><span
                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                        style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 165.619% 0px 0px;"></span><img
                                        alt="<?php echo getLang('aplicativo_alt') ?>"
                                        src="/assets/images/celular.29856aef.webp?imwidth=3840"
                                        decoding="async" data-nimg="responsive" sizes="100vw"
                                        srcset="/assets/images/celular.29856aef.webp?imwidth=640 640w, /assets/images/celular.29856aef.webp?imwidth=750 750w, /assets/images/celular.29856aef.webp?imwidth=828 828w, /assets/images/celular.29856aef.webp?imwidth=1080 1080w, /assets/images/celular.29856aef.webp?imwidth=1200 1200w, /assets/images/celular.29856aef.webp?imwidth=1920 1920w, /assets/images/celular.29856aef.webp?imwidth=2048 2048w, /assets/images/celular.29856aef.webp?imwidth=3840 3840w"
                                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                        </section>
                        <section class="footerHero_CTA__Rmksu"><h2 class="footerHero_heroTitle__Vmp61"><?php echo getLang('baixe_nosso_app') ?>
                            </h2>
                            <p class="footerHero_textHero__mx_EN"><?php echo getLang('app_desc') ?></p>
                        </section>
                    </section>
                </section>
            </section>
        </div>
        <section class="content" id="contato">
            <section class="footer_footer__fDFI5">
                <div class="footer_footerLogo__SALJP">
                    <img src="/assets/images/logoAzul.webp" alt="<?php echo getLang('footer_logo_alt') ?>">
                </div>
                <div class="footer_company__DHzcv">
                    <p class="footer_footerTitle__0VYZp"><?php echo getLang('empresa') ?></p>
                    <a href="javascript:void(0)" onclick="document.getElementById('terms').showModal();">
                        <p><?php echo getLang('termos_de_uso') ?></p>
                    </a>
                    <a href="javascript:void(0)" onclick="document.getElementById('privacy').showModal();">
                        <p><?php echo getLang('politica_privacidade') ?></p>
                    </a>
                </div>
                <div class="footer_help__ojtsi">
                    <p class="footer_footerTitle__0VYZp"><?php echo getLang('ajuda') ?></p>
                    <a href="<?php echo getHref('#Send-Us-Message') ?>"><p><?php echo getLang('central_ajuda') ?></p></a>
                    <a href="<?php echo getHref('#Send-Us-Message') ?>"><p><?php echo getLang('fale_conosco') ?></p></a>
                </div>
                <div class="footer_contact__WVugc">
                    <div class="footer_contactText__0W3jA"><p class="footer_contactEmail__d59J1">
                            <?php echo getLang('contato_email') ?></p>
                        <p><?php echo getLang('atendimento_horario') ?></p></div>
                </div>
                <div class="footer_certification__h2jmS">
                    <img src="/assets/images/Certificado.webp"
                         alt="<?php echo getLang('certificado_alt') ?>">
                    <img src="/assets/images/Selo.webp" alt="<?php echo getLang('selo_alt') ?>">
                </div>
            </section>
        </section>
    </main>
</div>
<dialog class="content-pages" id="privacy">
    <button class="header_close_btn__ymcBI" onclick="document.getElementById('privacy').close();"><?php echo getLang('close_button') ?></button>
    <?php echo getLang('privacy_content') ?>
</dialog>
<dialog class="content-pages" id="terms">
    <button class="header_close_btn__ymcBI" onclick="document.getElementById('terms').close();"><?php echo getLang('close_button') ?></button>
    <?php echo getLang('terms_content') ?>
</dialog>
<script src="/assets/js/coins.js"></script>
<script src="/assets/js/mobile-menu.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let links = document.querySelectorAll("a[href$='#Send-Us-Message']");
        for (let i = 0; i < links.length; i++) {
            links[i].addEventListener("click", function (event) {
                event.preventDefault();
                let target = document.getElementById("Send-Us-Message");
                console.log(target.offsetTop);
                let offsetTop = target.getBoundingClientRect().top + window.scrollY - 60;

                window.scrollTo({
                    top: offsetTop,
                    behavior: "instant",
                });
            });
        }
    });
</script>
</body>
</html>