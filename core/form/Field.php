<?php


namespace app\core\form;

use app\core\Model;
use app\core\form\Placeholder;


/**
 * 
 * 
 * 
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core\form
*/


class Field
{

    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';


    public Model $model;
    public string $attribute;
    public array $placeholderArray;
    public string $type;

    public function __construct(Model $model, $attribute, $callback)
    {
        $this->model = $model;
        $this->attribute = $attribute;
        $this->type = self::TYPE_TEXT; 

        if(is_array($callback)) {
            $callback[0] = new Placeholder;
            $this->placeholderArray = call_user_func($callback);
        }

    }


    public function __toString()
    {
        return sprintf('
            <div class="form-group mt-2">
                <label>%s</label>
                <input type="%s" name="%s" value="%s" class="form-control%s" placeholder="%s">
                <div class="invalid-feedback">
                    %s
                </div> 
            </div>
        ',
        // ucfirst($this->attribute),
        $this->model->getLabel($this->attribute),
        $this->type,
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        $this->placeholderArray[$this->attribute],
        $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
}