<template>

  <div class="gallery_container justify-content-center align-items-center">
      <div class="col-8 m-auto">
        <div class="row d-inline-flex my-5">
          <img class="yoda" src="../assets/pexels-connor-kelley-7499839.jpg" alt="yoda">
          <div class="card my_home_card m-2"> 
      
              <div class="card-body">
              <h5 class="card-title">Benvenuto</h5>                        
                <p>
                  Qua troverai i pianeti di Star Wars. Per iniziare cliccare "Pianeti"
                </p>
                <p>Che la forza sia con te.</p>
          </div>

        </div>


      </div>
        

      </div>
          
    </div>


</template>

<script>
//const axios = require('axios');

//import Header from '../components/Header.vue'



export default {
    name: 'Home',
    components: {
      //Header
    }

    
  }

</script>

<style>

.yoda {
  width: 300px;
  border-radius: 5px;

}

.my_home_card {
  width: 30vw;
}





</style>