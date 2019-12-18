<template>


<div class="test">
        <l-map :zoom="zoom" :center="center">
            <l-tile-layer :url="url"></l-tile-layer>
            <l-marker :lat-lng="marker"></l-marker>
        </l-map>
</div>

</template>

<script>

    import { LMap, LTileLayer, LMarker } from "vue2-leaflet";
    export default {
        name: 'Map',
        components: {
            LMap,
            LTileLayer,
            LMarker
        },
        data() {
            return {
                zoom:13,
                center: L.latLng(this.$attrs.lat, this.$attrs.lon),
                url:'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
                marker: L.latLng(this.$attrs.lat, this.$attrs.lon),
            }
        },
    }
</script>

<style scoped>
    .vue2leaflet-map {
        height: 500px;
        width: 500px;
    }
</style>
