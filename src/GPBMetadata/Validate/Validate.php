<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validate/validate.proto

namespace GPBMetadata\Validate;

class Validate
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�=
validate/validate.protovalidate google/protobuf/descriptor.protogoogle/protobuf/timestamp.proto"�

FieldRules5
message (2.validate.MessageRulesHRmessage�,
float (2.validate.FloatRulesH Rfloat/
double (2.validate.DoubleRulesH Rdouble,
int32 (2.validate.Int32RulesH Rint32,
int64 (2.validate.Int64RulesH Rint64/
uint32 (2.validate.UInt32RulesH Ruint32/
uint64 (2.validate.UInt64RulesH Ruint64/
sint32 (2.validate.SInt32RulesH Rsint32/
sint64 (2.validate.SInt64RulesH Rsint642
fixed32	 (2.validate.Fixed32RulesH Rfixed322
fixed64
 (2.validate.Fixed64RulesH Rfixed645
sfixed32 (2.validate.SFixed32RulesH Rsfixed325
sfixed64 (2.validate.SFixed64RulesH Rsfixed64)
bool (2.validate.BoolRulesH Rbool/
string (2.validate.StringRulesH Rstring,
bytes (2.validate.BytesRulesH Rbytes)
enum (2.validate.EnumRulesH Renum5
repeated (2.validate.RepeatedRulesH Rrepeated&
map (2.validate.MapRulesH Rmap&
any (2.validate.AnyRulesH Rany5
duration (2.validate.DurationRulesH Rduration8
	timestamp (2.validate.TimestampRulesH R	timestampB
typeB

_message"�

FloatRules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"�
DoubleRules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"�

Int32Rules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"�

Int64Rules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"�
UInt32Rules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"�
UInt64Rules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"�
SInt32Rules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"�
SInt64Rules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"�
Fixed32Rules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"�
Fixed64Rules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"�
SFixed32Rules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"�
SFixed64Rules
const (H Rconst�
lt (HRlt�
lte (HRlte�
gt (HRgt�
gte (HRgte�
in (Rin
not_in (RnotIn&
ignore_empty (HRignoreEmpty�B
_constB
_ltB
_lteB
_gtB
_gteB
_ignore_empty"0
	BoolRules
const (H Rconst�B
_const"�
StringRules
const (	HRconst�
len (HRlen�
min_len (HRminLen�
max_len (HRmaxLen� 
	len_bytes (HRlenBytes� 
	min_bytes (HRminBytes� 
	max_bytes (HRmaxBytes�
pattern (	HRpattern�
prefix (	H	Rprefix�
suffix (	H
Rsuffix�
contains	 (	HRcontains�&
not_contains (	HRnotContains�
in
 (	Rin
not_in (	RnotIn
email (H Remail
hostname (H Rhostname
ip (H Rip
ipv4 (H Ripv4
ipv6 (H Ripv6
uri (H Ruri
uri_ref (H RuriRef
address (H Raddress
uuid (H Ruuid@
well_known_regex (2.validate.KnownRegexH RwellKnownRegex
strict (HRstrict�&
ignore_empty (HRignoreEmpty�B

well_knownB
_constB
_lenB

_min_lenB

_max_lenB

_len_bytesB

_min_bytesB

_max_bytesB

_patternB	
_prefixB	
_suffixB
	_containsB
_not_containsB	
_strictB
_ignore_empty"�

BytesRules
const (HRconst�
len (HRlen�
min_len (HRminLen�
max_len (HRmaxLen�
pattern (	HRpattern�
prefix (HRprefix�
suffix (HRsuffix�
contains (HRcontains�
in (Rin
not_in	 (RnotIn
ip
 (H Rip
ipv4 (H Ripv4
ipv6 (H Ripv6&
ignore_empty (H	RignoreEmpty�B

well_knownB
_constB
_lenB

_min_lenB

_max_lenB

_patternB	
_prefixB	
_suffixB
	_containsB
_ignore_empty"�
	EnumRules
const (H Rconst�&
defined_only (HRdefinedOnly�
in (Rin
not_in (RnotInB
_constB
_defined_only"^
MessageRules
skip (H Rskip�
required (HRrequired�B
_skipB
	_required"�
RepeatedRules 
	min_items (H RminItems� 
	max_items (HRmaxItems�
unique (HRunique�/
items (2.validate.FieldRulesHRitems�&
ignore_empty (HRignoreEmpty�B

_min_itemsB

_max_itemsB	
_uniqueB
_itemsB
_ignore_empty"�
MapRules 
	min_pairs (H RminPairs� 
	max_pairs (HRmaxPairs� 
	no_sparse (HRnoSparse�-
keys (2.validate.FieldRulesHRkeys�1
values (2.validate.FieldRulesHRvalues�&
ignore_empty (HRignoreEmpty�B

_min_pairsB

_max_pairsB

_no_sparseB
_keysB	
_valuesB
_ignore_empty"_
AnyRules
required (H Rrequired�
in (	Rin
not_in (	RnotInB
	_required"�
DurationRules
required (H Rrequired�4
const (2.google.protobuf.DurationHRconst�.
lt (2.google.protobuf.DurationHRlt�0
lte (2.google.protobuf.DurationHRlte�.
gt (2.google.protobuf.DurationHRgt�0
gte (2.google.protobuf.DurationHRgte�)
in (2.google.protobuf.DurationRin0
not_in (2.google.protobuf.DurationRnotInB
	_requiredB
_constB
_ltB
_lteB
_gtB
_gte"�
TimestampRules
required (H Rrequired�5
const (2.google.protobuf.TimestampHRconst�/
lt (2.google.protobuf.TimestampHRlt�1
lte (2.google.protobuf.TimestampHRlte�/
gt (2.google.protobuf.TimestampHRgt�1
gte (2.google.protobuf.TimestampHRgte�
lt_now (HRltNow�
gt_now (HRgtNow�6
within	 (2.google.protobuf.DurationHRwithin�B
	_requiredB
_constB
_ltB
_lteB
_gtB
_gteB	
_lt_nowB	
_gt_nowB	
_within*F

KnownRegex
UNKNOWN 
HTTP_HEADER_NAME
HTTP_HEADER_VALUEbproto3'
        , true);

        static::$is_initialized = true;
    }
}

