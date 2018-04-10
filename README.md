# Check MOT

## A simple PHP wrapper around the DVLA MOT history API

### Installation
`composer require djam90/check-mot`

### Usage
        <?php
        
        $key = "your_api_key";
        $api = new Djam90\CheckMot\Api($key);

        $history = $api->getMotHistory("reg_number_here");