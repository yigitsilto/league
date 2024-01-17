<template>
        <!-- Component Start -->
        <div class="flex flex-col mt-6">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden sm:rounded-lg">
                        <table class="min-w-full text-sm text-gray-400">
                            <thead class="bg-gray-800 text-xs uppercase font-medium">
                            <tr>
                                <th></th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    Club
                                </th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    Played
                                </th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    W
                                </th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    D
                                </th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    L
                                </th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    Pts
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-gray-800">

                            <tr v-for="(item, index) in data" :key="index" class="bg-black bg-opacity-20">
                                <td class="pl-4">
                                    {{index + 1}}
                                </td>
                                <td class="flex px-6 py-4 whitespace-nowrap">
                                    <span class="ml-2 font-medium">{{ item.club }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ item.played }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ item.won }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ item.drawn }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ item.lost }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ item.points }}
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Component End  -->


</template>
<script>

export default {
    props: {
        data: {
            type: Array,
            required: true
        }
    },
}

</script>