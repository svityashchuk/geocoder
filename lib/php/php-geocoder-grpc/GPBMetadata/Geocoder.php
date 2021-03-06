<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: geocoder.proto

namespace GPBMetadata;

class Geocoder
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�	
geocoder.proto"�
Location
provider (	
formatted_address (	
street_number (	
street_name (	
locality (	
sublocality (	
timezone (	
postal_code	 (	

id (	
country (2.Country
state (2.State
latLng
 (2.LatLng
bounds (2.Bounds!
admin_levels (2.AdminLevel-
sublocality_levels (2.SublocalityLevel-

components (2.Location.ComponentsEntry1
ComponentsEntry
key (	
value (	:8"@
Bounds
	northEast (2.LatLng
	southWest (2.LatLng"7

AdminLevel
level (
name (	
code (	"/
SublocalityLevel
level (
name (	"%
Country
name (	
code (	"#
State
name (	
code (	""
LatLng
lat (
lng ("
Timezone
code (	"�
LocationRequest
provider (	
address (	
latlng (2.LatLng*
query (2.LocationRequest.QueryEntry,

QueryEntry
key (	
value (	:8"@
LocationResponse
	locations (2	.Location
exists ("*
TimezoneRequest
latlng (2.LatLng2@
GeocodeService.
Geocode.LocationRequest.LocationResponse28
TimezoneService%
Lookup.TimezoneRequest	.TimezoneB4Zgithub.com/Rentberry/geocoder�Rentberry\\Geocoderbproto3'
        , true);

        static::$is_initialized = true;
    }
}

