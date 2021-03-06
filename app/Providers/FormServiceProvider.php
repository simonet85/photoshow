<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    // Register the form components
      Form::component('text', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
      Form::component('textArea', 'components.form.textarea', ['name', 'value' => null, 'attributes' => []]);
      Form::component('submit', 'components.form.submit', ['value' => 'Submit', 'attributes' => []]);
      Form::component('hidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
      Form::component('file', 'components.form.file', ['name','attributes' => []]);
    }
}
