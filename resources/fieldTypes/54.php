<?php
$fieldTypes = [
    [
        "type" => "bigIncrements",
        "description"=> "Incrementing ID (primary key) using a \"UNSIGNED BIG INTEGER\" equivalent.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> false,
            "fillableCheck"=> false,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "bigInteger",
        "description"=> "BIGINT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> true,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> true,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "binary",
        "description"=> "BLOB equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "boolean",
        "description"=> "BLOB equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "char",
        "description"=> "CHAR equivalent with a length.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> true,
            "nameVisibility"=> true,
            "lengthVisibility"=> true,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "date",
        "description"=> "DATE equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "dateTime",
        "description"=> "DATETIME equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "dateTimeTz",
        "description"=> "DATETIME (with timezone) equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "decimal",
        "description"=> "DECIMAL equivalent with a precision and scale.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> false,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> true,
            "lengthDecimalVisibility"=> true,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "double",
        "description"=> "DOUBLE equivalent with precision, 15 digits in total and 8 after the decimal point.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> false,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> true,
            "lengthDecimalVisibility"=> true,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "enum",
        "description"=> "ENUM equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> true,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "float",
        "description"=> "FLOAT equivalent for the database, 8 digits in total and 2 after the decimal point.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> false,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> true,
            "lengthDecimalVisibility"=> true,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "increments",
        "description"=> "Incrementing ID (primary key) using a \"UNSIGNED INTEGER\" equivalent.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "integer",
        "description"=> "INTEGER equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> true,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> true,
            "nameVisibility"=> true,
            "lengthVisibility"=> true,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "ipAddress",
        "description"=> "IP address equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "json",
        "description"=> "JSON equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "jsonb",
        "description"=> "JSONB equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "longText",
        "description"=> "LONGTEXT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> true,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "macAddress",
        "description"=> "MAC address equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "mediumIncrements",
        "description"=> "Incrementing ID (primary key) using a \"UNSIGNED MEDIUM INTEGER\" equivalent.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "mediumInteger",
        "description"=> "MEDIUMINT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> true,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> true,
            "nameVisibility"=> true,
            "lengthVisibility"=> true,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "mediumText",
        "description"=> "MEDIUMTEXT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> true,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "morphs",
        "description"=> "Adds unsigned INTEGER taggable_id and STRING taggable_type.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "nullableMorphs",
        "description"=> "Nullable versions of the morphs() columns.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "nullableTimestamps",
        "description"=> "Nullable versions of the timestamps() columns.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> false,
            "guardedCheck"=> false,
            "visibleCheck"=> false,
            "hiddenCheck"=> false,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> false,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "rememberToken",
        "description"=> "Adds remember_token as VARCHAR(100) NULL.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> false,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "smallIncrements",
        "description"=> "Incrementing ID (primary key) using a \"UNSIGNED SMALL INTEGER\" equivalent.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "smallInteger",
        "description"=> "SMALLINT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> true,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> true,
            "nameVisibility"=> true,
            "lengthVisibility"=> true,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "softDeletes",
        "description"=> "Adds nullable deleted_at column for soft deletes.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> false,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "string",
        "description"=> "VARCHAR equivalent column.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> true,
            "nameVisibility"=> true,
            "lengthVisibility"=> true,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "text",
        "description"=> "TEXT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> true,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "time",
        "description"=> "TIME equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "timeTz",
        "description"=> "TIME (with timezone) equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "tinyInteger",
        "description"=> "TINYINT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> true,
            "unsignedCheck"=> true,
            "primaryKeyCheck"=> true,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> true,
            "nameVisibility"=> true,
            "lengthVisibility"=> true,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "timestamp",
        "description"=> "TIMESTAMP equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "timestampTz",
        "description"=> "TIMESTAMP (with timezone) equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> true,
            "nullableCheck"=> true,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "timestamps",
        "description"=> "Adds nullable created_at and updated_at columns.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> false,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "timestampsTz",
        "description"=> "Adds nullable created_at and updated_at (with timezone) columns.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> false,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ],
    [
        "type"=> "unsignedBigInteger",
        "description"=> "Unsigned BIGINT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "unsignedInteger",
        "description"=> "Unsigned INT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "unsignedMediumInteger",
        "description"=> "Unsigned MEDIUMINT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "unsignedSmallInteger",
        "description"=> "Unsigned SMALLINT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "unsignedTinyInteger",
        "description"=> "Unsigned TINYINT equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> true,
            "uniqueCheck"=> true
        ]
    ],
    [
        "type"=> "uuid",
        "description"=> "UUID equivalent for the database.",
        "options"=> [
            "autoIncrementCheck"=> false,
            "unsignedCheck"=> false,
            "primaryKeyCheck"=> false,
            "indexCheck"=> false,
            "nullableCheck"=> false,
            "fillableCheck"=> true,
            "guardedCheck"=> true,
            "visibleCheck"=> true,
            "hiddenCheck"=> true,
            "foreignKeyCheck"=> false,
            "nameVisibility"=> true,
            "lengthVisibility"=> false,
            "lengthDecimalVisibility"=> false,
            "arrayVisibility"=> false,
            "defaultValueVisibility"=> false,
            "uniqueCheck"=> false
        ]
    ]
]
?>