<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>

<section class="so-contatos">

  <h1 class="title-page">
    <i class="icon-phone"></i>
    <span>
      Contatos
    </span>
  </h1>

  <div class="contatos-form">
    <form action="submit-info">

      <fieldset>

        <p class="form-description">
          Entre em contato conosco, deixe sua sugestão ou peça seu cartão.
        </p>

        <div class="form-control">
          <label for="nome">Nome:</label>
          <input type="text" placeholder="digite seu nome">
        </div>

        <div class="form-control">
          <label for="email">E-mail:</label>
          <input for="name" type="email" placeholder="seuemail@exemplo.com">
        </div>

        <div class="form-control">
          <label for="city">Cidade:</label>
          <input for="city" type="text" placeholder="digite seu nome">
        </div>

        <div class="form-control">
          <label for="assunto">Assunto:</label>
          <select name="assunto" >
            <option value="cartao"> peça seu cartao </option>
            <option value="sugestao"> Sugestões </option>
            <option value="trabalhe"> Trabalhe conosco </option>
          </select>
        </div>

        <div class="form-control">
          <label for="msg">Deixe sua mensagem:</label>
          <textarea name="msg" ></textarea>
        </div>

        <div class="form-control">
          <input type="submit" value="enviar">
        </div>
      </fieldset>

    </form>
  </div>


  <div class="contatos-info">
    <span>
      <strong>
        <i class="icon-building"></i>
        Loja 1 - Santa Maria do Oeste
      </strong>
      <address>
        <a href="https://www.google.com.br/maps/place/Supermercado+Oeste/@-24.939458,-51.8738626,17z/data=!3m1!4b1!4m2!3m1!1s0x94eef269bd8b4afd:0x85b928bd74459dce">
          <i class="icon-mark"></i>
          Endereço: Rua Generoso Karpinski, Nº 970
        </a>
      </address>
      <a href="mailto:stamaria@superoeste.com.br">
        <i class="icon-mail"></i>
        stamaria@superoeste.com.br
      </a>
      <a href="tel://42-3644-1227">
        <i class="icon-phone"></i>
        (42) 3644 1227
      </a>
    </span>
    <span>
      <strong>
        <i class="icon-building"></i>
        Loja 2 - Quatro Barras Centro
      </strong>
      <address>
        <a target="_blank" href="https://www.google.com.br/maps/place/Supermercado+Oeste/@-25.370595,-49.0713046,15z/data=!4m6!1m3!3m2!1s0x0:0xec6095c56761f268!2sSupermercado+Oeste!3m1!1s0x0:0xec6095c56761f268">
          <i class="icon-mark"></i>
          Endereço: Endereço: Rua Nilo Favaro, Nº 414
        </a>
      </address>
      <a href="mailto:quatrobarras_centro@superoeste.com.br">
        <i class="icon-mail"></i>
         quatrobarras_centro@superoeste.com.br
      </a>
      <a href="tel://41-3672-2024">
      <i class="icon-phone"></i>
      (41) 3672 2024
      </a>
    </span>
    <span>
      <strong>
        <i class="icon-building"></i>
        Loja 3 - Pitanga
      </strong>
      <address>
        <a target="_blank" href="https://www.google.com.br/maps/place/Supermercado+Oeste/@-25.3925895,-49.0522814,17z/data=!3m1!4b1!4m2!3m1!1s0x94dced3712a73de5:0xb0b2dae417edef9f">
          <i class="icon-mark"></i>
          Endereço: Rua Conselheiro Zacarias, Nº 500
        </a>
      </address>
      <a target="_blank" href="mailto:pitanga@superoeste.com.br">
        <i class="icon-mail"></i>
        pita1-ga@s-peroeste.com.br
      </a>
      <a href="tel://42-3646-1241">
        <i class="icon-phone"></i>
        (42) 3646-1241
      </a>
    </span>
    <span>
      <strong>
        <i class="icon-building"></i>
        Loja 4 - Quatro Barras Borda do Campo
      </strong>
      <address>
        <a target="_blank" href="https://www.google.com.br/maps/place/Supermercados+Oeste/@-24.7569399,-51.7612179,17z/data=!4m5!1m2!2m1!1sSupermercado+Oeste+pitanga!3m1!1s0x94ee96b64311565b:0xd29de42fade031f2">
          <i class="icon-mark"></i>
          Endereço: Rua Ana Andreatta Mocelin, Nº 566
        </a>
      </address>
      <a href="mailto:quatrobarras_borda@superoeste.com.br">
        <i class="icon-mail"></i>
        quatrobarras_borda@superoeste.com.br
      </a>
      <a href="tel://41-3672-1315">
        <i class="icon-phone"></i>
        (41) 3672 1315
      </a>
    </span>
  </div>

</section>

<?php get_footer(); ?>
