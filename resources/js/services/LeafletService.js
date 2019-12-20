import axios from 'axios';

const LeafletService = {
    getCoordinates(ip) {
        return axios.post('/api/store', {ip});
    },
};

export default LeafletService;
