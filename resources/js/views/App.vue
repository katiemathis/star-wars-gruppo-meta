<template>
  <div class="app_container">
      <Header @textEnteredEvt="searchPlanets" />
      <Main :searchResults="searchResults" />
      <Footer />



      
  </div>
</template>

<script>
//const axios = require('axios');

import Header from '../components/Header.vue'
import Main from '../components/Main.vue'
import Footer from '../components/Footer.vue'


export default {
    name: 'App',
    components: {
        Header,
        Main,
        Footer,
        
    },
    data() {
        return {
            planets: [],
            //planetNameList: [],
            searchResults: [],
            //keyword: '',
        }
    },
    methods: {
    getPlanets() {
      // prelievo tutti i pianeti
      axios.get('api/planets')
        .then((response) => {
            this.planets = response.data.results;
            console.log('planets' + this.planets)
          
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
          //planet.visible = true;
          //console.log('search results' + this.searchResults)
        } else {
          //planet.visible = false;
          console.log('no planets found')
        }
      });

      },
    },
    created(){
      this.getPlanets();
      
    },
}

</script>

<style>

.app_container {
    background-image: url('../assets/pexels-david-kopacz-4994765.jpg');
    object-fit: cover;
    min-height: 100vh;
    min-width: 100%;
    background-repeat: no-repeat;
    

}



</style>