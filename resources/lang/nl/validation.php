<?php

return [

    /*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

    "accepted"             => "Het :attribute dient te worden geaccepteerd.",
    "active_url"           => "Het :attribute is geen geldige URL.",
    "after"                => "Het :attribute dient een datum te zijn na :date.",
    "after_or_equal"       => 'Het :attribute moet een datum zijn na of gelijk aan :date.',
    "alpha"                => "Het :attribute mag alleen letters bevatten.",
    "alpha_dash"           => "Het :attribute mag alleen letters, nummers, and strepen bevatten.",
    "alpha_num"            => "Het :attribute mag alleen letters en nummers bevatten.",
    "array"                => "Het :attribute moet een array zijn.",
    "before"               => "Het :attribute moet een datum zijn eerder dan :date.",
    "before_or_equal"      => 'Het :attribute moet een datum zijn voor of gelijk aan :date.',
    "between"              => [
        "numeric" => "Het :attribute moet tussen :min en :max liggen.",
        "file"    => "Het :attribute moet tussen :min en :max kilobytes zijn.",
        "string"  => "Het :attribute moet tussen :min en :max karakters lang zijn.",
        "array"   => "Het :attribute moet tussen :min en :max items bevatten.",
    ],
    "boolean"              => "Het :attribute kan enkel true of false zijn.",
    "confirmed"            => "Het :attribute bevestiging komt niet overeen.",
    "date"                 => "Het :attribute is geen geldige datum.",
    "date_format"          => "Het :attribute komt niet overeen met het formaat :format.",
    "different"            => "Het :attribute en :other dienen verschillend te zijn.",
    "digits"               => "Het :attribute moet :digits cijfers zijn.",
    "digits_between"       => "Het :attribute moet tussen :min en :max cijfers zijn.",
    "dimensions"           => "Het :attribute heeft een ongeldige grootte.",
    "distinct"             => "Het :attribute heeft een dubbele waarde.",
    "email"                => "Het :attribute dient een geldig emailadres te zijn.",
    "exists"               => "Het geselecteerde Het :attribute is ongeldig.",
    "file"                 => "Het :attribute moet een bestand zijn.",
    "filled"               => "Het :attribute veld is verplicht.",
    "image"                => "Het :attribute dient een afbeelding te zijn.",
    "in"                   => "Het geselecteerde Het :attribute is ongeldig.",
    "in_array"             => "Het :attribute komt niet voor in :other.",
    "integer"              => "Het :attribute dient een geheel getal te zijn.",
    "ip"                   => "Het :attribute dient een geldig IP adres te zijn.",
    "json"                 => "Het :attribute moet een geldige JSON string zijn.",
    "max"                  => [
        "numeric" => "Het :attribute mag niet groter zijn dan :max.",
        "file"    => "Het :attribute mag niet groter zijn dan :max kilobytes.",
        "string"  => "Het :attribute mag niet groter zijn dan :max karakters.",
        "array"   => "Het :attribute mag niet meer dan :max items bevatten.",
    ],
    "mimes"                => "Het :attribute dient een bestand te zijn van het type: :values.",
    "mimetypes"            => "Het :attribute dient een bestand te zijn van het type: :values.",
    "min"                  => [
        "numeric" => "Het :attribute dient minimaal :min te zijn.",
        "file"    => "Het :attribute dient minimaal :min kilobytes te zijn.",
        "string"  => "Het :attribute dient minimaal :min karakters te bevatten.",
        "array"   => "Het :attribute dient minimaal :min items te bevatten.",
    ],
    "not_in"               => "Het geselecteerde :attribute is ongeldig.",
    "numeric"              => "Het :attribute dient een nummer te zijn.",
    "present"              => "Het :attribute dient aanwezig te zijn.",
    "regex"                => "Het :attribute formaat is ongeldig.",
    "required"             => "Het :attribute veld is verplicht.",
    "required_if"          => "Het :attribute veld is verplicht wanneer :other is :value.",
    "required_unless"      => "Het :attribute veld is verplicht, tenzij :other is in :values.",
    "required_with"        => "Het :attribute veld is verplicht wanneer :values aanwezig is.",
    "required_with_all"    => "Het :attribute veld is verplicht wanneer :values aanwezig is.",
    "required_without"     => "Het :attribute veld is verplicht wanneer :values niet aanwezig is.",
    "required_without_all" => "Het :attribute veld is verplicht wanneer geen van :values aanwezig is.",
    "same"                 => "Het :attribute en :other moeten hetzelfde zijn.",
    "size"                 => [
        "numeric" => "Het :attribute moet :size zijn.",
        "file"    => "Het :attribute moet :size kilobytes groot zijn.",
        "string"  => "Het :attribute moet :size karakters lang zijn.",
        "array"   => "Het :attribute moet :size items bevatten.",
    ],
    "string"               => "Het :attribute moet een string zijn.",
    "timezone"             => "Het :attribute moet een geldige tijdszone zijn.",
    "unique"               => "Het :attribute is al bezet.",
    "uploaded"             => "Het uploaden van :attribute is mislukt.",
    "url"                  => "Het :attribute formaat is ongeldig.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],
];
