<template>
    <div class="flex flex-col items-center justify-center w-screen p-6 ">

      <div class="flex flex-col mt-6">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden sm:rounded-lg">
                      <table class="min-w-full text-sm text-gray-400">
                          <thead class="bg-gray-800 text-xs uppercase font-medium">
                          <tr>
                              <th></th>
                              <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                  Home Team
                              </th>
                              <th></th>
                              <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                  Away Team
                              </th>
                              <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                  Week
                              </th>

                          </tr>
                          </thead>
                          <tbody class="bg-gray-800">

                          <tr v-for="(item, index) in fixtures" :key="index" class="bg-black bg-opacity-20">
                              <td class="pl-4">
                                  {{index + 1}}
                              </td>
                              <td class="flex px-6 py-4 whitespace-nowrap">
                                  <span class="ml-2 font-medium">{{ item.home_team }}</span>
                              </td>
                              <td>VS</td>

                              <td class="px-6 py-4 whitespace-nowrap">
                                  {{ item.away_team }}
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                  {{ item.week }}
                              </td>
                          </tr>

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>





  </div>
</template>
<script>

import axios from "axios";
import Table from "../components/Table.vue";
export default {
  name: "Fixture",
    components: {Table},
  data() {
    return {
      fixtures: [],
    };
  },
  mounted() {
    axios
      .get("fixtures")
      .then(response => {
        this.fixtures = response.data.data;
      })
      .catch(error => {
          console.log(error)
      })
  }
};

</script>