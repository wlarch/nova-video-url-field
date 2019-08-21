<?php

namespace Centiva\NovaVideoUrlField;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class VideoUrl extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-video-url-field';

    protected function fillAttributeFromRequest(NovaRequest $request, $requestAttribute, $model, $attribute)
    {
        if ($request->exists($requestAttribute)) {
            $model->{$attribute} = $request[$requestAttribute];
        }
    }
}
