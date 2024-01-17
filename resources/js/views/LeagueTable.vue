<template>
    <div class="flex flex-col items-center justify-center w-screen ">
        <button v-on:click="doSimulation" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Simulation All Matches</button>
       <Table :data="tableData" />
   </div>
</template>
<script>
    import Table from '../components/Table.vue';
    import axios from 'axios';
    export default {
        components: {
            Table
        },
        data() {
            return {
                tableData: []
            }
        },
        mounted() {
            this.getTableData();
        },
        methods: {
            getTableData() {
                axios.get('team-standings')
                    .then(response => {
                        this.tableData = response.data.data;
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
            doSimulation() {
                axios.post('simulate')
                    .then(response => {
                        this.getTableData()
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        }
    }
</script>