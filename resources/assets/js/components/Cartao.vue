<template>
    <div class="cartao">
        <div class="small-box" v-bind:style="defineCor" v-on:click="botaoClicado(titulo)">
            <div class="inner">
                <img :src="icone">
            </div>
            <h3>{{titulo}}</h3>
        </div>
    </div>

</template>

<script>
    export default {

        props: ['qtd', 'titulo', 'url', 'cor', 'icone', 'tipo'],
        computed: {
            defineCor: function(){
                return "background-color: "+this.cor+" !important";
            }
        },
        methods: {
            botaoClicado(titulo){
                let botao;
                botao = titulo;
                console.log(botao);
                if(this.tipo=="1"){
                    this.$store.commit('setItens', botao)
                }


            }
        }

    }

</script>

<style>


    img {
        width: 50px;
    }

    .small-box {

        border-radius: 2px;
        position: relative;
        display: block;
        margin-bottom: 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        color: #ffffff;
    }

    .cartao:hover{
        background-color: red;
    }



    .col-lg-3{
        padding: 0px;
    }
    .small-box>.inner {

        padding: 15px;
        padding-left: 120px;

    }

    .small-box h3,
    .small-box p {

        z-index: 5;

    }

    .small-box h3 {

        font-size: 18px;
        white-space: nowrap;
        padding: 0;
        text-align: center;
        padding-bottom: 15px;

    }

    p {

        margin: 0 0 10px;
        text-align: center;
        font-size: 15px;

    }

    .small-box p {

        font-size: 15px;

    }

    .hoverCard:hover {
        background-color: #73bebf;
    }

    .marginTop {
        margin-top: 80px;
    }

    .col-lg-2{
        width: 19.9%;
    }

</style>
