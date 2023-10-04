@extends('layouts.fans')


@section('content')

<div class="initial-content">
    <div class="navbar-links">
        <ul class="navbar-icons">
            <li><a href="https://open.spotify.com/intl-pt/artist/3gZAVWMzKOt1tVO4tHoGwo" target="_blank"><i class="fa-brands fa-spotify"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCUyqk6A7jy6bE3IVD_VoJtw" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="https://www.instagram.com/outroeu/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.tiktok.com/@outroeu" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
            <li><a href="https://twitter.com/outroeuoficial?lang=en"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/OutroEuOficial/?locale=pt_BR" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
        </ul>
        <h1 class="duo-name">OUTROEU</h1>
        <ul class="navbar-list">
            <li><a href="#musica">MÚSICAS</a></li>
            <li><a href="#videos">VÍDEOS</a></li>
            <li><a href="#o-duo">O DUO</a></li>
            <li><a href="#shows">SHOWS</a></li>
            <li><a href="#contato">CONTATO</a></li>
            <li><a href="https://heartmerch.com.br/loja/outroeu/" target="_blank">LOJA</a></li>
        </ul>
    </div>
    <!-- <div class="bottom-sign">
        <a href="#musica"><i class="fa-solid fa-chevron-down"></i></a>
    </div> -->
</div>
<div id="musica" class="musica">
    <h1 class="title">MÚSICAS</h1>
    <hr class="divisoria-black">
    <div class="iframe-container">
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/3gZAVWMzKOt1tVO4tHoGwo?utm_source=generator" width="72%" height="480" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    </div>
</div>
<div id="videos" class="videos">
    <h1 class="title">VÍDEOS</h1>     
    <hr class="divisoria">
    
</div>
<div id="o-duo" class="sobre">
    <h1 class="title">SOBRE O DUO</h1>
    <hr class="divisoria">
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1" onclick="manualSelect(this)">
            <input type="radio" name="radio-btn" id="radio2" onclick="manualSelect(this)">
            <input type="radio" name="radio-btn" id="radio3" onclick="manualSelect(this)">
            <input type="radio" name="radio-btn" id="radio4" onclick="manualSelect(this)">
            <div class="slide first">
                <p>
                    O duo, que foi primeiramente visto como banda<br>
                    no reality show Superstar, exibido pela Rede Globo,<br>
                    começou e apresentando com a emocionante<br>
                    “Coisa de Casa”, e conquistaram o público<br>
                    desde o primeiro dia, batendo recordes de votos <br>
                    e alcançando o terceiro lugar na competição.
                </p>
            </div>
            <div class="slide">
                <p>
                    Depois disso, lançaram seu primeiro álbum “OutroEu”<br>
                    e já começaram com música na trilha sonora<br>
                    de novela, a música “Ai de Mim”, com  a <br>
                    participação de Sandy, tocava nas telinhas<br>
                    brasileiras na novela “O Outro Lado do Paraíso”,<br>
                    e marcou a transição da banda para o duo.
                </p>
            </div>
            <div class="slide">
                <p>
                    Um novo capítulo na vida de Mike e Guto começou<br>
                    quando embarcaram na primeira turnê pelo Brasil.<br>
                    Depois disso surgiram novas colaborações, como a<br>
                    música “Outrória”, em parceria com ANAVITÓRIA<br>
                    e assinaram seu contrato com a Universal Music Brasil.
                </p>
            </div>
            <div class="slide">
                <p>
                    À medida que lançavam novos singles, OUTROEU<br>
                    reforçava sua habilidade em criar músicas cativantes.<br>
                    Suas características musicais, que mesclam folk <br>
                    com elementos de pop e MPB, são enraizadas<br>
                    em influências que vão de Maria Gadú a Ed Sheeran,<br>
                    passando por Coldplay e Los Hermanos.
                </p>
            </div>
            <div class="slide">
                <p>
                    O nome "OUTROEU" reflete a essência do duo,<br>
                    cujas músicas exploram a autoconsciência e conexões profundas.<br>
                    A jornada de Mike Tulio e Guto Oliveira,<br>
                    desde os primeiros acordes até os palcos nacionais,<br>
                    é uma ode à paixão pela música e à autenticidade<br>
                    que os torna únicos no universo musical brasileiro.
                </p>
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
</div>
<div id="shows" class="agenda">
    <h1 class="title">AGENDA</h1>
    <hr class="divisoria-white">
    <div class="eventos">
        <div class="evento">
            <div class="data">
                <div class="data-content">
                    <h2>28</h2>
                    <p>outubro</p>
                </div>
            </div>
            <div class="info">
                <div class="detail-info">
                    <h2>OUTRO EU VOZ E VIOLÃO NO BONA</h2>
                    <p>Sábado, às 21h</p>
                    <p id="local"><i class="fa-solid fa-location-dot"></i>SÃO PAULO | BONA CASA DE MÚSICA</p>
                </div>
                <a href="https://www.eventim.com.br/event/outroeu-voz-e-violao-no-bona-bona-casa-de-musica-17524274/?affiliate=DEZ" class="button" target="_blank">Ingressos</a>
            </div>
        </div>
        <div class="evento">
            <div class="data">
                <div class="data-content">
                    <h2>28</h2>
                    <p>outubro</p>
                </div>
            </div>
            <div class="info">
                <div class="detail-info">
                    <h2>OUTROEU VOZ E VIOLÃO NO BONA - SESSÃO EXTRA!</h2>
                    <p>Sábado, às 18h</p>
                    <p id="local"><i class="fa-solid fa-location-dot"></i>SÃO PAULO | BONA CASA DE MÚSICA</p>
                </div>
                <a href="https://www.eventim.com.br/event/outroeu-voz-e-violao-no-bona-bona-casa-de-musica-17587613/?affiliate=DEZ" class="button" target="_blank">Ingressos</a>
            </div>
        </div>
    </div>
</div>
<div id="contato" class="contato">
    <h1 class="title" style="color:black!important;">CONTATO</h1>
    <hr class="divisoria-black">
    <div class="contatos">
        <a href="https://t.me/outroeugrupo" target="_blank">https://t.me/outroeugrupo<br></a>
        <a href="mailto:contato@outroeu.com.br">contato@outroeu.com.br<br></a>
        <a href="https://wa.me/5584999826087" target="_blank">+55 (84) 99982-6087<br></a>
    </div>
</div>
<div class="footer">
    <img src="{{ asset('images/universal.png') }}" alt="Universal Music Logo">
    <span><a href="https://www.universalmusic.com.br/artista/outroeu/" target="_blank">https://www.universalmusic.com.br/artista/outroeu</a></span>
    <span style="font-size:13px;" class="wixui-rich-text__text">&nbsp;© 2020 OUTROEU PRODUCOES MUSICAIS</span>
</div>

@endsection