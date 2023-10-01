<?php

// override core en language system validation or define your own en language validation message
return [
    //Mensajes de error personalizados para cada regla de validación

    //{field} se reemplaza por el nombre del campo que está siendo validado. 
    //Por ejemplo, si estás validando el campo 'nombre', {field} se reemplazaría por 'nombre' en el mensaje de error.

    //{param} se reemplaza por el valor del parámetro que has especificado en la regla de validación. 
    //Por ejemplo, si tienes una regla como 'min_length[5]', {param} se reemplazaría por '5' en el mensaje de error.
    
    'required'      => 'El campo {field} es obligatorio.',
    'min_length'    => 'El campo {field} debe tener al menos {param} caracteres de longitud.',
    'max_length'    => 'El campo {field} no debe exceder {param} caracteres de longitud.',
    'valid_email'   => 'El campo {field} debe contener una dirección de correo electrónico válida.',
    'is_unique'     => 'El campo {field} ya está en uso por otro usuario.',
];

