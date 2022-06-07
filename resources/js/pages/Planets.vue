<template>

<div>

    <div class="gallery_container d-inline-flex justify-content-center">
                <div class="col-10 m-auto align-self-center">
                    <h1 class="my-2">Elenco pianeti</h1>


                    <div class="row d-inline-flex">
                        <div class="card my_card m-2" v-for="(planet, index) in planets" :key="index"> 
                            <div class="card-body">
                                <h5 class="card-title">{{planet.name}}</h5>                        
                                <ul>
                                    <li>Populazione: {{planet.population}}</li>
                                    <li>Diametro: {{planet.diameter}}</li>
                                    <li>Terreno: {{planet.terrain}}</li>
                                    <li>Film: {{planet.films}}</li>
                                </ul>                    
                          </div>

                        </div>
                    </div>
                    <!-- <div class="row d-inline-flex">
                        <div class="card my_card m-2" v-for="(result, index) in searchResults" :key="index"> 
                            <div class="card-body">
                                <h5 class="card-title">{{result.name}}</h5>                        
                                <ul>
                                    <li>Populazione: {{result.population}}</li>
                                    <li>Diametro: {{result.diameter}}</li>
                                    <li>Terreno: {{result.terrain}}</li>
                                    <li>Film: {{result.films}}</li>
                                </ul>                    
                          </div>

                        </div>
                    </div> -->
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                          <li class="page-item" :class="(currentPage == 1)?'disabled':''" ><span class="page-link" @click="getPlanets(currentPage - 1)">Previous</span></li>
                          <li class="page-item" :class="(currentPage == 6)?'disabled':''"><span class="page-link" @click="getPlanets(currentPage + 1)">Next</span></li>
                      </ul>
                    </nav>
                    
                </div>
  </div>
</div>
  
        
</template>

<script>
//const axios = require('axios');

//import Header from '../components/Header.vue'


export default {
    name: 'Planets',
    components: {
      //Header
    },
    data() {
        return {
            planets: [],
            //planetNameList: [],
            //searchResults: [],
            //keyword: '',
            currentPage: 1,
            lastPage: null,
        };
    },
    methods: {
    getPlanets(apiPage) {
      // prelievo tutti i pianeti e provo paginate(10)
      axios.get('api/planets', {
        'params': {
          'page': apiPage
        }
      })
        .then((response) => {
            this.currentPage = response.data.results.current_page;
            this.planets = response.data.results.data;
            this.lastPage = response.data.results.last_page;
            //console.log('planets' + this.planets)
          
          // for(this.i=0;this.i<this.planets.length;this.i++){
          //   this.planetNameList.push(this.planets[this.i].name);
          //   console.log('planetNameList' + this.planetNameList)
          // };
        
      })
      .catch(function (error) {
      // handle error
      console.log(error);
      })
      .then(function() {
   
      });
    },
    //utilizzo la barra di ricerca per filtrare i pianeti
    searchPlanets(keyword) {

      this.searchResults = [];

      console.log('keyword ' + keyword);
      console.log('planets search' + this.planets);
      
      //uso forEach per trovare i pianeti che hanno le lettere che l'utente mette nella barra di ricerca
      this.planets.data.forEach((planet) => {
        if(planet.name.toLowerCase().includes(keyword.toLowerCase())) {
          //qui uso push per mettere solo i pianeti filtrati nell'array dei search results
          this.searchResults.push(planet)
          console.log('search results' + this.searchResults)
        } else {
          console.log('no planets found')
        }
      });

      },
    },
    created(){
      this.getPlanets(1);
      
    },
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