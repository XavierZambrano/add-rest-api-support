Explicación cómo hacer que themes, plugins soporten REST API wordpress, la idea la obtuve de:

https://stackoverflow.com/questions/56460557/how-to-include-meta-fields-in-wordpress-api-post

Lo que básicamente hay que hacer es:
1. Al momento en qué el tipo de post ha sido registrado, si no tiene 
- 'show_in_rest' true 
- 'custom-fields' en 'support'
hay que agregarlo

2. Al momento de registrar los meta fields con register_meta(), 'show_in_rest' debe ser true


Hay que tener un par de cosas en mente:
- No modificar directamente el theme y/o plugin, porque al momento de recibir actualizaciones
las modificaciones realizadas desaparecerán
- Solo es necesario agregar lo que nos interesa, solo eso

En la carpeta examples/ tengo ejemplos de cómo se ha realizado (de momento solo uno pero es posible que agregue más)

#### houzez
Se debe activar el child theme y el child plugin

##### houzez-child
path: wp-content/themes
es el tema hijo de houzez, lo que hace es añadir 'show_in_rest' a los meta fields

#### houzez-theme-functionality-child
path: wp-content/plugins
es un plugin hijo, lo que hace es añadir 'custom-fields' a 'support'