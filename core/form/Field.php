<?php


namespace app\core\form;

use app\core\Model;


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
    public Model $model;
    public string $attribute;

    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }


    public function __toString()
    {
        return sprintf('
            <div class="form-group mt-2">
                <label>%s</label>
                <input type="text" name="%s" value="%s" class="form-control%s" placeholder="%s">
                <div class="invalid-feedback">
                    %s
                </div> 
            </div>
        ',
        ucfirst($this->attribute),
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        ucfirst($this->attribute),
        $this->model->getFirstError($this->attribute)
        );
    }

    public function placeholderMessages($attribute, $placeholder)
    {

    }
}