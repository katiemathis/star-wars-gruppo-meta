<template>



    <div class="gallery_container d-inline-flex justify-content-center">
                <div class="col-10 m-auto align-self-center">
                    <h1 class="my-2">Risultati</h1>
                    <div class="row d-inline-flex">
                        <div class="card my_card m-2" v-for="(result,index) in searchResults" :key="index"> 
                            <div class="card-body" >
                                <h5 class="card-title">{{result.name}}</h5>                        
                                <ul>
                                    <li>Populazione: {{result.population}}</li>
                                    <li>Diametro: {{result.diameter}}</li>
                                    <li>Terreno: {{result.terrain}}</li>
                                    <li>Film: {{result.films}}</li>
                                </ul>                    
                          </div>

                        </div>
                    </div>

  </div>
</div>
  
        
</template>

<script>
//const axios = require('axios');




export default {
    name: 'FilteredPlanets',
    props: {
        'searchResults': { type: Array, required: true},
        //'result': Object
    }
}

</script>

<style>

.my_card {
  width: 15vw;
  max-height: 200px;
  overflow: hidden;
}

h1 {
  color: white;
}





</style>