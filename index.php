<?php 

      // Monitoramento de leads (pedido da gestora de trafégo)
      $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; // Capturando a url
      $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' ); // Sanitizando a url

      // A url será passada através de um input invisível (type=hidden) do formulário
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="./public/images/favicon.png"
      type="image/x-icon"
    />

    <!-- title -->
    <meta property="og:title" content="Franquia BR ImportX" />

    <!-- description -->
    <meta
      name="description"
      content="Quase 5 anos de trajetória e mais de 60 mil clientes! Faça parte da família BR ImportX!  "
    />
    <meta
      property="og:description"
      content="Quase 5 anos de trajetória e mais de 60 mil clientes! Faça parte da família BR ImportX!  "
    />
    <meta
      name="twitter:description"
      content="Quase 5 anos de trajetória e mais de 60 mil clientes! Faça parte da família BR ImportX!  "
    />

    <!-- misc -->
    <meta property="og:locale" content="pt_BR" />
    <meta name="theme-color" content="#a52a2a" />
    <title>Franquia BR ImportX</title>

    <link
      rel="preload"
      href="./style.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    <!-- GFONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;900&family=Questrial&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- FONTS -->
    <link
      rel="preload"
      href="public/fonts/Kollektif.ttf"
      as="font"
      type="font/ttf"
      crossorigin
    />
    <link
      rel="preload"
      href="public/fonts/Kollektif-Bold.ttf"
      as="font"
      type="font/ttf"
      crossorigin
    />
    <link
      rel="preload"
      href="public/fonts/Kollektif-Italic.ttf"
      as="font"
      type="font/ttf"
      crossorigin
    />
    <link
      rel="preload"
      href="public/fonts/Kollektif-BoldItalic.ttf"
      as="font"
      type="font/ttf"
      crossorigin
    />

    <link
      rel="preload"
      href="./libs/flickity/flickity.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-213503134-1"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || []
      function gtag() {
        dataLayer.push(arguments)
      }
      gtag("js", new Date())

      gtag("config", "UA-213503134-1")
      gtag("config", "AW-10812182796")
    </script>
  </head>

  <body>
    <!-- Feito com 💙 por Blanc Digital ;) -->
    <div class="exit-form__trigger" id="exitFormTrigger"></div>
    <div
      class="exit-form__trigger-activator"
      id="exitFormTriggerActivator"
    ></div>

    <!-- LOGO -->
    <div class="logo fluid">
      <img
        src="./public/images/logo.png"
        alt="Holms detetive particular. Franquie conosco!"
      />
    </div>

    <!-- #SECTION-HERO -->
    <section class="section-hero clr-white fluid">
      <div class="container section-center-mb">
        <div class="wrapper">
          <h1>
            FATURE ATÉ <br />
            R$720.000 <br />POR ANO
          </h1>
          <p class="subtitle clr-accent">
            Tenha a melhor franquia de eletrônicos do Brasil.
          </p>
          <p><b>Investindo a partir de R$8.700 mil</b></p>
        </div>
        <img
          src="./public/images/hero-1.png"
          alt="Um homem e uma mulher vestindo sobretudo olhando para a frente."
          class="section-hero__image"
        />
      </div>
    </section>

    <!-- #SECTION-NUMBERS -->
    <section class="section-numbers fluid">
      <div class="section-center-mb container">
        <h2>Números? Nós temos!</h2>
        <div class="cards cards--numbers">
          <!-- start of item -->
          <div class="card">
            <p class="title">Payback</p>

            <div class="card__amount-wrapper">
              <p id="count-1" class="amount">90 <span>dias</span></p>
            </div>

            <p class="subtitle">Um dos mais baixos do mercado</p>
          </div>
          <!-- end of item -->
          <!-- start of item -->
          <div class="card">
            <p class="title">Faturamento anual*</p>

            <div class="card__amount-wrapper">
              <p class="amount">720 <span>mil</span></p>
            </div>

            <p class="subtitle">Somos referência em faturamento</p>
          </div>
          <!-- end of item -->
          <!-- start of item -->
          <div class="card">
            <p class="title">Faturamento E-commerce*</p>

            <div class="card__amount-wrapper">
              <p class="amount">59 <span>mil</span></p>
            </div>

            <p class="subtitle">Tudo isso sem sair de casa</p>
          </div>
          <!-- end of item -->
        </div>
        <div class="small-numbers">
          <div class="small-numbers__item">
            <p>
              <b
                >Investimento a partir de:
                <span class="clr-main">8.700 </span>
              </b>
            </p>
          </div>
          <div class="small-numbers__item">
            <p>
              <b
                >*Projeção baseada em nossos resultados
                <span class="clr-main"></span>
              </b>
            </p>
          </div>
        </div>

        <button class="btn btn--accent mt-6 center">SEJA UM FRANQUEADO</button>
      </div>
    </section>

    <!-- #SECTION-NEGOCIOS -->
    <section class="section-negocios clr-white fluid">
      <div class="section-center-mb container">
        <h2>Desejando ter uma BR IMPORTX?</h2>

        <p>
          Invista no mercado Eletrônico, um dos segmentos que mais cresce no
          Brasil e no mundo. <b>Faça parte do grupo BR ImportX</b>.
        </p>
        <p>Faça um baixo investimento e obtenha alta lucratividade!</p>

        <button class="btn btn--accent center">SEJA UM FRANQUEADO</button>
      </div>
    </section>

    <!-- #SECTION-DIFERENCIAIS -->
    <section class="section-diferenciais fluid">
      <div class="section-center-mb container">
        <h2>Vantagens especiais para você franqueado</h2>
        <div class="cards">
          <!-- start of item -->
          <div class="cards__card">
            <img
              src="./public/images/promotion.png"
              alt=""
              width="100"
              height="100"
            />
            <div class="cards__card__text">
              <p class="title">Suporte de Marketing</p>
              <p>Auxilio nas redes sociais e divulgação</p>
            </div>
          </div>
          <!-- end of item -->
          <!-- start of item -->
          <div class="cards__card">
            <img
              src="./public/images/low-price.png"
              alt=""
              width="100"
              height="100"
            />
            <div class="cards__card__text">
              <p class="title">Baixo Custo de Investimento</p>
              <p>Baixo investimento com lucratividade alta</p>
            </div>
          </div>
          <!-- end of item -->
          <!-- start of item -->
          <div class="cards__card">
            <img
              src="./public/images/teaching.png"
              alt=""
              width="100 "
              height="100"
            />
            <div class="cards__card__text">
              <p class="title">Treinamento</p>
              <p>Oferecemos treinamentos para toda equipe de franqueados</p>
            </div>
          </div>
          <!-- end of item -->
        </div>
        <button class="btn btn--accent mt-6 center">SEJA UM FRANQUEADO</button>
      </div>
    </section>

    <section class="section-vantagens">
      <div class="section-center-mb container">
        <h2>Oferecemos diferenciais pra você vender muito mais.</h2>
        <div class="cards">
          <!-- start of item -->
          <div class="cards__card">
            <img
              src="./public/images/marketplace.png"
              alt=""
              width="100"
              height="100"
            />
            <div class="cards__card__text">
              <p class="title">Loja Virtual Própria</p>
              <p>Disponibilizamos um e-commerce próprio</p>
            </div>
          </div>
          <!-- end of item -->
          <!-- start of item -->
          <div class="cards__card">
            <img
              src="./public/images/crm.png"
              alt=""
              width="100"
              height="100"
            />
            <div class="cards__card__text">
              <p class="title">CRM</p>
              <p>Plataforma de ajuda na gestão de sua loja</p>
            </div>
          </div>
          <!-- end of item -->
        </div>
        <button class="btn btn--accent mt-6 center">SEJA UM FRANQUEADO</button>
      </div>
    </section>

    <!-- #SECTION-PRIMEIRA -->
    <section class="section-primeira fluid">
      <div class="section-center-mb container">
        <h2>A melhor franquia de importados do Brasil!</h2>

        <div
          class="slider section-center--lg"
          data-flickity='{"wrapAround": true, "autoPlay": true, "setGallerySize": false, "lazyLoad": true, "fullscreen": true}'
        >
          <!-- <div class="slider__cell">
            <img
              srcset="
                ./public/images/slide-1-sm.jpeg  480w,
                ./public/images/slide-1-md.jpeg  960w,
                ./public/images/slide-1.jpeg    1920w
              "
              sizes="(max-width: 600px) 480px,
          (max-width: 1000px) 1000px,
          1920px"
              src="./public/images/bg-1.png"
              alt=""
            />
          </div>
          <div class="slider__cell">
            <img
              srcset="
                ./public/images/slide-2-sm.jpeg  480w,
                ./public/images/slide-2-md.jpeg  960w,
                ./public/images/slide-2.jpeg    1920w
              "
              sizes="(max-width: 600px) 480px,
          (max-width: 1000px) 1000px,
          1920px"
              src="./public/images/bg-2.png"
              alt=""
            />
          </div>
          <div class="slider__cell">
            <img
              srcset="
                ./public/images/slide-3-sm.jpeg  480w,
                ./public/images/slide-3-md.jpeg  960w,
                ./public/images/slide-3.jpeg    1920w
              "
              sizes="(max-width: 600px) 480px,
          (max-width: 1000px) 1000px,
          1920px"
              src="./public/images/bg-3.png"
              alt=""
            />
          </div>
          <div class="slider__cell">
            <img
              srcset="
                ./public/images/slide-4-sm.jpg  508w,
                ./public/images/slide-4-md.jpg 1016w,
                ./public/images/slide-4.jpg    2032w
              "
              sizes="(max-width: 600px) 480px,
          (max-width: 1000px) 1000px,
          1920px"
              src="./public/images/bg-4.png"
              alt=""
            />
          </div>

          <div class="slider__cell">
            <img
              srcset="
                ./public/images/slide-5-sm.jpg  508w,
                ./public/images/slide-5-md.jpg 1016w,
                ./public/images/slide-5.jpg    2032w
              "
              sizes="(max-width: 600px) 480px,
          (max-width: 1000px) 1000px,
          1920px"
              src="./public/images/slide-5.jpg"
              alt=""
            />
          </div>

          <div class="slider__cell">
            <img
              srcset="
                ./public/images/slide-6-sm.jpeg  512w,
                ./public/images/slide-6-md.jpeg 1024w,
                ./public/images/slide-6.jpeg    2048w
              "
              sizes="(max-width: 600px) 480px,
          (max-width: 1000px) 1000px,
          1920px"
              src="./public/images/slide-6.jpeg"
              alt=""
            />
          </div> -->
          <div class="slider__cell">
            <img src="./public/images/loja.png" alt="" />
          </div>
          <div class="slider__cell">
            <img src="./public/images/bg-1.png" alt="" />
          </div>
          <div class="slider__cell">
            <img src="./public/images/bg-2.png" alt="" />
          </div>
          <div class="slider__cell">
            <img src="./public/images/bg-3.png" alt="" />
          </div>
          <div class="slider__cell">
            <img src="./public/images/bg-4.png" alt="" />
          </div>
        </div>
        <p>
          Criada com o intuito de levar o que a de mais inovador, de forma
          econômica e com qualidade no mercado de eletrônicos, a Br ImportX foi
          fundada no ano de 2018 no interior paulista.
        </p>
        <p>
          <b>Com quase 4 anos de trajetória</b> seguimos em franco crescimento
          com <b>aproximadamente 60 mil clientes</b> em todo o país nos tornando
          assim uma das maiores redes de importações de produtos eletrônicos do
          Brasil.
        </p>

        <p>
          Não perca tempo, preencha nosso formulário, e tenha a melhor franquia
          do mercado!
        </p>
        <div class="logo"><img src="./public/images/logo.png" alt="" /></div>
      </div>
    </section>

    <footer>
      <p class="center">
        Feito com 💙 por
        <a href="http://blancmarketingdigital.com.br/" target="_blank"
          >Blanc Digital</a
        >
        <span>:)</span>
      </p>
    </footer>

    <button class="btn btn--cta btn--fixed">Quero ser um franqueado!</button>

    <!-- FORM -->
    <div class="form-container modal--main-form is-hidden" id="modal">
      <form
        method="post"
        action="enviar.php"
        id="enviar"
        name="enviar"
        class="form"
        autocomplete="off"
        onsubmit="return validateForm(e)"
      >
        <input
          type="hidden"
          name="url-form"
          value="<?php echo $escaped_url?>"
        />
        <div class="wrapper">
          <button class="btn btn--full btn--close" type="button">
            &times;
          </button>
          <h6>Fale Conosco</h6>
          <p>Obtenha resultados com um baixo investimento</p>
          <!-- FORM__NAME -->
          <div class="form__field-wrapper">
            <label class="" for="name-form">Nome completo</label>
            <div id="nameFormField" class="form__field-wrapper__input">
              <img
                src="./public/images/user_2.png"
                alt=""
                width="16"
                height="16"
              />
              <input
                type="text"
                name="name-form"
                id="nameForm"
                class="name-form-side"
                placeholder="Seu nome aqui"
                autocomplete="off"
                oninput="validateName(this)"
                required
              />
            </div>
          </div>
          <!-- FORM__CELLPHONE -->
          <div class="form__field-wrapper">
            <label class="" for="cellphone-form">Número de celular</label>
            <div class="form__field-wrapper__input">
              <img
                src="./public/images/tel_2.png"
                alt=""
                width="16"
                height="16"
              />
              <input
                type="tel"
                name="cellphone-form"
                id="cellphoneForm"
                placeholder="Seu número aqui"
                title="Seu número de celular com o código de área"
                onkeypress="mascara(this)"
                oninput="validateNumber(this)"
                maxlength="15"
                autocomplete="off"
                required
              />
            </div>
          </div>
          <!-- FORM__EMAIL -->
          <div class="form__field-wrapper">
            <label for="email-form">Seu melhor e-mail para contato</label>
            <div class="form__field-wrapper__input">
              <img
                src="./public/images/mail_3.png"
                alt=""
                width="16"
                height="14"
              />
              <input
                type="email"
                name="email-form"
                id="emailForm"
                placeholder="email@exemplo.com"
                oninput="validateEmail(this)"
                required
              />
            </div>
          </div>
          <!-- FORM__CITY -->
          <div class="form__field-wrapper">
            <label for="city-form">Sua cidade</label>
            <div class="form__field-wrapper__input">
              <img
                src="./public/images/location.png"
                alt=""
                width="14"
                height="16"
              />
              <input
                type="text"
                name="city-form"
                id="cityForm"
                class="name-form-side"
                placeholder="Nome da cidade"
                autocomplete="off"
                oninput="validateName(this)"
                required
              />
            </div>
          </div>
          <!-- FORM__QUANTIA -->
          <div class="form__field-wrapper">
            <label for="quantia-form">Capital para investimento</label>
            <div class="form__select-wrapper">
              <select name="quantia-form">
                <option value="Até 9 mil reais">Tenho até R$9 mil</option>
                <option value="Acima de 9 mil reais">Acima de R$9 mil</option>
                <!-- <option value="Ainda não tenho capital">
                  Ainda não tenho capital
                </option> -->
              </select>
            </div>
          </div>
          <button
            class="btn btn--full btn--submit"
            name="submit-btn"
            formaction="enviar.php"
            type="submit"
            id="enviar"
          >
            QUERO ME TORNAR UM FRANQUEADO
          </button>
        </div>
      </form>
    </div>

    <!-- EXIT FORM -->
    <div class="modal modal--exit-form is-hidden" id="modal">
      <div class="modal__image-wrapper">
        <!-- <img src="./public/images/logo.png" alt="" /> -->
        <div class="cards cards--numbers">
          <!-- start of item -->
          <div class="card">
            <p class="title">Payback</p>

            <div class="card__amount-wrapper">
              <p id="count-1" class="amount">90 <span>dias</span></p>
            </div>

            <!-- <p class="subtitle">Um dos mais baixos do mercado</p> -->
          </div>
          <!-- end of item -->
          <!-- start of item -->
          <div class="card">
            <p class="title">Faturamento anual*</p>

            <div class="card__amount-wrapper">
              <p class="amount">720 <span>mil</span></p>
            </div>

            <!-- <p class="subtitle">Somos referência em faturamento</p> -->
          </div>
          <!-- end of item -->
          <!-- start of item -->
          <div class="card">
            <p class="title">Faturamento E-commerce*</p>

            <div class="card__amount-wrapper">
              <p class="amount">59 <span>mil</span></p>
            </div>

            <!-- <p class="subtitle">Tudo isso sem sair de casa</p> -->
          </div>
          <!-- end of item -->
        </div>
      </div>

      <form
        method="post"
        id="exitForm"
        name="envia"
        action="enviar.php"
        class="form form--exit"
        autocomplete="off"
      >
        <input
          type="hidden"
          name="url-form"
          value="<?php echo $escaped_url?>"
        />
        <div class="wrapper">
          <button
            class="btn btn--full btn--close btn--close-exit"
            type="button"
          >
            &times;
          </button>

          <h6>TEM CERTEZA QUE QUER PERDER ESSA OPORTUNIDADE?</h6>
          <p>
            Alguns segundos e uma decisão podem se tornar em um
            <b>grande investimento</b>. Porque deixar de lado sua oportunidade?
          </p>
          <p id="alertForm" class="alert is-hidden">
            Preencha todos os campos corretamente!
          </p>
          <!-- FORM__NAME -->
          <div class="form__field-wrapper">
            <label class="" for="name-form">Nome completo</label>
            <div class="form__field-wrapper__input">
              <img
                src="./public/images/user_2.png"
                alt=""
                width="16"
                height="16"
              />
              <input
                type="text"
                name="name-form"
                id="nameForm"
                placeholder="Seu nome aqui"
                autocomplete="off"
                oninput="validateName(this)"
                required
              />
            </div>
          </div>
          <!-- FORM__CELLPHONE -->
          <div class="form__field-wrapper">
            <label class="" for="cellphone-form">Número de celular</label>
            <div class="form__field-wrapper__input">
              <img
                src="./public/images/tel_2.png"
                alt=""
                width="16"
                height="16"
              />
              <input
                type="tel"
                name="cellphone-form"
                id="cellphoneForm"
                placeholder="Seu número aqui"
                title="Seu número de celular com o código de área"
                onkeypress="mascara(this)"
                oninput="validateNumber(this)"
                maxlength="15"
                autocomplete="off"
                required
              />
            </div>
          </div>
          <!-- FORM__EMAIL -->
          <div class="form__field-wrapper">
            <label for="email-form">Seu melhor e-mail para contato</label>
            <div class="form__field-wrapper__input">
              <img
                src="./public/images/mail_3.png"
                alt=""
                width="16"
                height="14"
              />
              <input
                type="email"
                name="email-form"
                id="emailForm"
                placeholder="email@exemplo.com"
                oninput="validateEmail(this)"
                required
              />
            </div>
            <!-- FORM__CITY -->
            <div class="form__field-wrapper">
              <label for="city-form">Sua cidade</label>
              <div class="form__field-wrapper__input">
                <img
                  src="./public/images/location.png"
                  alt=""
                  width="14"
                  height="16"
                />
                <input
                  type="text"
                  name="city-form"
                  id="cityForm"
                  class="name-form-side"
                  placeholder="Nome da cidade"
                  autocomplete="off"
                  oninput="validateName(this)"
                  required
                />
              </div>
            </div>
            <!-- FORM__QUANTIA -->
            <div class="form__field-wrapper">
              <label for="quantia-form">Capital para investimento</label>
              <div class="form__select-wrapper">
                <select name="quantia-form">
                  <option value="Até 9 mil reais">Tenho até R$9 mil</option>
                  <option value="Acima de 9 mil reais">Acima de R$9 mil</option>
                  <!-- <option value="Ainda não tenho capital">
                  Ainda não tenho capital
                </option> -->
                </select>
              </div>
            </div>
          </div>

          <button
            class="btn btn--full btn--submit"
            name="submit-btn"
            formaction="enviar.php"
            type="submit"
            id="enviar"
          >
            Seja um franqueado
          </button>
        </div>
      </form>
    </div>

    <script src="./main.js" async></script>
    <script src="./libs/flickity/flickity.pkgd.min.js" defer></script>
  </body>
</html>
