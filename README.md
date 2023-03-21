Explanation of how to add metadata support in WordPress REST API to themes and plugins, the original idea is:

https://stackoverflow.com/questions/56460557/how-to-include-meta-fields-in-wordpress-api-post


You need to set:
- 'show_in_rest' true when register_post_type() 
- 'custom-fields' must be in 'support' when register_post_type()
- 'show_in_rest' true when register_meta()

When you do these modifications you must think in:
- Don´t modify directly the theme and/or plugin, because when it updates you lost the modifications
- Only need to add what you need, only it

In the folder example/, you can find examples in different themes and plugins, at this moment only exist one example
but in the future, I can add more 

#### houzez
You must activate the child theme and child plugin

##### houzez-child
path: wp-content/themes
houzez child theme, add 'show_in_rest' in meta fields


#### houzez-theme-functionality-child
path: wp-content/plugins
child plugin, add 'custom-fields' to support
