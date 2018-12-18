<template>
    <div class="areaTexto" v-on:click="alteraTexto()">
        <h1>{{ this.$store.state.itens}}</h1>

        {{alteraTexto()}}

        <p id="aba1" class="lead">     O egresso do Curso Superior de Tecnologia em Desenvolvimento de Sistemas para Internet deverá ter uma formação ética,
            técnica, criativa e humanística, que possibilite, ao futuro profissional, ser um cidadão responsável,
            empreendedor, investigador e crítico, apto a desempenhar sua profissão, interagindo em uma sociedade plena
            de transformações, no que concerne ao desenvolvimento de sistemas de informação para a internet e às tecnologias
            associadas a estes.<br> O enfoque do curso proposto é voltado para web, em que serão trabalhadas competências
            relacionadas às áreas de programação, a banco de dados e a redes de computadores.</p>

        <p id="aba2" class="lead escondido">
            Os futuros egressos do curso estarão aptos para assumir os seguintes postos identificáveis no mercado de trabalho local
            e regional: administrador de banco de dados; administrador de redes; administrador de sistema operacional;
            analista de aplicações web; analista de desenvolvimento de sistemas; analista de sistemas; analista de suporte;
            analista de ti; consultor de informática; consultor de sistemas; desenvolvedor de sistemas; desenvolvedor web;
            programador de computador; programador web; web designer.
        </p>

        <p id="aba3" class="escondido">
            teste 3
        </p>

        <p id="aba4" class="escondido">
            teste 5
        </p>
    </div>

</template>

<script>
    export default {
        name: "TextoCartao",
        data(){
            return {
                nome:''
            }
        },
        methods:{
            alteraTexto: function(){
                if(this.$store.state.itens=="Campo de atuação"){
                    $("#aba1").addClass('escondido');
                    $("#aba2").removeClass('escondido');
                    $("#aba3").addClass('escondido');
                    $("#aba4").addClass('escondido');
                }else if(this.$store.state.itens=="O que faz o profissional"){
                    $("#aba1").addClass('escondido');
                    $("#aba2").addClass('escondido');
                    $("#aba3").removeClass('escondido');
                    $("#aba4").addClass('escondido');
                }else if(this.$store.state.itens=="Como ingressar"){
                    $("#aba1").addClass('escondido');
                    $("#aba2").addClass('escondido');
                    $("#aba3").addClass('escondido');
                    $("#aba4").removeClass('escondido');
                }else {
                    $("#aba1").removeClass('escondido');
                    $("#aba2").addClass('escondido');
                    $("#aba3").addClass('escondido');
                    $("#aba4").addClass('escondido');
                }
            }
        }
    }
</script>

<style scoped>
    .areaTexto{
        background-color: #34586d;
        margin: -42px -15px -15px -15px;
        /*margin-top: -20px;*/
        color: white;
        padding: 15px;

    }

    .escondido {
        display: none;
    }


</style>