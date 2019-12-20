<template>

    <div>
        <l-map :zoom="zoom" :center="center">
            <l-tile-layer :url="url"></l-tile-layer>
            <l-marker :lat-lng="marker"></l-marker>
        </l-map>
    </div>

</template>

<script>

    import {LMap, LTileLayer, LMarker} from "vue2-leaflet";

    export default {
        props: {
            coordinates: Object,
        },
        name: 'Map',
        components: {
            LMap,
            LTileLayer,
            LMarker
        },
        watch: {
            coordinates(newValue) {
                if (newValue.lng && newValue.lat) {
                    this.center = L.latLng(newValue.lat, newValue.lng);
                    this.marker = L.latLng(newValue.lat, newValue.lng);
                }
            },
        },
        data() {
            return {
                zoom: 7,
                center: L.latLng(this.coordinates.lat || 47.8555, this.coordinates.lng || 35.2916),
                url: 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
                marker: L.latLng(this.coordinates.lat || 47.8555, this.coordinates.lng || 35.2916),
            }
        },
    }
</script>

<style scoped>
    .vue2leaflet-map {
        height: 500px;
        width: 1000px;
    }
</style>
