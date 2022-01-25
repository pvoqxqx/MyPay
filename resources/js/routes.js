import GamesComponent from "./components/GamesComponent";
import GamesTable from "./components/GamesTable";
import ExampleComponent from "./components/ExampleComponent";
import OffersComponent from "./components/OffersComponent";

export default {
    mode: 'history',
    fallback: true,
    routes: [
        {
            path: '/',
            component: GamesComponent,
            name: 'all-games',
        },
        {
            path: '/:gameName/:serviceName',
            component: GamesTable,
            props: true,
        },
        {
            path: '/:gameName/:serviceName/offers',
            component: OffersComponent,
            props: true,
        },
        {
            path: '/example',
            component: ExampleComponent,
        },
    ],
}
