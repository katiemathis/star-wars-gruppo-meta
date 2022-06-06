<template>
  <div>
      <AdminHeader @textEnteredEvt="searchPlanets" />
      <AdminMain :searchResults="searchResults" :planets="planets" :result="result"
      v-for= "(result, index) in searchResults" :key= "index"/>
  </div>
</template>

<script>
//const axios = require('axios');

import AdminHeader from '../components/AdminHeader.vue'
import AdminMain from '../components/AdminMain.vue'

export default {
    name: 'App',
    components: {
        AdminHeader,
        AdminMain

 
  },
  data() {
      return {
          planets: [],
          planetNameList: [],
          searchResults: [],
      }
  },
  methods: {
    getPlanets() {
      // prelievo tutti i pianeti
      axios.get('api/planets')
        .then((response) => {
            this.planets = response.data.results;
            console.log('planets' + this.planets)
          
          for(this.i=0;this.i<this.planets.length;this.i++){
            this.planetNameList.push(this.planets[this.i].name);
            console.log('planetNameList' + this.planetNameList)
          };
        
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
      this.planets.forEach((planet) => {
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
      this.getPlanets();
      
    },
  }

</script>

<style>

</style>