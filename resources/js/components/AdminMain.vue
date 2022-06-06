<template>
    <div>
        <!-- <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nome: {{result.name}}</h5>
                <p class="card-text">Il pianeta {{result.name}} ha una popolazione di {{result.population}}, un diametro di {{result.diameter}}. 
                    Il terreno sul pianeta {{result.name}} è {{result.terrain}} </p>
                <ul>
                    <li>{{result.films}}</li>
                </ul>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div> -->
        <div>
            <ul>
                <li>Nome: {{result.name}}</li>
                <li>Populazione: {{result.population}}</li>
                <li>Diametro: {{result.diameter}}</li>
                <li>Terreno: {{result.terrain}}</li>
                <li>Film: {{result.films}}</li>
            </ul>
        </div>

    </div>
    
  
</template>

<script>
export default {
    name: 'AdminMain',
    props: {
        'searchResults': Array,
        'planets': Array,
        'result': Object,
        'planet': Object
    }, 
    

}
</script>

<style>

</style>