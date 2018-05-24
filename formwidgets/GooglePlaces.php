<?php namespace LmbDev\GooglePlaces\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * GooglePlaces Form Widget
 */
class GooglePlaces extends FormWidgetBase
{
    /*
     * Config attributes
     */
    protected $modelClass = null;
    protected $selectFrom = 'name';
    protected $pattern = 'text';

    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'lmbdev_googleplaces_google_places'; 

    /**
     * @inheritDoc
     */
    public function init()
    {
        $this->fillFromConfig([
            'modelClass',
            'selectFrom',
            'pattern',
        ]);
        $this->assertModelClass();

        parent::init();
    }

    protected function assertModelClass()
    {
        if( !isset($this->modelClass) || !class_exists($this->modelClass) )
        {
            throw new \InvalidArgumentException(sprintf("Model class {%s} not found.", $this->modelClass));
        }
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('googleplaces');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['inputType'] = $this->pattern;
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
        $this->vars['fieldId'] = $this->getId('input'); //fieldid for googleplaces.js
    }

    /**
     * @inheritDoc
     */
    public function loadAssets()
    {
        $this->addCss('css/googleplaces.css', 'lmbdev.googleplaces');
        $this->addJs('js/googleplaces.js', 'lmbdev.googleplaces');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }

    /**
     * Registers any form widgets implemented in this plugin.
     */
    public function registerFormWidgets()
    {
        return [
            'LmbDev\GooglePlaces\GooglePlaces' => [
                'label' => 'Google Places',
                'code' => 'googleplaces'
            ],
        ];
    }
}
