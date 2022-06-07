<template>
      <div class="gallery_container d-inline-flex justify-content-center">
                    <div class="row d-inline-flex">
                        <div class="card my_card m-2">
                            <div class="card-body">
                                <h5 class="card-title">{{name}}</h5>                        
                                <ul>
                                    <li>Populazione: {{population}}</li>
                                    <li>Diametro: {{diameter}}</li>
                                    <li>Terreno: {{terrain}}</li>
                                    <li>Film: {{films}}</li>
                                </ul>
                               
                            </div>

                        </div>
                    </div> 
    </div>
</template>

<script>
export default {
    name: 'Planet',
    props: ['name', 'population', 'diameter', 'terrain', 'films']

}
</script>

<style>

</style>