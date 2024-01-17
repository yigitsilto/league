<template>
    <div class="relative min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <img src="https://www.premierleague.com/resources/rebrand/v7.137.1/i/elements/pl-main-logo.png"
                     height="100" width="100" alt="">
            </div>
        </div>

        <!--        3 link in a row-->
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center p-4">
                <router-link to="/"
                             class="text-2xl font-bold text-gray-800 dark:text-gray-100 hover:text-gray-700 dark:hover:text-gray-300">
                      Team Standings |
                </router-link>
                <router-link to="/matches"
                             class="text-2xl font-bold text-gray-800 dark:text-gray-100 hover:text-gray-700 dark:hover:text-gray-300">
                     Matches |
                </router-link>

                <router-link to="/fixtures"
                             class="text-2xl font-bold text-gray-800 dark:text-gray-100 hover:text-gray-700 dark:hover:text-gray-300">
                      Fixtures
                </router-link>
            </div>
        </div>
            <router-view/>


        </div>

</template>
<script>
import Table from "./components/Table.vue";

export default {
    components: {
        Table
    }
}


</script>