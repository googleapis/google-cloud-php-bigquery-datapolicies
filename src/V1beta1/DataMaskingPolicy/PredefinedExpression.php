<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datapolicies/v1beta1/datapolicy.proto

namespace Google\Cloud\BigQuery\DataPolicies\V1beta1\DataMaskingPolicy;

use UnexpectedValueException;

/**
 * The available masking rules. Learn more here:
 * https://cloud.google.com/bigquery/docs/column-data-masking-intro#masking_options.
 *
 * Protobuf type <code>google.cloud.bigquery.datapolicies.v1beta1.DataMaskingPolicy.PredefinedExpression</code>
 */
class PredefinedExpression
{
    /**
     * Default, unspecified predefined expression. No masking will take place
     * since no expression is specified.
     *
     * Generated from protobuf enum <code>PREDEFINED_EXPRESSION_UNSPECIFIED = 0;</code>
     */
    const PREDEFINED_EXPRESSION_UNSPECIFIED = 0;
    /**
     * Masking expression to replace data with SHA-256 hash.
     *
     * Generated from protobuf enum <code>SHA256 = 3;</code>
     */
    const SHA256 = 3;
    /**
     * Masking expression to replace data with NULLs.
     *
     * Generated from protobuf enum <code>ALWAYS_NULL = 5;</code>
     */
    const ALWAYS_NULL = 5;
    /**
     * Masking expression to replace data with their default masking values.
     * The default masking values for each type listed as below:
     * * STRING: ""
     * * BYTES: b''
     * * INTEGER: 0
     * * FLOAT: 0.0
     * * NUMERIC: 0
     * * BOOLEAN: FALSE
     * * TIMESTAMP: 0001-01-01 00:00:00 UTC
     * * DATE: 0001-01-01
     * * TIME: 00:00:00
     * * DATETIME: 0001-01-01T00:00:00
     * * GEOGRAPHY: POINT(0 0)
     * * BIGNUMERIC: 0
     * * ARRAY: []
     * * STRUCT: NOT_APPLICABLE
     * * JSON: NULL
     *
     * Generated from protobuf enum <code>DEFAULT_MASKING_VALUE = 7;</code>
     */
    const DEFAULT_MASKING_VALUE = 7;

    private static $valueToName = [
        self::PREDEFINED_EXPRESSION_UNSPECIFIED => 'PREDEFINED_EXPRESSION_UNSPECIFIED',
        self::SHA256 => 'SHA256',
        self::ALWAYS_NULL => 'ALWAYS_NULL',
        self::DEFAULT_MASKING_VALUE => 'DEFAULT_MASKING_VALUE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


