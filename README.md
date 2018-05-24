# Google Places FormWidget

This is a developer plugin to add Google Places functionality to backend forms. This plugin includes a Google Places FormWidget that uses the Google Maps Javascript API and Google Places library to retrive geocoded and establishment places. 

This plugin is based on the example provided in the Google Maps Javascript Documentation and cac be found [here](https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform).

## Getting Started

Download from the October Marketplace or clone the [respository](https://developers.google.com/maps/documentation/javascript/places) from github into your plugins folder.

### Installing

Simply install the plugin from the market place or clone the repository as mentioned in the Getting Started section.

You can then access the FormWidget in your model's fields.yaml file by including \LMBdev\GooglePlaces\FormWidgets\GooglePlaces as the field type.

```
googleplace:
    span: auto
    label: 'Google Place'
    type: \LMBdev\GooglePlaces\FormWidgets\GooglePlaces
    modelClass: \Author\Plugins\Models\ModelName
    selectFrom: googleplace
    pattern: text
```
**Note**: You may name your field whatever you wish so long as it represents a database column for your model.

## Additional Information

You can access additional information on the place using any of the standard attributes offered by the Places Library.

For example:

```
place.place_id //Will return the place id
place.name //Will return the place name
```

The componentForm variable in js/googleplaces.js contains a list of accessible attributes.

```
var componentForm = {
    street_number: 'short_name',
    route: 'long_name', //street
    locality: 'long_name', //city
    administrative_area_level_1: 'short_name', //state
    country: 'long_name',
    postal_code: 'short_name'
};
```

If you wish to store these values in your model's form, you should add the respective columns to your model and add the fields to your model's fields.yaml file.

## Built With

* [OctoberCMS](http://www.octobercms/)
* [Google Maps Places Library API](https://developers.google.com/maps/documentation/javascript/places/)

## Contributing

Please feel free to (message me)[mailto:lbarker@wwrfresource.com] with comments, questions, or concerns. You can also submit a pull request to the respository.

## Versioning

I use use [Github](http://github.com/) for versioning.

## Authors

* **Larry Barker** - *Initial work* - [LMBDEV](https://larrybarker.netlify.com)


## License

This project is licensed under the MIT License.

## Acknowledgments

* Thanks to the October community.
* @alxy For help with passing PHP variables to JS files.
* It was brought to my attention that RainLab has a [Location Plugin](https://github.com/rainlab/location-plugin) that offers very similar features and may even be better as far as extensibility goes.