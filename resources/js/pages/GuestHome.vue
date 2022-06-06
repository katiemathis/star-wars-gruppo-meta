<template>
    <div>
        <GuestHeader />
        <GuestMain />
    </div>
    
</template>

<script>
import GuestHeader from '../components/GuestHeader.vue';
import GuestMain from '../components/GuestMain.vue';

export default {
    name: 'GuestHome',
    components: {
        GuestHeader,
        GuestMain
    },
    data() {
        return {
            navLinks: [
                {
                    to : 'admin-home',
                    name : 'adminhome',
                },
            ]
        }
        
    }

}
</script>

<style>

</style>