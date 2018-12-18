@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Sistemas para internet">
            <div class="row">
                <div class="col-lg-3 hoverCard">
                    <cartao cor="#34586d" titulo="O Curso" tipo="1" icone="https://img.icons8.com/metro/1600/graduation-cap.png"></cartao>
                </div>
                <div class="col-lg-3 hoverCard">
                    <cartao cor="#50778e" titulo="Campo de atuação" tipo="1" icone="https://img.icons8.com/metro/1600/building.png"></cartao>
                </div>
                <div class="col-lg-3 hoverCard">
                    <cartao cor="#6e93a9" titulo="O que faz o profissional" tipo="1" icone="https://cdn2.iconfinder.com/data/icons/web-technology-solid/100/solid_user_person_people_usuario-512.png"></cartao>
                </div>
                <div class="col-lg-3 hoverCard">
                    <cartao cor="#8aacbf" titulo="Como ingressar"  tipo="1" icone="https://cdn.iconscout.com/icon/premium/png-256-thumb/notepad-26-191519.png"></cartao>
                </div>
            </div>
            <texto-cartao></texto-cartao>

            <div class="row marginTop">
                <div class="col-lg-2">
                    <cartao cor="#97569b" titulo="Infraestrutura" tipo="2" icone="https://img.icons8.com/metro/1600/compact-camera.png"></cartao>
                </div>

                <div class="col-lg-2">
                    <cartao cor="#6f938d" titulo="Plano Curricular" tipo="2" icone="http://icons.iconarchive.com/icons/custom-icon-design/mono-general-2/512/document-icon.png"></cartao>
                </div>

                <div class="col-lg-2">
                    <cartao cor="#d8745d" titulo="Professores" tipo="2" icone="https://cdn2.iconfinder.com/data/icons/education-people/512/22-512.png"></cartao>
                </div>

                <div class="col-lg-2">
                    <cartao cor="#067b82" titulo="Calendário" tipo="2" icone="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/calendar-512.png"></cartao>
                </div>

                <div class="col-lg-2">
                    <cartao cor="#75606f" titulo="Monitorias" tipo="2" icone="https://cdn4.iconfinder.com/data/icons/basic-17/80/22_BO_open_book-512.png"></cartao>
                </div>
            </div>

            {{--<div class="col-lg-2">--}}
                {{--<cartao cor="pink" titulo="Horário das Aulas" tipo="2" icone="https://img.icons8.com/metro/1600/graduation-cap.png"></cartao>--}}
            {{--</div>--}}
        </painel>


    </pagina>

@endsection