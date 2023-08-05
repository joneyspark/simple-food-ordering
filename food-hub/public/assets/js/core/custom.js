// vue.js script
const { createApp } = Vue
createApp({
    data() {
        return {
            change_status: '',
        }
    },
    methods: {
        async orderStatus(e, id) {
            const getStatus = e.target.value
    
            try {
                const response = await axios.get(`/api/order-status/${id}/${getStatus}`);
                if (response.status === 200) {
                    window.location.reload();
                    console.log(response.data);
                }
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        },
    },

}).mount('.status-app')
