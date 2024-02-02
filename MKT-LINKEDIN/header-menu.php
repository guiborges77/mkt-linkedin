<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
        ul li {
            list-style: none;
        }
        a {
            text-decoration: none;
        }
        .header__menu {
          width: 100%;
          position: fixed;
          left: 0;
          top: 0;
          z-index: 99;
          padding: 0 48px;
        }
        @media screen and (max-width: 80rem) {
          .header__menu {
            padding: 0 24px;
          }
        }
        @media screen and (max-width: 64rem) {
          .header__menu {
            padding: 0 24px;
          }
        }
        @media screen and (max-width: 33.75rem) {
          .header__menu {
            padding: 0 16px;
          }
        }
        .header__menu .header__menu__navcontainer {
          max-width: 1290px;
          margin: 0 auto;
          display: flex;
          align-items: center;
          justify-content: space-between;
          gap: 200px;
        }
        @media screen and (max-width: 80rem) {
          .header__menu .header__menu__navcontainer {
            gap: 20px;
          }
        }
        @media screen and (max-width: 33.75rem) {
          .header__menu .header__menu__navcontainer {
            gap: 0;
          }
        }
        .header__menu .header__menu__nav__logo {
          flex-shrink: 0;
        }
        .header__menu .header__menu__menumobile {
          width: 100%;
          display: flex;
          justify-content: space-between;
          align-items: center;
        }
        @media screen and (max-width: 64rem) {
          .header__menu .header__menu__menumobile {
            width: auto;
            gap: 16px;
          }
        }
        @media screen and (max-width: 33.75rem) {
          .header__menu .header__menu__menumobile {
            gap: 10px;
          }
        }
        .header__menu .header__menu__menumobile .menu__button {
          margin: 19px 0 15px 0;
          display: none;
          background-color: transparent;
          border: none;
        }
        @media screen and (max-width: 64rem) {
          .header__menu .header__menu__menumobile .menu__button {
            display: block;
          }
        }
        .header__menu .header__menu__menumobile .menu__button svg {
          pointer-events: none;
        }
        @media screen and (max-width: 33.75rem) {
          .header__menu .header__menu__menumobile #button-modal p {
            display: none;
          }
        }
        .header__menu .header__menu__nav__lista {
          display: flex;
          align-items: center;
        }
        @media screen and (max-width: 64rem) {
          .header__menu .header__menu__nav__lista {
            display: none;
          }
        }
        .header__menu .header__menu__nav__lista > li:hover .ul__links {
          color: #FCCEC2;
        }
        .header__menu .header__menu__nav__lista > li:hover .ul__links svg path {
          stroke: #FCCEC2;
        }
        .header__menu .header__menu__nav__lista > li:hover .ul__links .arrow {
          transform: rotate(-180deg);
        }
        @media screen and (max-width: 64rem) {
          .header__menu .header__menu__nav__lista.ativo {
            display: block;
            width: 100%;
            min-height: calc(100vh - 80px);
            overflow: auto;
            position: absolute;
            top: 100%;
            left: 0;
            border-radius: 0.5rem;
            background-color: #FFFFFF;
            box-shadow: 0px 2px 9px 0px rgba(119, 119, 119, 0.1);
            border-radius: 0;
          }
          .header__menu .header__menu__nav__lista.ativo .ul__links {
            padding: 24px 20px;
            color: #101010;
          }
          .header__menu .header__menu__nav__lista.ativo .ul__links svg path {
            stroke: #101010;
          }
        }
        .header__menu .header__menu__nav__lista .ul__links {
          padding: 28px 16px;
          display: flex;
          align-items: center;
          gap: 4px;
          color: #FFFFFF;
          font-size: 0.95rem;
          font-weight: 600;
          transition: color 0.3s ease-out;
        }
        @media screen and (max-width: 64rem) {
          .header__menu .header__menu__nav__lista .ul__links {
            justify-content: center;
          }
        }
        .header__menu .header__menu__nav__lista .ul__links:hover {
          color: #FCCEC2;
        }
        .header__menu .header__menu__nav__lista .ul__links:hover svg path {
          stroke: #FCCEC2;
        }
        .header__menu .header__menu__nav__lista .ul__links svg {
          flex-shrink: 0;
          pointer-events: none;
          transition: transform 0.3s ease-out;
        }
        .header__menu .header__menu__nav__lista .ul__links:hover .arrow {
          transform: rotate(-180deg);
        }
        .header__menu .header__menu__sublista-1 {
          position: relative;
        }
        .header__menu .header__menu__sublista-1:hover .ul__links__sublinks {
          display: block;
        }
        .header__menu .header__menu__sublista-2 {
          position: relative;
        }
        .header__menu .ul__links__sublinks {
          min-width: 233px;
          position: absolute;
          display: none;
          padding: 32px 32px 32px 24px;
          flex-direction: column;
          border-radius: 0.5rem;
          background-color: #FFFFFF;
        }
        .header__menu .ul__links__sublinks h1 {
          margin-bottom: 24px;
          padding-left: 8px;
          color: #FF6138;
          font-size: 1.25rem;
          font-weight: 700;
          line-height: normal;
        }
        @media screen and (max-width: 48rem) {
          .header__menu .ul__links__sublinks h1 {
            margin-bottom: 16px;
          }
        }
        .header__menu .ul__links__sublinks ul {
          display: flex;
          gap: 6px;
          flex-direction: column;
        }
        .header__menu .ul__links__sublinks li {
          padding: 8px;
          transition: 0.3s ease-out;
        }
        .header__menu .ul__links__sublinks li:hover {
          padding: 8px;
          background-color: #FFEFEB;
          border-radius: 4px;
        }
        .header__menu .ul__links__sublinks li:hover a {
          color: #FF6237;
        }
        .header__menu .ul__links__sublinks a {
          width: 100%;
          display: block;
          color: #C1C1C1;
          font-size: 1rem;
          font-weight: 500;
          line-height: normal;
          transition: .3s;
        }
        @media screen and (max-width: 64rem) {
          .header__menu .ul__links__sublinks {
            width: 233px;
            padding: 0px 24px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            justify-content: center;
            text-align: center;
          }
        }
        .header__menu .ul__links__sublinks__grande {
          min-width: 820px;
          padding: 32px;
          position: absolute;
          display: none;
          left: 60%;
          transform: translateX(-30%);
          border-radius: 0.5rem;
          background-color: #FFFFFF;
          box-shadow: 0px 2px 9px 0px rgba(119, 119, 119, 0.1);
        }
        @media screen and (max-width: 64rem) {
          .header__menu .ul__links__sublinks__grande {
            width: 100%;
            min-width: 233px;
            left: 0;
            transform: translateX(0);
            z-index: 10;
          }
        }
        @media screen and (max-width: 48rem) {
          .header__menu .ul__links__sublinks__grande {
            padding: 0 16px;
            overflow-y: auto;
          }
        }
        .header__menu .ul__links__sublinks__grande .sublinks__grande__tab h1 {
          margin-bottom: 24px;
          color: #FF6237;
          font-size: 1.5625rem;
          font-weight: 700;
          line-height: normal;
        }
        @media screen and (max-width: 48rem) {
          .header__menu .ul__links__sublinks__grande .sublinks__grande__tab h1 {
            font-size: 1.125rem;
            margin-bottom: 18px;
          }
        }
        .header__menu .ul__links__sublinks__grande .sublinks__grande__tab ul {
          display: flex;
          gap: 24px;
          flex-direction: column;
        }
        .header__menu .ul__links__sublinks__grande .sublinks__grande__tab a {
          display: block;
          color: #C1C1C1;
          font-size: 1rem;
          font-weight: 600;
          line-height: normal;
          transition: 0.3s ease-out;
        }
        @media screen and (max-width: 33.75rem) {
          .header__menu .ul__links__sublinks__grande .sublinks__grande__tab a {
            font-size: 0.9375rem;
          }
        }
        .header__menu .ul__links__sublinks__grande .sublinks__grande__tab a:hover {
          color: #FF6138;
        }
        .header__menu .ul__links__sublinks__grande .sublinks__grande__tab .active {
          color: #FF6138;
        }
        .header__menu .ul__links__sublinks__grande .line {
          width: 2px;
          margin: 0 21px 0 32px;
          background-color: #D3D3D3;
        }
        @media screen and (max-width: 64rem) {
          .header__menu .ul__links__sublinks__grande .line {
            margin: 0 24px;
          }
        }
        @media screen and (max-width: 33.75rem) {
          .header__menu .ul__links__sublinks__grande .line {
            display: none;
          }
        }
        .header__menu .ul__links__sublinks__grande .sublinks__grande__contenttab {
          display: flex;
          gap: 29px;
          visibility: hidden;
          opacity: 0;
          position: relative;
          transition: 0.3s ease-out;
        }
        @media screen and (max-width: 64rem) {
          .header__menu .ul__links__sublinks__grande .sublinks__grande__contenttab {
            flex-wrap: wrap;
            gap: 20px;
          }
        }
        @media screen and (max-width: 33.75rem) {
          .header__menu .ul__links__sublinks__grande .sublinks__grande__contenttab {
            margin-left: 20px;
          }
        }
        .header__menu .ul__links__sublinks__grande .sublinks__grande__contenttab.active {
          visibility: visible;
          opacity: 1;
          pointer-events: auto;
        }
        .header__menu .ul__links__sublinks__grande .sublinks__grande__contenttab:nth-child(4) {
          position: absolute;
          left: 223px;
          top: 40px;
        }
        @media screen and (max-width: 33.75rem) {
          .header__menu .ul__links__sublinks__grande .sublinks__grande__contenttab:nth-child(4) {
            left: 120px;
          }
        }
        .header__menu .ul__links__sublinks__grande .sublinks__grande__contenttab:nth-child(5) {
          position: absolute;
          left: 223px;
          top: 40px;
        }
        @media screen and (max-width: 33.75rem) {
          .header__menu .ul__links__sublinks__grande .sublinks__grande__contenttab:nth-child(5) {
            left: 120px;
          }
        }
        .header__menu .ul__links__sublinks__grande .contenttab__item {
          flex-shrink: 0;
        }
        @media screen and (max-width: 48rem) {
          .header__menu .ul__links__sublinks__grande .contenttab__item {
            flex-shrink: 1;
          }
        }
        .header__menu .ul__links__sublinks__grande .contenttab__item h2 {
          padding-left: 8px;
          margin-bottom: 24px;
          color: #FF6237;
          font-size: 1.25rem;
          font-weight: 700;
          line-height: normal;
        }
        @media screen and (max-width: 48rem) {
          .header__menu .ul__links__sublinks__grande .contenttab__item h2 {
            font-size: 1.0625rem;
          }
        }
        .header__menu .ul__links__sublinks__grande .contenttab__item ul {
          display: flex;
          flex-direction: column;
          gap: 8px;
        }
        .header__menu .ul__links__sublinks__grande .contenttab__item li {
          padding: 8px;
          transition: 0.3s ease-out;
        }
        .header__menu .ul__links__sublinks__grande .contenttab__item li:hover {
          background-color: #FFEFEB;
          border-radius: 4px;
        }
        .header__menu .ul__links__sublinks__grande .contenttab__item li:hover a {
          color: #FF6237;
        }
        .header__menu .ul__links__sublinks__grande .contenttab__item a {
          display: flex;
          align-items: center;
          gap: 8px;
          color: #C1C1C1;
          font-size: 1rem;
          font-weight: 500;
          line-height: normal;
          transition: 0.3s;
        }
        @media screen and (max-width: 33.75rem) {
          .header__menu .ul__links__sublinks__grande .contenttab__item a {
            gap: 4px;
            font-size: 0.875rem;
          }
        }
        .header__menu .header__menu__sublista-2:hover .ul__links__sublinks__grande {
          display: flex;
        }
      
        .header__menu--laranja {
          background-color: #FF6138;
        }
        .header__menu--laranja .button {
          gap: 8px;
          color: #FF6138;
          font-size: 1rem;
          font-weight: 600;
        }
        .header__menu--laranja .button svg path {
          stroke: #FF6138;
        }
      
        .header__menu--azul-1 {
          background-color: #1C8BCC;
        }
        .header__menu--azul-1 .button {
          gap: 8px;
          color: #1C8BCC;
          font-size: 1rem;
          font-weight: 600;
        }
        .header__menu--azul-1 .button svg path {
          stroke: #1C8BCC;
        }
      
        .header__menu--azul-2 {
          background-color: #2275B5;
        }
        .header__menu--azul-2 .button {
          gap: 8px;
          color: #2275B5;
          font-size: 1rem;
          font-weight: 600;
        }
        .header__menu--azul-2 .button svg path {
          stroke: #2275B5;
        }
      
        .header__menu--azul-3 {
          background-color: #165DAD;
        }
        .header__menu--azul-3 .button {
          gap: 8px;
          color: #165DAD;
          font-size: 1rem;
          font-weight: 600;
        }
        .header__menu--azul-3 .button svg path {
          stroke: #165DAD;
        }
      
        .header__menu--azul-4 {
          background-color: #0A4793;
        }
        .header__menu--azul-4 .button {
          gap: 8px;
          color: #0A4793;
          font-size: 1rem;
          font-weight: 600;
        }
        .header__menu--azul-4 .button svg path {
          stroke: #0A4793;
        }
      
        .header__menu--azul-5 {
          background-color: #1E5A88;
        }
        .header__menu--azul-5 .button {
          gap: 8px;
          color: #1E5A88;
          font-size: 1rem;
          font-weight: 600;
        }
        .header__menu--azul-5 .button svg path {
          stroke: #1E5A88;
        }
      
        .header__menu--amarelo {
          background-color: #E0B109;
        }
        .header__menu--amarelo .button {
          gap: 8px;
          color: #E0B109;
          font-size: 1rem;
          font-weight: 600;
        }
        .header__menu--amarelo .button svg path {
          stroke: #E0B109;
        }
      
        .header__menu--roxo {
          background-color: #524093;
        }
        .header__menu--roxo .button {
          gap: 8px;
          color: #524093;
          font-size: 1rem;
          font-weight: 600;
        }
        .header__menu--roxo .button svg path {
          stroke: #524093;
        }
      </style>

