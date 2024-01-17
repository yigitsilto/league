import {createRouter, createWebHistory} from 'vue-router'
import LeagueTable from "../views/LeagueTable.vue";
import Fixture from "../views/Fixture.vue";
import Matches from "../views/Matches.vue";

const routes = [
    {
        path: '/',
        name: 'LeagueTable',
        component: LeagueTable
    },
    {
        path: '/fixtures',
        name: 'Fixtures',
        component: Fixture
    },
    {
        path: '/matches',
        name: 'Matches',
        component: Matches
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;