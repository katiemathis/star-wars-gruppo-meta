<template>
    <div class="gallery_container d-inline-flex justify-content-center container">
                <div class="col-10 m-auto align-self-center">
                    <h1 class="my-2">Risultati</h1>
                    <div class="row d-inline-flex">
                        <div class="card my_card m-2" v-for="(result,index) in searchResults" :key="index"> 
                            <div class="card-body p-1" >
                                <h5 class="card-title">{{result.name}}</h5> 
                                <ul>
                                    <li><span>Populazione:</span> {{result.population}}</li>
                                    <li><span>Diametro:</span> {{result.diameter}}</li>
                                    <li><span>Terreno:</span> {{result.terrain}}</li>
                                    <li><span>Url Film:</span> {{result.films}}</li>  
                                </ul>                                        
                          </div>

                        </div>
                    </div>

  </div>
</div>
  
        
</template>

<script>
export default {
    name: 'FilteredPlanets',
    props: {
        'searchResults': { type: Array, required: true},
        
    }
}

</script>

<style>

.my_card {
  width: 15vw;
  height: 400px;

}

h1 {
  color: white;
}

li {
    list-style-type: none;
    padding-left: 0;
}

span {
    font-weight: bold;
}





</style>