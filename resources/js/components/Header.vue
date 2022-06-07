<template>
    <div class="main">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-8 d-inline-flex">
                    <img src="../assets/starwarslogo.png" alt="logo">
                    <nav>
                    <ul class="nav justify-content-center mt-3">
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'pianeti-home'}">Home</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'pianeti'}">Pianeti</router-link>
                        </li>
                    </ul>

                    </nav>

                </div> 

                <!-- search bar where user inputs partial or full planet name -->
                <!-- on click, user sees all planets which contain search input -->
                <div class="col-4">
                    <div class="row mt-4">                    
                        <input type="text" placeholder="Inserisci nome pianeta..." 
                        v-model= "planetSearchText" v-on:keyup.enter="$emit('textEnteredEvt', planetSearchText)">
                        <!-- by using the $emit function, the details in this component get sent to the "padre" app -->
                        <button class='btn' @click="$emit('textEnteredEvt', planetSearchText)"><router-link class="nav-link button-nav" :to="{name: 'filtered-planets'}">RICERCA</router-link></button>
                    </div>
                    <div class="row mt-2">
                        <a class="btn-header" href="/">Login e Registrazione</a>
                    </div>

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
            navLinks: [
                {
                    to : 'pianeti-home',
                    name : 'Home',
                },
                {
                    to : 'pianeti',
                    name : 'Planets',
                },
            ],
        }
    },



    

}
</script>

<style lang="scss" scoped>

@import '../../sass/_variables.scss';

.main {
    background-color: #000;
    width: 100%;
    height: 100px;

    .container {
        width: 90%;
        margin: auto;

        .col-8 {
            align-self: center;

            img {   
                max-height: 80px;
            }

            p {
                color: $starWarsYellow
            }
        }

        .col-4 {
            align-self: center;

            .btn {
                background-color: $starWarsYellow;
                color: white;
                max-height: 30px;
                padding: 0;
            }
            

        }

    }

    input {
        max-height: 30px;
    }

    .button-nav{
        color: white;
        padding-top: 5px;
    }


}

</style>