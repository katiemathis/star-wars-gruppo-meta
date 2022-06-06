<template>
<div class="main">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-8">
                    <h1>GUERRE STELLARI</h1>
                </div>
                <div class="col-4">
                    <a class="btn-header" href="/admin">Accedi o Registrati</a>
                </div>
                <a class="btn-header" href="/logout">Logout</a>
                                   
                                       
                                   

                                    <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> -->
                                
            </div>
        </div>
    </div>
  
</template>

<script>
export default {
    Name: 'GuestHeader',

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