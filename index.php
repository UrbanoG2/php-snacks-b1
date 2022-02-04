

<!-- Milestone 1
A partire dall'array realizzato stamattina, realizziamo una API che chiameremo con Vue. -->


<!-- 
Milestone 3
Inseriamo un sistema di filtraggio con Vue su un paio di campi a scelta!
Bonus
Realizziamo una pagina php in cui stampiamo le auto e effettuiamo anche un filtro. -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
<h1 class="title">Listino auto</h1>

 <div class="container" id="app" >
    <div v-for="(car,index) in cars"  class="contained">
        <ul>
            <li class="main-name" > <h1> {{ car.casaAutomobilistica }} {{ car.modello }}  </h1> </li>
            <li> {{ car.modello }} </li>
            <li> {{ car.casaAutomobilistica }} </li>
            <li> Prezzo: {{ car.prezzo }} </li>
            <li> Chilometri percorsi: {{ car.chilometraggio }} </li>
            <li> Cilindrata: {{ car.cilindrata }} </li>
            <li> Cavalli: {{ car.potenza }} </li>
            <li> Anno di produzione: {{ car.anno }} </li>
        </ul>
        <div class="img-container">
            <img :src="`img/${car.img}`" :alt="car.modello">
        </div>
    </div>
</div>


<!-- cdn axios e script js -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>