<header class="header__menu header__menu--laranja">
        <nav class="header__menu__navcontainer">
          <a href="/" class="header__menu__nav__logo">
              <img src="https://dsop.com.br/wp-content/themes/DSOP/imgs/img/LogoDSOP.svg" alt="">
          </a>
      
          <div class="header__menu__menumobile">
              <button class="menu__button" aria-label="botão menu">
                  <svg 
                    xmlns="http://www.w3.org/2000/svg" 
                    width="40" height="40" viewBox="0 0 24 24" style="fill: #fff;"
                  >
                    <path class="path_conteudo" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z">
                    </path>
                  </svg>
              </button>
      
              <ul class="header__menu__nav__lista">
                  <li class="header__menu__sublista-1">
                    <p class="ul__links">
                        Sobre 
                        <svg class="arrow" width="24" height="24" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </p>
                    <div class="ul__links__sublinks">
                        <h1>Sobre</h1>
                        <ul>
                          <li><a href="/alumni">Alumni</a></li>
                          <li><a href="/sobre-a-dsop">Quem Somos</a></li>
                          <li><a href="/politica-qualidade">Política de Qualidade</a></li>
                          <li><a href="https://dsop.com.br/contato">Contato</a></li>
                        </ul>
                    </div>
                  </li>
                  <li class="header__menu__sublista-2">
                    <p class="ul__links">
                        Contratar
                        <svg class="arrow" width="24" height="24" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </p>
                    <div class="ul__links__sublinks__grande">
                        <div class="sublinks__grande__tab">
                          <h1>Contratar</h1>
                          
                          <ul class="sublinks__grande__tabs">
                              <li><a href="#" id="para-voce">Para você</a></li>
                              <li><a href="#" id="para-escolas">Para Escolas</a></li>
                              <li><a href="#" id="para-empresas">Para Empresas</a></li>
                          </ul>
                        </div>
              
                        <div class="line"></div>
              
                        <div class="sublinks__grande__contenttab" data-target="para-voce">
                          <div class="contenttab__item">
                              <h2>Cursos</h2>
                              <ul>
                                <li><a href="https://sistema.dsop.com.br/marketplace/75049e9c59da752245287688844a0ad1407df7fb946b7a03b5234d957c729885" target="_blank">Cursos EAD</a></li>
                                <li><a href="/superior-de-tecnologia-em-educacao-financeira">Graduação</a></li>
                                <li><a href="/pos-graduacao">Pós-Graduação</a></li>
                                <li><a href="/mestrado">Mestrado</a></li>
                                <li><a href="/doutorado">Doutorado</a></li>
                              </ul>
                          </div>
              
                          <div class="contenttab__item">
                              <h2>Conteúdo</h2>
                              <ul>
                                <li><a href="https://dflix.com.br/" target="_blank">DFLIX</a></li>
                                <li><a href="https://dsop.com.br/editora/">Editora</a></li>
                                <li><a href="/palestras">Palestras</a></li>
                                <li><a href="/workshop">Workshop</a></li>
                                <li><a href="https://www.youtube.com/@Dinheiroavista/videos" target="_blank">Dinheiro à vista</a></li>
                                <li><a href="https://www.youtube.com/@TVDSOP" target="_blank">TV DSOP</a></li>
                              </ul>
                          </div>
              
                          <div class="contenttab__item">
                              <h2>Pessoal</h2>
                              <ul>
                                <li><a href="https://terapiafinanceira.dsop.com.br/" target="_blank">Terapia Financeira</a></li>
                                <li><a href="/mentoria">Mentoria</a></li>
                              </ul>
                          </div>
                        </div>
              
                        <div class="sublinks__grande__contenttab" data-target="para-escolas">
                          <div class="contenttab__item">
                              <ul>
                                <li><a href="/educacional">Educacional</a></li>
                                <li><a href="/escola-publica">Educacional para Escolas Públicas</a></li>
                              </ul>
                          </div>
                        </div>
                        
                        <div class="sublinks__grande__contenttab" data-target="para-empresas">
                          <div class="contenttab__item">
                              <ul>
                                <li><a href="/in-company">In Company</a></li>
                                <li><a href="/projetos-especiais">Projetos Especiais</a></li>
                                <li><a href="/mentoria">Mentoria</a></li>
                                <li><a href="/palestras">Palestras</a></li>
                                <li><a href="/workshop">Workshop</a></li>
                              </ul>
                          </div>
                        </div>
                    </div>
                  </li>
                  <li class="header__menu__sublista-1">
                    <p class="ul__links">
                        Franquias
                        <svg class="arrow" width="24" height="24" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </p>
                    <div class="ul__links__sublinks">
                        <h1>Franquias</h1>
                        <ul>
                          <li><a href="/franquia">Sobre a Franquia</a></li>
                          <li><a href=" https://dsop.com.br/socios-executivos/">Sócios-Executivos</a></li>
                        </ul>
                    </div>
                  </li>
                  <li><a href="/eventos" class="ul__links">Eventos</a></li>
                  <li><a href="/blog" class="ul__links">Blog</a></li>
                  <li class="header__menu__sublista-1">
                    <p class="ul__links">
                        Lojas
                        <svg class="arrow" width="24" height="24" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </p>
                    <div class="ul__links__sublinks">
                        <h1>Lojas</h1>
                        <ul>
                          <li><a href="https://www.loopi.toys/" target="_blank">Loopi Toys</a></li>
                          <li><a href="https://www.lojadsop.com.br/" target="_blank">Loja Online</a></li>
                        </ul>
                    </div>
                  </li>
              </ul>
              
              <a href="#" id="button-modal" class="button button__small">
                  <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.1055 14.5001V11.4945C17.1055 11.315 17.1055 11.2253 17.0781 11.146C17.054 11.076 17.0145 11.0122 16.9627 10.9592C16.904 10.8993 16.8238 10.8592 16.6632 10.779L12.1055 8.50006M4.10547 9.50006V16.3067C4.10547 16.6786 4.10547 16.8645 4.16349 17.0274C4.21478 17.1713 4.29837 17.3016 4.40785 17.4082C4.53168 17.5287 4.70074 17.6062 5.03882 17.7612L11.4388 20.6945C11.6841 20.8069 11.8067 20.8631 11.9344 20.8853C12.0476 20.9049 12.1633 20.9049 12.2765 20.8853C12.4043 20.8631 12.5269 20.8069 12.7721 20.6945L19.1721 17.7612C19.5102 17.6062 19.6793 17.5287 19.8031 17.4082C19.9126 17.3016 19.9962 17.1713 20.0475 17.0274C20.1055 16.8645 20.1055 16.6786 20.1055 16.3067V9.50006M2.10547 8.50006L11.7477 3.67895C11.8789 3.61336 11.9445 3.58056 12.0133 3.56766C12.0742 3.55622 12.1367 3.55622 12.1977 3.56766C12.2665 3.58056 12.3321 3.61336 12.4632 3.67895L22.1055 8.50006L12.4632 13.3212C12.3321 13.3868 12.2665 13.4196 12.1977 13.4325C12.1367 13.4439 12.0742 13.4439 12.0133 13.4325C11.9445 13.4196 11.8789 13.3868 11.7477 13.3212L2.10547 8.50006Z" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>               
                  <p>Portal</p>
              </a>
          </div>
        </nav>
      </header>