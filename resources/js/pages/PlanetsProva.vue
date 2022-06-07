<template>

  <main>
    <div class="container">
      <h1>Elenco dei pianeti</h1>
      <!-- :planets="planets" :searchResults="searchResults" :result="result" 
      v-for= "(result, index) in searchResults" :key= "index" -->

      <div class="row">
        <div class="col-6" v-for="result in planets" :key="result.id">
        <!-- we created a component for "Post" 
            instead of using the previous structure 
            we passed the data through props -->
          <Planet
                :name='result.name'
                :population='result.population'
                :diameter='result.diameter'
                :terrain='result.terrain'
                :films='result.films'
            />
        </div>
      </div>
<!-- 
      <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item" :class="(currentPage == 1)?'disabled':''" ><span class="page-link" @click="getPosts(currentPage - 1)">Previous</span></li>
            <li class="page-item" :class="(currentPage == lastPage)?'disabled':''"><span class="page-link" @click="getPosts(currentPage + 1)">Next</span></li>
        </ul>
    </nav> -->

    </div>
  </main>

 
    
  
</template>

<script>
import Planet from '../components/Planet.vue'
export default {
    name: 'Planets',
    components: {
        Planet,
    },
    props: {
        'searchResults': Array,
        'planets': Array,
        'result': Object,
        //'planetSearchText': String
    }, 
    methods: {
    getPlanets(apiPage) {
      axios.get("/api/planets", {
          'params': {
              'page': apiPage
          }
      })
      .then((response) =>{
          this.planets = response.data.results.data;
      });
    },
    created() {
      this.getPlanets();
    },
    

}}
</script>

<style>

.my_card {
    width: 300px;
    height: 200px;
    overflow: hidden;
}



</style>