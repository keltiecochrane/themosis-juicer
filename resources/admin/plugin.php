<?php

use Themosis\Facades\Action;

// Setup our admin section
Action::add('wp_loaded', 'Com\\KeltieCochrane\\Juicer\\Controllers\\Admin::setup');

// Add ACF field
Action::add('acf/include_field_types', function () {
  new Com\KeltieCochrane\Juicer\Fields\AcfFieldJuicerSocial([]);
});
