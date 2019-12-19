<template>
    <div>
        <h2>Map</h2>

        <div>
            {{urldata[0].latitude}}
        </div>
        <div>
            {{urldata[0].longitude}}
        </div>
        <div>
            {{urldata[0].time_zone}}
        </div>

        <div class="map">
            <Map :lat="urldata[0].latitude" :lng="urldata[0].longitude"/>
        </div>

    </div>
</template>

<script>

    import Map from './Map'

    export default {

        props: {
            urldata: Array,
        },
        components: {
            Map,
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function () {
                console.log(`methods`, this.urldata);
            }
        },
    }
</script>

<style scoped>
    .map {
        margin-top: 100px;
        display: flex;
        justify-content: center;
    }
</style>
