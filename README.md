Explicación cómo hacer que themes, plugins soporten REST API wordpress, la idea la obtuve de:

https://stackoverflow.com/questions/56460557/how-to-include-meta-fields-in-wordpress-api-post

Lo que básicamente hay que hacer es:
1. Al momento en qué la clase ha sido registrada, si no tiene 'show_in_rest' true y en 
'support' está 'custom-fields', hay que agregarlo
2. Al momento de registrar los meta fields con register_meta(), 'show_in_rest' debe ser true


Hay que tener un par de cosas en mente:
- No modificar directamente el theme y/o plugin, al momento de recibir actualizaciones
las modificaciones realizadas desaparecerán
- Solo es necesario agregar lo que nos interesa, solo eso

En la carpeta examples/ tengo ejemplos de cómo se ha realizado

#### houzez

houzez-child es el tema hijo de houzez, lo que hice fue añadir 'show_in_rest' a los meta fields
houzez-theme-functionality-child es un plugin hijo, lo que hice fue añadir 'custom-fields' a 'support'