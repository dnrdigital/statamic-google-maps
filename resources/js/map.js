import Fieldtype from './components/GoogleMapFieldtype';

Statamic.booting(() => {
    Statamic.$components.register('google_map-fieldtype', Fieldtype);
});