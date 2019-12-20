<template>
    <div>
        <form method="post" @submit.prevent="handleClick">
            <label>Enter ip address</label>
            <input type="text" v-model="ip" name="ip" required>
            <button>Click</button>
        </form>

        <map-component :coordinates="coordinates"/>
    </div>
</template>

<script>
    import MapComponent from './Map'
    import LeafletService from '../services/LeafletService';

    export default {
        components: {
            MapComponent,
        },
        data() {
            return {
                coordinates: {},
                ip: '',
            }
        },
        methods: {
            handleClick() {
                LeafletService.getCoordinates(this.ip)
                    .then((response) => {
                        const data = response.data[0];

                        const newCoordinates = {
                            lat: data.latitude,
                            lng: data.longitude
                        };

                        this.coordinates = newCoordinates;
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            },
        },
    }
</script>

<style scoped>

</style>
