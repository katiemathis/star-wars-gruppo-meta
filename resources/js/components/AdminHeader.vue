<template>
    <div class="main">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-8">
                    <h1>GUERRE STELLARI</h1>
                </div>

                <!-- search bar where user inputs partial or full planet name -->
                <!-- on click, user sees all planets which contain search input -->
                <div class="col-4">
                    <input type="text" placeholder="Inserisci nome pianeta..." v-model= "planetSearchText" v-on:keyup.enter="$emit('textEnteredEvt', planetSearchText)">
                    <!-- by using the $emit function, the details in this component get sent to the "padre" app -->
                    <button class='btn' @click="$emit('textEnteredEvt', planetSearchText)">RICERCA</button>
                </div>
            </div>
        </div>
    </div>
  
</template>

<script>
export default {
    name: 'AdminHeader',
    data () {
        return {
            planetSearchText: '',
        }
    },
    /*methods: {
        searchEntered() {
            alert(this.movieSearchText)
            this.textEntered = this.movieSearchText
        }
    }*/


    

}
</script>

<style lang="scss" scoped>

@import '../../sass/_variables.scss';

.main {
    background-color: $colorHeader;
    width: 100%;
    height: 70px;

    .container {
        width: 90%;
        margin: auto;

        
        .col-8 {
            align-self: center;

            h1 {                    
                color: $starWarsYellow;
                line-height: 70px;
            }
        }
        .col-4 {
            align-self: center;

            .btn {
                background-color: $starWarsYellow;
                color: white;
            }
        }

    }
}

</style>