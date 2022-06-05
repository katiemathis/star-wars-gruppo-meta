<template>
    <div>
        <ul>
            <li>{{searchResults.name}} PROVA</li>
        </ul>
    </div>
    
  
</template>

<script>
export default {
    name: 'Main',
    props: {
        'searchResults': Array,
        'planets': Array
    }, 

}
</script>

<style>

</style>