<template>
    <div>
        <h2>Map</h2>
        dasdasdd
        <div v-for="url in urldata">
            <div>
                {{url.latitude}}
            </div>
            <div>
                {{url.longitude}}
            </div>
            <div>
                {{url.time_zone}}
            </div>
        </div>

    </div>
</template>

<script>

    export default {
        props: [
          'urldata'
        ],
        mounted() {
            this.update();
            console.log(`kek`);
        },
        methods: {
          update: function () {
              console.log(`urldata`, this.urldata);
          }
        },
    }
</script>

<style scoped>

</style>
