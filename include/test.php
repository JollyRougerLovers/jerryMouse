<?php

$test_autocomplete_category = <<<EOF
{
    "success": true,
    "msg": "ok",
    "data": {
        "suggestions": [{
            "name": "antique restoration"
        }, {
            "name": "antique restorers"
        }, {
            "name": "antique restoring"
        }, {
            "name": "cafe restaurant"
        }, {
            "name": "classic car restoration"
        }, {
            "name": "fire &amp; flood restoration"
        }, {
            "name": "floor restoration"
        }, {
            "name": "restaurant"
        }, {
            "name": "vintage car restoration"
        }, {
            "name": "wood floor restoration"
        }]
    }
}
EOF;


$test_autocomplate_location = <<<EOF
{
    "success": true,
    "msg": "ok",
    "data": {
        "suggestions": [{
            "name": "clonsilla co dublin"
        }, {
            "name": "co dublin"
        }, {
            "name": "county dublin"
        }, {
            "name": "dublin"
        }, {
            "name": "dublin airport"
        }, {
            "name": "north dublin"
        }, {
            "name": "south dublin"
        }],
        "from_cache": true
    }
}
EOF;



$test_search_result = <<<EOF
        
        
{
    "success": true,
    "msg": "ok",
    "data": {
        "total_rows": 266,
        "rows": [{
            "_id": "581766356832256",
            "_order": [8.232843139352171E-16, 3, 1361759],
            "when": "2014-07-02 21:33:21 +00:00",
            "country": "ie",
            "status": {
                "status": "active",
                "meta": {
                    "when": "2014-07-02 21:46:53 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "name": {
                "name": "Assured Quality Plumbing",
                "formal_name": "",
                "branch_name": "",
                "meta": {
                    "when": "2014-07-02 21:57:18 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "assured quality plumbing",
                "stemmed": "ass qual plumb",
                "phonetic": "AS KL PLM"
            },
            "postal_address": {
                "building_number": "",
                "address1": "19-22 Carrington House",
                "address2": "Old Bray Road",
                "address3": "",
                "district": "",
                "town": "Dublin",
                "county": "",
                "province": "",
                "postcode": "18",
                "address_type": "",
                "do_not_display": false,
                "meta": {
                    "when": "2014-07-02 21:57:19 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "geopoint": {
                "longitude": -6.16784,
                "latitude": 53.2708092,
                "accuracy": 100,
                "wgs84": [53.2708092, -6.16784],
                "meta": {
                    "when": "2014-07-02 21:57:28 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "geohash": "gc7x59ssy"
            },
            "emails": [{
                "email_description": "",
                "meta": {
                    "when": "2014-07-02 21:33:21 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 581766356889600,
                "dns_verified": "false",
                "dns_verified_ts": 1494644403
            }],
            "categories": [{
                "category_id": "364",
                "category_name": "Plumbers",
                "meta": {
                    "when": "2014-07-02 21:33:21 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 581766357008384,
                "stopwords": "plumbers",
                "stemmed": "plumb",
                "phonetic": "PLM"
            }, {
                "category_id": "734",
                "category_name": "Boilers Servicing and Repairs",
                "meta": {
                    "when": "2014-07-02 21:58:15 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 581772473167872,
                "stopwords": "boilers servicing and repairs",
                "stemmed": "boil serv repair",
                "phonetic": "BL SRF RPR"
            }, {
                "category_id": "1142",
                "category_name": "Central Heating Installation and Servicing",
                "meta": {
                    "when": "2014-07-02 21:58:35 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 581772557299712,
                "stopwords": "central heating installation and servicing",
                "stemmed": "cent heat instal serv",
                "phonetic": "SNT HT NSTL SRF"
            }, {
                "category_id": "1693",
                "category_name": "Gas Installers",
                "meta": {
                    "when": "2014-07-02 21:59:02 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 581772667011072,
                "stopwords": "gas installers",
                "stemmed": "gas instal",
                "phonetic": "KS NSTL"
            }, {
                "category_id": "1690",
                "category_name": "Gas Appliances Sales and Service",
                "meta": {
                    "when": "2014-07-02 22:12:24 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 581775953469440,
                "stopwords": "gas appliances sales and service",
                "stemmed": "gas apply sal serv",
                "phonetic": "KS PL SL SRF"
            }],
            "lastEditDate": "2017-02-02 11:32:44 +00:00",
            "facets": ["hasPhone", "hasWebsite", "hasEmail"],
            "contentScore": 3,
            "claim": {
                "claimed_user_id": "873599a7339f73b6dab906198e74e665",
                "expiry_date": "2014-08-02 21:46:53 +00:00",
                "claimed_date": "2014-07-02 21:46:53 +00:00",
                "claim_method": {
                    "method": "api",
                    "phone_number": ""
                },
                "claimed_image": "http://www.centralindex.com/images/claimed_entity_icon.png",
                "meta": {
                    "when": "2014-07-02 21:46:53 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "claimed_referrer_url": "www.yourlocal.ie",
                "claimed_referrer_name": "Yourlocal.ie"
            },
            "normalised_locations": {
                "source": "18",
                "locations": [{
                    "location_id": "2792",
                    "name": "D18",
                    "resolution": "neighbourhood"
                }, {
                    "location_id": "2969",
                    "name": "Dublin",
                    "resolution": "town"
                }, {
                    "location_id": "2668",
                    "name": "County Dublin",
                    "resolution": "county"
                }, {
                    "location_id": "1734",
                    "name": "Leinster",
                    "resolution": "province"
                }]
            },
            "tags": [{
                "tag": "boiler replacements ",
                "language": "en",
                "meta": {
                    "when": "2014-08-13 14:01:37 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 596518900248576,
                "stopwords": "boiler replacements",
                "stemmed": "boil replac",
                "phonetic": "BL RPLK"
            }, {
                "tag": "boiler servicing ",
                "language": "en",
                "meta": {
                    "when": "2014-08-13 14:01:41 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 596518918172672,
                "stopwords": "boiler servicing",
                "stemmed": "boil serv",
                "phonetic": "BL SRF"
            }, {
                "tag": "gas and oil central heating",
                "language": "en",
                "meta": {
                    "when": "2014-08-13 14:01:57 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 596518983528448,
                "stopwords": "gas and oil central heating",
                "stemmed": "gas oil cent heat",
                "phonetic": "KS L SNT HT"
            }, {
                "tag": "drain cleaning",
                "language": "en",
                "meta": {
                    "when": "2014-08-13 14:02:10 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 596519037779968,
                "stopwords": "drain cleaning",
                "stemmed": "drain cle",
                "phonetic": "TRN KL"
            }, {
                "tag": "burst pipes fixed",
                "language": "en",
                "meta": {
                    "when": "2014-08-13 13:59:01 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 596518262808576,
                "stopwords": "burst pipes fixed",
                "stemmed": "burst pip fix",
                "phonetic": "BRST PP FKS"
            }, {
                "tag": "gas installation",
                "language": "en",
                "meta": {
                    "when": "2014-08-13 13:59:17 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 596518330085376,
                "stopwords": "gas installation",
                "stemmed": "gas instal",
                "phonetic": "KS NSTL"
            }]
        }, {
            "_id": "727475880751104",
            "_order": [7.764370921445091E-16, 11, 723184],
            "when": "2015-08-18 15:06:56 +00:00",
            "country": "ie",
            "status": {
                "status": "active",
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "name": {
                "name": "Dublin Area Plumbers",
                "formal_name": "",
                "branch_name": "",
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "dublin area plumbers",
                "stemmed": "dublin are plumb",
                "phonetic": "TBLN R PLM"
            },
            "postal_address": {
                "building_number": "",
                "address1": "1 Saint Andrew's Street",
                "address2": "",
                "address3": "",
                "district": "",
                "town": "Dublin 2",
                "county": "Dublin",
                "province": "",
                "postcode": "",
                "address_type": "",
                "do_not_display": false,
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "geopoint": {
                "longitude": -6.26175,
                "latitude": 53.34353,
                "accuracy": 100,
                "wgs84": [53.34353, -6.26175],
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "geohash": "gc7x3wbkd"
            },
            "emails": [{
                "email_description": "",
                "dns_verified": false,
                "dns_verified_ts": 1439910416,
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727475880779776
            }],
            "categories": [{
                "category_id": "365",
                "category_name": "Plumbing and Heating Merchants",
                "meta": {
                    "when": "2016-09-03 15:39:48 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727475880873984,
                "stopwords": "plumbing and heating merchants",
                "stemmed": "plumb heat merch",
                "phonetic": "PLMB HT MRKSH"
            }, {
                "category_id": "364",
                "category_name": "Plumbers",
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727478166249472,
                "stopwords": "plumbers",
                "stemmed": "plumb",
                "phonetic": "PLM"
            }, {
                "category_id": "1775",
                "category_name": "Heating Consultants",
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727478237757440,
                "stopwords": "heating consultants",
                "stemmed": "heat consult",
                "phonetic": "HT KNSLT"
            }, {
                "category_id": "1142",
                "category_name": "Central Heating Installation and Servicing",
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727478494879744,
                "stopwords": "central heating installation and servicing",
                "stemmed": "cent heat instal serv",
                "phonetic": "SNT HT NSTL SRF"
            }, {
                "category_id": "1457",
                "category_name": "Electrical Heating Systems",
                "meta": {
                    "when": "2015-08-18 15:17:54 +00:00",
                    "scope": "public",
                    "confidence": 0
                },
                "gen_id": 727478557208576,
                "stopwords": "electrical heating systems",
                "stemmed": "elect heat system",
                "phonetic": "ELKT HT SSTM"
            }, {
                "category_id": "1690",
                "category_name": "Gas Appliances Sales and Service",
                "meta": {
                    "when": "2015-08-18 15:18:17 +00:00",
                    "scope": "public",
                    "confidence": 0
                },
                "gen_id": 727478615928832,
                "stopwords": "gas appliances sales and service",
                "stemmed": "gas apply sal serv",
                "phonetic": "KS PL SL SRF"
            }, {
                "category_id": "1693",
                "category_name": "Gas Installers",
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727478663512064,
                "stopwords": "gas installers",
                "stemmed": "gas instal",
                "phonetic": "KS NSTL"
            }, {
                "category_id": "1696",
                "category_name": "Gas Service Engineers",
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727478718083072,
                "stopwords": "gas service engineers",
                "stemmed": "gas serv engin",
                "phonetic": "KS SRF NJN"
            }, {
                "category_id": "2107",
                "category_name": "Oil Fired Heating Equipment",
                "meta": {
                    "when": "2016-09-03 15:41:56 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727478785511424,
                "stopwords": "oil fired heating equipment",
                "stemmed": "oil fir heat equip",
                "phonetic": "OL FR HT KP"
            }, {
                "category_id": "734",
                "category_name": "Boilers Servicing and Repairs",
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727478823317504,
                "stopwords": "boilers servicing and repairs",
                "stemmed": "boil serv repair",
                "phonetic": "BL SRF RPR"
            }, {
                "category_id": "2286",
                "category_name": "Emergency Gas Leaks",
                "meta": {
                    "when": "2015-08-18 15:19:06 +00:00",
                    "scope": "public",
                    "confidence": 0
                },
                "gen_id": 727478864515072,
                "stopwords": "emergency gas leaks",
                "stemmed": "emerg gas leak",
                "phonetic": "EMRK KS LK"
            }],
            "lastEditDate": "2016-09-03 15:41:56 +00:00",
            "facets": ["hasPhone", "hasWebsite", "hasEmail", "hasDescriptions", "hasTwitter", "hasFacebook", "hasGooglePlus", "hasGallery", "hasLogo", "hasOpeningTimes", "hasSocialMedia"],
            "contentScore": 11,
            "claim": {
                "claimed_user_id": "19eeb7efc69e591c5c822c3dde6de404",
                "expiry_date": "2016-08-18 15:13:59 +00:00",
                "claimed_date": "2015-08-18 15:13:59 +00:00",
                "claim_method": {
                    "method": "sms",
                    "phone_number": "+353838017773"
                },
                "claimed_image": "http://www.centralindex.com/images/claimed_entity_icon.png",
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "claimed_referrer_url": "www.yourlocal.ie",
                "claimed_referrer_name": "Yourlocal.ie"
            },
            "socialmedia": [{
                "website_url": "https://www.facebook.com/DublinAreaPlumbers",
                "type": "facebook",
                "canonicalised": true,
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727486018686976
            }, {
                "website_url": "https://twitter.com/DublinAreaPlumb",
                "type": "twitter",
                "canonicalised": true,
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 728044286754816
            }, {
                "website_url": "https://plus.google.com/112616880230359803054/posts",
                "type": "google+",
                "canonicalised": true,
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 728044335808512
            }],
            "opening_times": {
                "monday": {
                    "closed": false,
                    "open_24_hours": true,
                    "open": []
                },
                "tuesday": {
                    "closed": false,
                    "open_24_hours": true,
                    "open": []
                },
                "wednesday": {
                    "closed": false,
                    "open_24_hours": true,
                    "open": []
                },
                "thursday": {
                    "closed": false,
                    "open_24_hours": true,
                    "open": []
                },
                "friday": {
                    "closed": false,
                    "open_24_hours": true,
                    "open": []
                },
                "saturday": {
                    "closed": false,
                    "open_24_hours": true,
                    "open": []
                },
                "sunday": {
                    "closed": false,
                    "open_24_hours": true,
                    "open": []
                },
                "closed": [],
                "closed_public_holidays": false,
                "meta": {
                    "when": "2015-08-18 15:49:26 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "logos": [{
                "logo_name": "Dublin Area Plumbers Logo",
                "logo_type": "image/png",
                "logo_hash": "71082d6913ea5531bbf15deab20f87ce",
                "large": {
                    "logo_path": "S/80/d5771603a1154105181c4089e46cec20.png",
                    "logo_size": 19252,
                    "logo_width": "300",
                    "logo_height": "212"
                },
                "medium": {
                    "logo_path": "S/80/42a715032ddb5b8202a3a6fc70c6be5e.png",
                    "logo_size": 12731,
                    "logo_width": "200",
                    "logo_height": "141"
                },
                "small": {
                    "logo_path": "S/80/1fe18b3ce8067cf6341bc63b81762793.png",
                    "logo_size": 5685,
                    "logo_width": "100",
                    "logo_height": "71"
                },
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727486533414912
            }],
            "images": [{
                "image_name": "",
                "image_type": "image/jpeg",
                "image_hash": "ba84f5fcfbd31f934d5703e5e0c20aa0",
                "large": {
                    "image_path": "E/70/83011a171969d6b4a1666d658f75faaf.jpg",
                    "image_size": 234063,
                    "image_width": "1024",
                    "image_height": "675"
                },
                "medium": {
                    "image_path": "E/70/f4d90049f4075c0bf3d90e01e88bba40.jpg",
                    "image_size": 81513,
                    "image_width": "512",
                    "image_height": "337"
                },
                "small": {
                    "image_path": "E/70/2bfbc9288da23fe182b157e9bd5916ab.jpg",
                    "image_size": 37123,
                    "image_width": "256",
                    "image_height": "169"
                },
                "thumb": {
                    "image_path": "E/70/2f8e9ff0c14957f1213b4419f9acfbbf.jpg",
                    "image_size": 19628,
                    "image_width": "64",
                    "image_height": "42"
                },
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727486682222592
            }, {
                "image_name": "",
                "image_type": "image/jpeg",
                "image_hash": "46ca319d19c75796236f6ea7df3d21b3",
                "large": {
                    "image_path": "T/3/1f3f858e69ac8247c9900ccc911148c2.jpg",
                    "image_size": 140735,
                    "image_width": "900",
                    "image_height": "900"
                },
                "medium": {
                    "image_path": "T/3/4b393bbd20f2eb626f27f31546cfc7c1.jpg",
                    "image_size": 103335,
                    "image_width": "512",
                    "image_height": "512"
                },
                "small": {
                    "image_path": "T/3/e104d45e4755af973e38cdc106db394c.jpg",
                    "image_size": 49323,
                    "image_width": "256",
                    "image_height": "256"
                },
                "thumb": {
                    "image_path": "T/3/1c14f6d3b820fa10ea5b02169a7164e9.jpg",
                    "image_size": 29672,
                    "image_width": "64",
                    "image_height": "64"
                },
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727486766723072
            }, {
                "image_name": "",
                "image_type": "image/jpeg",
                "image_hash": "c970650550047c6bc9c1bddd661f0dd5",
                "large": {
                    "image_path": "A/36/a8b4033b16e051085629ec28cd388ab1.jpg",
                    "image_size": 410823,
                    "image_width": "900",
                    "image_height": "500"
                },
                "medium": {
                    "image_path": "A/36/67bfdd5186189370eb12a949e0c71e01.jpg",
                    "image_size": 181516,
                    "image_width": "512",
                    "image_height": "284"
                },
                "small": {
                    "image_path": "A/36/9f7fb829a485db29d8cbc1ca17e7e66a.jpg",
                    "image_size": 68019,
                    "image_width": "256",
                    "image_height": "142"
                },
                "thumb": {
                    "image_path": "A/36/a8b12fc3e264297fcf60fb0ffe92e64c.jpg",
                    "image_size": 27018,
                    "image_width": "64",
                    "image_height": "36"
                },
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727486845841408
            }, {
                "image_name": "",
                "image_type": "image/jpeg",
                "image_hash": "a20cc26e30ff427c19c9ea6a0800d7b1",
                "large": {
                    "image_path": "I/70/e40c48462c36038240ad5973cbb9b281.jpg",
                    "image_size": 364284,
                    "image_width": "900",
                    "image_height": "500"
                },
                "medium": {
                    "image_path": "I/70/b29f0634866132ddf5266a0456409115.jpg",
                    "image_size": 155766,
                    "image_width": "512",
                    "image_height": "284"
                },
                "small": {
                    "image_path": "I/70/81ae39d6535cc22a8c75718894e4c97a.jpg",
                    "image_size": 56931,
                    "image_width": "256",
                    "image_height": "142"
                },
                "thumb": {
                    "image_path": "I/70/bb167dcaadcb41590722d55b4d1d4121.jpg",
                    "image_size": 23487,
                    "image_width": "64",
                    "image_height": "36"
                },
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727486946533376
            }],
            "descriptions": [{
                "headline": "24 Hour Emergency Plumbing Service",
                "body": "Dublin Area Plumbers provide a rapid response 24 hour emergency plumbing service from experienced plumbing engineers. Leaving from multiple locations throughout Dublin and its surrounding areas we can have an emergency plumber with you within 1 hour of your call. We provide a fast, value for money service backed by the Dublin Area Plumbers Guarantee.\n\nWe offer full service emergency plumbing and repair 24 hours a day, 7 days a week including all weekends and holidays. Being friendly is a courtesy, but if you have an emergency in the middle of the night, service with a smile can make things just a little more bearable. For your added safety all Dublin Area Plumbers engineers are uniformed and carry ID cards so you know exactly who is calling.",
                "meta": {
                    "when": "2016-09-03 15:39:59 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 727487129014272,
                "processed_headline": "24 Hour Emergency Plumbing Service",
                "processed_body": "Dublin Area Plumbers provide a rapid response 24 hour emergency plumbing service from experienced plumbing engineers. Leaving from multiple locations throughout Dublin and its surrounding areas we can have an emergency plumber with you within 1 hour of your call. We provide a fast, value for money service backed by the Dublin Area Plumbers Guarantee.\n\nWe offer full service emergency plumbing and repair 24 hours a day, 7 days a week including all weekends and holidays. Being friendly is a courtesy, but if you have an emergency in the middle of the night, service with a smile can make things just a little more bearable. For your added safety all Dublin Area Plumbers engineers are uniformed and carry ID cards so you know exactly who is calling."
            }]
        }, {
            "_id": "711985916608512",
            "_order": [6.192987161434435E-16, 6, 949888],
            "when": "2015-07-05 20:38:06 +00:00",
            "country": "ie",
            "status": {
                "status": "active",
                "meta": {
                    "when": "2015-07-05 20:41:20 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "name": {
                "name": "Murfitt Energy Solutions",
                "formal_name": "",
                "branch_name": "",
                "meta": {
                    "when": "2015-07-05 20:41:20 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "murfitt energy solutions",
                "stemmed": "murfit energy solv",
                "phonetic": "MRFT NRJ SLF"
            },
            "postal_address": {
                "building_number": "40 Rathdown Avenue",
                "address1": "Terenure",
                "address2": "Dublin 6w",
                "address3": "",
                "district": "Terenure",
                "town": "Dublin",
                "county": "County Dublin",
                "province": "",
                "postcode": "6w",
                "address_type": "",
                "do_not_display": false,
                "meta": {
                    "when": "2015-07-05 20:41:20 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "geopoint": {
                "longitude": -6.2860198,
                "latitude": 53.3108101,
                "accuracy": 1000,
                "wgs84": [53.3108101, -6.2860198],
                "meta": {
                    "when": "2015-07-05 20:41:20 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "geohash": "gc7x2bytv"
            },
            "emails": [{
                "email_description": "",
                "dns_verified": false,
                "dns_verified_ts": 1436128686,
                "meta": {
                    "when": "2015-07-05 20:38:06 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 711985916682240
            }],
            "categories": [{
                "category_id": "1142",
                "category_name": "Central Heating Installation and Servicing",
                "meta": {
                    "when": "2015-07-05 20:38:06 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 711985917841408,
                "stopwords": "central heating installation and servicing",
                "stemmed": "cent heat instal serv",
                "phonetic": "SNT HT NSTL SRF"
            }, {
                "category_id": "2107",
                "category_name": "Oil Fired Heating Equipment",
                "meta": {
                    "when": "2015-07-05 20:43:04 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 711987138576384,
                "stopwords": "oil fired heating equipment",
                "stemmed": "oil fir heat equip",
                "phonetic": "OL FR HT KP"
            }, {
                "category_id": "734",
                "category_name": "Boilers Servicing and Repairs",
                "meta": {
                    "when": "2015-07-05 20:43:47 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 711987315400704,
                "stopwords": "boilers servicing and repairs",
                "stemmed": "boil serv repair",
                "phonetic": "BL SRF RPR"
            }, {
                "category_id": "364",
                "category_name": "Plumbers",
                "meta": {
                    "when": "2015-07-05 20:44:27 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 711987475640320,
                "stopwords": "plumbers",
                "stemmed": "plumb",
                "phonetic": "PLM"
            }, {
                "category_id": "618",
                "category_name": "Solar Energy Equipment",
                "meta": {
                    "when": "2015-07-05 20:45:01 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 711987619807232,
                "stopwords": "solar energy equipment",
                "stemmed": "sol energy equip",
                "phonetic": "SL NRJ KP"
            }, {
                "category_id": "1405",
                "category_name": "Drain and Sewer Cleaning and Maintenance",
                "meta": {
                    "when": "2015-07-05 20:45:29 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 711987732926464,
                "stopwords": "drain and sewer cleaning and maintenance",
                "stemmed": "drain sew cle maint",
                "phonetic": "TRN S KL MNT"
            }, {
                "category_id": "1408",
                "category_name": "Drainage Contractors",
                "meta": {
                    "when": "2015-07-05 20:46:09 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 711987893903360,
                "stopwords": "drainage contractors",
                "stemmed": "drain contract",
                "phonetic": "TRN KNTRKT"
            }, {
                "category_id": "2012",
                "category_name": "Drainage System Installation",
                "meta": {
                    "when": "2015-07-05 20:47:02 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 711988112572416,
                "stopwords": "drainage system installation",
                "stemmed": "drain system instal",
                "phonetic": "TRN SSTM NSTL"
            }, {
                "category_id": "269",
                "category_name": "Bathroom Planners &amp; Fitters",
                "meta": {
                    "when": "2015-07-05 20:49:00 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 711988595372032,
                "stopwords": "bathroom planners fitters",
                "stemmed": "bathroom plan fit",
                "phonetic": "B0RM PLN FT"
            }],
            "lastEditDate": "2015-09-18 19:52:30 +00:00",
            "facets": ["hasPhone", "hasWebsite", "hasEmail", "hasTwitter", "hasFacebook", "hasSocialMedia"],
            "contentScore": 6,
            "normalised_locations": {
                "source": "6w",
                "locations": [{
                    "location_id": "2801",
                    "name": "D6W",
                    "resolution": "neighbourhood"
                }, {
                    "location_id": "2969",
                    "name": "Dublin",
                    "resolution": "town"
                }, {
                    "location_id": "2668",
                    "name": "County Dublin",
                    "resolution": "county"
                }, {
                    "location_id": "1734",
                    "name": "Leinster",
                    "resolution": "province"
                }]
            },
            "claim": {
                "claimed_user_id": "571fac3c4ad517fb47fd12547eef6cf4",
                "expiry_date": "2016-07-05 20:41:20 +00:00",
                "claimed_date": "2015-07-05 20:41:20 +00:00",
                "claim_method": {
                    "method": "sms",
                    "phone_number": "+353873432022"
                },
                "claimed_image": "http://www.centralindex.com/images/claimed_entity_icon.png",
                "meta": {
                    "when": "2015-07-05 20:41:20 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "claimed_referrer_url": "www.yourlocal.ie",
                "claimed_referrer_name": "Yourlocal.ie"
            },
            "socialmedia": [{
                "website_url": "http://twitter.com/murfittenergy",
                "type": "twitter",
                "canonicalised": true,
                "meta": {
                    "when": "2015-09-18 19:52:30 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 719650697490433
            }, {
                "website_url": "http://www.facebook.com/pages/murfitt-energy-solutions/564045097043161",
                "type": "facebook",
                "canonicalised": true,
                "meta": {
                    "when": "2015-09-18 19:52:30 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 719650697494529
            }]
        }, {
            "_id": "379236608286720",
            "_order": [5.242031741881504E-16, 3, 737687],
            "when": "2012-12-07 14:37:42 +00:00",
            "country": "ie",
            "status": {
                "status": "active",
                "meta": {
                    "when": "2013-02-19 18:14:32 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "tags": [{
                "tag": "fireplace construction",
                "language": "en",
                "meta": {
                    "when": "2012-12-14 20:48:40 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "fireplace construction",
                "stemmed": "fireplac construct",
                "phonetic": "FRPLK KNSTRKT",
                "gen_id": 392603277185024
            }, {
                "tag": "fireplace installation",
                "language": "en",
                "meta": {
                    "when": "2012-12-14 20:48:40 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "fireplace installation",
                "stemmed": "fireplac instal",
                "phonetic": "FRPLK NSTL",
                "gen_id": 392603277185025
            }, {
                "tag": "gas equipment",
                "language": "en",
                "meta": {
                    "when": "2012-12-14 20:48:40 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "gas equipment",
                "stemmed": "gas equip",
                "phonetic": "KS KP",
                "gen_id": 392603277185026
            }, {
                "tag": "gas log fire",
                "language": "en",
                "meta": {
                    "when": "2012-12-14 20:48:40 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "gas log fire",
                "stemmed": "gas log fir",
                "phonetic": "KS LK FR",
                "gen_id": 392603277185027
            }, {
                "tag": "heating",
                "language": "en",
                "meta": {
                    "when": "2012-12-14 20:48:40 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "heating",
                "stemmed": "heat",
                "phonetic": "HT",
                "gen_id": 392603277185028
            }],
            "name": {
                "name": "The Gas Man",
                "formal_name": "The Gas Man",
                "meta": {
                    "when": "2013-06-19 14:37:10 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "the gas man",
                "stemmed": "gas man",
                "phonetic": "KS MN"
            },
            "postal_address": {
                "building_number": "",
                "address1": "28 Fassaugh Avenue",
                "address2": "Cabra",
                "address3": "",
                "district": "",
                "town": "Dublin",
                "county": "County Dublin",
                "province": "",
                "postcode": "Dublin 7",
                "address_type": "",
                "do_not_display": false,
                "meta": {
                    "when": "2013-06-19 14:37:10 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "geopoint": {
                "longitude": -6.2932401,
                "latitude": 53.366909,
                "accuracy": 177,
                "wgs84": [53.366909, -6.2932401],
                "meta": {
                    "when": "2013-06-19 14:37:10 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "geohash": "gc7x8g1ku"
            },
            "categories": [{
                "category_id": "1693",
                "category_name": "Gas Installers",
                "meta": {
                    "when": "2012-12-14 20:48:40 +00:00",
                    "scope": "public",
                    "confidence": 0
                },
                "gen_id": 447891994501120,
                "stopwords": "gas installers",
                "stemmed": "gas instal",
                "phonetic": "KS NSTL"
            }, {
                "category_id": "734",
                "category_name": "Boilers Servicing and Repairs",
                "meta": {
                    "when": "2013-06-19 14:37:10 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 447891994509313,
                "stopwords": "boilers servicing and repairs",
                "stemmed": "boil serv repair",
                "phonetic": "BL SRF RPR"
            }],
            "advertisers": [{
                "masheryid": "yourlocalie",
                "categories": [1693, 734],
                "locations": ["Dublin"],
                "is_national": false,
                "tags": {
                    "en": ["fireplace construction", "fireplace installation", "gas equipment", "gas log fire", "heating"]
                },
                "meta": {
                    "when": "2012-12-15 08:57:17 +00:00",
                    "scope": "private",
                    "confidence": 100
                },
                "gen_id": 392603277185029,
                "expiry_date": "2013-06-30 00:00:00 +00:00"
            }],
            "lastEditDate": "2013-06-19 14:37:10 +00:00",
            "emails": [{
                "email_description": "",
                "meta": {
                    "when": "2013-06-19 14:37:10 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 447891994599426,
                "dns_verified": true,
                "dns_verified_ts": 1443341164
            }],
            "normalised_locations": {
                "source": "Dublin 7",
                "locations": [{
                    "location_id": "2802",
                    "name": "D7",
                    "resolution": "neighbourhood"
                }, {
                    "location_id": "2969",
                    "name": "Dublin",
                    "resolution": "town"
                }, {
                    "location_id": "2668",
                    "name": "County Dublin",
                    "resolution": "county"
                }, {
                    "location_id": "1734",
                    "name": "Leinster",
                    "resolution": "province"
                }]
            },
            "facets": ["hasPhone", "hasEmail", "hasEmployees"],
            "contentScore": 3,
            "suppliers": [{
                "masheryid": "yourlocalie",
                "supplier_id": "the_gas_man_01_8686022"
            }, {
                "masheryid": "yourlocalie",
                "supplier_id": "the_gas_man_01_8686022_1"
            }, {
                "masheryid": "billmoss",
                "supplier_id": "42676"
            }]
        }, {
            "_id": "440730029617152",
            "_order": [4.796722169312685E-16, 3, 629896],
            "when": "2013-05-30 08:55:04 +00:00",
            "country": "ie",
            "status": {
                "status": "active",
                "meta": {
                    "when": "2013-11-29 06:24:52 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "name": {
                "name": "Hydroflow Plumbing &amp; Heating",
                "formal_name": "",
                "meta": {
                    "when": "2013-11-28 12:47:51 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "hydroflow plumbing heating",
                "stemmed": "hydroflow plumb heat",
                "phonetic": "HTRFL PLMB HT"
            },
            "postal_address": {
                "building_number": "",
                "address1": "33 Oatfield Avenue",
                "address2": "Clondalkin",
                "address3": "",
                "district": "",
                "town": "Dublin",
                "county": "County Dublin",
                "province": "",
                "postcode": "Dublin 22",
                "address_type": "",
                "do_not_display": false,
                "meta": {
                    "when": "2013-11-28 12:47:51 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "geopoint": {
                "longitude": -6.39116,
                "latitude": 53.3446083,
                "accuracy": 177,
                "wgs84": [53.3446083, -6.39116],
                "meta": {
                    "when": "2013-11-29 06:24:49 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "geohash": "gc7rqx44g"
            },
            "emails": [{
                "email_description": "",
                "meta": {
                    "when": "2013-11-28 12:47:51 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 505455789490177,
                "dns_verified": true,
                "dns_verified_ts": 1443441442
            }],
            "categories": [{
                "category_id": "1142",
                "category_name": "Central Heating Installation and Servicing",
                "meta": {
                    "when": "2013-05-30 08:55:04 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 440730030059520,
                "stopwords": "central heating installation and servicing",
                "stemmed": "cent heat instal serv",
                "phonetic": "SNT HT NSTL SRF"
            }, {
                "category_id": "1775",
                "category_name": "Heating Consultants",
                "meta": {
                    "when": "2013-11-28 12:47:51 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 505455789465600,
                "stopwords": "heating consultants",
                "stemmed": "heat consult",
                "phonetic": "HT KNSLT"
            }],
            "lastEditDate": "2014-07-04 07:21:16 +00:00",
            "normalised_locations": {
                "source": "Dublin 22",
                "locations": [{
                    "location_id": "2795",
                    "name": "D22",
                    "resolution": "neighbourhood"
                }, {
                    "location_id": "2969",
                    "name": "Dublin",
                    "resolution": "town"
                }, {
                    "location_id": "2668",
                    "name": "County Dublin",
                    "resolution": "county"
                }, {
                    "location_id": "1734",
                    "name": "Leinster",
                    "resolution": "province"
                }]
            },
            "facets": ["hasPhone", "hasWebsite", "hasEmail"],
            "contentScore": 3,
            "suppliers": [{
                "masheryid": "billmoss",
                "supplier_id": "389286"
            }]
        }, {
            "_id": "380344070963200",
            "_order": [4.2768731679898955E-16, 11, 579948],
            "when": "2012-12-10 17:43:59 +00:00",
            "country": "ie",
            "status": {
                "status": "active",
                "meta": {
                    "when": "2017-02-13 14:37:18 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "name": {
                "name": "ACR Plumbing and Heating Limited",
                "formal_name": "",
                "branch_name": "",
                "meta": {
                    "when": "2017-02-18 12:22:10 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "acr plumbing and heating",
                "stemmed": "acr plumb heat",
                "phonetic": "AKR PLMB HT"
            },
            "postal_address": {
                "building_number": "10",
                "address1": "Upper Mount Pleasant Avenue",
                "address2": "Ranelagh",
                "address3": "",
                "district": "",
                "town": "Dublin",
                "county": "County Dublin",
                "province": "",
                "postcode": "Dublin 6",
                "address_type": "",
                "do_not_display": false,
                "meta": {
                    "when": "2017-02-18 12:19:31 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "geopoint": {
                "longitude": -6.2537417,
                "latitude": 53.3247719,
                "accuracy": 100,
                "wgs84": [53.3247719, -6.2537417],
                "meta": {
                    "when": "2017-02-18 12:19:44 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "geohash": "gc7x3eqpm"
            },
            "categories": [{
                "category_id": "364",
                "category_name": "Plumbers",
                "meta": {
                    "when": "2017-02-13 14:39:37 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 447901275123712,
                "stopwords": "plumbers",
                "stemmed": "plumb",
                "phonetic": "PLM"
            }, {
                "category_id": "1775",
                "category_name": "Heating Consultants",
                "meta": {
                    "when": "2017-02-13 14:37:18 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 497489787645952,
                "stopwords": "heating consultants",
                "stemmed": "heat consult",
                "phonetic": "HT KNSLT"
            }],
            "lastEditDate": "2017-02-22 11:52:14 +00:00",
            "normalised_locations": {
                "source": "Dublin 6",
                "locations": [{
                    "location_id": "2800",
                    "name": "D6",
                    "resolution": "neighbourhood"
                }, {
                    "location_id": "2969",
                    "name": "Dublin",
                    "resolution": "town"
                }, {
                    "location_id": "2668",
                    "name": "County Dublin",
                    "resolution": "county"
                }, {
                    "location_id": "1734",
                    "name": "Leinster",
                    "resolution": "province"
                }]
            },
            "facets": ["hasPhone", "hasWebsite", "hasEmail", "hasDescriptions", "hasTwitter", "hasFacebook", "hasGallery", "hasLogo", "hasEmployees", "hasSocialMedia", "isClaimed"],
            "contentScore": 11,
            "claim": {
                "claimed_user_id": "0ea8397b8aa841fadedcd885d20029e2",
                "expiry_date": "2018-02-13 14:37:18 +00:00",
                "claimed_date": "2017-02-13 14:37:18 +00:00",
                "claim_method": {
                    "method": "phone",
                    "phone_number": "+35314979838"
                },
                "claimed_image": "http://www.centralindex.com/images/claimed_entity_icon.png",
                "meta": {
                    "when": "2017-02-13 14:37:18 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "claimed_referrer_url": "www.yourlocal.ie",
                "claimed_referrer_name": "Yourlocal.ie"
            },
            "emails": [{
                "email_description": "",
                "dns_verified": true,
                "dns_verified_ts": 1486996733,
                "meta": {
                    "when": "2017-02-13 14:38:53 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 920341435707392
            }],
            "socialmedia": [{
                "website_url": "https://www.facebook.com/ACR-Plumbing-Heating-682506745148692/",
                "type": "facebook",
                "canonicalised": false,
                "meta": {
                    "when": "2017-02-13 14:39:03 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 920341478547456
            }, {
                "website_url": "https://twitter.com/ACROlumbers",
                "type": "twitter",
                "canonicalised": true,
                "meta": {
                    "when": "2017-02-18 12:29:19 +00:00",
                    "scope": "public",
                    "confidence": 0
                },
                "gen_id": 922078552543232
            }, {
                "website_url": "https://twitter.com/ACRPlumbers",
                "type": "twitter",
                "canonicalised": true,
                "meta": {
                    "when": "2017-02-18 12:31:09 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 922079517364224
            }],
            "logos": [{
                "logo_name": "ACR Plumbing and Heating Ltd.",
                "logo_type": "image/jpeg",
                "logo_hash": "14329f209bc713d033cb0d69c83fd5c3",
                "large": {
                    "logo_path": "W/48/9ff76b43ed95b42aa2847d814f517814.jpg",
                    "logo_size": 8721,
                    "logo_width": 177,
                    "logo_height": 115
                },
                "medium": {
                    "logo_path": "W/48/9ff76b43ed95b42aa2847d814f517814.jpg",
                    "logo_size": 8721,
                    "logo_width": 177,
                    "logo_height": 115
                },
                "small": {
                    "logo_path": "W/48/be4e99fa5815e5db7794249166261751.jpg",
                    "logo_size": 3472,
                    "logo_width": 100,
                    "logo_height": 65
                },
                "meta": {
                    "when": "2017-02-13 14:42:12 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 920342253477888
            }],
            "images": [{
                "image_name": "ACR Plumbing and Heating Van Side View",
                "image_type": "image/jpeg",
                "image_hash": "551c9223fd872a5a9256ee9d05de9e42",
                "large": {
                    "image_path": "W/48/c0049613cdc4ff7aaa7996988b79279a.jpg",
                    "image_size": 197758,
                    "image_width": 1000,
                    "image_height": 666
                },
                "medium": {
                    "image_path": "W/48/42e4bab0e4ee67ac5475ef790c56b1ac.jpg",
                    "image_size": 80460,
                    "image_width": 512,
                    "image_height": 341
                },
                "small": {
                    "image_path": "W/48/d79ad12e26b475f3b88fbcd60243c8e3.jpg",
                    "image_size": 37605,
                    "image_width": 256,
                    "image_height": 170
                },
                "thumb": {
                    "image_path": "W/48/ea7d94213f5452f5484d717c84f098a5.jpg",
                    "image_size": 17828,
                    "image_width": 64,
                    "image_height": 43
                },
                "meta": {
                    "when": "2017-02-22 11:39:49 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 923482486259712
            }, {
                "image_name": "ACR Plumbing and Heating Van Fleet",
                "image_type": "image/jpeg",
                "image_hash": "6e43c0835c65695be7573d4ca722da02",
                "large": {
                    "image_path": "W/48/a8eb5f1771d7d43f5d86127441b5487f.jpg",
                    "image_size": 105731,
                    "image_width": 1024,
                    "image_height": 287
                },
                "medium": {
                    "image_path": "W/48/54c780d39ed0ad8392626ad08952eedf.jpg",
                    "image_size": 40747,
                    "image_width": 512,
                    "image_height": 143
                },
                "small": {
                    "image_path": "W/48/b9c7db69d497af4b1894c254c93ce28c.jpg",
                    "image_size": 20345,
                    "image_width": 256,
                    "image_height": 72
                },
                "thumb": {
                    "image_path": "W/48/5824a069f2109046b4efdec7ae924777.jpg",
                    "image_size": 12043,
                    "image_width": 64,
                    "image_height": 18
                },
                "meta": {
                    "when": "2017-02-22 11:46:30 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 923484128735232
            }, {
                "image_name": "ACR Plumbing and Heating Vans",
                "image_type": "image/jpeg",
                "image_hash": "7c9a6c9c74f3e3a83c593acf08d02d4d",
                "large": {
                    "image_path": "W/48/a05e6839358607bfb5282b23ac4da778.jpg",
                    "image_size": 153119,
                    "image_width": 615,
                    "image_height": 615
                },
                "medium": {
                    "image_path": "W/48/a1910b3b27c6aec8789e0e671bf44c33.jpg",
                    "image_size": 100348,
                    "image_width": 512,
                    "image_height": 512
                },
                "small": {
                    "image_path": "W/48/263fb8a67dcd3e040066dc9e87e07ea6.jpg",
                    "image_size": 33028,
                    "image_width": 256,
                    "image_height": 256
                },
                "thumb": {
                    "image_path": "W/48/8ac229fcbeceedb47ca607fbcb8cbc80.jpg",
                    "image_size": 3412,
                    "image_width": 64,
                    "image_height": 64
                },
                "meta": {
                    "when": "2017-02-22 11:48:45 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 923484680871936
            }, {
                "image_name": "ACR Property Management Plumbers",
                "image_type": "image/jpeg",
                "image_hash": "87b9e37a79ff5f6fd77aeec556d5d35d",
                "large": {
                    "image_path": "W/48/28c0efc51617b92269743bb5bf01adff.jpg",
                    "image_size": 554030,
                    "image_width": 1024,
                    "image_height": 512
                },
                "medium": {
                    "image_path": "W/48/749a90c924d1bdf8b191d4ae703773c3.jpg",
                    "image_size": 212493,
                    "image_width": 512,
                    "image_height": 256
                },
                "small": {
                    "image_path": "W/48/27ae14ac4cab76c6b84a255de90a05ab.jpg",
                    "image_size": 97095,
                    "image_width": 256,
                    "image_height": 128
                },
                "thumb": {
                    "image_path": "W/48/9ce45deb939d9fb7b2801663c0ef9f41.jpg",
                    "image_size": 53879,
                    "image_width": 64,
                    "image_height": 32
                },
                "meta": {
                    "when": "2017-02-22 11:47:42 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 923484425064448
            }, {
                "image_name": "ACR Plumbing and Heating Accredited Installers",
                "image_type": "image/png",
                "image_hash": "e411a4c2ca6b1ea5fa4404488d9e99ba",
                "large": {
                    "image_path": "W/48/ec1cbe7ef2187baf7e7785e94e578c6d.png",
                    "image_size": 15955,
                    "image_width": 279,
                    "image_height": 92
                },
                "medium": {
                    "image_path": "W/48/ec1cbe7ef2187baf7e7785e94e578c6d.png",
                    "image_size": 15955,
                    "image_width": 279,
                    "image_height": 92
                },
                "small": {
                    "image_path": "W/48/b68ca2c3303d9fef6b17cc5cc68ebec2.png",
                    "image_size": 14313,
                    "image_width": 256,
                    "image_height": 84
                },
                "thumb": {
                    "image_path": "W/48/fa608eebbbf8b6dee9918f093ff3b1c8.png",
                    "image_size": 1839,
                    "image_width": 64,
                    "image_height": 21
                },
                "meta": {
                    "when": "2017-02-22 11:52:14 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 923485535043584
            }, {
                "image_name": "ACR Experts in Plumbing and Heating",
                "image_type": "image/jpeg",
                "image_hash": "1e3f10cd5e7da8249c66a07ef924fd61",
                "large": {
                    "image_path": "W/48/6b81153161c4e07d1b820675abcf73a5.jpg",
                    "image_size": 63240,
                    "image_width": 1024,
                    "image_height": 576
                },
                "medium": {
                    "image_path": "W/48/f8149c3d55f660b3864c57fdb189ffa8.jpg",
                    "image_size": 26476,
                    "image_width": 512,
                    "image_height": 288
                },
                "small": {
                    "image_path": "W/48/ce90f6edb2984f362c4a3e6ed52db91b.jpg",
                    "image_size": 11522,
                    "image_width": 256,
                    "image_height": 144
                },
                "thumb": {
                    "image_path": "W/48/92f9cd1871b5c8847b87a386698195b2.jpg",
                    "image_size": 4328,
                    "image_width": 64,
                    "image_height": 36
                },
                "meta": {
                    "when": "2017-02-22 11:51:52 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 923485444362240
            }],
            "descriptions": [{
                "headline": "ACR Plumbing and Heating",
                "body": "From a boiler service to a complete bathroom renovation, we can do it all. \n\nACR Plumbing &amp; Heating has been established for twenty years, providing plumbing and heating solutions for the domestic and commercial market. The Managing Director, Keith Kavanagh, and the Office Manager, Olive Fortune, have been with the company for 20 years, ensuring our customers are 100% satisfied from the time they first call us until the job is completed.\n\nOur reputation has been built on an 'uncompromising commitment' to the highest possible standards. Our plumbing and heating engineers are all highly qualified, Bord Gáis approved installers. High-quality workmanship, friendly staff, and punctual services ensure our excellent reputation. Every job is fully assessed and quoted, free of charge, and there are no hidden extras.\n\nACR Plumbing &amp; Heating is a C2 registered company and is fully insured with both public liability insurance and employer's liability insurance.",
                "meta": {
                    "when": "2017-02-13 14:46:38 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 920343342854144,
                "processed_headline": "ACR Plumbing and Heating",
                "processed_body": "From a boiler service to a complete bathroom renovation, we can do it all. \n\nACR Plumbing &amp; Heating has been established for twenty years, providing plumbing and heating solutions for the domestic and commercial market. The Managing Director, Keith Kavanagh, and the Office Manager, Olive Fortune, have been with the company for 20 years, ensuring our customers are 100% satisfied from the time they first call us until the job is completed.\n\nOur reputation has been built on an 'uncompromising commitment' to the highest possible standards. Our plumbing and heating engineers are all highly qualified, Bord Gáis approved installers. High-quality workmanship, friendly staff, and punctual services ensure our excellent reputation. Every job is fully assessed and quoted, free of charge, and there are no hidden extras.\n\nACR Plumbing &amp; Heating is a C2 registered company and is fully insured with both public liability insurance and employer's liability insurance."
            }],
            "tags": [{
                "tag": "plumbing",
                "language": "en",
                "meta": {
                    "when": "2017-02-18 14:52:56 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 922114359742464,
                "stopwords": "plumbing",
                "stemmed": "plumb",
                "phonetic": "PLM"
            }, {
                "tag": "heating",
                "language": "en",
                "meta": {
                    "when": "2017-02-18 14:56:38 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 922115271970816,
                "stopwords": "heating",
                "stemmed": "heat",
                "phonetic": "HT"
            }, {
                "tag": "gas central heating",
                "language": "en",
                "meta": {
                    "when": "2017-02-18 14:53:10 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 922114418237440,
                "stopwords": "gas central heating",
                "stemmed": "gas cent heat",
                "phonetic": "KS SNT HT"
            }, {
                "tag": "gas boiler repair",
                "language": "en",
                "meta": {
                    "when": "2017-02-18 14:49:58 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 922113632768000,
                "stopwords": "gas boiler repair",
                "stemmed": "gas boil repair",
                "phonetic": "KS BL RPR"
            }, {
                "tag": "gas boiler servicing",
                "language": "en",
                "meta": {
                    "when": "2017-02-18 14:50:42 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 922113812029440,
                "stopwords": "gas boiler servicing",
                "stemmed": "gas boil serv",
                "phonetic": "KS BL SRF"
            }, {
                "tag": "bathroom renovations",
                "language": "en",
                "meta": {
                    "when": "2017-02-18 14:53:01 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 922114380824576,
                "stopwords": "bathroom renovations",
                "stemmed": "bathroom renov",
                "phonetic": "B0RM RNF"
            }, {
                "tag": "emergency plumber",
                "language": "en",
                "meta": {
                    "when": "2017-02-18 14:54:58 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 922114861457408,
                "stopwords": "emergency plumber",
                "stemmed": "emerg plumb",
                "phonetic": "EMRK PLM"
            }],
            "suppliers": [{
                "masheryid": "billmoss",
                "supplier_id": "100314"
            }, {
                "masheryid": "yourlocalie",
                "supplier_id": "acr_plumbing_01_4979838"
            }]
        }, {
            "_id": "380347161686016",
            "_order": [4.2768731679898955E-16, 3, 605613],
            "when": "2012-12-10 17:56:33 +00:00",
            "country": "ie",
            "status": {
                "status": "active",
                "meta": {
                    "when": "2015-09-23 15:33:38 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "postal_address": {
                "building_number": "",
                "address1": "72 Upper Georges Street",
                "address2": "",
                "address3": "",
                "district": "",
                "town": "Dun Laoghaire",
                "county": "County Dublin",
                "province": "",
                "postcode": "",
                "address_type": "",
                "do_not_display": false,
                "meta": {
                    "when": "2015-09-23 08:57:34 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "geopoint": {
                "longitude": -6.13066,
                "latitude": 53.28994,
                "accuracy": 177,
                "wgs84": [53.28994, -6.13066],
                "meta": {
                    "when": "2015-09-23 15:33:38 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "geohash": "gc7xhmpu3"
            },
            "categories": [{
                "category_id": "364",
                "category_name": "Plumbers",
                "meta": {
                    "when": "2012-12-10 17:56:35 +00:00",
                    "scope": "public",
                    "confidence": 0
                },
                "gen_id": 447901254492161,
                "stopwords": "plumbers",
                "stemmed": "plumb",
                "phonetic": "PLM"
            }, {
                "category_id": "1775",
                "category_name": "Heating Consultants",
                "meta": {
                    "when": "2015-09-23 08:57:34 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 497502303457281,
                "stopwords": "heating consultants",
                "stemmed": "heat consult",
                "phonetic": "HT KNSLT"
            }],
            "lastEditDate": "2015-09-23 15:33:38 +00:00",
            "emails": [{
                "email_description": "",
                "meta": {
                    "when": "2015-09-23 08:57:34 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 497502303473664,
                "dns_verified": true,
                "dns_verified_ts": 1443539069
            }],
            "facets": ["hasPhone", "hasEmail", "hasEmployees"],
            "contentScore": 3,
            "name": {
                "name": "Dun Laoghaire Gas",
                "formal_name": "",
                "branch_name": "",
                "meta": {
                    "when": "2015-09-23 08:57:34 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "dun laoghaire gas",
                "stemmed": "dun laoghair gas",
                "phonetic": "TN LKHR KS"
            },
            "suppliers": [{
                "masheryid": "billmoss",
                "supplier_id": "100078"
            }, {
                "masheryid": "yourlocalie",
                "supplier_id": "dun_laoghaire_warm_home_centre_01_2801322"
            }]
        }, {
            "_id": "380349348728832",
            "_order": [4.267223874533893E-16, 3, 1365698],
            "when": "2012-12-10 18:05:27 +00:00",
            "country": "ie",
            "status": {
                "status": "active",
                "meta": {
                    "when": "2013-11-06 11:43:07 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "name": {
                "name": "Kelco Services",
                "formal_name": "",
                "meta": {
                    "when": "2013-11-01 13:48:27 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "kelco services",
                "stemmed": "kelco serv",
                "phonetic": "KLK SRF"
            },
            "postal_address": {
                "building_number": "",
                "address1": "12 Glenbourne Green",
                "address2": "Leopardstown Valley",
                "address3": "",
                "district": "",
                "town": "Dublin",
                "county": "County Dublin",
                "province": "",
                "postcode": "Dublin 18",
                "address_type": "",
                "do_not_display": false,
                "meta": {
                    "when": "2013-11-01 13:48:27 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "geopoint": {
                "longitude": -6.2009602,
                "latitude": 53.2610092,
                "accuracy": 177,
                "wgs84": [53.2610092, -6.2009602],
                "meta": {
                    "when": "2013-11-06 11:43:07 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "geohash": "gc7wfzueg"
            },
            "categories": [{
                "category_id": "364",
                "category_name": "Plumbers",
                "meta": {
                    "when": "2012-12-14 18:55:36 +00:00",
                    "scope": "public",
                    "confidence": 0
                },
                "gen_id": 447901379358721,
                "stopwords": "plumbers",
                "stemmed": "plumb",
                "phonetic": "PLM"
            }, {
                "category_id": "1775",
                "category_name": "Heating Consultants",
                "meta": {
                    "when": "2013-11-01 13:48:27 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 497394433384448,
                "stopwords": "heating consultants",
                "stemmed": "heat consult",
                "phonetic": "HT KNSLT"
            }],
            "tags": [{
                "tag": "gas fitting",
                "language": "en",
                "meta": {
                    "when": "2012-12-14 18:55:36 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "gas fitting",
                "stemmed": "gas fit",
                "phonetic": "KS FT",
                "gen_id": 392604604190720
            }, {
                "tag": "energy",
                "language": "en",
                "meta": {
                    "when": "2012-12-14 18:55:36 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "energy",
                "stemmed": "energy",
                "phonetic": "ENRJ",
                "gen_id": 392604604190721
            }, {
                "tag": "renewable",
                "language": "en",
                "meta": {
                    "when": "2012-12-14 18:55:36 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "renewable",
                "stemmed": "renew",
                "phonetic": "RN",
                "gen_id": 392604604190722
            }, {
                "tag": "heating contractor",
                "language": "en",
                "meta": {
                    "when": "2012-12-14 18:55:36 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "heating contractor",
                "stemmed": "heat contract",
                "phonetic": "HT KNTRKT",
                "gen_id": 392604604194816
            }, {
                "tag": "plumber",
                "language": "en",
                "meta": {
                    "when": "2012-12-14 18:55:36 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "plumber",
                "stemmed": "plumb",
                "phonetic": "PLM",
                "gen_id": 392604604194817
            }],
            "images": [{
                "image_name": "LRG_b2sH5u3AZk.jpg",
                "image_type": "image/jpeg",
                "image_hash": "34870040a19e161f31ac362b025b556b",
                "large": {
                    "image_path": "W/24/34870040a19e161f31ac362b025b556b_1024.jpg",
                    "image_size": 33382,
                    "image_width": "480",
                    "image_height": "345"
                },
                "medium": {
                    "image_path": "W/24/34870040a19e161f31ac362b025b556b_512.jpg",
                    "image_size": 33382,
                    "image_width": "480",
                    "image_height": "345"
                },
                "small": {
                    "image_path": "W/24/34870040a19e161f31ac362b025b556b_256.jpg",
                    "image_size": 11366,
                    "image_width": "256",
                    "image_height": "184"
                },
                "thumb": {
                    "image_path": "W/24/34870040a19e161f31ac362b025b556b_64.jpg",
                    "image_size": 1352,
                    "image_width": "64",
                    "image_height": "46"
                },
                "meta": {
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 380602969743360
            }, {
                "image_name": "LRG_MzFAQrYMqn.JPG",
                "image_type": "image/jpeg",
                "image_hash": "53a337cf0d1bd11046157ec8170edd51",
                "large": {
                    "image_path": "Q/74/53a337cf0d1bd11046157ec8170edd51_1024.jpg",
                    "image_size": 14746,
                    "image_width": "270",
                    "image_height": "360"
                },
                "medium": {
                    "image_path": "Q/74/53a337cf0d1bd11046157ec8170edd51_512.jpg",
                    "image_size": 14746,
                    "image_width": "270",
                    "image_height": "360"
                },
                "small": {
                    "image_path": "Q/74/53a337cf0d1bd11046157ec8170edd51_256.jpg",
                    "image_size": 5079,
                    "image_width": "192",
                    "image_height": "256"
                },
                "thumb": {
                    "image_path": "Q/74/53a337cf0d1bd11046157ec8170edd51_64.jpg",
                    "image_size": 901,
                    "image_width": "48",
                    "image_height": "64"
                },
                "meta": {
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 380602969743361
            }, {
                "image_name": "LRG_RKmBnHcJYl.jpg",
                "image_type": "image/jpeg",
                "image_hash": "46b30cd0521c1d70e3bc43c946c4585e",
                "large": {
                    "image_path": "X/81/46b30cd0521c1d70e3bc43c946c4585e_1024.jpg",
                    "image_size": 21914,
                    "image_width": "175",
                    "image_height": "135"
                },
                "medium": {
                    "image_path": "X/81/46b30cd0521c1d70e3bc43c946c4585e_512.jpg",
                    "image_size": 21914,
                    "image_width": "175",
                    "image_height": "135"
                },
                "small": {
                    "image_path": "X/81/46b30cd0521c1d70e3bc43c946c4585e_256.jpg",
                    "image_size": 21914,
                    "image_width": "175",
                    "image_height": "135"
                },
                "thumb": {
                    "image_path": "X/81/46b30cd0521c1d70e3bc43c946c4585e_64.jpg",
                    "image_size": 3113,
                    "image_width": "64",
                    "image_height": "49"
                },
                "meta": {
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 380602969743362
            }, {
                "image_name": "LRG_pKZceqkXYd.jpg",
                "image_type": "image/jpeg",
                "image_hash": "8bcd8a1b39653f8f0f6f48190e9441a1",
                "large": {
                    "image_path": "U/4/8bcd8a1b39653f8f0f6f48190e9441a1_1024.jpg",
                    "image_size": 45363,
                    "image_width": "190",
                    "image_height": "179"
                },
                "medium": {
                    "image_path": "U/4/8bcd8a1b39653f8f0f6f48190e9441a1_512.jpg",
                    "image_size": 45363,
                    "image_width": "190",
                    "image_height": "179"
                },
                "small": {
                    "image_path": "U/4/8bcd8a1b39653f8f0f6f48190e9441a1_256.jpg",
                    "image_size": 45363,
                    "image_width": "190",
                    "image_height": "179"
                },
                "thumb": {
                    "image_path": "U/4/8bcd8a1b39653f8f0f6f48190e9441a1_64.jpg",
                    "image_size": 7649,
                    "image_width": "64",
                    "image_height": "60"
                },
                "meta": {
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 380602969743363
            }, {
                "image_name": "LRG_sLy1WDFvEO.gif",
                "image_type": "image/gif",
                "image_hash": "cec71ce00e6d7ead623c906187ba4931",
                "large": {
                    "image_path": "W/84/cec71ce00e6d7ead623c906187ba4931_1024.gif",
                    "image_size": 15565,
                    "image_width": "395",
                    "image_height": "337"
                },
                "medium": {
                    "image_path": "W/84/cec71ce00e6d7ead623c906187ba4931_512.gif",
                    "image_size": 15565,
                    "image_width": "395",
                    "image_height": "337"
                },
                "small": {
                    "image_path": "W/84/cec71ce00e6d7ead623c906187ba4931_256.gif",
                    "image_size": 11162,
                    "image_width": "256",
                    "image_height": "218"
                },
                "thumb": {
                    "image_path": "W/84/cec71ce00e6d7ead623c906187ba4931_64.gif",
                    "image_size": 2058,
                    "image_width": "64",
                    "image_height": "55"
                },
                "meta": {
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 380602969747456
            }, {
                "image_name": "LRG_L1bvFFkF8c.JPG",
                "image_type": "image/jpeg",
                "image_hash": "6fc96b8bb963a9daa5edcc35f91fbb0c",
                "large": {
                    "image_path": "N/35/6fc96b8bb963a9daa5edcc35f91fbb0c_1024.jpg",
                    "image_size": 13312,
                    "image_width": "270",
                    "image_height": "360"
                },
                "medium": {
                    "image_path": "N/35/6fc96b8bb963a9daa5edcc35f91fbb0c_512.jpg",
                    "image_size": 13312,
                    "image_width": "270",
                    "image_height": "360"
                },
                "small": {
                    "image_path": "N/35/6fc96b8bb963a9daa5edcc35f91fbb0c_256.jpg",
                    "image_size": 4352,
                    "image_width": "192",
                    "image_height": "256"
                },
                "thumb": {
                    "image_path": "N/35/6fc96b8bb963a9daa5edcc35f91fbb0c_64.jpg",
                    "image_size": 851,
                    "image_width": "48",
                    "image_height": "64"
                },
                "meta": {
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 380602969747457
            }, {
                "image_name": "LRG_Jt1udJkXVO.JPG",
                "image_type": "image/jpeg",
                "image_hash": "dc8230f715c0d236bde1fad8f83e30ce",
                "large": {
                    "image_path": "L/77/dc8230f715c0d236bde1fad8f83e30ce_1024.jpg",
                    "image_size": 21197,
                    "image_width": "480",
                    "image_height": "278"
                },
                "medium": {
                    "image_path": "L/77/dc8230f715c0d236bde1fad8f83e30ce_512.jpg",
                    "image_size": 21197,
                    "image_width": "480",
                    "image_height": "278"
                },
                "small": {
                    "image_path": "L/77/dc8230f715c0d236bde1fad8f83e30ce_256.jpg",
                    "image_size": 8950,
                    "image_width": "256",
                    "image_height": "148"
                },
                "thumb": {
                    "image_path": "L/77/dc8230f715c0d236bde1fad8f83e30ce_64.jpg",
                    "image_size": 1167,
                    "image_width": "64",
                    "image_height": "37"
                },
                "meta": {
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 380602969747458
            }],
            "lastEditDate": "2015-09-29 21:22:39 +00:00",
            "emails": [{
                "email_description": "",
                "meta": {
                    "when": "2013-06-19 15:15:21 +00:00",
                    "scope": "public",
                    "confidence": 0
                },
                "gen_id": 447901379452930,
                "dns_verified": true,
                "dns_verified_ts": 1443561485
            }, {
                "email_description": "",
                "meta": {
                    "when": "2013-11-01 13:48:27 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 497394433404929,
                "dns_verified": true,
                "dns_verified_ts": 1443561485
            }],
            "normalised_locations": {
                "source": "Dublin 18",
                "locations": [{
                    "location_id": "2792",
                    "name": "D18",
                    "resolution": "neighbourhood"
                }, {
                    "location_id": "2969",
                    "name": "Dublin",
                    "resolution": "town"
                }, {
                    "location_id": "2668",
                    "name": "County Dublin",
                    "resolution": "county"
                }, {
                    "location_id": "1734",
                    "name": "Leinster",
                    "resolution": "province"
                }]
            },
            "facets": ["hasPhone", "hasEmail", "hasGallery"],
            "contentScore": 3,
            "suppliers": [{
                "masheryid": "yourlocalie",
                "supplier_id": "kelco_services_087_2578496"
            }, {
                "masheryid": "yourlocalie",
                "supplier_id": "kelco_services_087_2578496_1"
            }, {
                "masheryid": "billmoss",
                "supplier_id": "316268"
            }]
        }, {
            "_id": "379243496026112",
            "_order": [4.267223874533893E-16, 3, 1588938],
            "when": "2012-12-07 15:05:44 +00:00",
            "country": "ie",
            "postal_address": {
                "building_number": "",
                "address1": "42 Rockfield Avenue",
                "address2": "Perrystown",
                "address3": "",
                "district": "",
                "town": "Dublin",
                "county": "County Dublin",
                "province": "",
                "postcode": "DUBLIN 12",
                "address_type": "",
                "do_not_display": false,
                "meta": {
                    "when": "2015-09-23 08:57:09 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "geopoint": {
                "longitude": -6.31689,
                "latitude": 53.30959,
                "accuracy": 177,
                "wgs84": [53.30959, -6.31689],
                "meta": {
                    "when": "2015-09-24 00:27:17 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "geohash": "gc7x228nv"
            },
            "categories": [{
                "category_id": "364",
                "category_name": "Plumbers",
                "meta": {
                    "when": "2012-12-14 20:46:32 +00:00",
                    "scope": "public",
                    "confidence": 0
                },
                "gen_id": 379243502317568,
                "stopwords": "plumbers",
                "stemmed": "plumb",
                "phonetic": "PLM"
            }, {
                "category_id": "1775",
                "category_name": "Heating Consultants",
                "meta": {
                    "when": "2015-09-23 08:57:09 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 740353794740224,
                "stopwords": "heating consultants",
                "stemmed": "heat consult",
                "phonetic": "HT KNSLT"
            }],
            "lastEditDate": "2015-09-24 00:27:18 +00:00",
            "status": {
                "status": "active",
                "meta": {
                    "when": "2015-09-24 00:27:18 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "normalised_locations": {
                "source": "DUBLIN 12",
                "locations": [{
                    "location_id": "2786",
                    "name": "D12",
                    "resolution": "neighbourhood"
                }, {
                    "location_id": "2969",
                    "name": "Dublin",
                    "resolution": "town"
                }, {
                    "location_id": "2668",
                    "name": "County Dublin",
                    "resolution": "county"
                }, {
                    "location_id": "1734",
                    "name": "Leinster",
                    "resolution": "province"
                }]
            },
            "facets": ["hasPhone", "hasEmail", "hasEmployees"],
            "contentScore": 3,
            "name": {
                "name": "Technogas Service Limited",
                "formal_name": "",
                "branch_name": "",
                "meta": {
                    "when": "2015-09-23 08:57:09 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "technogas service",
                "stemmed": "technoga serv",
                "phonetic": "TKSHNK SRF"
            },
            "emails": [{
                "email_description": "",
                "dns_verified": true,
                "dns_verified_ts": 1443537092,
                "meta": {
                    "when": "2015-09-23 08:57:09 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 740353794760704
            }],
            "suppliers": [{
                "masheryid": "billmoss",
                "supplier_id": "100177"
            }, {
                "masheryid": "yourlocalie",
                "supplier_id": "technogas_service_limited_01_4559340"
            }]
        }, {
            "_id": "380345796231168",
            "_order": [4.267223874533893E-16, 2, 709822],
            "when": "2012-12-10 17:51:00 +00:00",
            "country": "ie",
            "status": {
                "status": "active",
                "meta": {
                    "when": "2013-11-06 10:37:07 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "name": {
                "name": "Centraheat",
                "formal_name": "",
                "meta": {
                    "when": "2013-11-01 13:47:08 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "stopwords": "centraheat",
                "stemmed": "centrah",
                "phonetic": "SNTRH"
            },
            "postal_address": {
                "building_number": "",
                "address1": "53 Riverside Drive",
                "address2": "Clonshaugh",
                "address3": "",
                "district": "",
                "town": "Dublin",
                "county": "County Dublin",
                "province": "",
                "postcode": "Dublin 17",
                "address_type": "",
                "do_not_display": false,
                "meta": {
                    "when": "2013-11-01 13:47:08 +00:00",
                    "scope": "public",
                    "confidence": 100
                }
            },
            "geopoint": {
                "longitude": -6.2107801,
                "latitude": 53.3986092,
                "accuracy": 177,
                "wgs84": [53.3986092, -6.2107801],
                "meta": {
                    "when": "2013-11-06 10:37:07 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "geohash": "gc7xf8vmq"
            },
            "categories": [{
                "category_id": "364",
                "category_name": "Plumbers",
                "meta": {
                    "when": "2012-12-10 17:51:02 +00:00",
                    "scope": "public",
                    "confidence": 0
                },
                "gen_id": 380345805029376,
                "stopwords": "plumbers",
                "stemmed": "plumb",
                "phonetic": "PLM"
            }, {
                "category_id": "1775",
                "category_name": "Heating Consultants",
                "meta": {
                    "when": "2013-11-01 13:47:08 +00:00",
                    "scope": "public",
                    "confidence": 100
                },
                "gen_id": 497378213306368,
                "stopwords": "heating consultants",
                "stemmed": "heat consult",
                "phonetic": "HT KNSLT"
            }],
            "lastEditDate": "2013-11-06 10:37:07 +00:00",
            "normalised_locations": {
                "source": "Dublin 17",
                "locations": [{
                    "location_id": "2791",
                    "name": "D17",
                    "resolution": "neighbourhood"
                }, {
                    "location_id": "2969",
                    "name": "Dublin",
                    "resolution": "town"
                }, {
                    "location_id": "2668",
                    "name": "County Dublin",
                    "resolution": "county"
                }, {
                    "location_id": "1734",
                    "name": "Leinster",
                    "resolution": "province"
                }]
            },
            "facets": ["hasPhone", "hasEmployees"],
            "contentScore": 2,
            "suppliers": [{
                "masheryid": "yourlocalie",
                "supplier_id": "centraheat_01_8471773"
            }, {
                "masheryid": "billmoss",
                "supplier_id": "100222"
            }]
        }],
        "search_params": {
            "masheryid": "smudd",
            "language": "en",
            "national": false,
            "page": 1,
            "per_page": 10,
            "country": "ie",
            "debug": false,
            "stale": false,
            "use_cache": true,
            "sort_by_distance": false,
            "search_type": "what",
            "what": "plumber",
            "where": "dublin",
            "latitude": 0,
            "longitude": 0,
            "categories": [{
                "id": "364",
                "order": [7.363044261932373, 2102],
                "fields": {},
                "doc": {
                    "_id": "364",
                    "_rev": "53-df37f0deca91c527f2354b0b02766714",
                    "name": {
                        "en": "Plumbers"
                    },
                    "mappings": [{
                        "type": "sic_2007",
                        "id": "43220",
                        "name": "Plumbing, heat and air-conditioning installation"
                    }, {
                        "type": "legacy_ci",
                        "id": "1325",
                        "name": "Plumbers"
                    }, {
                        "type": "goat",
                        "id": "364",
                        "name": "Plumbers"
                    }, {
                        "type": "jpress",
                        "id": "188",
                        "name": "Plumbing "
                    }, {
                        "type": "sic_87",
                        "id": "1711",
                        "name": "Plumbing, Heating, and Air-Conditioning"
                    }, {
                        "type": "NAICS",
                        "id": "238220",
                        "name": "Plumbing, Heating, and Air-Conditioning Contractors"
                    }, {
                        "type": "nokia",
                        "id": "700-7400-0290",
                        "name": "Misc. Consumer Services"
                    }, {
                        "type": "market_location",
                        "id": "1325",
                        "name": "Plumbers"
                    }, {
                        "type": "bing",
                        "id": "700602",
                        "name": "Plumbers"
                    }, {
                        "type": "yalwa",
                        "id": "60266",
                        "name": "Plumbers"
                    }, {
                        "type": "hibu",
                        "id": "05011",
                        "name": "Plumbers"
                    }, {
                        "type": "hibu",
                        "id": "06810",
                        "name": "Plumbers Merchants"
                    }, {
                        "type": "thomson_local",
                        "id": "597900",
                        "name": "Plumbers"
                    }, {
                        "type": "trinity_mirror",
                        "id": "BC-01072",
                        "name": "Plumbers"
                    }, {
                        "type": "renex",
                        "id": "336",
                        "name": "Plumbing"
                    }],
                    "synonyms": {
                        "en": ["heating", "heating contractor", "Plumber", "plumber", "plumbing", "Plumbing", "plumbing contractor", "central heating", "boiler installations", "boiler replacement", "central heating systems", "corgi plumber", "boiler repair", "bathroom installation", "emergency plumbers", "bathroom", "bathroom fitter", "boiler", "central heating installation", "boiler servicing", "heat", "power flushing", "boiler service", "gas engineers", "plumbing and heating", "blocked drains", "plumbing heating", "plumbing services", "drainage", "local plumber", "leaks", "burst pipes"]
                    }
                }
            }, {
                "id": "1693",
                "order": [0.512627363204956, 916],
                "fields": {},
                "doc": {
                    "_id": "1693",
                    "_rev": "19-5d7ea6e155c99671cb413f49df508f28",
                    "name": {
                        "en": "Gas Installers"
                    },
                    "mappings": [{
                        "type": "legacy_ci",
                        "id": "818",
                        "name": "Gas Installers"
                    }, {
                        "type": "goat",
                        "id": "1693",
                        "name": "Gas Installers"
                    }, {
                        "type": "market_location",
                        "id": "818",
                        "name": "Gas Installers"
                    }, {
                        "type": "bing",
                        "id": "700114",
                        "name": "Gas Companies"
                    }, {
                        "type": "yalwa",
                        "id": "60240",
                        "name": "Gas Engineer"
                    }, {
                        "type": "hibu",
                        "id": "04411",
                        "name": "Gas Installers"
                    }, {
                        "type": "thomson_local",
                        "id": "396000",
                        "name": "Gas Installers"
                    }, {
                        "type": "trinity_mirror",
                        "id": "BC-01250",
                        "name": "Gas Installers"
                    }],
                    "synonyms": {
                        "en": ["Gas Fitter", "Gas Fitting", "Gasfitter", "Gasfitting", "gas installers", "boiler repair", "gas engineers", "plumber"]
                    }
                }
            }, {
                "id": "1405",
                "order": [0.3624822795391083, 2073],
                "fields": {},
                "doc": {
                    "_id": "1405",
                    "_rev": "47-8ae9431f83debfe8c73eff67db791232",
                    "name": {
                        "en": "Drain and Sewer Cleaning and Maintenance"
                    },
                    "mappings": [{
                        "type": "legacy_ci",
                        "id": "559",
                        "name": "Drain Unblocking Equipment"
                    }, {
                        "type": "legacy_ci",
                        "id": "560",
                        "name": "Drains and Sewers"
                    }, {
                        "type": "goat",
                        "id": "1407",
                        "name": "Drain and Sewar Services"
                    }, {
                        "type": "goat",
                        "id": "1405",
                        "name": "Drain "
                    }, {
                        "type": "jpress",
                        "id": "428",
                        "name": "Drain "
                    }, {
                        "type": "sic_87",
                        "id": "1623",
                        "name": "Water, Sewer, Pipeline, and Communications and Power Line Construction"
                    }, {
                        "type": "NAICS",
                        "id": "237110",
                        "name": "Water and Sewer Line and Related Structures Construction"
                    }, {
                        "type": "nokia",
                        "id": "700-7400-0152",
                        "name": "Waste and Sanitary"
                    }, {
                        "type": "market_location",
                        "id": "559",
                        "name": "Drain "
                    }, {
                        "type": "market_location",
                        "id": "560",
                        "name": "Drain and Sewar Services"
                    }, {
                        "type": "bill_moss",
                        "id": "269",
                        "name": "Drain "
                    }, {
                        "type": "bill_moss",
                        "id": "1022",
                        "name": "Drain/Sewer Cleaning"
                    }, {
                        "type": "bing",
                        "id": "701220",
                        "name": "Sewer Contractor"
                    }, {
                        "type": "yalwa",
                        "id": "60229",
                        "name": "Drains/Drainage"
                    }, {
                        "type": "thomson_local",
                        "id": "277000",
                        "name": "Drain "
                    }, {
                        "type": "trinity_mirror",
                        "id": "BC-02012",
                        "name": "Drain"
                    }, {
                        "type": "trinity_mirror",
                        "id": "BC-01241",
                        "name": "Drain and Sewer Services"
                    }, {
                        "type": "renex",
                        "id": "337",
                        "name": "Drain Clearing"
                    }],
                    "synonyms": {
                        "en": ["drain unblocking equipment", "Drain and Sewer Cleaning and Maintenance", "Drain", "drain cleaning", "drain clearing", "drain maintenance", "drain unblocking", "sewer", "sewer clearing", "sewer maintenance", "sewer unblocking", "drains and sewers", "plumber", "blocked drains", "all work guaranteed", "Rapid Response To All Areas", "no call out charge", "24hr Emergency Plumbing Service", "drainage", "drain", "cctv surveys", "unblock drain", "drain repairs", "drain clearance", "cctv drain surveys", "high pressure water jetting", "emergency plumbers", "blocked manhole"]
                    }
                }
            }, {
                "id": "1142",
                "order": [0.32039210200309753, 1505],
                "fields": {},
                "doc": {
                    "_id": "1142",
                    "_rev": "33-bf042ab4d4ba769f9576be15de7a6beb",
                    "name": {
                        "en": "Central Heating Installation and Servicing"
                    },
                    "mappings": [{
                        "type": "legacy_ci",
                        "id": "320",
                        "name": "Central Heating Engineers"
                    }, {
                        "type": "legacy_ci",
                        "id": "5716",
                        "name": "Central Heating Installations"
                    }, {
                        "type": "legacy_ci",
                        "id": "5717",
                        "name": "Central Heating Servicing"
                    }, {
                        "type": "goat",
                        "id": "1142",
                        "name": "Central Heating Systems (Installation and Servicing)"
                    }, {
                        "type": "market_location",
                        "id": "320",
                        "name": "Central Heating Systems (Installation and Servicing)"
                    }, {
                        "type": "bing",
                        "id": "700570",
                        "name": "Heating Services"
                    }, {
                        "type": "yalwa",
                        "id": "60905",
                        "name": "Central Heating Services"
                    }, {
                        "type": "thomson_local",
                        "id": "167100",
                        "name": "Central Heating - Installation "
                    }, {
                        "type": "trinity_mirror",
                        "id": "BC-01234",
                        "name": "Central Heating Systems (Installation and Servicing)"
                    }, {
                        "type": "trinity_mirror",
                        "id": "BC-14262",
                        "name": "Heating Contractors"
                    }, {
                        "type": "trinity_mirror",
                        "id": "BC-14263",
                        "name": "Heating Equipment Sales and Service"
                    }, {
                        "type": "trinity_mirror",
                        "id": "BC-14264",
                        "name": "Heating System Consultants"
                    }],
                    "synonyms": {
                        "en": ["central heating systems", "heating systems", "central heating engineers", "plumber", "central heating", "boiler repair", "boiler installations", "boiler", "boiler servicing", "central heating installation", "gas engineers", "bathroom installation", "heat", "boiler service", "power flushing", "bathroom", "boiler replacement", "combi boilers"]
                    }
                }
            }, {
                "id": "734",
                "order": [0.32039210200309753, 2199],
                "fields": {},
                "doc": {
                    "_id": "734",
                    "_rev": "30-9cda388f3c630953decf1768849f49c1",
                    "name": {
                        "en": "Boilers Servicing and Repairs"
                    },
                    "mappings": [{
                        "type": "legacy_ci",
                        "id": "166",
                        "name": "Boilers Servicing and Repairs"
                    }, {
                        "type": "goat",
                        "id": "734",
                        "name": "Boilers Servicing and Repairs"
                    }, {
                        "type": "market_location",
                        "id": "166",
                        "name": "Boilers Servicing and Repairs"
                    }, {
                        "type": "bill_moss",
                        "id": "85",
                        "name": "Boilers Maintenance"
                    }, {
                        "type": "bing",
                        "id": "710875",
                        "name": "Boiler Repair &amp; Service"
                    }, {
                        "type": "yalwa",
                        "id": "60266",
                        "name": "Plumbers"
                    }, {
                        "type": "thomson_local",
                        "id": "093210",
                        "name": "Boilers - Servicing, Replacements "
                    }, {
                        "type": "trinity_mirror",
                        "id": "BC-01231",
                        "name": "Boilers Servicing and Repairs"
                    }],
                    "synonyms": {
                        "en": ["Boiler Maintenance", "Boiler Maker", "boiler repair", "Boiler Service", "plumber", "boiler servicing", "boiler installations", "central heating", "heat", "boiler", "boiler breakdown", "gas engineers", "power flushing", "boiler cleaning servicing", "central heating repair", "gas safety certificates", "worcester bosch boiler repairs"]
                    }
                }
            }, {
                "id": "1775",
                "order": [0.256313681602478, 2082],
                "fields": {},
                "doc": {
                    "_id": "1775",
                    "_rev": "47-0675e8d54dc13ddead0650fbc02df6ca",
                    "name": {
                        "en": "Heating Consultants"
                    },
                    "mappings": [{
                        "type": "legacy_ci",
                        "id": "892",
                        "name": "Heating Contractors"
                    }, {
                        "type": "legacy_ci",
                        "id": "893",
                        "name": "Under Floor Heating"
                    }, {
                        "type": "legacy_ci",
                        "id": "895",
                        "name": "Heating Consultants"
                    }, {
                        "type": "goat",
                        "id": "1776",
                        "name": "Heating Contractors - Under Floor"
                    }, {
                        "type": "goat",
                        "id": "1778",
                        "name": "Heating System Consultants"
                    }, {
                        "type": "goat",
                        "id": "1775",
                        "name": "Heating Contractors"
                    }, {
                        "type": "market_location",
                        "id": "892",
                        "name": "Heating Contractors"
                    }, {
                        "type": "market_location",
                        "id": "893",
                        "name": "Heating Contractors - Under Floor"
                    }, {
                        "type": "market_location",
                        "id": "895",
                        "name": "Heating System Consultants"
                    }, {
                        "type": "bill_moss",
                        "id": "445",
                        "name": "Heating "
                    }, {
                        "type": "bill_moss",
                        "id": "446",
                        "name": "Heating Contractors - Industrial"
                    }, {
                        "type": "bill_moss",
                        "id": "525",
                        "name": "Logging Camps "
                    }, {
                        "type": "bill_moss",
                        "id": "1021",
                        "name": "Geothermal Heat Pumps"
                    }, {
                        "type": "bing",
                        "id": "700570",
                        "name": "Heating Services"
                    }, {
                        "type": "yalwa",
                        "id": "11009",
                        "name": "Energy Consultants"
                    }, {
                        "type": "thomson_local",
                        "id": "427000",
                        "name": "Heating Consultants"
                    }, {
                        "type": "trinity_mirror",
                        "id": "BC-02245",
                        "name": "Heating Contractors - Under Floor"
                    }, {
                        "type": "renex",
                        "id": "299",
                        "name": "Heating and Ventilation"
                    }],
                    "synonyms": {
                        "en": ["heating", "heating contractor", "Heating Consultants", "underfloor heating", "underfloor heating contractor", "underfloor heating systems", "Heating Consultants", "boiler repair", "commercial heating", "industrial heating", "heating maintenance", "factory heating", "plumber", "central heating", "heat", "heating installation", "heating repair", "engine heaters", "gas engineers", "heating contractors", "boiler servicing", "boiler installations"]
                    }
                }
            }],
            "locations": [{
                "_id": "2969",
                "_rev": "9-85e6ee194b5bf8cd7a049b53d01a472c",
                "name": "Dublin",
                "formal_name": "Dublin,County Dublin",
                "latitude": 53.3440666923077,
                "longitude": -6.26458169230769,
                "resolution": "town",
                "country": "ie",
                "population": 111627,
                "description": "Dublin is the capital and most populous city of Ireland. The English name for the city is derived from the Irish name Dubhlinn, meaning &quot;black pool&quot;. Dublin is situated near the midpoint of Ireland's east coast, at the mouth of the River Liffey and the centre of the Dublin Region. Originally founded as a Viking settlement, it evolved into the Kingdom of Dublin and became the island's principal city following the Norman invasion. The city expanded rapidly from the 17th century; it was briefly the second largest city in the British Empire and the fifth largest in Europe. Dublin entered a period of stagnation following the Act of Union of 1800, but it remained the economic centre for most of the island. Following the partition of Ireland in 1922, the new parliament, the Oireachtas, was located in Leinster House. Dublin became the capital of the Irish Free State and later the Republic of Ireland. Similar to the cities of Cork, Limerick, Galway, and Waterford-Dublin is administered separately from its respective County with its own City Council. The city is listed by the Globalization and World Cities Research Network (GaWC) as a global city, with a ranking of &quot;Alpha-&quot;, placing Dublin among the top 30 cities in the world. It is a historical and contemporary cultural centre for the country, as well as a modern centre of education, the arts, administration, economy, and industry.",
                "timezone": "Europe/Dublin",
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2783",
                "_rev": "7-6afac7f5c631952776c937b9dc739fcc",
                "name": "D1",
                "formal_name": "D1",
                "latitude": 53.3505245454546,
                "longitude": -6.25805272727273,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2784",
                "_rev": "7-b679e3a2a00d4f9f9a9e6be2984aa413",
                "name": "D10",
                "formal_name": "D10",
                "latitude": 53.3302,
                "longitude": -6.29876,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2801",
                "_rev": "7-3de1593181d469230dcb67d3175108ef",
                "name": "D6W",
                "formal_name": "D6W",
                "latitude": 53.3128933333333,
                "longitude": -6.28277333333333,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2792",
                "_rev": "7-cc52d956bca86ad586af1cfeb1dc2d9a",
                "name": "D18",
                "formal_name": "D18",
                "latitude": 53.2855933333333,
                "longitude": -6.22794444444444,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2799",
                "_rev": "7-760dbdaa20b4a7fd097159476a03879f",
                "name": "D5",
                "formal_name": "D5",
                "latitude": 53.3859566666667,
                "longitude": -6.19664666666667,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2790",
                "_rev": "7-cfdb61e67c0b26de28d63c062bd64a19",
                "name": "D16",
                "formal_name": "D16",
                "latitude": 53.3145225,
                "longitude": -6.262185,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2795",
                "_rev": "7-2c158b98816b3c6ae5ac3e804cf8b739",
                "name": "D22",
                "formal_name": "D22",
                "latitude": 53.3342533333333,
                "longitude": -6.34153666666667,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2796",
                "_rev": "7-ce7814c8243ef3b186c0de6ca9ec1282",
                "name": "D24",
                "formal_name": "D24",
                "latitude": 53.312802,
                "longitude": -6.31134,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2793",
                "_rev": "7-e756cb820d2818afe327b9ab2256c764",
                "name": "D2",
                "formal_name": "D2",
                "latitude": 53.33873,
                "longitude": -6.25525875,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2794",
                "_rev": "7-c53611b2c9ac278b9a47a4ae198c67fa",
                "name": "D20",
                "formal_name": "D20",
                "latitude": 53.32207,
                "longitude": -6.377095,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2798",
                "_rev": "7-3bdf5057027ec325189ca813cfc08787",
                "name": "D4",
                "formal_name": "D4",
                "latitude": 53.32926,
                "longitude": -6.22340857142857,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2803",
                "_rev": "7-0ee8fc29cbc5f2fbdb0947b9c05fef89",
                "name": "D8",
                "formal_name": "D8",
                "latitude": 53.33574875,
                "longitude": -6.2868975,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2802",
                "_rev": "7-ff361995465bd8569904278fb383218f",
                "name": "D7",
                "formal_name": "D7",
                "latitude": 53.3579225,
                "longitude": -6.289015,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2788",
                "_rev": "7-34bf46e24b43592aee0355ccafd5117a",
                "name": "D14",
                "formal_name": "D14",
                "latitude": 53.3207383333333,
                "longitude": -6.24392166666667,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2785",
                "_rev": "7-80df8e61eff9331441addc4056c7216d",
                "name": "D11",
                "formal_name": "D11",
                "latitude": 53.38356125,
                "longitude": -6.2902575,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2789",
                "_rev": "7-dde9843eed0d86d062c269e542f87960",
                "name": "D15",
                "formal_name": "D15",
                "latitude": 53.3725583333333,
                "longitude": -6.32029166666667,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2791",
                "_rev": "7-d90f6083a39c25936636dc249b90236a",
                "name": "D17",
                "formal_name": "D17",
                "latitude": 53.4064466666667,
                "longitude": -6.282735,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2797",
                "_rev": "7-b6d472bbe608097de05e479c0f364b13",
                "name": "D3",
                "formal_name": "D3",
                "latitude": 53.3619728571429,
                "longitude": -6.22846142857143,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2800",
                "_rev": "7-e955ad778277cc7e421aaabba1f7427e",
                "name": "D6",
                "formal_name": "D6",
                "latitude": 53.314586,
                "longitude": -6.258876,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2804",
                "_rev": "7-9ccfce1b94db1b278ac3100dd02991cc",
                "name": "D9",
                "formal_name": "D9",
                "latitude": 53.3744466666667,
                "longitude": -6.25138,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2786",
                "_rev": "7-6fd346c30571be7c11e725f85ea64fdb",
                "name": "D12",
                "formal_name": "D12",
                "latitude": 53.33039,
                "longitude": -6.32241,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2787",
                "_rev": "7-573c34ff0d68383eeea532a0fb107614",
                "name": "D13",
                "formal_name": "D13",
                "latitude": 53.37045,
                "longitude": -6.19829333333333,
                "resolution": "neighbourhood",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_town": ["2969"],
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2668",
                "_rev": "8-15983895ae0f69d5905963c6c640e366",
                "name": "County Dublin",
                "formal_name": "County Dublin",
                "latitude": 53.3538121182266,
                "longitude": -6.25373064039409,
                "resolution": "county",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }, {
                "_id": "2970",
                "_rev": "7-df005e59d06071e29ba360cd61a8a541",
                "name": "Dublin Airport",
                "formal_name": "Dublin Airport,County Dublin",
                "latitude": 53.42608,
                "longitude": -6.2389,
                "resolution": "town",
                "country": "ie",
                "population": 0,
                "description": "",
                "timezone": "Europe/Dublin",
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            }],
            "location": {
                "_id": "2969",
                "_rev": "9-85e6ee194b5bf8cd7a049b53d01a472c",
                "name": "Dublin",
                "formal_name": "Dublin,County Dublin",
                "latitude": 53.3440666923077,
                "longitude": -6.26458169230769,
                "resolution": "town",
                "country": "ie",
                "population": 111627,
                "description": "Dublin is the capital and most populous city of Ireland. The English name for the city is derived from the Irish name Dubhlinn, meaning &quot;black pool&quot;. Dublin is situated near the midpoint of Ireland's east coast, at the mouth of the River Liffey and the centre of the Dublin Region. Originally founded as a Viking settlement, it evolved into the Kingdom of Dublin and became the island's principal city following the Norman invasion. The city expanded rapidly from the 17th century; it was briefly the second largest city in the British Empire and the fifth largest in Europe. Dublin entered a period of stagnation following the Act of Union of 1800, but it remained the economic centre for most of the island. Following the partition of Ireland in 1922, the new parliament, the Oireachtas, was located in Leinster House. Dublin became the capital of the Irish Free State and later the Republic of Ireland. Similar to the cities of Cork, Limerick, Galway, and Waterford-Dublin is administered separately from its respective County with its own City Council. The city is listed by the Globalization and World Cities Research Network (GaWC) as a global city, with a ranking of &quot;Alpha-&quot;, placing Dublin among the top 30 cities in the world. It is a historical and contemporary cultural centre for the country, as well as a modern centre of education, the arts, administration, economy, and industry.",
                "timezone": "Europe/Dublin",
                "parent_county": ["2668"],
                "parent_province": ["1734"],
                "language": "en",
                "type": "postal"
            },
            "location_lookup": {
                "matches": [{
                    "_id": "2969",
                    "_rev": "9-85e6ee194b5bf8cd7a049b53d01a472c",
                    "name": "Dublin",
                    "formal_name": "Dublin,County Dublin",
                    "latitude": 53.3440666923077,
                    "longitude": -6.26458169230769,
                    "resolution": "town",
                    "country": "ie",
                    "population": 111627,
                    "description": "Dublin is the capital and most populous city of Ireland. The English name for the city is derived from the Irish name Dubhlinn, meaning &quot;black pool&quot;. Dublin is situated near the midpoint of Ireland's east coast, at the mouth of the River Liffey and the centre of the Dublin Region. Originally founded as a Viking settlement, it evolved into the Kingdom of Dublin and became the island's principal city following the Norman invasion. The city expanded rapidly from the 17th century; it was briefly the second largest city in the British Empire and the fifth largest in Europe. Dublin entered a period of stagnation following the Act of Union of 1800, but it remained the economic centre for most of the island. Following the partition of Ireland in 1922, the new parliament, the Oireachtas, was located in Leinster House. Dublin became the capital of the Irish Free State and later the Republic of Ireland. Similar to the cities of Cork, Limerick, Galway, and Waterford-Dublin is administered separately from its respective County with its own City Council. The city is listed by the Globalization and World Cities Research Network (GaWC) as a global city, with a ranking of &quot;Alpha-&quot;, placing Dublin among the top 30 cities in the world. It is a historical and contemporary cultural centre for the country, as well as a modern centre of education, the arts, administration, economy, and industry.",
                    "timezone": "Europe/Dublin",
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2783",
                    "_rev": "7-6afac7f5c631952776c937b9dc739fcc",
                    "name": "D1",
                    "formal_name": "D1",
                    "latitude": 53.3505245454546,
                    "longitude": -6.25805272727273,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2784",
                    "_rev": "7-b679e3a2a00d4f9f9a9e6be2984aa413",
                    "name": "D10",
                    "formal_name": "D10",
                    "latitude": 53.3302,
                    "longitude": -6.29876,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2801",
                    "_rev": "7-3de1593181d469230dcb67d3175108ef",
                    "name": "D6W",
                    "formal_name": "D6W",
                    "latitude": 53.3128933333333,
                    "longitude": -6.28277333333333,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2792",
                    "_rev": "7-cc52d956bca86ad586af1cfeb1dc2d9a",
                    "name": "D18",
                    "formal_name": "D18",
                    "latitude": 53.2855933333333,
                    "longitude": -6.22794444444444,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2799",
                    "_rev": "7-760dbdaa20b4a7fd097159476a03879f",
                    "name": "D5",
                    "formal_name": "D5",
                    "latitude": 53.3859566666667,
                    "longitude": -6.19664666666667,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2790",
                    "_rev": "7-cfdb61e67c0b26de28d63c062bd64a19",
                    "name": "D16",
                    "formal_name": "D16",
                    "latitude": 53.3145225,
                    "longitude": -6.262185,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2795",
                    "_rev": "7-2c158b98816b3c6ae5ac3e804cf8b739",
                    "name": "D22",
                    "formal_name": "D22",
                    "latitude": 53.3342533333333,
                    "longitude": -6.34153666666667,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2796",
                    "_rev": "7-ce7814c8243ef3b186c0de6ca9ec1282",
                    "name": "D24",
                    "formal_name": "D24",
                    "latitude": 53.312802,
                    "longitude": -6.31134,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2793",
                    "_rev": "7-e756cb820d2818afe327b9ab2256c764",
                    "name": "D2",
                    "formal_name": "D2",
                    "latitude": 53.33873,
                    "longitude": -6.25525875,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2794",
                    "_rev": "7-c53611b2c9ac278b9a47a4ae198c67fa",
                    "name": "D20",
                    "formal_name": "D20",
                    "latitude": 53.32207,
                    "longitude": -6.377095,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2798",
                    "_rev": "7-3bdf5057027ec325189ca813cfc08787",
                    "name": "D4",
                    "formal_name": "D4",
                    "latitude": 53.32926,
                    "longitude": -6.22340857142857,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2803",
                    "_rev": "7-0ee8fc29cbc5f2fbdb0947b9c05fef89",
                    "name": "D8",
                    "formal_name": "D8",
                    "latitude": 53.33574875,
                    "longitude": -6.2868975,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2802",
                    "_rev": "7-ff361995465bd8569904278fb383218f",
                    "name": "D7",
                    "formal_name": "D7",
                    "latitude": 53.3579225,
                    "longitude": -6.289015,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2788",
                    "_rev": "7-34bf46e24b43592aee0355ccafd5117a",
                    "name": "D14",
                    "formal_name": "D14",
                    "latitude": 53.3207383333333,
                    "longitude": -6.24392166666667,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2785",
                    "_rev": "7-80df8e61eff9331441addc4056c7216d",
                    "name": "D11",
                    "formal_name": "D11",
                    "latitude": 53.38356125,
                    "longitude": -6.2902575,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2789",
                    "_rev": "7-dde9843eed0d86d062c269e542f87960",
                    "name": "D15",
                    "formal_name": "D15",
                    "latitude": 53.3725583333333,
                    "longitude": -6.32029166666667,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2791",
                    "_rev": "7-d90f6083a39c25936636dc249b90236a",
                    "name": "D17",
                    "formal_name": "D17",
                    "latitude": 53.4064466666667,
                    "longitude": -6.282735,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2797",
                    "_rev": "7-b6d472bbe608097de05e479c0f364b13",
                    "name": "D3",
                    "formal_name": "D3",
                    "latitude": 53.3619728571429,
                    "longitude": -6.22846142857143,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2800",
                    "_rev": "7-e955ad778277cc7e421aaabba1f7427e",
                    "name": "D6",
                    "formal_name": "D6",
                    "latitude": 53.314586,
                    "longitude": -6.258876,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2804",
                    "_rev": "7-9ccfce1b94db1b278ac3100dd02991cc",
                    "name": "D9",
                    "formal_name": "D9",
                    "latitude": 53.3744466666667,
                    "longitude": -6.25138,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2786",
                    "_rev": "7-6fd346c30571be7c11e725f85ea64fdb",
                    "name": "D12",
                    "formal_name": "D12",
                    "latitude": 53.33039,
                    "longitude": -6.32241,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2787",
                    "_rev": "7-573c34ff0d68383eeea532a0fb107614",
                    "name": "D13",
                    "formal_name": "D13",
                    "latitude": 53.37045,
                    "longitude": -6.19829333333333,
                    "resolution": "neighbourhood",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_town": ["2969"],
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2668",
                    "_rev": "8-15983895ae0f69d5905963c6c640e366",
                    "name": "County Dublin",
                    "formal_name": "County Dublin",
                    "latitude": 53.3538121182266,
                    "longitude": -6.25373064039409,
                    "resolution": "county",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2970",
                    "_rev": "7-df005e59d06071e29ba360cd61a8a541",
                    "name": "Dublin Airport",
                    "formal_name": "Dublin Airport,County Dublin",
                    "latitude": 53.42608,
                    "longitude": -6.2389,
                    "resolution": "town",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }],
                "ambiguous": true,
                "level": 2,
                "raw_match": [{
                    "_id": "2969",
                    "_rev": "9-85e6ee194b5bf8cd7a049b53d01a472c",
                    "name": "Dublin",
                    "formal_name": "Dublin,County Dublin",
                    "latitude": 53.3440666923077,
                    "longitude": -6.26458169230769,
                    "resolution": "town",
                    "country": "ie",
                    "population": 111627,
                    "description": "Dublin is the capital and most populous city of Ireland. The English name for the city is derived from the Irish name Dubhlinn, meaning &quot;black pool&quot;. Dublin is situated near the midpoint of Ireland's east coast, at the mouth of the River Liffey and the centre of the Dublin Region. Originally founded as a Viking settlement, it evolved into the Kingdom of Dublin and became the island's principal city following the Norman invasion. The city expanded rapidly from the 17th century; it was briefly the second largest city in the British Empire and the fifth largest in Europe. Dublin entered a period of stagnation following the Act of Union of 1800, but it remained the economic centre for most of the island. Following the partition of Ireland in 1922, the new parliament, the Oireachtas, was located in Leinster House. Dublin became the capital of the Irish Free State and later the Republic of Ireland. Similar to the cities of Cork, Limerick, Galway, and Waterford-Dublin is administered separately from its respective County with its own City Council. The city is listed by the Globalization and World Cities Research Network (GaWC) as a global city, with a ranking of &quot;Alpha-&quot;, placing Dublin among the top 30 cities in the world. It is a historical and contemporary cultural centre for the country, as well as a modern centre of education, the arts, administration, economy, and industry.",
                    "timezone": "Europe/Dublin",
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41adab8d8",
                    "_rev": "1-ef05690882100b15c14ddf9d6efa2d65",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 1",
                    "formal_name": "Dublin 1",
                    "latitude": 53.35052455,
                    "longitude": -6.258052727,
                    "searchable_id": "2783"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41adab8ea",
                    "_rev": "1-f283e600762291e43ef46529ffe1e27c",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 10",
                    "formal_name": "Dublin 10",
                    "latitude": 53.3302,
                    "longitude": -6.29876,
                    "searchable_id": "2784"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41ada8c82",
                    "_rev": "1-3aa068b763c21965c8c400206c64f2fd",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 6W",
                    "formal_name": "Dublin 6W",
                    "latitude": 53.31289333,
                    "longitude": -6.282773333,
                    "searchable_id": "2801"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41ada52a8",
                    "_rev": "1-60b26a6d113e52d9587a560044306c5a",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 18",
                    "formal_name": "Dublin 18",
                    "latitude": 53.28559333,
                    "longitude": -6.227944444,
                    "searchable_id": "2792"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41ada7881",
                    "_rev": "1-d358919f7cb756793bd5b21257c0a6ce",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 5",
                    "formal_name": "Dublin 5",
                    "latitude": 53.38595667,
                    "longitude": -6.196646667,
                    "searchable_id": "2799"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41adaf7bd",
                    "_rev": "1-6c99c6927565ed754f81f7ab3cc192a3",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 16",
                    "formal_name": "Dublin 16",
                    "latitude": 53.3145225,
                    "longitude": -6.262185,
                    "searchable_id": "2790"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41ada60d2",
                    "_rev": "1-552324d122b44fcdc44482f152e1c843",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 22",
                    "formal_name": "Dublin 22",
                    "latitude": 53.33425333,
                    "longitude": -6.341536667,
                    "searchable_id": "2795"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41ada6471",
                    "_rev": "1-2867207e035a909e67b723048bcb5eb1",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 24",
                    "formal_name": "Dublin 24",
                    "latitude": 53.312802,
                    "longitude": -6.31134,
                    "searchable_id": "2796"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41ada56e7",
                    "_rev": "1-2f1ab156b0113c9691e4a57408696869",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 2",
                    "formal_name": "Dublin 2",
                    "latitude": 53.33873,
                    "longitude": -6.25525875,
                    "searchable_id": "2793"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41ada5a6d",
                    "_rev": "1-1ae3d8c4c8131d1d3e072b8b6833f8c9",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 20",
                    "formal_name": "Dublin 20",
                    "latitude": 53.32207,
                    "longitude": -6.377095,
                    "searchable_id": "2794"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41ada6d2e",
                    "_rev": "1-8ae74e2a43092601badb7b98653ca47d",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 4",
                    "formal_name": "Dublin 4",
                    "latitude": 53.32926,
                    "longitude": -6.223408571,
                    "searchable_id": "2798"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41adaa2b7",
                    "_rev": "1-0f9df41ab9d34fee29fe7e87beec65c9",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 8",
                    "formal_name": "Dublin 8",
                    "latitude": 53.33574875,
                    "longitude": -6.2868975,
                    "searchable_id": "2803"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41ada9508",
                    "_rev": "1-8a5c0ce9c3e96e0401aa5ba931520b2e",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 7",
                    "formal_name": "Dublin 7",
                    "latitude": 53.3579225,
                    "longitude": -6.289015,
                    "searchable_id": "2802"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41adae327",
                    "_rev": "1-a6274903b55f1a0d771647e531041aad",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 14",
                    "formal_name": "Dublin 14",
                    "latitude": 53.32073833,
                    "longitude": -6.243921667,
                    "searchable_id": "2788"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41adac659",
                    "_rev": "1-4d747c0cc002d66dcc13418ec97f3c53",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 11",
                    "formal_name": "Dublin 11",
                    "latitude": 53.38356125,
                    "longitude": -6.2902575,
                    "searchable_id": "2785"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41adaee60",
                    "_rev": "1-32eceb6c0e8451c0de5e449daa7eb5da",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 15",
                    "formal_name": "Dublin 15",
                    "latitude": 53.37255833,
                    "longitude": -6.320291667,
                    "searchable_id": "2789"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41adb03ca",
                    "_rev": "1-9f18ddc678b16afd5b123b41fd4c4647",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 17",
                    "formal_name": "Dublin 17",
                    "latitude": 53.40644667,
                    "longitude": -6.282735,
                    "searchable_id": "2791"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41ada678e",
                    "_rev": "1-33d13d015b19a9f648a2c34f938cf6d6",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 3",
                    "formal_name": "Dublin 3",
                    "latitude": 53.36197286,
                    "longitude": -6.228461429,
                    "searchable_id": "2797"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41ada87a7",
                    "_rev": "1-70f8b9107d424df57428dae672ea19e9",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 6",
                    "formal_name": "Dublin 6",
                    "latitude": 53.314586,
                    "longitude": -6.258876,
                    "searchable_id": "2800"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41adab05c",
                    "_rev": "1-6872fa1204754a1db1cb821f71d14d1f",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 9",
                    "formal_name": "Dublin 9",
                    "latitude": 53.37444667,
                    "longitude": -6.25138,
                    "searchable_id": "2804"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41adad1c0",
                    "_rev": "1-9e657c8a649f1f2204adfa82cfac6a2a",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 12",
                    "formal_name": "Dublin 12",
                    "latitude": 53.33039,
                    "longitude": -6.32241,
                    "searchable_id": "2786"
                }, {
                    "_id": "d92d7cd3284c255d51f317c41adadba1",
                    "_rev": "1-1d42d2c7b9d51f703d279552d5450e7b",
                    "type": "synonym",
                    "country": "ie",
                    "language": "en",
                    "name": "Dublin 13",
                    "formal_name": "Dublin 13",
                    "latitude": 53.37045,
                    "longitude": -6.198293333,
                    "searchable_id": "2787"
                }, {
                    "_id": "2668",
                    "_rev": "8-15983895ae0f69d5905963c6c640e366",
                    "name": "County Dublin",
                    "formal_name": "County Dublin",
                    "latitude": 53.3538121182266,
                    "longitude": -6.25373064039409,
                    "resolution": "county",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }, {
                    "_id": "2970",
                    "_rev": "7-df005e59d06071e29ba360cd61a8a541",
                    "name": "Dublin Airport",
                    "formal_name": "Dublin Airport,County Dublin",
                    "latitude": 53.42608,
                    "longitude": -6.2389,
                    "resolution": "town",
                    "country": "ie",
                    "population": 0,
                    "description": "",
                    "timezone": "Europe/Dublin",
                    "parent_county": ["2668"],
                    "parent_province": ["1734"],
                    "language": "en",
                    "type": "postal"
                }],
                "searchable_location_ids": ["2969", "2783", "2784", "2801", "2792", "2799", "2790", "2795", "2796", "2793", "2794", "2798", "2803", "2802", "2788", "2785", "2789", "2791", "2797", "2800", "2804", "2786", "2787", "2668", "2970"],
                "canonical": null,
                "from_cache": true
            },
            "ambiguous": true,
            "canonical_location": "Dublin,County Dublin",
            "alternatives": ["D1", "D10", "D6W", "D18", "D5", "D16", "D22", "D24", "D2", "D20", "D4", "D8", "D7", "D14", "D11", "D15", "D17", "D3", "D6", "D9", "D12", "D13", "County Dublin", "Dublin Airport,County Dublin"],
            "sort": "[\"-\",\"-contentScore\"]"
        }
    }
}

EOF;


$test_entity = <<<EOF
{
    "success": true,
    "msg": "ok",
    "data": {
        "_id": "379236608286720",
        "_rev": "529-5f6d78b4122a62b70a1244d759e44922",
        "when": "2012-12-07 14:37:42 +00:00",
        "country": "ie",
        "status": {
            "status": "active",
            "meta": {
                "source": [],
                "confidence": 100
            }
        },
        "tags": [{
            "tag": "fireplace construction",
            "language": "en",
            "meta": {
                "source": [],
                "confidence": 100
            },
            "stopwords": "fireplace construction",
            "stemmed": "fireplac construct",
            "phonetic": "FRPLK KNSTRKT",
            "gen_id": 392603277185024
        }, {
            "tag": "fireplace installation",
            "language": "en",
            "meta": {
                "source": [],
                "confidence": 100
            },
            "stopwords": "fireplace installation",
            "stemmed": "fireplac instal",
            "phonetic": "FRPLK NSTL",
            "gen_id": 392603277185025
        }, {
            "tag": "gas equipment",
            "language": "en",
            "meta": {
                "source": [],
                "confidence": 100
            },
            "stopwords": "gas equipment",
            "stemmed": "gas equip",
            "phonetic": "KS KP",
            "gen_id": 392603277185026
        }, {
            "tag": "gas log fire",
            "language": "en",
            "meta": {
                "source": [],
                "confidence": 100
            },
            "stopwords": "gas log fire",
            "stemmed": "gas log fir",
            "phonetic": "KS LK FR",
            "gen_id": 392603277185027
        }, {
            "tag": "heating",
            "language": "en",
            "meta": {
                "source": [],
                "confidence": 100
            },
            "stopwords": "heating",
            "stemmed": "heat",
            "phonetic": "HT",
            "gen_id": 392603277185028
        }],
        "name": {
            "name": "The Gas Man",
            "formal_name": "The Gas Man",
            "meta": {
                "source": [],
                "confidence": 100
            },
            "stopwords": "the gas man",
            "stemmed": "gas man",
            "phonetic": "KS MN"
        },
        "postal_address": {
            "building_number": "",
            "address1": "28 Fassaugh Avenue",
            "address2": "Cabra",
            "address3": "",
            "district": "",
            "town": "Dublin",
            "county": "County Dublin",
            "province": "",
            "postcode": "Dublin 7",
            "address_type": "",
            "do_not_display": false,
            "meta": {
                "source": [],
                "confidence": 100
            }
        },
        "geopoint": {
            "longitude": -6.2932401,
            "latitude": 53.366909,
            "accuracy": 177,
            "wgs84": [53.366909, -6.2932401],
            "meta": {
                "source": [],
                "confidence": 100
            },
            "geohash": "gc7x8g1ku"
        },
        "faxes": [{
            "number": "01 8684033",
            "description": "",
            "meta": {
                "source": [],
                "confidence": 0
            },
            "gen_id": 447891994583040,
            "processed": "018684033",
            "area_code": "1",
            "e164_number": "+35318684033",
            "international_number": "+353 1 868 4033",
            "national_number": "(01) 868 4033",
            "national_number_2": "01 868 4033",
            "rfc3966_number": "+353-1-868-4033",
            "number_type": "fixed_line",
            "is_valid": true
        }],
        "categories": [{
            "category_id": "1693",
            "category_name": "Gas Installers",
            "meta": {
                "source": [],
                "confidence": 0
            },
            "gen_id": 447891994501120,
            "stopwords": "gas installers",
            "stemmed": "gas instal",
            "phonetic": "KS NSTL"
        }, {
            "category_id": "734",
            "category_name": "Boilers Servicing and Repairs",
            "meta": {
                "source": [],
                "confidence": 100
            },
            "gen_id": 447891994509313,
            "stopwords": "boilers servicing and repairs",
            "stemmed": "boil serv repair",
            "phonetic": "BL SRF RPR"
        }],
        "lastEditDate": "2013-06-19 14:37:10 +00:00",
        "emails": [{
            "email_description": "",
            "meta": {
                "source": [],
                "confidence": 100
            },
            "gen_id": 447891994599426,
            "dns_verified": true,
            "dns_verified_ts": 1443341164
        }],
        "last_painted": 1443341165,
        "normalised_locations": {
            "source": "Dublin 7",
            "locations": [{
                "location_id": "2802",
                "name": "D7",
                "resolution": "neighbourhood"
            }, {
                "location_id": "2969",
                "name": "Dublin",
                "resolution": "town"
            }, {
                "location_id": "2668",
                "name": "County Dublin",
                "resolution": "county"
            }, {
                "location_id": "1734",
                "name": "Leinster",
                "resolution": "province"
            }]
        },
        "facets": ["hasPhone", "hasEmail", "hasEmployees"],
        "contentScore": 3
    }
}        
        

EOF;


